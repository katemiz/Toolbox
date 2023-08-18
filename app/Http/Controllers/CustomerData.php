<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerData extends Controller
{
    

    $articles = [];

    if (request('idArticle')) {
        $this->viewArticle(request('idArticle'));
    } else {

        $articles = Article::where('prop1', 'LIKE', "%$this->search%")
        ->orWhere('prop1', 'LIKE', "%$this->search%")
        ->orderBy($this->sortField,$this->sortDirection)
        ->paginate(env('RESULTS_PER_PAGE'));

        // dd(['aa'=>gettype($articles)]);

    }

    return view('articles.articles-home',[
        'articles' => $articles
    ]);


}
