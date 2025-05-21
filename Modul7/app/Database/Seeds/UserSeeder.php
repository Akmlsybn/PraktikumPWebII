<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'malsybn',
            'password' => password_hash('70754712', PASSWORD_BCRYPT),
            'email' => 'malsybn@gmail.com'
        ];
        $this->db->table('user')->insert($data);
    }
}