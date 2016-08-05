<?
class M_Image {
   public $image;
   public $image_type;

    public function __construct()
    {
        $this->load($_FILES['filename']['tmp_name']);
    }

    public function SaveResized($sizes,$path){
        krsort($sizes);
        foreach($sizes as $key => $value){
            $name = $_FILES['filename']['name'];
            $name = md5($name).'.jpg'; 
            $width = $value['width'];
            $height =$value['height'];
            $this->resize($width, $height);
            $this->save($name,$key,$path); 
        }
        return $name;
    }

    public function load($filename) {
        $image_info = getimagesize($filename);
        $this->image_type = $image_info[2];
        if( $this->image_type == IMAGETYPE_JPEG )
            $this->image = imagecreatefromjpeg($filename);
        elseif( $this->image_type == IMAGETYPE_GIF )
            $this->image = imagecreatefromgif($filename);
        elseif( $this->image_type == IMAGETYPE_PNG )
            $this->image = imagecreatefrompng($filename);

    }
    public function save($filename,$size,$path,$image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
        if(!file_exists($path.$size))
            $dir = mkdir($path.$size);

        if( $image_type == IMAGETYPE_JPEG )
            $res = imagejpeg($this->image,$path. $size . '/' . $filename,$compression);
        elseif( $image_type == IMAGETYPE_GIF )
            imagegif($this->image,$path. $size . '/' . $filename);
        elseif( $image_type == IMAGETYPE_PNG )
            imagepng($this->image,$path. $size . '/' . $filename);

        if( $permissions != null)
            chmod($filename,$permissions);
   }

   public function output($image_type=IMAGETYPE_JPEG){
        if( $image_type == IMAGETYPE_JPEG )
            imagejpeg($this->image);
        elseif( $image_type == IMAGETYPE_GIF )
            imagegif($this->image);
        elseif( $image_type == IMAGETYPE_PNG )
            imagepng($this->image);
   }
   public function getWidth() {
        return imagesx($this->image);
   }
   public function getHeight() {
        return imagesy($this->image);
   }
   public function resizeToHeight($height) {
        $ratio = $height / $this->getHeight();
        $width = $this->getWidth() * $ratio;
        $this->resize($width,$height);
   }
   public function resizeToWidth($width) {
        $ratio = $width / $this->getWidth();
        $height = $this->getheight() * $ratio;
        $this->resize($width,$height);
   }
   public function scale($scale) {
        $width = $this->getWidth() * $scale/100;
        $height = $this->getheight() * $scale/100;
        $this->resize($width,$height);
   }
   public function resize($width,$height) {
        $new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $new_image;
   }
}
?>