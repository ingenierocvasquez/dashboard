<?php

namespace App\Controllers;
use App\Models\EducationModel;

class PageController extends BaseController
{   
    

    public function index()
    {
        //Llama a  la vista principal de la web
        return  
        view('web/layout/template/HeaderView')
        .view('web/layout/pages/HomeView')
        .view('web/layout/template/FooterView');
    }

    public function DashboardFunction(){


            $educationModel = new EducationModel();
            
            // Consulta básica para obtener los datos del modelo
            $education_year = $educationModel->education_year();
            $type_course = $educationModel->type_course();
        
            // Puedes pasar los datos a la vista
            $data = [
                'datosGrafico1' =>$education_year,
                'datosGrafico2' =>$type_course,
            
            ];

        if (auth()->loggedIn()) {

            return 
            view('dashboard/layout/template/HeaderViewDB')
            .view('dashboard/layout/pages/HomeViewDB', $data)
            .view('dashboard/layout/template/FooterViewDB');

        }
            return
            redirect()->to('/');
        
    }

    public function ResumenFunction(){


        $educationModel = new EducationModel();
        
        // Consulta básica para obtener todos los usuarios
        $education_year = $educationModel->education_year();
        $type_course = $educationModel->type_course();
        $listar_form_academicas = $educationModel->listar_form_academicas();
        $listar_form_complementaria = $educationModel->listar_form_complementaria();
        $contar_cat_pformacion = $educationModel->contar_cat_pformacion();
        

         // Puedes pasar los datos a la vista
        $data = [
            'datosGrafico1' =>$education_year,
            'datosGrafico2' =>$type_course,
            'listar_form_academicas' =>$listar_form_academicas,
            'listar_form_complementaria' =>$listar_form_complementaria,
            'contar_cat_pformacion' =>$contar_cat_pformacion,
        ];

        //var_dump($type_course);

            return 
            view('web/layout/template/HeaderView')
            .view('web/layout/pages/ResumenView', $data)
            .view('web/layout/template/FooterView');

        
        
    }
}
