<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdf\Fpdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class JpgToPDFController extends Controller
{
    public function jpgToPdfForm()
    {
        return view('pdf.jpgToPdf');
    }

    public function convertJpgToPdf(Request $request)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpg,jpeg|max:5120'
        ],[
            'images.require'=>'Please Select a image',
        ]);

        try {
            $pdf = new \FPDF();
            $pdf->SetAutoPageBreak(false);

            foreach ($request->file('images') as $image) {
                $tempPath = storage_path('app/tmp_' . Str::random(10) . '.jpg');
                move_uploaded_file($image->getPathname(), $tempPath);

                [$width, $height] = getimagesize($tempPath);
                if (!$width || !$height) {
                    throw new \Exception("One of the uploaded images is unreadable or corrupted.");
                }

                $widthMm = $width * 0.264583;
                $heightMm = $height * 0.264583;
                $orientation = $widthMm > $heightMm ? 'L' : 'P';

                $pdf->AddPage($orientation, [$widthMm, $heightMm]);
                $pdf->Image($tempPath, 0, 0, $widthMm, $heightMm);

                @unlink($tempPath);
            }

            $fileName = 'images-to-pdf-' . time() . '.pdf';
            $outputPath = storage_path("app/public/{$fileName}");
            $pdf->Output($outputPath, 'F');

            return redirect()->back()->with([
                'success' => 'JPG images were successfully converted to PDF!',
                'download' => asset("storage/{$fileName}")
            ]);

        } catch (\Exception $e) {
            Log::error('JPG to PDF Error: ' . $e->getMessage());

            return redirect()->back()->with(
                'error',
                'Failed to convert JPG to PDF. Please ensure all files are valid images.'
            );
        }
    }
}
