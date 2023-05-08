<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ClosetsToGo</title>
	<meta name="description" content="We design survey">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
<style>
.design_form_highlight_border {
	border-style: solid;
	border-width: medium;
	border-color: #6FF;
}
.m_box {
	/*font-size:10px; */
	width:56px !important;
	height:30px !important;
	
	position:relative;
	border-style: solid !important;
	border-width: thick !important;
	border-color: red !important;
}
#upload_iframe{
	display:none;
	width:100%;
	height:360px;
	z-index:9;
	position:absolute;
}
</style>

<script>
function open_upload_iframe(){
	const el = document.getElementById("upload_iframe");
	el.style.display = "block";

}
</script>

</head>
<?php
require_once($real_root . '/pages/views/header.php');
?>
<body class="clearfix we-design-survey-page">
<div class="sr-only"><a href="#maincontent">Skip to main content</a></div>
<main id="maincontent" class="main ">
<div>
<div class="block-with-background__wrapper we-design-survey">
<div class="block-with-background__content">
	<div class="row-survey-heading">
		<h2 class="block-with-background__content--heading">Custom Closet needs</h2>
		<p class="second-block__first--description second-block-survey wrapper">
		Thank you for choosing Closets To Go. In order to create a space that meets your specific needs and style,
		please fill out and submit this form entirely and in a timely manner. Your Closets To Go Team is standing by and eager to start the design process.
		</p>
	</div>
</div>
<div class="progressbar row row-survey-top block-with-background wrapper">
	<div class="progress" id="progress"></div>
	<div class="tooltip-msg-step one" data-toggle="tooltip" data-placement="top" title="Contact Information"></div>
	<div class="progress-step progress-step-active" data-title="Step 1"></div>
	<div class="tooltip-msg-step two" data-toggle="tooltip" data-placement="top" title="Project Timeline"></div>
	<div class="progress-step" data-title="Step 2"></div>
	<div class="tooltip-msg-step three" data-toggle="tooltip" data-placement="top" title="Closet Details and Dimensions"></div>
	<div class="progress-step" data-title="Step 3"></div>
	<div class="tooltip-msg-step four" data-toggle="tooltip" data-placement="top" title="Personalize Your Closet Organizer"></div>
	<div class="progress-step" data-title="Step 4"></div>
	<div class="tooltip-msg-step five" data-toggle="tooltip" data-placement="top" title="Personalize Your Pantry"></div>
	<div class="progress-step" data-title="Step 5"></div>
	<div class="tooltip-msg-step six" data-toggle="tooltip" data-placement="top" title="Personalize your Wine Rack or Cellar"></div>
	<div class="progress-step" data-title="Step 6"></div>
	<div class="tooltip-msg-step seven" data-toggle="tooltip" data-placement="top" title="Final Questions"></div>
	<div class="progress-step" data-title="Step 7"></div>
</div>
</div>
<br>
<br>

<form class="form block-with-background container-fluid wrapper" 
action="<?php echo SITEROOT."we-design-confirm.html"; ?>"
method="POST">

<div class="steps___">
<div class="form-step form-step-active">
<div class="box-content">
	<div class="title wrapper text-center">Contact Information</div>
		<p class="desc">Thank you for choosing Closets To Go.
		<br>
		In order to professionally design a space that meets your specific needs and style, please fill out and submit this questionnaire.
		<br>
		Your Closets To Go Team is standing by and eager to start creating the perfect space for your home!
		</p>

		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="name">First Name *</label>
			</div>
			<div class="w80">
				<input type="text" name="first_name" id="first_name" value="<?php echo $_SESSION['dr']['first_name']; ?>" required />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="name">Last Name *</label>
			</div>
			<div class="w80">
				<input type="text" name="last_name" id="last_name" value="<?php echo $_SESSION['dr']['last_name']; ?>" required />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="phone">Phone Number *</label>
			</div>
			<div class="w80">
				<input type="number" name="phone" id="phone" value="<?php echo $_SESSION['dr']['phone']; ?>" required />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="email">Email *</label>
			</div>
			<div class="w80">
				<input type="email" name="email" id="email" value="<?php echo $_SESSION['dr']['email']; ?>" required />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="code">City</label>
			</div>
			<div class="w80">
				<input type="text" name="city" id="city" value="<?php echo $_SESSION['dr']['city']; ?>" />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="code">State</label>
			</div>
			<div class="w80">
				<input type="text" name="state" id="state" value="<?php echo $_SESSION['dr']['state']; ?>" />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="code">Zip Code *</label>
			</div>
			<div class="w80">
<input type="text" 
name="zip" 
id="zip" 
value="<?php echo $_SESSION['dr']['zip']; ?>" />
			</div>
		</div>
		<div class="input-group">
			<div class="title wrapper text-center">Select your preferred method of contact</div>
			<br />
		</div>
		<div class="row">
			<div class="col-12 col-lg-4 mb-3 select-survey ml--">
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" 
name="preferred_contact" 
<?php 
if($_SESSION['dr']['preferred_contact']=="phone"){echo "checked ";}
?> 
value="phone">
						<span>Phone</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" 
name="preferred_contact"
<?php 
if($_SESSION['dr']['preferred_contact']=="email"){echo "checked ";}
?> 
value="email">
						<span>Email</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="preferred_contact" 
<?php 
if($_SESSION['dr']['preferred_contact']=="text"){echo "checked ";}  
?> 
value="text">
						<span>Text</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="preferred_contact" 
<?php if($_SESSION['dr']['preferred_contact']=="any"){ echo "checked "; } ?> 
value="any">
						<span>Any method is fine</span>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
<a id="subscribe-button"></>
	<br />

	<div class="">

<!--		
<a href="#"  class="btn btn-next width-50 ml-auto">Next Step</a>
	</div>
-->
	<br />
</div>

<a href="#step_2">Go to Step 2</a> 
<br />



<div class="form-step step-two">
	<div class="box-content">
		<div class="title wrapper text-center">Timeline, Closet Type, Dimensions</div>
			<p class="desc">So that we may best serve you, what is your sense of urgency in completing this project?</p>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" 
name="urgency" 
<?php if($_SESSION['dr']['urgency'] == "ReadyToPurchase"){echo "checked ";}?> 

value="ReadyToPurchase">
						<span>Ready to purchase. Remodeling or new build project underway.</span>
					</label>
				</div>
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" 
name="urgency" 
<?php if($_SESSION['dr']['urgency']=="Comparison") echo "checked ";  ?> 
value="Comparison">
					<span>Received a quote from a different company and would like to comparison shop before making a decision.</span>
					</label>
				</div>
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" 
name="urgency" 
<?php if($_SESSION['dr']['urgency']=="Exploring") echo "checked ";  ?> 
value="Exploring">
					<span>Just exploring options. Not ready to purchase.</span>
					</label>
				</div>
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" 
name="urgency" 
<?php if($_SESSION['dr']['urgency']=="Other") echo "checked ";  ?> value="Other">
					<span>Other</span>
					</label>
				</div>
			</div>
			<div class="input-group d-flex special-position">
				<div class="w80">
additonal_info
<br />
<input type="text" 
name="additonal_info" 
id="OtherReason" 
value="<?php echo $_SESSION['dr']['additonal_info']; ?>" />
				</div>
			</div>
			<span class="note">Note: Additional information can be noted in "Other"</span>
		</div>
		<div class="box-content">
			<div class="input-group">
				<div class="title wrapper text-center">From the choices below, which is most important? </div>
				<br />
			</div>
			<table class="table-selections">
			<tr>
			<th></th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<span class="only-title">Not Important</span>
				</label>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<span class="only-title">Important</span>
				</label>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<span class="only-title">Very Important</span>
				</label>
			</div>
			</th>
			</tr>
			<tr>
			<th>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio text-left">
					<span>Price</span>
					</label>
				</div>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" 
name="importance_price" 
<?php if($_SESSION['dr']['importance_price'] == "importance_price"){echo "checked ";}?> 
value="PriceNotImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" 
name="importance_price" 
<?php if($_SESSION['dr']['importance_price'] == "importance_price"){echo "checked ";}?> 
value="PriceImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" name="importance_price" 
<?php if($_SESSION['dr']['importance_price'] == "importance_price"){echo "checked ";}?> 
value="PriceVeryImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			</tr>
			<tr>
			<th>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio text-left">
					<span>Timeline</span>
					</label>
				</div>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" 
name="importance_timeline" 
<?php if($_SESSION['dr']['importance_price'] == "importance_price"){echo "checked ";}?> 
value="TimelineNotImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" 
name="importance_timeline" 
<?php if($_SESSION['dr']['importance_price'] == "importance_price"){echo "checked ";}?> 
value="TimelineImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" 
name="importance_timeline" 
<?php if($_SESSION['dr']['importance_price'] == "importance_price"){echo "checked ";}?> 
value="TimelineVeryImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			</tr>
			<tr>
			<th>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio text-left">
					<span>Design</span>
					</label>
				</div>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" 
name="importance_design" 
<?php if($_SESSION['dr']['importance_design']=="DesignNotImportant") echo "checked ";  ?> 
value="DesignNotImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" 
name="importance_design" 
<?php if($_SESSION['dr']['importance_design']=="DesignImportant") echo "checked ";  ?> 
value="DesignImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
<input type="radio" 
name="importance_design" 
<?php if($_SESSION['dr']['importance_price'] == "importance_price"){echo "checked ";}?> 
value="DesignVeryImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
			</th>
			</tr>
			</table>
			<br />
			<br />
		</div>
		<div class="box-content">
			<div class="input-group">
				<div class="title wrapper text-center">
					Request a completion date for your project considering shipping estimates below.
				</div>
				<br />
			</div>
			<p class="desc">
			The requested "completion date" is when you would like your order to be ready for shipment OR available to pick up from our manufacturing center located in Tigard Oregon. If your order is being shipped, please allocate for shipping time as estimated in chart below and note, 3rd party transit times can change due to unforeseen circumstances and therefore can not be guaranteed.
<input type="date" id="proposed_finish_date" 
name="proposed_finish_date" value="<?php echo $_SESSION['dr']['proposed_finish_date']; ?>" 
style="width: 170px; margin-top:18px;">
			</p>
			<div class="col-12 col-lg-12 company-block__images">
				<img class="map-delivery-desktop" src="<?php echo SITEROOT; ?>manage/cms/images/map-mobile1.png" alt="map">
				<img class="map-delivery-mobile" src="<?php echo SITEROOT; ?>manage/cms/images/map-mobile1.png" alt="map">
			</div>
			<br />
			<br />
		</div>
		<div class="box-content">
			<div class="input-group">
				<div class="title wrapper text-center">
				Are you on a short timeline and need to expedite your order?
				</div>
				<br />
			</div>
			<p class="desc">
			We strive to serve all of our valued clients in a timely manner. On average, you should receive your closet in just 2-3 weeks time.
			However, there are rare occasions where this could be prolonged due to transit issues or other circumstances beyond our control.
			By selecting "Yes" you are REQUESTING an expedited design and production process although it can not be guaranteed.
			Note: Your design can not be forwarded to production until you have approved design, purchase order is signed and payment is received.
			</p>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" name="expedite" 
<?php if($_SESSION['dr']['expedite']=="Yes") echo "checked ";  ?> value="Yes">
					<span>Yes</span>
					</label>
				</div>
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" name="expedite" 
<?php if($_SESSION['dr']['expedite']=="No") echo "checked ";  ?> value="No">
					<span>No</span>
					</label>
				</div>
			</div>

			<div class="input-group d-flex special-position">
				<div class="w80">
expedite_note
<input type="text" name="expedite_note" id="expedite" 
value="<?php echo $_SESSION['dr']['expedite_note'] ?>" />
				</div>
			</div>
			<span class="note">Note: Additional information can be noted in "Other"</span>
			<br />
		</div>
		<br />
<input style="float:left; width:180px; heignt:20px;" type="submit" name="submit" value="Save and return later">
<span id="step_2"></span>

<a href="#step_3">Gp to Step 3</a>


<br />

		<div class="btns-group">
<!--
							<a href="#" class="btn btn-prev">Previous step</a>
							<a href="#" class="btn btn-next">Next step</a>
-->
		</div>
		<br /><br />
	</div>
	<div class="form-step">
		<div class="box-content">
			<div class="input-group">
				<div class="title-left  text-left">Name Your Closet</div>
				<div class="title-right  text-right">ex: Bobby's closet</div>
					<p class="desc">
					NOTE: If seeking design for multiple closets, you will have an option at the end to add an additional closet design.
					</p>
					<br />
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
closet_name_mobile
<br />
<input type="text" name="closet_name_mobile" value="<?php echo $_SESSION['dr']['closet_name_mobile']; ?>" id="closet_name_mobile" />


						</label>
					</div>
				</div>
				<div class="input-group d-flex special-position">
					<div class="w80">
closet_name
<br />
<input type="text" name="closet_name" 
value="<?php echo $_SESSION['dr']['closet_name']; ?>" id="closet_name" />
					</div>
				</div>
			</div>
			<div class="box-content" id="selectClosetType">
				<div class="input-group">
					<div class="title wrapper text-center">Select Closet Type</div>
					<br />
				</div>
				<p class="desc">
				Note: You will have an option at the end to add additional closet design request(s).
				</p>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="WalkIn") echo "checked ";  ?> value="WalkIn">
						<span>Walk In Closet</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="ReachIn") echo "checked ";  ?> value="ReachIn">
						<span>Reach In Closet</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 

<?php if($_SESSION['dr']['closet_type']=="KidsToy"){ echo "checked ";} ?> 
value="KidsToy">
						<span>Kids Closet or Toy Closet</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 

<?php if($_SESSION['dr']['closet_type']=="Kitchen") echo "checked ";  ?> 
value="Kitchen">
						<span>Kitchen Pantry</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="OfficeLibrary") echo "checked ";  ?> 
value="OfficeLibrary">
						<span>Home Office or Library</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="WineRack") echo "checked ";  ?> value="WineRack">
						<span>Convertible Wine Rack or Wine Cellar</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="Hobby") echo "checked ";  ?> value="Hobby">
						<span>Hobby or Spare Room</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="HallLinen") echo "checked ";  ?> value="HallLinen">
						<span>Hall or Linen Closet</span>
					</label>
				</div>
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="WallBed") echo "checked ";  ?> value="WallBed">
					<span>Wall Bed</span>
					</label>
				</div>
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="Garage") echo "checked ";  ?> value="Garage">
					<span>Garage Storage System</span>
					</label>
				</div>
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type']=="OtherClosetType") echo "checked ";  ?> value="OtherClosetType">
					<span>Other</span>
					</label>
				</div>
			</div>
			<div class="input-group d-flex special-position">
				<div class="w80">
closet_type_note
<input type="text" name="closet_type_note" 
value="<?php echo $_SESSION['dr']['closet_type_note']; ?>" />
				</div>
			</div>
			<span class="note">Note: Additional information can be noted in "Other"</span>
			<br />
		</div>
<script>
function set_wall_meas_content(shape) {
document.getElementById(shape).checked = true;
var w = "";
$("#walls_preview").html(w);
alert("==> " + shape);
if(shape.search("each-in") > -1) {
w+="<img style='position:relative;' width='340' src='<?php echo SITEROOT; ?>images/designform/large-reach-in-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text'  class='m_box' style='top:-28px; left:30px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text'  class='m_box' style='top:-130px; left:1px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='top:-228px; left:148px;'>";
w+="<input id='wall_d' name='wall_d' value='b' type='text' class='m_box' style='top:-200px; left:300px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='top:-172px; left:268px;'>";
}
if(shape.search("quare") > -1) {
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-square-c.png' />";
w+="<input id='wall_a' value='a' value='a' type='text' name='wall_a' class='m_box' style='position:relative; top:-40px; left:60px;'>";
w+="<input id='wall_b' value='b' value='b' type='text' name='wall_b' class='m_box' style='position:relative; top:-180px; left:3px;'>";
w+="<input id='wall_c' value='c' value='c' type='text' name='wall_c' class='m_box' style='position:relative; top:-320px; left:150px;'>";
w+="<input id='wall_d' value='d' value='d' type='text' name='wall_d' class='m_box' style='position:relative; top:-250px; left:305px;'>";
w+="<input id='wall_e' value='e' value='e' type='text' name='wall_e' class='m_box' style='position:relative; top:-180px; left:260px;'>";
}
if(shape.search("shape_1") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_1-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-40px; left:60px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-180px; left:3px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='position:relative; top:-320px; left:70px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-310px; left:150px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-300px; left:230px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-280px; left:306px;'>";
w+="<input id='wall_f' name='wall_f' value='g' type='text' class='m_box' style='position:relative; top:-256px; left:242px;' id='wall_g' name='wall_g'>";
}
if(shape.search("shape_2") > -1){
w+= "<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_2-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text'  class='m_box' style='position:relative; top:-36px; left:60px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text'  class='m_box' style='position:relative; top:-130px; left:1px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text'  class='m_box' style='position:relative; top:-230px; left:70px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text'  class='m_box' style='position:relative; top:-310px; left:150px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text'  class='m_box' style='position:relative; top:-390px; left:230px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text'  class='m_box' style='position:relative; top:-320px; left:306px;'>";
w+="<input id='wall_g' name='wall_g' value='g' type='text'  class='m_box' style='position:relative; top:-252px; left:242px;'>";
}
if(shape.search("shape_3") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_3-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-36px; left:174px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-110px; left:140px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='position:relative; top:-198px; left:80px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-300px; left:1px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-390px; left:160px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-320px; left:306px;'>";
w+="<input id='wall_g' name='wall_g' value='g' type='text' class='m_box' style='position:relative; top:-252px; left:280px;'>";
}
if(shape.search("shape_4") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_4-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-36px; left:20px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-178px; left:1px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='position:relative; top:-320px; left:160px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-300px; left:300px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-272px; left:240px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-270px; left:150px;'>";
w+="<input id='wall_g' name='wall_g' value='g' type='text' class='m_box' style='position:relative; top:-252px; left:130px;'>";
}
if(shape.search("ngle-1") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-angle-1-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-36px; left:60px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-178px; left:-1px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='position:relative; top:-320px; left:100px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-310px; left:260px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-240px; left:310px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-216px; left:250px;'>";
}
if(shape.search("ngle-2") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-angle-2-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-36px; left:60px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-130px; left:-1px;'>";
w+="<input id='wall_c' name='wall_c' value='e' type='text' class='m_box' style='position:relative; top:-260px; left:40px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-354px; left:200px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-300px; left:305px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-216px; left:250px;'>";
}
if(shape.search("ngle-3") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-angle-3-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-36px; left:44px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-180px; left:-1px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='position:relative; top:-320px; left:150px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-304px; left:305px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-230px; left:260px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-216px; left:166px;'>";
}
if(shape.search("ngle-4") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-angle-4-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-36px; left:144px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-120px; left:40px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='position:relative; top:-260px; left:-1px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-354px; left:150px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-290px; left:304px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-216px; left:270px;'>";
}
if(shape.search("ngle-5") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-angle-5-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-54px; left:224px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-72px; left:100px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='position:relative; top:-200px; left:-1px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-354px; left:150px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-330px; left:304px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-290px; left:290px;'>";
}
if(shape.search("ngle-6") > -1){
w+="<img width='340' src='<?php echo SITEROOT; ?>images/designform/large-angle-6-c.png' />";
w+="<input id='wall_a' name='wall_a' value='a' type='text' class='m_box' style='position:relative; top:-120px; left:24px;'>";
w+="<input id='wall_b' name='wall_b' value='b' type='text' class='m_box' style='position:relative; top:-220px; left:-3px;'>";
w+="<input id='wall_c' name='wall_c' value='c' type='text' class='m_box' style='position:relative; top:-320px; left:140px;'>";
w+="<input id='wall_d' name='wall_d' value='d' type='text' class='m_box' style='position:relative; top:-300px; left:300px;'>";
w+="<input id='wall_e' name='wall_e' value='e' type='text' class='m_box' style='position:relative; top:-180px; left:200px;'>";
w+="<input id='wall_f' name='wall_f' value='f' type='text' class='m_box' style='position:relative; top:-230px; left:90px;'>";
}
$("#walls_preview").html(w);
}
</script>

		<div class="box-content">
			<div class="input-group">
				<div class="title wrapper text-center">Floor Plan Shape</div>
				<p class="desc">
				Select the shape that BEST represents your space.
				Add any details you think would be helpful in other.
				Note: If you have a odd shaped room or space please upload a hand drawn picture with "Top View"
				perspective as shown in options below
				</p>
				<br />
			</div>
			<div style="float:left; cursor: pointer;">
				Reach-in
				<br />
				<img height="80px;" onClick="set_wall_meas_content('Reach-in');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/reach-in.png" alt="Reach-in" />
				<input id="Reach-in" 
					type="radio" 
					style="display: none;" stylename="space_shape" 
					value="Reach-in">
			</div>
			<div style="float:left; cursor: pointer;">
				Square
				<br />
				<img onClick="set_wall_meas_content('Square');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/square.jpg" alt="Square" />
				<input id="Square" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="Square">
			</div>
			<div style="float:left; cursor: pointer;">
				L-shape_1
				<br />
				<img onClick="set_wall_meas_content('L-shape_1');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/l-shape_1.jpg" alt="L-shape_1" />
				<input id="L-shape_1" 
					type="radio" 
					style="display: none;"
					name="space_shape" 
					value="L-shape_1">
			</div>
			<div style="float:left; cursor: pointer;">
				L-shape_2
				<br />
				<img onClick="set_wall_meas_content('L-shape_2');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/l-shape_2.jpg" alt="L-shape_2" />
				<input id="L-shape_2" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="L-shape_2">
			</div>
			<div style="float:left; cursor: pointer;">
				L-shape_3
				<br />
				<img onClick="set_wall_meas_content('L-shape_3');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/l-shape_3.jpg" alt="L-shape_3" />
				<input id="L-shape_3" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="L-shape_3">
			</div>
			<div style="float:left; cursor: pointer;">
				L-shape_4
				<br />
				<img onClick="set_wall_meas_content('L-shape_4');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/l-shape_4.jpg" alt="L-shape_4" />
				<input id="L-shape_4" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="L-shape_4">
			</div>
			<div style="float:left; cursor: pointer;">
				Angle-1
				<br />
				<img onClick="set_wall_meas_content('Angle-1');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-1.jpg" alt="Angle-1" />
				<input id="Angle-1" type="radio" style="display: none;" name="space_shape" value="Angle-1">
			</div>
			<div style="float:left; cursor: pointer;">
				Angle-2
				<br />
				<img onClick="set_wall_meas_content('Angle-2');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-2.jpg" alt="Angle-2" />
				<input id="Angle-2" type="radio" style="display: none;" name="space_shape" value="Angle-2">
			</div>
			<div style="float:left; cursor: pointer;">
				Angle-3
				<br />
				<img onClick="set_wall_meas_content('Angle-3');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-3.jpg" alt="Angle-3" />
				<input id="Angle-3" type="radio" style="display: none;" name="space_shape" value="Angle-3">
			</div>
			<div style="float:left; cursor: pointer;">
				Angle-4
				<br />
				<img onClick="set_wall_meas_content('Angle-4');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-4.jpg" alt="Angle-4" />
				<input id="Angle-4" type="radio" style="display: none;" name="space_shape" value="Angle-4">
			</div>
			<div style="float:left; cursor: pointer;">
				Angle-5
				<br />
				<img onClick="set_wall_meas_content('Angle-5');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-5.jpg" alt="Angle-5" />
				<input id="Angle-5" type="radio" style="display: none;" name="space_shape" value="Angle-5">
			</div>
			<div style="float:left; cursor: pointer;">
				Angle-6
				<br />
				<img onClick="set_wall_meas_content('Angle-6');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-6.jpg" alt="Angle-6" />
				<input id="Angle-6" type="radio" style="display: none;" name="space_shape" value="Angle-6">
			</div>
			<div style="clear:both;"></div>
			
			<div id="walls_preview" style="float:left; margin-left:30px; margin-top:30px;">

			</div>
			</br>
			<div style="float: left; margin-top: 79px;">
				Other
			</div>
			<div style="clear:both;"></div>
			<div class="col-12" style="padding-top: 30px;">
				<span>Note: Additional information "Other"</span>
wall_length_other
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px; " 
id="wall_length_other" 
name="wall_length_other"><?php echo $_SESSION['dr']['wall_length_other']; ?></textarea>
			</div>
		</div>
		<div class="box-content">
			<div class="input-group">
				<div class="title wrapper text-center">Floor Plan Shape</div>
					<p class="desc">Select the shape that BEST represents your space.
					Add any details you think would be helpful in other.
					Note: If you have a odd shaped room or space please upload a hand drawn picture with "Top View"
					perspective as shown in options below.
					</p>
					<br />
				</div>

			</div>
			<div class="box-content">
				<div class="input-group">
					<div class="title wrapper text-center">
						Select the picture that best represents your ceiling type.
<br />
<?php echo "ceiling ".$_SESSION['dr']['ceiling']; ?>
					</div>
					<br />
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" 
name="ceiling" 
<?php if($_SESSION['dr']['ceiling']=="flat") echo "checked ";  ?> 
value="flat">
						<span>Flat</span>
						</label>
					</div>
				</div>
				<div class="img-center">
					<img src="<?php echo SITEROOT; ?>manage/cms/images/flat.jpg" alt="flat">
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" 
name="ceiling" 
<?php if($_SESSION['dr']['ceiling']=="sloped") echo "checked ";  ?> 
value="sloped">
						<span>Sloped</span>
						</label>
					</div>
				</div>
				<div class="img-center">
					<img src="<?php echo SITEROOT; ?>manage/cms/images/sloped.jpg" alt="sloped">
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">
						<label class="home-consult-form__radio">
<input type="radio" 
name="ceiling" 
<?php if($_SESSION['dr']['ceiling']=="pitch") echo "checked ";  ?> 
value="pitch">
										<span>Pitch</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/pitch.jpg" alt="pitch">
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="ceiling" 
<?php if($_SESSION['dr']['ceiling']=="bulkhead") echo "checked ";  ?> 
value="bulkhead">
										<span>Bulk Head</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/bulk-head.jpg" alt="Bulk Head">
							</div>
							<br class="d-none" />
							<br class="d-none" />
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="ceiling" 
<?php if($_SESSION['dr']['ceiling']=="other") echo "checked "; ?> 
value="other">
									<span>Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
ceiling_note
<input type="text" 
name="ceiling_note" 
value="<?php echo $_SESSION['dr']['ceiling_note']; ?>"/>
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
							<br />
							<br />
						</div>
						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">What is / are your ceiling height(s)?</div>
								<br /><br />
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
ceiling_height
<input type="text" 
name="ceiling_height" 
value="<?php echo $_SESSION['dr']['ceiling_height']; ?>">
								</div>
							</div>
						</div>
						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">
								What type of door encloses the space?
<br />
<?php echo "door_type: ".$_SESSION['dr']['door_type']; ?>

								</div>
								<br />
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="door_type" 
<?php if($_SESSION['dr']['door_type']=="nodoor") echo "checked ";  ?> 
value="nodoor">
									<span>No Door</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/d1.jpg" alt="No Door">
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="door_type" 
<?php if($_SESSION['dr']['door_type']=="doorswingout") echo "checked ";  ?> 
value="doorswingout">
										<span>Doors (Swings outward from the space)</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/d2.jpg" alt="Doors (Swings outward from the space)">
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="door_type" 
<?php if($_SESSION['dr']['door_type']=="doorswinginleft") echo "checked ";  ?> 
value="doorswinginleft">
										<span>Door (Swings Inward to the Left)</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/d3.jpg" alt="Door (Swings Inward to the Left)">
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="door_type" 
<?php if($_SESSION['dr']['door_type']=="doorswinginright") echo "checked ";  ?> 
value="doorswinginright">
									<span>Door (Swings inward to the Right)</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/d4.jpg" alt="Door (Swings inward to the Right)">
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="door_type" 
<?php if($_SESSION['dr']['door_type']=="bifold") echo "checked ";  ?> 
value="bifold">
									<span>Bi Fold</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/d5.jpg" alt="Bi Fold">
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="door_type" 
<?php if($_SESSION['dr']['door_type']=="trifold") echo "checked ";  ?> 
value="trifold">
									<span>Tri Fold</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/d6.jpg" alt="Tri Fold">
							</div>

							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="door_type" 
<?php if($_SESSION['dr']['door_type']=="sliding") echo "checked ";  ?> 
value="sliding">
										<span>Sliding</span>
									</label>
								</div>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/d7.jpg" alt="Sliding">
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="door_type" 
<?php if($_SESSION['dr']['door_type']=="othertypeofdoor") echo "checked ";  ?> 
value="othertypeofdoor">
									<span>Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">


								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px; " 
name="door_type_note" id="door_type_note"><?php echo $_SESSION['dr']['door_type_note']; ?></textarea>
							<br />
						</div>
						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">
Select all obstructions we should be aware of when designing your custom closet.
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('noneObstructions',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="noneObstructions">
									<span class="square">None</span>	
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('electricaloutlet',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="lightswitch">
									<span class="square">Light Switch(es)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('electricaloutlet',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="electricaloutlet">
									<span class="square">Electrical Outlet(s)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('window',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="window">
									<span class="square">Window</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('crawlspace',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="crawlspace">
										<span class="square">Crawl Space</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('attic_access',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="attic_access">
									<span class="square">Attic Access</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('wallvent',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
									<span class="square">Wall Vent</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('floorvent',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="floorvent">
										<span class="square">Floor Vent</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('safe',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="safe">
										<span class="square">Safe</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('electricalpanel',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="electricalpanel">
										<span class="square">Electrical Panel</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('hvacsystem',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="hvacsystem">
										<span class="square">HVAC System</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="obstructions[]" 
<?php if(in_array('hvacsystem',$_SESSION['dr']['obstructions'])) echo "checked ";  ?> 
value="othertype">
									<span class="square">Other</span>
									</label>
								</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

							<div class="col-12 item">
								<div class="w-100">
obstructions_note
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px; " 
id="obstructions_note" 
name="obstructions_note"><?php echo $_SESSION['dr']['obstructions_note']; ?></textarea>
								</div>
							</div>


						</div>

						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
				<div class="btns-group">
<span  id="step_3"></span>
<a href="#step_4">Go To step 4</a>




<!--
							<a href="#" class="btn btn-prev">Previous step</a>
							<a href="#" class="btn btn-next">Next step</a>
-->
						</div>
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />

					</div>
<br />

					<div class="form-step step-four">
						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">
								Personalize Your Closet Organizer
								</div>
								<div class="input-group d-flex" style="margin-top: 42px; padding-left:10%; padding-right: 10%;">
									<span>Description (optional)</span>
									<div class="w-100">
personalize_closet
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
id="personalize_closet" 
name="personalize_closet"><?php echo $_SESSION['dr']['personalize_closet']; ?></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="box-content">
							<div class="input-group">
								<p class="desc">
<?php echo "closet_style_scale: ".$_SESSION['dr']['closet_style_scale']; ?>								

SELECT CLOSET STYLE: The $ sign scale reflects level of detail in design which correlates to an increase in budget. (If you need a pantry or convertible wine rack design, please skip this step).<br /> NOTE: Quality and craftsmanship remains superior throughout all tiers. Our $ scale should NOT be compared to other companies as our prices our very competitive; typically up to 50% less. </p>
								<br />
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/level1.jpg" alt="Level 1">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol one">$</span>
										<label class="home-consult-form__radio">
<input type="radio" 
name="closet_style_scale" 
<?php if($_SESSION['dr']['closet_style_scale']=="level_one") echo "checked ";  ?> 
value="level_one">
										<span><span>$ - Level 1:</span> floating look with shelves and drawers off floor</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/level2.png" alt="Level 2">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol two">$$</span>
										<label class="home-consult-form__radio">
<input type="radio" 
name="closet_style_scale" 
<?php if($_SESSION['dr']['closet_style_scale']=="level_two") echo "checked ";  ?> 
value="level_two">
										<span><span>$$ - Level 2:</span> semi built in look with drawers & shelves to the floor</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/level3.jpg" alt="Level 3">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol three">$$$</span>
										<label class="home-consult-form__radio">
<input type="radio" 
name="closet_style_scale" 
<?php if($_SESSION['dr']['closet_style_scale']=="level_three") echo "checked ";  ?> value="level_three">
										<span><span>$$$ - Level 3:</span> built in look with enclosed with full length side panels</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/level4.jpg" for="" alt="Level 4">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol four">$$$$</span>
										<label class="home-consult-form__radio">
<input type="radio" 
name="closet_style_scale" 
<?php if($_SESSION['dr']['closet_style_scale']=="level_four") echo "checked ";  ?> 
value="level_four">
										<span><span>$$$$ - Level 4:</span> complete built in look with door fronts, Crown-Molding, LED lights, ect.)</span>
										</label>
									</div>
								</div>
							</div>
						</div>

						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">
<?php echo "closet_shared ".$_SESSION['dr']['closet_shared']; ?>
								How is your closet space shared?
								</div>
								<br />
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="closet_shared" 
<?php if($_SESSION['dr']['closet_shared']=="notShared") echo "checked ";  ?> 
value="notShared">
									<span>Not Shared</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="closet_shared" 
<?php if($_SESSION['dr']['closet_shared']=="one_third_mine") echo "checked ";  ?> 
value="one_third_mine">
									<span>1/3 Mine</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="closet_shared" 
<?php if($_SESSION['dr']['closet_shared']=="two_third_mine") echo "checked ";  ?> 
value="two_third_mine">
									<span>2/3 Mine</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="closet_shared" 
<?php if($_SESSION['dr']['closet_shared']=="split") echo "checked ";  ?> 
value="split">
									<span>Split 50/50</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="closet_shared" 
value="closetsharedother">
									<span>Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
closet_shared_note
<?php echo $_SESSION['dr']['closet_shared_note']; ?>
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
							<br />
						</div>

						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">
<?php echo "hanging_space ".$_SESSION['dr']['hanging_space']; ?>
								How many feet across do you need for double hanging space? (shirts, jackets, pants, ect)
								</div>
								<p class="desc">Double hanging will maximize your storage needs & generally will work for majority of hanging needs.</p>
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/space-shared.jpg" alt="Shared space">
							</div>
							<br />
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="hanging_space" 
<?php if($_SESSION['dr']['hanging_space']=="hangingNone") echo "checked ";  ?> 
value="hangingNone">
									<span>None</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="hanging_space" 
<?php if($_SESSION['dr']['hanging_space']=="hangingMinimal") echo "checked ";  ?> 
value="hangingMinimal">
										<span>Minimal Double Hang (1-4 lifeet)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="hanging_space" 
<?php if($_SESSION['dr']['hanging_space']=="hangingDouble") echo "checked ";  ?> 
value="hangingDouble">
										<span>Some Double Hang (4-6 linear feet)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="hanging_space" 
<?php if($_SESSION['dr']['hanging_space']=="hangingLot") echo "checked ";  ?> 
value="hangingLot">
										<span>A lot of Double Hang (6 or more linear feet)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="hanging_space" 
<?php if($_SESSION['dr']['hanging_space']=="hangingOther") echo "checked ";  ?> 
value="hangingOther">
										<span>Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
hanging_space_note
<input type="text" 
name="hanging_space_note" 
value="<?php echo $_SESSION['dr']['hanging_space_note']; ?>" />
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
							<br />
						</div>

						<div class="box-content">
							<div class="input-group">
<?php echo "long_hang ".$_SESSION['dr']['long_hang']; ?>

								<div class="title wrapper text-center">How many feet across do you need in long hanging? (medium - long dresses, gowns, jackets, ect)</div>
								<p class="desc">Long hanging is for longer articles of clothing such as: full length dresses, jump suites, full length jackets or coats, etc.</p>
								<br />
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/jake-make-rendering.jpg" alt="MAKE RENDERING">
							</div>
							<br />
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="long_hang" 
<?php if($_SESSION['dr']['long_hang']=="longNone") echo "checked ";  ?> 
value="longNone">
										<span>None</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="long_hang" 
<?php if($_SESSION['dr']['long_hang']=="longMin") echo "checked ";  ?> 
value="longMin">
										<span>Minimal Long Hang (1-2 linear feet)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
	
<input type="radio" 
name="long_hang" 
<?php if($_SESSION['dr']['long_hang']=="longSome"){ echo "checked "; } ?> 
value="longSome">
										<span>Some Long Hang (2-4 linear feet)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
	
<input type="radio" 
name="long_hang" 
<?php if($_SESSION['dr']['long_hang']=="longAlot") echo "checked ";  ?> 
value="longAlot">
										<span>A lot f Long Hang (4 or more linear feet))</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
	
<input type="radio" 
name="long_hang" 
<?php if($_SESSION['dr']['long_hang']=="OtherHanging") echo "checked ";  ?> 
value="OtherHanging">
										<span>Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
long_hang_note
<br />
<input type="text" 
name="long_hang_note" 
value="<?php echo $_SESSION['dr']['long_hang_note']; ?>" />
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
							<br />
						</div>

						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">
<?php echo "drawers_num ".$_SESSION['dr']['drawers_num']; ?>"
How many drawers do you prefer?
</div>
								<br />
							</div>
							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/drawers-new.jpg" alt="drawers">
							</div>
							<br />
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num']=="drawersMin") echo "checked ";  ?> 
value="drawersMin">
									<span>Minimal Drawers (1-4 Total)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num']=="drawersSome") echo "checked ";  ?> 
value="drawersSome">
									<span>Some Drawers (4-8 Total)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num']=="drawersAlot") echo "checked ";  ?> 
value="drawersAlot">
									<span>A lot of Drawers (8 or More)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num']=="drawersNone") echo "checked ";  ?> 
value="drawersNone">
									<span>None</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num']=="drawersOther") echo "checked ";  ?> 
value="drawersOther">
									<span>Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
<input type="text" 
name="drawers_num_note" 
value="<?php echo $_SESSION['dr']['drawers_num_note']; ?>" />
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
							<br />
						</div>

						<div class="box-content">
							<div class="input-group">

<?php echo "door_style ".$_SESSION['dr']['door_style']; ?>

								<div class="title wrapper text-center">What style of door and / or drawer fronts do you prefer?</div>
								<br />
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
class="checkbox_check" 
name="door_style" 
<?php if($_SESSION['dr']['door_style']=="flat_fronts") echo "checked ";  ?> 
value="flat_fronts">
										<span class="d-inline square">Flat Fronts (standard)</span><br />
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/flat1.jpg" alt="Flat Fronts">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
class="checkbox_check" 
name="door_style" 
<?php if($_SESSION['dr']['door_style']=="flat_fronts_upgade") echo "checked ";  ?> 
value="flat_fronts_upgade">
											<span class="d-inline square">Shaker Fronts (upgrade)</span><br />
											<div class="img-center">
												<img src="<?php echo SITEROOT; ?>manage/cms/images/flat2.jpg" alt="Shaker Fronts (upgrade)">
											</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
class="checkbox_check" 
name="door_style" 
<?php if($_SESSION['dr']['door_style']=="flat_fronts") echo "checked ";  ?> 
value="flat_fronts">
											<span class="d-inline square">Glass Fronts</span><br />
											<div class="img-center">
												<img src="<?php echo SITEROOT; ?>manage/cms/images/flat3.jpg" alt="Glass Fronts">
											</div>
										</label>
									</div>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
class="checkbox_check" 
name="door_style" 
<?php if($_SESSION['dr']['door_style']=="flat_fronts") echo "checked ";  ?> 
value="flat_fronts">
									<span class="square">None</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
class="checkbox_check" 
name="door_style" 
<?php if($_SESSION['dr']['door_style']=="Other") echo "checked ";  ?> 
value="Other">
									<span class="square">Other</span>
									</label>
								</div>
							</div>

							<div class="input-group d-flex">

								<span style="padding-left: 20px;">Note: Additional information can be noted in "Other"</span>
								<div class="w-100" style="padding-left: 20px; padding-right: 20px;">
door_style_note
<textarea name="door_style_note" 
style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" ><?php echo $_SESSION['dr']['door_style_note']; ?></textarea>
								</div>
							</div>
							<br />
						</div>

						<div class="box-content">
							<div class="input-group">

<?php echo "shelves_num ".$_SESSION['dr']['shelves_num']; ?>
								<div class="title wrapper text-center">Approximately how many shelves will you utilize? </div>
								<p class="desc">Consider items other than folded clothing. Ex: purses, hats, seasonal clothing, baskets, shoe boxes, etc. Note: If your closet design does not extend to ceiling, you will have space on top of closet to store items as well.</p>
							</div>
							<div class="img-center">
							<img src="<?php echo SITEROOT; ?>manage/cms/images/shelves.jpg" alt="How many shelves do you prefer">
							</div>
							<br />
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="shelvesFew") echo "checked ";  ?> 
value="shelvesFew">
									<span>1 - 5</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="shelvesMore") echo "checked ";  ?> 
value="shelvesMore">
									<span>5 - 10</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="shelvesAlot") echo "checked ";  ?> 
value="shelvesAlot">
									<span>10 - 15</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="shelvesSeveral") echo "checked ";  ?> 
value="shelvesSeveral">
									<span>16 +</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="other") echo "checked ";  ?> 
value="shelvesSeveral">
									<span>Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
shelves_num_note
<input type="text" 
name="shelves_num" 
value="<?php echo $_SESSION['dr']['shelves_num_note'];  ?>" />
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
							<br />
						</div>

						<div class="box-content">
							<div class="input-group">
<?php echo "shoe_storage ".$_SESSION['dr']['shoe_storage'];  ?>					
								<div class="title wrapper text-center">
								What types of shoes will you be storing?
								</div>
								<br />
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("flats_sandals", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="flats_sandals">
									<span class="square">Flats and sandals</span>
									</label>
								</div>
							</div>

							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("highheels", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="highheels">
									<span class="square">High heels</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("tennisshoes", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="tennisshoes">
										<span class="square">Tennis shoes</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("ankleboots", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="ankleboots">
									<span class="square">Ankle Boots</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("highboots", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="highboots">
									<span class="square">Knee length or higher boots</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("menshoes", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="menshoes">
									<span class="square">Mens shoes</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("menankle", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="menankle">
									<span class="square">Mens Ankle Boots</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("mentall", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="mentall">
									<span class="square">Mens Tall Boots</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage" 
<?php if(in_array("shoetypeother", $_SESSION['dr']['shoe_storage'])) echo "checked ";  ?> 
value="shoetypeother">
									<span class="square">Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex">
								<span style="padding-left: 20px;">
								Note: Additional information can be noted in "Other"</span>
								<div class="w-100" style="padding-left: 20px; padding-right: 20px;">
shoe_storage_note
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
name="shoe_storage_note"><?php echo $_SESSION['dr']['shoe_storage_note']; ?></textarea>
								</div>
							</div>
							<br />
						</div>

						<div class="box-content">
							<div class="input-group">

<?php echo "shoe_storage_style ".$_SESSION['dr']['shoe_storage_style']; ?>
								<div class="title wrapper text-center">

								What shoe storage styles suite your shoe collection?
								</div>
								<br />
							</div>

<br />


							<div class="img-center">
								<img src="<?php echo SITEROOT; ?>manage/cms/images/shoe-storage.jpg" alt="What shoe storage styles suite your shoe collection?">
							</div>
							<br />
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox"
name="shoe_storage_style" 
<?php if(in_array("tilt", $_SESSION['dr']['shoe_storage_style'])) echo "checked ";  ?> 
value="tilt">
									<span class="square">Tilt Shoe Rack (Upgrade)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage_style" 
<?php if(in_array("pulloutdrawer", $_SESSION['dr']['shoe_storage_style'])) echo "checked ";  ?> 
value="pulloutdrawer">
									<span class="square">Pull Out Shoe Drawer (Upgrade)</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage_style" 
<?php if(in_array("storage_style_Any", $_SESSION['dr']['shoe_storage_style'])) echo "checked ";  ?> 
value="storage_style_Any">
									<span class="square">Any</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="shoe_storage_style" 
<?php if(in_array("storage_style_other", $_SESSION['dr']['shoe_storage_style'])) echo "checked ";  ?> 
value="storage_style_other">

									<span class="square">Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex">
								<span style="padding-left: 20px;">Note: Additional information can be noted in "Other"</span>
								<div class="w-100" style="padding-left: 20px; padding-right: 20px;">
shoe_storage_style_note
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
name="shoe_storage_style_note"><?php echo $_SESSION['dr']['shoe_storage_style_note']; ?></textarea>
								</div>
							</div>
							<br />
						</div>

						<div class="box-content accessories-step-four">
							<div class="input-group">
<?php echo "accessories ".$_SESSION['dr']['accessories']; ?>
								<div class="title wrapper text-center">Please check all the accessories you would like to add. </div>
								<p class="desc">Note: By selecting "Other" you can add your own details</p>
								<br />
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("pullout_hamper", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="pullout_hamper">
										<span class="square d-inline">Pull Out Hamper</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/hamper.jpg" alt="Hamper">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("pullout_baskets", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="pullout_baskets">
										<span class="square d-inline">Pull Out Baskets</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/baskets.jpg" alt="Baskets">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("beltrack", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="beltrack">
										<span class="square d-inline">Belt Racks</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/belt-racks.jpg" alt="Belt Racks">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("tierack", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="tierack">
										<span class="square d-inline">Tie Rack</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/tie-rack.jpg" alt="Tie Rack">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("scarfrack", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="scarfrack">
										<span class="square d-inline">Scarf Rack</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/scarf-rack.jpg" alt="Scarf Rack">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("valetrod", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="valetrod">
										<span class="square d-inline">Valet Rod</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/valet-rod.jpg" alt="Valet Rod">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("mirror", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="mirror">
										<span class="square d-inline">Mirror</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/mirror.jpg" alt="Mirror">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("jewlrytray", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="jewlrytray">
										<span class="square d-inline">Jewelry Tray</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/jewelry-tray.jpg" alt="Jewelry Tray">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("ironingboard", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="ironingboard">
										<span class="square d-inline">Ironing Board</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/ironing-board.png" alt="Ironing Board">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("hooks", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="hooks">
										<span class="square d-inline">Hooks or Hook Strip</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/hook-strip.jpg" alt="Hooks or Hook Strip">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("pulldownrod", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="pulldownrod">
										<span class="square d-inline">Pull Down Hanging Rod</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/hanging-rod.jpg" alt="Pull Down Hanging Rod">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("pulloutpant", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="pulloutpant">
										<span class="square d-inline">Pull out pants rack</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/pants-rack.jpg" alt="Pull out pants rack">
										</div>
										</label>
									</div>
								</div>
							</div>

							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("pullout_hamper", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="LEDlights">
											<span class="square d-inline">LED Strip Lights</span>
											<div class="img-center">
												<img src="<?php echo SITEROOT; ?>manage/cms/images/led-lights.jpg" alt="LED Strip Lights">
											</div>
										</label>
									</div>
								</div>
							</div>

							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("pucklighting", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="pucklighting">
											<span class="square d-inline">Puck Lighting</span>
											<div class="img-center">
												<img src="<?php echo SITEROOT; ?>manage/cms/images/puck-lighting.jpg" alt="Puck Lighting">
											</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("crownmolding", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="crownmolding">
										<span class="square d-inline">Crown-Molding</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/crown-molding.jpg" alt="Crown-Molding">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("dovetaildrawers", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="dovetaildrawers">
										<span class="square d-inline">Dove Tail Drawers</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/dove-tail-drawers.jpg" alt="Dove Tail Drawers">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("shoefences", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="shoefences">
										<span class="square d-inline">Shoe Fences</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/shoe-fences.jpg" alt="Shoe Fences">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("softcloseslides", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="softcloseslides">
										<span class="square d-inline">Soft Close Slides</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/soft-close-slides.jpg" alt="Soft Close Slides">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("undermountslides", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="undermountslides">
										<span class="square d-inline">Undermount Soft Close Slides</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/undermount-soft-close-slides.jpg" alt="Undermount Soft Close Slides">
										</div>
										</label>
									</div>
								</div>
							</div>
							<br class="d-none" />
							<br />
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
name="accessories" 
<?php if(in_array("OtherOptions", $_SESSION['dr']['accessories'])) echo "checked ";  ?> 
value="OtherOptions">
									<span class="square d-inline">Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex">
								<span style="padding-left: 20px;">Note: Additional information can be noted in "Other"</span>
								<div class="w-100" style="padding-left: 20px; padding-right: 20px;">
accessories_note
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
name="accessories_note"><?php echo $_SESSION['dr']['accessories_note']; ?></textarea>
								</div>
							</div>
						</div>
						<br />
<input style="float:left; width:180px; heignt:20px;" type="submit" name="submit" value="Save and return later">


						<div class="btns-group">
<!--
							<a href="#" class="btn btn-prev">Previous step</a>
							<a href="#" class="btn btn-next">Next step</a>
-->
						</div>

						<br />
						<br />
					</div>
<div class="form-step step-five ">
<div class="box-content">
<div class="input-group">
<div class="title wrapper text-center">Personalize Your Pantry</div>
<div class="input-group d-flex" style="margin-top: 42px; padding-left:10%; padding-right: 10%;">
<span>Description (optional)</span>

<div class="w-100">
personalize_pantry
<textarea type="text"  
style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
name="personalize_pantry"><?php echo $_SESSION['dr']['personalize_pantry']; ?></textarea>

</div>
</div>
</div>
</div>
						


<div class="box-content">
	<div class="input-group">
		<div class="title wrapper text-center">Select the Pantry style that best suits your needs. Unlike other closet types, ALL pantries set on the floor and have a built in look. </div>
			<p class="desc">Note: The $ scale is reflective of the level of design detail and options and also correlates to an increase in budget. The material and craftsmanship remain superior throughout each level. It should NOT be compared to other companies use of the $ scale as our prices are very competitive and often up to 50% more affordable. </p>
			<br />
<?php echo "p_pantry ".$_SESSION['dr']['p_pantry']; ?>

		</div>
		<div class="mini-box">
			<div class="img-center">
				<img src="<?php echo SITEROOT; ?>manage/cms/images/level1-2.jpg" alt="Level 1">
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<span class="level-simbol one">$</span>
						<label class="home-consult-form__radio">
<input <?php if($_SESSION['dr']['p_pantry']=="level_one")echo "checked "; ?> 
type="radio" 
name="p_pantry" 
value="level_one">
											<span><span>$ - Level 1:</span> Maximizes space utilizing any type of shelves.</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/level2-2.jpg" alt="Level 2">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol two">$$</span>
										<label class="home-consult-form__radio">
<input 
<?php if($_SESSION['dr']['p_pantry']=="level_two")echo "checked "; ?>  
type="radio" 
name="p_pantry" 
value="level_two">
										<span><span>$$ - Level 2:</span> Utilizes a variety of shelving and drawers.</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/level3-3.jpg" alt="Level 3">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol three">$$$</span>
										<label class="home-consult-form__radio">
<input <?php if($_SESSION['dr']['p_pantry']=="level_three")echo "checked "; ?>  
type="radio" 
name="p_pantry" 
value="level_three">
										<span><span>$$$ - Level 3:</span> Utilizes a variety of shelving and drawers, door fronts, wine cubbies, door fronts, Crown-Molding...</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/level4-4.jpg" for="" alt="Level 4">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol four">$$$$</span>
										<label class="home-consult-form__radio">
<input <?php if($_SESSION['dr']['p_pantry']=="level_four")echo "checked "; ?>  
type="radio" 
name="p_pantry" 
value="level_four">
										<span><span>$$$$ - Level 4:</span> Incorporate all features from Levels 1-3 plus an LED-Lighting Package, Crown-Molding , counter/display</span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="box-content three accessories-step-five">
							<div class="input-group">
								<div class="title wrapper text-center">Select the type of accessories you would like in your pantry:</div>
								<br />
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_LED")echo "checked ";?> 
name="p_access" 
value="p_LED">
										<span class="square d-inline">LED-Lighting</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/LED-Lighting.jpg" alt="LED-Lighting">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_doorfront")echo "checked ";?> 
name="p_access" 
value="p_doorfront">
										<span class="square d-inline">Door Front(s)</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/door-front.jpg" alt="Door Front(s)" style="width: 136px;">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_drawers")echo "checked ";?> 
name="p_access" 
value="p_drawers">
										<span class="square d-inline">Drawer(s) (Items not visible when closed)</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Drawer-s-new.jpg" alt="Drawer(s) (Items not visible when closed)">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_pulloutshelf")echo "checked ";?> 
name="p_access" 
value="p_pulloutshelf">
										<span class="square d-inline">Pull Out Shelf or Shelves (items visible when closed)</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Pull-Out-Shelf.jpg" alt="Pull Out Shelf or Shelves (items visible when closed)">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
										
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_pulloutasket")echo "checked ";?> 
name="p_access" 
value="p_pulloutasket">
										<span class="square d-inline">Pull Out Basket(s)</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Pull-Out-Basket(s).jpg" alt="Pull Out Basket(s)">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_drawerdividers")echo "checked ";?> 
name="p_access" 
value="p_drawerdividers">
										<span class="square d-inline">Drawer Dividers</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Drawer-Dividers.jpg" alt="Drawer Dividers">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_pulloutrack")echo "checked ";?> 
name="p_access" 
value="p_pulloutrack">
										<span class="square d-inline">Pull Out Spice Rack(s)</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Pull-Out-Spice-Rack(s).jpg" alt="Pull Out Spice Rack(s)">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_slidingrack")echo "checked ";?> 
name="p_access" 
value="p_slidingrack">
										<span class="square d-inline">Sliding Spice Rack</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Sliding-Spice-Rack.jpg" alt="Sliding Spice Rack">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_verticaldividers")echo "checked ";?> 
name="p_access" 
value="p_verticaldividers">
										<span class="square d-inline">Vertical Divider(s) for baking sheets, trays, ect.</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Vertical-Divider(s).jpg" alt="Vertical Divider(s) for baking sheets, trays, ect.">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_tiltshelf")echo "checked ";?> 
name="p_access" 
value="p_tiltshelf">
										<span class="square d-inline">Tilted Can Shelf or Shelves</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/tilted.jpg" alt="Tilted Can Shelf or Shelves">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_winecubbies")echo "checked ";?> 
name="p_access" 
value="p_winecubbies">
										<span class="square d-inline">Wine Cubbies</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Wine-Cubbies.jpg" alt="Wine Cubbies">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_stemwarerack")echo "checked ";?> 
name="p_access" 
value="p_stemwarerack">
										<span class="square d-inline">Stemware Rack</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Stemware-Rack.jpg" alt="Stemware Rack">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_lazysu")echo "checked ";?> 
name="p_access" 
value="p_lazysu">
										<span class="square d-inline">Revolving Lazy Suzen</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Revolving-Lazy-Suzen.jpg" alt="Revolving Lazy Suzen">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_wastebasket")echo "checked ";?> 
name="p_access" 
value="p_wastebasket">
										<span class="square d-inline">Pull Out Waste & Recycle Baskets</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Pull-Out-Waste-Recycle-Baskets.jpg" alt="Pull Out Waste & Recycle Baskets">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_broom")echo "checked ";?> 
name="p_access" 
value="p_broom">
										<span class="square d-inline">Tall, Enclosed Storage for brooms, mops, ect</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/tall.jpg" alt="Tall, Enclosed Storage for brooms, mops, ect" style="width: 136px;">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_none")echo "checked ";?> 
name="p_access" 
value="p_none">
									<span class="square">None</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['p_access']=="p_other")echo "checked ";?> 
name="p_access" 
value="p_other">
									<span class="square">Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
p_access_note
<input type="text" 
value="<?php echo $_SESSION['dr']['p_access_note']; ?>"
name="p_access_note"/>
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
						</div>

<hr />
<hr />
<hr />
<hr />
<hr />
<hr />

						<div class="box-content">
							<div class="input-group">
???????
								<div class="title wrapper text-center">
How many bottles of wine do you plan to store in your panty?
								</div>
								<br />
							</div>
							<br />
							<br />
							<div class="input-group d-flex special-position">
								<div class="w80">
<input type="text" 
name="bottles" 
id="bottles" 
value="<?php echo $_SESSION['dr']['note']; ?>" />
								</div>
							</div>
						</div>
						<br />
<input style="float:left; width:180px; heignt:20px;" type="submit" name="submit" value="Save and return later">
<span  id="step_5"></span>

						<div class="btns-group">
<!--
							<a href="#" class="btn btn-prev">Previous step</a>
							<a href="#" class="btn btn-next">Next step</a>
-->
						</div>

						<br />
						<br />
					</div>
					<div class="form-step step-six">
						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">Personalize your Wine Rack or Cellar</div>
								<div class="input-group d-flex" style="margin-top: 42px; padding-left:10%; padding-right: 10%;">
									<span>Description (optional)</span>
									<div class="w-100">
personalize_wine
<br />
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
type="text" name="personalize_wine" 
id="personalize_wine"><?php echo $_SESSION['dr']['personalize_wine']; ?></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">What style of wine rack(s) do you prefer?</div>
								<p class="desc">The $ scale is reflective of level of design detail and options and correlates with an increase in budget. Note: material and craftsmanship remains superior throughout all levels. ***Our $ scale should NOT be compared to other companies use of $ scale as our prices are very competitive; often times up to 50% more affordable.</p>
								<br />
<?php echo "wine_style ".$_SESSION['dr']['wine_style']; ?>

							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/v1.jpg" alt="Level 1">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol one">$</span>
										<label class="home-consult-form__radio">

<input type="radio"
<?php if($_SESSION['dr']['wine_style']=="levelOne")echo "checked ";?> 
name="wine_style" value="levelOne">
										<span><span>$ - Level 1:</span> Wine towers utilizing convertible cubbies and tilted shelves and can fit into most spaces</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/v2.jpg" alt="Level 2">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol two">$$</span>
										<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['wine_style']=="levelTwo")echo "checked ";?> 
name="wine_style" value="levelTwo">
										<span><span>$$ - Level 2:</span> Level 1 options plus: center display</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/v3.jpg" alt="Level 3">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol three">$$$</span>
										<label class="home-consult-form__radio">
<input type="radio"
<?php if($_SESSION['dr']['wine_style']=="levelThree")echo "checked ";?> 
name="wine_style" value="levelThree">
										<span><span>$$$ - Level 3:</span> Level 1 - 2 options plus: corner shelves, drawers, drop down table.</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mini-box">
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>manage/cms/images/v4.jpg" for="" alt="Level 4">
								</div>
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<span class="level-simbol four">$$$$</span>
										<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['wine_style']=="levelFour")echo "checked ";?> 
name="wine_style" value="levelFour">
										<span><span>$$$$ - Level 4:</span> Level 1 -3 options plus: LED-Lighting, hemidor, solid oak detailed arch.</span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">What size wine bottle variations will you be storing?</div>
								<br />
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['bottle_size']=="pinot")echo "checked ";?> 
name="bottle_size" value="pinot">
									<span class="square">Pinot</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['bottle_size']=="Cabernet")echo "checked ";?> 
name="bottle_size" value="Cabernet">
									<span class="square">Cabernet / Merlot</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['bottle_size']=="champagne")echo "checked ";?> 
name="bottle_size" value="champagne">
									<span class="square">Champagne</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['bottle_size']=="champagne")echo "checked ";?> 
name="bottle_size" value="desert">
									<span class="square">Desert</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['bottle_size']=="magnum")echo "checked ";?> 
name="bottle_size" value="magnum">
									<span class="square">Magnum</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['bottle_size']=="mixed")echo "checked ";?> 
name="bottle_size" value="mixed">
									<span class="square">Mixed</span>
									</label>
								</div>
							</div>
						</div>

						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">How much wine storage do you need?</div>
								<br />
<?php echo "bottle_num ".$_SESSION['dr']['bottle_num']; ?>

							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['bottle_num']=="upto100")echo "checked ";?> 
name="bottle_num" value="upto100">
									<span>Up too 100 bottles</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['bottle_num']=="100to300")echo "checked ";?> 
name="bottle_num" value="100to300">
									<span>100-300 botles</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['bottle_num']=="100to300")echo "checked ";?> 
name="bottle_num" value="300to500">
									<span>300-500 bottles</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['bottle_num']=="100to300")echo "checked ";?> 
name="bottle_num" value="500plus">
									<span>500 plus</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['bottle_num']=="bottle_num_other")echo "checked ";?> 
name="bottle_num" value="bottle_num_other">
									<span>Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
bottle_num_note
<input type="text" 
name="bottle_num_note" 
value="<?php echo $_SESSION['dr']['bottle_num_note'] ?>"
id="bottle_num_note" />
 
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
						</div>

						<div class="box-content accessories-step-six">
							<div class="input-group">

								<div class="title wrapper text-center">
								Select features for your wine rack / cellar
								</div>
								<br />
<?php echo "wine_feat ".$_SESSION['dr']['wine_feat']; ?>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox"
<?php if($_SESSION['dr']['wine_feat']=="winesteamware")echo "checked ";?> 
name="wine_feat" 
value="winesteamware">
										<span class="square d-inline">Stemware Rack</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/acc.jpg" alt="Stemware Rack">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="winecrown")echo "checked ";?>
 name="wine_feat" value="winecrown">
										<span class="square d-inline">Crown-Molding</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Crown--Molding.jpg" alt="Crown-Molding" style="width: 310px;">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="wineled")echo "checked ";?>
name="wine_feat" value="wineled">
										<span class="square d-inline">LED Lightings</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/LED-Lighting-new.jpg" alt="LED Lightings">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="wineoak")echo "checked ";?>
name="wine_feat" value="wineoak">
										<span class="square d-inline">Solid Oak Center Arch</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/arch.jpg" alt="Solid Oak Center Arch" style="width: 310px;">
										</div>
										</label>
									</div>
								</div>
							</div>


							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="winetable")echo "checked ";?>
name="wine_feat" value="winetable">
										<span class="square d-inline">Drop Down Table</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Drop-Down-Table.jpg" alt="Drop Down Table">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="winepullout")echo "checked ";?>
name="wine_feat" value="winepullout">
										<span class="square d-inline">Pull out shelves</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Pull-out-shelves.jpg" alt="Pull out shelves">
										</div>
										</label>
									</div>
								</div>
							</div>

							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="winedrawers")echo "checked ";?>
name="wine_feat" value="winedrawers">
										<span class="square d-inline">Drawers</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Drawers-new3.jpg" alt="Drawers">
										</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="winepullout")echo "checked ";?>
name="wine_feat" value="winehemidor">
											<span class="square d-inline">Hemidor</span>
											<div class="img-center">
												<img src="<?php echo SITEROOT; ?>manage/cms/images/Hemidor.jpg" alt="Hemidor">
											</div>
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-block">
								<div class="col-12 item">
									<div class="form-group mobile-order-search-form-group">
										<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="wineglassdoor")echo "checked ";?>
name="wine_feat" value="wineglassdoor">
										<span class="square d-inline">Glass-Door-Fronts</span>
										<div class="img-center">
											<img src="<?php echo SITEROOT; ?>manage/cms/images/Glass-Door-Fronts.jpg" alt="Glass-Door-Fronts">
										</div>
										</label>
									</div>
								</div>
							</div>

							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="winenone")echo "checked ";?>
name="wine_feat" value="winenone">
									<span class="square">None</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="checkbox" 
<?php if($_SESSION['dr']['wine_feat']=="wineother")echo "checked ";?>
name="wine_feat" value="wineother">
										<span class="square">Other</span>
									</label>
								</div>
							</div>
							<div class="input-group d-flex special-position">
								<div class="w80">
wine_feat_note
<input type="text" 
name="wine_feat_note" 
id="wine_feat_note"
value="<?php echo $_SESSION['dr']['wine_feat_note']; ?>"/>
								</div>
							</div>
							<span class="note">Note: Additional information can be noted in "Other"</span>
						</div>
						<br />
<input style="float:left; width:180px; heignt:20px;" type="submit" name="submit" value="Save and return later">
<span  id="step_4"></span>
<a href="#step_5">Go To step 5</a>

						<div class="btns-group">
<!--
							<a href="#" class="btn btn-prev">Previous step</a>
							<a href="#" class="btn btn-next">Next step</a>
-->
						</div>
						<br />
						<br />

					</div>
					<div class="form-step step-six">
						<div class="box-content">
							<div class="input-group">
								<div class="title wrapper text-center">Final Questions</div>
								<div class="input-group d-flex" style="margin-top: 42px;margin-left: 70px;">
									<span>Description (optional)</span>
									<div class="w-100">
<?php echo "note ".$_SESSION['dr']['note']; ?>
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
type="text" name="note" id="note"><?php echo $_SESSION['dr']['note']; ?></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="box-content">
							<div class="input-group">

<?php echo "color ".$_SESSION['dr']['color']; ?>

								<div class="title wrapper text-center">What general color material to you prefer?</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">


<input type="radio" 
<?php if($_SESSION['dr']['color']=="White")echo "checked ";?>
name="color" 
value="White">
									<span>White</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['color']=="Grey")echo "checked ";?>
name="color" 
value="Grey">
									<span>Grey</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['color']=="Beige")echo "checked ";?>
name="color" 
value="Beige">
									<span>Beige</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['color']=="White")echo "checked ";?>
name="color" 
value="Brown">
									<span>Brown</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['color']=="White")echo "checked ";?>
name="color" 
value="Cherry">
									<span>Cherry</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['color']=="Black")echo "checked ";?>
name="color" 
value="Black">
									<span>Black</span>
									</label>
								</div>
							</div>
							<div class="col-12 item">
								<div class="form-group mobile-order-search-form-group">
									<label class="home-consult-form__radio">
<input type="radio" 
<?php if($_SESSION['dr']['color']=="Other")echo "checked ";?>
name="color" value="оther">
									<span>Other</span>
									</label>
								</div>
	</div>
	<div class="input-group d-flex special-position">
		<div class="w80">
<input type="text" 
value="<?php echo $_SESSION['dr']['color_note'];?>"
name="color_note" 
id="color_note" />
		</div>
	</div>
	<span class="note">Note: Additional information can be noted in "Other"</span>
</div>


<div class="box-content">
	<div class="input-group">
		<div class="title wrapper text-center">Photo Upload</div>
			<p class="desc">
			A current photo of the spaces we will be designing is very useful. You may upload it here and also add an
			additional comments in regards to your design request.
			</p>
		</div>
	</div>
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
				Thank your for submitting your information. A designer will in contact you within 24 -48
				hours with any further questions regarding
				your design. Feel free to leave comment below.
			</div>
			<div class="input-group d-flex" style="margin-top: 42px; padding-left:10%; padding-right: 10%;">
				<span>Description (optional)</span>
				<div class="w-100">
<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
name="comment" 
id="comment"><?php echo $_SESSION['dr']['comments'] ?></textarea>
				</div>
			</div>
		</div>
	</div>


	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Would you like to submit dimensions for another closet?</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio goToStepTwo">
<input type="radio" name="do_dimensions_for_another" value="1">
				<span>YES</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group show-msg">
			<label class="home-consult-form__radio">
<input type="radio" name="do_dimensions_for_another" value="0">
			<span id="dimensions_for_another">NO</span>
			</label>
		</div>
	</div>


<span  id="step_5"></span>
<a href="#step_6">Go To step 6</a>


	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">UPLOAD FILES</div>
		</div>
		<div class="col-12">
			<div class="btn" onClick="open_upload_iframe();">Upload Test Iframe</div>
<iframe id="upload_iframe" src="<?php echo SITEROOT; ?>upload-your-files" title="Upload"></iframe>
		</div>
	</div>
</div>

<p class="success-msg">
Your design is ready now. Once you click "Finish", the form will be 
submitted and a designer will be in contact shortly.
</p>
<br />
<div class="btns-group">
	<a href="#" class="btn btn-prev">Previous step</a>
	<a href="we-design-confirm.html" class="btn" >Finish</a>
</div>
<br />
<br />

</div>
</form>
</main>
<span  id="step_6"></span>


<?php
require_once($real_root . '/pages/views/virtual-assistant.php');
require_once($real_root . '/pages/views/mobile-show-footer-buttons.php');
require_once($real_root . '/pages/views/footer.php');
require_once($real_root . '/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root . '/pages/views/modal-free-shipping.php');
require_once($real_root . '/pages/views/modal-save-to-idea-folder.php');
require_once($real_root . '/pages/views/modal-save-to-specs-sheet.php');
?>

<script src="<?php echo SITEROOT; ?>app.js"></script>


<!--
			<table cellspacing="10" border="0">
			<tr>
			<td width="6px;">
			1
			</td>
			<td>
			<img onClick="set_wall_meas_content('Open_Wall');" class="design_form_closet_type_img" 
			src="<?php echo SITEROOT; ?>images/designform/Open_Wall.png" alt="Open_Wall" />
			</td>
			</tr>

			<tr>
			<td>
			2
			</td>
			<td>
			<img onClick="set_wall_meas_content('Open_Wall_2');" class="design_form_closet_type_img" 
			src="<?php echo SITEROOT; ?>images/designform/Open_Wall.png" alt="Open_Wall_2" />
			</td>
			</tr>

			<tr>
			<td>
			1
			</td>
			<td>
			<img onClick="set_wall_meas_content('Nook');" class="design_form_closet_type_img" 
			src="<?php echo SITEROOT; ?>images/designform/Nook.png" alt="Nook" />
			</td>
			</tr>

			<tr>
			<td>
			2
			</td>
			<td>
			<img onClick="set_wall_meas_content('Nook_2');" class="design_form_closet_type_img" 
			src="<?php echo SITEROOT; ?>images/designform/Nook_2.png" alt="Nook_2" />
			</td>
			</tr>
			</table>
-->





</body>
</html>