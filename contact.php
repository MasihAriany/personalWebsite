<?php include('form_process.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Raleway" rel="stylesheet">
  <script src="https://use.fontawesome.com/618450c358.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

	<nav class="navbar navbar-default" id="header">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="iconBar"style="color:white;">☰</span>
				</button>
				<a class="navbar-brand" href="index.html">HOME</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="portfolio.html">PORTFOLIO</a></li>
				<li><a href="gallery.html">GALLERY</a></li>
				<li><a href="contact.php" class="navActive">CONTACT</a></li>
			  </ul>
			</div>
		</div>
	</nav>


	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<h1 class="">Contact Me</h1>
				<h3>I'm looking forward for your message.</h3>
			</div>
		</div>
		<div class="row contactMain">
			<div class="col-xs-12 col-sm-4 icons">
				<a href="https://www.facebook.com/masih.ariani" target="_blank" >
				<div class="media socialMedia">
				  <div class="media-left">
					<img src="img/contact/fb.png" class="media-object">
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"></h4>
					<p>Contact me on Facebook</p>
				  </div>
				</div>
				</a>

				<a href="https://www.instagram.com/maashiach/" target="_blank" >
				<div class="media socialMedia">
				  <div class="media-left">
					<img src="img/contact/instagram.png" class="media-object">
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"></h4>
					<p>Follow me on Instagram</p>
				  </div>
				</div>
				</a>

				<a href="https://www.linkedin.com/in/masihariani" target="_blank" >
				<div class="media socialMedia">
				  <div class="media-left">
					<img src="img/contact/linkedin.png" class="media-object">
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"></h4>
					<p>Contact me on LinkedIn</p>
				  </div>
				</div>
				</a>

				<a href="https://github.com/MasihAriany" target="_blank" >
				<div class="media socialMedia">
				  <div class="media-left">
					<img src="img/contact/github.png" class="media-object">
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"></h4>
					<p>Contact me on Github</p>
				  </div>
				</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-8">
				<img class="img-responsive meTower" src="img/about/meTower.jpg" alt="graphic picture, me in a tower with a spy glass"></img>
			</div>
		</div>
  </div>

      <div class="container-flow bg-grey">
        <div class="container">
        <div class="row">
        <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="form-inline">
          <h3>Or send me an email</h3>
          <div class="form-group col-xs-12 col-sm-7">
            <label>Your name:</label>
            <input class="form-control" placeholder="Enter Name" type="text" name="name" value="<?= $name ?>">
            <span class="error"><?= $name_error ?></span>
          </div>
          <div class="form-group col-xs-12 col-sm-7">
            <label >Your Email:</label>
            <input class="form-control" placeholder="Enter Email" type="text" name="email" value="<?= $email ?>">
            <span class="error"><?= $email_error ?></span>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-xs-12 col-sm-9">
            <label >Your Message:</label>
            <textarea class="form-control" rows="5" value="<?= $message ?>" name="message">
            </textarea>
          </div>
          <div class="col-xs-2 col-sm-3">
            <button name="submit" type="submit" class="btn btn-default email_submit" data-submit="...Sending">Send E-mail</button>
          </div>
          <div class="success"><?= $success ?></div>
        </form>
      </div>
    </div> <!-- end of email form -->

	<footer class="mdl-mini-footer">
		<div class="mdl-mini-footer__left-section">
			<div class="mdl-logo"><span class="fa fa-copyright"></span> 2017 Masih Ariani</div>
		</div>
		<div class="mdl-mini-footer__right-section">
		<ul class="mdl-mini-footer__link-list">
			<li><a href="https://github.com/MasihAriany" target="_blank" class="fa fa-github fa-lg"></a></li>
			<li><a href="https://www.linkedin.com/in/masihariani" target="_blank" class="fa fa-linkedin fa-lg"></a></li>
			<li><a href="https://www.facebook.com/masih.ariani" target="_blank" class="fa fa-facebook fa-lg"></a></li>
			<li><a href="https://www.instagram.com/maashiach/" target="_blank" class="fa fa-instagram fa-lg"></a></li>
		</ul>
	  </div>
	</footer>
</body>
</html>
