<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class AgriculteurController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function add()
    {
        $data = [
            'gender' => $this->request->getPost('gender'),
            'name' => $this->request->getPost('firstname'). ' '.$this->request->getPost('lastname'),
            'age' => $this->request->getPost('age')
        ];

        $validation = Services::validation();
        $validation->setRules([

        ]);
    }
}
