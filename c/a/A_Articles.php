<?php
//
// контроллер для управления контентом статей
//
class A_Articles extends A_Base_admin
{
    //
    // Конструктор.
    //
    function __construct()
    {
        $this->articles = M_Articles::Instance();
        $this->mysqli = M_MSQL::Instance();
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput()
    {
        parent::OnInput();
        //
        //Добавляем статью
        //
        if (isset($_POST['insert_art'])) {
            $this->articles->addArticles($_POST['add_title_art'],$_POST['add_content_art'],$_POST['add_author_art'],$_POST['add_image_art'],$_POST['add_cathegory_art']);
        }
        //
        //вносим изменения в статью
        //
        if (isset($_POST['edit_article'])) {
            $obj = [
                'title'=> $this->articles->Clean($_POST['edit_title']),
                'content' => $this->articles->Clean($_POST['edit_content']),
                'image' => $this->articles->Clean($_POST['edit_image']),
                'update_at' => date("Y-m-d H:i:s"),
                'category' => $this->articles->Clean($_POST['edit_category']), 
            ];

            $id = $this->articles->Clean($_GET['id_red']);
            $this->update = $this->articles->UpdateArticles('articles',$obj,$id);
        }
        $this->list = $this->articles->getArticles('articles',100);
        //
        //удаляем статью
        //
        if (isset($_GET['delete'])) {
            $id = $this->articles->Clean($_GET['delete']);
            $this->articles->DeleteArticles($id);
        }
        // 
        //одна статья
        //
        if (isset($_GET['id_red']) && $_GET['id_red'] !=null) {
            $this->one = $this->articles->getOneArticle('articles',$_GET['id_red']);
        } 
        //список изображений
        $this->list_images = $this->mysqli->Select("SELECT * FROM `images` WHERE `category` = 'article' ORDER BY id DESC");
        //список категорий
        $this->list_categories = $this->mysqli->Select("SELECT * FROM `categories`");
    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {   
        // Генерация содержимого страницы.
        $vars = array('articles' => $this->list);

        $this->content = $this->View('/admin/tpl_articles.php', $vars);

        //если передан GET на редактирование статьи 
        if (isset($_GET['id_red'])) {
            
            $vars = array('article' => $this->one[0],
                          'images' => $this->list_images);

            $this->content = $this->View('/admin/tpl_edit_articles.php', $vars);
        }
        //добавляем статью
        if (isset($_GET['add_articles'])) {
           
            $vars = array('images' => $this->list_images,
                          'list_categories' => $this->list_categories);

            $this->content = $this->View('/admin/tpl_add_article.php', $vars);
        }
        // C_Base.
        parent::OnOutput();
    }
}
