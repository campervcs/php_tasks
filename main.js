$(document).ready(function(){
$("#form").submit(function(e) {
    e.preventDefault();  
    var str =$(this).serialize();
    $.ajax({
    type: 'GET',            
    url: 'phpfile.php',
        data: str,
   success: function(data) {
                alert("Data: " + data);
            }
        });
    });
                    
});


