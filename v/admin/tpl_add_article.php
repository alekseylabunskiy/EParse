<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h3>Добавляем статью</h3></div>
</div>
<form action="index.php?a=red_articles&add_articles" method="POST" role="form" data-toggle="validator" class="panel-primary-admin">
    <div class="form-group">
        <label for="add_title_art" class="control-label">Заголовок</label>
        <input type="text" class="form-control" name="add_title_art" required>
    </div>
    <div class="form-group">
        <label for="add_content_art" class="control-label">Контент</label>
        <textarea class="form-control" name="add_content_art" id="" cols="30" rows="10" required></textarea>
    </div>
    <div class="form-group">
        <label for="add_author_art" class="control-label">Автор</label>
        <input type="text" class="form-control" name="add_author_art" required>
    </div>
    <div class="form-group">
        <label for="add_image_art" class="control-label">Изображение</label> 
        <div id="search_image"></div>  
        <select class="form-control" name="add_image_art" id="image_to_art" multiple>
            <option value="" selected>Выбераем фото</option>
                <?php foreach($images as $list):?> 
                    <option value="<?=$list['name']?>"><?=$list['name']?></option>                    
                <?php endforeach?>
                <option id="hidden_name" hidden></option>  
                <option value="" id="hidden_inp" hidden></option> 
        </select>
          
    </div>
    <div class="form-group">
        <label for="add_cathegory_art" class="control-label">Категория</label>
            <select name="add_cathegory_art" class="form-control" required>
                <option selected>Категории</option>
                <?foreach($list_categories as $list):?>
                    <option value="<?=$list['id_category']?>"><?=$list['description']?></option>
                <?endforeach?>
            </select>
    </div>
    <button name="insert_art" class="btn btn-success">Вставить новость</button>
</form>
<div id="wr"></div>
