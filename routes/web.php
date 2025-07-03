<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Ini akan menampilkan file resources/views/home.blade.php
});

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RentalHistoryController;


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login/authenticate', [AuthController::class, 'authenticate']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/requirement', function () {
    return view('requirement');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');

Route::get('/rental-history', function () {
    // Sample data - in a real app you would fetch this from your database
    $invoices = [
        [
            'id' => 'INV-001',
            'date' => '23 May 2025',
            'status' => 'completed',
            'items' => [
                [
                    'name' => '1 Tent for 2 Cap',
                    'quantity' => 1,
                    'total' => 'Rp 40.000',
                    'payment_status' => 'completed'
                ],
                [
                    'name' => '3 Shoes, 1 TP',
                    'quantity' => 4,
                    'total' => 'Rp 150.000',
                    'payment_status' => 'completed'
                ],
                [
                    'name' => '1 Shoes',
                    'quantity' => 1,
                    'total' => 'Rp 45.000',
                    'payment_status' => 'completed'
                ],
                [
                    'name' => '1 TP',
                    'quantity' => 1,
                    'total' => 'Rp 20.000',
                    'payment_status' => 'pending'
                ]
            ],
            'total_amount' => 'Rp 255.000'
        ]
        // You can add more invoices here as needed
    ];

    return view('rental-history', ['invoices' => $invoices]);
})->name('rental-history');

// My Account Route
Route::get('/my-account', function () {
    // Sample user data - in a real app you would fetch this from your database
    $user = [
        'name' => 'Asthivia Amitaba',
        'email' => 'ast@gmail.com',
        'gender' => 'Female',
        'age' => '22 Years',
        'dob' => '20 Oktober 2002',
        'phone' => '0876 0983 7346'
    ];

    return view('my-account', ['user' => $user]);
})->name('my-account');

