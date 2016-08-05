<div class="panel panel-primary" class="panel-primary-admin">
 <div class="panel-body" style="text-align: center;"><h3>Редактор коментариев</h3></div>
</div>
<div class="panel-primary-admin">
    <form action="index.php?a=redact_coments&id_coment_red=<?=$id_coment?>" method="POST" role="form">
        <div class="form-group">
            <label for="edited_text_coment">Текст Коментария</label>
            <textarea name="edited_text_coment" class="form-control"><?=$one_coment['text_coment']?></textarea>
        </div>
        <button class="btn btn-info" name="edit_one_coment">Изменить</button>
    </form>
</div>