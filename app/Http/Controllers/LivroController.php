<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLivro;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(){
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    public function create(){
        return view('livros.create');
    }

    public function store(StoreUpdateLivro $request){
        Livro::create($request->all());
        return redirect()->route('livros.index');
    }
    public function show($id){
        $livro = Livro::find($id);
        if(!$livro){
            return redirect()
                        ->route('livros.index')
                        ->with('message', 'Livro não foi encontrado');
        }
    }
    public function destroy($id){
        $livro= Livro::find($id);
        if(!$livro){
            return redirect()
                        ->route('livros.index')
                        ->with('message', 'Livro não foi encontrado');
        }
        $livro->delete();
        return redirect()
                ->route('livros.index')
                ->with('message', 'Livro não foi encontrado');
    }

}
