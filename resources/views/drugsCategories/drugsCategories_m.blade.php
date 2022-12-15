<x-header hd-title="Nueva categoria" hd-meta-description="Nueva categoria" :module="$module" :view="$view">
    <form action="{{ route($module . 'Update', $categoryDrugs) }}" method="POST" class="p-2 form h-100"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="container bg-light border">
            <x-layouts.tittlebar class="row h-100 text-center text-white" action='MODIFICAR' alias="CATEGORÍA" />

            <div class="row">

                <div class="form-group col-6">
                    <label for="code">Código</label>
                    <input type="text" class="form-control text-muted" id="code" name="code"
                        placeholder="Código" readonly value="{{ $categoryDrugs->code }}">
                </div>

                <div class="form-group col-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                        value="{{ empty(old('name')) ? $categoryDrugs->name : old('name') }}" />
                    @error('name')
                        <small class="text-danger"><strong>*{{ $message }}</strong></small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descripción">{{ empty(old('description')) ? $categoryDrugs->observation : old('description') }}</textarea>
                @error('description')
                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                @enderror
            </div>
            <hr class="hr" />
            <table class="table table-wrap table-bordered" id="drugsList">
                <thead class="text-white">
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Unidad</th>
                    <th>Equivalencia</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                </tbody>
                <tfoot class="text-secondary">
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Unidad</th>
                    <th>Equivalencia</th>
                    <th>Opciones</th>
                </tfoot>
            </table>

            <x-layouts.formSave :module="$module" />
        </div>
    </form>
</x-header>
