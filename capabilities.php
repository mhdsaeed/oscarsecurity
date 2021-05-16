<!DOCTYPE html>
<html>
<head>
	<title>Capabilites</title>
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
		<h5 class="page-title">CAPABILITIES</h5>
			</div>
		</div>
<div class="col-md-6 pt-3">
			<div class="breadcrumb mx-auto" style="padding-left: 69%;">
			<a href="">HOME</a> <i class="fa fa-long-arrow-right crumbicon" aria-hidden="true"></i>
			<div class="breadcrumb-current">
				<p class="crumbtext">CAPABILITIES</p>
				
			</div>
		</div>
</div>

		</div>

	</div>
	</div>
<!-- CONTENT -->

<div class="container-fluid pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card" style="width: 38rem;">
					    <h5 class="card-title"> Events or crowd control</h5>
  <img src="img/capabilities/events.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Oscar Security Group can supply highly qualiﬁed and licensed ofﬁcers who have been trained to handle crowds in a customer-focused manner.</p>
                    <div class="line pb-4" style=" border-top-style: solid;"></div>
    <a href="ourcapabilites.php" class="postbtn">learn more</a>
  </div>
</div>
			</div>
			<div class="col-md-6">
				<div class="card content-wrapper" style="width: 38rem;">
	<h5 class="card-title">CONSTRUCTION SITES</h5>
  <img src="img/capabilities/construction.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Construction sites are renowned as being particularly vulnerable with high value equipment and building materials often left in remote insecure...</p>
                    <div class="line pb-4" style=" border-top-style: solid;"></div>
    <a href="ourcapabilites.php" class="postbtn">learn more</a>
  </div>
</div>
			</div>		

			<div class="col-md-6">
				<div class="card" style="width: 38rem;">
					    <h5 class="card-title"> RETAIL / WAREHOUSING / LOGISTICS</h5>
  <img src="img/capabilities/logistics.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Warehousing, Logistics and retail organisations require focus on delivery of strict security and loss prevention requirements aligned with...</p>
                        <div class="line pb-4" style=" border-top-style: solid;"></div>
    <a href="ourcapabilites.php" class="postbtn">learn more</a>
  </div>
</div>
			</div>
			<div class="col-md-6">
				<div class="card content-wrapper" style="width: 38rem;">
	<h5 class="card-title">HEALTH CARE FACILITIES</h5>
  <img src="img/capabilities/health.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">In Health Care Facilities, while staff will also need to be focused on customer service, additional attributes would be required to make them...</p>
                        <div class="line pb-4" style=" border-top-style: solid;"></div>
    <a href="ourcapabilites.php" class="postbtn">learn more</a>
  </div>
</div>
			</div>	

			<div class="col-md-6">
				<div class="card" style="width: 38rem;">
					    <h5 class="card-title"> COMMERCIAL & RESIDENTIAL HIGH RISE</h5>
  <img src="img/capabilities/commercial.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">In environments such as commercial establishments or high rise residential complexes, security personnel are usually the ﬁrst point of contact for...</p>
                        <div class="line pb-4" style=" border-top-style: solid;"></div>
    <a href="ourcapabilites.php" class="postbtn">learn more</a>
  </div>
</div>
			</div>
			<div class="col-md-6">
				<div class="card content-wrapper" style="width: 38rem;">
	<h5 class="card-title">HOTELS & HOSPITALITY</h5>
  <img src="img/capabilites/hotel.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Where the highest standards of customer service is of paramount importance to the success of your business operations, the values that Oscar...</p>
                        <div class="line pb-4" style=" border-top-style: solid;"></div>
    <a href="ourcapabilites.php" class="postbtn">learn more</a>
  </div>
</div>
			</div>								
		</div>
		
	</div>
</div>
<!-- FOOTER -->
<?php include('footer.php'); ?>
<!-- SCRIPT -->
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
</div>
</body>
</html>