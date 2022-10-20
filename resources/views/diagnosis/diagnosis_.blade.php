<x-header
hd-title="Diagnóstico"
hd-meta-description="Diagnóstico"
:module="$module"
:view="$view"
:row="$diagnosis"
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
                    <input type="text" class="form-control" id="code" name="code"  placeholder="Código" disabled value="{{ Str::upper($diagnosis->code) }}">
                </div>

                <div class="form-group col-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Nombre" disabled value="{{ Str::upper($diagnosis->name) }}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="10"  placeholder="Descripción" disabled>{{  Str::upper($diagnosis->description) }}</textarea>
                @error('description')
                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label for="observation">Observación</label>
                <textarea class="form-control" id="observation" name="observation" rows="24"  placeholder="Observación" disabled>{{  Str::upper($diagnosis->observation) }}</textarea>
            </div>
        </div>  
    </div>   
</x-header>