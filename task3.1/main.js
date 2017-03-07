$(document).ready(function(){
$("#form").submit(function(e) {
    e.preventDefault();  
    var str =$(this).serialize();
    $.ajax({
    type: 'GET',            
    url: 'phpfile.php',
        data: str,
   success: function(data) {
     if (data==="ОШИБКА"){
        $( ".inner" ).append( "<p>ОШИБКА</p></br>" );
        return;
    }
            var json = $.parseJSON(data); 
        $( ".inner" ).append( "<p>Массив</p></br>" );
           for (var i=0;i<json.nonsort.length;++i)
        {
        $( ".inner" ).append( "<p>"+json.nonsort[i]+"</p></br>" );
        }    
        $( ".inner" ).append( "<p>Сортированный массив</p></br>" );
           for (var i=0;i<json.sorted.length;++i)
        {
        $( ".inner" ).append( "<p>"+json.sorted[i]+"</p></br>" );
        }  
    }
});
                    
});
});


