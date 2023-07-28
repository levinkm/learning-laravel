<?php

namespace App\Http\Controllers;

use App\Utils\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{

    public function __invoke()
    {
        request()->validate(['email' => 'required|email']);
        $list_id = config('services.mailchimp.list_id');



        try {
            $response = (new Newsletter)->subscribe(request('email'), $list_id, config('services.mailchimp.key'), 'us9');
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter'
            ]);
        }

        return redirect('/')->with('success', 'Thanks for subscribing!');
    }
}
