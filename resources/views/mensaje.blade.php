<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Api-Rest</title>

</head>

<body>
    <div class="col-sm-3">
        <label for="documentplace-country" class="form-label">Páis Origen</label>
        <select class="form-select" name="documentplace" id="documentplace-country" aria-label="">
            <option value="" selected>COLOMBIA</option>
        </Select>
    </div>

    <div class="col-sm-3">
        <label for="documentplace-state" class="form-label">Deparatamento Nacimiento</label>
        <select class="form-select" name="documentplace" id="documentplace-state" aria-label="">
            <option value=""selected>ANTIOQUIA</option>
        </Select>
    </div>

    <div class="col-sm-3">
        <label for="documentplace-state" class="form-label">Ciudad Expedición</label>
        <select class="form-select" name="documentplace" id="documentplace" aria-label="">
            <option value=""></option>
        </Select>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
        integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/getLocation.js') }}"></script> 
</body>

</html>
