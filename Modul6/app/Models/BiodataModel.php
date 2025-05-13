<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    public function getBiodata()
    {
        return [
            'nama' => 'Akmallullail Sya ban',
            'nim' => '2310817310010',
            'asal_prodi' => 'Teknologi Informasi',
            'hobi' => 'Main game HSR',
            'skill' => 'PHP, JavaScript, CodeIgniter 4, HTML, CSS',
            'gambar' => 'foto.jpg'
        ];
    }
}
