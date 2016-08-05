<?php 

class M_Functions
{
    private static $instance;

    function __construct()
    {
        $this->db = M_MSQL::Instance();
    }

    public static function Instance()
    {
        if (self::$instance == null)
            self::$instance = new M_Functions();
            
        return self::$instance;
    }
    //функция постраничной навигации
    public function Page_navigation_content($table,$limit,$num_page){
        //колличество записей
        $count = $this->db->Select("SELECT COUNT(*) AS count FROM {$table}");
        //колличество страниц
        $pages = intval(($count[0]['count'] - 1) / $limit) + 1;  

        // Извлекаем из URL текущую страницу 
        $page = $num_page;
        $page = intval($page);
        
        if(empty($page) or $page < 0) $page = 1; 
        
        if($page > $pages) $page = $pages;
        // Вычисляем начиная к какого номера 
        // следует выводить сообщения 
        $start = $page * $limit - $limit; 
        $result = $this->db->Select("SELECT * FROM {$table} WHERE `category` = 'gallery' LIMIT $start, $limit");
        
        return $result;
    }
    public function Page_navigation($table,$limit,$num_page){  
        //колличество записей
        $count = $this->db->Select("SELECT COUNT(*) AS count FROM {$table}");
        //колличество страниц
        $pages = intval(($count[0]['count'] - 1) / $limit) + 1; 
        // Извлекаем из URL текущую страницу 
        $page = $num_page;
        $page = intval($page);
        
        if(empty($page) or $page < 0) $page = 1; 
        
        if($page > $pages) $page = $pages;   
        //заносим результат в массив $result для показа на странице
        $result = [];
        // Проверяем нужны ли стрелки назад 
        if ($page != 1) $result += ['pervpage' => '<li><a href= index.php?a=redact_galleryes&add_foto_to_gallery&page=1><<</a></li><li><a href= index.php?a=redact_galleryes&add_foto_to_gallery&page='. ($page - 1) .'><</a></li>']; 
        // Проверяем нужны ли стрелки вперед 
        if ($page != $pages) $result += ['nextpage' => '<li><a href=index.php?a=redact_galleryes&add_foto_to_gallery&page='. ($page + 1) .'>></a></li><li><a href= index.php?a=redact_galleryes&add_foto_to_gallery&page=' .$pages. '>>></a></li>']; 

        // Находим две ближайшие станицы с обоих краев, если они есть 
        if($page - 2 > 0) $result += ['page2left' => ' <li><a href= index.php?a=redact_galleryes&add_foto_to_gallery&page='. ($page - 2) .'>'. ($page - 2) .'</a></li>']; 
        if($page - 1 > 0) $result += ['page1left' => '<li><a href= index.php?a=redact_galleryes&add_foto_to_gallery&page='. ($page - 1) .'>'. ($page - 1) .'</a></li>']; 
        if($page + 2 <= $pages) $result += ['page2right' => '<li><a href= index.php?a=redact_galleryes&add_foto_to_gallery&page='. ($page + 2) .'>'. ($page + 2) .'</a></li>']; 
        if($page + 1 <= $pages) $result += ['page1right' => '<li><a href= index.php?a=redact_galleryes&add_foto_to_gallery&page='. ($page + 1) .'>'. ($page + 1) .'</a></li>']; 
        
        $result += ['page' => '<li class="active"><a href= index.php?a=redact_galleryes&add_foto_to_gallery&page=' . $page .'>'. $page . '</a></li>']; 
        
        return $result;
    }
}

