<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#"><b>SIAKAD <font color="#00cccc">PROJECT</font></b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        
      </div>
    </nav>

    <div id="container">
<div id="sidebar">
    <ul class="sidebar-nav">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Blog</a>
        </li>
        <li>
            <a href="#">Contact Us</a>
        </li>
    </ul>
</div>
<div id="page-content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Halo Dunia</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                <a href="#menu" class="btn btn-default" id="menu">Menu</a>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#menu").click(function(e) {
          e.preventDefault();
        $("#container").toggleClass("toggled");
        });
    });
</script>
</body>
</html>