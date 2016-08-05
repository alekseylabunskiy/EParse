<?php
//
// Базовый контроллер сайта.
//
abstract class C_Base extends C_Controller
{
    protected $needLogin;   // необходимость авторизации 
    protected $user;        // авторизованный пользователь
    private $start_time;    // время начала генерации страницы
    
    //
    // Конструктор.
    //
    function __construct()
    {
        $this->needLogin = false;
        $this->user = null;
        $this->name = null;     
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput()
    {
        // Очистка старых сессий и определение текущего пользователя.
        $mUsers = M_Users::Instance();      
        $mUsers->ClearSessions();       
        $this->user = $mUsers->Get();
        //если пользователь залогинен передаем его имя
        if (!empty($this->user)) {
            $this->name = $this->user['name'];
        }

        //logout
        if (isset($_GET['logout'])) {
            $mUsers->Logout();
            header("Location:index.php");          
        }
        //проверяем есть ли у пользователя доступ к админ панели
        if($mUsers->Can('INTER_TO_ADMIN')){
            $this->accsess = true;
        }
        else{
            $this->accsess = false;
        }
        // Засекаем время начала обработки запроса.
        $this->start_time = microtime(true);
    }
    
    //
    // Виртуальный генератор HTML.
    //  
    protected function OnOutput()
    {
        // Основной шаблон всех страниц.
        $vars = array('content' => $this->content,
                      'title' =>$this->title,
                      'name_user' =>$this->name,
                      'accsess' =>$this->accsess);          
        $page = $this->View('tpl_main.php', $vars);
                         
        // Время обработки запроса.
        $time = microtime(true) - $this->start_time;        
        $page .= "<!-- Время генерации страницы: $time сек.-->";
        
        // Вывод HTML.
        echo $page;
    }
}
