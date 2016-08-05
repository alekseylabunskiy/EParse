<?php
//
// контроллер для управления Галлереями
//
class A_Gallery extends A_Base_admin
{
    private $id_gallery;
    protected $title = 'Создать Галлерею';
    //
    // Конструктор.
    //
    function __construct()
    {
        $this->mysqli = M_MSQL::Instance();
        $this->users = M_Users::Instance();
        $this->art = M_Articles::Instance();
        $this->functions = M_Functions::Instance();
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput()
    {   
        if(!$this->users->Can('EDIT_GALLERY')){
            header("Location:index.php?c=login");
        }
        //удаляем галлерею
        if (isset($_GET['delete_gallery'])) {
            $delete_gallery = intval($_GET['delete_gallery']);
            $where = "id = {$delete_gallery}";
            $this->mysqli->Delete('gallery_list',$where);
        }
        //создаем галлерею
        if (isset($_POST['conf_add_gallery'])) {
            $this->title = 'Галлерея успешно создана.';

            $obj = ['name_gallery' =>  $this->art->Clean($_POST['add_name_gallery']),
                    'description_gallery' =>  $this->art->Clean($_POST['add_description_gallery']),
                    'title_image' => $this->art->Clean($_POST['add_title_image_gallery']),
                    'create_at' => date("Y-m-d H:i:s")];
            $this->mysqli->Insert('gallery_list',$obj);        
        }
        $this->id_gallery = intval($_GET['id_gallery']);
        //изменяем галлерею
        if (isset($_POST['conf_edit_gallery'])) {

            $obj = ['name_gallery' => $this->art->Clean($_POST['edit_name_gallery']),
                    'description_gallery' => $this->art->Clean($_POST['edit_description_gallery']),
                    'title_image' => $this->art->Clean($_POST['edit_title_image_gallery']),
                    'update_at' => date("Y-m-d H:i:s")];

            $where = "id = $this->id_gallery";
            $this->mysqli->Update('gallery_list',$obj,$where);        
        }
        //список всех галлерей
        $this->galleryes = $this->mysqli->Select("SELECT * FROM `gallery_list`");
        //колличество фото в галлере
        $this->number_of_foto;
        //одна галлерея
        $this->one_gallery = $this->mysqli->Select("SELECT * FROM `gallery_list` WHERE id = {$this->id_gallery}"); 
        //список изображений
        $this->list_images = $this->mysqli->Select("SELECT * FROM `fotos_to_gallery`");

        //добавляем фото к галерее
        if (isset($_POST['add_fotos_to_g'])) {

            $obj = ['name_foto' => $this->art->Clean($_POST['foto_name']),
                    'title_foto' => $this->art->Clean($_POST['add_title_image']),
                    'id_gallery' => $this->art->Clean($_POST['add_cathegory']),
                    'create_at' => date("Y-m-d H:i:s")];

            $this->mysqli->Insert('fotos_to_gallery',$obj);
        }
        //контент
        $this->list_fotos_to_gallery = $this->functions->Page_navigation_content('images',4,intval($_GET['page']));

        $this->nav = $this->functions->Page_navigation('images',4,intval($_GET['page']));
    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {       
        //базовый шаблон
        $vars = array('galleryes' => $this->galleryes);

        $this->content = $this->View('/admin/tpl_redact_gallery.php', $vars);
        
        if (isset($_GET['add_foto_to_gallery'])) {
            // Генерация содержимого страницы.
            $vars = array('list_fotos_to_gallery' =>$this->list_fotos_to_gallery,
                          'galleryes' => $this->galleryes,
                          'nav' => $this->nav);

            $this->content = $this->View('/admin/tpl_add_foto_to_gallery.php', $vars);
        }

        if (isset($_GET['add_gallery'])) {
            $vars = array('list_images' => $this->list_images,
                          'title' => $this->title);

            $this->content = $this->View('/admin/tpl_add_gallery.php', $vars);
        }

        if (isset($_GET['id_gallery'])) {

            $this->id_gallery = intval($_GET['id_gallery']);
            
            $vars = array('id_gallery' => $this->id_gallery,
                          'one_gallery' => $this->one_gallery[0],
                          'list_images' => $this->list_images);

            $this->content = $this->View('/admin/tpl_edit_gallery.php', $vars);    
        }

        parent::OnOutput();
    }
}
