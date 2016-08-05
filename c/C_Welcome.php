<?php
//
// Конттроллер главной страницы.
//
class C_Welcome extends C_Base 
{

    function __construct() 
    {
    	parent::__construct();
    }

    protected function OnInput() 
    {
      parent::OnInput();

        $articles = M_Articles::Instance();
        $this->mysqli = M_MSQL::Instance();
      
        //список последних новостей
        $this->list_laitest_news = $articles->getArticles('articles',"1,4");
        //одна последняя новость
        $this->one_latest_news = $articles->getArticles('articles',1);
        //выбор редактора
        $this->editor_choise = $articles->getArticlesCategory('articles',6,8);
        //украина
        $this->ukraine = $articles->getArticlesCategory('articles',5,1);
        //мир одна новость
        $this->world = $articles->getArticlesCategory('articles',1,9);
        //мир список
        $this->world_list = $articles->getArticlesCategory('articles','1,3',9);

        //бизнес одна новость
        $this->bisness = $articles->getArticlesCategory('articles',1,2);
        //бизнес список
        $this->bisness_list = $articles->getArticlesCategory('articles',"0,3",2);
        //спорт список
        $this->sport = $articles->getArticlesCategory('articles',"0,3",3);
        //развлечения список
        $this->intertaiment = $articles->getArticlesCategory('articles',"0,3",4);
        //Здоровье список
        $this->helth = $articles->getArticlesCategory('articles',"0,3",5);
        //техно список
        $this->tech = $articles->getArticlesCategory('articles',"0,3",6);
         //популярные статьи
        $this->pop_articles = $articles->popularArticles(3);
        //последние прокоментированные статьи
        $this->laitest_coments = $articles->lastCommentedArticles();  
        //фото
        $this->in_foto = $this->mysqli->Select("SELECT * FROM `fotos_to_gallery` ORDER BY id_foto DESC"); 
        //репортаж
        $this->rep =  $articles->Report(); 
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {   	
        // Генерация содержимого страницы Welcome.
	  $vars = array('one_latest_news' => $this->one_latest_news,
                    'list_laitest_news' => $this->list_laitest_news,
                    'editor_choise' => $this->editor_choise,
                    'ukraine' => $this->ukraine,
                    'world' => $this->world,
                    'world_list' => $this->world_list,
                    'bisness' => $this->bisness,
                    'bisness_list' =>$this->bisness_list,
                    'sport' => $this->sport,
                    'intertaiment' =>$this->intertaiment,
                    'helth' => $this->helth,
                    'tech' => $this->tech,
                    'pop_articles' => $this->pop_articles,
                    'laitest_coments' => $this->laitest_coments,
                    'in_foto' => $this->in_foto,
                    'rep' => $this->rep);
    	
    	$this->content = $this->View('tpl_home_page.php', $vars);

		// C_Base.
        parent::OnOutput();
    }
}