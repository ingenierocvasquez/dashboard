<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EducationModel;

class EducationController extends BaseController
{
    public function index()
    {
        $educationModel = new EducationModel();
        
        // Consulta básica para obtener todos los usuarios
        $formaciones = $educationModel->findall();

        // Puedes pasar los datos a la vista
        $data = [
            'formaciones' => $formaciones
        ];

        if (auth()->loggedIn()) {

            //Mostrar Vistas
            return view('dashboard/template/HeaderViewDB')
            .view('dashboard/entity/education/ListEducationViewDB', $data)
            .view('dashboard/template/FooterViewDB');

        }
        return redirect()->to('/');
    }

    public function show($id) 
    {
        $educationModel = new EducationModel();
        
        // Consulta básica para obtener un usuarios
        $formacion = $educationModel->find($id);

        // Puedes pasar los datos a la vista
        $data = [
            'formacion' => $formacion,   
        ];

       //Mostrar Vistas
        return view('dashboard/template/HeaderViewDB')
        .view('dashboard/entity/education/ReadEducationViewDB', $data)
        .view('dashboard/template/FooterViewDB');

    }

    public function new() 
    {
         
        if (auth()->loggedIn()) {
        //Formulario de Entidad Formación
        return view('dashboard/template/HeaderViewDB')
        .view('dashboard/entity/education/CreateEducationViewDB')
        .view('dashboard/template/FooterViewDB');
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
        return redirect()->to('/education')->with('mensaje', 'Formación insertado correctamente.');


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
        $data = [
            'formacion' => $formacion,   
        ];


        //Formulario de Entidad Formación
        return view('dashboard/template/HeaderViewDB')
        .view('dashboard/entity/education/UpdateEducationViewDB', $data)
        .view('dashboard/template/FooterViewDB');


        }
        return redirect()->to('/');

    }

    Public function update($id)
    {

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

        // Puedes redirigir a otra página después de la inserción
        return redirect()->to('/education')->with('mensaje', 'Formación Actualizado correctamente.');

    }


    Public function delete($id)
    {

        // Crear una instancia del modelo
        $educationModel = new EducationModel();
                
        // Eliminar formacion
        $educationModel->delete($id);

        // Puedes redirigir a otra página después de la inserción
        return redirect()->to('/education')->with('mensaje', 'Formación Eliminado correctamente.');



    }
}

