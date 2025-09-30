<div style="margin-top: 25px; margin-bottom: 75px" class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-primary text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Editar Sensor
        </h3>



        @if (session()->has('error'))
           
        <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <div>{{ session('error') }}</div>
            </div>

            <div class="mt-4 d-flex justify-content-between">
                <a href="{{ route('sensors.list') }}" class="btn btn-primary text-black px-4 w-100">
                    <i class="bi bi-arrow-left-circle"></i> Voltar
                </a>

            @else

            @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <div>{{ session('success') }}</div>
            </div>
            @endif
        
        

        <form wire:submit.prevent="save">

            <div class="mb-3">
                <label class="form-label">Id do Ambiente</label>
                <select class="form-select" id="ambiente_id" wire:model.defer="ambiente">
                    <option hidden>Selecione seu Ambiente</option>
                    @foreach ($ambientes as $ambiente)
                        <option value="{{$ambiente->id}}">{{$ambiente->nome}}</option>
                    @endforeach
                </select>
                @error('ambiente_id') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" wire:model="tipo" class="form-control"  required>
                @error('tipo') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Descricao</label>
                <input type="text" wire:model="descricao" class="form-control" required>
                @error('descricao') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Codigo</label>
                <input type="text" wire:model="codigo" class="form-control" required>
                @error('codigo') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="serie_atual" class="form-label">Status</label>

                <select class="form-select @error('status') is-invalid @enderror" id="status" wire:model.defer="status">
                    <option hidden>Selecione seu status</option>
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select>

            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-save2 me-2"></i>Salvar Alterações
            </button>

        </form>
        @endif
    </div>
</div>