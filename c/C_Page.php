<?php
//
// Контроллер страницы с одной новостью 
//
class C_Page extends C_Base 
{
    function __construct() 
    {
        parent::__construct();
    }

    protected function OnInput() 
    {
        parent::OnInput();

        $this->articles = M_Articles::Instance();
        $this->coments = M_Coments::Instance();
        $this->user = M_Users::Instance();
        $this->mysqli = M_MSQL::Instance();

        //текущий пользователь
        $this->current_user = $this->user->Get();
       
        $this->get = intval($_GET['id']);
        //добавляем коментарии в базу

        if ($this->current_user != null) {
            $id_user = $this->current_user['id_user'];
            $id_article = $this->get;
            $text = $_POST['submitted_comment'];
            if (!empty($text)) {
               $this->coments->addComment($id_user,$id_article,$text);
            }           
        }
        else{
            $this->alert = 'Авторизуйтесь для того что бы оставлять коментарии.';
        }
        //одна статья
        $this->art = $this->articles->getOneArticle('articles',$this->get);
        //две статьи из рубрики
        $this->related = $this->articles->getArticlesCategory('articles',"1,2",$this->art[0]['category']);
        //коментарии к статье
        $this->coment = $this->coments->getComentsToArt($this->get);
        //навигация)
        $this->bcamp = $this->articles->Breadcumps($this->art[0]['category']);
        //устанавливаем значение строчки "коментарии"
        $this->com = $this->articles->stringComent($this->art[0]['count_coments']);
        //фото
        $this->in_foto = $this->mysqli->Select("SELECT * FROM `fotos_to_gallery` ORDER BY id_foto DESC");
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {       
        // Генерация содержимого страницы C_Page.
        $vars = array('article' => $this->art[0],
                      'related' => $this->related,
                      'coments' => $this->coment,
                      'get' => $this->get,
                      'alert' => $this->alert,
                      'bcamp' => $this->bcamp[0],
                      'description_count_com' =>$this->com,
                      'in_foto' => $this->in_foto);
        
        $this->content = $this->View('tpl_one_post.php', $vars);

        // C_Base.
        parent::OnOutput();
    }
}