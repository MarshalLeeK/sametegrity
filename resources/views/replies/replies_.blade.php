<x-header hd-title="Respuesta" hd-description="Datos generales de respuestas." :module="$module" :view="$view">
    <x-layouts.titleBanner title-Module="RESPUESTAS" />
    <div class="container p-2 form h-100 bg-light">
        <div class="row">
            <x-layouts.miscellaneous.inputdiv fieldname='name' showname='Nombre' placeholder='Respuesta'
                div-Class='form-group col-8' :value="$replies->name" enable='1' />

            <x-layouts.miscellaneous.inputdiv fieldname='Estado' showname='Estado' placeholder='Estado'
                value="{{ $replies->z_xOne == 1 ? 'ACTIVO' : 'INACTIVO' }}" div-Class='form-group col-2'
                enable='1' />


            <div class="form-group col-2">
                <x-layouts.miscellaneous.inputLabel fieldname="open" showname="Respuesta a preguntas de tipo abierta" />
                <br>
                <button type="button" class="logic btn btn-sm btn-{{ $replies->open == 1 ? 'success' : 'secondary' }}"
                    title="¿Es una respuesta usada en preguntas de selección múltiple?" id="open">
                    <i class="bi bi-check-circle-fill">
                        <input tittle="Pregunta Abierta" type="check" name="open" value="{{ $replies->open }}"
                            placeholder="None" hidden>
                    </i>
                </button>
            </div>

            <div class="col-sm-12">
                <x-layouts.miscellaneous.inputLabel fieldname="observation" showname="Comentarios" />
                <textarea class="form-control" id="observation" name="observation" rows="20" placeholder="Observación" readonly>{{ Str::upper(str_replace('.', ".\n", old('notes'))) }}</textarea>
            </div>

        </div>
</x-header>
