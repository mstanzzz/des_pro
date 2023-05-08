<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>ClosetsToGo</title>
	<meta name="description" content="We design survey">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body class="clearfix we-design-survey-page">
<style>
.m_box {
	border-style: solid !important;
	border-width: thin !important;
	border-color: blue !important;
	width: 60px !important;
	
}

.m_ceiling_radio {
	position:relative; 
	left:-6px;
	top:70px;
	z-index:2;	
}

.m_ceiling_img {
	height:98%; 
	width:90%;
}

.m_ceiling_box {
	height:160px; 
	width:25%; 
	float:left;
	padding-left:2%;
	cursor: pointer;
	/*
	border-style:solid; 
	border-color: #dcdcdc;	
	*/
}

.m_door_type_box {	
	margin:1%; 
	height:120px; 
	width:100px; 
	float:left; 
	cursor: pointer;
}

.m_intake_textarea {
	width:100%; 
	border-radius: 4px;	
	
}

</style>
</head>
<body class="clearfix we-design-survey-page">

<?php
//require_once($real_root.'/pages/views/header_intake.php');
//  style="height:30px; background-color:blue;"
require_once($real_root.'/pages/views/header.php');
?>
<main id="maincontent" class="main">
<div>
<div class="block-with-background__wrapper we-design-survey" 
	style="position:relative; top:20px;">
	<div class="block-with-background__content" 
	style="height:30px !important;">
	</div>
	<div class="progressbar row row-survey-top block-with-background wrapper">
		<div class="progress" id="progress"></div>					  
<div class="tooltip-msg-step one" data-toggle="tooltip" data-placement="top" title="Contact Information"></div><div class="progress-step progress-step-active" 
data-title="Step 1"></div>
<div class="tooltip-msg-step two" data-toggle="tooltip" data-placement="top" title="Project Timeline"></div><div class="progress-step" 
data-title="Step 2" ></div>
<div class="tooltip-msg-step three" data-toggle="tooltip" data-placement="top" title="Closet Details and Dimensions"></div><div class="progress-step" 
data-title="Step 3" ></div>
<div class="tooltip-msg-step four" data-toggle="tooltip" data-placement="top" title="Personalize Your Closet Organizer"></div><div class="progress-step" 
data-title="Closet"></div>
<div class="tooltip-msg-step five" data-toggle="tooltip" data-placement="top" title="Personalize Your Pantry"></div><div class="progress-step" 
data-title="Pantry" ></div>
<div class="tooltip-msg-step six" data-toggle="tooltip" data-placement="top" title="Personalize your Wine Rack or Cellar"></div><div class="progress-step" 
data-title="Wine" ></div>
<div class="tooltip-msg-step seven" data-toggle="tooltip" data-placement="top" title="Final Questions"></div><div class="progress-step" 
data-title="Final" ></div>
	</div>
	<a href="#" onClick="save_drq_form();" class="btn">Save for later</a>

	<!--<a href="#" onClick="clear_fields();" >Clear</a>-->
	
</div>
<br />

<form name="form1" action="<?php echo SITEROOT."we-design-confirm.html"; ?>" method="post" class="form block-with-background container-fluid wrapper">
<input type="hidden" name="deid" id="deid" value="<?php echo $deid; ?>"
<div class="steps" style="margin-top:1px;">
<div class="form-step form-step-active">					  
	<div class="box-content">
		<div class="title wrapper text-center">Contact Information</div>
		<p class="desc" style="font-size:0.9em;">
		Filling out this form in its entirety provides enough information to provide you with a preliminary custom design in a timely manner.  
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
				<input type="email" name="email" id="email" value="<?php echo $_SESSION['dr']['email']; ?>" required />
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
			<div class="title wrapper text-center">Method of Contact</div>
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
						<?php if($_SESSION['dr']['preferred_contact']=="any") echo "checked ";  ?> value="any">
						<span>Any</span>
						</label>
					</div>
				</div>
			</div>
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
		<div class="title wrapper text-center">Timeline</div>
		<p class="desc"></p>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="urgency" 
				<?php if($_SESSION['dr']['urgency'] == "ready_to_purchase") echo "checked ";  ?> 
				value="ready_to_purchase">
				<span>Ready to Purchase</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="urgency" 
				<?php if($_SESSION['dr']['urgency'] == "comparing") echo "checked ";  ?> 
				value="comparing">
				<span>Need Price Comparison</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="urgency" 
				<?php if($_SESSION['dr']['urgency'] == "exploring") echo "checked ";  ?> 
				value="exploring">
				<span>Just Exploring</span>
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
			<div class="title wrapper text-center">
				Order of Importance 
			</div>
			<br />
		</div>				
				
		<table class="table-selections">
		<tr>
		<th></th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<span class="only-title">most important</span>
				</label>
			</div>
		</th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<span class="only-title">important</span>
				</label>
			</div>
		</th>
		<th>
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<span class="only-title">least important</span>
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
			SHIP Date / PICK UP Date Request 
			</div>
			<br />
		</div>				
		<p class="desc" style="font-size:0.9em;">
Select ship or pick up date (Tigard, Oregon).  If your project completion date is time sensitive, plan accordingly - allocate for the shipping <em>estimates</em> below. Consider 3rd party transit times can change due to unforeseen circumstances and therefore can NOT be guaranteed. 		</p>
		
		<div class="col-12 col-lg-12 company-block__images">
		<!-- style="position:relative; left:60px; width:400px;" -->
			<img style="max-width: 700px; margin-left:18%;" 
			class="map-delivery-desktop" 
			src="<?php echo SITEROOT; ?>images/EstShipTime.png" alt="map" >
			<img class="map-delivery-mobile" 
			src="<?php echo SITEROOT; ?>images/EstShipTime.png" alt="map" >
			<br />
			<br />
		
		<div style="z-index:2; 
				background-color:#175798;
				color:white;
				position:relative; 
				font-size:18px; 
				top:-16px;
				width:194px;
				padding:8px;
				height:44px;
				border-radius:6px;">Set a completion date</div>
				
				<input type="date" id="proposed_finish_date" 
				name="proposed_finish_date" 
				value="<?php echo $_SESSION['dr']['proposed_finish_date']; ?>" 
				style="width: 180px; margin-top:18px; font-size: 22px;">
							
			</div>
			<br />
			<br />				

	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			Expedited Orders
			</div>
			<br />
		</div>				
		<p class="desc">
Our average lead time with shipping is 3 weeks. This can vary due to 3rd party transit issues or other circumstances beyond our control. By selecting "Yes'' you are requesting to expedite your order although it can not be guaranteed. An approved design, signed purchase order and payment are required to expedite orders.
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
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input style="border: 1px solid;" type="text" name="expedite_note" 
				value="<?php echo $_SESSION['dr']['expedite_note']; ?>" />
			</div>
		</div>
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>
	<br />
	<div class="btns-group">
		<a href="#" class="btn btn-prev">Previous Step</a>
		<a href="#" class="btn btn-next">Next Step</a>
	</div>
	<br /><br />
</div>


<!-- step 3 -->
<div class="form-step" >

	<div class="box-content">
		<div class="input-group">
			<div class="title-left  text-left">Name Your Closet</div>
			<!-- <div class="title-right  text-right"></div>
			<p class="desc" style="font-size:0.9em;">
			At the end of form, additional closet designs may be added. 
			</p> -->
			<br />
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<span style="font-size: 1.2em;
				font-weight:normal!important;
				position:relative;
				top:-13px;
				left:10px;">Required</span>
				<span style="color:red; 
				font-size: 1.6em; 
				position:relative;
				top:-4px;
				left:10px;">*</span>
				<input style="border: 1px solid;" type="radio" required  
				name="closet_name" value="<?php echo $_SESSION['dr']['closet_name_mobile']; ?>">
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input style="border: 1px solid;"  type="text" name="closet_name_mobile" 
				value="<?php echo $_SESSION['dr']['closet_name']; ?>" />
			</div>
		</div>	
	</div>
	<div class="box-content" id="selectClosetType">
		<div class="input-group">

			<div class="title wrapper text-center">
				<span style="margin-right:6px;
				font-weight:normal!important;">Required</span>
				<span style="color:red; 				
				position:relative;
				top:1px;
				left:-4px;">*</span>
				Select Product
			</div>
			<br />
		</div>				
		<p class="desc">
			At the end of form, additional closet designs may be added.  
		</p>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
		value="Closet" class="Walk-in-Closet">
				<span class="">Closet</span>
				</label>
			</div>
		</div>				
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
		value="Pantry" class="kitchen-pantry">
				<span class="">Kitchen Pantry</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
		<input type="radio" name="closet_type" 
		value="Wine" class="Wine-Rack">
				<span class="">Wine Rack or Wine Cellar</span>
				</label>
			</div>
		</div>		
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
				Select Floor Plan
			</div>
			<p class="desc">
			</p>
			<br />
		</div>	


		<div style="float:left; cursor: pointer;">
			<img height="80px;" onClick="set_wall_meas_content('Reach-in');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/reach-in.png" alt="Reach-in" />
			<input id="Reach-in" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="Reach-in">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('Square');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/square.jpg" alt="Square" />
			<input id="Square" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="Square">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('L-shape_1');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/l-shape_1.jpg" alt="L-shape_1" />
			<input id="L-shape_1" 
					type="radio" 
					style="display: none;"
					name="space_shape" 
					value="L-shape_1">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('L-shape_2');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/l-shape_2.jpg" alt="L-shape_2" />
			<input id="L-shape_2" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="L-shape_2">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('L-shape_3');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/l-shape_3.jpg" alt="L-shape_3" />
			<input id="L-shape_3" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="L-shape_3">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('L-shape_4');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/l-shape_4.jpg" alt="L-shape_4" />
			<input id="L-shape_4" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="L-shape_4">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('Angle-1');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-1.jpg" alt="Angle-1" />
			<input id="Angle-1" 
					type="radio" 
					style="display: none;" 
					name="space_shape" 
					value="Angle-1">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('Angle-2');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-2.jpg" alt="Angle-2" />
			<input id="Angle-2" type="radio" style="display: none;" name="space_shape" value="Angle-2">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('Angle-3');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-3.jpg" alt="Angle-3" />
			<input id="Angle-3" type="radio" style="display: none;" name="space_shape" value="Angle-3">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('Angle-4');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-4.jpg" alt="Angle-4" />
			<input id="Angle-4" type="radio" style="display: none;" name="space_shape" value="Angle-4">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('Angle-5');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-5.jpg" alt="Angle-5" />
			<input id="Angle-5" type="radio" style="display: none;" name="space_shape" value="Angle-5">
		</div>
		<div style="float:left; cursor: pointer;">
			<img onClick="set_wall_meas_content('Angle-6');" class="design_form_closet_type_img" src="<?php echo SITEROOT; ?>images/designform/angle-6.jpg" alt="Angle-6" />
			<input id="Angle-6" type="radio" style="display: none;" name="space_shape" value="Angle-6">
		</div>
		
		<div style="float:left; cursor: pointer;">
			<img width="130" onClick="set_wall_meas_content('Nook');" 
			class="design_form_closet_type_img" 
			src="<?php echo SITEROOT; ?>images/designform/add/Nook.png" alt="Nook" />
			<input id="Nook" type="radio" style="display: none;" 
			name="space_shape" value="Nook">
		</div>
		<div style="float:left; cursor: pointer;">
			<img width="130" onClick="set_wall_meas_content('Open_Left_Wall');" 
			class="design_form_closet_type_img" 
			src="<?php echo SITEROOT; ?>images/designform/add/Open_Left_Wall.png" alt="Open_Left_Wall" />
			<input id="Open_Left_Wall" type="radio" style="display: none;" 
			name="space_shape" value="Open_Left_Wall">
		</div>
		<div style="float:left; cursor: pointer;">
			<img width="130" onClick="set_wall_meas_content('Open_Right_Wall');" 
			class="design_form_closet_type_img" 
			src="<?php echo SITEROOT; ?>images/designform/add/Open_Right_Wall.png" alt="Open_Right_Wall" />
			<input id="Open_Right_Wall" type="radio" style="display: none;" 
			name="space_shape" value="Open_Right_Wall">
		</div>
		
		<div style="float:left; cursor: pointer;">
			<img width="130" onClick="set_wall_meas_content('Open_Wall');" 
			class="design_form_closet_type_img" 
			src="<?php echo SITEROOT; ?>images/designform/add/Open_Wall.png" alt="Open_Wall" />
			<input id="Open_Wall" type="radio" style="display: none;" 
			name="space_shape" value="Open_Wall">
		</div>
		
		<div style="float:left; cursor: pointer; padding:30px;">
			Other
			<input type="radio" name="space_shape" value="Other">
		</div>

		
		<div style="clear:both; height:10px;"></div>
		<div id="walls_preview" style="">
		
		</div>

		<div class="input-group">
		Optional Comments
<textarea id="addit" class="m_intake_textarea"  
name="space_shape_note"><?php echo $_SESSION['dr']['space_shape_note']; ?></textarea>					
		</div>
		<br />
		<br />
	</div>
		
	<div class="box-content accessories-step-four">
		<div class="input-group">
			<div class="title wrapper text-center">
				Select Ceiling Type
			</div>
			<br />
		</div>

<div class="m_ceiling_box"  
onClick="select_ceiling('Flat');">
	<div class="m_ceiling_radio">
		<input type="radio" name="ceiling" 
		<?php if($_SESSION['dr']['ceiling']=="Flat") echo "checked"; ?>
		id="Flat" value="Flat">
	</div>
<img class="m_ceiling_img"
onClick="select_ceiling('Flat');" 
src="<?php echo SITEROOT; ?>images/designform/ceiling/Flat_2.png" alt="flat" >
</div>

<div class="m_ceiling_box"  
onClick="select_ceiling('Slope_Left');">
	<div class="m_ceiling_radio">
		<input style="margin-bottom:4px;" type="radio" name="ceiling" 
		<?php if($_SESSION['dr']['ceiling']=="Slope_Left") echo "checked"; ?>
		id="Slope_Left" value="Slope_Left">
	</div>

<img class="m_ceiling_img"
onClick="select_ceiling('Slope_Left');"  
src="<?php echo SITEROOT; ?>images/designform/ceiling/Slope_Left.PNG" alt="Slope Left" >
</div>
				
<div class="m_ceiling_box"  
onClick="select_ceiling('Slope_Flat_Left');">
	<div class="m_ceiling_radio">
		<input style="margin-bottom:4px;" type="radio" name="ceiling" 
		<?php if($_SESSION['dr']['ceiling']=="Slope_Flat_Left") echo "checked"; ?>
		id="Slope_Flat_Left" value="Slope_Flat_Left">
	</div>

<img class="m_ceiling_img"
onClick="select_ceiling('Slope_Flat_Left');"
src="<?php echo SITEROOT; ?>images/designform/ceiling/Slope_Flat_Left.PNG" alt="Slope Flat Left" >
</div>

<div class="m_ceiling_box"  
onClick="select_ceiling('Slope_Right');">
	<div class="m_ceiling_radio">
		<input style="margin-bottom:4px;" type="radio" name="ceiling" 
		<?php if($_SESSION['dr']['ceiling']=="Slope_Right") echo "checked"; ?>
		id="Slope_Right" value="Slope_Right">
	</div>
<img class="m_ceiling_img"
onClick="select_ceiling('Slope_Right');" 
src="<?php echo SITEROOT; ?>images/designform/ceiling/Slope_Right.PNG" alt="Slope Right" >
</div>

<div style="clear:both; height:16px;"></div>
	
<div class="m_ceiling_box"  
onClick="select_ceiling('Slope_Flat_Right');">
	<div class="m_ceiling_radio">
		<input style="margin-bottom:4px;" type="radio" name="ceiling" 
		<?php if($_SESSION['dr']['ceiling']=="Slope_Flat_Right") echo "checked"; ?>
		id="Slope_Flat_Right" value="Slope_Flat_Right">
	</div>
<img class="m_ceiling_img"
onClick="select_ceiling('Slope_Flat_Right');" 
src="<?php echo SITEROOT; ?>images/designform/ceiling/Slope_Flat_Right.PNG" alt="Slope Flat Right" >
</div>

<div class="m_ceiling_box"  
onClick="select_ceiling('Bulk_Head_Left');">
	<div class="m_ceiling_radio">
		<input style="margin-bottom:4px;" type="radio" name="ceiling" 
		<?php if($_SESSION['dr']['ceiling']=="Bulk_Head_Left") echo "checked"; ?>
		id="Bulk_Head_Left" value="Bulk_Head_Left">
	</div>
<img class="m_ceiling_img"
onClick="select_ceiling('Bulk_Head_Left');" 
src="<?php echo SITEROOT; ?>images/designform/ceiling/Bulk_Head_Left.PNG" alt="Bulk Head Left" >
</div>		

<div class="m_ceiling_box"  
onClick="select_ceiling('Bulk_Head_Right');">
	<div class="m_ceiling_radio">
		<input style="margin-bottom:4px;" type="radio" name="ceiling" 
		<?php if($_SESSION['dr']['ceiling']=="Bulk_Head_Right") echo "checked"; ?>
		id="Bulk_Head_Right" value="Bulk_Head_Right">
	</div>
<img class="m_ceiling_img"
onClick="select_ceiling('Bulk_Head_Right');" src="<?php echo SITEROOT; ?>images/designform/ceiling/Bulk_Head_Right.PNG" 
alt="Bulk Head Right" >
</div>		

<div class="m_ceiling_box"  
onClick="select_ceiling('Pitch');">
	<div class="m_ceiling_radio">
		<input style="margin-bottom:4px;" type="radio" name="ceiling" 
		<?php if($_SESSION['dr']['ceiling']=="Pitch") echo "checked"; ?>
		id="Pitch" value="Pitch">
	</div>
<img class="m_ceiling_img"
onClick="select_ceiling('Pitch');" src="<?php echo SITEROOT; ?>images/designform/ceiling/Pitch.PNG" 
alt="Pitch" >
</div>


<div style="clear:both; height:60px;"></div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label onClick="select_ceiling('Other');" class="home-consult-form__radio">
<input type="radio" name="ceiling" 
<?php if($_SESSION['dr']['ceiling']=="Other") echo "checked"; ?>
id="Other" value="Other">
				<span style="margin-left:10px;">Other</span>
				</label>
			</div>
		</div>
		<br />
		<div class="input-group" >
		Optional Comments
<textarea class="m_intake_textarea"  
				name="ceiling_note"><?php echo $_SESSION['dr']['ceiling_note']; ?></textarea>					
		</div>	
	</div>
	
	
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Enter Ceiling Height(s)</div>
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
				<input type="text" style="border: 1px solid;" name="ceiling_height" 
				value="<?php echo $_SESSION['dr']['ceiling_height']; ?>" />
			</div>
		</div>	
	</div>
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Select Door Type</div>
			<br />
		</div>




<div class="m_door_type_box"
onClick="select_door_type('No_Door');">
<input id="No_Door" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "No_Door") echo "checked ";  ?> 
value="No_Door">
<img width="100" src="<?php echo SITEROOT; ?>images/d1.jpg" alt="No Door" >
</div>

		
<div class="m_door_type_box"
onClick="select_door_type('Swings_Outward');">
<input id="Swings_Outward" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Swings_Outward") echo "checked ";  ?> 
value="Swings_Outward">
<img width="100" src="<?php echo SITEROOT; ?>images/d2.jpg" alt="Doors (Swings outward from the space)" >
</div>

		
<div class="m_door_type_box"
onClick="select_door_type('Swings_Inward_Left');">
<input id="Swings_Inward_Left" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Swings_Inward_Left") echo "checked ";  ?> 
value="Swings_Inward_Left">
<img width="100" src="<?php echo SITEROOT; ?>images/d3.jpg" alt="Door (Swings Inward to the Left)" >
</div>

<div class="m_door_type_box"
onClick="select_door_type('Swings_Inward_Right');">
<input id="Swings_Inward_Right" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Swings_Inward_Right") echo "checked ";  ?> 
value="Swings_Inward_Right">
<img width="100" src="<?php echo SITEROOT; ?>images/d4.jpg" alt="Door (Swings inward to the Right)" >
</div>

<div class="m_door_type_box"
onClick="select_door_type('French');">
<input id="French" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "French") echo "checked ";  ?> 
value="French">
<img width="100" src="<?php echo SITEROOT; ?>images/French_Doors.JPG" alt="Sliding" >
</div>


<div class="m_door_type_box"
onClick="select_door_type('Pocket_Left');">
<input id="Pocket_Left" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Pocket_Left") echo "checked ";  ?> 
value="Pocket_Left">
<img width="100" src="<?php echo SITEROOT; ?>images/Pocket_Door_Left.JPG" alt="Sliding" >
</div>

<div class="m_door_type_box"
onClick="select_door_type('Barn');">
<input id="Barn" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Barn") echo "checked ";  ?> 
value="Barn">
<img width="100" src="<?php echo SITEROOT; ?>images/Barn_Door.JPG" alt="Sliding" >
</div>

<div class="m_door_type_box"
onClick="select_door_type('Pocket_Right');">
<input id="Pocket_Right" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Pocket_Right") echo "checked ";  ?> 
value="Pocket_Right">
<img width="100" src="<?php echo SITEROOT; ?>images/Pocket_Door_Right.JPG" alt="Sliding" >
</div>


<div class="m_door_type_box"
onClick="select_door_type('Tri_Fold');">
<input id="Tri_Fold"type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Tri_Fold") echo "checked ";  ?> 
value="Tri_Fold">
<img width="100" src="<?php echo SITEROOT; ?>images/d6.jpg" alt="Tri Fold" >
</div>


<div class="m_door_type_box"
onClick="select_door_type('Sliding');">
<input id="Sliding" type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Sliding") echo "checked ";  ?> 
value="Sliding">
<img width="100" src="<?php echo SITEROOT; ?>images/d7.jpg" alt="Sliding" >
</div>

<div class="m_door_type_box"
onClick="select_door_type('Bi_Fold');">
<input id="Bi_Fold"type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Bi_Fold") echo "checked ";  ?> 
value="Bi_Fold">
<img width="100" src="<?php echo SITEROOT; ?>images/d5.jpg" alt="Bi Fold" >
</div>


<div class="m_door_type_box"
onClick="select_door_type('Other');">
<input id="Other"type="radio" name="door_type" 
<?php if($_SESSION['dr']['door_type'] == "Other") echo "checked ";  ?> 
value="Other">
<span>Other</span>
</div>


<div style="clear:both;"></div>


		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" style="border: 1px solid;" name="door_type_note" 
				value="<?php echo $_SESSION['dr']['door_type_note']; ?>" />
			</div>
		</div>
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>

	
	
	
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
				Select Obstructions
			</div>
			<p class="desc">
			</p>
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
		
		<div class="input-group">
		Optional Comments		
<textarea class="m_intake_textarea"  
name="obstructions_note"><?php echo $_SESSION['dr']['obstructions_note']; ?></textarea>					
		</div>	
		<br />
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
		<div class="input-group">
			<div class="title wrapper text-center">
			SELECT CLOSET TIER
			</div>
			
		</div>
		<p class="desc" style="font-size:0.9em;">
		The $ scale reflects: level of features, details & accessories - correlates with budget. Superb quality throughout.  All companies utilize tier systems differently - should not be used to compare.
		</p>
		</div>	
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/level1.jpg" alt="Level 1" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol one">$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="closet_style_scale" 
					<?php if($_SESSION['dr']['closet_style_scale'] == "Tier_1") echo "checked";  ?>  
					value="Tier_1">
					<span><span>$ - Tier 1:</span> floating look with shelves and drawers off floor</span>
					</label>
				</div>					
			</div>					
		</div>	
	
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/level2.png" alt="Level 2" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol two">$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="closet_style_scale" 
					<?php if($_SESSION['dr']['closet_style_scale'] == "Tier_2") echo "checked";  ?>  
					value="Tier_2">
					<span><span>$$ - Tier 2:</span> semi built in look with drawers & shelves to the floor</span>							
					</label>
				</div>					
			</div>
		</div>				
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/new/tier_3.png" alt="Level 3" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol three">$$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="closet_style_scale" 
					<?php if($_SESSION['dr']['closet_style_scale'] == "Tier_3") echo "checked";  ?>  
					value="Tier_3">
					<span><span>$$$ - Tier 3:</span> built in look with enclosed with full length side panels</span>
					</label>
				</div>					
			</div>
		</div>			
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/new/tier_4.png" for="" alt="Level 4" > 
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol four">$$$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="closet_style_scale" 
					<?php if($_SESSION['dr']['closet_style_scale'] == "Tier_4") echo "checked";  ?>  
					value="Tier_4">
					<span><span>$$$$ - Tier 4:</span> complete built in look with door fronts, Crown-Molding, LED lights, ect.)</span>
					</label>
				</div>					
			</div>
		</div>
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Select Closet Share</div>
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
				<input type="text" style="border: 1px solid;" name="closet_shared_note" id="closet_shared_note" 
				value="<?php echo $_SESSION['dr']['closet_shared_note']; ?>" >
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			Double Hanging Needs
			</div>
			<p class="desc" style="font-size:0.9em;">(stacked units = max storage: shirts, jackets, pants, ect)</p>
		</div>				
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
				<span>1 - 4 ft across</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="double_hang" 
				<?php if($_SESSION['dr']['double_hang'] == "Some") echo "checked";  ?> 
				value="Some">
				<span>4 - 6 ft across</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="double_hang" 
				<?php if($_SESSION['dr']['double_hang'] == "Lots") echo "checked";  ?> value="Lots">
				<span>6 +   ft across</span>
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
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" style="border: 1px solid;" name="double_hang_note" 
				value="<?php echo $_SESSION['dr']['double_hang_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			Long Hanging Needs
			</div>
			<p class="desc" style="font-size:0.9em;">(long dresses, gowns, jumpsuits, ect)</p>
		</div>								
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
				<span>1-2 ft across</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="long_hang" 
				<?php if($_SESSION['dr']['long_hang'] == "Some") echo "checked";  ?> value="Some">
				<span>2-4 ft across</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">
				<label class="home-consult-form__radio">
				<input type="radio" name="long_hang" 
				<?php if($_SESSION['dr']['long_hang'] == "lots") echo "checked";  ?> value="lots">
				<span>4 + ft across</span>
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
				<input type="text" style="border: 1px solid;" name="long_hang_note" 
				value="<?php echo $_SESSION['dr']['long_hang_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Drawer Needs</div>
		</div>								
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num'] == "1-4") echo "checked";  ?>
value="1-4">
				<span>1-4</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num'] == "4-8") echo "checked";  ?>
value="4-8">
				<span>4-8</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num'] == "Lots") echo "checked";  ?>
value="Lots">
				<span>8 +</span>
				</label>
			</div>
		</div>		
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num'] == "None") echo "checked";  ?>
value="None">
				<span>None</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="drawers_num" 
<?php if($_SESSION['dr']['drawers_num'] == "Other") echo "checked";  ?>
value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input style="border: 1px solid;" type="text" name="drawers_num_note" 
				value="<?php echo $_SESSION['dr']['drawers_num_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>

<!--
	<div class="box-content"> 
		<div class="input-group">
			<div class="title wrapper text-center">
			What style of door and / or drawer fronts do you prefer?
			</div>
		</div>	
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
<input type="radio" name="door_style" 
<?php if($_SESSION['dr']['door_style']=="Flat") echo "checked"; ?>
value="Flat">
					<span class="d-inline square">Flat Fronts (standard)</span><br />
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/flat1.jpg" alt="Flat Fronts" > 
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
<?php if($_SESSION['dr']['door_style']=="Shaker") echo "checked"; ?>
value="Shaker">
					<span class="d-inline square">Shaker Fronts (upgrade)</span><br />
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/flat2.jpg" alt="Shaker Fronts (upgrade)" > 
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
<?php if($_SESSION['dr']['door_style']=="Glass") echo "checked"; ?>
value="Glass">
					<span class="d-inline square">Glass Fronts</span><br />
					<div class="img-center">
						<img src="<?php echo SITEROOT; ?>images/flat3.jpg" alt="Glass Fronts" > 
					</div>
					</label>
				</div>
			</div>					
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="door_style" 
<?php if($_SESSION['dr']['door_style']=="None") echo "checked"; ?>
value="None">
				<span class="square">None</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="door_style" 
<?php if($_SESSION['dr']['door_style']=="Other") echo "checked"; ?>
value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" style="border: 1px solid;" name="door_style_note" winer
				value="<?php echo $_SESSION['dr']['door_style_note']; ?>" />
			</div>
		</div>	
		<span class="note">Additional information can be noted here</span>
		<br />
	</div>
-->

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Shelf Needs</div>
			<p class="desc" style="font-size:0.9em;">
			(clothes, hats, seasonals, shoe boxes, ect - some designs have open space atop closet)

			</p>
		</div>								
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">					
<input type="radio" name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="1-5")echo "checked"; ?>
value="1-5">
				<span>1 - 5</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="5-10")echo "checked"; ?>
value="5-10">
				<span>5 - 10</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="10-15")echo "checked"; ?>
value="10-15">
				<span>10 - 15</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="16+")echo "checked"; ?>
value="16+">
				<span>16 +</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
<input type="radio" name="shelves_num" 
<?php if($_SESSION['dr']['shelves_num']=="Other")echo "checked"; ?>
value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" style="border: 1px solid;" 
				name="shelves_num_note" value="<?php echo $_SESSION['dr']['shelves_num_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Shoe Storage Needs</div>
			<br />
		</div>				
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Flats", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Flats">
				<span class="square">Flats/Sandals</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("High_Heels", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="High_Heels">
				<span class="square">High Heels</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]"
				<?php if(in_array("Tennis_Shoes", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Tennis_Shoes">
				<span class="square">Athletic Shoes</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Ankle_Boots", $_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Ankle_Boots">
				<span class="square">Ankle Boots</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Knee_Length_Or_Higher_Boots",$_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Knee_Length_Or_Higher_Boots">
				<span class="square">Knee/Above Boots</span>
				</label>
			</div>
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Mens_Shoes",$_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Mens_Shoes">
				<span class="square">Mens Shoes</span>
				</label>
			</div>
		</div>					
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Mens_Ankle_Boots",$_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Mens_Ankle_Boots">
				<span class="square">Mens Ankle Boots</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Mens_Tall_Boots",$_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Mens_Tall_Boots">
				<span class="square">Mens Tall Boots</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoes[]" 
				<?php if(in_array("Other",$_SESSION['dr']['shoes'])) echo "checked"; ?>
				value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input style="border: 1px solid;" type="text" name="shoes_note" 
				value="<?php echo $_SESSION['dr']['shoes_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>
	
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">Select Shoe Storage Type(s)</div>
			<br />
		</div>				
		<div class="img-center">
			<img src="<?php echo SITEROOT; ?>images/shoe-storage.jpg" alt="What shoe storage styles suite your shoe collection?" > 
		</div>
		<br />
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage[]" 
				<?php if(in_array("Standard_Adjustable",$_SESSION['dr']['shoe_storage'])) echo "checked"; ?>
				value="Standard_Adjustable">
				<span class="square">Adjustable Shelves (Standard) - All Shoe / Boot Types</span>
				</label>
			</div>
		</div>
		
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage" 
				<?php if(in_array("Standard_Adjustable",$_SESSION['dr']['shoe_storage'])) echo "checked"; ?>
				value="Standard_Adjustable">
				<span class="square">Tilt Shoe Rack (Upgrade)</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage" 
				<?php if(in_array("Standard_Adjustable",$_SESSION['dr']['shoe_storage'])) echo "checked"; ?>
				value="Standard_Adjustable">
				<span class="square">Shoe Cubbies (Upgrade)</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage" 
				<?php if(in_array("Pull_Out_Shoe_Drawer",$_SESSION['dr']['shoe_storage'])) echo "checked"; ?>
				value="Pull_Out_Shoe_Drawer">
				<span class="square">Pull Out Shoe Drawer (Upgrade)</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage" 
				<?php if(in_array("Pull_Out_Shoe_Rack",$_SESSION['dr']['shoe_storage'])) echo "checked"; ?>
				value="Pull_Out_Shoe_Rack">
				<span class="square">Pull Out Shoe Rack (Upgrade)</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage" 
				<?php if(in_array("Any",$_SESSION['dr']['shoe_storage'])) echo "checked"; ?>
				value="Any">
				<span class="square">Any</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage" 
				<?php if(in_array("N-A",$_SESSION['dr']['shoe_storage'])) echo "checked"; ?>
				value="N-A">
				<span class="square">N/A</span>
				</label>
			</div>
		</div>		
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="shoe_storage" 
				<?php if(in_array("Other",$_SESSION['dr']['shoe_storage'])) echo "checked"; ?>
				value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>
		
		<div class="input-group d-flex special-position">
			<div class="w80">			
				<input type="text" name="shoe_storage_note" style="border: 1px solid;" 
				value="<?php echo $_SESSION['dr']['shoe_storage_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
		<br />
	</div>
	<div class="box-content accessories-step-four">
		<div class="input-group">
			<div class="title wrapper text-center">
			Select Closet Accessories 
			</div>
			<br />
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Pull_Out_Hamper",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Pull_Out_Hamper">
				<span class="square">Pull Out Hamper</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Pull_Out_Baskets",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Pull_Out_Baskets">
				<span class="square">Pull Out Baskets</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
					<input type="checkbox" name="accessories" 
					<?php if(in_array("Belt_Racks",$_SESSION['dr']['accessories'])) echo "checked"; ?>
					value="Belt_Racks">
				<span class="square">Belt Rack</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Tie_Rack",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Tie_Rack">
				<span class="square">Tie Rack</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Scarf_Rack",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Scarf_Rack">
				<span class="square">Scarf Rack</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Valet_Rod",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Valet_Rod">
				<span class="square">Valet Rod</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Mirror",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Mirror">
				<span class="square">Mirror</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Jewelry_Tray",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Jewelry_Tray">
				<span class="square">Jewelry Tray</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Ironing_Board",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Ironing_Board">
				<span class="square">Ironing Board</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Hooks_or_Hook_Strip",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Hooks_or_Hook_Strip">
				<span class="square">Hooks or Hook Strip</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Pull_Down_Hanging_Rod",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Pull_Down_Hanging_Rod">
				<span class="square">Pull Down Hanging Rod</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Pull_Out_Pants_Rack",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Pull_Out_Pants_Rack">
				<span class="square">Pull out pants rack</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("LED_Strip_Lights",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="LED_Strip_Lights">
				<span class="square">LED Strip Lights</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Puck_Lighting",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Puck_Lighting">
				<span class="square">Puck Lighting</span>
				</label>
			</div>
		</div>	


		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Crown_Molding",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Crown_Molding">
				<span class="square">Crown-Molding</span>
				</label>
			</div>
		</div>	


		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Dove_Tail_Drawers",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Dove_Tail_Drawers">
				<span class="square">Dove Tail Drawers</span>
				</label>
			</div>
		</div>	


		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Shoe_Fences",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Shoe_Fences">
				<span class="square">Shoe Fences</span>
				</label>
			</div>
		</div>	


		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Soft_Close_Slides",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Soft_Close_Slides">
				<span class="square">Soft Close Slides</span>
				</label>
			</div>
		</div>	


		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Undermount_Soft_Close_Slides",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Undermount_Soft_Close_Slides">
				<span class="square d-inline">Undermount Soft Close Slides</span>
				</label>
			</div>
		</div>	


		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="accessories" 
				<?php if(in_array("Other",$_SESSION['dr']['accessories'])) echo "checked"; ?>
				value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>	


		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" style="border: 1px solid;" name="accessories_note" 
				value="<?php echo $_SESSION['dr']['accessories_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
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
			<div class="title wrapper text-center">
			Select Pantry Tier - <p style="font-size: 12px;">All Floor Based</p>
			</div>
			<p class="desc" style="font-size:0.9em;">			
			The $ scale reflects: level of features, details & accessories - correlates with budget. Superb quality throughout.  All companies utilize tier systems differently - should not be used to compare.
			</p>
		</div>
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/level1-2.jpg" alt="Level 1" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol one">$</span>
					<label class="home-consult-form__radio">					
					<input type="radio" name="p_pantry" 
					<?php if($_SESSION['dr']['p_pantry']=="Tier_1") echo "checked"; ?> 
					value="Tier_1">								
					<span><span>$ - Tier 1:</span> Maximizes space utilizing any type of shelves.</span>	
					</label>
				</div>					
			</div>					
		</div>				
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/level2-2.jpg" alt="Level 2" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol two">$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="p_pantry" 
					<?php if($_SESSION['dr']['p_pantry']=="Tier_2") echo "checked"; ?> 
					value="Tier_2">								
					<span><span>$$ - Tier 2:</span> Utilizes a variety of shelving and drawers.</span>
					</label>
				</div>					
			</div>
		</div>						
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/level3-3.jpg" alt="Level 3" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol three">$$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="p_pantry" 
					<?php if($_SESSION['dr']['p_pantry']=="Tier_3") echo "checked"; ?> 
					value="Tier_3">								
					<span><span>$$$ - Tier 3:</span> Utilizes a variety of shelving and drawers, door fronts, wine cubbies, door fronts, Crown-Molding...</span>
					</label>
				</div>					
			</div>
		</div>	
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/level4-4.jpg" for="" alt="Level 4" > 
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol four">$$$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="p_pantry" 
					<?php if($_SESSION['dr']['p_pantry']=="Tier_4") echo "checked"; ?> 
					value="Tier_4">								
					<span><span>$$$$ - Tier 4:</span> Incorporate all features from Levels 1-3 plus an LED-Lighting Package, Crown-Molding , counter/display</span>
					</label>
				</div>					
			</div>
		</div>
	</div>
	<div class="box-content three accessories-step-five">
		<div class="input-group">
			<div class="title wrapper text-center">
			Select Accessories:
			</div>
			<br />
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">							
					<input type="checkbox" name="p_access" 
					<?php if(in_array('LED_Lighting',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="LED_Lighting">
					<span class="square">LED-Lighting</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Door_Fronts',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Door_Fronts">
					<span class="square">Door Front(s)</span>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Drawers_Closed',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Drawers_Closed">
					<span class="square">Drawer(s)</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Drawers_Closed',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Pull_Out_Shelves_Open">
					<span class="square">Pull Out Shelf</span>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Pull_Out_Baskets',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Pull_Out_Baskets">
					<span class="square">Pull Out Basket(s)</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Drawer_Dividers',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Drawer_Dividers">
					<span class="square">Drawer Dividers</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Pull_Out_Spice_Rack',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Pull_Out_Spice_Rack">
					<span class="square">Pull Out Spice Rack(s)</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Sliding_Spice_Rack',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Sliding_Spice_Rack">
					<span class="square">Sliding Spice Rack</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Vertical_Dividers',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Vertical_Dividers">
					<span class="square">Vertical Divider(s) for baking sheets, trays, ect.</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Tilted_Can_Shelves',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Tilted_Can_Shelves">
					<span class="square">Tilted Can Shelf or Shelves</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Wine_Cubbies',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Wine_Cubbies">
					<span class="square">Wine Cubbies</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Stemware_Rack',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Stemware_Rack">
					<span class="square">Stemware Rack</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Lazy_Suzen',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Lazy_Suzen">
					<span class="square">Revolving Lazy Suzen</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Pull_Out_Waste_Baskets',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Pull_Out_Waste_Baskets">
					<span class="square">Pull Out Waste & Recycle Baskets</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="p_access" 
					<?php if(in_array('Tall_Enclosed_Storage',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
					value="Tall_Enclosed_Storage">
					<span class="square">Tall, Enclosed Storage for brooms, mops, ect</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="p_access" 
				<?php if(in_array('None',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
				value="None">
				<span class="square">None</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="p_access" 
				<?php if(in_array('Other',$_SESSION['dr']['p_access'])) echo "checked";  ?> 
				value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>	
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input style="border: 1px solid;" type="text" name="p_access_note" 
				value="<?php echo $_SESSION['dr']['p_access_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
	</div>
	
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			Wine Storage Count
				<br />
				<br />
			</div>
		</div>		
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input style="border: 1px solid;" type="text" name="p_wine_bottle_num" 
				value="<?php echo $_SESSION['dr']['p_wine_bottle_num']; ?>" />
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
</div>

<div class="form-step step-six">
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
				Select Wine Rack / Cellar Tier
			</div>
<p class="desc" style="font-size:0.9em;">
The $ scale reflects: level of features, details & accessories - correlates with budget. Superb quality throughout.  All companies utilize tier systems differently - should not be used to compare.
<!--
SELECT WINE RACK TIER: The $ scale is reflective of the level of details and features. 
It also correlates with an increase in budget. Quality and craftsmanship remain superior throughout all tiers. 
This scale is not relative and should not be compared to other companies’ tier systems. 
-->
			<br />
		</div>	
		
		<div class="mini-box">
			<div class="img-center">
				<img width="172" height="388" src="<?php echo SITEROOT; ?>images/v1.jpg" alt="Level 1" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol one">$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="wine_style" 
					<?php if($_SESSION['dr']['wine_style']=='Tier_1') echo "checked"; ?>
					value="Tier_1">
					<span><span>$ - Tier 1:</span> Wine towers utilizing convertible cubbies and tilted shelves and can fit into most spaces</span>
					</label>
				</div>					
			</div>					
		</div>				
		
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/v2.jpg" alt="Level 2" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol two">$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="wine_style" 
					<?php if($_SESSION['dr']['wine_style']=='Tier_2') echo "checked"; ?>
					value="Tier_2">
					<span><span>$$ - Tier 2:</span> Level 1 options plus: center display</span>
					</label>
				</div>					
			</div>
		</div>		
		<div class="mini-box">
			<div class="img-center">
				<<img width="200" src="<?php echo SITEROOT; ?>images/v3.jpg" alt="Level 3" >
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol three">$$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="wine_style" 
					<?php if($_SESSION['dr']['wine_style']=='Tier_3') echo "checked"; ?>
					value="Tier_3">
					<span><span>$$$ - Tier 3:</span> Level 1 - 2 options plus: corner shelves, drawers, drop down table.</span>
					</label>
				</div>					
			</div>
		</div>
		<div class="mini-box">
			<div class="img-center">
				<img width="200" src="<?php echo SITEROOT; ?>images/v4.jpg" for="" alt="Level 4" > 
			</div>
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<span class="level-simbol four">$$$$</span>
					<label class="home-consult-form__radio">
					<input type="radio" name="wine_style" 
					<?php if($_SESSION['dr']['wine_style']=='Tier_4') echo "checked"; ?>
					value="Tier_4">
					<span><span>$$$$ - Tier 4:</span> Level 1 -3 options plus: LED-Lighting, hemidor, solid oak detailed arch.</span>
					</label>
				</div>					
			</div>
		</div>
	</div>
	
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			Select Bottle Types
			</div>
		</div>				
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="bottle_size"
				<?php if(in_array("Pinot",$_SESSION['dr']['bottle_size'])) echo "checked "; ?>
				value="Pinot">
				<span class="square">Pinot</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="bottle_size"
				<?php if(in_array("Cabernet_Merlot",$_SESSION['dr']['bottle_size'])) echo "checked "; ?>
				value="Cabernet_Merlot">
				<span class="square">Cabernet / Merlot</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="bottle_size"
				<?php if(in_array("Champagne",$_SESSION['dr']['bottle_size'])) echo "checked "; ?>
				value="Champagne">
				<span class="square">Champagne</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="bottle_size"
				<?php if(in_array("Desert",$_SESSION['dr']['bottle_size'])) echo "checked "; ?>
				value="Desert">
				<span class="square">Desert</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="bottle_size"
				<?php if(in_array("Magnum",$_SESSION['dr']['bottle_size'])) echo "checked "; ?>
				value="Magnum">
				<span class="square">Magnum</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="bottle_size"
				<?php if(in_array("Mixed",$_SESSION['dr']['bottle_size'])) echo "checked "; ?>
				value="Mixed">
				<span class="square">Mixed</span>
				</label>
			</div>
		</div>	
	</div>

	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
				Storage Needs 
			</div>
			<br />
		</div>				
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="bottle_num"
				<?php if($_SESSION['dr']['bottle_num']=='up_to_100') echo "checked"; ?>
				value="up_to_100">
				<span>Up to 100 bottles</span>
				</label>
			</div>
		</div>
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="bottle_num"
				<?php if($_SESSION['dr']['bottle_num']=='100-300') echo "checked"; ?>
				value="100-300">
				<span>100-300</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="bottle_num"
				<?php if($_SESSION['dr']['bottle_num']=='300-500') echo "checked"; ?>
				value="300-500">
				<span>300-500</span>
				</label>
			</div>
		</div>	
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="bottle_num"
				<?php if($_SESSION['dr']['bottle_num']=='500_plus') echo "checked"; ?>
				value="500_plus">
				<span>500 plus</span>
				</label>
			</div>
		</div>			
		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="radio" name="bottle_num"
				<?php if($_SESSION['dr']['bottle_num']=='Other') echo "checked"; ?>
				value="Other">
				<span>Other</span>
				</label>
			</div>
		</div>
		<div class="input-group d-flex special-position">
			<div class="w80">
				<input type="text" style="border: 1px solid;" name="bottle_num_note" id="bottle_num_note" 
				value="<?php echo $_SESSION['dr']['bottle_num_note']; ?> " />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
	</div>
	<div class="box-content accessories-step-six">
		<div class="input-group">
			<div class="title wrapper text-center">
				Select Features
			</div>
			<br />
		</div>

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Stemware_Rack",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Stemware_Rack">
					<span class="square">Stemware Rack</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Stemware_Rack",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Stemware_Rack">
					<span class="square">Crown-Molding</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Stemware_Rack",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Stemware_Rack">
					<span class="square">LED Lightings</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Stemware_Rack",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Stemware_Rack">
					<span class="square">Solid Oak Center Arch</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Stemware_Rack",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Stemware_Rack">
					<span class="square">Drop Down Table</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Stemware_Rack",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Stemware_Rack">
					<span class="square">Pull out shelves</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Drawers",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Drawers">
					<span class="square">Drawers</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Stemware_Rack",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Stemware_Rack">
					<span class="square">Hemidor</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="checkbox" name="wine_feat" 
					<?php if(in_array("Stemware_Rack",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
					value="Stemware_Rack">
					<span class="square d-inline">Glass-Door-Fronts</span>
					</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="wine_feat" 
				<?php if(in_array("None",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
				value="None">
				<span class="square">None</span>
				</label>
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio">
				<input type="checkbox" name="wine_feat" 
				<?php if(in_array("Other",$_SESSION['dr']['wine_feat'])) echo "checked "; ?>
				value="Other">
				<span class="square">Other</span>
				</label>
			</div>
		</div>	

		<div class="input-group d-flex special-position">
			<div class="w80">
				<input style="border: 1px solid;" type="text" name="wine_feat_note" 
				value="<?php echo $_SESSION['dr']['wine_feat_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
	</div>
	<br />
	<div class="btns-group">
		<a href="#" class="btn btn-prev hide-for-rich-and-wine new">Previous step</a>
		<a href="#" style="display: none" class="btn btn-prev goToStep_four show-for-rich-and-wine">Previous step</a>
		<a href="#" style="display: none" class="btn btn-prev goToStep_three show-for_wine-rack-new">Previous step</a>
		<a href="#" class="btn btn-next">Next step</a>
	</div>
	<br />
</div>


<div class="form-step step-six">			
	<div class="box-content accessories-step-six last-four-design">
		<div class="input-group">
			<div class="title wrapper text-center">
			Select Color Tone
			</div>
			<br />
		</div>
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="color" 
					<?php if($_SESSION['dr']['color']=="Whites") echo "checked"; ?>
					value="Whites">
					<span class="square d-inline">Whites</span>
					</label>
				</div>
			</div>	
		</div>
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="color" 
					<?php if($_SESSION['dr']['color']=="Blacks") echo "checked"; ?>
					value="Blacks">
					<span class="square d-inline">Blacks</span>
					</label>
				</div>
			</div>	
		</div>
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="color" 
					<?php if($_SESSION['dr']['color']=="Greys") echo "checked"; ?>
					value="Greys">
					<span class="square d-inline">Greys</span>
					</label>
				</div>
			</div>	
		</div>
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="color" 
					<?php if($_SESSION['dr']['color']=="Tans") echo "checked"; ?>
					value="Tans">
					<span class="square d-inline">Tans</span>
					</label>
				</div>
			</div>	
		</div>
		
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="color" 
					<?php if($_SESSION['dr']['color']=="Browns") echo "checked"; ?>
					value="Browns">
					<span class="square d-inline">Browns</span>
					</label>
				</div>
			</div>	
		</div>
		
		<div class="d-inline-block">
			<div class="col-12 item">
				<div class="form-group mobile-order-search-form-group">	
					<label class="home-consult-form__radio">
					<input type="radio" name="color" 
					<?php if($_SESSION['dr']['color']=="Other") echo "checked"; ?>
					value="Other">
					<span class="square d-inline">Other</span>
					</label>
				</div>
			</div>	
		</div>
		
		<div class="input-group d-flex new-positinon">
			<div class="w80">			
				<input style="border: 1px solid;" type="text" name="color_note" 
				value="<?php echo $_SESSION['dr']['color_note']; ?>" />
			</div>
		</div>	
		<!--	
		<span class="note">Additional information can be noted here</span>
		-->
	</div>
			
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			Upload Images / Files  <p style="font-size: 12px;">(add files, then start upload)</p>			
			</div>
<p class="desc" style="font-size:0.9em;">
Formats: GIF, JPG, TIF, BMP, PDF. Max size 10MB each.
</p>			
			<iframe width="100%" height="330" src="<?php echo SITEROOT; ?>upload-your-files" title="Upload"></iframe>
<div class="input-group" 
style="margin-top: 42px;">
Additional Info (optional)
<textarea class="m_intake_textarea"  
name="additonal_info"><?php echo $_SESSION['dr']['additonal_info']; ?></textarea>					
			</div>
			
		</div>	
	</div>
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
			Thank you! Our Design Team will contact you within 48 hours. 
			</div>
<div class="input-group" style="margin-top:42px;">
Comments (optional)
<textarea class="m_intake_textarea"  
name="comments"><?php echo $_SESSION['dr']['comments']; ?></textarea>					
			</div>					
		</div>	
	</div>
	
<!--	
	<div class="box-content">
		<div class="input-group">
			<div class="title wrapper text-center">
				Would you like to submit dimensions for another closet?
			</div>
		</div>	

		<div class="col-12 item">
			<div class="form-group mobile-order-search-form-group">	
				<label class="home-consult-form__radio goToStepTwo">
					<input onClick="capture_drq_data();" type="radio" name="z2q3" value="2">
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
-->	
	
	<p class="success-msg">
	Your design is ready now. Once you click "Finish", the form will be submitted 
	and a designer will be in contact shortly.
	</p>
	<br />
	<div class="btns-group">
		<a href="#" style="display: none" class="btn btn-prev show-for-wine-rack-new hide-for-first-four-options hive-for-kitchen-hall-rich">Previous step</a>
		<a href="#" style="display: none" class="btn goToStep_five hide-for-first-four-options show-for-hive-for-kitchen-hall-rich">Previous step</a>
		<a href="#" style="display: none" class="btn goToStep_four show-for-first-four-options">Previous step</a>
		<a href="#" onClick="submit_drq_form();" class="btn">Submit Request</a>
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

/*
window.addEventListener("beforeunload", function(e){
	capture_drq_data();
}, false);


function capture_drq_data(){
	let site_root = "<?php echo SITEROOT; ?>";
	let q_str=get_drq_str();
	let url_str = site_root+"ajax/ajax-do-design-request.php"+q_str;
	//alert(url_str);
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: url_str,
	  success: function(data) {
		alert(data);
		clear_fields();
	  }
	});
}
*/
   
function test_test(){
	console.log("test_test test_test");
	alert("mmmmmmmmmmmmm");
}

function save_drq_form(){
	document.getElementById("to_save").value = 1;
	
	if(document.form1.email.value == ''){
		alert("we need your email address");
	}else{	
		document.form1.submit();
	}
}
function submit_drq_form(){
	document.form1.submit();
}

function select_ceiling(shape) {
	document.getElementById(shape).checked = true;
}

function select_door_type(type){
	document.getElementById(type).checked = true;
}

function set_wall_meas_content(shape) {
	document.getElementById(shape).checked = true;
	document.getElementById('addit').focus();

var w = "";
$("#walls_preview").html(w);
if(shape.search("each-in") > -1) {
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-reach-in.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-128px; left:41px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-210px; left:30px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-298px; left:148px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-270px; left:254px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-240px; left:248px;'>";
}
if(shape.search("quare") > -1) {
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-square-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-30px; left:56px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-180px; left:1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-300px; left:130px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-236px; left:274px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-140px; left:220px;'>";
}
if(shape.search("shape_1") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_1-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-30px; left:52px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-156px; left:-1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-300px; left:60px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-280px; left:150px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-270px; left:230px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-230px; left:274px;'>";
w+="<input type='text' id='wall_g' name='wall_g' class='m_box' style='position:relative; top:-194px; left:226px;'>"; 
}
if(shape.search("shape_2") > -1){
w+= "<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_2-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-26px; left:60px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-130px; left:1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-210px; left:70px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-282px; left:150px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-360px; left:230px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-280px; left:278px;'>";
w+="<input type='text' id='wall_g' name='wall_g' class='m_box' style='position:relative; top:-190px; left:237px;'>";
}
if(shape.search("shape_3") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_3-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-24px; left:158px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-100px; left:140px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-168px; left:60px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-260px; left:2px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-340px; left:146px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-280px; left:272px;'>";
w+="<input type='text' id='wall_g' name='wall_g' class='m_box' style='position:relative; top:-190px; left:268px;'>";
}
if(shape.search("shape_4") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-l-shape_4-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-24px; left:2px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-168px; left:-1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-288px; left:140px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-260px; left:276px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-226px; left:230px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-220px; left:150px;'>";
w+="<input type='text' id='wall_g' name='wall_g' class='m_box' style='position:relative; top:-190px; left:122px;'>";
}
if(shape.search("ngle-1") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-angle-1-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-30px; left:40px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-178px; left:-1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-290px; left:100px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-274px; left:240px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-200px; left:280px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-166px; left:230px;'>";
}
if(shape.search("ngle-2") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-angle-2-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-30px; left:60px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-130px; left:-1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-250px; left:40px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-314px; left:200px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-250px; left:272px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-166px; left:210px;'>";
}
if(shape.search("ngle-3") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-angle-3-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-30px; left:28px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-170px; left:-1px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-296px; left:130px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-270px; left:274px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-200px; left:250px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-168px; left:152px;'>";
}
if(shape.search("ngle-4") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-angle-4-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-30px; left:124px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-110px; left:40px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-240px; left:-1px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-322px; left:140px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-260px; left:276px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-166px; left:244px;'>";
}
if(shape.search("ngle-5") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-angle-5-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-46px; left:224px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-54px; left:100px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-188px; left:-1px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-322px; left:140px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-290px; left:276px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-250px; left:272px;'>";
}
if(shape.search("ngle-6") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/large-angle-6-c.png' />";
w+="<input type='text' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-120px; left:24px;'>";
w+="<input type='text' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-210px; left:-3px;'>";
w+="<input type='text' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-300px; left:140px;'>";
w+="<input type='text' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-220px; left:280px;'>";
w+="<input type='text' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-140px; left:200px;'>";
w+="<input type='text' id='wall_f' name='wall_f' class='m_box' style='position:relative; top:-188px; left:86px;'>";
}
if(shape.search("Nook") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/add/Nook.png' />";
w+="<input type='text' value='' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-100px; left:24px;'>";
w+="<input type='text' value='' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-170px; left:50px;'>";
w+="<input type='text' value='' id='wall_c' name='wall_c' class='m_box' style='position:relative; top:-230px; left:140px;'>";
w+="<input type='text' value='' id='wall_d' name='wall_d' class='m_box' style='position:relative; top:-220px; left:219px;'>";
w+="<input type='text' value='' id='wall_e' name='wall_e' class='m_box' style='position:relative; top:-210px; left:254px;'>";
}
if(shape.search("Open_Left_Wall") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/add/Open_Left_Wall.png' />";
w+="<input type='text' value='' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-154px; left:140px;'>";
w+="<input type='text' value='' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-144px; left:246px;'>";
}
if(shape.search("Open_Right_Wall") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/add/Open_Right_Wall.png' />";
w+="<input type='text' value='' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-120px; left:28px;'>";
w+="<input type='text' value='' id='wall_b' name='wall_b' class='m_box' style='position:relative; top:-180px; left:162px;'>";
}
if(shape.search("Open_Wall") > -1){
w+="<img width='336' src='<?php echo SITEROOT; ?>images/designform/add/Open_Wall.png' />";
w+="<input type='text' value='' id='wall_a' name='wall_a' class='m_box' style='position:relative; top:-156px; left:140px;'>";
}

$("#walls_preview").html(w);
}



function does_it_exist(ele){
    if (ele !== undefined) {
        return 1;
    }else{
		return 0;
	}
}
		
function get_drq_str(){
	
	var query_str = '?cap=1';

	if(does_it_exist(document.form1.first_name)){	
		query_str += "&first_name="+document.form1.first_name.value;	
	}
	if(does_it_exist(document.form1.last_name)){	
		query_str += "&last_name="+document.form1.last_name.value;	
	}
	if(does_it_exist(document.form1.phone)){	
		query_str += "&phone="+document.form1.phone.value;	
	}
	if(does_it_exist(document.form1.email)){	
		query_str += "&email="+document.form1.email.value;	
	}
	if(does_it_exist(document.form1.state)){	
		query_str += "&state="+document.form1.state.value;	
	}
	if(does_it_exist(document.form1.zip)){	
		query_str += "&state="+document.form1.zip.value;	
	}
	if(does_it_exist(document.form1.preferred_contact)){	
		query_str += "&preferred_contact="+document.form1.preferred_contact.value;	
	}
	if(does_it_exist(document.form1.urgency)){	
		query_str += "&urgency="+document.form1.urgency.value;	
	}
	if(does_it_exist(document.form1.importance_price)){	
		query_str += "&importance_price="+document.form1.importance_price.value;	
	}
	if(does_it_exist(document.form1.importance_timeline)){	
		query_str += "&importance_timeline="+document.form1.importance_timeline.value;	
	}
	if(does_it_exist(document.form1.importance_design)){	
		query_str += "&importance_design="+document.form1.importance_design.value;	
	}
	if(does_it_exist(document.form1.expedite)){	
		query_str += "&expedite="+document.form1.expedite.value;	
	}
	if(does_it_exist(document.form1.proposed_finish_date)){	
		query_str += "&proposed_finish_date="+document.form1.proposed_finish_date.value;	
	}
	if(does_it_exist(document.form1.expedite_note)){	
		query_str += "&expedite_note="+document.form1.expedite_note.value;	
	}
	if(does_it_exist(document.form1.closet_name)){	
		query_str += "&closet_name="+document.form1.closet_name.value;	
	}
	if(does_it_exist(document.form1.closet_name_mobile)){	
		query_str += "&closet_name_mobile="+document.form1.closet_name_mobile.value;	
	}
	if(does_it_exist(document.form1.closet_type)){	
		query_str += "&closet_type="+document.form1.closet_type.value;	
	}
	if(does_it_exist(document.form1.space_shape)){	
		query_str += "&space_shape="+document.form1.space_shape.value;	
	}
	if(does_it_exist(document.form1.additonal_info)){	
		query_str += "&additonal_info="+document.form1.additonal_info.value;	
	}
	if(does_it_exist(document.form1.ceiling)){	
		query_str += "&ceiling="+document.form1.space_shape.value;	
	}
	if(does_it_exist(document.form1.ceiling_note)){	
		query_str += "&ceiling_note="+document.form1.ceiling_note.value;	
	}
	if(does_it_exist(document.form1.ceiling_height)){	
		query_str += "&ceiling_height="+document.form1.ceiling_height.value;	
	}
	if(does_it_exist(document.form1.door_type)){	
		query_str += "&door_type="+document.form1.door_type.value;	
	}
	if(does_it_exist(document.form1.door_type_note)){	
		query_str += "&door_type_note="+document.form1.door_type_note.value;	
	}
	if(does_it_exist(document.form1.obstructions_note)){	
		query_str += "&obstructions_note="+document.form1.obstructions_note.value;	
	}
	if(does_it_exist(document.form1.personalize_closet)){	
		query_str += "&personalize_closet="+document.form1.personalize_closet.value;	
	}
	if(does_it_exist(document.form1.closet_style_scale)){	
		query_str += "&closet_style_scale="+document.form1.closet_style_scale.value;	
	}
	if(does_it_exist(document.form1.closet_shared)){	
		query_str += "&closet_shared="+document.form1.closet_shared.value;	
	}
	if(does_it_exist(document.form1.double_hang)){	
		query_str += "&double_hang="+document.form1.double_hang.value;	
	}
	if(does_it_exist(document.form1.double_hang_note)){	
		query_str += "&double_hang_note="+document.form1.double_hang_note.value;	
	}
	if(does_it_exist(document.form1.long_hang)){	
		query_str += "&long_hang="+document.form1.long_hang.value;	
	}
	if(does_it_exist(document.form1.long_hang_note)){	
		query_str += "&long_hang_note="+document.form1.long_hang_note.value;	
	}
	if(does_it_exist(document.form1.drawers_num)){	
		query_str += "&drawers_num="+document.form1.drawers_num.value;	
	}
	if(does_it_exist(document.form1.drawers_num_note)){	
		query_str += "&drawers_num_note="+document.form1.drawers_num_note.value;	
	}
	if(does_it_exist(document.form1.door_style)){	
		query_str += "&door_style="+document.form1.door_style.value;	
	}
	if(does_it_exist(document.form1.shelves_num)){	
		query_str += "&shelves_num="+document.form1.shelves_num.value;	
	}
	if(does_it_exist(document.form1.shoe_storage_note)){	
		query_str += "&shoe_storage_note="+document.form1.shoe_storage_note.value;	
	}
	if(does_it_exist(document.form1.accessories_note)){	
		query_str += "&accessories_note="+document.form1.accessories_note.value;	
	}
	if(does_it_exist(document.form1.personalize_pantry)){	
		query_str += "&personalize_pantry="+document.form1.personalize_pantry.value;	
	}
	if(does_it_exist(document.form1.p_pantry)){	
		query_str += "&p_pantry="+document.form1.p_pantry.value;	
	}
	if(does_it_exist(document.form1.p_access_note)){	
		query_str += "&p_access_note="+document.form1.p_access_note.value;	
	}
	if(does_it_exist(document.form1.p_wine_bottle_num)){	
		query_str += "&p_wine_bottle_num="+document.form1.p_wine_bottle_num.value;	
	}
	if(does_it_exist(document.form1.personalize_wine)){	
		query_str += "&personalize_wine="+document.form1.personalize_wine.value;	
	}
	if(does_it_exist(document.form1.wine_style)){	
		query_str += "&wine_style="+document.form1.wine_style.value;	
	}
	if(does_it_exist(document.form1.bottle_num)){	
		query_str += "&bottle_num="+document.form1.bottle_num.value;	
	}
	if(does_it_exist(document.form1.bottle_num_note)){	
		query_str += "&bottle_num_note="+document.form1.bottle_num_note.value;	
	}
	if(does_it_exist(document.form1.wine_feat_note)){	
		query_str += "&wine_feat_note="+document.form1.wine_feat_note.value;	
	}
	if(does_it_exist(document.form1.obscure_description)){	
		query_str += "&obscure_description="+document.form1.obscure_description.value;	
	}
	if(does_it_exist(document.form1.color_note)){	
		query_str += "&color_note="+document.form1.color_note.value;	
	}
	if(does_it_exist(document.form1.additonal_info)){	
		query_str += "&additonal_info="+document.form1.additonal_info.value;	
	}
	if(does_it_exist(document.form1.comments)){	
		query_str += "&comments="+document.form1.comments.value;	
	}
	if(does_it_exist(document.form1.wall_a)){	
		query_str += "&wall_a="+document.form1.wall_a.value;	
	}
	if(does_it_exist(document.form1.wall_b)){	
		query_str += "&wall_b="+document.form1.wall_b.value;	
	}
	if(does_it_exist(document.form1.wall_c)){	
		query_str += "&wall_c="+document.form1.wall_c.value;	
	}
	if(does_it_exist(document.form1.wall_d)){	
		query_str += "&wall_d="+document.form1.wall_d.value;	
	}
	if(does_it_exist(document.form1.wall_e)){	
		query_str += "&wall_e="+document.form1.wall_e.value;	
	}
	if(does_it_exist(document.form1.wall_f)){	
		query_str += "&wall_f="+document.form1.wall_f.value;	
	}
	if(does_it_exist(document.form1.wall_g)){	
		query_str += "&wall_g="+document.form1.wall_g.value;	
	}

	query_str += "&obstructions="+get_all_drq_checked("obstructions");
	query_str += "&shoes="+get_all_drq_checked("shoes");
	query_str += "&shoe_storage="+get_all_drq_checked("shoe_storage");
	query_str += "&accessories="+get_all_drq_checked("accessories");
	query_str += "&bottle_size="+get_all_drq_checked("bottle_size");
	query_str += "&wine_feat="+get_all_drq_checked("wine_feat");
	query_str += "&color="+get_all_drq_checked("color");
	return query_str;
}

function get_all_drq_checked(name) {
	var ret_str = ""; 
    var cboxes = document.getElementsByName(name+'[]');
    var len = cboxes.length;
    for (var i=0; i<len; i++) {
		//alert(i + (cboxes[i].checked?' checked ':' unchecked ') + cboxes[i].value);		
		if(cboxes[i].checked){			
			ret_str += ","+cboxes[i].value
		}
    }
	return ret_str;
}

function uncheck_all_drq(name) {
    var cboxes = document.getElementsByName(name+'[]');
    var len = cboxes.length;
    for (var i=0; i<len; i++) {
		cboxes[i].checked = false;
    }
}


function uncheck_all_radio_drq(name) {
    var radios = document.getElementsByName(name);
    var len = radios.length;
    for (var i=0; i<len; i++) {
		radios[i].checked = false;
    }
}


function clear_fields(){
	if(does_it_exist(document.form1.closet_name)){	
		document.form1.closet_name.value = "";	
	}
	if(does_it_exist(document.form1.closet_name_mobile)){	
		document.form1.closet_name_mobile.value = "";	
	}
	if(does_it_exist(document.form1.space_shape)){	
		document.form1.space_shape.value = "";	
	}
	if(does_it_exist(document.form1.additonal_info)){	
		document.form1.additonal_info.value = "";	
	}
	if(does_it_exist(document.form1.ceiling)){	
		document.form1.space_shape.value = "";	
	}
	if(does_it_exist(document.form1.ceiling_note)){	
		document.form1.ceiling_note.value = "";	
	}
	if(does_it_exist(document.form1.ceiling_height)){	
		document.form1.ceiling_height.value = "";	
	}
	if(does_it_exist(document.form1.door_type)){	
		document.form1.door_type.value = "";	
	}
	if(does_it_exist(document.form1.door_type_note)){	
		document.form1.door_type_note.value = "";	
	}
	if(does_it_exist(document.form1.obstructions_note)){	
		document.form1.obstructions_note.value = "";	
	}
	if(does_it_exist(document.form1.personalize_closet)){	
		document.form1.personalize_closet.value = "";	
	}
	if(does_it_exist(document.form1.closet_style_scale)){	
		document.form1.closet_style_scale.value = "";	
	}
	if(does_it_exist(document.form1.closet_shared)){	
		document.form1.closet_shared.value = "";	
	}
	if(does_it_exist(document.form1.double_hang)){	
		document.form1.double_hang.value = "";	
	}
	if(does_it_exist(document.form1.double_hang_note)){	
		document.form1.double_hang_note.value = "";	
	}
	if(does_it_exist(document.form1.long_hang)){	
		document.form1.long_hang.value = "";	
	}
	if(does_it_exist(document.form1.long_hang_note)){	
		document.form1.long_hang_note.value = "";	
	}
	if(does_it_exist(document.form1.drawers_num)){	
		document.form1.drawers_num.value = "";	
	}
	if(does_it_exist(document.form1.drawers_num_note)){	
		document.form1.drawers_num_note.value = "";	
	}
	if(does_it_exist(document.form1.door_style)){	
		form1.door_style.value = "";	
	}
	if(does_it_exist(document.form1.shelves_num)){	
		document.form1.shelves_num.value = "";	
	}
	if(does_it_exist(document.form1.shoe_storage_note)){	
		document.form1.shoe_storage_note.value = "";	
	}
	if(does_it_exist(document.form1.accessories_note)){	
		document.form1.accessories_note.value = "";	
	}
	if(does_it_exist(document.form1.personalize_pantry)){	
		document.form1.personalize_pantry.value = "";	
	}
	if(does_it_exist(document.form1.p_pantry)){	
		document.form1.p_pantry.value = "";	
	}
	if(does_it_exist(document.form1.p_access_note)){	
		document.form1.p_access_note.value = "";	
	}
	if(does_it_exist(document.form1.p_wine_bottle_num)){	
		document.form1.p_wine_bottle_num.value = "";	
	}
	if(does_it_exist(document.form1.personalize_wine)){	
		document.form1.personalize_wine.value = "";	
	}
	if(does_it_exist(document.form1.wine_style)){	
		document.form1.wine_style.value = "";	
	}
	if(does_it_exist(document.form1.bottle_num)){	
		document.form1.bottle_num.value = "";	
	}
	if(does_it_exist(document.form1.bottle_num_note)){	
		document.form1.bottle_num_note.value = "";	
	}
	if(does_it_exist(document.form1.wine_feat_note)){	
		document.form1.wine_feat_note.value = "";	
	}
	if(does_it_exist(document.form1.obscure_description)){	
		document.form1.obscure_description.value = "";	
	}
	if(does_it_exist(document.form1.color_note)){	
		document.form1.color_note.value = "";	
	}
	if(does_it_exist(document.form1.additonal_info)){	
		document.form1.additonal_info.value = "";	
	}
	if(does_it_exist(document.form1.comments)){	
		document.form1.comments.value = "";	
	}
	if(does_it_exist(document.form1.wall_a)){	
		document.form1.wall_a.value = "";	
	}
	if(does_it_exist(document.form1.wall_b)){	
		document.form1.wall_b.value = "";	
	}
	if(does_it_exist(document.form1.wall_c)){	
		document.form1.wall_c.value = "";	
	}
	if(does_it_exist(document.form1.wall_d)){	
		document.form1.wall_d.value = "";	
	}
	if(does_it_exist(document.form1.wall_e)){	
		document.form1.wall_e.value = "";	
	}
	if(does_it_exist(document.form1.wall_f)){	
		document.form1.wall_f.value = "";	
	}
	if(does_it_exist(document.form1.wall_g)){	
		document.form1.wall_g.value = "";	
	}
	
	
	uncheck_all_radio_drq("closet_type");
	uncheck_all_drq("obstructions");
	uncheck_all_drq("shoes");
	uncheck_all_drq("shoe_storage");
	uncheck_all_drq("accessories");
	uncheck_all_drq("bottle_size");
	uncheck_all_drq("wine_feat");
	uncheck_all_drq("color");
	//alert("clear_fields");
}

</script>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
