//функция Trigger осуществляет поиск по "не пустому" значению поля  и подключает нужную функцию поиска контента. 
function Trigger_user(){
   //ищем заполненное поле
   var maskInputid_user = $("#search_id_user").val();
   var maskInputlogin_user = $("#search_login_user").val();
   var maskInputemail_user = $("#search_email_user").val();
   var maskInputrole_user = $("#search_role_user").val();
   var maskInputname_user = $("#search_name_user").val();
   //если пустые все поля, то выводим список всех новостей 
   if (maskInputid_user == '' && maskInputlogin_user == '' && maskInputemail_user == '' && maskInputrole_user == '' && maskInputname_user == '') {
      $('#adm_list_users_main').show();
      $('#adm_list_users_updated').hide();
   }
   //если поле заполнено то подключаем нужную функцию
   else{
      if (maskInputid_user != '') {
         getSearchInput();
      }
      if (maskInputlogin_user != '') {
         getSearchLogin();
      }
      if (maskInputemail_user != '') {
         getSearchMail();
      }
      if (maskInputrole_user != '') {
         getSearchRole();
      }
      if (maskInputname_user != '') {
         getSearchName();
      }
   }
}

function getSearchInput(){
   var maskInput = $("#search_id_user").val();
        
   var cStart = $("#count_chars_id_user").val();
   var countChars = maskInput.replace(/\s+/g, "").length;
   if(countChars != 0)
   {
      var cStartw = $("#re_chars_id_user").val();
      var searchInput = $("#search_id_user").val();
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
         data:{search_id_user:searchInput,
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
      $('#adm_list_users_main').hide();
      $("#count_chars_id_user").val(countChars);
      $("#re_chars_id_user").val(searchInput);
   }
}
      
function getSearchLogin(){
   var maskInput = $("#search_login_user").val();
   
   var cStart = $("#count_chars_login_user").val();
   var countChars = maskInput.replace(/\s+/g, "").length;
   if(countChars != 0)
   {
      var cStartw = $("#re_chars_login_user").val();
      var searchInput = $("#search_login_user").val();
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
         data:{search_login_user:searchInput,
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
      
      $('#adm_list_users_main').hide();
      $("#count_chars_login_user").val(countChars);
      $("#re_chars_login_user").val(searchInput);
   }
}
function getSearchMail(){
   var maskInput = $("#search_email_user").val();
   if (maskInput == '') {
      return false;

   }
   var cStart = $("#count_chars_email_user").val();
   var countChars = maskInput.replace(/\s+/g, "").length;
   if(countChars != 0)
   {
      var cStartw = $("#re_chars_email_user").val();
      var searchInput = $("#search_email_user").val();
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
         data:{search_email_user:searchInput,
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
      
      $('#adm_list_users_main').hide();
      $("#count_chars_email_user").val(countChars);
      $("#re_chars_email_user").val(searchInput);
   }
}
function getSearchRole(){
   var maskInput = $("#search_role_user").val();
   if (maskInput == '') {
      return false;

   }
   var cStart = $("#count_chars_role_user").val();
   var countChars = maskInput.replace(/\s+/g, "").length;
   if(countChars != 0)
   {
      var cStartw = $("#re_chars_role_usert").val();
      var searchInput = $("#search_role_user").val();
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
         data:{search_role_user:searchInput,
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

      $('#adm_list_users_main').hide();
      $("#count_chars_role_user").val(countChars);
      $("#re_chars_role_user").val(searchInput);
   }
}      

function getSearchName(){
   var maskInput = $("#search_name_user").val();
   if (maskInput == '') {
      return false;

   }
   var cStart = $("#count_chars_name_user").val();
   var countChars = maskInput.replace(/\s+/g, "").length;
   if(countChars != 0)
   {
      var cStartw = $("#re_chars_name_user").val();
      var searchInput = $("#search_name_user").val();
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
         data:{search_name_user:searchInput,
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

      $('#adm_list_users_main').hide();
      $("#count_chars_name_user").val(countChars);
      $("#re_chars_name_user").val(searchInput);
   }
}   


$(document).ready(function(){
   setInterval(Trigger_user,1000);
}); 
