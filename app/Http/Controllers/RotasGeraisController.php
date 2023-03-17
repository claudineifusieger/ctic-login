<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use PDF; 
use Auth;

class RotasGeraisController extends Controller
{
    protected $user;

    public function __construct()
    {
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro
    }

    public function index()
    {        
        if (Auth::check()) {
            return view('rotasgerais.dashboard');
        }else{
            return view('rotasgerais.login');    
        }
    }

    public function ip()
    {      
            return view('rotasgerais.ip');
    }

    public function timbrado(Request $request)
    {  
            view()->share('rotasgerais.timbrado'); 
            $pdf = PDF::loadView('timbrado')->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            return $pdf->stream('nome-do-arquivo-pdf.pdf',compact('pdf'));
        

    }
    
}




