<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EducationModel;

class EducationController extends BaseController
{
    public function index()
    {
        $educationModel = new EducationModel();
        
        // Consulta básica para obtener todos los datos
        $listar_td_programas = $educationModel->listar_td_programas();

        // Puedes pasar los datos a la vista
        $data = [
            'listar_programas' => $listar_td_programas
        ];

        if (auth()->loggedIn()) {

            //Mostrar Vistas
            return 
            view('dashboard/layout/template/HeaderViewDB')
            .view('dashboard/layout/entity/education/ListEducationViewDB', $data)
            .view('dashboard/layout/template/FooterViewDB');

        }
            return redirect()->to('/');
    }

    public function show($id) 
    {   
        if (auth()->loggedIn()) {
        $educationModel = new EducationModel();
        
        // Consulta básica para obtener un usuarios
        $formacion = $educationModel->find($id);

        // Puedes pasar los datos a la vista
        $data = [
            'formacion' => $formacion,   
        ];

       //Mostrar Vistas
        return 
        view('dashboard/layout/template/HeaderViewDB')
        .view('dashboard/layout/entity/education/ReadEducationViewDB', $data)
        .view('dashboard/layout/template/FooterViewDB');
        }
        return redirect()->to('/');
    }

    public function new() 
    {   
        if (auth()->loggedIn()) {
            $educationModel = new EducationModel();
            $listar_instituciones = $educationModel->listar_instituciones();
            $listar_tipo_programas = $educationModel->listar_tipo_programas();
            $listar_cat_pformacion = $educationModel->listar_cat_pformacion();
            $data = [
            'lts_instituciones' => $listar_instituciones, 
            'lts_tp_programas' => $listar_tipo_programas, 
            'lts_cat_pformacion' => $listar_cat_pformacion, 

            ];
        //Formulario de Entidad Formación
        return 
        view('dashboard/layout/template/HeaderViewDB')
        .view('dashboard/layout/entity/education/CreateEducationViewDB', $data)
        .view('dashboard/layout/template/FooterViewDB');
        }
        return redirect()->to('/');
    }

    public function create()
    {
        if (auth()->loggedIn()) {
        // Crear una instancia del modelo
        $educationModel = new EducationModel();
        
        // Datos de la nueva Formación
        $datos_formacion = [
            'nombre_programa' => $this->request->getPost('titulo_programa'),
            'institucion' => $this->request->getPost('i_educativa'),
            'tipo_programa' => $this->request->getPost('t_formacion'),
            'categoria_programa' => $this->request->getPost('c_formacion'),
            'fecha_certificacion' => $this->request->getPost('f_certificacion'),
        ];

        // Insertar nueva formacion
        $educationModel->insert($datos_formacion);

        // Puedes redirigir a otra página después de la inserción
        return redirect()->to('/education')->with('mensaje', 'Formación insertada correctamente.');

        }
        return redirect()->to('/');
    }


    public function edit($id) 
    {
        if (auth()->loggedIn()) {
            
        // Crear una instancia del modelo
        $educationModel = new EducationModel();

        // Consulta básica para obtener un usuarios
        $formacion = $educationModel->find($id);

        // Puedes pasar los datos a la vista
        $educationModel = new EducationModel();
            $listar_instituciones = $educationModel->listar_instituciones();
            $listar_tipo_programas = $educationModel->listar_tipo_programas();
            $listar_cat_pformacion = $educationModel->listar_cat_pformacion();
            $data = [
            'formacion' => $formacion,
            'lts_instituciones' => $listar_instituciones, 
            'lts_tp_programas' => $listar_tipo_programas, 
            'lts_cat_pformacion' => $listar_cat_pformacion, 
            ];    

        //Formulario de Entidad Formación
        return 
        view('dashboard/layout/template/HeaderViewDB')
        .view('dashboard/layout/entity/education/UpdateEducationViewDB', $data)
        .view('dashboard/layout/template/FooterViewDB');
        }
        return redirect()->to('/');
    }

    Public function update($id)
    {
        if (auth()->loggedIn()) {
        // Crear una instancia del modelo
        $educationModel = new EducationModel();
        
        // Datos de la nueva Formación
        $datos_formacion = [
            'nombre_programa' => $this->request->getPost('titulo_programa'),
            'institucion' => $this->request->getPost('i_educativa'),
            'tipo_programa' => $this->request->getPost('t_formacion'),
            'categoria_programa' => $this->request->getPost('c_formacion'),
            'fecha_certificacion' => $this->request->getPost('f_certificacion'),
        ];
        
        // Actualizar formacion
        $educationModel->update($id, $datos_formacion);

        $this->cargar_certificados($id);

        // Puedes redirigir a otra página después de la inserción
        return redirect()->to('/education')->with('mensaje', 'Formación Actualizada correctamente.');
        }
        return redirect()->to('/');

    }


    Public function delete($id)
    {   
        if (auth()->loggedIn()) {
        // Crear una instancia del modelo
        $educationModel = new EducationModel();
                
        // Eliminar formacion
        $educationModel->delete($id);

        // Puedes redirigir a otra página después de la inserción
        return redirect()->to('/education')->with('mensaje', 'Formación Eliminada correctamente.');
        }
        return redirect()->to('/');
    }


    Private function cargar_certificados()
    {
        if($documentfile = $this->request->getFile('diploma'))
        {
            if($documentfile->isValid())
            {
                $validaciones = $this->validate([
                    'uploaded[diploma]',
                    'mime_in[diploma, diploma/pdf]',
                    'max_size[diploma, 4096]'
                ]);

                if($validaciones)
                {
                    $diplomaNombre = $documentfile->getRandomName();
                    $documentfile->move(WRITEPATH . 'uploads/certificados', $diplomaNombre);
                }
            }
            $this->validator->listErrors();
        };
    }

}

