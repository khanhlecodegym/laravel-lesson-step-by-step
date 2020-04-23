<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'Lê Tường Phúc',
            'Khoa David',
            'Hoang Victor'
        ];

        return view('dashboard.customers', [
            'customers' => $customers
        ]);
    }
}
