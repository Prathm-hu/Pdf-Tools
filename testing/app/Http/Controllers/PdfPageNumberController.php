<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class PdfPageNumberController extends Controller
{
    public function addPageNumbersForm()
    {
        return view('pdf.addPageNumbers');
    }

    public function addPageNumbers(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:20000',
        ]);

        try {
            $uploadedPdf = $request->file('pdf');
            $sourcePath = $uploadedPdf->getPathname();

            // Extend FPDI to overlay page numbers
            $pdf = new class extends Fpdi {
                public $pageTotal;

                public function Header()
                {
                    // Disable default header
                }

                public function Footer()
                {
                    $this->SetY(-10); // 10 mm from bottom
                    $this->SetFont('Helvetica', '', 10);
                    $this->SetTextColor(0, 0, 0);
                    $this->Cell(0, 10, 'Page ' . $this->PageNo() . ' of ' . $this->pageTotal, 0, 0, 'R');
                }
            };

            $pageCount = $pdf->setSourceFile($sourcePath);
            $pdf->pageTotal = $pageCount;

            for ($i = 1; $i <= $pageCount; $i++) {
                $templateId = $pdf->importPage($i);
                $size = $pdf->getTemplateSize($templateId);
                $orientation = $size['width'] > $size['height'] ? 'L' : 'P';

                $pdf->AddPage($orientation, [$size['width'], $size['height']]);
                $pdf->useTemplate($templateId);
                // Footer will be auto-applied
            }

            $fileName = 'numbered_pdf_' . time() . '.pdf';
            $outputPath = storage_path("app/public/{$fileName}");
            $pdf->Output($outputPath, 'F');

            return redirect()->back()->with([
                'success' => 'Page numbers added successfully.',
                'file' => asset('storage/' . $fileName)
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add page numbers: ' . $e->getMessage());
        }
    }
}
