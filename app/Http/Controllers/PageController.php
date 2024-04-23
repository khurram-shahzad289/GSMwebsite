<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __call($method, $parameters)
    {
        return $this->dynamicPageView($method);
    }


    private function dynamicPageView(string $page)
    {
        $view= 'pages.' . $page;
        if(!view()->exists($view)){
            return view('pages.error', ['error'=> $page]);
        }
        return view($view);
    }
}
