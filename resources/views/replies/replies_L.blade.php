<x-header hd-title="RESPUESTAS" hd-description="respuestas creadas" :module="$module" :view="$view">
    <x-layouts.titleBanner title-Module="RESPUESTAS" />
    <div class="container-fluid">
        <x-layouts.upBar :rows="$rows" :searchbox="$searchbox" :module="$module" />
        <div class="col-xl-12 mt-1 mb-2">
            <div class="table-responsive">
                <table class="table table-striped table-bordered mb-1" id="questionsList">
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
        <script src="{{ asset('js/questions.js') }}"></script>
</x-header>
