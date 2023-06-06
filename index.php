<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';




?>

 <?php include_once './parts/header.php'; ?> 
<!--

      <h1 class="display-4 fw-normal">اربح مع نور </h1>
      <p class="lead fw-normal">باقي على التسجيل</p>
      <h3 id="contdown"></h3>
      <p class="lead fw-normal"> للسحب على ربح نسخة مجانية من برنامج </p>

      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
-->
<!--
<ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
-->

<!--
<div class="position-relative text-center">

<div class="col-md-5 p-lg-5 mx-auto my-5">

<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <h3>الرجاء ادخال معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول </label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div id="emailHelp" class="form-text error"> <?php echo $errors['firstNameError']  ?> </div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير </label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div id="emailHelp" class="form-text error"> <?php echo $errors['lastNameError']  ?> </div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div id="emailHelp" class="form-texterror"> <?php echo $errors['emailError']  ?> </div>
  </div>
  
  
  <button type="submit" name="submit"  class="btn btn-primary">ارسل المعلومات</button>
</form>
</div>
</div> 
-->
<button id="winner" > اختيار الرابح</button>

<div  id="cards" class="row mb-5 pb-5" > 

<?php foreach($users as  $users) :?>
  <div class="colsm-6">

  <div class="card my-2 bg-light"> 

     <div class="card-body"> 

<h5 class="card-title" >   <?php echo htmlspecialchars($users['firstName']) . ' ' . htmlspecialchars($users['lastName']) . ' <br>' .  htmlspecialchars($users['email']);?>     </h5>
 <p class="card-text" > <?php  echo  htmlspecialchars($users['email']) ?> </p>
  </div>
   </div>
     </div>
<?php endforeach;  ?>
</div>

<?php include_once './parts/footer.php';?>
