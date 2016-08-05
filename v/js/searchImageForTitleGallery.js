function insertImageForGallery(){
    var name = $('#image_to_gallery').val();
    var g = $('#hidden_name_g').val();
    if (g != name) {
        var target = $('#hidden_name_g').val(name);

        $.ajax({
         url:'index.php?a=ajax_request',
         type:'POST',
         data:{searchImageForGallery:target.val(),
               a:'ajax_request'},
         success: function(data){                            
                     $('#search_image_for_gall').html(data); 
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
   setInterval(insertImageForGallery,1000);
});
