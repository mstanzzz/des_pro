<?php
if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){ 
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/solvitware';
}elseif(strpos($_SERVER['REQUEST_URI'], 'designitpro' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/designitpro'; 
}elseif(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/storittek'; 
}else{
	$real_root = $_SERVER['DOCUMENT_ROOT']; 	
}
require_once($real_root.'/includes/class.dbcustom.php');
$dbCustom = new DbCustom();

require_once($real_root.'/manage/admin-includes/manage-includes.php');
$progress = new SetupProgress;
$module = new Module;
$page_title = "Add specs_feat";
$page_group = "specs_feat";

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
if(isset($_GET['firstload'])){
//if(0){	
	unset($_SESSION['temp_fields']);
	unset($_SESSION['svg_id_array']);
}

if(!isset($_SESSION['svg_id_array'])) $_SESSION['svg_id_array'] = array();


function get_file_name($dbCustom,$img_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT file_name
			FROM image
			WHERE img_id = '".$img_id."'";
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		return  $object->file_name;
	}
	return  '';
}

$pagenum = (isset($_GET['pagenum'])) ? $_GET['pagenum'] : 0;
if(!isset($_SESSION['paging']['pagenum'])) $_SESSION['paging']['pagenum'] = $pagenum;
$sortby = (isset($_GET['sortby'])) ? $_GET['sortby'] : 0;
if(!isset($_SESSION['paging']['sortby'])) $_SESSION['paging']['sortby'] = $sortby;
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 0;
if(!isset($_SESSION['paging']['a_d'])) $_SESSION['paging']['a_d'] = $a_d;
$truncate = (isset($_GET['truncate'])) ? $_GET['truncate'] : 0;
if(!isset($_SESSION['paging']['truncate'])) $_SESSION['paging']['truncate'] = $truncate;
$search_str = (isset($_GET['search_str'])) ? addslashes($_GET['search_str']) : ''; 
if(!isset($_SESSION['search_str'])) $_SESSION['search_str'] = $search_str;
$strip =  (isset($_GET['strip'])) ? $_GET['strip'] : 0;
if(!isset($_SESSION['strip'])) $_SESSION['strip'] = $strip;
if(!isset($_SESSION['temp_fields']['svg_id'])){
	$_SESSION['temp_fields']['svg_id'] = 0;
}
if(!isset($_SESSION['temp_fields']['sub_1_img_id'])){ 
	$_SESSION['temp_fields']['sub_1_img_id'] = 0;	
}
if(!isset($_SESSION['temp_fields']['sub_2_img_id'])){
	$_SESSION['temp_fields']['sub_2_img_id'] = 0;	
}
if(!isset($_SESSION['temp_fields']['sub_3_img_id'])){
	$_SESSION['temp_fields']['sub_3_img_id'] = 0;	
}
if(!isset($_SESSION['temp_fields']['sub_1_text'])) $_SESSION['temp_fields']['sub_1_text'] = 0;	
if(!isset($_SESSION['temp_fields']['sub_2_text'])) $_SESSION['temp_fields']['sub_2_text'] = 0;	
if(!isset($_SESSION['temp_fields']['sub_3_text'])) $_SESSION['temp_fields']['sub_3_text'] = 0;	
if(!isset($_SESSION['temp_fields']['spec_color_1'])) $_SESSION['temp_fields']['spec_color_1'] = 0;	
if(!isset($_SESSION['temp_fields']['spec_color_2'])) $_SESSION['temp_fields']['spec_color_2'] = 0;	
if(!isset($_SESSION['temp_fields']['spec_color_3'])) $_SESSION['temp_fields']['spec_color_3'] = 0;	
if(!isset($_SESSION['temp_fields']['spec_materials'])) $_SESSION['temp_fields']['spec_materials'] = '';	
if(!isset($_SESSION['temp_fields']['spec_tips'])) $_SESSION['temp_fields']['spec_tips'] = '';	
if(!isset($_SESSION['temp_fields']['useful_link_1'])) $_SESSION['temp_fields']['useful_link_1'] = '';	
if(!isset($_SESSION['temp_fields']['useful_link_2'])) $_SESSION['temp_fields']['useful_link_2'] = '';	
if(!isset($_SESSION['temp_fields']['useful_link_3'])) $_SESSION['temp_fields']['useful_link_3'] = '';	
if(!isset($_SESSION['temp_fields']['name'])) $_SESSION['temp_fields']['name'] = '';	
if(!isset($_SESSION['temp_fields']['tool_tip'])) $_SESSION['temp_fields']['tool_tip'] = '';	


if(!isset($_SESSION['temp_fields']['short_description'])) $_SESSION['temp_fields']['short_description'] = '';	

if(!isset($_SESSION['temp_fields']['description'])) $_SESSION['temp_fields']['description'] = '';	
if(!isset($_SESSION['temp_fields']['img_alt_text'])) $_SESSION['temp_fields']['img_alt_text'] = '';	

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script src="https://cdn.tiny.cloud/1/iyk23xxriyqcd2gt44r230a2yjinya99cx1kd3tk9huatz50/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false

});
</script>

<!--<script src="https://unpkg.com/.//dist/./.min.js"></script>-->
<script>

function does_exist(ele){
    if (ele !== undefined) {
        return 1;
    }else{
		return 0;
	}
}

function get_query_str(){
	var query_str = '';

	if(does_exist(document.form1.name)){
		query_str += "&name="+document.form1.name.value;	
	}
	if(does_exist(document.form1.tool_tip)){
		query_str += "&tool_tip="+document.form1.tool_tip.value;	
	}
	if(does_exist(document.form1.img_alt_text)){
		query_str += "&img_alt_text="+document.form1.img_alt_text.value;	
	}
	if(does_exist(document.form1.sub_1_img_id)){
		query_str += "&sub_1_img_id="+document.form1.sub_1_img_id.value;	
	}
	if(does_exist(document.form1.sub_2_img_id)){
		query_str += "&sub_2_img_id="+document.form1.sub_2_img_id.value;	
	}
	if(does_exist(document.form1.sub_3_img_id)){
		query_str += "&sub_3_img_id="+document.form1.sub_3_img_id.value;	
	}

	if(does_exist(document.form1.description)){
		//query_str += "&description="+tinyMCE.get('description').getContent();
		var text = tinyMCE.get('description').getContent()
		//text = text.replace(/'/g, "");
		//text = text.replace(/"/g, "'");
		//text = text.replace(/font-family/g, "font");
		text = escape(text);
		//alert(text);
		query_str += "&description="+text;
	}
	if(does_exist(document.form1.sub_1_text)){
		//query_str += "&sub_1_text="+tinyMCE.get('sub_1_text').getContent();
		var text = tinyMCE.get('sub_1_text').getContent()
		//text = text.replace(/'/g, "");
		//text = text.replace(/"/g, "'");
		//text = text.replace(/font-family/g, "font");
		text = escape(text);
		//alert(text);
		query_str += "&sub_1_text="+text;
	}
	if(does_exist(document.form1.sub_2_text)){
		//query_str += "&sub_2_text="+tinyMCE.get('sub_2_text').getContent();
		var text = tinyMCE.get('sub_2_text').getContent()
		//text = text.replace(/'/g, "");
		//text = text.replace(/"/g, "'");
		//text = text.replace(/font-family/g, "font");
		text = escape(text);
		//alert(text);
		query_str += "&sub_2_text="+text;
	}
	if(does_exist(document.form1.sub_3_text)){
		//query_str += "&sub_3_text="+tinyMCE.get('sub_3_text').getContent();
		var text = tinyMCE.get('sub_3_text').getContent()
		//text = text.replace(/'/g, "");
		//text = text.replace(/"/g, "'");
		//text = text.replace(/font-family/g, "font");
		text = escape(text);
		//alert(text);
		query_str += "&sub_3_text="+text;
	}
	if(does_exist(document.form1.spec_materials)){
		//query_str += "&spec_materials="+tinyMCE.get('spec_materials').getContent();
		var text = tinyMCE.get('spec_materials').getContent()
		//text = text.replace(/'/g, "");
		//text = text.replace(/"/g, "'");
		//text = text.replace(/font-family/g, "font");
		text = escape(text);
		//alert(text);
		query_str += "&spec_materials="+text;
	}
	if(does_exist(document.form1.spec_tips)){
		//query_str += "&spec_materials="+tinyMCE.get('spec_materials').getContent();
		var text = tinyMCE.get('spec_tips').getContent()
		//text = text.replace(/'/g, "");
		//text = text.replace(/"/g, "'");
		//text = text.replace(/font-family/g, "font");
		text = escape(text);
		//alert(text);
		query_str += "&spec_tips="+text;
	}

	if(does_exist(document.form1.useful_link_1)){
		query_str += "&useful_link_1="+document.form1.useful_link_1.value;	
	}
	if(does_exist(document.form1.useful_link_2)){
		query_str += "&useful_link_2="+document.form1.useful_link_2.value;	
	}
	if(does_exist(document.form1.useful_link_3)){
		query_str += "&useful_link_3="+document.form1.useful_link_3.value;	
	}

	if(does_exist(document.form1.spec_color_1)){
		var cc = document.form1.spec_color_1.value;
		let re1 = cc.includes("#");
		let re2 = cc.indexOf("#");
		if(re1){
			cc = cc.substring(1)
		}
		if(re2){
			cc = cc.substring(1)
		}
		query_str += "&spec_color_1="+cc;
	}
	
	if(does_exist(document.form1.spec_color_2)){
		var cc = document.form1.spec_color_2.value;
		let re1 = cc.includes("#");
		let re2 = cc.indexOf("#");
		if(re1){
			cc = cc.substring(1)
		}
		if(re2){
			cc = cc.substring(1)
		}
		//alert(cc);
		query_str += "&spec_color_2="+cc;
	}
	if(does_exist(document.form1.spec_color_3)){
		var cc = document.form1.spec_color_3.value;
		let re1 = cc.includes("#");
		let re2 = cc.indexOf("#");
		if(re1){
			cc = cc.substring(1)
		}
		if(re2){
			cc = cc.substring(1)
		}
		//alert(cc);
		query_str += "&spec_color_3="+cc;
	}

	return query_str;
}

function set_cat_session(){
	alert("zzzx");
	var q_str = "?action=1"+get_query_str();	
	//var q_str = "?action=1&name=Mark";	
	//alert(q_str);
	
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_spec_session.php'+q_str,
	  success: function() {
		alert("data: ");
	  }
	});
}

</script>


</head>
<body>

<?php
//require_once($real_root.'/manage/admin-includes/manage-header.php');
$db = $dbCustom->getDbConnect(CART_N_DATABASE);

?>

<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php
		require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
		?>
	</div>
	<div class="manage_main">
<?php

	$url_str = "specs-feat.php";
	$url_str .= "?pagenum=".$_SESSION['paging']['pagenum'];
	$url_str .= "&sortby=".$_SESSION['paging']['sortby'];
	$url_str .= "&a_d=".$_SESSION['paging']['a_d'];
	$url_str .= "&truncate=".$_SESSION['paging']['truncate'];
?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" onSubmit="return validate(this)"  enctype="multipart/form-data" target="_top">
    <input type="hidden" name="add_specs_feat" value="1">  
<a class="btn" style="float:left; margin:30px;" 
href="<?php echo SITEROOT;?>manage/catalog/specs-feat/specs-feat.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" 

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">	



<table border="1" cellpadding="6">
<?php

$disabled = '';
$block = '';
	
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT * 
		FROM svg
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()) {		
		$block .= "<tr>";
		$checked = in_array($row->svg_id, $_SESSION['svg_id_array'])? "checked" : '';
		$block	.= "<td>
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='svg_ids[]' value='".$row->svg_id."' ".$checked." /></div>";
		$block .= "</td>";	
		$block .= "<td>".$row->name."</td>";
		$block .= "<td>".$row->svg_code."</td>";
		$block .= "</tr>";	
}
echo $block;	
?>
</table>




		
<table cellpadding="10" width="100%" border="1">

<tr>
<td> Name</td>
<td><input id="name" style="width:96%;" name="name" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['name']); ?>" />
</td>
</tr>


<tr>
<td>
Image Alt Tag text
</td>
<td>
<input id="img_alt_text" style="width:96%;" type="text"  name="img_alt_text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['img_alt_text']); ?>"/>
</td>
</tr>





<tr>
<td>Tool Tip</td>
<td><input id="tool_tip" style="width:96%;" name="tool_tip" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['tool_tip']); ?>" />
</td>
</tr>


<tr>
<td>Short Description</td>
<td>
<textarea id="short_description" name="short_description" 
style="width:96%; height:400px;" /><?php echo stripslashes($_SESSION['temp_fields']['short_description']); ?></textarea>
</td>
</tr>


<tr>
<td>Description</td>
<td>
<textarea id="description" name="description" style="width:96%; height:400px;" /><?php echo stripslashes($_SESSION['temp_fields']['description']); ?></textarea>
</td>
</tr>

<tr>
<td>sub_1_img_id</td>
<td>
<?php 
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-specs-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&img_type=sub_1_img_id";

$file_name = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_1_img_id']);
echo "<img width='40%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
?>
<input id="sub_1_img_id" style="width:6%;" name="sub_1_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_1_img_id']; ?>" />
<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px; "
onClick="set_cat_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Spec Image 1</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-specs-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&img_type=sub_1_img_id";
?>
<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px;" 
class="btn btn-info" href="<?php echo $url_str; ?>">Select Spec Image 1</a>


</td>
</tr>

<tr>
<td>Spec Sizes 1</td>
<td>

<textarea id="sub_1_text" style="width:96%; height:200px;" name="sub_1_text" rows="10" /><?php echo stripslashes($_SESSION['temp_fields']['sub_1_text']); ?></textarea>

</td>
</tr>

<tr>
<td>sub_2_img_id</td>
<td>
<?php 

$_SESSION['crop_n'] = 0;				
$_SESSION['img_type'] = 'sub_2_img_id';
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-specs-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&img_type=sub_2_img_id";

$file_name = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_2_img_id']);

echo "file_name: ".$file_name;
exit;

echo "<img width='40%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
?>
<br />
<input id="sub_2_img_id" style="width:6%;" name="sub_2_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_2_img_id']; ?>" />

<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px; " 
onClick="set_cat_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Spec Image 2</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-specs-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&img_type=sub_2_img_id";
?>
<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px;" 
class="btn btn-info" href="<?php echo $url_str; ?>">Select Spec image 2 </a>
</td>
</tr>

<tr>
<td>Spec Sizes 2</td>
<td>
<textarea id="sub_2_text" name="sub_2_text" style="width:96%; height:200px;" /><?php echo stripslashes($_SESSION['temp_fields']['sub_2_text']); ?></textarea>
</td>
</tr>



<tr>
<td>sub_3_img_id</td>
<td><input id="sub_3_img_id" style="width:6%;" name="sub_3_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_3_img_id']; ?>" />

<?php 
$_SESSION['img_type'] = 'sub_3_img_id';
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-specs-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&img_type=sub_3_img_id";

$file_name = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_3_img_id']);
echo "<img width='40%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/temp_fields".$file_name."'/>";
?>
<br />
<input id="sub_3_img_id" style="width:6%;" name="sub_3_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_3_img_id']; ?>" />

<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px; " 
onClick="set_cat_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Spec Image 3</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-specs-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&img_type=sub_3_img_id";
?>
<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px;" 
class="btn btn-info" href="<?php echo $url_str; ?>">Select Spec Image 3</a>

</td>
</tr>

<tr>
<td>Spec Sizes 3</td>
<td>
<textarea id="sub_3_text" style="width:96%; height:200px;" name="sub_3_text" rows="10" /><?php echo stripslashes($_SESSION['temp_fields']['sub_3_text']); ?></textarea>
</td>
</tr>

<tr>
<td>Spec Color 1</td>
<td>
<input id="spec_color_1" type="color" name="spec_color_1" 
value="<?php echo stripslashes($_SESSION['temp_fields']['spec_color_1']); ?>">
<span style='margin-left:20px;'>
<?php echo stripslashes($_SESSION['temp_fields']['spec_color_1']); ?>
</span>
</td>
</tr>

<tr>
<td>Spec Color 2<br /></td>
<td>
<input id="spec_color_2" type="color" name="spec_color_2" 
value="<?php echo stripslashes($_SESSION['temp_fields']['spec_color_2']); ?>">
<span style='margin-left:20px;'>
<?php echo stripslashes($_SESSION['temp_fields']['spec_color_2']); ?>
</span>
</td>
</tr>

<tr>
<td>Spec Color 3</td>
<td>
<input id="spec_color_3" type="color" name="spec_color_3" 
value="<?php echo stripslashes($_SESSION['temp_fields']['spec_color_3']); ?>">
<span style='margin-left:20px;'>
<?php echo stripslashes($_SESSION['temp_fields']['spec_color_3']); ?>
</span>
</td>
</tr>

<tr>
<td>Spec Materials</td>
<td>
<textarea id="spec_materials" style="width:96%; height:200px;" name="spec_materials" /><?php echo stripslashes($_SESSION['temp_fields']['spec_materials']); ?></textarea>
</td>
</tr>


<tr>
<td>Useful tips</td>
<td>
<textarea id="spec_tips" style="width:96%; height:200px;" name="spec_tips" /><?php echo stripslashes($_SESSION['temp_fields']['spec_tips']); ?></textarea>
</td>
</tr>

<tr>
<td>
useful_link_1
</td>
<td>
<input id="useful_link_1" style="width:96%;" type="text"  name="useful_link_1" 
value="<?php echo stripslashes($_SESSION['temp_fields']['useful_link_1']); ?>"/>
</td>
</tr>


<tr>
<td>
useful_link_2
</td>
<td>
<input id="useful_link_2" style="width:96%;" type="text"  name="useful_link_2" 
value="<?php echo stripslashes($_SESSION['temp_fields']['useful_link_2']); ?>"/>
</td>
</tr>


<tr>
<td>
useful_link_3
</td>
<td>
<input id="useful_link_3" style="width:96%;" type="text"  name="useful_link_3" 
value="<?php echo stripslashes($_SESSION['temp_fields']['useful_link_3']); ?>"/>
</td>
</tr>;
</table>

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">			

<br />
<br />
<hr />
<table>

<hr />
Select Products to apply this specs/features
<hr /> 

<table border="1" cellpadding="6">
<?php

$disabled = '';
$_SESSION['temp_like_item_array'] = array();

$block = '';
	$sql = "SELECT item_id, img_id, name
			FROM item
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	while($row = $result->fetch_object()){
		$block .= "<tr>";

		
		$checked = in_array($row->item_id, $_SESSION['temp_like_item_array'])? "checked" : '';
		$block	.= "<td align='center' valign='middle' >
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='like_item_ids[]' 
				value='".$row->item_id."' ".$checked." /></div>";
		$block .= "</td>";	

		
		
		
		
		
		$block .= "<td>".$row->name."   ".$checked."</td>";
		$block .= "</tr>";	
		
	}
echo $block;	

		
		//$file_name = get_file_name($dbCustom, $row->img_id);
		//$block .= "<td><img width='200' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/></td>";
	
?>
</table>

<br />
<br />
<br />
<br />

</form>
</div>
 <p class="clear"></p>
    <?php
	if(!$strip){  
    	require_once($real_root.'/manage/admin-includes/manage-footer.php');
	}
	?>
</div>
</body>
</html>

