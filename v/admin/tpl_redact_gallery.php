<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h3>Галереи</h3></div>
</div>
<table id="adm_list_articles_old" class="table table-bordered">
    <tr>    
        <th>id</th>
        <th>Название галлереи</th>
        <th>Описание галлереи</th>
        <th>Обложка</th>
        <th>Создано</th>
        <th>Обновлено</th>
        <th>Действия</th>
    </tr>
    <?foreach($galleryes as $list):?>
        <tr>
            <td><?=$list['id']?></td>
            <td><?=$list['name_gallery']?></td>
            <td><?=$list['description_gallery']?></td>
            <td><?=$list['title_image']?></td>
            <td><?=$list['create_at']?></td>
            <td><?=$list['update_at']?></td>
            <td><a href="index.php?a=redact_galleryes&id_gallery=<?=$list['id']?>" title="Редактировать"> <span class="glyphicon glyphicon-pencil"></span></a> <a href="index.php?a=redact_galleryes&delete_gallery=<?=$list['id']?>" title="Удалить"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
    <?endforeach?>
</table>