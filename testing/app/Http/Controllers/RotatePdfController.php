<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class RotatePdfController extends Controller
{
    public function rotatePdfForm()
    {
        return view('pdf.rotatePdf');
    }

    public function rotatePdf(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10000',
            'angle' => 'required|in:90,180,270',
        ]);

        try {
            $uploadedPdf = $request->file('pdf');
            $sourcePath = $uploadedPdf->getPathname();
            $angle = (int) $request->input('angle');

            // Create anonymous class to add rotation to FPDI
            $pdf = new class extends Fpdi {
                public $angle = 0;

                public function Rotate($angle, $x = -1, $y = -1)
                {
                    if ($x === -1) $x = $this->getX();
                    if ($y === -1) $y = $this->getY();

                    if ($this->angle != 0) {
                        $this->_out('Q');
                    }

                    $this->angle = $angle;
                    if ($angle != 0) {
                        $angleRad = deg2rad($angle);
                        $c = cos($angleRad);
                        $s = sin($angleRad);
                        $cx = $x * $this->k;
                        $cy = ($this->h - $y) * $this->k;

                        $this->_out(sprintf(
                            'q %.5F %.5F %.5F %.5F %.5F %.5F cm',
                            $c, $s, -$s, $c,
                            $cx - $c * $cx + $s * $cy,
                            $cy - $s * $cx - $c * $cy
                        ));
                    }
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
                $orientation = $size['width'] > $size['height'] ? 'L' : 'P';

                $pdf->AddPage($orientation, [$size['width'], $size['height']]);
                $pdf->Rotate($angle, $size['width'] / 2, $size['height'] / 2);
                $pdf->useTemplate($templateId);
                $pdf->Rotate(0); // Reset rotation
            }

            $fileName = 'rotated_pdf_' . time() . '.pdf';
            $outputPath = storage_path("app/public/{$fileName}");
            $pdf->Output($outputPath, 'F');

            return redirect()->back()->with([
                'success' => 'PDF rotated successfully!',
                'file' => asset("storage/{$fileName}"),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to rotate PDF: ' . $e->getMessage());
        }
    }
}
