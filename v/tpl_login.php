<?/*
Шаблон авторизации пользователя
===============================
$login - логин пользователя

*/?>
<div class="content">
    <div id="comment_form">
      <div id="reg_form">  
      <div class="block"> 
      <h3 class="block_title">Форма Входа</h3>
      </div>
      <p><?=$alert?></p><br/>
      <form action="index.php?c=login" method="post">
        <div class="form-item">
          <label for="edit-submitted-name">Логин</label>
          <input type="text" class="form-text"  size="60" id="edit-submitted-name" name="login" maxlength="128" required/>
          <span title="This field is required." class="form-required"></span> </div>
        <div class="form-item">
          <label for="edit-submitted-website">Пароль</label>
          <input type="password" class="form-text" value="" size="60" id="edit-submitted-website" name="password" maxlength="10"/>
        </div>
        <div class="form-item">
          <input type="checkbox" name="remember" /> запомнить меня
        </div>
        <div id="edit-actions">
          <button type="submit" name="subm_register"><span class="view_all_medium"><span><span>Вход</span></span></span></button>
        </div>
      </form>
      <?=$message?>
    </div>
    </div>
</div>

