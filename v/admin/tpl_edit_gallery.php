<div class="panel panel-primary" class="panel-primary-admin">
 <div class="panel-body" style="text-align: center;"><h3>Редактор Галереи</h3></div>
</div>
<div id="gall_1">
    <form action="index.php?a=redact_galleryes&id_gallery=<?=$id_gallery?>" method="POST" role="form">
        <div class="form-group">
            <label for="edit_name_gallery">Название галереи</label>
            <input type="text" class="form-control" name="edit_name_gallery" value="<?=$one_gallery['name_gallery']?>">
        </div>
        <div class="form-group">
            <label for="edit_name_gallery">Описание</label>
            <textarea name="edit_description_gallery" class="form-control"><?=$one_gallery['description_gallery']?></textarea>
            <p class="help-block">Напишите о чем галлерея коротко</p>
        </div>
        <div class="form-group">
            <label for="ed_im">Текущая фотография обложки</label><br/>   
            <img class="img-rounded" src="v/gallery/282/<?=$one_gallery['title_image']?>" id="ed_im" alt=""><br /><br />
            <label for="search_image_for_gall">новая обложка галлереи</label>
            <div id="search_image_for_gall"></div>
            <label for="edit_title_image_gallery">Выберите фото</label>
            <select name="edit_title_image_gallery" class="form-control" id="image_to_gallery" multiple>
                <option value="" selected></option>
                <?foreach($list_images as $list):?>
                    <option value="<?=$list['name_foto']?>"><?=$list['name_foto']?></option>
                <?endforeach?>
                    <option value="" id="hidden_name_g" hidden></option>
            </select>
        </div>
        <button name="conf_edit_gallery" class="btn btn-info">Изменить</button>
    </form>
</div>