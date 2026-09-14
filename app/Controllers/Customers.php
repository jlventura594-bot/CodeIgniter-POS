<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@email.com',
                'phone' => '09123456789'
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@email.com',
                'phone' => '09123456788'
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@email.com',
                'phone' => '09123456787'
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@email.com',
                'phone' => '09123456786'
            ],
            [
                'full_name' => 'Mark Lopez',
                'email' => 'mark@email.com',
                'phone' => '09123456785'
            ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}