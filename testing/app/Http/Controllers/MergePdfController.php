<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Exception;

class MergePdfController extends Controller
{
    public function mergePdfForm()
    {
        return view('pdf.mergePdf');
    }

    public function mergePdf(Request $request)
    {
        $request->validate([
            'pdfs' => 'required|array|min:2',
            'pdfs.*' => 'file|mimes:pdf|max:10240',
        ],[
           'pdfs.required' => 'Please select at least 2 PDF files.',
        ]);

        try {
            $pdf = new Fpdi();

            foreach ($request->file('pdfs') as $uploadedPdf) {
                $pageCount = $pdf->setSourceFile($uploadedPdf->getPathname());

                for ($i = 1; $i <= $pageCount; $i++) {
                    $template = $pdf->importPage($i);
                    $size = $pdf->getTemplateSize($template);

                    $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
                    $pdf->useTemplate($template);
                }
            }

            $outputName = 'merged_' . time() . '.pdf';
            $outputPath = storage_path("app/public/{$outputName}");
            $pdf->Output($outputPath, 'F');

            return redirect()->back()->with([
                'success' => 'PDF merged successfully!',
                'download' => asset("storage/{$outputName}")
            ]);
        } catch (\Exception $e) {
            $message = $e->getMessage();

            $lowerMessage = strtolower($message);

            if (str_contains($lowerMessage, 'compression technique') || str_contains($lowerMessage, 'fpdi') || str_contains($lowerMessage, 'parser')) {
                $errorMessage = 'One or more selected PDF files are not supported or valid for merging.';
            } else {
                $errorMessage = 'Failed to merge PDFs due to an unexpected error.';
            }

            return redirect()->back()->with('error', $errorMessage);
        }
    }
}
