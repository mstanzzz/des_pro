
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
</style>


</head>
<body class="clearfix we-design-survey-page">
<main id="maincontent" class="main">


<div class="box-content">


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
		<div style="float:left; cursor: pointer;">
			Other
			<input type="radio" style="display: none;" 
			name="space_shape" value="Other">
		</div>
		
		
		<div style="clear:both; height:10px;"><hr /></div>
		<div id="walls_preview" style="">
		
		</div>
</div>

</main>

<script>

function set_wall_meas_content(shape) {
	document.getElementById(shape).checked = true;
	//document.getElementById('addit').focus();

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



</script>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
