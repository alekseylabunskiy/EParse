<?php
//
// контроллер для управления изображениями
//
class A_Images extends A_Base_admin
{
    //
    // Конструктор.
    //
    function __construct()
    {
        $this->mysqli = M_MSQL::Instance();
    }
    
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput()
    {
        parent::OnInput();
        //записываем фото для статей
        if (isset($_POST['confirm_input_file']) && isset($_FILES['filename']['tmp_name'])) {
            
            $this->image = new M_Image();

            //сохраняем
            $sizes = array(
                '618' => array('width' => 618, 'height' => 468),
                '458' => array('width' => 458, 'height' => 335),
                '282' => array('width' => 282, 'height' => 211),
                '216' => array('width' => 216, 'height' => 164),
                '120' => array('width' => 120, 'height' => 90),
                '86' => array('width' => 86, 'height' => 60),
                '65' => array('width' => 65, 'height' => 47),
            );
            $this->foto = $this->image->SaveResized($sizes,'v/content_Images/images/');
            //записываем имя фото в базу данных

            $this->mysqli->Insert('images',['name'=>$this->foto,'category' => 'article']);

            if ($this->foto) {
               $this->message_succsess = 'Фото загружено удачно';
            }
            if (!$this->foto) {
               $this->message_erorr = 'Фото не было загружено';
            }
        }
        //фото для галлереи
        if (isset($_POST['confirm_input_file_for_gallery']) && isset($_FILES['filename']['tmp_name'])) {
            
            $this->image = new M_Image();

            //сохраняем
            $sizes = array(
                '618' => array('width' => 618, 'height' => 468),
                '282' => array('width' => 282, 'height' => 211),
                '96' => array('width' => 96, 'height' => 76),
                '65' => array('width' => 65, 'height' => 47),
            );
            $this->foto = $this->image->SaveResized($sizes,'v/gallery/');
            //записываем имя фото в базу данных

            $this->mysqli->Insert('images',['name'=>$this->foto,'category' => 'gallery']);

            if ($this->foto) {
               $this->message_succsess_gallery = 'Фото загружено удачно';
            }
            if (!$this->foto) {
               $this->message_erorr_gallery = 'Фото не было загружено';
            }
        }
    }
    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {   
        // Генерация содержимого страницы.
        $vars = array('message_succsess' =>$this->message_succsess,
                      'message_error' =>$this->message_erorr,
                      'message_succsess_gallery' => $this->message_succsess_gallery,
                      'message_erorr_gallery' => $this->message_erorr_gallery);

        $this->content = $this->View('/admin/tpl_upload_files.php', $vars);
        
        parent::OnOutput();
    }
}
