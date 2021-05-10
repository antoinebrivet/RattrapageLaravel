<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('product-list', ['title'=>'Liste des Produits']);
    }

    public function index2($id)
    {
        return view('product-details', ['id'=>$id]);
    }
}
