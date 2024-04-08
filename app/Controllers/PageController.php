<?php

namespace App\Controllers;
use App\Models\EducationModel;

class PageController extends BaseController
{   
    

    public function index(): string
    {
        //Login Page
        //return view('dashboard/template/pages/LoginView');
        return view('frontend/template/InicioView');
    }

    public function DashboardFunction(){


        $educationModel = new EducationModel();
        
        // Consulta básica para obtener todos los usuarios
        $education_year = $educationModel->education_year();
        $type_course = $educationModel->type_course();

         // Puedes pasar los datos a la vista
        $data = [
            'datosGrafico1' =>$education_year,
            'datosGrafico2' =>$type_course,
        ];

        //var_dump($type_course);

                
        if (auth()->loggedIn()) {

            return view('dashboard/template/HeaderViewDB')
            .view('dashboard/template/pages/HomeViewDB', $data)
            .view('dashboard/template/FooterViewDB');

        }
        return redirect()->to('/');
        
    }
}
