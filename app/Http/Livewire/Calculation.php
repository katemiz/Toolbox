<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculation extends Component
{

    public $params;
    public $secenek;

    // Area Inertia
    public $odia =100;
    public $idia =96;
    public $ainertia;


    // Wind Load
    public $rho = 1.25;
    public $wspeed ='30'; // m/s
    public $sail_area = '0.8'; //m2
    public $Cd = 1.5;
    public $fwind;

    public function mount() {
        $this->secenek = 'welcome';

        $this->areaInertia();
        $this->windLoad();
    }


    public function render()
    {
        $this->areaInertia();
        $this->windLoad();
        return view('calculate');
    }



    public function menuClick($secenek)
    {
        $this->secenek = $secenek;

    }


    // Area Inertia
    public function areaInertia()
    {
        $this->ainertia = round(pi()* (pow($this->odia,4) - pow($this->idia,4)) / 64,2);
    }

    // Wind Load
    public function windLoad() {
        $this->fwind = round(0.5*$this->rho*$this->Cd*$this->sail_area*pow($this->wspeed,2),2);
    }


}
