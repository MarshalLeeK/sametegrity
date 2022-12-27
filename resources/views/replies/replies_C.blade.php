<x-header hd-title="Respuesta" hd-description="Datos generales de respuestas." :module="$module" :view="$view">
    <x-layouts.titleBanner title-Module="RESPUESTAS" />
    <form class="container p-2 form h-100 bg-light" action="{{ route($module . 'Save') }}" method="POST">
        @csrf
        <div class="row">
            <x-layouts.miscellaneous.inputdiv fieldname='name' showname='Nombre' placeholder='Respuesta'
                div-Class='form-group col-8' />

            <div class="form-group col-2">
                <x-layouts.miscellaneous.inputLabel fieldname="status" showname="Estado" />

                <select type="text" class="form-select" id="status" name="status" placeholder="Estado">
                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>INACTIVO</option>
                    <option value="1" {{ (old('status') == 1 or !old('status')) ? 'selected' : '' }}>ACTIVO
                    </option>
                </select>
            </div>

            <div class="form-group col-2">
                <x-layouts.miscellaneous.inputLabel fieldname="open" showname="Respuesta a preguntas de tipo abierta" />
                <br>
                <button type="button" class="logic btn btn-sm btn-secondary"
                    title="¿Es una respuesta usada en preguntas de selección múltiple?" id="open">
                    <i class="bi bi-check-circle-fill">
                        <input tittle="Pregunta Abierta" type="check" name="open"
                            value="{{ old('open') ? old('open') : 0 }}" placeholder="None" hidden>
                    </i>
                </button>
            </div>

            <div class="col-sm-12">
                <x-layouts.miscellaneous.inputLabel fieldname="observation" showname="Comentarios" />
                <textarea class="form-control" id="observation" name="observation" rows="20" placeholder="Observación">{{ Str::upper(str_replace('.', ".\n", old('notes'))) }}</textarea>
            </div>

            <x-layouts.formSave :module="$module" />
    </form>

    <script src="{{ asset('js/replies.js') }}"></script>

</x-header>
