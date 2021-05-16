<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">  
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
		<h5 class="page-title">GALLERY</h5>
			</div>
		</div>
<div class="col-md-6 pt-3">
			<div class="breadcrumb mx-auto" style="padding-left: 78%;">
			<a href="">HOME</a> <i class="fa fa-long-arrow-right crumbicon" aria-hidden="true"></i>
			<div class="breadcrumb-current">
				<p class="crumbtext">GALLERY</p>
				
			</div>
		</div>
</div>

		</div>

	</div>
	</div>

	<!-- GALLERY -->
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="gallery">
						<img class="mklbItem" src="img/gallery/gal1.jpg"  width="100%" height="auto" data-imagebox />
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="gallery">
					<img class="mklbItem" src="img/gallery/gal2.jpg"  width="100%" height="auto" data-imagebox />	
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="gallery">
						<img class="mklbItem" src="img/gallery/gal3.jpg"  width="100%" height="auto" data-imagebox />
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="gallery">
						<img class="mklbItem" src="img/gallery/gal4.jpg"  width="100%" height="auto" data-imagebox />
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="gallery">
						<img class="mklbItem" src="img/gallery/gal5.jpg"  width="100%" height="auto" data-imagebox />
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="gallery">
						<img class="mklbItem" src="img/gallery/gal6.jpg"  width="100%" height="auto" data-imagebox />
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="gallery">
						<img class="mklbItem" src="img/gallery/gal7.jpg"  width="100%" height="auto" data-imagebox />
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="galleryallerygallery">
						<img class="mklbItem" src="img/gallery/gal8.jpg"  width="100%" height="auto" data-imagebox />
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="gallery">
						<img class="mklbItem" src="img/gallery/gal9.jpg"  width="100%" height="auto" data-imagebox />
					</div>
					
				</div>


				 
			</div>
			
		</div>
		
	</div>

	<!-- FOOTER -->
<?php include('footer.php'); ?>
<!-- SCRIPT -->

<script src="js/lightbox.min.js"></script>
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