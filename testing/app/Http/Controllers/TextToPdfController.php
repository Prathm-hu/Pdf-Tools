<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TextToPdfController extends Controller
{
    /**
     * Show the form to input text.
     */
    public function txtToPdfForm()
    {
        return view('pdf.textToPdf');
    }

    /**
     * Generate PDF from submitted text.
     */
    public function txtToPdf(Request $request)
    {
        // Validate input
        $request->validate([
            'content' => 'required|string|max:10000'
        ]);

        // Escape and wrap content safely
        $text = htmlspecialchars($request->input('content'));

        // Basic HTML wrapper with styled output
        $html = "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset=\"UTF-8\">
            <style>
                body {
                    font-family: 'Poppins', Arial, sans-serif;
                    font-size: 12px;
                    padding: 30px;
                    line-height: 1.6;
                    word-break: break-word;
                }
                pre {
                    white-space: pre-wrap;
                    word-wrap: break-word;
                }
            </style>
        </head>
        <body>
            <pre>{$text}</pre>
        </body>
        </html>";

        // Load and save PDF
        $pdf = Pdf::loadHTML($html)->setPaper('a4', 'portrait');

        $filename = 'text-pdf-' . time() . '.pdf';
        $path = storage_path("app/public/{$filename}");
        $pdf->save($path);

        // Return with download link
        return back()->with([
            'success' => 'PDF created successfully!',
            'download' => asset("storage/{$filename}")
        ]);
    }
}
