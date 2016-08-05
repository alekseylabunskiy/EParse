<div class="content">
    <div id="comment_form">
      <div id="reg_form">  
      <div class="block"> 
      <h3 class="block_title">Форма регистрации</h3>
      </div>
      <p><?=$alert?></p><br/>
      <form action="index.php?c=reg" method="post">
        <div class="form-item">
          <label for="edit-submitted-name">Имя</label>
          <input type="text" class="form-text" value="" size="60" id="edit-submitted-name" name="user_name" maxlength="128" required/>
          <span title="This field is required." class="form-required"></span> 
        </div>
        <div class="form-item">
          <label for="edit-submitted-name">Логин</label>
          <input type="text" class="form-text" value="" size="60" id="edit-submitted-name" name="user_r_login" maxlength="128" required/>
          <span title="This field is required." class="form-required"></span> </div>
        <div class="form-item">
          <label for="edit-submitted-website">Пароль</label>
          <input type="password" class="form-text" value="" size="60" id="edit-submitted-website" name="user_r_password" maxlength="10"/>
        </div>
        <div class="form-item">
          <label for="edit-submitted-email">Email:</label>
          <input type="email" class="form-text" value="" size="60" id="edit-submitted-email" name="user_email" maxlength="128" required/>
          <span title="This field is required." class="form-required"></span> 
        </div>
        <div id="edit-actions">
          <button type="submit" name="subm_register"><span class="view_all_medium"><span><span>Регистрация</span></span></span></button>
        </div>
      </form>
      <?=$message?>
    </div>
    </div>
</div>