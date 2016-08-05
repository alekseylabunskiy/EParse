<div class="panel panel-primary" class="panel-primary-admin">
 <div class="panel-body" style="text-align: center;"><h3><?=$title?></h3></div>
</div>
<div id="gall_1">
    <form action="index.php?a=redact_galleryes&add_gallery" method="POST" role="form">
        <div class="form-group">
            <label for="add_name_gallery">Название галереи</label>
            <input type="text" class="form-control" name="add_name_gallery">
        </div>
        <div class="form-group">
            <label for="add_name_gallery">Описание</label>
            <textarea name="add_description_gallery" class="form-control"></textarea>
            <p class="help-block">Напишите о чем галлерея коротко</p>
        </div>
        <div class="form-group">
            <label for="search_image_for_gall">новая обложка галлереи</label>
            <div id="search_image_for_gall"></div>
            <label for="add_title_image_gallery">Выберите фото</label>
            <select name="add_title_image_gallery" class="form-control" id="image_to_gallery" multiple>
                <option value="" selected></option>
                <?foreach($list_images as $list):?>
                    <option value="<?=$list['name_foto']?>"><?=$list['name_foto']?></option>
                <?endforeach?>
                    <option value="" id="hidden_name_g" hidden></option>
            </select>
        </div>
        <button name="conf_add_gallery" class="btn btn-info">Создать</button>
    </form>
</div>