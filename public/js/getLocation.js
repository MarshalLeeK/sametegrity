
document.addEventListener('click', (e) => {

    elementClicked = e.target;

    if (elementClicked.matches('select')) {

        var template = '';
        id = elementClicked.id;
        // select = document.getElementById(id);

        if (localStorage.getItem('focus') == 1) {
            if (id == localStorage.getItem('field')) {
                localStorage.removeItem('focus');
                localStorage.removeItem('field');
                return false;
            }
        }
        
        localStorage.setItem('focus', 1);
        localStorage.setItem('field', id);

        var request = new XMLHttpRequest();
        request.open('POST', 'getmsg');
        request.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
        request.setRequestHeader("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]')['content']);

        parentInput = id.split('-')[0];
        parentCategory = id.split('-')[1] == 'city' ? 'state' : id.split('-')[1] == 'state' ? 'country' : null;

        if (parentCategory != null) {
            parentValue = document.getElementById(parentInput + '-' + parentCategory).value;
        }

        var data = { "id": id, "parentValue": parentCategory != null ? parentValue : '' };

        request.send(JSON.stringify(data));

        request.onload = () => {

            if (request.status != 200) {w
                console.log("Status:" + request.status + " Error: " + request.statusText);
                return false;
            }

            select = document.getElementById(id);

            select.options.length = 0;
            var items = JSON.parse(request.responseText);

            items.forEach(item => {
                value = Object.values(item)[0];
                select.options[select.options.length] = new Option(value, value);
            });
            return false;
        }
    }

    if (!elementClicked.matches('select')) {
        if (localStorage.getItem('focus') == 1 && localStorage.getItem('field') != '') {
            localStorage.removeItem('focus');
            localStorage.removeItem('field');
        }
    }
});
