$(function() {
    //ловим отправку формы
    $("form#comment_form").submit(function(e){
        //запрещаем ее отправку
        e.preventDefault();
        //прячем вывод старых коментариев
        $('#old_com').hide();
        //текст сообщения
        var message = $("#edit-submitted-message").val();
        //id статьи  
        var furl=$(this).attr('action').split("?")[1].split("&")[1].split("id=")[1]; 
        //ajax запрос на контроллер C_Ajax        
        $.ajax({
            type: "POST",
            url: "index.php?a=ajax_request",
            data: {"message": message,"id_art":furl},
            cache: false,                       
            success: function(data){
                $('#div_com').html(data);
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
        });
        return false;
                
    });
});