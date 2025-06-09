<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JSON to PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 10px;
            color: #333;
            margin: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            word-wrap: break-word;
            page-break-inside: auto;
        }

        th, td {
            border: 1px solid #555;
            padding: 6px;
            text-align: left;
            vertical-align: top;
            word-break: break-word;
        }

        th {
            background-color: #f5f5f5;
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }
    </style>
</head>
<body>
    <h2>JSON to PDF Report</h2>

    @if (is_array($data))
        @if (array_is_list($data))
            <table>
                <thead>
                    <tr>
                        @foreach (array_keys($data[0] ?? []) as $key)
                            <th>{{ $key }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            @foreach ($row as $cell)
                                <td>
                                    {{ is_array($cell) ? json_encode($cell, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : $cell }}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <table>
                @foreach ($data as $key => $value)
                    <tr>
                        <th>{{ $key }}</th>
                        <td>{{ is_array($value) ? json_encode($value, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : $value }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    @else
        <p>No data to display.</p>
    @endif
</body>
</html>
