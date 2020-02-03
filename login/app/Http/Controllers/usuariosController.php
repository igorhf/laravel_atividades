<?php

namespace App\Http\Controllers;

use App\noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadasdro()
    {
        return view('criar_usuario');
    }

    public function login()
    {
        return view('usuarios_login');
    }
   
    public function cadastroUsuario(Request $request)
    {
        $usuario = new usuarios;
        $usuario->usuario = $request->usuario;
        $usuario->senha = Hash::make($request->senha);
        $usuario->email = $request->email;

        $usuario->save();
        //$this->validate($request,[
        //    'usuario' => 'required',
        //    'senha' => 'required|min:3',
        //]);

        //$senha = Hash::make($request->senha);
        return view('criar_usuario');
    }

    public function realizarLogin(Request $request)
    {
        $dados = usuarios::where('usuario',$request->usuario)->first(); 
        if(isset($dados)){       
            $n_senha = Hash::make($request->senha);
            $senha = $dados->senha;
            
            if (Hash::check($request->senha, $senha)) {
                $item = "login realizado com sucesso";
            } else {
                $item ="senha invalida";
            }
        }else {
            $item = "usuario não existe";
        }
        

        //$this->validate($request,[
        //    'usuario' => 'required',
        //    'senha' => 'required|min:3',
        //]);

        //$senha = Hash::make($request->senha);
        return view('usuarios_login',compact('item','senha','n_senha'));
    }

}