<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

class HomeController
{
   public function show(Request $request, Response $response)
   {
        if (auth()->check())
        {
            if (auth()->user()->isAdmin())
            {
                return $response->withRedirect('admin/dashboard');
            }
        }

        return $response->withView('client/home');
   }

}
