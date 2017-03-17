$(document).ready(function(){
$("#form").submit(function(e) {
    e.preventDefault();  
    var str =$(this).serialize();
    $.ajax({
    type: 'POST',            
    url: 'phpfile.php',
        data: str,
   success: function(data) {
       if (data=="ОШИБКА!"){
            $( ".inner" ).append( "<p>Невалидный email</p></br>" );
           return;
       }
            var json = $.parseJSON(data); 
        $( ".inner" ).append( "<p>Сообщение</p></br>" );
        $( ".inner" ).append( "<p>"+json+"</p></br>" );
         
    }
});
                    
});
});


