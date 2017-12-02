<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Funcionario;

class FuncionarioController extends Controller
{
        /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()
    
        {
    
            $funcionarios = Funcionario::all();
    
            return view('funcionario.index',compact('funcionarios'))
    
                ->with('i', (request()->input('page', 1) - 1) * 5);
    
        }
    
    
        /**
    
         * Show the form for creating a new resource.
    
         *
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function create()
    
        {
    
            return view('funcionario.create');
    
        }
    
    
        /**
    
         * Store a newly created resource in storage.
    
         *
    
         * @param  \Illuminate\Http\Request  $request
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function store(Request $request)
    
        {
    
            request()->validate([
    
                'nome' => 'required',
    
                // 'body' => 'required',
    
            ]);
    
            Funcionario::create($request->all());
    
            return redirect()->route('funcionario.index')
    
                            ->with('success','Funcionario created successfully');
    
        }
    
    
        /**
    
         * Display the specified resource.
    
         *
    
         * @param  int  $id
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function show($id)
    
        {
    
            $article = Funcionario::find($id);
    
            return view('funcionario.show',compact('article'));
    
        }
    
    
        /**
    
         * Show the form for editing the specified resource.
    
         *
    
         * @param  int  $id
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function edit($id)
    
        {
    
            $article = Funcionario::find($id);
    
            return view('funcionario.edit',compact('article'));
    
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
    
            request()->validate([
    
                'nome' => 'required',
    
                // 'body' => 'required',
    
            ]);
    
            Funcionario::find($id)->update($request->all());
    
            return redirect()->route('funcionario.index')
    
                            ->with('success','Funcionario updated successfully');
    
        }
    
    
        /**
    
         * Remove the specified resource from storage.
    
         *
    
         * @param  int  $id
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function destroy($id)
    
        {
    
            Funcionario::find($id)->delete();
    
            return redirect()->route('funcionario.index')
    
                            ->with('success','Funcionario deleted successfully');
    
        }
}
