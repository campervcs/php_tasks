$(document).ready(function(){
$("#form").submit(function(e) {
    e.preventDefault();
    var check=$('input:radio:checked').attr('id');
    var length=$('[name="length"]').val();
    var low=$('[name="low"]').val();
    var hight=$('[name="hight"]').val();
    $.ajax({
    type: 'GET',            
    url: 'phpfile.php',
        data: {'check':check,'length':length,'low':low,'hight':hight},
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
$('[name="btn"]').click(function(){
    $('[name="normal"]').removeAttr("checked");
    $('[name="length"]').val('');
    $('[name="low"]').val('');
    $('[name="hight"]').val('');
});
});


