<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;

class MostrarEmpresa extends Component
{

    public $empresa;
    public $inputs = [];


    public function mount($id){

        //Consulta por id com eloquent
        $this->empresa = Empresa::where('id', $id)->first();

        $this->inputs = [

            'razao_social' => $this->empresa->razao_social,
            'porte' => $this->empresa->porte,
            'fantasia' => $this->empresa->fantasia,
            
        ];

    }
    
    public function editEmpresa($parametro){

        Empresa::where('id', $parametro)
        ->update([
            'porte' => $this->inputs['porte'],
            'razao_social' => $this->inputs['razao_social'],
            'fantasia' => $this->inputs['fantasia'],
        ]);

    }

    public function render()
    {
        return view('livewire.mostrar-empresa');
    }
}
