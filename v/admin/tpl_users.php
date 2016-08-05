<div class="panel panel-primary">
    <div class="panel-body" style="text-align: center;"><h3>Пользователи</h3></div>
</div>
<div class="panel panel-primary">
    <div class="panel-body" style="text-align: center;"><h4>Поиск</h4></div>
</div>
<table id="table_search_users" class="table table-bordered">
    <tr>
        <th>id user</th>
        <th>Логин</th>
        <th>Почта</th>
        <th>Роль</th>
        <th>Имя</th>
    </tr>
    <tr>
        <td>
            <form action="index.php?a=edit_users" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_id_user" class="form-control">
                    <input id="count_chars_id_user" type="hidden" value="0" />
                    <input id="re_chars_id_user" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=edit_users" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_login_user" class="form-control">
                    <input id="count_login_user" type="hidden" value="0" />
                    <input id="re_chars_login_user" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=edit_users" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_email_user" class="form-control">
                    <input id="count_chars_email_user" type="hidden" value="0" />
                    <input id="re_chars_email_user" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=edit_users" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_role_user" class="form-control">
                    <input id="count_chars_role_user" type="hidden" value="0" />
                    <input id="re_chars_role_user" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=edit_users" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_name_user" class="form-control">
                    <input id="count_chars_name_user" type="hidden" value="0" />
                    <input id="re_chars_name_user" type="hidden" value="" />
                </div>
            </form>
        </td>
    </tr>
</table>
<div id="search_result"></div>
<table id="adm_list_users_main" class="table table-bordered">
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