<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {   
    
        $userModel = model('userModel');
        
        // Consulta básica para obtener todos los usuarios
        $users = $userModel->find();

        // Puedes pasar los datos a la vista
        $data = [
            'users' => $users,
        ];

        if (auth()->loggedIn()) {

            //Lista de todos los usuarios
            return 
            view('dashboard/template/HeaderViewDB')
            .view('dashboard/entity/user/ListUserViewDB', $data)
            .view('dashboard/template/FooterViewDB');

        }
            return redirect()->to('/');
    }
}
