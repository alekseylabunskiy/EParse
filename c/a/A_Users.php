<?php
//
// контроллер для управления данными пользователя
//
class A_Users extends A_Base_admin
{
    //
    // Конструктор.
    //
    function __construct()
    {
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput()
    {   
        $this->mysqli = M_MSQL::Instance();
        $this->users = M_Users::Instance();
        $this->articles = M_Articles::Instance();

        //добавляем пользователя
        if (isset($_POST['create_user'])) {
            if (!empty($_POST['add_login']) || !empty($_POST['add_password'])|| !empty($_POST['add_email'])) {
                $this->users->CreateUsr($_POST['add_login'],$_POST['add_password'],$_POST['add_email'],$_POST['add_role'],$_POST['add_name']);
            }
        }
        //
        //Удаляем статью
        //
        if (isset($_GET['delete_user'])) {
            $id = $_GET['delete_user'];
            $where = "id_user = $id";
            $this->mysqli->Delete('users',$where);
        }
        //список ролей
        $this->roles = $this->mysqli->Select("SELECT * FROM `roles` GROUP BY id_role DESC");

        //проверяем есть ли у пользователя доступ к данным пользователей
        if(!$this->users->Can('USERS_DATA')){
            header("Location:index.php?c=login");
        }

        //редактируем данные пользователя        
        if (isset($_POST['edit_profile'])) {
           $this->articles->edit_Profile_user($_POST['edit_login'],$_POST['edit_email'],$_POST['edit_role'],md5($_POST['edit_password']),$_POST['edit_name']);
        }

        //список пользователей
        $this->users = $this->mysqli->Select("SELECT * FROM `users`");

        //данные одного пользователя
        $this->id = intval($_GET['id_user_red']);
        $this->user = $this->mysqli->Select("SELECT * FROM `users` WHERE id_user = {$this->id}");

    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {    
            
        $vars = array('users' =>  $this->users);

        $this->content = $this->View('/admin/tpl_users.php', $vars);


        //передан GET на редактирование данных пользователя          
        if (isset($_GET['id_user_red'])) {
            $vars = array('users' =>  $this->users,
                          'user' => $this->user[0]);

            $this->content = $this->View('/admin/tpl_edit_user.php', $vars);
        }
        //Передан GET на добавление юзера

        if (isset($_GET['add_new_user'])) {
            $vars = array('roles' => $this->roles);

            $this->content = $this->View('/admin/tpl_new_user.php', $vars);
        }
       
        parent::OnOutput();
    }
}
