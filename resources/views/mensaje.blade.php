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
        <label for="documentplace-country" class="form-label" autofocus>Páis Origen</label>
        <select class="form-select" name="documentplace-country" id="documentplace-country">
            <option selected="true" disabled="disabled">seleccione el país</option>
        </Select>
    </div>

    <div class="col-sm-3">
        <label for="documentplace-state" class="form-label">Deparatamento Nacimiento</label>
        <select class="form-select" name="documentplace-state" id="documentplace-state" aria-label="">
            <option selected="true" disabled="disabled">seleccione el departamento/estado</option>
        </Select>
    </div>

    <div class="col-sm-3">
        <label for="documentplace-city" class="form-label">Ciudad Expedición</label>
        <select class="form-select" name="documentplace-city" id="documentplace-city" aria-label="">
            <option selected="true" disabled="disabled">seleccione la ciudad</option>
        </Select>
    </div>

    <script src="{{ asset('js/getLocation.js') }}"></script>
</body>

</html>
