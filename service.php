<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
	    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <!-- FRAMEWORK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include('header.php'); ?>
<!--  -->
<div class="container-fluid content-wrapper ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<div class="content-wrapper pt-3">
		<h5 class="page-title">SERIVCES</h5>
			</div>
		</div>
<div class="col-md-6 pt-3">
			<div class="breadcrumb mx-auto" style="padding-left: 80%;">
			<a href="">HOME</a> <i class="fa fa-long-arrow-right crumbicon" aria-hidden="true"></i>
			<div class="breadcrumb-current">
				<p class="crumbtext">SERVICE</p>
				
			</div>
		</div>
</div>

		</div>

	</div>
	</div>

	<!-- SERIVICE -->
	<div class="container-fluid pt-5">
		<div class="container content-wrapper">
			<div class="service-listing">
								<h5 class="pt-4">Sercurity Gaurding Services</h5>
	<p class="pt-3 pb-3">We can offer a wide range of security guarding services across all industries. We have the capability to recruit, train (Under DPS/SIRA regulations) and develop security staff to ﬁll the following roles</p>
			<div class="row">
				<div class="col-md-4">
					<figure>
  <img src="img/service/service1.jpg" width="100%" height="auto" class="service-img">
 <span> <figcaption>Security Managers</figcaption></span>
</figure>

				</div>
								<div class="col-md-4">
													<figure>
  <img src="img/service/service2.jpg" width="100%" height="auto" class="service-img">
 <span> <figcaption>Security Supervisors</figcaption></span>
</figure>
				</div>
								<div class="col-md-4 ">
															<figure>
  <img src="img/service/service3.jpg" width="100%" height="auto" class="service-img">
 <span> <figcaption>Mailroom Staff</figcaption></span>
</figure>
				</div>
								<div class="col-md-4 pt-4">
										<figure>
  <img src="img/service/service4.jpg" width="100%" height="auto" class="service-img">
  <span><figcaption> Concierge</figcaption></span>
</figure>
				</div>
								<div class="col-md-4 pt-4">
						<figure>
  <img src="img/service/service5.jpg" width="100%" height="auto" class="service-img">
  <span><figcaption> Security Guards</figcaption></span>
</figure>
				</div>
								<div class="col-md-4 pt-4">
								<figure>
  <img src="img/service/service6.jpg" width="100%" height="auto" class="service-img">
  <span><figcaption> Dock Controller</figcaption></span>
</figure>
				</div>
								<div class="col-md-4 pt-4">
								<figure>
  <img src="img/service/service7.jpg" width="100%" height="auto" class="service-img">
 <span> <figcaption> Patrolling Guards</figcaption></span>
</figure>
				</div>
								<div class="col-md-4 pt-4">
										<figure>
  <img src="img/service/service8.jpg" width="100%" height="auto" class="service-img">
  <span><figcaption> Bouncers</figcaption></span>
</figure>
				</div>
								<div class="col-md-4 pt-4">
								<figure>
  <img src="img/service/service9.jpg" width="100%" height="auto" class="service-img">
  <span><figcaption> Event Guards</figcaption></span>
</figure>
				</div>

			</div>
			
			</div>
		</div>
		
	</div>
		<!-- FOOTER -->
	<?php include('footer.php'); ?>

	 <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <script type="text/javascript">
        var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
    </script>

</body>
</html>