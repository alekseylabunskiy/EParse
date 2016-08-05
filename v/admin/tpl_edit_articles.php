<div class="panel panel-primary" class="panel-primary-admin">
    <div class="panel-body" style="text-align: center;"><h3>Редактор Статьи</h3></div>
</div>
<form role="form" action="index.php?a=red_articles&id_red=<?=$article['id']?>" method="post"  class="panel-primary-admin">
    <div class="form-group">
        <label for="edit_title">Заголовок</label>
        <input type="text" class="form-control" name="edit_title" value="<?=$article['title']?>" />  
    </div> 
    <div class="form-group">   
        <label for="edit_content">Содержание</label>
        <textarea class="form-control" name="edit_content" id="" cols="30" rows="10"><?=$article['content']?></textarea>
    </div>
    <div class="form-group">   
        <label for="edit_category">Текущее зображение</label><br />
        <img class="img-rounded" src="/v/content_Images/images/216/<?=$article['image']?>" alt=""><br />
        <label for="search_image">Новое изображение</label>
        <div id="search_image"></div>  
        <select class="form-control" name="edit_image" id="image_to_art" multiple>
            <option value="" selected>Выбераем фото</option>
                <?php foreach($images as $list):?> 
                    <option value="<?=$list['name']?>" class="optim"><?=$list['name']?></option>                    
                <?php endforeach?>
                <option id="hidden_name" hidden></option>  
                <option value="" id="hidden_inp" hidden></option> 
        </select>
    <div class="form-group">   
        <label for="edit_category">Категория</label>
        <input type="text" class="form-control" name="edit_category" value="<?=$article['category']?>" /> 
    </div>
    <button class="btn btn-info" name="edit_article">Изменить</button>    
</form>
<div id="wr"></div>