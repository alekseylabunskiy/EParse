<?php
function __autoload($classname){
  $type = explode('_' , $classname);
    switch($type[0]){
      case 'C':
        include_once 'c/' . $classname . '.php';
            break;
      case 'M':
        include_once 'm/' . $classname . '.php';
            break;
      case 'A':
        include_once 'c/a/' . $classname . '.php';
            break;            
    }
}
// Выбор основного контроллера.
switch ($_GET['c'])
{
  case 'post':
    $controller = new C_Page();
      break;
  case 'reg':
    $controller = new C_Registration();
      break;
  case 'login':
    $controller = new C_Login();
      break; 
  case 'categories':
    $controller = new C_Categories();
      break;
  case 'gallery_list':
    $controller = new C_Gallery_list();
      break;
  case 'gallery_page':
    $controller = new C_Gallery_Page();
      break;              
  default:
    $controller = new C_Welcome();
}
// Выбор контроллера админки
switch ($_GET['a']) {
  case 'admin_panel':
    $controller = new A_Base_admin();
    break;
  case 'red_articles':
    $controller = new A_Articles();
    break;
  case 'ajax_request':
    $controller = new C_Ajax();
    break;  
  case 'edit_users':
    $controller = new A_Users();
    break;
  case 'redact_coments':
    $controller = new A_Coments();
    break;  
  case 'upload_files':
    $controller = new A_Images();
    break;  
  case 'redact_galleryes':
    $controller = new A_Gallery();
    break;  
}
// Обработка запроса.
$controller->Request();
