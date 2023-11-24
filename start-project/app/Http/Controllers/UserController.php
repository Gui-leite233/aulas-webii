<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $users = [[
        'id' => 1,
        'nome' => 'Gil Eduardo',
        'email' => 'gil@gil.com',
        'curso' => 'informatica'
        ]];
    
        public function __construct() {
            // obtém o conteúdo da variável de sessão "users"
            $aux = session('users');
            // verifica se a sessão já estava setada
            if(!isset($aux)) {
            // seta a sessão "users" com o array
            session(['users' => $this->users]);
            }
        }
    public function index($nome, $email, $curso)
    {
        $users = session('users');
        return view('users.index', compact('users'));



    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aux = session('users');
        // retorna um array contendo apenas os dados da coluna "id"
        $ids = array_column($aux, 'id');
        // verifica o total de elementos do array "id"
        if(count($ids) > 0) {
        // obtém o valor máximo do array "id" + 1
        $new_id = max($ids) + 1;
        }
        else {
        // configura novo id com 1
        $new_id = 1;
        }
        $novo = [
            'id' => $new_id,
            'nome' => $request->nome,
            'email' => $request->email,
            'curso' => $request->curso
            ];
            // Insere novo cadastro no array
            array_push($aux, $novo);
            // Atualiza a sessão com o novo cadastro
            session(['users' => $aux]);
            // redireciona para lista de users
            return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
