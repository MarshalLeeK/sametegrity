<x-header hd-title="Formularios" hd-description="Formularios disponibles" :module="$module" :view="$view">

    <x-layouts.titleBanner title-Module="Formularios" />

    <div class="container-fluid">
        <x-layouts.upBar :rows="$rows" :searchbox="$searchbox" :module="$module" />

        <div class="col-xl-12 mt-1 mb-2">
            <div class="table-responsive">
                <table class="table table-striped mb-1" id="formsList">
                    <thead>
                        <tr class="table table-responsive text-light">
                            <x-layouts.tables.columns :columns="$columns" />
                        </tr>
                    </thead>
                    <tbody>
                        <x-layouts.tables.data :rows="$rows" :countcol="$columns" :module="$module" />
                    </tbody>
                </table>
            </div>
        </div>
        <script src="{{ asset('js/forms.js') }}"></script>
</x-header>
