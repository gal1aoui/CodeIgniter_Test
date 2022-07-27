<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Agriculteur;
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
            'firstname' => 'min_length[3]',
            'lastname' => 'min_length[3]',
            'age' => 'min_length[3]',
        ],
        [
            'firstname' => [
                'min_length' => 'Le Nom doit Contenir au minimum 3 characters'
            ],
            'lastname' => [
                'min_length' => 'Le Prénom doit Contenir au minimum 3 characters'
            ],
            'age' => [
                'min_length' => "L'age est un champ obligatoire"
            ]
        ]
        );

        if(!$validation->withRequest($this->request)->run())
        {
            return $this->response->setJSON([
                'error' => true,
                'message' => $validation->getErrors()
            ]);
        }
        else
        {
            $agriculteurModel = new Agriculteur();
            $agriculteurModel->save($data);
            return $this->response->setJSON([
                'error' => false,
                'message' => 'Agriculteur a été Ajouter avec Succés'
            ]);
        }
    }

    public function get()
    {
        $agriculteurModel = new Agriculteur();
        $agriculteurs = $agriculteurModel->findAll();
        $html ='';
        if($agriculteurs)
        {
            foreach($agriculteurs as $agriculteur)
            {
                $html .='<tr>
                <th><a class="delete_icon btn" href="#" id="'. $agriculteur['id'] .'"><span class="bi bi-x-lg fs-3"></span></a></th>
                <td>'. $agriculteur['gender'] .'</td>
                <td>'. explode(" ",$agriculteur['name'])[0] .'</td>
                <td>'. explode(" ", $agriculteur['name'])[1] .'</td>
                <td>'. $agriculteur['age'] .'</td>
                </tr>';
            }

            return $this->response->setJSON([
                'error' => false,
                'message' => $html
            ]);
        }
        else
        {
            return $this->response->setJSON(([
                'error' => false,
                'message' => '<tr>
                <td></td>
                <td></td>
                <td colspan="2">Aucun agriculteur enregistré</td>
                </tr>'
            ]));
        }
    }

    public function delete($id)
    {
        $agriculteurModel = new Agriculteur();
        $agriculteurModel->delete($id);

        return $this->response->setJSON([
            'error' => false,
            'message' => 'Agriculteur a été Supprimer avec Succés'
        ]);
    }
}
