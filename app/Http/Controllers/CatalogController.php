<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getHome(){
        return "home";   
       }

    public function getIndex(){
        return redirect()->action('CatalogController@getIndex'); 
    }

    public function getShow($id){
        return view('catalog.show', array('id'=>$id));
    }

    public function getCreate(){
        return "catalog.create";
    }

    public function getEdit($id){
        return view('catalog.edit', array('id'=>$id));
    }
}
