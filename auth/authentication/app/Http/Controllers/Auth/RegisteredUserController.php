<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Admin এবং User সীমাবদ্ধতা চেক করা
        $adminCount = User::where('role', 'admin')->count();
        $userCount = User::where('role', 'user')->count();
    
        if ($request->role === 'admin' && $adminCount >= 1) {
            // যদি ১ জন admin থাকলে নিবন্ধন আটকে দিন
            return back()->withErrors(['role' => 'Only 1 admin can be registered.']);
        }
    
        if ($request->role === 'user' && $userCount >= 1) {
            // যদি ১ জন user থাকলে নিবন্ধন আটকে দিন
            return back()->withErrors(['role' => 'Only 1 user can be registered.']);
        }
    
        // নতুন ব্যবহারকারী তৈরি করা
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // ফর্ম থেকে role আসছে
        ]);
    
        // নতুন ব্যবহারকারীকে লগইন করানো
        Auth::login($user);
    
        // ড্যাশবোর্ডে পুনঃনির্দেশনা
        return redirect()->route('dashboard');
    }
    

}


