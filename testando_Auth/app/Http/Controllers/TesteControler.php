<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteControler extends Controller
{
    public function index(Request$req, $n="fulano")
    {  
        //dd($req);
        echo $req->idade ;
        return "hello World, $n!";
    }
    public function info()
    {
        phpinfo();
    }
    public function home()
    {
        return redirect('/home');
    }
    public function boaTarde($nome="fulano")
    {
        return view('boa-tarde',["nome" => $nome]);
    }

}
