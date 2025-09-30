<div style="margin-top: 25px; margin-bottom: 75px" class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-success text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Criar Sensor
        </h3>

        @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <form wire:submit.prevent="store">

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
                <label class="form-label">codigo</label>
                <input type="codigo" wire:model="codigo" class="form-control" required>
                @error('codigo') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">tipo</label>
                <input type="text" wire:model="tipo" class="form-control" required>
                @error('tipo') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">descricao</label>
                <input type="descricao" wire:model="descricao" class="form-control" required>
                @error('descricao') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

        <div class="mb-3">
                <label for="status" class="form-label">status</label>

                <select class="form-select @error('status') is-invalid @enderror" id="status" wire:model.defer="status">
                    <option hidden> </option>
                    <option value=1>ativo</option>
                    <option value=0>inativo</option>
                </select>

                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-save2 me-2"></i>Cadastrar
            </button>

            <div class="mt-4 d-flex justify-content-between">
                <a href="{{ route('sensors.list') }}" class="btn btn-success text-white  px-4 w-100">
                    <i style="color: white" class="bi bi-arrow-left-circle"></i> Voltar
                </a>
            </div>
           
               
            
        </form>
    </div>
</div>