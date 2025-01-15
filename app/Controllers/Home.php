<?php

namespace App\Controllers;

use App\Models\MatkulModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new MatkulModel(); 
        $data['matkul'] = $model->findAll(); 
        return view('dashboard', $data);
    }
}
