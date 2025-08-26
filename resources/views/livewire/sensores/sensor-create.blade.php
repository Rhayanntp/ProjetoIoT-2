
    <div class="container mt-5">
<h1 class="text-3xl font-bold mb-6 flex items-center gap-3">
<i class="bi bi-person-plus text-green-600"></i>

          Criar Funcionário
</h1>
 
      @if (session()->has('message'))
<div class="alert alert-success">{{ session('message') }}</div>

      @endif
 
      <form wire:submit.prevent="store" class="needs-validation" novalidate>
<div class="mb-3">
<span style="font-size:20px">
<label for="codigo" class="form-label">codigo</label>
<i class="bi bi-person-fill "></i>
</span>
<input type="text" id="codigo" wire:model.defer="codigo"

                  class="form-control @error('codigo') is-invalid @enderror" />

              @error('codigo')
<div class="invalid-feedback">{{ $message }}</div>

              @enderror
</div>
 
          <div class="mb-3">
<span style="font-size:20px">
<label for="cpf" class="form-label">tipo</label>
<i class="bi bi-person-vcard-fill"></i>
</span>
<input type="text" id="cpf" wire:model.defer="cpf"

                  class="form-control @error('cpf') is-invalid @enderror" />

              @error('cpf')
<div class="invalid-feedback">{{ $message }}</div>

              @enderror
</div>
 
          <div class="mb-3">
<span style="font-size:20px">
<label for="cargo" class="form-label">descricao</label>
<i class="bi bi-briefcase-fill"></i>
</span>
 
              <select class="form-select" aria-label="default-select example"@error('cargo') is-invalid @enderror

                  id="cargo" wire:model.defer="cargo" placeholder="Insira Seu Cargo">
<option hidden>Selecione Seu Cargo</option>
<option value="1">professor</option>
<option value="2">secretaria</option>
</select>

              @error('cargo')
<div class="invalid-feedback">{{ $message }}</div>

              @enderror
</div>
 
          <div class="mb-3">
<span style="font-size:20px">
<label for="status" class="form-label">status</label>
<i class="bi bi-mortarboard-fill"></i>
</span>

<select class="form-select" aria-label="default-select example"@error('status') is-invalid @enderror
id="status" wire:model.defer="status" placeholder="Insira seu status">
                <option hidden>Selecione Seu status</option>
                <option value="0">Inativo</option>
                <option value="1">Ativo</option>

</select>
@error('status')
<div class="invalid-feedback">{{ $message }}</span>

              @enderror
</div>

 
 
          <button type="submit" class="btn btn-success">Cadastrar</button>
<a href="{{ route('sensor.create') }}" class="btn btn-secondary ms-2">Cancelar</a>
</form>
</div>
 
