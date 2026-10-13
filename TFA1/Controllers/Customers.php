<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'fullname' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09123456789'
            ],
            [
                'fullname' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09112223344'
            ]
        ];

        return view('customers', $data);
    }
}
