<div>
    <div class="container mt-5">

        <h1> Empresa: {{$empresa->fantasia}}</h1>
        
     
        <form action="">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Razão  Social</label>
                <input type="email" class="form-control" placeholder="" wire:model="inputs.razao_social">
                
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fantasia</label> 
                <input type="email" class="form-control" placeholder="" wire:model="inputs.fantasia">
                
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Porte</label>
                <input type="email" class="form-control" placeholder="" wire:model="inputs.porte">
                
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cep</label>
                <input type="email" class="form-control" placeholder="" wire:model="inputs.cep">
                
            </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                <input type="email" class="form-control" placeholder="" wire:model="inputs.bairro">
                
            </div>
     
        </form>

        <button class="btn btn-outline-primary" type="button" wire:click="editEmpresa('{{$empresa->id}}')" >Salvar</button>

    </div>
    
</div>
