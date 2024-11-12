<div class="row m-1">
    <form action="{{ route($module) }}" method="GET">

        @csrf
        <div class="d-inline-flex flex-row col-12 mt-2">

            <div class="rows">
                {{ $rows->withQueryString()->links() }}
            </div>

            <!-- Input de Búsqueda -->
            <div class="col-4 ms-auto">
                <input type="text" class="form-control" name="searchbox" id="searchbox" placeholder="Buscar"
                    value="{{ isset($searchbox) ? '' . $searchbox . '' : '' }}">
            </div>
            <div class="col-auto mx-1">
                <button type="submit" class="btn btn-md btn-primary" title="Buscar registro(s)">
                    <i class="bi-search"></i> Buscar
                </button>
            </div>

        </div>
    </form>
</div>


<!-- Contenedor para Filtrar por FORMATOS, GUIAS, INSTRUCTIVOS,MANUALES, PLANES,POLITICAS-->
<div class="row m-1">
    <div class="d-inline-flex flex-row col-12 mt-2">
        <!-- Formulario para Filtrar por FORMATOS -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categorieFormats" value="1" class="btn btn-md btn-success" title="Filtrar por Formatos">
                Filtrar por Formatos
            </button>
        </form>

        <!-- Formulario para Filtrar por GUIAS -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categorieGuides" value="1" class="btn btn-md btn-success" title="Filtrar por Guias">
                Filtrar por Guias
            </button>
        </form>

        <!-- Formulario para Filtrar por INSTRUCTIVOS -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categorieInstructions" value="1" class="btn btn-md btn-success" title="Filtrar por Instructivos">
                Filtrar por Instructivos
            </button>
        </form>

        <!-- Nuevo Formulario para Filtrar por MANUALES -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categorieManuals" value="1" class="btn btn-md btn-success" title="Filtrar por Manuales">
                Filtrar por Manuales
            </button>
        </form>

        <!-- Nuevo Formulario para Filtrar por PLANES -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categoriePlans" value="1" class="btn btn-md btn-success" title="Filtrar por Planes">
                Filtrar por Planes
            </button>
        </form>

        <!-- Nuevo Formulario para Filtrar por POLITICAS -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categoriePolicies" value="1" class="btn btn-md btn-success" title="Filtrar por Politicas">
                Filtrar por Politicas
            </button>
        </form>

        <!-- Nuevo Formulario para Filtrar por PROCEDIMIENTOS -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categorieProcedures" value="1" class="btn btn-md btn-success" title="Filtrar por Procedimientos">
                Filtrar por Procedimientos
            </button>
        </form>

        <!-- Nuevo Formulario para Filtrar por PROCESOS -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categorieProcesses" value="1" class="btn btn-md btn-success" title="Filtrar por Procesos">
                Filtrar por Procesos
            </button>
        </form>

        <!-- Nuevo Formulario para Filtrar por REGLAMENTO -->
        <form action="{{ route($module) }}" method="GET" class="me-2">
            @csrf
            <button type="submit" name="categorieRegulations" value="1" class="btn btn-md btn-success" title="Filtrar por Reglamentos">
                Filtrar por Reglamentos
            </button>
        </form>
    </div>
</div>








