<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        // Aquí puedes retornar una vista
        return view('contacto');
    }
}

