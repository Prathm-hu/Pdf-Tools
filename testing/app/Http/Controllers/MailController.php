<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PHPMailerService;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class MailController extends Controller
{
    public function sendSubscriptionEmail(Request $request, PHPMailerService $mailer)
    {
        try {
            $request->validate([
                'email' => 'required|email',
            ]);

            $email = $request->input('email');
            $subject = "Thanks for Subscribing!";
            $body = view('mails.mail')->render(); // Load HTML email template

            $result = $mailer->sendMail($email, $subject, $body);

            return response()->json([
                'status' => $result === true ? 'success' : 'error',
                'message' => $result === true ? 'Email sent!' : 'Failed to send email.'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first()
            ], 422);
        } catch (\Exception $e) {
            Log::error('MailController Error: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }
}
