<?php
//
// контроллер для управления Коментариями
//
class A_Coments extends A_Base_admin
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
        $this->art = M_Articles::Instance();
        $this->mysqli = M_MSQL::Instance();
        $this->users = M_Users::Instance();
        
        $this->id = intval($_GET['id_coment_red']);
        //проверяем есть ли у пользователя доступ к редактированию коментариев
        if(!$this->users->Can('REDACTION_COMENTS')){
            header("Location:index.php?c=login");
        }
        //список коментариев
        $this->coments = $this->mysqli->Select("SELECT * FROM `coments`");
        //редактируем коментарий
        if (isset($_POST['edit_one_coment']) && !empty($_POST['edited_text_coment'])){
            $text = $this->art->Clean($_POST['edited_text_coment']);
            
            $obj = ['text_coment' => $text,
                    'update_at' => date("Y-m-d H:i:s")];

            $where = "id_coment = $this->id";
            $this->mysqli->Update('coments',$obj,$where);
        }
        //один коментарий
        
        $this->one_coment = $this->mysqli->Select("SELECT * FROM `coments` WHERE id_coment = {$this->id}");

    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {       

        $vars = array('coments' => $this->coments);

        $this->content = $this->View('/admin/tpl_red_coments.php', $vars);

        if (isset($_GET['id_coment_red']) && intval($_GET['id_coment_red'])) {
            
            $this->id_coment = ($_GET['id_coment_red']);
            
            $vars = array('id_coment' => $this->id_coment,
                          'one_coment' => $this->one_coment[0]);

            $this->content = $this->View('/admin/tpl_edit_one_article.php', $vars);
        }
       
        parent::OnOutput();
    }
}
