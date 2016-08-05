<?php
//
// Контроллер страницы фото галлереи
//
class C_Gallery_page extends C_Base 
{
    function __construct() 
    {
        $this->articles = M_Articles::Instance();
        $this->coments = M_Coments::Instance();
        $this->user = M_Users::Instance();
        $this->msqli = M_MSQL::Instance();
    }

    protected function OnInput() 
    {
        parent::OnInput();
        $this->id_foto = intval($_GET['id_g']);
        //описание галереи
        $this->description = $this->msqli->Select("SELECT * FROM `gallery_list` WHERE id = {$this->id_foto}"); 
        //все фото галереи 
        $this->foto = $this->msqli->Select("SELECT * FROM `fotos_to_gallery` WHERE id_gallery = {$this->id_foto}");
        
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {       
        // Генерация содержимого страницы C_Page.
        $vars = array('foto' => $this->foto,
                      'description' => $this->description[0]);
        
        $this->content = $this->View('tpl_gallery_page.php', $vars);

        // C_Base.
        parent::OnOutput();
    }
}