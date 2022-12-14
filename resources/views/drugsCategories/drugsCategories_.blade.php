<x-header hd-title="Nueva categoria" hd-meta-description="DATOS CATEGORIA" :module="$module" :view="$view">
    <div class="p-2 form h-100">
        <div class="container bg-light border">
            <x-layouts.tittlebar class="row h-100 text-center text-white" action='DATOS' alias="CATEGORÍA" />

            <div class="row">

                <div class="form-group col-6">
                    <label for="code">Código</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Código"
                        value="{{ $categoryDrugs->code }}" readonly>
                </div>

                <div class="form-group col-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                        value="{{ $categoryDrugs->name }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descripción" readonly>{{ $categoryDrugs->observation }}</textarea>
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

        </div>
    </div>
</x-header>
