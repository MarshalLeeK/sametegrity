<x-header
hd-title="Diagnóstico"
hd-meta-description="Diagnóstico"
:module="$module"
>

    <div class="p-2 form h-100" enctype="multipart/form-data">
        <div class="container bg-light border">
            
            <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="DIAGNÓSTICO"
                action='DATOS'/>

            <div class="row">
                <div class="form-group col-6">
                    <label for="code">Código</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Código" value="{{ Str::upper($diagnosis->code) }}">
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
        </div>  

    </div>   

</x-header>