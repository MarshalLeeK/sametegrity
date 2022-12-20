<x-header hd-title="Preguntas" hd-description="Datos generales sobre preguntas creadas" :module="$module"
    :view="$view">
    <x-layouts.titleBanner title-Module="PREGUNTAS" />
    <div class="container p-2 form h-100">
        <div class="row">
            <div class="form-group col-6">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la pregunta"
                    readonly value="{{ Str::upper($questions->name) }}">
            </div>

            <div class="form-group col-2">
                <label for="open">Abierta</label>
                <input type="text" class="form-control text-right" id="open" name="open" placeholder="Nombre"
                    readonly value="{{ Str::upper($questions->open == 0 ? 'NO' : 'SI') }}">
            </div>

            <div class="form-group col-2">
                <label for="unique_answer">Respuesta Unica</label>
                <input type="text" class="form-control text-right" id="unique_answer" name="unique_answer"
                    placeholder="Nombre" readonly
                    value="{{ Str::upper($questions->unique_answer == 0 ? 'NO' : 'SI') }}">
            </div>

            <div class="form-group col-2">
                <label for="status">Estado</label>
                <input type="text"
                    class="form-control text-white {{ $questions->unique_answer === 0 ? 'bg-secondary' : 'bg-success' }}"
                    id="status" name="status" placeholder="Nombre" readonly style="--bs-bg-opacity: .7;"
                    value="{{ Str::upper($questions->unique_answer === 0 ? 'INACTIVO' : 'ACTIVO') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="description">Pregunta</label>
            <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descripción" readonly>{{ Str::upper($questions->description) }}</textarea>
            @error('description')
                <small class="text-danger"><strong>*{{ $message }}</strong></small>
            @enderror
        </div>
        <div class="form-group">
            <label for="notes">Notas</label>
            <textarea class="form-control" id="notes" name="notes" rows="24" placeholder="Observación" readonly>{{ Str::upper(str_replace('.', ".\n", $questions->notes)) }}</textarea>
        </div>

    </div>
</x-header>
