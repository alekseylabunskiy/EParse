function insertName(){
    var name = $('#image_to_art').val();
    var g = $('#hidden_name').val();
    
    if (g != name) {
        var target = $('#hidden_name').val(name);

        $.ajax({
         url:'index.php?a=ajax_request',
         type:'POST',
         data:{search_image:target.val(),
               a:'ajax_request'},
         success: function(data){                            
                     $('#search_image').html(data); 
                  },
         error: function(jqXHR, exception)
               {
                  if (jqXHR.status === 0) {
                     alert('НЕ подключен к интернету!');
                  } else if (jqXHR.status == 404) {
                     alert('НЕ найдена страница запроса [404])');
                  } else if (jqXHR.status == 500) {
                     alert('НЕ найден домен в запросе [500].');
                  } else if (exception === 'parsererror') {
                     alert("Ошибка в коде: \n"+jqXHR.responseText);
                  } else if (exception === 'timeout') {
                     alert('Не ответил на запрос.');
                  } else if (exception === 'abort') {
                     alert('Прерван запрос Ajax.');
                  } else {
                     alert('Неизвестная ошибка:\n' + jqXHR.responseText);
                  }
               },
         dataType:"text",        
      });
    }   
}


$(document).ready(function(){
   setInterval(insertName,1000);
});
