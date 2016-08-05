<?

/**
* Класс работы с коментариями
*/
class M_Coments
{
    private static $instance;

    function __construct()
    {
        $this->db = M_MSQL::Instance();
        $this->articles = M_Articles::Instance();
    }

    public static function Instance()
    {
        if (self::$instance == null)
            self::$instance = new  M_Coments();
            
        return self::$instance;
    }
    //все коментарии одной статьи
    public function getComentsToArt($id_article){
        $query = "SELECT coments.id_coment,coments.id_user,coments.id_article,coments.text_coment,coments.create_at,users.id_user,users.name  FROM coments,users WHERE id_article = {$id_article} AND coments.id_user = users.id_user";
            $result = $this->db->Select($query);
            return $result;    
    }
    //Добавляем коментарии к статье
    public function addComment($id_user,$id_article,$text){

        $id_article = $this->articles->Clean($id_article);
        $text = $this->articles->Clean($text);

        $obj = ['id_user' => $id_user,
                'id_article' => $id_article,
                'text_coment' => $text];
        
        $result = $this->db->Insert('coments',$obj);
            return $result;        
    }
}