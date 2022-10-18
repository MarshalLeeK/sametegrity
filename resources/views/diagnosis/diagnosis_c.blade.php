<x-header
hd-title="Nuevo Diagnóstico"
hd-meta-description="Nuevo Diagnóstico">

    <form action="{{ route('diagnosisSave') }}" method="POST" class="p-2 form h-100" enctype="multipart/form-data">
    @csrf
        <div class="container bg-light border">
            
            <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="DIAGNÓSTICO"/>

            <div class="row">
                <div class="form-group col-6">
                    <label for="code">Código</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Código" value="{{ old('code') }}">
                    @error('code')
                        <small class="text-danger">* {{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="6" placeholder="Descripción">{{ Empty(old('description')) ? '' :  old('description') ; }}</textarea>
                @error('description')
                    <small class="text-danger">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="observation">Observación</label>
                <textarea class="form-control" id="observation" name="observation" rows="6" placeholder="Observación">{{ Empty(old('observation')) ? '' :  old('observation') ; }}</textarea>
            </div>

            <div class="row d-flex flex-row-reverse my-1">
                <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                <a type="button" class="btn btn-secondary btn-lg col-2 mx-1" href="{{ route('diagnosisModule') }}">Cancelar</a>
            </div>
        </div>  

    </form>   


</x-header>