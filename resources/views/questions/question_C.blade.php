<x-header hd-title="Preguntas" hd-description="Datos generales sobre preguntas creadas" :module="$module"
    :view="$view">
    <x-layouts.titleBanner title-Module="PREGUNTAS" />
    <form class="container p-2 form h-100">
        @csrf
        <div class="row">
            <div class="form-group col-6">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la pregunta"
                    value="{{ Str::upper(old('name')) }}" style="--bs-bg-opacity: .6;" readonly>
            </div>

            <div class="form-group col-2">
                <label for="open">Abierta</label>
                <select type="text" class="form-select text-right bg-secondary" id="open" name="open"
                    placeholder="Nombre" value="{{ Str::upper(old('open')) }}" style="--bs-bg-opacity: .6;" readonly>
                    <option value="0" selected>NO</option>
                    <option value="1">SI</option>
                </select>
            </div>

            <div class="form-group col-2">
                <label for="unique_answer">Respuesta Unica</label>
                <select type="text" class="form-select text-right bg-success" id="unique_answer" name="unique_answer"
                    placeholder="Nombre" value="{{ Str::upper(old('unique_answer')) }}" style="--bs-bg-opacity: .6;"
                    readonly>
                    <option value="0">NO</option>
                    <option value="1" selected>SI</option>
                </select>
            </div>

            <div class="form-group col-2">
                <label for="status">Estado</label>
                <select type="text"
                    class="form-select text-white {{ old('unique_answer') === 0 ? 'bg-secondary' : 'bg-success' }}"
                    id="status" name="status" placeholder="Nombre" style="--bs-bg-opacity: .6;" readonly>
                    <option value="0">INACTIVO</option>
                    <option value="1" selected>ACTIVO</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="description">Pregunta</label>
            <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descripción" readonly>{{ Str::upper(old('description')) }}</textarea>
            @error('description')
                <small class="text-danger"><strong>*{{ $message }}</strong></small>
            @enderror
        </div>
        <div class="form-group">
            <label for="notes">Notas</label>
            <textarea class="form-control" id="notes" name="notes" rows="24" placeholder="Observación" readonly>{{ Str::upper(str_replace('.', ".\n", old('notes'))) }}</textarea>
        </div>

        <x-layouts.formSave :module="$module" />
    </form>

    <script src="{{ asset('js/questions.js') }}"></script>

</x-header>
