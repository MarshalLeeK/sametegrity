<div class="row m-1">
    <form action="{{route($module)}}" method="GET">
    @csrf
        <div class="d-inline-flex flex-row col-12 mt-2">
            
            <div class="rows">
                {{$rows->withQueryString()->links()}}
            </div>

            <div class="col-4 ms-auto">
                <input type="text" class="form-control" name="searchbox"  placeholder="Buscar" value="{{ isset( $searchbox ) ? ''.$searchbox.'' : '' ; }}">
            </div>
            <div class="col-auto mx-1">
                <button type="submit" class="btn btn-md btn-primary"> <i class="bi-search"></i></button>
            </div>

        </div>
    </form> 
</div> 
