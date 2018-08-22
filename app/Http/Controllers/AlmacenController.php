<?php

use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Rol_user;

class AlmacenController extends Controller
{
    public function ingresar()
    {
        return view('ingresar');
    }

    public function datos($dato){
    	$rol = DB::table('rol_users as rs')->join('rol as r', 'r.id', 'like', 'rs.rol_id')->select('r.nombre')->where('r.nombre', 'like', $dator);
    	return $rol;
    }

    
}
