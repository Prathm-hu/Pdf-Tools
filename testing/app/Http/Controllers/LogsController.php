<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Log;
use Carbon\Carbon;

class LogsController extends Controller
{
    public function track(Request $request)
    {
        $ip = $request->server('REMOTE_ADDR');
        $userAgent = $request->server('HTTP_USER_AGENT');

        $browser = $this->detectBrowser($userAgent);
        $device = $this->extractDeviceInfo($userAgent);
        $location = $request->server('GEOIP_CITY') ?? $request->server('GEOIP_COUNTRY_NAME') ?? 'Unknown';

        $alreadyLogged = Log::where('ip', $ip)
            ->whereDate('created_at', Carbon::today())
            ->exists();

        if (!$alreadyLogged) {
            Log::create([
                'ip' => $ip,
                'browser' => $browser,
                'location' => $location,
                'device' => $device,
            ]);

            $logLine = "[" . now() . "] IP: $ip | Browser: $browser | Device: $device | Location: $location\n";
            File::append(storage_path('logs/log.txt'), $logLine);
        }

        return response()->json(['message' => 'Visitor logged']);
    }

    private function detectBrowser($userAgent)
    {
        if (stripos($userAgent, 'Edge') !== false) return 'Edge';
        if (stripos($userAgent, 'OPR') !== false || stripos($userAgent, 'Opera') !== false) return 'Opera';
        if (stripos($userAgent, 'Chrome') !== false) return 'Chrome';
        if (stripos($userAgent, 'Safari') !== false && stripos($userAgent, 'Chrome') === false) return 'Safari';
        if (stripos($userAgent, 'Firefox') !== false) return 'Firefox';
        if (stripos($userAgent, 'MSIE') !== false || stripos($userAgent, 'Trident') !== false) return 'Internet Explorer';

        return 'Unknown';
    }

    private function extractDeviceInfo($userAgent)
    {
        if (preg_match('/\(([^)]+)\)/', $userAgent, $matches)) {
            return $matches[1]; 
        }

        return 'Unknown';
    }

    public function visitorsToday()
    {
        $count = Log::whereDate('created_at', Carbon::today())
            ->distinct('ip')
            ->count('ip');

        return response()->json(['visitors_today' => $count]);
    }

    public function totalVisitors()
    {
        $count = Log::distinct('ip')->count('ip');

        return response()->json(['total_visitors' => $count]);
    }

    public function blockVisitor($id)
    {
        $log = Log::find($id);

        if (!$log) {
            return response()->json(['message' => 'Visitor not found'], 404);
        }

        $log->status = !$log->status;
        $log->save();

        return redirect()->back()->with('message', 'Visitor blocked successfully');
    }
}
