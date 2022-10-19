<x-header
hd-title="Nuevo Diagnóstico"
hd-meta-description="Nuevo Diagnóstico"
:module="$module">

    <form action="{{ route('diagnosisUpdate') }}" method="POST" class="p-2 form h-100" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="container bg-light border">
            
            <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="DIAGNÓSTICO"
                action='MODIFICAR'/>

            <div class="row">
                <div class="form-group col-6">
                    <label for="code">Código</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Código" value="{{ old('code') }}">
                    @error('code')
                        <small class="text-danger"><strong>*{{ $message }}</strong></small>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descripción">{{ Empty(old('description')) ? '' :  old('description') ; }}</textarea>
                @error('description')
                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label for="observation">Observación</label>
                <textarea class="form-control" id="observation" name="observation" rows="24" placeholder="Observación">{{ Empty(old('observation')) ? '' :  old('observation') ; }}</textarea>
            </div>

            {{-- <x-layouts.formSave :module="$module"/> --}}
            {{-- Ver posibilidad de independizar como componente --}}
            <div class="row d-flex flex-row-reverse my-1">
                <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                <a type="button" class="btn btn-secondary btn-lg col-2 mx-1" href="{{ route('diagnosisModule') }}">Cancelar</a>
            </div>
            {{--  --}}
        </div>  

    </form>   

</x-header>