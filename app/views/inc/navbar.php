<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>"><img width="40" src="<?php echo URLROOT.'/public/images/logo.png'; ?>" alt="support"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
      <?php if(isset($_SESSION['user_id'])) {
        if($_SESSION['user_role'] == "admin") {
          ?>
           <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/users">Пользователи</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/emps">Сотрудники</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/cats">Категории</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/prods">Решения</a>
        </li> 
          <?php
        }
        elseif($_SESSION['user_role'] == "manager") {
          ?>
            <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/managers/index">Решения клиента</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/managers/my_messages">Сообщения</a>
        </li>         
          <?php
        }
        elseif($_SESSION['user_role'] == "user") {
          ?>
           <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/clients/prods">Каталог</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/clients/index">Профиль</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/clients/my_prods">Мои решения</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/clients/feedback">Обратная связь</a>
        </li> 
          <?php
        }
      }
      else {
        ?>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/clients/prods">Каталог</a>
        </li> 
        <?php
      }
      
      ?>
      </ul>
      <ul class="navbar-nav ml-auto">
    <?php if(isset($_SESSION['user_id'])) 
      {
        echo '<li class="nav-item">
      <a class="nav-link" href="#">Добро пожаловать, '.$_SESSION['user_email'].'</a>
    </li>';
        echo '<li class="nav-item">
        <a class="nav-link" href="'.URLROOT.'/users/logout">Выход</a>
      </li>';      
      }
    else
     {
      echo '<li class="nav-item">
        <a class="nav-link" href="'.URLROOT.'/users/login">Авторизация</a>
      </li>'; 
      echo '<li class="nav-item">
      <a class="nav-link" href="'.URLROOT.'/users/login">Регистрация</a>
    </li>'; 
      }
    ?></ul>   
    </div>
  </div>
</nav>


