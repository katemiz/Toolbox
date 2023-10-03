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


    // Torsional Deflection
    public $material_g = 24E9;
    public $adeflection;
    public $torque = 100;
    public $length = 2;




    public function mount() {
        $this->secenek = 'welcome';

        $this->areaInertia();
        $this->windLoad();
        $this->torsionDeflection();

    }


    public function render()
    {
        switch ($this->secenek) {
            case 'area-inertia':
                $this->areaInertia();
                break;

            case 'wind-load':
                $this->windLoad();
                break;

            case 'torsion-deflection':
                $this->torsionDeflection();
                break;
        }

        $this->js('console.log("'.$this->secenek.'")');

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

    // Wind Load
    public function torsionDeflection() {
        $this->adeflection = round(2*$this->torque*$this->length/(pi()*(pow($this->odia/2000,4) - pow($this->idia/2000,4))*$this->material_g),8);
    }


}
