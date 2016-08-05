
<table id="adm_list_coments_users_updated" class="table table-bordered">
    <tr>    
        <th>id коментария</th>
        <th>id пользователя</th>
        <th>id статьи</th>
        <th>Текст</th>
        <th>Создан</th>
        <th>Обновлен</th>
    </tr>
    <?foreach($coments as $list):?>
        <tr>
            <td><?=$list['id_coment']?></td>
            <td><?=$list['id_user']?></td>
            <td><?=$list['id_article']?></td>
            <td><?=$list['text_coment']?></td>
            <td><?=$list['create_at']?></td>
            <td><?=$list['update_at']?></td>
            <td><a href="index.php?a=redact_coments&id_coment_red=<?=$list['id_coment']?>" title="Редактировать"> <span class="glyphicon glyphicon-pencil"></span></a><a href="index.php?a=redact_coments&delete_coment=<?=$list['id_coment']?>" title="Удалить"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
    <?endforeach?>
</table>