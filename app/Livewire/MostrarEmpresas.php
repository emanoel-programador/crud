<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;
use Illuminate\Support\Facades\Http;


class MostrarEmpresas extends Component
{

    public $cnpj  ;

    public function store(){

        $response = Http::get('https://www.receitaws.com.br/v1/cnpj/' . $this->cnpj);
        //salvar no banco com eloquent
        $empresa = new Empresa();
        

        $empresa->razao_social = $this->cnpj;
        $empresa->fantasia = $response['fantasia'];
        $empresa->porte = $response['porte'];
        $empresa->cep = $response['cep'];
        $empresa->bairro = $response['bairro'];
        $empresa->municipio = $response['municipio'];
        
        

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