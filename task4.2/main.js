$(document).ready(function(){
$("#form").submit(function(e) {
    e.preventDefault();
    var str =$(this).serialize();
    $.ajax({
    type: 'GET',            
    url: 'phpfile.php',
        data: str,
   success: function(data) {
            var json = $.parseJSON(data); 
        for (var i=0;i<json.length;++i)
        {
        $( ".inner" ).append( "<p>"+json[i]+"</p></br>" );
        } 
    }
          });                  
     });
});


