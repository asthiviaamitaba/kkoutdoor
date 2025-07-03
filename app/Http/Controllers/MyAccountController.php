<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function index()
    {
        // Get authenticated user
        $user = Auth::user();
        
        // Format user data
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'gender' => $user->gender ?? 'Not specified',
            'age' => $this->calculateAge($user->dob),
            'dob' => $user->dob ? date('d F Y', strtotime($user->dob)) : 'Not specified',
            'phone' => $user->phone ?? 'Not specified'
        ];

        return view('my-account', ['user' => $userData]);
    }

    private function calculateAge($dob)
    {
        if (!$dob) return 'Not specified';
        
        $birthDate = new \DateTime($dob);
        $today = new \DateTime();
        $age = $today->diff($birthDate)->y;
        
        return $age . ' Years';
    }
}