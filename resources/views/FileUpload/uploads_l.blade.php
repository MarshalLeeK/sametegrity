<x-header
hd-title="Macroprocesos"
hd-description="Módulo de MacroProcesos"
:module="$module"
:view="$view"
>
    <x-layouts.titleBanner 
    title-module="MACROPROCESOS"
    />
    <div class="container-fluid">
        {{-- <x-layouts.upBarFile 
         :rows="$uploadFiles"
         :searchbox="$searchbox"
         :module="$module"
        /> --}}
        <hr my-4>
           


            <div class="container mx-auto my-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="col-12 col-sm-12 border-5 text-dark">
                        <div class="col-1 col-sm-12 text-center">
                            <h1 class="text-white" style="background-color:#0a4275">MAPA DE MACROPROCESOS</h1>
                        </div>
                        <div class="row">
                            <div class="col mb-2">
                                <!-- Div del Macroproceso Estratégico -->
                                <div class="card flex flex-col items-center mb-3 shadow-md">
                                    <a href="{{ route('filesStrategicMacro') }}" class="block"> 
                                        <button style="background-color: #0a4275; width: 100%; height: 40px; font-size: 20px;" class=" text-white  rounded-lg">
                                            <strong>MACROPROCESO ESTRATÉGICO</strong>
                                        </button>
                                    </a>
                                    <a href="{{ route('filesStrategicMacro') }}" class="block"> 
                                        <button style="background-color: #e1e5e9; width: 100%; height: 40px; font-size: 20px;" class=" text-black mt-2 relative rounded-lg">
                                            DIRECCIONAMIENTO ESTRATÉGICO
                                            <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#e1e5e9]"></span>
                                        </button>
                                    </a>
                                </div>
            
                                <!-- Div del Macroproceso Misional -->

                                <div class="card flex flex-col items-center mb-3 shadow-md">
                                    <a href="{{ route('filesMissionaryMacro') }}" class="block"> 
                                        <button style="background-color: #0a4275; width: 100%; height: 40px; font-size: 20px;" class=" text-white  rounded-lg">
                                            <strong>MACROPROCESO MISIONAL</strong>
                                        </button>
                                    </a>
                                    <a href="{{ route('filesMissionaryMacro') }}" class="block"> 
                                        <button style="background-color: #919191; width: 100%; height: 40px; font-size: 20px;" class=" text-black mt-2 rounded-lg">ATENCIÓN AL USUARIO</button>
                                    </a>
                                    <div class="grid grid-cols-2 gap-2 w-full mt-2">
                                        <div class="col-span-1">
                                            <a href="{{ route('filesConsultationExternal') }}" class="block"> 
                                                <button style="background-color: #e1e5e9; width: 49.8%; height: 40px; font-size: 20px;" class=" text-black w-full h-32 rounded-lg relative">
                                                    Consulta Externa
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#e1e5e9]"></span>
                                                </button>
                                            </a>
                                            <a href="{{ route('filesCad') }}" class="block"> 
                                                <button style="background-color: #919191; width: 49.8%; height: 40px; font-size: 20px;" class=" text-black w-full h-32 mt-2 rounded-lg relative">
                                                    CAD
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#919191]"></span>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-span-1">
                                            <a href="{{ route('filesHospitalization') }}" class="block"> 
                                                <button style="background-color: #919191; width: 49.8%; height: 40px; font-size: 20px;" class=" text-black w-full h-32 rounded-lg relative">
                                                    Hospitalización
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#919191]"></span>
                                                </button>
                                            </a>
                                            <a href="{{ route('filesPharmaceutical') }}" class="block"> 
                                                <button style="background-color: #e1e5e9; width: 49.8%; height: 40px; font-size: 20px;" class=" text-black w-full h-32 mt-2 rounded-lg relative">
                                                    Servicio Farmacéutico
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#e1e5e9]"></span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- Div del Macroproceso de Apoyo -->
                                <div class="card flex flex-col items-center mb-3 shadow-md">
                                    <a href="{{ route('filesSupportMacro') }}" class="block">    
                                        <button style="background-color: #0a4275; width: 100%; height: 40px; font-size: 20px;" class=" text-white rounded-lg">
                                            <strong>MACROPROCESO DE APOYO</strong>
                                        </button>
                                    </a>
                                    <div class="grid grid-cols-2 gap-2 w-full mt-2">
                                        <div class="col-span-1">
                                            <a href="{{ route('filesSupportFinanciera') }}" class="block">
                                                <button style="background-color: #e1e5e9; width: 49.8%; height: 40px; font-size: 20px; " class=" text-black  rounded-lg relative mt-2">
                                                    Gestión Financiera
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#e1e5e9]"></span>
                                                </button>
                                            </a>
                                            <a href="{{ route('filesSupportInfraestructura') }}" class="block">
                                                <button style="background-color: #919191; width: 49.8%; height: 40px; font-size: 20px;" class=" text-black  rounded-lg relative mt-2">
                                                    Gestión de Infraestructura
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#919191]"></span>
                                                </button>
                                            </a>
                                        </div>

                                        <div class="col-span-1">
                                            <a href="{{ route('filesSupportTalento') }}" class="block">
                                                <button style="background-color: #919191; width: 49.8%; height: 40px; font-size: 20px; " class=" text-black  rounded-lg relative mt-2">
                                                    Talento Humano
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#919191]"></span>
                                                </button>
                                            </a>
                                            <a href="{{ route('filesSupportCompras') }}" class="block">
                                                <button style="background-color: #e1e5e9; width: 49.8%; height: 40px; font-size: 20px;" class=" text-black  rounded-lg relative mt-2">
                                                    Gestión de Compras
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#e1e5e9]"></span>
                                                </button>
                                            </a>
                                        </div>

                                        <div class="col-span-1">
                                            <a href="{{ route('filesSupportInformacion') }}" class="block">
                                                <button style="background-color: #e1e5e9; width: 49.8%; height: 40px; font-size: 20px; " class=" text-black rounded-lg relative mt-2">
                                                    Sistemas de información
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#e1e5e9]"></span>
                                                </button>
                                            </a>
                                            <a href="{{ route('filesSupportDocumental') }}" class="block">
                                                <button style="background-color: #919191; width: 49.8%; height: 40px; font-size: 20px;" class="text-black rounded-lg relative mt-2">
                                                    Gestión documental
                                                    <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#919191]"></span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
            
                                <!-- Div del Macroproceso de Evaluación -->
                                <div class="card flex flex-col items-center mb-3 shadow-md">
                                    <a href="{{ route('filesAssessmentMacro') }}" class="block">  
                                        <button style="background-color: #0a4275; width: 100%; height: 40px; font-size: 20px;" class=" text-white rounded-lg">
                                            <strong>MACROPROCESO DE EVALUACIÓN</strong>
                                        </button>
                                    </a>
                                    <a href="{{ route('filesAssessmentMacro') }}" class="block">
                                        <button style="background-color: #e1e5e9; width: 100%; height: 40px; font-size: 20px;" class=" text-black w-full h-40 mt-2 relative rounded-lg" href="{{ route('filesHospitalization') }} " >
                                            Gestión de la Calidad
                                            <span class="absolute top-1/2 right-0 transform -translate-y-1/2 border-transparent border-l-[20px] border-b-[20px] border-t-[20px] border-l-[#e1e5e9]"></span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        {{-- FIN DE DIVS SECTIONS --}}

        {{-- <div class="col-xl-12 mt-1 mb-2">
            <x-layouts.upBarFile 
                :rows="$uploadFiles"
                :searchbox="$searchbox"
                :module="$module"
            />
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="table text-light">
                            <x-layouts.tables.columnsFile
                                :columns="$columns"
                            />
                        </tr>
                    </thead>
                    <tbody>                            
                        <x-layouts.tables.dataFile 
                            :rows="$uploadFiles"
                            :countcol="$columns"
                            :module="$module"
                            />
                            
                    </tbody>
                </table>
            </div>
        </div> --}}

                




    </div>
</x-header>


<!-- Script para mostrar/ocultar la nueva tabla -->
{{-- <script>
    document.getElementById('toggleTableHeading').addEventListener('click', function() {
        var tableContainer = document.getElementById('newTableContainer');
        if (tableContainer.style.display === 'none') {
            tableContainer.style.display = 'block';
        } else {
            tableContainer.style.display = 'none';
        }
    });
</script>


<!-- Script para mostrar/ocultar la imagen de macroprocesos -->
<script>
    document.getElementById('toggleTableHeading1').addEventListener('click', function() {
        var tableContainer = document.getElementById('newTableContainer1');
        if (tableContainer.style.display === 'none') {
            tableContainer.style.display = 'block';
        } else {
            tableContainer.style.display = 'none';
        }
    });
</script> --}}