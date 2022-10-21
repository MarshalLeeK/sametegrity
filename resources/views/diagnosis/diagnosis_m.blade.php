<x-header
hd-title="Actualizar Diagnóstico"
hd-meta-description="Actualizar Diagnóstico"
:module="$module"
:view="$view"
>
    <form action="{{ route( $module.'Update', $diagnosis->id ) }}" method="POST" class="p-2 form h-100" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input hidden name='id' id='id' value="{{$diagnosis->id}}">
    <div class="container bg-light border">
            <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="DIAGNÓSTICO"
                action='ACTUALIZAR'/>

            <div class="row">
                <div class="form-group col-6">
                    <label for="code">Código</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Código" value="{{ old('code') ?? Str::upper($diagnosis->code) }}" readonly>
                </div>

                <div class="form-group col-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') ?? $diagnosis->name }}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descripción">{{ old('description') ?? Str::upper($diagnosis->description) }}</textarea>
                @error('description')
                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label for="observation">Observación</label>
                <textarea class="form-control" id="observation" name="observation" rows="24" placeholder="Observación">{{ old('observation') ?? Str::upper($diagnosis->observation) }}</textarea>
            </div>

            <x-layouts.formSave :module="$module" />

        </div>  

    </form>   

</x-header>