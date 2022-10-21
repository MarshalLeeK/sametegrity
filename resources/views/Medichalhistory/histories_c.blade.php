<x-header
hd-title="Nueva Historia"
hd-meta-description="Nueva Historia"
:module="$module"
:view="$view"
>
<form id="patientform" action="{{ route( $module.'Save') }}" method="POST" class="p-2 form h-100" enctype="multipart/form-data">
    @csrf
        <div class="container bg-light border">
            <x-layouts.tittlebar
            class="row h-100 text-center text-white"
            alias="HISTORIA"
            action='NUEVA'/>

            

            <div class="container">
                <main>
                  <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-end">
                        <div class="table-responsive">
                            <table class="table table-striped mb-1">
                                <thead>
                                    <tr class="table text-light">
                                        <x-layouts.tables.columns 
                                            :columns="$columns"
                                            hidden-option="1"

                                        />
                                    </tr>
                                </thead>
                                <tbody>
                                    <x-layouts.tables.data 
                                        :rows="$patients"
                                        :countcol="$columns"
                                        :module="$module"
                                        hidden-buttons="1"
                                    />
                                </tbody>
                            </table>
            
                      {{-- <form class="card p-2">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Promo code">
                          <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                      </form> --}}
                        </div>
                        {{$patients->withQueryString()->links()}}
                    </div>

                    <div class="col-md-7 col-lg-8">
                      
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="code">Código</label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Código" value="{{ old('code') }}">
                            @error('code')
                                <small class="text-danger"><strong>*{{ $message }}</strong></small>
                            @enderror
                        </div>
        
                        <div class="form-group col-6">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descripción">{{ Empty(old('description')) ? '' :  old('description') ; }}</textarea>
                        @error('description')
                            <small class="text-danger"><strong>*{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="observation">Observación</label>
                        <textarea class="form-control" id="observation" name="observation" rows="15" placeholder="Observación">{{ Empty(old('observation')) ? '' :  old('observation') ; }}</textarea>
                    </div>

                    </div>
                  </div>
                </main>
              
                <footer class="my-5 pt-5 text-muted text-center text-small">
                  <p class="mb-1">© 2017–2021 Company Name</p>
                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Support</a></li>
                  </ul>
                </footer>
              </div>

                            <x-layouts.formSave :module="$module" />
                            
                        </div>
                    </div>  
                </div>
        </div>
    </form>
     <script src="{{asset('js/patiencrud.js')}}"></script>
</x-header>


