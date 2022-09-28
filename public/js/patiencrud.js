$(document).ready (function(){
    
    $('#borndate').on('change', function(){
        
        
        const selectdate =  $('#borndate').val();
        const today = moment(new Date());

        var borndate =  moment(selectdate);
        var diff = today.diff(borndate, 'years')

        $('#age').val(diff);

    })
    
});



