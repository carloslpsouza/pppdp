<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Questao;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas = Entrada::all();
        $questoes = Questao::all();
        return view('principal', ['questions' => $questoes, 'entradas' => $entradas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function show(Questao $questao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function edit(Questao $questao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questao $questao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questao  $questao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questao $questao)
    {
        //
    }
}
