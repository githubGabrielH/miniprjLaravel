<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(){
        $livros = Livro::all();
        return view('livros', [
            'livros' => $livros
        ]);
    }
 
    public function create(){
        return view("adicionar");
    }
 
    public function store(Request $request){
 
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'ano_publicacao' => 'required|integer|min:1000|max:9999',
            'resumo' => 'nullable|text',
        ]);
       
        Livro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'ano_publicacao' => $request->ano_publicacao,
            'resumo' => $request->resumo,
        ]);
   
        // Redireciona após salvar com mensagem de sucesso
        return redirect()->route('livros.index')->with('success', 'Livro adicionado com sucesso!');
    }
   
}