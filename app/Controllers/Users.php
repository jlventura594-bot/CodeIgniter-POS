<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'System Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'John Cashier',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Mary Cashier',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'full_name' => 'Peter Manager',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Jane Staff',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}