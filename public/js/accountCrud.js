$('#dni').on('blur', function(){
    $('#username').val(
        $('#dni').val()
        );
    
    // console.log($('#dni').val());

});