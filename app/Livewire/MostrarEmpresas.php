<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;

class MostrarEmpresas extends Component
{

    public $cnpj = "";

    public function store(){


        //salvar no banco com eloquent
        $empresa = new Empresa();

        $empresa->razao_social = $this->cnpj;
        $empresa->fantasia = "Nome Fantasia Padrão";
        $empresa->porte = "Pequena";

        $empresa->razao_social = "";
        $empresa->fantasia = "";
        $empresa->porte = "";
    

        $empresa->save();

    }

    public function deleteEmpresa($id){

        //Forma1
        //$empresa = Empresa::find($id);
        //$empresa->delete();
        
        //Forma2
        Empresa::where('id', $id)->delete();

    }


    public function render()
    {
        //Obter todos os dados da tabela com Eloquent
        $empresas = Empresa::all();

        return view('livewire.mostrar-empresas', [
            'empresas' => $empresas
        ]);
        
    }
}
