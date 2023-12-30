<?php

namespace App\Controllers;
use App\Models\EducationModel;

class PageController extends BaseController
{   
    

    public function index(): string
    {
        //Login Page
        return view('dashboard/template/pages/LoginView');
    }

    public function DashboardFunction(){


        $educationModel = new EducationModel();
        
        // Consulta básica para obtener todos los usuarios
        $education_year = $educationModel->education_year();

         // Puedes pasar los datos a la vista
        $data = [
            'datosGrafico' =>$education_year,
        ];
                
        if (auth()->loggedIn()) {

            return view('dashboard/template/HeaderViewDB')
            .view('dashboard/template/pages/HomeViewDB', $data)
            .view('dashboard/template/FooterViewDB');

        }
        return redirect()->to('/');
        
    }
}
