<?php 
require_once '__autoload.php';
use app\controllers\ProfpicController;
use upload\UploadProfpic;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Developers</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Style Main CSS -->
    <link href="css/main.css" rel="stylesheet">
    <!-- Fonts -->

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <section class="profpic">
      <div class="container">
        <div class="row">
             <img id="read" src="./upload_pic/<?=ProfpicController::Create()->read(10053);?>" width="220" height="220" style="border:1px solid red;"/>
        </div>
      </div>

      <div class="container">
          <div class="row">
              <form action="update.php" method="post" enctype="multipart/form-data">
                  <div class="select-file">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                  </div>
                  <div class="upload-file">
                    <input type="submit" id="btn-submit" value=" Change Profile Pic " name="submit" class="btn-submit">         
                    <?= UploadProfpic::Create()->uploadFile('submit'); ?>
                  </div>        
              </form>
          </div>
      </div> 

    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.12.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#read').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
          }
      }

      $("#fileToUpload").change(function() {
          readURL(this);
      });
    </script>
  </body>
</html>
