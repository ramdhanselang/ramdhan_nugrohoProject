     <!DOCTYPE html>
     <html>
     <head>
       <title>Login</title>
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
     </head>
     <body>
        <main role="main" class="container">
      <div class="jumbotron">
        <center><h1><font color="white">SIAKAD</font> <font color="#00cccc"x>PROJECT</font></b></center><br>
          <?php echo validation_errors()?>
            <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>

            <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>

            <center><button type="submit" class="btn btn-lg btn-success">LOGIN</button></center>
         <?php echo form_close(); ?>
         </div>
         </main> 

     </body>
     </html>