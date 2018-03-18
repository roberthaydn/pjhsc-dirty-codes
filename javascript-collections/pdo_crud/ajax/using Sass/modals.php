<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>  
    <div class="container">

    <?php 
      //selecting data
       try {
        $dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
       } catch (PDOException $exception) {
        printf("Connection error: %s", $exception->getMessage());
       }

      // Execute the query
       $stmt = $dbh->query('SELECT * FROM `employees` ORDER BY `id` ASC');

      // Retrieve all of the rows
       $rows = $stmt->fetchAll();
       
      // Output the rows
      foreach ($rows as $row) {

         $id = $row['id'];
         $username = $row['username'];
         $firstname = $row['firstname'];
         $lastname = $row['lastname'];
         $gender = $row['gender'];

         $data = $row['firstname'];

        echo $id.' '.$username.' '.$firstname.' '.$gender.'<br>';
      ?> 
      <div>
           <a class="waves-effect waves-light btn" href="#<?=$id;?>"><?=$username;?></a>
            <!-- modal 2 -->
            <div id="<?=$id;?>" class="modal modal-fixed-footer">
              <div class="modal-content">
                <h4></h4>
                <p><?=$username;?></p>
                <p><?=$firstname;?></p>
                <p><?=$lastname;?></p>
                <p><?=$gender;?></p>
                <?php $a = 2; ?>
                <input type="hidden" name="<?='field_username'.$id;?>" value="<?=$username;?>" id="<?='field_username'.$id;?>"/>
                <input type="hidden" name="<?='field_firstname'.$id;?>" value="<?=$firstname;?>" id="<?='field_firstname'.$id;?>"/>
                <input type="hidden" name="<?='field_lastname'.$id;?>" value="<?=$lastname;?>" id="<?='field_lastname'.$id;?>"/>
                <input type="hidden" name="<?='field_gender'.$id;?>" value="<?=$gender;?>" id="<?='field_gender'.$id;?>"/>
                <input type="hidden" name="field_source" value="<?=$id;?>" id="field_source"/>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Disagree</a>
                <a href="#!" class="approve-button modal-action modal-close waves-effect waves-green btn-flat" id="<?=$id;?>">Agree</a>
              </div>
            </div>
      </div><br><br>
    <?php
     }
    ?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/bin/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/bin/materialize.min.js"></script> 
      <script type="text/javascript">
      $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('.modal').modal({
              dismissible: true, // Modal can be dismissed by clicking outside of the modal
              opacity: .5, // Opacity of modal background
              in_duration: 300, // Transition in duration
              out_duration: 200, // Transition out duration
              starting_top: '4%', // Starting top style attribute
              ending_top: '10%', // Ending top style attribute
              ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                //alert("Ready");
                console.log(modal, trigger);
              },
              complete: function() { /*alert('Closed');*/ } // Callback for Modal close
            }
          );
         // $('#modal1').modal('open');

         function action_addData() {
        // wrap inside the jquery ready() function
        //Attach an onclick handler to each of your buttons that are meant to "approve"
        $('.approve-button').click(function(e){
           //Get the ID of the button that was clicked on
           var field_source = $(this).attr('id');
           //var str = '#field_username2';
          //alert(field_source);
           //alert(field_source.concat(field_source),);
           //var x = '#field_username2, #field_firstname2, #field_lastname2, #field_gender2';
          // var y =replace(/(hello)/, "$1 byebye")
          // var data = $(x).serialize();

           $.ajax({
              url: "_sql_add.php", //This is the page where you will handle your SQL insert
              type: "POST",
             // data: data, 
             data: "id=" + field_source,
              //data: "id=" + id_del, //The data your sending to some-page.php
              success: function(){
                  console.log("AJAX request was successfull - action=INSERT");
                  //clearAllInterval();
              },
              error:function(){
                  console.log("AJAX request was a failure - action=INSERT");
              }   
            });
        });
      }

        action_addData();
      });        
      </script>
    </body>
  </html>
