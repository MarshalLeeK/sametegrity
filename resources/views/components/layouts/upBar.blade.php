<div class="row">
    <form action="{{route($module.'Module')}}" method="GET">
    @csrf
        <div class="d-inline-flex flex-row col-12 mt-2">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="searchbox"  placeholder="Buscar" value="{{ isset( $searchbox ) ? ''.$searchbox.'' :''; }}">
            </div>
            <div class="col-auto mx-1">
                <button type="submit" class="btn btn-md btn-primary"> <i class="bi-search"></i></button>
            </div>
            <div class="col-auto">
                <a href="{{ route( $module.'Create') }}" class="btn btn-md btn-success" >
                    <i class="bi-plus-circle" title="Crear Registro"></i> {{-- Nuevo --}}
                </a>
            </div>
            <div class="col-auto ms-auto">
            </div>
            <div class="col-auto ms-auto">
                {{$rows->links()}}
            </div>
        </div>
    </form> 
</div> 
