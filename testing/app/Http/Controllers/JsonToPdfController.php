<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JsonToPdfController extends Controller
{
    public function jsonToPdfForm()
    {
        return view('json.jsonToPdf');
    }

    public function jsonToPdf(Request $request)
    {
        $request->validate([
            'json_file' => 'required|file|mimes:json,txt|max:2048',
        ]);

        $file = $request->file('json_file');
        $jsonContent = file_get_contents($file->getRealPath());
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->with('error', 'Invalid JSON format')->withInput();
        }

        $pdf = Pdf::loadView('json.pdfTemplate', ['data' => $data])
          ->setPaper('a4', 'landscape');


        $filename = 'json-output-' . time() . '.pdf';
        $path = storage_path("app/public/{$filename}");
        $pdf->save($path);

        if ($errors = session('errors')) {
            return redirect()->route('jsonToPdf.form')->with([
            'error' => $errors->first('json_file'),
            ]);
        }

        return back()->with([
            'success' => 'PDF generated successfully!',
            'download' => asset("storage/{$filename}")
        ]);
    }
}
