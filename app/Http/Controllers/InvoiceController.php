<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        // ambil data invoice dari database jika ada
        // contoh static
        $invoice = [
            'id' => 2,
            'name' => 'Asthivia Amitaba',
            'address' => 'Depok, Sleman, DIY',
            'email' => 'ast@gmail.com',
            'issued_on' => 'May 23, 2025',
            'items' => [
                [
                    'description' => 'TDK/dl-k2 Tent - Double Layer',
                    'rate' => '0.00',
                    'qty' => 1,
                    'amount' => '0.00',
                ],
            ],
            'subtotal' => '0.00',
            'tax' => '0.00',
            'discount' => '3.00',
            'total' => '0.00',
        ];

        return view('invoice', compact('invoice'));
    }
}
