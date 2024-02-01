<div>
   
    <div class="container mt-5">

        <h1> <span style="color: blue;">Nome da Empresa</span> {{$empresa->fantasia}}</h1><br>

        

     
        <form action="">

        <H2><span class="d-block p-2 bg-primary text-white">Informação Empresarial</span></H2>
            <div class="mb-3">
            
            
                <label for="exampleFormControlInput1" class="form-label">Razão  Social </label>
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
            
            </div>
            <H2><span class="d-block p-2 bg-primary text-white">Endereço da Empresa</span></H2>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                <input type="email" class="form-control" placeholder="" wire:model="inputs.bairro">
                
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Município</label>
                <input type="email" class="form-control" placeholder="" wire:model="inputs.municipio">
                
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cep</label>
                <input type="email" class="form-control" placeholder="" wire:model="inputs.cep">
                
            </div>
     
        </form>

        <button class="btn btn-outline-primary" type="button" wire:click="editEmpresa('{{$empresa->id}}')" >Salvar</button>

    </div>
    
</div>
