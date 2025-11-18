<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $users = [
            [
                'first_name' => 'Justin Kirk',
                'middle_name' => 'Oliveros',
                'last_name' => 'Endozo',
                'email' => 'justinkirkendozo@gmail.com',
                'password_hash' => password_hash('Kulasa17', PASSWORD_DEFAULT),
                'account_status' => '1',
                'type' => 'admin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Kulasa',
                'middle_name' => 'Oliveros',
                'last_name' => 'Endozo',
                'email' => 'kulasaendozo@gmail.com',
                'password_hash' => password_hash('KulasaXD', PASSWORD_DEFAULT),
                'account_status' => '1',
                'type' => 'client',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];
        $this->db->table('users')->insertBatch($users);
    }
}
