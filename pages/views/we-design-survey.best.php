<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<title>ClosetsToGo</title>
<meta name="description" content="We design survey">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">

<style>
.m_box {
	border-style: solid !important;
	border-width: thin !important;
	border-color: blue !important;
	width: 60px !important;
	
}
</style>

</head>
<body class="clearfix we-design-survey-page">
<div class="sr-only"><a href="#maincontent">Skip to main content</a></div>
<?php
require_once($real_root.'/pages/views/header.php');
?>
<main id="maincontent" class="main ">
<div>
<div class="block-with-background__wrapper we-design-survey" >
<div class="block-with-background__content">
<div class="row-survey-heading">
<h2 class="block-with-background__content--heading">Custom Closet needs</h2>
<p class="second-block__first--description second-block-survey wrapper">
Thank you for choosing Closets To Go. In order to create a space that meets your specific needs and style, please fill out and submit this form entirely and in a timely manner. Your Closets To Go Team is standing by and eager to start the design process.
</p>
</div>
</div>
<div class="progressbar row row-survey-top block-with-background wrapper">
<div class="progress" id="progress"></div>					  
<div class="tooltip-msg-step one" data-toggle="tooltip" data-placement="top" title="Contact Information"></div><div class="progress-step progress-step-active" data-title="Step 1"></div>
<div class="tooltip-msg-step two" data-toggle="tooltip" data-placement="top" title="Project Timeline"></div><div class="progress-step" data-title="Step 2" ></div>
<div class="tooltip-msg-step three" data-toggle="tooltip" data-placement="top" title="Closet Details and Dimensions"></div><div class="progress-step" data-title="Step 3" ></div>
<div class="tooltip-msg-step four" data-toggle="tooltip" data-placement="top" title="Personalize Your Closet Organizer"></div><div class="progress-step" data-title="Step 4"></div>
<div class="tooltip-msg-step five" data-toggle="tooltip" data-placement="top" title="Personalize Your Pantry"></div><div class="progress-step" data-title="Step 5" ></div>
<div class="tooltip-msg-step six" data-toggle="tooltip" data-placement="top" title="Personalize your Wine Rack or Cellar"></div><div class="progress-step" data-title="Step 6" ></div>
<div class="tooltip-msg-step seven" data-toggle="tooltip" data-placement="top" title="Final Questions"></div><div class="progress-step" data-title="Step 7" ></div>
</div>
<a href="#" class="btn" onClick="save_form();">Save for Later</a>
</div>
<br>
<br>

<form name="form" action="<?php echo SITEROOT."we-design-confirm.html" ?>" method="post" 
class="form block-with-background container-fluid wrapper">
<input type="hidden" name="deid" value="<?php echo $deid; ?>">

<div class="steps">
<div class="form-step form-step-active">					  
	<div class="box-content">
		<div class="title wrapper text-center">Contact Information</div>
		<p class="desc">Thank you for choosing Closets To Go.<br>
		In order to professionally design a space that meets your specific needs and style, please fill out and submit this questionnaire.  <br>
		Your Closets To Go Team is standing by and eager to start creating the perfect space for your home! 
		</p>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="first_name">First Name *</label>
			</div>
			<div class="w80">
				<input type="text" name="first_name" id="first_name" 
				value="<?php echo $_SESSION['dr']['first_name']; ?>" required />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="last_name">Last Name *</label>
			</div>
			<div class="w80">
				<input type="text" name="last_name" id="last_name" value="<?php echo $_SESSION['dr']['last_name']; ?>" required />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="phone" >Phone Number *</label>
			</div>
			<div class="w80">
				<input type="text" name="phone" id="phone" value="<?php echo $_SESSION['dr']['phone']; ?>" required  />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="email" >Email *</label>
			</div>
			<div class="w80">
				<input type="email" name="email"  id="email" value="<?php echo $_SESSION['dr']['email']; ?>" required />
			</div>
		</div>
		<div class="input-group d-flex justify-content-center">
			<div class="w20 text-center">
				<label for="city">City</label>
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
				<label for="zip">Zip Code *</label>
			</div>
			<div class="w80">
				<input type="text" name="zip" id="zip" value="<?php echo $_SESSION['dr']['zip']; ?>" />
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
						<input type="radio" name="preferred_contact" 
						<?php if($_SESSION['dr']['preferred_contact']=="phone") echo "checked ";  ?> value="phone">
						<span>Phone</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
						<input type="radio" name="preferred_contact" 
						<?php if($_SESSION['dr']['preferred_contact']=="email") echo "checked ";  ?> value="email">
						<span>Email</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
						<input type="radio" name="preferred_contact" 
						<?php if($_SESSION['dr']['preferred_contact']=="text") echo "checked ";  ?> value="text">
						<span>Text</span>
						</label>
					</div>
				</div>
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
						<input type="radio" name="preferred_contact" 
						<?php if($_SESSION['dr']['preferred_contact']=="any") echo "checked ";  ?> value="any">
						<span>Any method is fine</span>
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="input-group">
			<div class="">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			</div>
			<br />
		</div>
		<div class="btns-group">
			<a href="#" class="btn goToStepSeven">Skip to the end</a>
			<a href="#" class="btn btn-next">Next Step</a>
		</div>
	</div>
	<br />
	<br />
</div>




<!-- content step 2 -->
<div class="form-step step-two">
	<div class="box-content">
		<div class="title wrapper text-center">Timeline, Closet Type, Dimensions</div>
		<p class="desc">So that we may best serve you, what is your sense of urgency in completing this project?</p>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="urgency" 
				<?php if($_SESSION['dr']['urgency'] == "ready_to_purchase") echo "checked ";  ?> 
				value="ready_to_purchase">
				<span>Ready to purchase. Remodeling or new build project underway.</span>
				</label>
			</div>
		</div>			
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="urgency" 
				<?php if($_SESSION['dr']['urgency'] == "comparing") echo "checked ";  ?> 
				value="comparing">
				<span>Received a quote from a different company and would like to comparison shop before making a decision.</span>
				</label>
			</div>
		</div>			
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="urgency" 
				<?php if($_SESSION['dr']['urgency'] == "exploring") echo "checked ";  ?> 
				value="exploring">
				<span>Just exploring options. Not ready to purchase.</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="urgency" 
				<?php if($_SESSION['dr']['urgency'] == "other") echo "checked ";  ?> 
				value="other">
				<span>Other</span>
				</label>
			</div>
		</div>
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
				<input type="radio" name="importance_price" 
				<?php if($_SESSION['dr']['importance_price'] == "PriceNotImportant") echo "checked ";  ?> 
				value="PriceNotImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
		</th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="importance_price" 
				<?php if($_SESSION['dr']['importance_price'] == "PriceImportant") echo "checked ";  ?> 
				value="PriceImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
		</th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="importance_price" 
				<?php if($_SESSION['dr']['importance_price'] == "PriceVeryImportant") echo "checked ";  ?> 
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
				<input type="radio" name="importance_timeline" 
				<?php if($_SESSION['dr']['importance_timeline'] == "TimelineNotImportant") echo "checked ";  ?> 
				value="TimelineNotImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
		</th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="importance_timeline" 
				<?php if($_SESSION['dr']['importance_timeline'] == "TimelineImportant") echo "checked ";  ?> 
				value="TimelineImportant">
				<span class="empty-label">&nbsp;</span>
			</label>
		</div>
		</th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="importance_timeline" 
				<?php if($_SESSION['dr']['importance_timeline'] == "TimelineVeryImportant") echo "checked ";  ?> 
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
				<input type="radio" name="importance_design" 
				<?php if($_SESSION['dr']['importance_design'] == "DesignNotImportant") echo "checked ";  ?> 
				value="DesignNotImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
		</th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="importance_design" 
				<?php if($_SESSION['dr']['importance_design'] == "DesignImportant") echo "checked ";  ?> 
				value="DesignImportant">
				<span class="empty-label">&nbsp;</span>
				</label>
			</div>
		</th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="importance_design" 
				<?php if($_SESSION['dr']['importance_design'] == "DesignVeryImportant") echo "checked ";  ?> 
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
		The requested "completion  date" is when you would like your order to be ready for shipment OR available to pick up from our manufacturing center located in Tigard Oregon. If your order is being shipped, please allocate for shipping time as estimated in chart below and note, 3rd party transit times can change due to unforeseen circumstances and therefore can not be guaranteed.
		</p>
		<div class="col-12 col-lg-12 company-block__images">
			<img class="map-delivery-desktop" src="<?php echo SITEROOT; ?>images/map-delivery.png" alt="map" >
			<img class="map-delivery-mobile" src="<?php echo SITEROOT; ?>images/map-mobile.png" alt="map" >
			<input type="date" id="proposed_finish_date" 
				name="proposed_finish_date" 
				value="<?php echo $_SESSION['dr']['proposed_finish_date']; ?>" 
				style="width: 170px; margin-top:18px;">
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
			We strive to serve all of our valued clients in a timely manner. On average, you should receive your closet in just 2-3 weeks time. However, there are rare occasions where this could be prolonged due to transit issues or other circumstances beyond our control.  By selecting "Yes" you are REQUESTING an expedited design and production process although it can not be guaranteed.  Note: Your design can not be forwarded to production until you have approved design, purchase order is signed and payment is received.
		</p>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="expedite" 
				<?php if($_SESSION['dr']['expedite'] == "Yes") echo "checked ";  ?> value="Yes">
				<span>Yes</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="expedite" 
				<?php if($_SESSION['dr']['expedite'] == "No") echo "checked ";  ?> value="No">
				<span>No</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="expedite" 
				<?php if($_SESSION['dr']['expedite'] == "Other") echo "checked ";  ?> value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>
	</div>
	<br />
	<div class="btns-group">
		<a href="#" class="btn btn-prev">Previous Step</a>
		<a href="#" class="btn btn-next">Next Step</a>
	</div>
	<br /><br />
</div>



<!-- step 3 -->
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
				<label class="home-consult-form__radio">Require<span style="color: red">*</span>
<input type="radio" required  name="name-closet" value="2">
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
<input type="text" style="border: 2px solid;" name="closet_name" 
value="<?php echo $_SESSION['dr']['closet_name']; ?>" />
			</div>
		</div>	
	</div>

	<div class="box-content" id="selectClosetType">
		<div class="input-group">
			<div class="title wrapper text-center">Select Room Type</div>
			<br />
		</div>				
		<p class="desc">
		<?php echo "closet_type:  ".$_SESSION['dr']['closet_type']; ?>
		<br />
		<br />
		
		Note: You will have an option at the end to add additional closet design request(s). 
		</p>

		<div class="col-12 item">
		<div class="form-group mobile-order-search-form-group">	
		<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type'] == "Walk_In") echo "checked ";  ?>		
		value="Walk_In" class="Walk-in-Closet">
		<span class="">Walk In Closet</span>
		</label>
		</div>
		</div>				

		<div class="col-12 item">
		<div class="form-group mobile-order-search-form-group">	
		<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type'] == "Reach_In") echo "checked ";  ?>		
		value="Reach_In" class="Reach-in-Closet">
		<span class="">Reach In Closet</span>
		</label>
		</div>
		</div>

		<div class="col-12 item">
		<div class="form-group mobile-order-search-form-group">	
		<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type'] == "Kids") echo "checked ";  ?>		
		value="Kids" class="Kids-Closet">
		<span class="">Kids Closet or Toy Closet</span>
		</label>
		</div>
		</div>

		<div class="col-12 item">
		<div class="form-group mobile-order-search-form-group">	
		<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type'] == "Pantry") echo "checked ";  ?>		
		value="Pantry" class="kitchen-pantry">
		<span class="">Kitchen Pantry</span>
		</label>
		</div>
		</div>

		<div class="col-12 item">
		<div class="form-group mobile-order-search-form-group">	
		<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type'] == "Wine") echo "checked ";  ?>		
		value="Wine" class="Wine-Rack">
		<span class="">Convertible Wine Rack or Wine Cellar</span>
		</label>
		</div>
		</div>

		<div class="col-12 item">
		<div class="form-group mobile-order-search-form-group">	
		<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
<?php if($_SESSION['dr']['closet_type'] == "Hall") echo "checked ";  ?>		
		value="Hall" class="Hall">
		<span class="">Hall or Linen Closet</span>
		</label>
		</div>
		</div>
	</div>

	<div class="box-content">
		<div class="input-group">
		<div class="title wrapper text-center">Floor Plan Shape</div>
		<p class="desc">Select the shape that BEST represents your space. Add any details you think would be helpful in other. Note: If you have a odd shaped room or space please upload a hand drawn picture with "Top View" perspective as shown in options below</p>
		<br />
		</div>	

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="Reach-in" 
							type="radio" 
							name="space_shape" 
							value="Reach-in">
					<span>Reach In</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
				<img onClick="set_wall_meas_content('Reach-in');" src="<?php echo SITEROOT; ?>images/Standard.png" alt="standart room" >
			</div>
		</div>

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="L-shape_3" 
							type="radio" 
							name="space_shape" 
							value="L-shape_3">
					<span>L-Shape 3</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
			<img onClick="set_wall_meas_content('L-shape_3');" src="<?php echo SITEROOT; ?>images/L-Shape-3.png" alt="L-Shape 3" >
			</div>
		</div>

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="L-shape_4" 
							type="radio" 
							name="space_shape" 
							value="L-shape_4">
					<span>L-Shape 4</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
				<img onClick="set_wall_meas_content('L-shape_4');" src="<?php echo SITEROOT; ?>images/L-Shape-4.png" alt="L-Shape 4" >
			</div>
		</div>

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="Angle-1" 
							type="radio" 
							name="space_shape" 
							value="Angle-1">
					<span>Angle 1</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
				<img onClick="set_wall_meas_content('Angle-1');" src="<?php echo SITEROOT; ?>images/Angle-1.png" alt="Angle 2" >
			</div>
		</div>

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="Angle-2" 
							type="radio" 
							name="space_shape" 
							value="Angle-2">
					<span>Angle 2</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
				<img onClick="set_wall_meas_content('Angle-2');" src="<?php echo SITEROOT; ?>images/Angle-2.png" alt="Angle 2" >
			</div>
		</div>

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="Angle-3" 
							type="radio" 
							name="space_shape" 
							value="Angle-3">
					<span>Angle 3</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
				<img onClick="set_wall_meas_content('Angle-3');" src="<?php echo SITEROOT; ?>images/Angle-3.png" alt="Angle 3" >
			</div>
		</div>

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="Angle-4" 
							type="radio" 
							name="space_shape" 
							value="Angle-4">
					<span>Angle 4</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
				<img onClick="set_wall_meas_content('Angle-4');" src="<?php echo SITEROOT; ?>images/Angle-4.png" alt="Angle 4" >
			</div>
		</div>

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="Angle-5" 
							type="radio" 
							name="space_shape" 
							value="Angle-5">
					<span>Angle 5</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
				<img onClick="set_wall_meas_content('Angle-5');" src="<?php echo SITEROOT; ?>images/Angle-5.png" alt="Angle 5" >
			</div>
		</div>

		<div class="d-inline-block-step-three">
			<div class="col-12 item">
				<br /><br />
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input id="Angle-6" 
							type="radio" 
							name="space_shape" 
							value="Angle-6">
					<span>Angle 6</span>
					</label>
				</div>					
			</div>
			<div class="img-center">
				<img onClick="set_wall_meas_content('Angle-6');" src="<?php echo SITEROOT; ?>images/Angle-6.png" alt="Angle 6" >
			</div>
		</div>
		
		<div style="clear:both; height:10px;"><hr /></div>
		
		<div id="walls_preview" style="margin-left:20px;">
		
		</div>



		<div class="input-group d-flex special-position">
			<div class="w80">
				<span class="note">Note: Additional information can be noted here</span>				
				<input id="addit" style="border: 2px solid;" type="text" name="additonal_info" 
				value="<?php echo $_SESSION['dr']['additonal_info']; ?>" />
			</div>
		</div>	
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Floor Plan Shape</div>
			<p class="desc">Select the shape that BEST represents your space. 
			Add any details you think would be helpful in other. Note: 
			If you have a odd shaped room or space please upload a hand drawn picture with "Top View" 
			perspective as shown in options below</p>
			<br />
		</div>	

		<div class="box-content">
			<div class="input-group">
				<div class="title wrapper text-center">UPLOAD FILES</div>
			</div>
			<div class="col-12">
				<iframe width="100%" height="340" src="<?php echo SITEROOT; ?>upload-your-files" title="Upload"></iframe>
			</div>
		</div>
	</div>



	<div class="box-content accessories-step-four">
		<div class="input-group">
			<div class="title wrapper text-center">Select the picture that best represents your ceiling type.</div>
			<br />
		</div>	

		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="ceiling" 
					<?php if($_SESSION['dr']['ceiling']=="Flat") echo "checked"; ?>
					value="Flat">
					<span class="square d-inline">Flat</span>
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/flat.jpg" alt="flat" >
					</div>
					</label>
				</div>					
			</div>
		</div>

		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="ceiling" 
					<?php if($_SESSION['dr']['ceiling']=="Sloped") echo "checked"; ?>
					value="Sloped">
					<span class="square d-inline">Sloped</span>
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/sloped.jpg" alt="sloped" >
					</div>
					</label>
				</div>					
			</div>					
		</div>

		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="ceiling" 
					<?php if($_SESSION['dr']['ceiling']=="Pitch") echo "checked"; ?>
					value="Pitch">
					<span class="square d-inline">Pitch</span>
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/pitch.jpg" alt="pitch" >
					</div>
					</label>
				</div>					
			</div>					
		</div>

		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="ceiling" 
					<?php if($_SESSION['dr']['ceiling']=="Bulk_Head") echo "checked"; ?>
					value="Bulk_Head">
					<span class="square d-inline">Bulk Head</span>
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/bulk-head.jpg" alt="Bulk Headm">
					</div>
					</label>
				</div>					
			</div>					
		</div>


		<br class="d-none" />
		<br class="d-none" />
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="ceiling" 
				<?php if($_SESSION['dr']['ceiling']=="Other") echo "checked"; ?>
				value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>
		<br />
		<span class="note">Note: Additional information can be noted here</span>	
		<br />
		<br />

		<div class="input-group d-flex special-position other-ceiling-mobile" >
			<div class="w80">
				<input type="text" name="ceiling_note" value="<?php echo $_SESSION['dr']['ceiling_note']; ?>" />
			</div>
		</div>	
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">What is / are your ceiling height(s)?</div>
			<br />
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="name-closet" value="2">
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" name="ceiling_height" value="<?php echo $_SESSION['dr']['ceiling_height']; ?>" />
			</div>
		</div>	
	</div>


	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">What type of door encloses the space?</div>
			<br />
		</div>						
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="door_type" 
				<?php if($_SESSION['dr']['door_type'] == "No_Door") echo "checked ";  ?> 
				value="No_Door">
				<span>No Door</span>
				</label>
			</div>
		</div>
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/d1.jpg" alt="No Door" >
		</div>
		
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="door_type" 
				<?php if($_SESSION['dr']['door_type'] == "Swings_Outward") echo "checked ";  ?> 
				value="Swings_Outward">
				<span>Doors (Swings outward from the space)</span>
				</label>
			</div>
		</div>
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/d2.jpg" alt="Doors (Swings outward from the space)" >
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="door_type" 
				<?php if($_SESSION['dr']['door_type'] == "Swings_Inward_Left") echo "checked ";  ?> 
				value="Swings_Inward_Left">
				<span>Door (Swings Inward to the Left)</span>
				</label>
			</div>
		</div>
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/d3.jpg" alt="Door (Swings Inward to the Left)" >
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="door_type" 
				<?php if($_SESSION['dr']['door_type'] == "Swings_Inward_Right") echo "checked ";  ?> 
				value="Swings_Inward_Right">
				<span>Door (Swings inward to the Right)</span>
				</label>
			</div>
		</div>
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/d4.jpg" alt="Door (Swings inward to the Right)" >
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="door_type" 
				<?php if($_SESSION['dr']['door_type'] == "Bi_Fold") echo "checked ";  ?> 
				value="Bi_Fold">
				<span>Bi Fold</span>
				</label>
			</div>
		</div>
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/d5.jpg" alt="Bi Fold" >
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="door_type" 
				<?php if($_SESSION['dr']['door_type'] == "Tri_Fold") echo "checked ";  ?> 
				value="Tri_Fold">
				<span>Tri Fold</span>
				</label>
			</div>
		</div>
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/d6.jpg" alt="Tri Fold" >
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="door_type" 
				<?php if($_SESSION['dr']['door_type'] == "Sliding") echo "checked ";  ?> 
				value="Sliding">
				<span>Sliding</span>
				</label>
			</div>
		</div>
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/d7.jpg" alt="Sliding" >
		</div>				
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="door_type" 
				<?php if($_SESSION['dr']['door_type'] == "Other") echo "checked ";  ?> 
				value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" name="door_type_note" id="door_type_note" 
				value="<?php echo $_SESSION['dr']['door_type_note']; ?>" />
			</div>
		</div>	
		<span class="note">Additional Door information</span>
		<br />
	</div>
	

	
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
				Select all obstructions we should be aware of when designing your custom closet.
			</div>
			<p class="desc">Note: In the other option add any details you think would be helpful.</p>
			<br />
		</div>										
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]" 
				<?php if(in_array("none",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="none">
				<span class="square">None</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("light_switch",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="light_switch">
				<span class="square">Light Switch(es)</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("electric_outlet",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="electric_outlet">
				<span class="square">Electrical Outlet(s)</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("window",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="window">
				<span class="square">Window</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("crawl_space",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="crawl_space">
				<span class="square">Crawl Space</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("attic_access",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="attic_access">
				<span class="square">Attic Access</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("wall_vent",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="wall_vent">						
				<span class="square">Wall Vent</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("floor_vent",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="floor_vent">
				<span class="square">Floor Vent</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("safe",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="safe">
				<span class="square">Safe</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("electrical_panel",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="electrical_panel">
				<span class="square">Electrical Panel</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("HVAC_system",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="HVAC_system">
				<span class="square">HVAC System</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="obstructions[]"
				<?php if(in_array("other",$_SESSION['dr']['obstructions'])) echo "checked "; ?>
				value="other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<span class="note">Additional information</span>
				
				
				<input type="text" name="obstructions_note" id="obstructions_note" 
				value="<?php echo $_SESSION['dr']['obstructions_note']; ?>" />
			</div>
		</div>	
	</div>
	<br />
	<div class="btns-group">
		<a href="#" class="btn btn-prev">Previous Step</a>
		<a style="display: none" href="#" id="myNextBtn" class="btn btn-next goToStep_four">Next Step</a>
		<a style="display: none" href="#" id="myNextBtn" class="d-btn-step-for-four-kitchen btn btn-next goToStep_five">Next Step</a>
		<a style="display: none" href="#" id="myNextBtn" class="d-btn-step-for-kitchen-wine-rack d-btn-step-for-four-wine-rack btn btn-next goToStep_six">Next Step</a>
		<a href="#" class="d-btn-step-p-three d-btn-step-for-kitchen d-btn-step-for-wine btn btn-next">Next Step</a>
	</div>
	<br />
	<br />
</div>



<!-- step four -->
<div class="form-step step-four">

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Personalize Your Closet Organizer</div>
			<div class="input-group d-flex special-position" style="margin-top: 42px;margin-left: 70px;">
				<div class="w80">
					<span class="note">Description (optional)</span>
					<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
					id="personalize_closet" 
					name="personalize_closet"><?php echo $_SESSION['dr']['personalize_closet']; ?></textarea>					
				</div>
			</div>	
		</div>	
	</div>
	<div class="box-content">
		<div class="input-group">
			<p class="desc">SELECT CLOSET STYLE:  The $ sign scale reflects level of detail in design which correlates to an increase in budget. (If you need a pantry or convertible wine rack design, please skip this step).<br/> NOTE: Quality and craftsmanship remains superior throughout all tiers. Our $ scale should NOT be compared to other companies as our prices our very competitive; typically up to 50% less. </p>
			<br />			
		</div>	
		<div class="mini-box">
			<div class="img-center">
				<img src="<?php echo SITEROOT; ?>images/level1.jpg" alt="Level 1" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol one">$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="closet_style_scale" 
					<?php if($_SESSION['dr']['closet_style_scale'] == "level_one") echo "checked";  ?>  
					value="level_one">
					<span><span>$ - Level 1:</span> floating look with shelves and drawers off floor</span>
					</label>
				</div>					
			</div>					
		</div>				

		<div class="mini-box">
			<div class="img-center">
				<img src="<?php echo SITEROOT; ?>images/level2.png" alt="Level 2" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol two">$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="closet_style_scale" 
					<?php if($_SESSION['dr']['closet_style_scale'] == "level_two") echo "checked";  ?>  
					value="level_two">
					<span><span>$$ - Level 2:</span> semi built in look with drawers & shelves to the floor</span>
					</label>
				</div>					
			</div>
		</div>		
				
		<div class="mini-box">
			<div class="img-center">
				<img src="<?php echo SITEROOT; ?>images/level3.jpg" alt="Level 3" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol three">$$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="closet_style_scale" 
					<?php if($_SESSION['dr']['closet_style_scale'] == "level_three") echo "checked";  ?>  
					value="level_three">
					<span><span>$$$ - Level 3:</span> built in look with enclosed with full length side panels</span>
					</label>
				</div>					
			</div>
		</div>

		<div class="mini-box">
			<div class="img-center">
				<img src="<?php echo SITEROOT; ?>images/level4.jpg" for="" alt="Level 4" > 
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol four">$$$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="closet_style_scale" 
					<?php if($_SESSION['dr']['closet_style_scale'] == "level_four") echo "checked";  ?>  
					value="level_four">
					<span><span>$$$$ - Level 4:</span> complete built in look with door fronts, Crown-Molding, LED lights, ect.)</span>
					</label>
				</div>					
			</div>
		</div>
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">How is your closet space shared?</div>
			<br />
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="closet_shared" 
				<?php if($_SESSION['dr']['closet_shared'] == "NotShared") echo "checked";  ?> 
				value="NotShared">
				<span>Not Shared</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="closet_shared" 
				<?php if($_SESSION['dr']['closet_shared'] == "OneThirdMine") echo "checked";  ?> 
				value="OneThirdMine">
				<span>1/3 Mine</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="closet_shared" 
				<?php if($_SESSION['dr']['closet_shared'] == "TwoThirdsMine") echo "checked";  ?> 
				value="TwoThirdsMine">
				<span>2/3 Mine</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="closet_shared" 
				<?php if($_SESSION['dr']['closet_shared'] == "SplitEven") echo "checked";  ?> 
				value="SplitEven">
				<span>Split 50/50</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="closet_shared" 
				<?php if($_SESSION['dr']['closet_shared'] == "Other") echo "checked";  ?> 
				value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>
				
		<div class="input-group d-flex special-position">
			<div class="w80">
				<span class="note">Additional information</span>
				<input type="text" name="closet_shared_note" id="closet_shared_note" 
				value="<?php echo $_SESSION['dr']['closet_shared_note']; ?>" >
			</div>
		</div>
	</div>
				
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			How many feet across do you need for double hanging space? (shirts, jackets, pants, ect)
			</div>
			<p class="desc">
			Double hanging will maximize your storage needs & generally will work for majority of hanging needs.
			</p>
			<br />
		</div>						
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/space-shared.jpg" alt="Shared space" > 
		</div>
		<br />
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="double_hang" 
				<?php if($_SESSION['dr']['double_hang'] == "None") echo "checked";  ?> 
				value="None">
				<span>None</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="double_hang" 
				<?php if($_SESSION['dr']['double_hang'] == "Minimal") echo "checked";  ?> 
				value="Minimal">
				<span>Minimal Double Hang (1-4 lifeet)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="double_hang" 
				<?php if($_SESSION['dr']['double_hang'] == "Some") echo "checked";  ?> 
				value="Some">
				<span>Some Double Hang (4-6 linear feet)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="double_hang" 
				<?php if($_SESSION['dr']['double_hang'] == "Lots") echo "checked";  ?> value="Lots">
				<span>A lot of Double Hang (6 or more linear feet)</span>
				</label>
			</div>
		</div>		

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="double_hang" 
				<?php if($_SESSION['dr']['double_hang'] == "other") echo "checked";  ?> 
				value="other">
				<span>Other</span>
				</label>
			</div>
		</div>
		<br />
		<hr />
		<br />
		<div class="input-group d-flex special-position">
			<div class="w80">
				<span class="note">Additional information</span>
				<input type="text" name="double_hang_note" 
				value="<?php echo $_SESSION['dr']['double_hang_note']; ?>">
			</div>
		</div>
	</div>
				
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			How many feet across do you need in long hanging? (medium - long dresses, gowns, jackets, ect)
			</div>
			<p class="desc">Long hanging is for longer articles of clothing such as: full length dresses, jump suites, full length jackets or coats, etc.</p>
			<br />
		</div>				
				
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/jake-make-rendering.jpg" alt="MAKE RENDERING" > 
		</div>
		<br />

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="long_hang" 
				<?php if($_SESSION['dr']['long_hang'] == "None") echo "checked";  ?> value="None">
				<span>None</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="long_hang" 
				<?php if($_SESSION['dr']['long_hang'] == "Minimal") echo "checked";  ?> value="Minimal">

				<span>Minimal Long Hang (1-2 linear feet)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="long_hang" 
				<?php if($_SESSION['dr']['long_hang'] == "Some") echo "checked";  ?> value="Some">
				<span>Some Long Hang (2-4 linear feet)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="long_hang" 
				<?php if($_SESSION['dr']['long_hang'] == "lots") echo "checked";  ?> value="lots">
				<span>A lot of Long Hang (4 or more linear feet))</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="long_hang" 
				<?php if($_SESSION['dr']['long_hang'] == "Other") echo "checked";  ?> value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>

		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" name="long_hang_note" 
				value="<?php echo $_SESSION['dr']['long_hang_note']; ?>" />
			</div>
		</div>
		<span class="note">Additional information</span>
		<br />
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">How many drawers do you prefer?</div>
			<br />
		</div>				
				
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/drawers-new.jpg" alt="drawers" > 
		</div>
		<br />				

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="drawers_num" 
				<?php if($_SESSION['dr']['drawers_num'] == "minimal") echo "checked";  ?> value="minimal">
				<span>Minimal Drawers (1-4 Total)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="drawers_num" 
				<?php if($_SESSION['dr']['drawers_num'] == "Some") echo "checked";  ?> value="Some">
				<span>Some Drawers (4-8 Total)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="drawers_num" 
				<?php if($_SESSION['dr']['drawers_num'] == "lots") echo "checked";  ?> value="lots">
				<span>A lot of Drawers (8 or More)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="drawers_num" 
				<?php if($_SESSION['dr']['drawers_num'] == "None") echo "checked";  ?> value="None">
				<span>None</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="drawers_num" 
				<?php if($_SESSION['dr']['drawers_num'] == "Other") echo "checked";  ?> value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>

		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" name="drawers_num_note" value="<?php echo $_SESSION['dr']['drawers_num_note']; ?>">
			</div>
		</div>	
		<span class="note">Additional information</span>
		<br />
	</div>
	<div class="box-content"> 
		<div class="input-group">
			<div class="title wrapper text-center">What style of door and / or drawer fronts do you prefer?</div>
			<br />
		</div>	
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
					<input type="radio" name="door_style" 
					<?php if($_SESSION['dr']['door_style'] == "Shaker") echo "checked";  ?> 
					value="Shaker">
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
					<input type="radio" name="door_style" 
					<?php if($_SESSION['dr']['door_style'] == "Glass") echo "checked";  ?> 
					value="Glass">
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
				<input type="radio" name="door_style" 
				<?php if($_SESSION['dr']['door_style'] == "None") echo "checked";  ?> 
				value="None">
				<span class="square">None</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="door_style" <?php if($_SESSION['dr']['door_style'] == "Other") echo "checked";  ?> value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>

		<div class="input-group d-flex">
			<span style="padding-left: 20px;">Additional information</span>
			<div class="w-100" style="padding-left: 20px; padding-right: 20px;">
				<input type="text" name="door_style_note" 
				value="<?php echo $_SESSION['dr']['door_style_note']; ?>" >
			</div>
		</div>
		<br />
	</div>
		
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Approximately how many shelves will you utilize? </div>
			<p class="desc">Consider items other than folded clothing. Ex: purses, hats, seasonal clothing, baskets, shoe boxes, etc. Note: If your closet design does not extend to ceiling, you will have space on top of closet to store items as well.</p>
			<br />
		</div>				
				
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/shelves.jpg" alt="How many shelves do you prefer" > 
		</div>
		<br />
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="shelves_num" 
				<?php if($_SESSION['dr']['shelves_num'] == "1-5") echo "checked";  ?> 
				value="1-5">
				<span>1 - 5</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="shelves_num" 
				<?php if($_SESSION['dr']['shelves_num'] == "5-10") echo "checked";  ?> 
				value="5-10">
				<span>5 - 10</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="shelves_num" 
				<?php if($_SESSION['dr']['shelves_num'] == "10-15") echo "checked";  ?> value="10-15">
				<span>10 - 15</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="shelves_num" 
				<?php if($_SESSION['dr']['shelves_num'] == "16+") echo "checked";  ?> value="16+">
				<span>16 +</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="shelves_num" 
				<?php if($_SESSION['dr']['shelves_num'] == "Other") echo "checked";  ?> 
				value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>
		
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" name="shelves_num_note" 
				value="<?php echo $_SESSION['dr']['shelves_num_note']; ?>" >
			</div>
		</div>	
		<span class="note">Additional information</span>
		<br />
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">What types of shoes will you be storing?</div>
			<br />
		</div>				
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("FlatsAndSandals", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="FlatsAndSandals">
				<span class="square">Flats and sandals</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("HighHeels", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="HighHeels">
				<span class="square">High heels</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("TennisShoes", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="TennisShoes">
				<span class="square">Tennis shoes</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("AnkleBoots", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="AnkleBoots">
				<span class="square">Ankle Boots</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Knee_Length_Or_Higher_Boots", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Knee_Length_Or_Higher_Boots">
				<span class="square">Knee length or higher boots</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Mens_shoes", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Mens_shoes">
				<span class="square">Mens shoes</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Mens_Ankle_Boots", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Mens_Ankle_Boots">
				<span class="square">Mens Ankle Boots</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Mens_Tall_Boots", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Mens_Tall_Boots">
				<span class="square">Mens Tall Boots</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Other", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>
		
		<br />
		<hr />
		<br />

		<div class="input-group d-flex special-position">
			<div class="w80">
				<span class="note">Additional information</span>
				<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
				name="shoes_note"><?php echo $_SESSION['dr']['shoes_note']; ?></textarea>
			</div>
		</div>	
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">What shoe storage styles suite your shoe collection?</div>
			<br />
		</div>				
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/shoe-storage.jpg" alt="What shoe storage styles suite your shoe collection?" > 
		</div>
		<br />

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage_style[]" 
				<?php if(in_array("Standard_Adjustable_Shelves", $_SESSION['dr']['shoe_storage_style'])) echo "checked"; ?>
				value="Standard_Adjustable_Shelves">
				<span class="square">Standard Adjustable Shelves - for all shoe and boot types</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage_style[]" 
				<?php if(in_array("Tilt_Shoe_Rack", $_SESSION['dr']['shoe_storage_style'])) echo "checked"; ?>
				value="Tilt_Shoe_Rack">
				<span class="square">Tilt Shoe Rack (Upgrade)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage_style[]" 
				<?php if(in_array("Shoe_Cubbies", $_SESSION['dr']['shoe_storage_style'])) echo "checked"; ?>
				value="Shoe_Cubbies">
				<span class="square">Shoe Cubbies (Upgrade)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage_style[]" 
				<?php if(in_array("Pull_Out_Shoe_Drawer", $_SESSION['dr']['shoe_storage_style'])) echo "checked"; ?>
				value="Pull_Out_Shoe_Drawer">
				<span class="square">Pull Out Shoe Drawer (Upgrade)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage_style[]" 
				<?php if(in_array("Pull_Out_Shoe_Rack", $_SESSION['dr']['shoe_storage_style'])) echo "checked"; ?>
				value="Pull_Out_Shoe_Rack">
				<span class="square">Pull Out Shoe Rack (Upgrade)</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage_style[]" 
				<?php if(in_array("Any", $_SESSION['dr']['shoe_storage_style'])) echo "checked"; ?>
				value="Any">
				<span class="square">Any</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage_style[]" 
				<?php if(in_array("N/A", $_SESSION['dr']['shoe_storage_style'])) echo "checked"; ?>
				value="N/A">
				<span class="square">N/A</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage_style[]" 
				<?php if(in_array("Other", $_SESSION['dr']['shoe_storage_style'])) echo "checked"; ?>
				value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>
		<br />	
		<hr />
		<br />
		<div class="input-group d-flex special-position">
			<div class="w80">
				<span class="note">Additional information</span>
				<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
				name="shoe_storage_style_note"><?php echo $_SESSION['dr']['shoe_storage_style_note']; ?></textarea>
			</div>
		</div>	
	</div>

	<div class="box-content accessories-step-four">
		<div class="input-group">
			<div class="title wrapper text-center">Please check all the accessories you would like to add. </div>
			<br />
		</div>	
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">
					<label class="home-consult-form__radio">
					<input type="checkbox" name="accessories[]" 					
				<?php if(in_array("Pull_Out_Hamper", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Pull_Out_Hamper">
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
					<span class="square d-inline">Pull Out Baskets</span>
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Pull_Out_Baskets", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Pull_Out_Baskets">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Belt_Rack", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Belt_Rack">
					<span class="square d-inline">Belt Rack</span>
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Tie_Rack", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Tie_Rack">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Scarf_Rack", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Scarf_Rack">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Valet_Rack", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Valet_Rack">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Mirror", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Mirror">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Jewelry_Tray", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Jewelry_Tray">
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
					<input type="checkbox" name="accessories[]" 					
					<?php if(in_array("Ironing_Board", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Ironing_Board">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Hooks_or_Hook_Strip", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Hooks_or_Hook_Strip">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Pull_Down_Hanging_Rod", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Pull_Down_Hanging_Rod">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Pull_Out_Pants_Rack", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Pull_Out_Pants_Rack">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("LED_Strip_Lights", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="LED_Strip_Lights">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Puck_Lighting", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Puck_Lighting">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Crown_Molding", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Crown_Molding">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Dove_Tail_Drawers", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Dove_Tail_Drawers">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Shoe_Fences", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Shoe_Fences">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Soft_Close_Slides", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Soft_Close_Slides">
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
					<input type="checkbox" name="accessories[]" 
					<?php if(in_array("Undermount_Soft_Close_Slides", $_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Undermount_Soft_Close_Slides">
					<span class="square d-inline">Undermount Soft Close Slides</span>
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>manage/cms/images/undermount-soft-close-slides.jpg" alt="Undermount Soft Close Slides">
					</div>
					</label>
				</div>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories[]"
				<?php if(in_array("None", $_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="None">
				<span class="square">None</span>
				</label>
			</div>					
		</div>

		<br class="d-none" />
		<br />
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories[]" 
				<?php if(in_array("Other", $_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Other">
				<span class="square d-inline">Other</span>
				</label>
			</div>
		</div>

		<div class="input-group d-flex special-position">
			<div class="w80">
				<span class="note">Additional information</span>	
				<textarea style="width:100%; border: 1px solid rgba(125, 132, 140, 0.27); border-radius: 3px;" 
				name="accessories_note"><?php echo $_SESSION['dr']['accessories_note'] ?></textarea>
			</div>
		</div>	
	</div>
	<br />
	<div class="btns-group">
		<a href="#" class="btn btn-prev">Previous Step</a>
		<a style="display: none" href="#" id="myNextBtn" class="d-btn-step-for-four-kitchen btn btn-next goToStep_seven d-btn-step-for-four-kitchen-two">Next Step</a>
		<a style="display: none" href="#" id="myNextBtn" class="btn btn-next goToStep_five">Next Step</a>
		<a style="display: none" href="#" id="myNextBtn" class="btn btn-next goToStep_seven for-first-four d-btn-step-for-walk-wine-rack four-kitchen">Next Step</a>
		<a style="display: none" href="#" id="myNextBtn" class="btn btn-next goToStep_seven for-first-four-all">Next Step</a>
		<a style="display: none" href="#" id="myNextBtn" class="btn btn-next goToStep_six for-all-selected">Next Step</a>
		<a href="#" class="d-btn-step-p-four btn btn-next">Next Step</a>
	</div>
	<br />
	<br />
</div>
			







			
		<!-- step five -->
		<div class="form-step step-five ">

			<div class="box-content">
				<div class="input-group">
					<div class="title wrapper text-center">Personalize Your Pantry</div>
					<div class="input-group d-flex special-position" style="margin-top: 42px;margin-left: 70px;">
						<div class="w80">
							<input type="text" name="s4" id="оther" />
						</div>
					</div>	
					<span class="note">Description (optional)</span>
				</div>	
			</div>

			<div class="box-content">
				<div class="input-group">
					<div class="title wrapper text-center">Select the Pantry style that best suits your needs. Unlike other closet types, ALL pantries set on the floor and have a built in look.  </div>
					<p class="desc">Note: The $ scale is reflective of the level of design detail and options and also correlates to an increase in budget. The material and craftsmanship remain superior throughout each level. It should NOT be compared to other companies use of the $ scale as our prices are very competitive and often up to 50% more affordable. </p>
					<br />
				</div>	

				<div class="mini-box">
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/level1-2.jpg" alt="Level 1" >
					</div>
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<span class="level-simbol one">$</span>
							<label class="home-consult-form__radio">
								<input type="radio" name="s41" value="2">
								<span><span>$ - Level 1:</span> Maximizes space utilizing any type of shelves.</span>
							</label>
						</div>					
					</div>					
				</div>				

				<div class="mini-box">
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/level2-2.jpg" alt="Level 2" >
					</div>
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<span class="level-simbol two">$$</span>
							<label class="home-consult-form__radio">
								<input type="radio" name="s41" value="2">
								<span><span>$$ - Level 2:</span> Utilizes a variety of shelving and drawers.</span>
							</label>
						</div>					
					</div>
				</div>		
				
				<div class="mini-box">
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/level3-3.jpg" alt="Level 3" >
					</div>
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<span class="level-simbol three">$$$</span>
							<label class="home-consult-form__radio">
								<input type="radio" name="s41" value="2">
								<span><span>$$$ - Level 3:</span> Utilizes a variety of shelving and drawers, door fronts, wine cubbies, door fronts, Crown-Molding...</span>
							</label>
						</div>					
					</div>
				</div>
			
				<div class="mini-box">
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/level4-4.jpg" for="" alt="Level 4" > 
					</div>
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<span class="level-simbol four">$$$$</span>
							<label class="home-consult-form__radio">
								<input type="radio" name="s41" value="2">
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
								<input type="checkbox" name="e1-1" value="2">
								<span class="square d-inline">LED-Lighting</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/LED-Lighting.jpg" alt="LED-Lighting" >
								</div>
							</label>
						</div>					
					</div>
				</div>
				
				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-2" value="2">
								<span class="square d-inline">Door Front(s)</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/door-front.jpg" alt="Door Front(s)" style="width: 136px;" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-3" value="2">
								<span class="square d-inline">Drawer(s) (Items not visible when closed)</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Drawer-s-new.jpg" alt="Drawer(s) (Items not visible when closed)" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-4" value="2">
								<span class="square d-inline">Pull Out Shelf or Shelves (items visible when closed)</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Pull-Out-Shelf.jpg" alt="Pull Out Shelf or Shelves (items visible when closed)" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-5" value="2">
								<span class="square d-inline">Pull Out Basket(s)</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Pull-Out-Basket(s).jpg" alt="Pull Out Basket(s)" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-6" value="2">
								<span class="square d-inline">Drawer Dividers</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Drawer-Dividers.jpg" alt="Drawer Dividers" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-7" value="2">
								<span class="square d-inline">Pull Out Spice Rack(s)</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Pull-Out-Spice-Rack(s).jpg" alt="Pull Out Spice Rack(s)" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-8" value="2">
								<span class="square d-inline">Sliding Spice Rack</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Sliding-Spice-Rack.jpg" alt="Sliding Spice Rack" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-9" value="2">
								<span class="square d-inline">Vertical Divider(s) for baking sheets, trays, ect.</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Vertical-Divider(s).jpg" alt="Vertical Divider(s) for baking sheets, trays, ect." >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-10" value="2">
								<span class="square d-inline">Tilted Can Shelf or Shelves</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/tilted.jpg" alt="Tilted Can Shelf or Shelves" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-11" value="2">
								<span class="square d-inline">Wine Cubbies</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Wine-Cubbies.jpg" alt="Wine Cubbies" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-12" value="2">
								<span class="square d-inline">Stemware Rack</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Stemware-Rack.jpg" alt="Stemware Rack" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-13" value="2">
								<span class="square d-inline">Revolving Lazy Suzen</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Revolving-Lazy-Suzen.jpg" alt="Revolving Lazy Suzen" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-14" value="2">
								<span class="square d-inline">Pull Out Waste & Recycle Baskets</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Pull-Out-Waste-Recycle-Baskets.jpg" alt="Pull Out Waste & Recycle Baskets" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="e1-15" value="2">
								<span class="square d-inline">Tall, Enclosed Storage for brooms, mops, ect</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/tall.jpg" alt="Tall, Enclosed Storage for brooms, mops, ect" style="width: 136px;" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="e1-16" value="2">
							<span class="square">None</span>
						</label>
					</div>					
				</div>

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="e1-17" value="2">
							<span class="square">Other</span>
						</label>
					</div>
				</div>
				<div class="input-group d-flex special-position">
					<div class="w80">
						<input type="text" name="e1-18" id="оther" />
					</div>
				</div>	
				<span class="note">Note: Additional information can be noted in "Other"</span>	

			</div>

			<div class="box-content">
				<div class="input-group">
					<div class="title wrapper text-center">How many bottles of wine do you plan to store in your panty?</div>
					<br />
				</div>		

				<br />
				<br />
				<div class="input-group d-flex special-position">
					<div class="w80">
						<input type="text" name="y1" id="оther" />
					</div>
				</div>	

			</div> 

			<br />
			<div class="btns-group">
				<a href="#" class="btn btn-prev hide-for-kitchen-wine">Previous Step</a>
				<a style="display: none" href="#" id="myNextBtn" class="btn btn-next goToStep_three previus-btn-three">Previous Step</a>
				<a style="display: none" href="#" id="myNextBtn" class="btn btn-next goToStep_seven hide-kitchen-wine-rack">Next Step</a>
				<a style="display: none" href="#" id="myNextBtn" class="btn btn-next goToStep_six kitchen-wine-rack goTo_six-for-kitchen-wine">Next Step</a>	
				<a href="#" id="myNextBtn" class="btn btn-next goToStep_six no-selected-new">Next Step</a>	
			</div>
			<br />
			<br />

		</div>
		<div class="form-step step-six">
			
			<div class="box-content">
				<div class="input-group">
					<div class="title wrapper text-center">Personalize your Wine Rack or Cellar</div>
					<div class="input-group d-flex special-position" style="margin-top: 42px;margin-left: 70px;">
						<div class="w80">
							<input type="text" name="s4" id="оther" />
						</div>
					</div>	
					<span class="note">Description (optional)</span>
				</div>	
			</div>
			
			<div class="box-content">
				<div class="input-group">
					<div class="title wrapper text-center">What style of wine rack(s) do you prefer?</div>
					<p class="desc">The $ scale is reflective of level of design detail and options and correlates with an increase in budget. Note: material and craftsmanship remains superior throughout all levels. ***Our $ scale should NOT be compared to other companies use of $ scale as our prices are very competitive; often times up to 50% more affordable.</p>
					<br />
				</div>	

				<div class="mini-box">
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/v1.jpg" alt="Level 1" >
					</div>
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<span class="level-simbol one">$</span>
							<label class="home-consult-form__radio">
								<input type="radio" name="s41" value="2">
								<span><span>$ - Level 1:</span> Wine towers utilizing convertible cubbies and tilted shelves and can fit into most spaces</span>
							</label>
						</div>					
					</div>					
				</div>				

				<div class="mini-box">
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/v2.jpg" alt="Level 2" >
					</div>
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<span class="level-simbol two">$$</span>
							<label class="home-consult-form__radio">
								<input type="radio" name="s41" value="2">
								<span><span>$$ - Level 2:</span> Level 1 options plus: center display</span>
							</label>
						</div>					
					</div>
				</div>		
				
				<div class="mini-box">
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/v3.jpg" alt="Level 3" >
					</div>
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<span class="level-simbol three">$$$</span>
							<label class="home-consult-form__radio">
								<input type="radio" name="s41" value="2">
								<span><span>$$$ - Level 3:</span> Level 1 - 2 options plus: corner shelves, drawers, drop down table.</span>
							</label>
						</div>					
					</div>
				</div>
			
				<div class="mini-box">
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/v4.jpg" for="" alt="Level 4" > 
					</div>
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<span class="level-simbol four">$$$$</span>
							<label class="home-consult-form__radio">
								<input type="radio" name="s41" value="2">
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
							<input type="checkbox" name="z1-1" value="2">
							<span class="square">Pinot</span>
						</label>
					</div>
				</div>

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="z1-2" value="2">
							<span class="square">Cabernet / Merlot</span>
						</label>
					</div>
				</div>	

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="z1-3" value="2">
							<span class="square">Champagne</span>
						</label>
					</div>
				</div>	

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="z1-4" value="2">
							<span class="square">Desert</span>
						</label>
					</div>
				</div>	

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="z1-5" value="2">
							<span class="square">Magnum</span>
						</label>
					</div>
				</div>	

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="z1-6" value="2">
							<span class="square">Mixed</span>
						</label>
					</div>
				</div>	

			</div>

			<div class="box-content">
				<div class="input-group">
					<div class="title wrapper text-center">How much wine storage do you need?</div>
					<br />
				</div>				

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="radio" name="z2" value="2">
							<span>Up too 100 bottles</span>
						</label>
					</div>
				</div>

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="radio" name="z2" value="2">
							<span>100-300 botles</span>
						</label>
					</div>
				</div>	

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="radio" name="z2" value="2">
							<span>300-500 bottles</span>
						</label>
					</div>
				</div>	

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="radio" name="z2" value="2">
							<span>500 plus</span>
						</label>
					</div>
				</div>	
				
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="radio" name="z2" value="2">
							<span>Other</span>
						</label>
					</div>
				</div>
				<div class="input-group d-flex special-position">
					<div class="w80">
						<input type="text" name="r2" id="оther" />
					</div>
				</div>	
				<span class="note">Note: Additional information can be noted in "Other"</span>	
								
			</div>

			<div class="box-content accessories-step-six">
				<div class="input-group">
					<div class="title wrapper text-center">Select features for your wine rack / cellar</div>
					<br />
				</div>				

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">Stemware Rack</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/acc.jpg" alt="Stemware Rack" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">Crown-Molding</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Crown--Molding.jpg" alt="Crown-Molding" style="width: 310px;">
								</div>
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">LED Lightings</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/LED-Lighting-new.jpg" alt="LED Lightings" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">Solid Oak Center Arch</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/arch.jpg" alt="Solid Oak Center Arch" style="width: 310px;">
								</div>
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">Drop Down Table</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Drop-Down-Table.jpg" alt="Drop Down Table" >
								</div>
							</label>
						</div>
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">Pull out shelves</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Pull-out-shelves.jpg" alt="Pull out shelves" >
								</div>
							</label>
						</div>
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">Drawers</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Drawers-new3.jpg" alt="Drawers" >
								</div>
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">Hemidor</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Hemidor.jpg" alt="Hemidor" >
								</div>
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="checkbox" name="z3" value="2">
								<span class="square d-inline">Glass-Door-Fronts</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/Glass-Door-Fronts.jpg" alt="Glass-Door-Fronts" >
								</div>
							</label>
						</div>
					</div>
				</div>				

				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="z3" value="2">
							<span class="square">None</span>
						</label>
					</div>
				</div>	
				
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
							<input type="checkbox" name="z2" value="2">
							<span class="square">Other</span>
						</label>
					</div>
				</div>
				<div class="input-group d-flex special-position">
					<div class="w80">
						<input type="text" name="r2" id="оther" />
					</div>
				</div>	
				<span class="note">Note: Additional information can be noted in "Other"</span>	
								
			</div>

			<br />
			<div class="btns-group">
				<a href="#" class="btn btn-prev hide-for-rich-and-wine new">Previous step</a>
				<a href="#" style="display: none" class="btn btn-prev goToStep_four show-for-rich-and-wine">Previous step</a>
				<a href="#" style="display: none" class="btn btn-prev goToStep_three show-for_wine-rack-new">Previous step</a>
				<a href="#" class="btn btn-next">Next step</a>
			</div>
			<br />
			<br />

		</div>

		<div class="form-step step-six">
			
			<div class="box-content">
				<div class="input-group">
					<div class="title wrapper text-center">Final Questions</div>
					<div class="input-group d-flex special-position" style="margin-top: 42px;margin-left: 70px;">
						<div class="w80">
							<input type="text" name="s44" id="оther" />
						</div>
					</div>	
					<span class="note">Description (optional)</span>
				</div>	
			</div>


			<div class="box-content accessories-step-six last-four-design">
				<div class="input-group">
					<div class="title wrapper text-center">What general color material to you prefer?</div>
					<br />
				</div>				

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Oxford_White") echo "checked ";  ?> 
value="Oxford_White">
								<span class="square d-inline">Oxford White</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/finish_white.jpg" alt="Oxford White" >
								</div>
							</label>
						</div>					
					</div>
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Antique_White") echo "checked ";  ?> 
value="Antique_White">
								<span class="square d-inline">Antique White</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/finish_antique_white.jpg" alt="Antique White">
								</div>
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Almond") echo "checked ";  ?> 
value="Almond">
								<span class="square d-inline">Almond</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/finish_almond.jpg" alt="Almond" >
								</div>	
							</label>
						</div>
					</div>	
				</div>
				
				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Custom_Grey") echo "checked ";  ?> 
value="Custom_Grey">
								<span class="square d-inline">Custom Grey</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/custom-grey.jpg" alt="Custom Grey" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Negotiating_In_Geneva") echo "checked ";  ?> 
value="Negotiating_In_Geneva">
								<span class="square d-inline">Negotiating In Geneva</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/negotiating-in-geneva.jpg" alt="Negotiating In Geneva" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Hardrock_Maple") echo "checked ";  ?> 
value="Hardrock_Maple">
								<span class="square d-inline">Hardrock Maple</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/hardrock-maple.jpg" alt="Hardrock Maple" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Backwoods_Sycamore") echo "checked ";  ?> 
value="Backwoods_Sycamore">
								<span class="square d-inline">Backwoods Sycamore</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/backwoods-sycamore.jpg" alt="Backwoods Sycamore" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Sunset_Cherry") echo "checked ";  ?> 
value="Sunset_Cherry">
								<span class="square d-inline">Sunset Cherry</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/sunset-cherry.jpg" alt="Sunset Cherry" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Alabama_Cherry") echo "checked ";  ?> 
value="Alabama_Cherry">
								<span class="square d-inline">Alabama Cherry</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/closets-to-go-rustik-cherry.jpg" alt="Alabama Cherry" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Rustic_Alder") echo "checked ";  ?> 
value="Rustic_Alder">
								<span class="square d-inline">Rustic Alder</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/rustic-alder.jpg" alt="Rustic Alder" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "American_Black_Walnut") echo "checked ";  ?> 
value="American_Black_Walnut">
								<span class="square d-inline">American Black Walnut</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/american-black-walnut.jpg" alt="American Black Walnut" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Chocolate_Apple") echo "checked ";  ?> 
value="Chocolate_Apple">
								<span class="square d-inline">Chocolate Apple</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/finish_chocolate_pear.jpg" alt="Chocolate Apple" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Windsor_Mahogany") echo "checked ";  ?> 
value="Windsor_Mahogany">
								<span class="square d-inline">Windsor Mahogany</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/windsor-mahogany.jpg" alt="Windsor Mahogany" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 								
<?php if($_SESSION['dr']['color'] == "African_Mahogany") echo "checked ";  ?> 
value="African_Mahogany">
								<span class="square d-inline">African Mahogany</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/african-mahogany.jpg" alt="African Mahogany" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Black") echo "checked ";  ?> 
value="Black">
								<span class="square d-inline">Black</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/black--.jpg" alt="Black" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Diva") echo "checked ";  ?> 
value="Diva">
								<span class="square d-inline">Diva</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-diva.jpg" alt="Diva" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
							<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Vanilla_Stix") echo "checked ";  ?> 
value="Vanilla_Stix">
								<span class="square d-inline">Vanilla Stix</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-vanilla-stix.jpg" alt="Vanilla Stix" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Aria") echo "checked ";  ?> 
value="Aria">
								<span class="square d-inline">Aria</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-aria.jpg" alt="Aria" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Sandalwood") echo "checked ";  ?> 
value="Sandalwood">
								<span class="square d-inline">Sandalwood</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-sandalwood.jpg" alt="Sandalwood" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Stromboli") echo "checked ";  ?> 
value="Stromboli">
								<span class="square d-inline">Stromboli</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-stromboli.jpg" alt="Stromboli" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Driftwood") echo "checked ";  ?> 
value="Driftwood">
								<span class="square d-inline">Driftwood</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-driftwood.jpg" alt="Driftwood" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Pewter_Pine") echo "checked ";  ?> 
value="Pewter_Pine">
								<span class="square d-inline">Pewter Pine</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-pewter-pine.jpg" alt="Pewter Pine" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
							<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Zambukka") echo "checked ";  ?> 
value="Zambukka">
								<span class="square d-inline">Zambukka</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-zambukka.jpg" alt="Zambukka" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Libretti") echo "checked ";  ?> 
value="Libretti">
								<span class="square d-inline">Libretti</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-libretti.jpg" alt="Libretti" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Mochatini") echo "checked ";  ?> 
value="Mochatini">
								<span class="square d-inline">Mochatini</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-mochatini.jpg" alt="Mochatini" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Linear_Ash") echo "checked ";  ?> 
value="Linear_Ash">
								<span class="square d-inline">Linear Ash</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-linear-ash.jpg" alt="Linear Ash" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Verismo") echo "checked ";  ?> 
value="Verismo">
								<span class="square d-inline">Verismo</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-verismo.jpg" alt="Verismo" >
								</div>	
							</label>
						</div>
					</div>	
				</div>

				<div class="d-inline-block">
					<div class="col-12 item">
						<div class="form-group mobile-order-search-form-group">	
							<label class="home-consult-form__radio">
								<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Queenston_Oak") echo "checked ";  ?> 
value="Queenston_Oak">
								<span class="square d-inline">Queenston Oak</span>
								<div class="img-center">
									<img src="<?php echo SITEROOT; ?>images/n-queenston-oak.jpg" alt="Queenston Oak" >
								</div>	
							</label>
						</div>
					</div>	
				</div>



			<div class="d-inline-block">
				<div class="col-12 item">
					<div class="form-group mobile-order-search-form-group">	
						<label class="home-consult-form__radio">
						<input type="radio" name="color" 
<?php if($_SESSION['dr']['color'] == "Other") echo "checked ";  ?> 
value="Other">
						<span class="square d-inline">Other</span>
						<div class="img-center">
							<img src="<?php echo SITEROOT; ?>images/finish_other.jpg" alt="Other" >
						</div>	
					</label>
				</div>
			</div>	

		</div>							
		<div class="input-group d-flex new-positinon">
			<div class="w80">
				<input type="text" name="r2" id="оther" />
			</div>
		</div>	
		<span class="note">Note: Additional information can be noted in "Other"</span>								
	</div>
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Photo Upload</div>
			<p class="desc">A current photo of the space we will be designing is very useful. You may upload it here and also add an additional comments in regards to your design request. </p>
			<input type="file" id="myfile" name="myfile">
			<div class="input-group d-flex special-position" style="margin-top: 42px;margin-left: 70px;">
				<div class="w80">
					<input type="text" name="s44" id="оther" />
				</div>
			</div>		
			<span class="note">Description (optional)</span>
		</div>	
	</div>
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Thank your for submitting your information. A designer will in contact you within 24 -48 hours with any further questions regarding your design. Feel free to leave comment below.</div>
			<div class="input-group d-flex special-position" style="margin-top: 42px;margin-left: 70px;">
				<div class="w80">
					<input type="text" name="s44" id="оther" />
				</div>
			</div>					
			<span class="note">Description (optional)</span>
		</div>	
	</div>
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Would you like to review?</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio goToStepTwo">
				<input type="radio" name="z2q3" value="2">
				<span>YES</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group show-msg">	
				<label class="home-consult-form__radio">
				<input type="radio" name="z2q3" value="2">
				<span id="dimensions_for_another">NO</span>
				</label>
			</div>
		</div>
	</div>
	<p class="success-msg">Your design is ready now. Once you click "Finish", the form will be submitted and a designer will be in contact shortly.</p>
	<br />
	<div class="btns-group">
		<a href="#" style="display: none" class="btn btn-prev show-for-wine-rack-new hide-for-first-four-options hive-for-kitchen-hall-rich">Previous step</a>
		<a href="#" style="display: none" class="btn goToStep_five hide-for-first-four-options show-for-hive-for-kitchen-hall-rich">Previous step</a>
		<a href="#" style="display: none" class="btn goToStep_four show-for-first-four-options">Previous step</a>
		<a href="#" onClick="submit_form();" class="btn">Finish</a>
	</div>
	<br />
	<br />
</div>

<input type="hidden" name="to_save" id="to_save" value="0"> 
</form>
</main>






<?php
//require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
require_once($real_root.'/pages/views/modal-save-to-specs-sheet.php');
?>
<script>

function save_form(){
alert("save  ");
document.getElementById("to_save").value = 1;
document.form.submit();
}
function submit_form(){
document.form.submit();
}

function set_wall_meas_content(shape) {
	document.getElementById(shape).checked = true;
	document.getElementById('addit').focus();

var w = "";
$("#walls_preview").html(w);
alert("==> " + shape);
if(shape.search("each-in") > -1) {
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-reach-in.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-128px; left:52px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-220px; left:1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-298px; left:148px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-280px; left:322px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-240px; left:268px;'>";
}
if(shape.search("quare") > -1) {
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-square-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-30px; left:60px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-180px; left:-20px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-320px; left:150px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-236px; left:330px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-140px; left:250px;'>";
}
if(shape.search("shape_1") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_1-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-30px; left:60px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-180px; left:-20px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-320px; left:70px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-290px; left:150px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-270px; left:230px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-250px; left:330px;'>";
w+="<input type='text' id='wall_g' name='wall_g' value='g' class='m_box' style='position:relative; top:-197px; left:242px;'>"; 
}
if(shape.search("shape_2") > -1){
w+= "<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_2-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-26px; left:60px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-130px; left:1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-210px; left:70px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-300px; left:150px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-360px; left:230px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-290px; left:332px;'>";
w+="<input type='text' id='wall_g' name='wall_g' value='g' class='m_box' style='position:relative; top:-196px; left:242px;'>";
}
if(shape.search("shape_3") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_3-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-36px; left:174px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-110px; left:140px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-198px; left:80px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-300px; left:1px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-370px; left:160px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-300px; left:306px;'>";
w+="<input type='text' id='wall_g' name='wall_g' value='g' class='m_box' style='position:relative; top:-200px; left:298px;'>";
}
if(shape.search("shape_4") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_4-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-30px; left:20px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-178px; left:-6px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-309px; left:160px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-290px; left:320px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-252px; left:240px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-230px; left:150px;'>";
w+="<input type='text' id='wall_g' name='wall_g' value='g' class='m_box' style='position:relative; top:-200px; left:130px;'>";
}
if(shape.search("ngle-1") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-angle-1-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-36px; left:60px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-178px; left:-1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-320px; left:100px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-310px; left:260px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-240px; left:310px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-216px; left:250px;'>";
}
if(shape.search("ngle-2") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-angle-2-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-30px; left:60px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-130px; left:-1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-260px; left:40px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-334px; left:200px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-260px; left:305px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-170px; left:250px;'>";
}
if(shape.search("ngle-3") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-angle-3-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-30px; left:44px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-180px; left:-1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-320px; left:150px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-304px; left:305px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-230px; left:260px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-170px; left:166px;'>";
}
if(shape.search("ngle-4") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-angle-4-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-30px; left:144px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-120px; left:40px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-260px; left:-1px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-342px; left:150px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-290px; left:304px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-170px; left:270px;'>";
}
if(shape.search("ngle-5") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-angle-5-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-54px; left:224px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-59px; left:100px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-200px; left:-1px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-344px; left:150px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-330px; left:304px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-290px; left:290px;'>";
}
if(shape.search("ngle-6") > -1){
w+="<img width='360' src='<?php echo SITEROOT; ?>images/designform/large-angle-6-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' value='a' class='m_box' style='position:relative; top:-120px; left:24px;'>";
w+="<input type='text' id='wall_b' name='wall_b' value='b' class='m_box' style='position:relative; top:-220px; left:-3px;'>";
w+="<input type='text' id='wall_c' name='wall_c' value='c' class='m_box' style='position:relative; top:-320px; left:140px;'>";
w+="<input type='text' id='wall_d' name='wall_d' value='d' class='m_box' style='position:relative; top:-240px; left:330px;'>";
w+="<input type='text' id='wall_e' name='wall_e' value='e' class='m_box' style='position:relative; top:-140px; left:200px;'>";
w+="<input type='text' id='wall_f' name='wall_f' value='f' class='m_box' style='position:relative; top:-200px; left:90px;'>";
}
$("#walls_preview").html(w);
}
</script>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
