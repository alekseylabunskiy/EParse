<div class="panel panel-primary" class="panel-primary-admin">
 <div class="panel-body" style="text-align: center;"><h3>Управление коментариями пользователей</h3></div>
</div>
<div class="panel panel-primary">
    <div class="panel-body" style="text-align: center;"><h4>Поиск</h4></div>
</div>
<table id="table_search_users" class="table table-bordered">
    <tr>
        <th>id коментария</th>
        <th>id пользователя</th>
        <th>id статьи</th>
        <th>Текст</th>
        <th>Создан</th>
        <th>Обновлен</th>
    </tr>
    <tr>
        <td>
            <form action="index.php?a=redact_coments" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_id_coment" class="form-control">
                    <input id="count_chars_id_coment" type="hidden" value="0" />
                    <input id="re_chars_id_coment" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=redact_coments" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_coment_id_user" class="form-control">
                    <input id="count_coment_id_user" type="hidden" value="0" />
                    <input id="re_chars_coment_id_user" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=redact_coments" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_coment_id_article" class="form-control">
                    <input id="count_chars_id_article" type="hidden" value="0" />
                    <input id="re_chars_id_article" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=redact_coments" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_coment_text_comment" class="form-control">
                    <input id="count_chars_text_comment" type="hidden" value="0" />
                    <input id="re_chars_text_comment" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=redact_coments" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_coment_create_comment" class="form-control">
                    <input id="count_chars_create_comment" type="hidden" value="0" />
                    <input id="re_chars_create_comment" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>
            <form action="index.php?a=redact_coments" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_coment_update_comment" class="form-control">
                    <input id="count_chars_update_comment" type="hidden" value="0" />
                    <input id="re_chars_update_comment" type="hidden" value="" />
                </div>
            </form>
        </td>
    </tr>
</table>
<div id="search_result"></div>
<table id="adm_list_coments_users_main" class="table table-bordered">
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