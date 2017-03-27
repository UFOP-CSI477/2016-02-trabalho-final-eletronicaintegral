<?php

namespace App\Http\Controllers;

use App\Ordem;
use App\User;
use Illuminate\Http\Request;

class OrdemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ordems = Ordem::all();
//        dd($ordems);
        return view('ordem.index')->with(compact('ordems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('ordem.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ordem::create($request->all());
        session()->flash('flash_message', 'Ordem criada com sucesso!');
        return redirect('/ordems');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ordem  $ordem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordem = Ordem::find($id);
        return view('ordem.show')->with(compact('ordem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ordem  $ordem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordem = Ordem::find($id);
        return view('ordem.edit')->with(compact('ordem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ordem  $ordem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ordem = Ordem::find($id);
//        dd($ordem);
        $ordem->fill($request->all())->save();
        session()->flash('flash_message', 'Editado com sucesso!');
        return redirect('ordems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ordem  $ordem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordem $ordem)
    {
        //
    }

    public function search ()
    {
        return view('ordem.search');
    }

    public function exibir(Request $request) {
        $ordem = Ordem::find($request->id);
        return view('ordem.show')->with('ordem', $ordem);
        //    dd($request);
    }

}
