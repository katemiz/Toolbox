<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Article;
use App\Models\Attachment;


class AttachmentComponent extends Component
{
    public $model;
    public $modelId;

    // public $filesToUpload;
    public $dosyalar = [];

    use WithFileUploads;

    public function render()
    {


        return view('livewire.attachment-component',[
            'attachments' => Attachment::all()
        ]);
    }


    // public function getNames()
    // {

    //     if ($this->dosyalar) {
    //         dd($this->dosyalar);

    //     }
    // }


    public function removeFile($fileToRemove) {

        foreach ($this->dosyalar as $key => $dosya) {
            
            if ($dosya->getClientOriginalName() == $fileToRemove) {

                unset($this->dosyalar[$key]);

            }
        }
    }


    public function uploadAttach(Request $request)
    {



        foreach ($this->dosyalar as $dosya) {

            $props['user_id'] = 1;//Auth::id();
            $props['model_name'] = $this->model;
            $props['model_item_id'] = $this->modelId;
            $props['original_file_name'] = $dosya->getClientOriginalName();
            $props['mime_type'] = $dosya->getMimeType();
            $props['file_size'] = $dosya->getSize();

            $path = $props['model_name'].'/'.$props['model_item_id'];

            $stored_file_as = Storage::disk('local')->put($path, $dosya);

            $props['stored_file_as'] = $stored_file_as;

            Attachment::create($props);
        }

        $this->reset('dosyalar');


    }





}
