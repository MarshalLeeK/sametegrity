document.addEventListener('click', (e) => {


    id = e.target.id;

    xxxxdd(id);

    elementClicked = e.target;

    if (elementClicked.matches('select')) {

        var request = new XMLHttpRequest();
        request.open('POST', 'getmsg');
        request.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
        request.setRequestHeader("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]')['content']);

        // accionHeyner();
        var data = new FormData();
        data.append('id', elementClicked.id);
        // console.log
        request.send();



        request.onload = () => {

            if (request.status != 200) {
                console.log('Error: ' + request.status);
                return false;
            }
            var response = JSON.stringify(request.responseText);
            console.log(response)

        }

    }

})


function xxxxdd(id) {
    // 1. Crea un nuevo objeto XMLHttpRequest
    let xhr = new XMLHttpRequest();

    // 2. Configuración: solicitud GET para la URL /article/.../load
    xhr.open('POST', 'getmsgxxxx');
    xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
    xhr.setRequestHeader("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]')['content']);
    // 3. Envía la solicitud a la red
    // var data = new FormData();
    // data.append('id', '555');
    xhr.send(JSON.stringify({ "id": "555" }));

    // ejemplo
    // xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    // xmlhttp.send(JSON.stringify({ "email": "hello@user.com", "response": { "name": "Tester" } }));

    // 4. Esto se llamará después de que la respuesta se reciba
    xhr.onload = function () {
        if (xhr.status != 200) { // analiza el estado HTTP de la respuesta
            alert(`Error ${xhr.status}: ${xhr.statusText}`); // ej. 404: No encontrado
        } else { // muestra el resultado

            console.log(xhr.response);
            // alert(`Hecho, obtenidos ${xhr.response.length} bytes`); // Respuesta del servidor
        }
    };

    // xhr.onprogress = function(event) {
    // if (event.lengthComputable) {
    //     alert(`Recibidos ${event.loaded} de ${event.total} bytes`);
    // } else {
    //     alert(`Recibidos ${event.loaded} bytes`); // sin Content-Length
    // }

    // };

    // xhr.onerror = function() {
    // alert("Solicitud fallida");
    // };
}

function accionHeyner() {
    var formData = new FormData();
    var registro = "hola";
    //uso la funcion stringify para converitr en string json lo que voy enviar
    var str_datos = JSON.stringify(registro);
    //aqui llame data la informacion que voy enviar puedo enviar variable o objectos
    formData.append("data", str_datos);

    //AccionHeyner es la ruta que voy a utilizar del archivo web 
    axios
        .post("AccionHeyner", formData, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then(
            function (response) {


                console.log(response);
                //   Swal.fire({
                //     icon: response.data.Tipo,
                //     title: response.data.Titulo,
                //     text: response.data.Respuesta,
                //     showConfirmButton: false,
                //     timer: 1000,
                //   });

                //   if (response.data.Tipo == "success") {
                //     $("#exampleModalSmall").modal("hide");
                //     $("#file_imagen").next(".dropify-clear").trigger("click");
                //     self.Listar();
                //   }
            }
        );
}