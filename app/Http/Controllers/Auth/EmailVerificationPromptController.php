<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class EmailVerificationPromptController extends Controller
{
     
    public function __invoke(Request $request): RedirectResponse|View
    {
        if ($request->user()->hasVerifiedEmail()) {
            if (Auth::user()->isAdmin()) {
                return redirect()->intended(route('admin.dashboard'));
            }
            return redirect()->intended(route('dashboard'));
        }

        return view('auth.verify-email');
    }
}