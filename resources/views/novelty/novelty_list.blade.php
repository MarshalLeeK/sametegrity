<x-header hd-title="Novedades"
    hd-description="Novedades" :module="$module"
    :view="$view">

    <x-layouts.titleBanner title-Module="NOVEDADES" />
    <div class="container-fluid">
        <div class="container-fluid">
            <x-layouts.upBar :rows="$novelties" :searchbox="$searchbox" :module="$module" />
    
            <div class="col-xl-12 mt-1 mb-2">
                <div class="table-responsive">
                    <table class="table table-striped mb-1 table-bordered" id='novelties'>
                        <thead>
                            <tr class="table text-light">
                                <x-layouts.tables.columns :columns="$columns" />
                            </tr>
                        </thead>
                        <tbody>
                            <x-layouts.tables.data :rows="$novelties" :countcol="$columns" :module="$module" />
                        </tbody>
                    </table>
                </div>
            </div>
            <script type="application/javascript" src="{{ URL::asset('js/drugsCategories.js') }}"></script>
</x-header>