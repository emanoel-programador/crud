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
            'cep' => $this->empresa->cep,
            'bairro' => $this->empresa->bairro,
            'municipio' => $this->empresa->municipio,   
        ];

    }
    
    public function editEmpresa($parametro){

        Empresa::where('id', $parametro)
        ->update([
            'porte' => $this->inputs['porte'],
            'razao_social' => $this->inputs['razao_social'],
            'fantasia' => $this->inputs['fantasia'],
            'cep' => $this->inputs['cep'],
           'bairro' => $this->inputs['bairro'],
           'municipio' => $this->inputs['municipio'],
        ]);

    }

    public function render()
    {
        return view('livewire.mostrar-empresa');
    }
}
