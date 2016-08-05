<table id="adm_list_users_updated" class="table table-bordered">
    <tr>    
        <th>id user</th>
        <th>Логин</th>
        <th>Почта</th>
        <th>Роль</th>
        <th>Имя</th>
        <th>Действия</th>

    </tr>
    <?foreach($users as $list):?>
        <tr>
            <td><?=$list['id_user']?></td>
            <td><?=$list['login']?></td>
            <td><?=$list['email']?></td>
            <td><?=$list['id_role']?></td>
            <td><?=$list['name']?></td>
            <td><a href="index.php?a=edit_users&id_user_red=<?=$list['id_user']?>" title="Редактировать"> <span class="glyphicon glyphicon-pencil"></span></a><a href="index.php?a=edit_users&delete_user=<?=$list['id_user']?>" title="Удалить"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
    <?endforeach?>
</table>