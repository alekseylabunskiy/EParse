<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h3>Добавить пользователя</h3></div>
</div>
<form action="index.php?a=edit_users&add_new_user" method="POST" role="form" data-toggle="validator" class="panel-primary-admin">
    <div class="form-group">
        <label for="add_login" class="control-label">Логин</label>
        <input type="text" class="form-control" name="add_login" required>
    </div>
    <div class="form-group">
        <label for="add_password" class="control-label">Пароль</label>
        <input type="password" class="form-control" name="add_password" required>
    </div>
    <div class="form-group">
        <label for="add_email" class="control-label">Email</label>
        <input type="text" class="form-control" name="add_email" required>
    </div>
    <div class="form-group">
        <label for="add_role" class="control-label">Роль</label>
        <select name="add_role" class="form-control">
            <option selected></option>
            <?foreach($roles as $list):?>
            <option value="<?=$list['id_role']?>" required><?=$list['description']?></option>
            <?endforeach?>
         </select> 
    </div>
    <div class="form-group">
        <label for="add_name" class="control-label">Имя</label> 
        <input type="text" class="form-control" name="add_name" required>    
    </div>

    <button name="create_user" class="btn btn-success">Создать Пользователя</button>
</form>
