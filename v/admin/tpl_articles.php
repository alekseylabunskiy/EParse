<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h3>Управление статьями</h3></div>
</div>
<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h4>Поиск</h4></div>
</div>
<table id="table_search_items" class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Заголовок</th>
        <th>Содержание</th>
        <th>Создано</th>
        <th>Обновлено</th>
        <th>Категория</th>
    </tr>
    <tr>
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_words" class="form-control">
                    <input id="count_chars" type="hidden" value="0" />
                    <input id="re_chars" type="hidden" value="" />
                </div>
            </form>
        </td>     
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_title" class="form-control">
                    <input id="count_chars_title" type="hidden" value="0" />
                    <input id="re_chars_title" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_content" class="form-control">
                    <input id="count_chars_content" type="hidden" value="0" />
                    <input id="re_chars_content" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_create_at" class="form-control">
                    <input id="count_chars_create_at" type="hidden" value="0" />
                    <input id="re_chars_create_at" type="hidden" value="" />
                </div>
            </form>
        </td>  
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_update_at" class="form-control">
                    <input id="count_chars_update_at" type="hidden" value="0" />
                    <input id="re_chars_update_at" type="hidden" value="" />
                </div>
            </form>
        </td> 
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <select name="add_cathegory_art" class="form-control" id="search_category">
                        <option selected></option>
                        <option value="1">Украина</option>
                        <option value="2">Бизнесс</option>
                        <option value="3">Спорт</option>
                        <option value="4">Развлечения</option>
                        <option value="5">Здоровье</option>
                        <option value="6">Техно</option>
                        <option value="7">Погода</option>
                        <option value="8">Выбор редактора</option>
                        <option value="9">Мир</option>
                    </select>
                    
                    <input id="count_chars_category" type="hidden" value="0" />
                    <input id="re_chars_category" type="hidden" value="" />
                </div>
            </form>
        </td> 
    </tr>     
</table>
<div id="search_result"></div>
<table id="adm_list_articles_old" class="table table-bordered">
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




