<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function dashboard(){
        $unrevisioneRequests = Article::where('is_accepted', NULL)->get();
        $acceptedArticles = Article::where('is_accepted', true)->get();
        $rejectedArticles = Article::where('is_accepted', false)->get();

        return view('revisor.dashboard', compact('unrevisioneRequests', 'acceptedArticles', 'rejectedArticles'));
    }

    public function acceptedArticle(Article $article){
        $article->update([
            'is_accepted'=>true,
        ]);

        return redirect(route('revisor.dashboard'))->with('message', 'Hai accettato l\'articolo scelto');
    }

    public function rejectArticle(Article $article){
        $article->update([
            'is_accepted'=>false,
        ]);

        return redirect(route('revisor.dashboard'))->with('message', 'Hai Rifiutato l\'articolo scelto');
    }

    public function undoArticle(Article $article){
        $article->update([
            'is_accepted'=>NULL,
        ]);

        return redirect(route('revisor.dashboard'))->with('message', 'Hai Riportato l\'articolo scelto di nuovo in Revisione');
    }
}
