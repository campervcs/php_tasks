$(document).ready(function(){
$("#form").submit(function(e) {
    e.preventDefault();
    var check=$('input:radio:checked').val();
    $.ajax({
    type: 'GET',            
    url: 'phpfile.php',
        data: {'check':check},
   success: function(data) {
            var json = $.parseJSON(data); 
        $( ".inner" ).append( "<p>"+json.age+"</p></br>" );
       $( ".inner" ).append( "<p>"+json.rec+"</p></br>" );
    }
          });                  
     });
});


