<?php

namespace App\Controllers;

use App\Models\BiodataModel;

class Beranda extends BaseController
{
    public function index()
    {
        $model = new BiodataModel();
        $data['biodata'] = $model->getBiodata();
        return view('beranda', $data);
    }
}
