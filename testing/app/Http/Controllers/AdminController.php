<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Log;

class AdminController extends Controller
{
    public function checkLoginAndRole()
    {
        $isLoggedIn = Auth::check();
        $role = $isLoggedIn && Auth::user()->is_admin ? 'admin' : ($isLoggedIn ? (Auth::user()->role ?? null) : null);
        return ['isLoggedIn' => $isLoggedIn, 'role' => $role];
    }
    public function showPanel()
    {
        $auth = $this->checkLoginAndRole();
        if (!$auth['isLoggedIn'] || $auth['role'] !== 'admin') {
            return redirect()->route('login');
        }

        $logs = Log::latest()->get();

        $todayLogs = Log::select('ip', 'browser', 'device', 'location')
            ->whereDate('created_at', now()->toDateString())
            ->groupBy('ip', 'browser', 'device', 'location')
            ->get();

        $totalLogs = Log::select('ip', 'browser', 'device', 'location')
            ->groupBy('ip', 'browser', 'device', 'location')
            ->get();

        return view('admin.panel', [
            'logs' => $logs,
            'visitorsToday' => $todayLogs->count(),
            'totalVisitors' => $totalLogs->count(),
            'todayLogs' => $todayLogs,
            'totalLogs' => $totalLogs,
        ]);
    }


    public function todayUser()
    {
        $auth = $this->checkLoginAndRole();
        if (!$auth['isLoggedIn'] || $auth['role'] !== 'admin') {
            return redirect()->route('login');
        }

        $logs = Log::latest()->get();

        $todayLogs = Log::select('id', 'ip', 'browser', 'device', 'location', 'status')
            ->whereDate('created_at', now()->toDateString())
            ->get();

        return view('admin.todayUser', [
            'logs' => $logs,
            'visitorsToday' => $todayLogs->count(),
            'todayLogs' => $todayLogs,
        ]);
    }

    public function totalUser()
    {
        $auth = $this->checkLoginAndRole();
        if (!$auth['isLoggedIn'] || $auth['role'] !== 'admin') {
            return redirect()->route('login');
        }
        $totalLogs = Log::select('id', 'ip', 'browser', 'device', 'location', 'status')
            ->groupBy('id', 'ip', 'browser', 'device', 'location', 'status')
            ->get();

        return view('admin.totalUser', [
            'totalVisitors' => $totalLogs->count(),
            'totalLogs' => $totalLogs,
        ]);
    }
}
