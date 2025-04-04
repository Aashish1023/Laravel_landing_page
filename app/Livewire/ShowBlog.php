<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ShowBlog extends Component
{
    public function render()
    {
        $categories =Category::all();

        $articles = Article::orderBy('created_at', 'DESC')->get()
        ;


        return view('livewire.show-blog',[
            'articles' => $articles,
            'categories' => $categories, 
        ]);
    }
}
