<x-header hd-title="Preguntas" hd-description="Datos generales sobre preguntas creadas" :module="$module"
    :view="$view">
    <x-layouts.titleBanner title-Module="PREGUNTAS" />
    <form class="container p-2 form h-100 bg-light" action="{{ route($module . 'Update', $questions) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <x-layouts.miscellaneous.inputdiv fieldname='name' showname='Nombre' placeholder='Nombre de la pregunta'
                div-Class='form-group col-8' :value="$questions->name" />

            <div class="form-group col-2">
                {{-- <label for="status">Estado</label> --}}
                <x-layouts.miscellaneous.inputLabel fieldname="unique_answer" showname="Estado" />

                <select type="text" class="form-select" id="status" name="status" placeholder="Estado">
                    <option value="0"{{ $questions->z_xOne == 0 ? 'selected' : '' }}>INACTIVO</option>
                    <option value="1"{{ $questions->z_xOne == 1 ? 'selected' : '' }}>ACTIVO</option>
                </select>
            </div>

            <div class="row-col col-2 text-end">

                <div class="form-group pb-1">
                    <x-layouts.miscellaneous.inputLabel fieldname="open" showname="Pregunta Abierta" />
                    <button type="button" class="logic btn btn-sm btn-secondary"
                        title="¿Es una pregunta de respuesta abierta, es decir, el usuario debe escribir su opinión en un campo?"
                        id="open">
                        <i class="bi bi-check-circle-fill">
                            <input tittle="Pregunta Abierta" type="check" name="open"
                                value="{{ $questions->open }}" placeholder="vacio" hidden>
                        </i>
                    </button>
                </div>
                <div class="form-group">
                    <label for="unique_answer">Respuesta Única</label>
                    <button type="button" class="logic btn btn-sm btn-secondary"
                        title="¿La pregunta cuenta con más de una respuesta?" id="unique_answer">
                        <i class="bi bi-check-circle-fill">
                            <input tittle="Multiple respuesta" type="check" name="unique_answer" placeholder="vacio"
                                value="{{ $questions->unique_answer }}" hidden>
                        </i>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <x-layouts.miscellaneous.inputLabel fieldname="description" showname="Pregunta" />
                <textarea class="form-control" id="description" name="description" rows="20" placeholder="Descripción">{{ Str::upper(!old('description') ? $questions->description : old('description')) }}</textarea>
                @error('description')
                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="col-sm-6">
                <x-layouts.miscellaneous.inputLabel fieldname="notes" showname="Notas" />
                <textarea class="form-control" id="notes" name="notes" rows="20" placeholder="Observación">{{ Str::upper(str_replace('.', ".\n", !old('notes') ? $questions->notes : old('notes'))) }}</textarea>
            </div>
        </div>
        <hr class="w.100">
        <x-layouts.formSave :module="$module" />
    </form>

    <script src="{{ asset('js/questions.js') }}"></script>
</x-header>
