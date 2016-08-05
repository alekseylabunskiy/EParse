<?php
//
// Контроллер страницы регистрации
//
class C_Registration extends C_Base
{
    public function __construct() 
    {
        parent::__construct();          
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() 
    {
        
        $mUsers = M_Users::Instance();
        $articles = M_Articles::Instance();
        // Выход из системы пользователя.        
        $mUsers->Logout();
        
        $this->alert = 'Пожалуста заполните все поля.';
        
        if (isset($_POST['subm_register']) && !empty($_POST['user_r_login'])) {
           
            $reg = $mUsers->Registration($_POST['user_name'],$_POST['user_r_login'],$_POST['user_r_password'],$_POST['user_email'],$role = 3);
            if($reg){
                $this->alert = 'Вы зарегестрированы!'; 
            }
            else{
                $this->alert = 'Пожалуста заполните все поля.';
            }

        }

        // C_Base.
        parent::OnInput();
        
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {    
        // Генерация содержимого формы входа.
        $vars = array('alert' => $this->alert);        
        $this->content = $this->View('tpl_registration.php', $vars);
        
        // C_Base.
        parent::OnOutput();
    }
}

