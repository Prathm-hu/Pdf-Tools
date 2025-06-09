<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonToHtmlController extends Controller
{
    public function jsonToHtmlForm()
    {
        return view('json.jsonToHtml');
    }

    public function jsonToHtml(Request $request)
    {
        $request->validate([
            'json_file' => 'required|file|mimes:json,txt|max:2048',
        ]);

        $file = $request->file('json_file');
        $jsonContent = file_get_contents($file->getRealPath());
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->withErrors(['json_file' => 'Invalid JSON format'])->withInput();
        }

        $html = $this->result($data);

        // Wrap HTML in a complete HTML document
        $fullHtml = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JSON to HTML Result</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
    </style>
</head>
<body>' . $html . '</body>
</html>';

        // Save to file
        $fileName = 'json-output-' . time() . '.html';
        $filePath = storage_path("app/public/{$fileName}");
        file_put_contents($filePath, $fullHtml);

        $downloadUrl = asset("storage/{$fileName}");

        if ($errors = session('errors')) {
            return redirect()->route('json.html.form')->with([
                'error' => $errors->first('json_file'),
                'download' => null
            ]);
        }

        return redirect()->route('json.form')->with([
            'success' => 'JSON converted successfully!',
            'download' => $downloadUrl
        ]);
    }

    private function result($data)
    {
        if (is_array($data) || is_object($data)) {
            $data = (array) $data;
            $html = "<table style='border-collapse:collapse; width:100%; background:#f9f9f9; box-shadow:0 2px 8px rgba(0,0,0,0.05);'>";
            $count = 0;
            $html .= "<tr>";
            foreach ($data as $key => $value) {
                if ($count > 0 && $count % 2 == 0) {
                    $html .= "</tr><tr>";
                }
                $html .= "<td style='vertical-align:top; border:1px solid #e0e0e0; padding:16px; background:#fff; border-radius:8px; box-shadow:0 1px 3px rgba(0,0,0,0.03); min-width:200px;'>";
                $html .= "<div style='font-weight:bold; color:#2d6cdf; margin-bottom:8px;'>" . htmlspecialchars((string) $key) . "</div>";
                $html .= "<div style='color:#333; font-size:15px;'>" . $this->result($value) . "</div>";
                $html .= "</td>";
                $count++;
            }
            if ($count % 2 !== 0) {
                for ($i = 0; $i < 2 - ($count % 2); $i++) {
                    $html .= "<td style='border:none; background:transparent;'></td>";
                }
            }
            $html .= "</tr></table>";
            return $html;
        } else {
            return htmlspecialchars((string) $data);
        }
    }
}
