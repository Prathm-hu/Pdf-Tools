<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CodeFormatterController;
use App\Http\Controllers\JpgToPDFController;
use App\Http\Controllers\JsonToExcelController;
use App\Http\Controllers\JsonToHtmlController;
use App\Http\Controllers\JsonToPdfController;
use App\Http\Controllers\JsonToTableController;
use App\Http\Controllers\JsonViewerController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MergePdfController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PdfPageNumberController;
use App\Http\Controllers\RotatePdfController;
use App\Http\Controllers\TextToPdfController;
use App\Http\Controllers\WatermarkPdfController;
use Illuminate\Support\Facades\Route;

Route::get('/something_went_wrong', [PageController::class, 'blocked'])->name('blocked');


Route::middleware(['blocked'])->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/terms', [PageController::class, 'terms'])->name('terms');
    Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/jpg_to_pdf', [JpgToPDFController::class, 'jpgToPdfForm'])->name('jpgToPdf.form');
    Route::post('/jpg_to_pdf', [JpgToPDFController::class, 'convertJpgToPdf'])->name('jpgToPdf.convert');
    Route::get('/watermark_pdf', [WatermarkPdfController::class, 'watermarkPdfForm'])->name('watermarkPdf.form');
    Route::post('/watermark_pdf', [WatermarkPdfController::class, 'addWatermark'])->name('watermarkPdf.convert');
    Route::get('/merge_pdf', [MergePdfController::class, 'mergePdfForm'])->name('mergePdf.form');
    Route::post('/merge_pdf', [MergePdfController::class, 'mergePdf'])->name('pdf.merge');
    Route::get('/rotate_pdf', [RotatePdfController::class, 'rotatePdfForm'])->name('pdfRotate.form');
    Route::post('/rotate_pdf', [RotatePdfController::class, 'rotatePdf'])->name('pdf.rotate');
    Route::get('/page_numbers', [PdfPageNumberController::class, 'addPageNumbersForm'])->name('pdfPage.form');
    Route::post('/page_numbers', [PdfPageNumberController::class, 'addPageNumbers'])->name('pdf.page');
    Route::get('/json_to_html', [JsonToHtmlController::class, 'jsonToHtmlForm'])->name('json.form');
    Route::post('/json_to_html', [JsonToHtmlController::class, 'jsonToHtml'])->name('json.html');
    Route::get('/json_to_excel', [JsonToExcelController::class, 'jsonToExcelForm'])->name('jsonToExcel.form');
    Route::get('/json_to_pdf', [JsonToPdfController::class, 'jsonToPdfForm'])->name('jsonToPdf.form');
    Route::post('/json_to_pdf', [JsonToPdfController::class, 'jsonToPdf'])->name('json.pdf');
    Route::get('/text_to_pdf', [TextToPdfController::class, 'txtToPdfForm'])->name('txtToPdf.form');
    Route::post('/text_to_pdf', [TextToPdfController::class, 'txtToPdf'])->name('text.pdf');
    Route::get('/json_viewer', [JsonViewerController::class, 'form'])->name('jsonViewer.form');
    Route::get('/code_formatter', [CodeFormatterController::class, 'formatterForm'])->name('formatter');
    Route::get('/json_to_table', [JsonToTableController::class, 'jsonToTableForm'])->name('jsonToTable.form');
    Route::post('/send-mail', [MailController::class, 'sendSubscriptionEmail'])->name('sendMail');
});

// admin 
Route::get('/admin_login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/admin_login', [AuthController::class, 'login'])->name('login');
Route::get('/admin_panel', [AdminController::class, 'showPanel'])->name('admin.panel');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/today_visitors', [AdminController::class, 'todayUser'])->name('today.visitors');
Route::get('/total_visitors', [AdminController::class, 'totalUser'])->name('total.visitors');
Route::patch('/block_visitor/{id}', [LogsController::class, 'blockVisitor'])->name('block.visitor');


Route::get('/request_server', function () {
    return response()->json(['server' => request()->server()]);
})->name('request.server');
