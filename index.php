<?php
require('config.php');

error_reporting(0);

include_once 'dbconfig.php';

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$email = $_POST['email']; // Get Email from form
	$card_num = $_POST['card_number']; // Get number from card

	$sql = "INSERT INTO orders (email, card_number) VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>



<html>
<head>
<title>PlayPen</title>
    <meta charset="utf-8">
<link rel="stylesheet" href="styles.css">

<link rel="icon" href="paw.ico">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/7f429dfd1a.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>
		<style>

			 body{
			 	text-align: center;
			 }

		</style>
    <body>

      <section id="intro">

      <div class="container">

      <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 0 0 4.5rem">
        <a class="navbar-brand" href="#" style="font-size:2.5rem">PlayPen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">Testimonial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comment/index.php">Comment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          </ul>
          </div>
        </nav>

      <div class="row">

        <div class="col-lg-6">
          <h1 style="font-size:3.5rem">Meet new and interesting animals nearby</h1>
          <button type="button" class="btn btn-dark btn-lg download-btn"><i class="fab fa-apple"></i>   Download</button>
          <button type="button" class="btn btn-outline-light btn-lg download-btn"><i class="fab fa-google-play"></i>   Download</button>
        </div>

        <div class="col-lg-6">
          <img class="intro-images" src="photos/playpen.png" alt="android">
        </div>

      </div>

      </div>

      </section>

      <section id="features">

      <div class="row">

      <div class="col-lg-4">

      <div class="usage">
        <i class="icon fas fa-check-circle fa-4x"></i>
        <h3 style="font-family: 'Montserrat', sans-serif;">Easy to use</h3>
        <p>You can get any animal over here as per your choice... So come let's make new friends...</p>
      </div>

      </div>

      <div class="col-lg-4">

      <div class="types" style="padding: 0 20%">
        <i class="icon fas fa-bullseye fa-4x"></i>
        <h3 style="font-family: 'Montserrat', sans-serif;">Animal types</h3>
        <p>We have a lot of animals such as Dogs, Cats, Hamsters, Rabbits, Mice, etc</p>
      </div>

      </div>

      <div class="col-lg-4">

      <div class="welcome" style="padding: 0 20%">
        <i class="icon fas fa-heart fa-4x"></i>
        <h3 style="font-family: 'Montserrat', sans-serif;">Come Here</h3>
        <p>So what are you waiting for, come and take your pet according to your choice..</p>
      </div>

      </div>

        </div>
      </section>

      <section id="testimonials">

       <div id="testimonial-carousel" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="hover">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <h2 style="color: white; line-height:1.5; font-size:2.5rem; padding: 4% 0; line-height: 1.5;">I took Hamster. I have no complains with PlayPen. They even instucted me to how to take care of my Hamster. Glad to have it. Thank you</h2>
             <img class="testimonial-image"src="photos/ham.jpg" alt="hamster">
             <em style="color:#FFF; font-weight:bold">Sofia, New York</em>
           </div>
           <div class="carousel-item">
             <h2 style="color: white; line-height:1.5; font-size:2.5rem; padding: 4% 0; line-height: 1.5;">I have chosen cat and I am very happy. I have no complains with PlayPen. They even instucted me to how to take care of my Cat.</h2>
             <img class="testimonial-image" src="photos/catty.jpg" alt="hamster">
             <em style= "color:#FFF; font-weight:bold">Amilee, California</em>
           </div>
           <div class="carousel-item">
             <h2 style="color: white; line-height:1.5; font-size:2.5rem; padding: 4% 0; line-height: 1.5;">I have chosen Rabbit and it is very cute. I have no complains with PlayPen. They even instucted me to how to take care of my Rabbit.</h2>
             <img class="testimonial-image"src="photos/rabbit.jpg" alt="hamster">
             <em style="color:#FFF; font-weight:bold">John, Paris</em>
           </div>
         </div>
       </div>

      </section>

      <section id="press">
        <img class="press-images" src="photos/tech.png" alt="TechCrunch">
        <img class="press-images" src="photos/tnw.png" alt="tnw">
        <img class="press-images" src="photos/bizinsider.png" alt="bizinsider">
        <img class="press-images" src="photos/mashable.png" alt="mashable">
        </section>

        <section id="pricing">

          <h2>A Plan for Every Animal's Needs</h2>
          <p>Simple and affordable price plans for you and your pet.</p>

            <div class="row">

              <div class="pricing-column col-lg-3 col-sm-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="pricing-text">Dog</h3>
                  </div>
                  <div class="card-body">
                    <h2>₹120 / mo</h2>
                    <p>5 Matches Per Day</p>
                    <p>10 Messages Per Day</p>
                    <p>Unlimited App Usage</p>
										<form action="submit.php" method="post">


											<script
												src="https://checkout.stripe.com/checkout.js" class="stripe-button" style="background:#000"
												data-key="<?php echo $publishableKey?>"
												data-amount="12000"
												data-name="PlayPen"
												data-description="Have a great experience here."
												data-image="https://saveanimals.io/img/logo.png"
												data-currency="inr"
												data-email= <?php echo $_POST['email']; ?>
											>
											</script>

										</form>
                  </div>
                </div>
              </div>

              <div class="pricing-column col-lg-3 col-sm-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="pricing-text">Cat</h3>
                </div>
                <div class="card-body">
                  <h2>₹120 / mo</h2>
                  <p>Unlimited Matches</p>
                  <p>Unlimited Messages</p>
                  <p>Unlimited App Usage</p>
									<form action="submit.php" method="post">

										<script
											src="https://checkout.stripe.com/checkout.js" class="stripe-button" style="background:#000"
											data-key="<?php echo $publishableKey?>"
											data-amount="12000"
											data-name="PlayPen"
											data-description="Have a great experience here."
											data-image="https://saveanimals.io/img/logo.png"
											data-currency="inr"
											data-email= <?php echo $_POST['email']; ?>
										>
										</script>

									</form>
                </div>
              </div>
            </div>

              <div class="pricing-column col-lg-3 col-sm-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="pricing-text">Hamster</h3>
                </div>
                <div class="card-body">
                  <h2>₹120 / mo</h2>
                  <p>Pirority Listing</p>
                  <p>Unlimited Messages</p>
                  <p>Unlimited App Usage</p>
									<form action="submit.php" method="post">

										<script
											src="https://checkout.stripe.com/checkout.js" class="stripe-button" style="background:#000"
											data-key="<?php echo $publishableKey?>"
											data-amount="12000"
											data-name="PlayPen"
											data-description="Have a great experience here."
											data-image="https://saveanimals.io/img/logo.png"
											data-currency="inr"
											data-email= <?php echo $_POST['email']; ?>
										>
										</script>

									</form>
                </div>
              </div>
            </div>

              <div class="pricing-column col-lg-3 col-sm-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="pricing-text">Rabbit</h3>
                </div>
                <div class="card-body">
                  <h2>₹120 / mo</h2>
                  <p>Pirority Listing</p>
                  <p>Unlimited Messages</p>
                  <p>Unlimited App Usage</p>
									<form action="submit.php" method="post">

										<script
											src="https://checkout.stripe.com/checkout.js" class="stripe-button" style="background:#000"
											data-key="<?php echo $publishableKey?>"
											data-amount="12000"
											data-name="PlayPen"
											data-description="Have a great experience here."
											data-image="https://saveanimals.io/img/logo.png"
											data-currency="inr"
											data-email= <?php echo $_POST['email']; ?>
										>
										</script>

									</form>
                </div>
              </div>
            </div>

          </div>
  </section>



  <section id="cta">
    <h3 style="font-family:'Montserrat', sans-serif; font-size: 40px; color:#fff; line-height:1.5">Find your love in animals in today's life. Hope that you will enjoy us...</h3>
    <button class="btn btn-lg btn-dark download-btn"><i class="fab fa-apple"></i>   Download</button>
    <button class="btn btn-lg btn-outline-light download-btn"><i class="fab fa-google-play"></i>   Download</button>
  </section>

  <footer id="footer">
    <i class="fab fa-twitter sicon fa-2x"></i>
    <i class="fab fa-facebook-f sicon fa-2x"></i>
    <i class="fab fa-instagram sicon fa-2x"></i>
    <i class="fas fa-envelope sicon fa-2x"></i>
  <p>
     © Copywrite 2021 PlayPen
  </p>
  </footer>


    </body>
</html>
