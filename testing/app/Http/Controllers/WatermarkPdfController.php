<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Log;

class WatermarkPdfController extends Controller
{
    public function watermarkPdfForm()
    {
        return view('pdf.WatermarkPdf');
    }

    public function addWatermark(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf',
            'watermark_text' => 'nullable|string'
        ], [
            'pdf.required' => 'Please upload a PDF file.',
            'pdf.mimes' => 'Only PDF files are allowed.'
        ]); 

        try {
            $uploadedPdf = $request->file('pdf');
            $sourcePath = $uploadedPdf->getPathname();
            $watermarkText = $request->input('watermark_text');

            $pdf = new class extends Fpdi {
                protected $angle = 0;

                public function Rotate($angle, $x = -1, $y = -1)
                {
                    if ($x == -1) $x = $this->GetX();
                    if ($y == -1) $y = $this->GetY();

                    if ($this->angle != 0) {
                        $this->_out('Q');
                    }

                    $this->angle = $angle;
                    if ($angle != 0) {
                        $angle *= M_PI / 180;
                        $c = cos($angle);
                        $s = sin($angle);
                        $cx = $x * $this->k;
                        $cy = ($this->h - $y) * $this->k;
                        $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.5F %.5F cm', $c, $s, -$s, $c, $cx, $cy));
                        $this->_out(sprintf('1 0 0 1 %.5F %.5F cm', -$cx, -$cy));
                    }
                }

                public function RotatedText($x, $y, $txt, $angle)
                {
                    $this->Rotate($angle, $x, $y);
                    $this->Text($x, $y, $txt);
                    $this->Rotate(0);
                }

                public function _endpage()
                {
                    if ($this->angle != 0) {
                        $this->angle = 0;
                        $this->_out('Q');
                    }
                    parent::_endpage();
                }
            };

            $pageCount = $pdf->setSourceFile($sourcePath);

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $templateId = $pdf->importPage($pageNo);
                $size = $pdf->getTemplateSize($templateId);

                $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
                $pdf->useTemplate($templateId);

                $pdf->SetFont('Arial', 'B', 40);
                $pdf->SetTextColor(200, 200, 200);
                $pdf->RotatedText(60, 200, $watermarkText, 45);
            }

            $outputName = 'watermarked_' . time() . '.pdf';
            $outputPath = storage_path("app/public/{$outputName}");
            $pdf->Output($outputPath, 'F');

            return redirect()->back()->with([
                'success' => 'PDF watermarked successfully!',
                'download' => asset("storage/{$outputName}")
            ]);
        } catch (\Exception $e) {
            $message = strtolower($e->getMessage());

            $friendlyMessage = str_contains($message, 'compression technique') || str_contains($message, 'fpdi') || str_contains($message, 'parser')
                ? 'The uploaded PDF is not supported or is corrupted.'
                : 'Failed to add watermark due to an unexpected error.';

            // Optionally log for debugging
            Log::error('Watermark PDF Error: ' . $e->getMessage());

            return redirect()->back()->with('error', $friendlyMessage);
        }
    }
}
