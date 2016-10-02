<?php

namespace App\Http\Controllers\Docente;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    //
	use AuthenticatesUsers;

	protected $loginView = 'docente.login';
	protected $guard = "docente";
	protected $username = "usuario";

	public function authenticated(){
		return redirect('/docente/dashboard');
	}

	public function index(){
		return view('docente.dashboard');
	}
}
