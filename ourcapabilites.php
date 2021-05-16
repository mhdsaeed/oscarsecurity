<!DOCTYPE html>
<html>
<head>
	<title>Our Capabilities</title>
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
		<h5 class="page-title">OUR CAPABILITES</h5>
			</div>
		</div>
<div class="col-md-6 pt-3">
			<div class="breadcrumb mx-auto" style="padding-left: 72%;">
			<a href="">HOME</a> <i class="fa fa-long-arrow-right crumbicon" aria-hidden="true"></i>
			<div class="breadcrumb-current">
				<p class="crumbtext">OUR CAPABILITIES</p>
				
			</div>
		</div>
</div>

		</div>

	</div>
	</div>

	<!-- CONTENT -->

<div class="container-fluid pt-5">
	<div class="container">
		<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'h&h')" id="defaultOpen">Hotels & Hospitality</button>
    <button class="tablinks" onclick="openCity(event, 'commercial')" id="defaultOpen">Commercial & Residential High Rise</button>
      <button class="tablinks" onclick="openCity(event, 'health')" id="defaultOpen">Health Care Facilities</button>
        <button class="tablinks" onclick="openCity(event, 'retail')" id="defaultOpen">Retail / Warehousing / Logistics</button>
  <button class="tablinks" onclick="openCity(event, 'construction')">Construction Sites</button>
  <button class="tablinks" onclick="openCity(event, 'event')">Events / Crowd Control</button>
</div>

<div id="h&h" class="tabcontent">
  <img src="img/oc/oc1.jpg" width="100%" height="auto">
  <p class="about-detail pt-4">

Where the highest standards of customer service is of paramount importance to the success of your business operations, the values that Oscar Security Services operate by means we are ideally positioned to enhance your customer experiences whilst unobtrusively securing your real estate, property, guests and visitors during their time at your establishment.</p>
<br>
<p class="about-detail">
	We can provide security services for the following:</p>
<ul type="disc" class="about-detail">
	<li>Hotel Security</li>
	<li>Bars and Clubs security</li>
	<li>Private and Corporate Functions</li>
	<li>Special Event Security</li>
</ul>
</div>

<div id="commercial" class="tabcontent">
 <img src="img/oc/oc2.jpg" width="100%" height="auto">
  <p class="about-detail pt-4">

In environments such as commercial establishments or high rise residential complexes, security personnel are usually the ﬁrst point of contact for tenants, contractors, staff and visitors. It is therefore of paramount importance that our staff are well trained and focused on customer service as well as having the ability to communicate effectively with the cross section of multiple nationalities that exist in Dubai. OSS staff represent both your company and our own and therefore particular attention is paid to ensuring staff selected for these locations are customer focused, operate with diplomacy and have the ability to manage both conflict situations and solve problems.</p>
</div>

<div id="health" class="tabcontent">
 <img src="img/oc/oc3.jpg" width="100%" height="auto">
  <p class="about-detail pt-4">

In Health Care Facilities, while staff will also need to be focused on customer service, additional attributes would be required to make them approachable, able to work under pressure, deal with out of the ordinary behaviours and provide a balance between a physical presence and empathy for patients and healthcare staff.</p>
</div>

<div id="retail" class="tabcontent">
<img src="img/oc/oc4.jpg" width="100%" height="auto">
  <p class="about-detail pt-4">
Warehousing, Logistics and retail organisations require focus on delivery of strict security and loss prevention requirements aligned with excellent customer services across wide range industries and within busy and time sensitive environments. OSS will provide tailor made solutions to ensure optimum levels of security, safety, loss prevention and crime reduction.</p>
</div>

<div id="construction" class="tabcontent">
<img src="img/oc/oc5.jpg" width="100%" height="auto">
   <p class="about-detail pt-4">

Construction sites are renowned as being particularly vulnerable with high value equipment and building materials often left in remote insecure and easily accessible locations, an ideal target for theft. They can also provide shelter to homeless or squatters and be the perfect playground for children unaware of potential hazards. In order to assist in securing these areas.</p>
<br>
<p class="about-detail">
	We can offer multiple solutions which inlude:</p>
<ul type="disc" class="about-detail">
	<li>Static Guards</li>
	<li>Mobile Patrols</li>
	<li>Control Staff and Visitor site access</li>
	<li>Control of vehicular site access</li>
	<li>Remote Monitoring</li>
</ul>
</div>

<div id="event" class="tabcontent">
<img src="img/oc/oc6.jpg" width="100%" height="auto">
     <p class="about-detail pt-4">

Oscar Security Group can supply highly qualiﬁed and licensed ofﬁcers who have been trained to handle crowds in a customer-focused manner..</p>
<br>
<p class="about-detail">
	The services that we can provide includes:</p>
<ul type="disc" class="about-detail">
	<li>Pubs and Clubs security</li>
	<li>Private and Corporate Functions</li>
	<li>Emergency Event Security such as protest, industrial action or global security threats</li>
</ul>
</div>



		
	</div>
	
</div>

<!-- FOOTER -->
<?php include('footer.php'); ?>

<!-- SCRIPT -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>