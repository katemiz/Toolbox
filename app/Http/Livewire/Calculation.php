<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculation extends Component
{

    public $params;


    public function render()
    {
        $this->params = config('toolbox.calculate');
        return view('calculate');
    }



    public function menuClick($clicked)
    {

        switch ($clicked) {
            case 'wind-force':

                $this->params = config('toolbox.windforce');
                # code...
                break;
            
            default:
                # code...
                break;
        }

    }
}
