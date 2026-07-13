<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'company_email' => 'required',
            'password' => 'required',
        ]);

        $employee = Employee::where(
            'company_email',
            $request->company_email
        )->first();

        if (!$employee) {
            return back()->with('error', 'Invalid email or password');
        }

        if ($employee->temporary_password !== $request->password) {
            return back()->with('error', 'Invalid email or password');
        }

       session([
    'employee_logged_in' => true,
    'employee_id' => $employee->id,
    'employee_name' => $employee->first_name,
    'employee_email' => $employee->company_email,
]);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('signin');

        Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login'); // sends them back to sign-in page
    }
}