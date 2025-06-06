<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ShowTeamPage extends Component
{
    public function render()
    {

        $members = Member::orderBy('name','ASC')->where('status',1)->get();

        return view('livewire.show-team-page',[
            'members' => $members
        ]);
    }
}
