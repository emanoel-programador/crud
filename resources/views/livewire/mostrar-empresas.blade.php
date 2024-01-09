<div>
    
    <div class="container mt-5">

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="digite o cnpj a ser salvo" wire:model="cnpj" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-primary" type="button" id="button-addon2" wire:click="store">Salvar</button>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Razão Social</th>
                <th scope="col">Fantasia</th>
                <th scope="col">Porte</th>
                <th scope="col">Edit</th>
                <th scope="col">Deletar</th>
              </tr>
            </thead>
            <tbody>

            @foreach($empresas as $empresa)
              <tr>
                <th scope="row">{{$empresa->id}}</th>
                <td>{{$empresa->razao_social}}</td>
                <td>{{$empresa->fantasia}}</td>
                <td>{{$empresa->porte}}</td>
                <td><a href="{{route('empresa',['id' => $empresa->id ])}}">  <i class="fas fa-edit text-primary" wire:click="editEmpresa({{$empresa->id}})"></i>  </a> </td>
                <td><i class="fas fa-trash text-danger" wire:click="deleteEmpresa({{$empresa->id}})"></i></td>
              </tr>
            @endforeach

            </tbody>
          </table>

    </div>

</div>
