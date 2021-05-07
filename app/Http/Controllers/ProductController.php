<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        echo 'Liste des Produits';
    }

    public function index2()
    {
        echo 'Fiche du produit .$id';
    }
}
