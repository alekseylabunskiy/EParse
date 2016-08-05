//функция Trigger осуществляет поиск по "не пустому" значению поля  и подключает нужную функцию поиска контента. 
function Trigger_comment(){
    //ищем заполненное поле
    var search_id_coment = $("#search_id_coment").val();
    var search_id_user = $("#search_coment_id_user").val();
    var search_id_article = $("#search_coment_id_article").val();
    var search_text_comment = $("#search_coment_text_comment").val();
    var search_create_comment = $("#search_coment_create_comment").val();
    var search_update_comment = $("#search_coment_update_comment").val();
    //если пустые все поля, то выводим список всех новостей 
    if (search_id_coment == '' && search_id_user == '' && search_id_article == '' && search_text_comment == '' && search_create_comment == '' && search_update_comment == '') {
        $('#adm_list_coments_users_main').fadeIn(1000);
        $('#adm_list_coments_users_updated').fadeOut(1000);
    }
   //если поле заполнено то подключаем нужную функцию
    else{
        if(search_id_coment != '') {
            getSearchIdComent();
        }
        if(search_id_user != '') {
            getSearchIdUser();
        }
        if(search_id_article != '') {
            getSearchIdArticle();
        }
        if(search_text_comment != '') {
            getSearchTextComent();
        }
        if(search_create_comment != '') {
            getSearchCreateComent();
        }
        if(search_update_comment != '') {
            getSearchUpdateComent();
        }
    }
}

function getSearchIdComent(){
    var maskInput = $("#search_id_coment").val();
    var cStart = $("#count_chars_id_coment").val();
    var countChars = maskInput.replace(/\s+/g, "").length;
    if(countChars != 0)
    {
        var cStartw = $("#re_chars_id_coment").val();
        var searchInput = $("#search_id_coment").val();
    }
    else
    {
        var cStartw = "";
        var searchInput = "";
    }
    if(cStart != countChars || cStartw != searchInput)
    {  
        $.ajax({
            url:'index.php?a=ajax_request',
            type:'POST',
            data:{search_coment_id:searchInput,
                a:'ajax_request'},
            success: function(data){                            
                    $('#search_result').html(data); 
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
    $('#adm_list_coments_users_main').fadeOut(1000);
    $("#count_chars_id_coment").val(countChars);
    $("#re_chars_id_coment").val(searchInput);
   }
}
      
function getSearchIdUser(){
    var maskInput = $("#search_coment_id_user").val();

    var cStart = $("#count_coment_id_user").val();
    var countChars = maskInput.replace(/\s+/g, "").length;
    if(countChars != 0)
    {
        var cStartw = $("#re_chars_coment_id_user").val();
        var searchInput = $("#search_coment_id_user").val();
    }
    else
    {
        var cStartw = "";
        var searchInput = "";
    }
    if(cStart != countChars || cStartw != searchInput)
    {  
        $.ajax({
            url:'index.php?a=ajax_request',
            type:'POST',
            data:{search_coment_id_user:searchInput,
                a:'ajax_request'},
            success: function(data){                            
                $('#search_result').html(data); 
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

        $('#adm_list_coments_users_main').fadeOut(1000);
        $("#count_coment_id_user").val(countChars);
        $("#re_chars_coment_id_user").val(searchInput);
    }
}

function getSearchIdArticle(){
    var maskInput = $("#search_coment_id_article").val();

    var cStart = $("#count_chars_id_article").val();
    var countChars = maskInput.replace(/\s+/g, "").length;
    if(countChars != 0)
    {
        var cStartw = $("#re_chars_id_article").val();
        var searchInput = $("#search_coment_id_article").val();
    }
    else
    {
        var cStartw = "";
        var searchInput = "";
    }
    if(cStart != countChars || cStartw != searchInput)
    {  
        $.ajax({
            url:'index.php?a=ajax_request',
            type:'POST',
            data:{search_coment_id_article:searchInput,
                a:'ajax_request'},
            success: function(data){                            
                $('#search_result').html(data); 
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

    $('#adm_list_coments_users_main').fadeOut(1000);
    $("#count_chars_id_article").val(countChars);
    $("#re_chars_id_article").val(searchInput);
}
}

function getSearchTextComent(){
    var maskInput = $("#search_coment_text_comment").val();

    var cStart = $("#count_chars_text_comment").val();
    var countChars = maskInput.replace(/\s+/g, "").length;
    if(countChars != 0)
    {
        var cStartw = $("#re_chars_text_comment").val();
        var searchInput = $("#search_coment_text_comment").val();
    }
    else
    {
        var cStartw = "";
        var searchInput = "";
    }
    if(cStart != countChars || cStartw != searchInput)
    {  
        $.ajax({
            url:'index.php?a=ajax_request',
            type:'POST',
            data:{search_text_coment:searchInput,
                a:'ajax_request'},
            success: function(data){                            
                $('#search_result').html(data); 
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

        $('#adm_list_coments_users_main').fadeOut(1000);
        $("#count_chars_text_comment").val(countChars);
        $("#re_chars_text_comment").val(searchInput);
    }
}      

function getSearchCreateComent(){
    var maskInput = $("#search_coment_create_comment").val();

    var cStart = $("#count_chars_create_comment").val();
    var countChars = maskInput.replace(/\s+/g, "").length;
    if(countChars != 0)
    {
        var cStartw = $("#re_chars_create_comment").val();
        var searchInput = $("#search_coment_create_comment").val();
    }
    else
    {
        var cStartw = "";
        var searchInput = "";
    }
    if(cStart != countChars || cStartw != searchInput)
    {  
        $.ajax({
            url:'index.php?a=ajax_request',
            type:'POST',
            data:{search_coment_create:searchInput,
                a:'ajax_request'},
            success: function(data){                            
                $('#search_result').html(data); 
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

        $('#adm_list_coments_users_main').fadeOut(1000);
        $("#count_chars_create_comment").val(countChars);
        $("#re_chars_create_comment").val(searchInput);
    }
}   

function getSearchUpdateComent(){
    var maskInput = $("#search_coment_update_comment").val();

    var cStart = $("#count_chars_update_comment").val();
    var countChars = maskInput.replace(/\s+/g, "").length;
    if(countChars != 0)
    {
        var cStartw = $("#re_chars_update_comment").val();
        var searchInput = $("#search_coment_update_comment").val();
    }
    else
    {
        var cStartw = "";
        var searchInput = "";
    }
    if(cStart != countChars || cStartw != searchInput)
    {  
        $.ajax({
            url:'index.php?a=ajax_request',
            type:'POST',
            data:{search_coment_update:searchInput,
                a:'ajax_request'},
            success: function(data){                            
                $('#search_result').html(data); 
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

        $('#adm_list_coments_users_main').fadeOut(1000);
        $("#count_chars_update_comment").val(countChars);
        $("#re_chars_update_comment").val(searchInput);
    }
}

$(document).ready(function(){
    setInterval(Trigger_comment,1000);
}); 
        