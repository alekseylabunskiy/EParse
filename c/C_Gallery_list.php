<?php
//
// Контроллер страницы списка галлерей 
//
class C_Gallery_list extends C_Base 
{
    protected $list;
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
        //список галерей
        $this->list = $this->msqli->Select("SELECT * FROM `gallery_list`");
        //популярные статьи
        $this->pop_articles = $this->articles->popularArticles(3);
        //последние прокоментированные статьи
        $this->laitest_coments = $this->articles->lastCommentedArticles();
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {       
        // Генерация содержимого страницы C_Page.
        $vars = array('gallery_list' => $this->list,
                      'pop_articles' => $this->pop_articles,
                      'laitest_coments' => $this->laitest_coments);
        
        $this->content = $this->View('tpl_gallery_list.php', $vars);

        // C_Base.
        parent::OnOutput();
    }
}