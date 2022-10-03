$(document).ready (function(){
    


    $('#borndate').on('change', function(){
        
        
        const selectdate =  $('#borndate').val();
        const today = moment(new Date());

        var borndate =  moment(selectdate);
        var diff = today.diff(borndate, 'years')

        $('#age').val(diff);

    })

    $('#borndate').on('change', function(){
        
        
        const selectdate =  $('#borndate').val();
        const today = moment(new Date());

        var borndate =  moment(selectdate);
        var diff = today.diff(borndate, 'years')

        $('#age').val(diff);

    })


    $('#patientform').on('mouseup', function(){

        
        var options = ["country","state","city"];

        document.querySelectorAll("#patientform").forEach( el => {
            el.addEventListener("click", e => {
               const id = e.target.getAttribute("id");
                
               if (id===null){
                return false;
               }     

               if ( id.includes(options[0]) || id.includes(options[1]) || id.includes(options[2]) ){
                    api = true;
                }
                else {
                    api = false
                }
            });
        });
    });
    
});



