<x-header hd-title="Respuesta" hd-description="Datos generales de respuestas." :module="$module" :view="$view">
    <x-layouts.titleBanner title-Module="RESPUESTAS" />
    <form class="container p-2 form h-100 bg-light" action="{{ route($module . 'Update', $replies) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <x-layouts.miscellaneous.inputdiv fieldname='name' showname='Nombre' placeholder='Respuesta'
                div-Class='form-group col-8' value="{{ !old('name') ? $replies->name : '' }}" />


            <div class="form-group col-2">
                <x-layouts.miscellaneous.inputLabel fieldname="status" showname="Estado" />

                <select type="text" class="form-select" id="status" name="status" placeholder="Estado">
                    <option value="0" {{ ($replies->z_xOne == 0 or old('status') == 0) ? 'selected' : '' }}>
                        INACTIVO
                    </option>
                    <option value="1" {{ ($replies->z_xOne == 1 or old('status') == 1) ? 'selected' : '' }}>ACTIVO
                    </option>
                </select>
            </div>
            <div class="form-group col-2">
                <x-layouts.miscellaneous.inputLabel fieldname="open" showname="Respuesta a preguntas de tipo abierta" />
                <br>
                <button type="button" class="logic btn btn-sm btn-{{ $replies->open == 1 ? 'success' : 'secondary' }}"
                    title="¿Es una respuesta usada en preguntas de selección múltiple?" id="open">
                    <i class="bi bi-check-circle-fill">
                        <input tittle="Pregunta Abierta" type="check" name="open"
                            value="{{ !old('status') ? $replies->open : old('status') }}" placeholder="None" hidden>
                    </i>
                </button>
            </div>
        </div>

        <div class="col-sm-12">
            <x-layouts.miscellaneous.inputLabel fieldname="observation" showname="Comentarios" />
            <textarea class="form-control" id="observation" name="observation" rows="20" placeholder="Observación">{{ Str::upper(str_replace('.', ".\n", !old('observation') ? $replies->observation : old('observation'))) }}</textarea>
        </div>

        <x-layouts.formSave :module="$module" />
    </form>
    <script src="{{ asset('js/replies.js') }}"></script>

</x-header>
