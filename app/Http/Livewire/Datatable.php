<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Article;
use App\Models\User;



class Datatable extends Component
{
    use WithPagination;

    public $title;
    public $subtitle;

    public $model;

    public $search = '';
    public $sortField;
    public $sortDirection = 'asc';

    public $configs;

    public function render()
    {
        $items = [];

        switch ($this->model) {

            case 'Article':
                $this->sortField = 'prop1';
                $this->configs = config('articles');

                $items = Article::where('prop1', 'LIKE', "%".$this->search."%")
                ->orWhere('prop1', 'LIKE', "%".$this->search."%")
                ->orderBy($this->sortField,$this->sortDirection)
                ->paginate(env('RESULTS_PER_PAGE'));
                break;

            default:
                # code...
                break;
        }



        return view('livewire.datatable', [
            'items' => $items
        ]);
    }

    public function resetFilter() {
        $this->reset('search');
    }
}
