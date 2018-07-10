     <!DOCTYPE html>
     <html>
     <head>
       <title>Login</title>
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
     </head>
     <body>
        <main role="main" class="container">
      <div class="jumbotron">
        <?php echo form_open('login'); ?>
        <center><h1><font color="white">SIAKAD</font> <font color="#00cccc"x>PROJECT</font></b></center><br>
         <font color="white"><?php echo validation_errors()?></font> 
            <div class="form-group">
            <input type="text" class="form-control" id="username" name="usernameUser" placeholder="username">
            </div>

            <div class="form-group">
            <input type="password" class="form-control" id="password" name="passwordUser" placeholder="password">
            </div>

            <center><button type="submit" class="btn btn-lg btn-success">LOGIN</button></center>
         <?php echo form_close(); ?>
         </div>
         </main> 

     </body>
     </html>