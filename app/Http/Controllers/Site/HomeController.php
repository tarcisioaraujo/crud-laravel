<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{
    public function index()
    {
      $cursos = Curso::where('publicado','=','sim')->paginate(3);
      return view('home',compact('cursos'));
    }
}
