<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalHistoryController extends Controller
{
    public function index()
    {
        // Sample data - replace with actual database queries
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
                    // ... other items
                ],
                'total_amount' => 'Rp 255.000'
            ]
            // ... other invoices
        ];

        return view('rental-history', compact('invoices'));
    }
}