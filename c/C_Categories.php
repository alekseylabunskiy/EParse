<?php
//
// Конттроллер страницы новостей Украина.
//
class C_Categories extends C_Base 
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

    //популярные статьи
    $this->pop_articles = $articles->popularArticles(3);
    //последние прокоментированные статьи
    $this->laitest_coments = $articles->lastCommentedArticles();
    
    //фото
    $this->in_foto = $this->mysqli->Select("SELECT * FROM `fotos_to_gallery` ORDER BY id_foto DESC");
    //Переопределяем функции исходя из переданного гет параметра 

    switch ($_GET['id_category']) {
      case 'ukraine':
        $this->main_title = 'Украина';
        //Главная новость рубрики
        $this->main_article = $articles->getArticlesCategory('articles',1,1);
        //Все новости рубрики
        $this->list_articles = $articles->getArticlesCategory('articles',"1,20",1);
        break; 
      case 'world':
        $this->main_title = 'Мир';
        //Главная новость рубрики
        $this->main_article = $articles->getArticlesCategory('articles',1,9);
        //Все новости рубрики
        $this->list_articles = $articles->getArticlesCategory('articles',"1,20",9);
        break;  
      case 'bisness':
        $this->main_title = 'Бизнесс';
        //Главная новость рубрики
        $this->main_article = $articles->getArticlesCategory('articles',1,2);
        //Все новости рубрики
        $this->list_articles = $articles->getArticlesCategory('articles',"1,20",2);
        break; 
      case 'sport':
       $this->main_title = 'Спорт';
        //Главная новость рубрики
        $this->main_article = $articles->getArticlesCategory('articles',1,3);
        //Все новости рубрики
        $this->list_articles = $articles->getArticlesCategory('articles',"1,20",3);
        break; 
      case 'intertaiment':
        $this->main_title = 'Развлечения';
        //Главная новость рубрики
        $this->main_article = $articles->getArticlesCategory('articles',1,4);
        //Все новости рубрики
        $this->list_articles = $articles->getArticlesCategory('articles',"1,20",4);
        break; 
      case 'helth':
        $this->main_title = 'Здоровье';
        //Главная новость рубрики
        $this->main_article = $articles->getArticlesCategory('articles',1,5);
        //Все новости рубрики
        $this->list_articles = $articles->getArticlesCategory('articles',"1,20",5);
        break; 
      case 'tech':
        $this->main_title = 'Техника';
        //Главная новость рубрики
        $this->main_article = $articles->getArticlesCategory('articles',1,6);
        //Все новости рубрики
        $this->list_articles = $articles->getArticlesCategory('articles',"1,20",6);
        break;
      case 'report':
        $this->main_title = 'Репортаж';
        //Главная новость рубрики
        $this->main_article = $articles->getArticlesCategory('articles',1,10);
        //Все новости рубрики
        $this->list_articles = $articles->getArticlesCategory('articles',"1,20",10);
        break;  
    }
  }

  //
  // Виртуальный генератор HTML.
  //
  protected function OnOutput() 
  {       
      // Генерация содержимого страницы Welcome.
      $vars = array('main_title' =>$this->main_title,
                    'main_article'=>$this->main_article,
                    'list_articles' => $this->list_articles,
                    'pop_articles' =>$this->pop_articles,
                    'laitest_coments' =>$this->laitest_coments,
                    'in_foto' => $this->in_foto);
      
      $this->content = $this->View('tpl_list_news.php', $vars);

      // C_Base.
      parent::OnOutput();
  }
}