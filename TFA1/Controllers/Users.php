<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'fullname' => 'Admin User',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Mark Santos',
                'role' => 'Cashier'
            ]
        ];

        return view('users', $data);
    }
}