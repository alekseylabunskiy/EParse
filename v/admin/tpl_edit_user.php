<div class="panel panel-primary" class="panel-primary-admin">
 <div class="panel-body" style="text-align: center;"><h3>Управление данными пользователя</h3></div>
</div>
<form action="index.php?a=edit_users&id_user_red=<?=$user['id_user']?>" method="POST" class="panel-primary-admin">
    <div class="form-group">
        <label for="edit_title">Логин</label>
        <input type="text" class="form-control" name="edit_login" value="<?=$user['login']?>" />  
    </div> 
    <div class="form-group">   
        <label for="edit_content">Почта</label>
        <input type="text" class="form-control" name="edit_email" value="<?=$user['email']?>" />
    </div>
    <div class="form-group">   
        <label for="edit_category">Роль</label>
        <input type="text" class="form-control" name="edit_role" value="<?=$user['id_role']?>" /> 
    </div>
    <div class="form-group">   
        <label for="edit_category">Пароль</label>
        <input type="text" class="form-control" name="edit_password" value="<?=$user['password']?>" /> 
    </div>
    <div class="form-group">   
        <label for="edit_category">Имя</label>
        <input type="text" class="form-control" name="edit_name" value="<?=$user['name']?>" /> 
    </div>
    <button class="btn btn-info" name="edit_profile">Изменить</button> 

</form>