<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- IMPORTAMOS LAS LIBRERIAS NECESARIAS PARA FULLCALENDAR --}}
    <link href='fullcalendar/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />

    <script src='fullcalendar/core/main.js'></script>
    <script src='fullcalendar/daygrid/main.js'></script>




    {{-- LLAMAMOS EL SCRIP PARA LA CREACION DE CALENDARIO --}}
    <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
  
          var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid' ]
          });
  
          calendar.render();
        });
  
      </script>

</head>
<body>
    <div id='calendar'></div>
</body>
</html>