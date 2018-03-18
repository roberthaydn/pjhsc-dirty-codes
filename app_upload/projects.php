<?php 
require_once '__autoload.php';
use app\controllers\UploadController;
use upload\UploadPortfolio;
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
    <section class="portfolio">
      <div class="container">
          <div class="row">
              <form action="projects.php" method="post" enctype="multipart/form-data">
                  <div class="select-file">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                  </div>
                  <div class="upload-file">
                    <span>File Name:</span> 
                    <input type="text" value="" name="filename" class="field" maxlength="40">
                    <input type="hidden" value="projects" name="portfolio">
                    <input type="submit" value=" Add File " name="submit" class="btn-submit">         
                    <span class="message">
                        <?= UploadPortfolio::Create()->uploadFile('submit'); ?>
                    </span>  
                  </div>           
              </form>
          </div>
      </div>
      
      <div class="container">
        <div class="row">
            <table class="table">
                <th>File name</th><th>Type</th><th>Preview</th><th>Download</th>
                    <?= UploadController::Create()->read('projects'); ?>
            </table>
         </div>
      </div>

    </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.12.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
