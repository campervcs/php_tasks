$(document).ready(function(){
$("#form").submit(function(e) {
    e.preventDefault();  
    var str =$(this).serialize();
    $.ajax({
    type: 'POST',            
    url: 'phpfile.php',
    data: str,
   success: function(data) {
       var json = $.parseJSON(data); 
        $('.text').empty();
       $( ".text" ).append( "<p>"+json.name+"</p></br>" );
       $( ".text" ).append( "<p>"+json.count+"</p></br>" );
       $( ".text" ).append( "<p>"+json.session_name+"</p></br>" );
       $( ".text" ).append( "<p>"+json.session_id+"</p></br>" );
       $( ".text" ).append( "<p>"+json.session_save_path+"</p></br>" );
       $( ".text" ).append( "<p>"+json.session_encode+"</p></br>" );
            }
        });
    });
                    
});


