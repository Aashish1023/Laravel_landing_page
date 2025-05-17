<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class ShowPage extends Component
{

    public $oageId = null;

    public function mount($id){
        $this->pageId = $id;
    }

    public function render()
    {
        // Fetch the page data from the database using the pageId
        $page = Page::findOrFail($this->pageId);
        return view('livewire.show-page',[
            'page' => $page
        ]);
    }
}
