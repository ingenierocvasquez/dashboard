<?php

namespace App\Controllers;

class PageController extends BaseController
{   
    

    public function index(): string
    {
        //Login Page
        return view('dashboard/template/pages/LoginView');
    }

    public function DashboardFunction(){
                
        if (auth()->loggedIn()) {

            return view('dashboard/template/HeaderViewDB')
            .view('dashboard/template/pages/HomeViewDB')
            .view('dashboard/template/FooterViewDB');

        }
        return redirect()->to('/');
        
    }
}
