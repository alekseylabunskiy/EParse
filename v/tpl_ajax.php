<table id="adm_list_articles" class="table table-bordered">
    <tr>    
        <th>id</th>
        <th>Заголовок</th>
        <th>Содержание</th>
        <th>Создано</th>
        <th>Обновлено</th>
        <th>Категория</th>
        <th>Действия</th>
    </tr>
    <?foreach($articles as $list):?>
        <tr>
            <td><?=$list['id']?></td>
            <td><?=$list['title']?></td>
            <td><?php $string = explode('.', $list['content']); echo $string[0].'.';?></td>
            <td><?=$list['create_at']?></td>
            <td><?=$list['update_at']?></td>
            <td><?=$list['category']?></td>
            <td><a href="index.php?a=red_articles&id_red=<?=$list['id']?>" title="Редактировать"> <span class="glyphicon glyphicon-pencil"></span></a> <a href="index.php?a=red_articles&delete=<?=$list['id']?>" title="Удалить"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
    <?endforeach?>
</table>