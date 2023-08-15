<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Article;

class AttachmentComponent extends Component
{
    public $model;
    public $modelId;

    public function render()
    {


        return view('livewire.attachment-component',[
            'attachments' => Article::all()
        ]);
    }
}
