<x-header hd-title="Pacientes" hd-description="Pacientes" :module="$module" :view="$view">

    <x-layouts.titleBanner title-Module="PACIENTES" />
    <div class="container-fluid">
        <x-layouts.upBar :rows="$patients" :searchbox="$searchbox" module="patient" />
        <div class="col-xl-12 mt-1 mb-2">
            <div class="table-responsive">
                <table class="table table-striped mb-1">
                    <thead>
                        <tr class="table text-light">
                            <x-layouts.tables.columns :columns="$columns" />
                        </tr>
                    </thead>
                    <tbody>
                        <x-layouts.tables.data :rows="$patients" :countcol="$columns" :module="$module" />
                    </tbody>
                </table>
            </div>
        </div>
</x-header>
