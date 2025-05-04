<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Blog;
use Livewire\Component;

class BlogDetail extends Component
{
    //define variable to hold the blog post
    public $blogID = null;
    
    //use mount method to get the id from the route
    public function mount($id)
    {
        //use the id to get the blog post from the database
        $this->blogID = $id;
    }

    public function render()
    {
        $article = Article::findOrFail($this->blogID);
        return view('livewire.blog-detail',[
            'article' => $article,
        ]);
    }
}
