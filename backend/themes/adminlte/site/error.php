<?php 
use yii\helpers\Html;
$this->title = $name; 
?>

<section class="content">
 <div class="error-page">
  <h2 class="headline text-info"><i class="fa fa-warning text-yellow"></i></h2>
   <div class="error-content">
    <h3><?= $name ?><h3>

     <p>
        <?= (Html::encode($message)) ?>
     </p>

     <p>
        The above error occured while the web server was processing your request. please contact us if you think this is a server error. thank you.
        Meanwhile, you may <a href='<?= Yii::$app->homeUrl ?>'>return to dashboard</a> or try using the search form.  
     </p>

    <form class='search-form'>
     <div class='input-group'>
      <input type="text" name="search" class='form-control' placeholder="Search"/>

    <div class="input-group-btn">
     <div class="input-group">
      <input type="text" name="search" class="text-control" placeholder="search">

    <div class="input-group-button">
     <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i>
     </button>
    </div>

    </div>
   </form> 
  </div>
 </div>
</section>






