<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h3>Добавляем фото в галлерею</h3></div>
</div>
<table class="table table-bordered">
    <tr>
        <?foreach($list_fotos_to_gallery as $list):?>
            <td>
                <form action="index.php?a=redact_galleryes&add_foto_to_gallery" method="POST" role="form" data-toggle="validator" class="panel-primary-admin">
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox" name="foto_name" value="<?=$list['name']?>" required><img class="img-responsive" src="/v/gallery/282/<?=$list['name']?>" alt="">
                        </label>
                        <div class="form-group">
                            <label for="add_title_image" class="control-label">Краткое описание</label>
                            <input type="text" class="form-control" name="add_title_image" required>
                        </div>
                        <div class="form-group">
                            <label for="add_cathegory" class="control-label">Категория</label>
                                <select name="add_cathegory" class="form-control" required>
                                    <option selected></option>
                                    <?foreach($galleryes as $list):?>
                                        <option value="<?=$list['id']?>"><?=$list['name_gallery']?></option>
                                    <?endforeach?>
                                </select>
                        </div>
                    </div>
                    <button class="btn btn-info" name="add_fotos_to_g">Добавить фото к галере</button>
                </form>
            </td>
        <?endforeach?>
    </tr>
</table>
<div id="pagin_position">
    <ul class="pagination">
        <?=$nav['pervpage'].$nav['page2left'].$nav['page1left'].$nav['page'].$nav['page1right'].$nav['page2right'];?>
    </ul>
</div>
