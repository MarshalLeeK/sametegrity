<x-header hd-title="Preguntas" hd-description="preguntas creadas" :module="$module" :view="$view">
    <x-layouts.titleBanner title-Module="PREGUNTAS" />
    <div class="container-fluid">
        <x-layouts.upBar :rows="$rows" :searchbox="$searchbox" :module="$module" />
        <div class="col-xl-12 mt-1 mb-2">
            <div class="table-responsive">
                <table class="table table-striped mb-1">
                    <thead>
                        <tr class="table text-light align-middle">
                            <x-layouts.tables.columns :columns="$columns" />
                        </tr>
                    </thead>
                    <tbody>
                        <x-layouts.tables.data :rows="$rows" :countcol="$columns" :module="$module" />
                    </tbody>
                </table>
            </div>
        </div>
</x-header>
