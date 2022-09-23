@extends('components.footer')

 <head>
<!-- Fonts -->
<link rel="stylesheet" href="{{URL::asset('css/indexLv.css')}}">
@include('components.navbar')

</head>
<body class="antialiased">   
    <div class="container-fluid bg-success" >
        <div class="row">
            <div class="col-6 bg-info">
                <div class="row h-50 bg-success">MENU</div>
                <div class="row h-50 bg-warning">EXTENSIONES</div>
            </div>
            <div class="col-6 bg-danger">
                <div class="row h-100 bg-info">INFORMACION
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>


</body>
    @section('footer')
    @endsection
</html>
