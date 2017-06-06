$(document).ready(function(){
$("#form").submit(function(e) {
    e.preventDefault();  
    var str =$(this).serialize();
    $.ajax({
    type: 'POST',            
    url: 'phpfile.php',
        data: str,
   success: function(data) {
       $('.inner').empty();
        $( ".inner" ).append( "<p>Сообщение</p></br>" );
        $( ".inner" ).append( "<p>"+data+"</p></br>" );
         
    }
});
                    
});
});


