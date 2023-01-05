<html>

<head>
    <title>Ajax Example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />



    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}

    <script>
        function getMessage() {

            var request = new XMLHttpRequest();
            document.querySelector('meta[name="csrf-token"]')['content']
            // var data = document.getElementById('send').value;

            console.log(data);

            request.open('POST', '/getmsg');
            request.onload = () => {

                if (request.status == 200) {

                    console.log('valor enviado');

                } else {
                    console.log('Error en la petición' + request.status);
                }
            }
            request.send();

            // var form = new FormData();

            // $.ajax({
            //     type: 'POST',
            //     url: '/getmsg',
            //     data: '_token = <?php echo csrf_token(); ?>',
            //     success: function(data) {
            //         $("#msg").html(data.msg);
            //     }
            // });
        }
    </script>
</head>

<body>
    <div id='msg'>This message will be replaced using Ajax.
        Click the button to replace the message.</div>
    <?php
    echo Form::button('Replace Message', ['onClick' => 'getMessage()', 'id' => 'send']);
    ?>
</body>

</html>
