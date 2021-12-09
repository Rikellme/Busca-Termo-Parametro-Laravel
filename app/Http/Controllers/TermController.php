<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;

class TermController extends Controller
{
    public function index() {
        $search = request('search');

        if($search) {
            $terms = Term::where('name', 'like', '%'.$search.'%')->orderBy('name', 'asc')->get();
        } else {
            $terms = Term::all();
        }

        return view('welcome', ['terms' => $terms, 'search' => $search]);
    }

    public function store(Request $request) {
        $term = new Term();

        $term->name = $request->name;
        $term->description = $request->description;

        $term->save();

        return redirect('/')->with('msg', 'Termo criado com sucesso!');
    }
}
