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
require_once($real_root.'/includes/class.nav.php');
$progress = new SetupProgress;
$module = new Module;
$nav = new Nav;
$page_title = "Edit Top Category";
$page_group = "t-cat";

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
/*
if(isset($_GET['firstload'])){
	unset($_SESSION['temp_fields']);
	unset($_SESSION['temp_attr_ids']);
	unset($_SESSION['temp_cats']);
	unset($_SESSION['cat_id']);	
	unset($_SESSION['img_id']);	
}
*/
$pagenum = (isset($_GET['pagenum'])) ? $_GET['pagenum'] : 0;
if(!isset($_SESSION['paging']['pagenum'])) $_SESSION['paging']['pagenum'] = $pagenum;
$sortby = (isset($_GET['sortby'])) ? $_GET['sortby'] : 0;
if(!isset($_SESSION['paging']['sortby'])) $_SESSION['paging']['sortby'] = $sortby;
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 0;
if(!isset($_SESSION['paging']['a_d'])) $_SESSION['paging']['a_d'] = $a_d;
$truncate = (isset($_GET['truncate'])) ? $_GET['truncate'] : 0;
if(!isset($_SESSION['paging']['truncate'])) $_SESSION['paging']['truncate'] = $truncate;
$cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id'] : 0;
if(!isset($_SESSION['cat_id'])) $_SESSION['cat_id'] = $cat_id;
$search_str = (isset($_GET['search_str'])) ? addslashes($_GET['search_str']) : ''; 
if(!isset($_SESSION['search_str'])) $_SESSION['search_str'] = $search_str;
$strip =  (isset($_GET['strip'])) ? $_GET['strip'] : 0;
if(!isset($_SESSION['strip'])) $_SESSION['strip'] = $strip;
if(isset($_GET['sel_img_id']) && isset($_GET['img_type'])){
	$_SESSION['img_id'] = $_GET['sel_img_id'];
}

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

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

//if(!isset($_SESSION['temp_gallery'])){
	$_SESSION['temp_gallery'] = array();
	$sql = "SELECT img_id
			FROM cat_gallery
			WHERE cat_id = '".$_SESSION['cat_id']."'";
	$result = $dbCustom->getResult($db,$sql);	
	while($row = $result->fetch_object()){
		$_SESSION['temp_gallery'][] = $row->img_id;
	}
//}

/*
if(isset($_SESSION['temp_fields']['sub_1_img_id'])){
	echo "<br />sub_1_img_id ".$_SESSION['temp_fields']['sub_1_img_id'];
}
if(isset($_SESSION['temp_fields']['sub_2_img_id'])){
	echo "<br />sub_2_img_id ".$_SESSION['temp_fields']['sub_2_img_id'];
}
if(isset($_SESSION['temp_fields']['sub_3_img_id'])){
	echo "<br />sub_3_img_id ".$_SESSION['temp_fields']['sub_3_img_id'];
}
*/

if(!isset($_SESSION['img_type'])){
	$_SESSION['img_type'] = 'cart';
}

if($_SESSION['img_type'] == 'gallery' && $_SESSION['gal_img_id'] > 0){		
	if(!in_array($_SESSION['gal_img_id'],$_SESSION['temp_gallery'])){
		$_SESSION['temp_gallery'][count($_SESSION['temp_gallery'])] = $_SESSION['gal_img_id'];
	}
}

if(isset($_GET['delgalleryimgid'])){
	$key = array_search($_GET['delgalleryimgid'],$_SESSION['temp_gallery']);
	if($key!==false){
		unset($_SESSION['temp_gallery'][$key]);
		$_SESSION['temp_gallery'] = array_values($_SESSION['temp_gallery']);
	}
}

if(!isset($_SESSION['temp_fields']['svg_id'])) $_SESSION['temp_fields']['svg_id'] = 0;

if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = 0;

if(!isset($_SESSION['temp_fields']['sub_1_img_id'])){ 
	$_SESSION['temp_fields']['sub_1_img_id'] = 0;	
}
if(!isset($_SESSION['temp_fields']['sub_2_img_id'])){
	$_SESSION['temp_fields']['sub_2_img_id'] = 0;	
}
if(!isset($_SESSION['temp_fields']['sub_3_img_id'])){
	$_SESSION['temp_fields']['sub_3_img_id'] = 0;	
}

if(!isset($_SESSION['temp_fields']['sub_1_text'])) $_SESSION['temp_fields']['sub_1_text'] = '';	
if(!isset($_SESSION['temp_fields']['sub_2_text'])) $_SESSION['temp_fields']['sub_2_text'] = '';	
if(!isset($_SESSION['temp_fields']['sub_3_text'])) $_SESSION['temp_fields']['sub_3_text'] = '';	

if(!isset($_SESSION['temp_fields']['spec_color_1'])) $_SESSION['temp_fields']['spec_color_1'] = 0;	
if(!isset($_SESSION['temp_fields']['spec_color_2'])) $_SESSION['temp_fields']['spec_color_2'] = 0;	
if(!isset($_SESSION['temp_fields']['spec_color_3'])) $_SESSION['temp_fields']['spec_color_3'] = 0;	

if(!isset($_SESSION['temp_fields']['spec_materials'])) $_SESSION['temp_fields']['spec_materials'] = '';	

if(!isset($_SESSION['temp_fields']['spec_tips'])) $_SESSION['temp_fields']['spec_tips'] = '';	


if(!isset($_SESSION['temp_fields']['useful_link_1'])) $_SESSION['temp_fields']['useful_link_1'] = '';	

if(!isset($_SESSION['temp_fields']['useful_link_2'])) $_SESSION['temp_fields']['useful_link_2'] = '';	

if(!isset($_SESSION['temp_fields']['useful_link_3'])) $_SESSION['temp_fields']['useful_link_3'] = '';	






if(!isset($_SESSION['temp_fields']['name'])) $_SESSION['temp_fields']['name'] = '';	
if(!isset($_SESSION['temp_fields']['short_name'])) $_SESSION['temp_fields']['short_name'] = '';	
if(!isset($_SESSION['temp_fields']['tool_tip'])) $_SESSION['temp_fields']['tool_tip'] = '';	
if(!isset($_SESSION['temp_fields']['description'])) $_SESSION['temp_fields']['description'] = '';	
if(!isset($_SESSION['temp_fields']['show_on_home_page'])) $_SESSION['temp_fields']['show_on_home_page'] = 0;	
if(!isset($_SESSION['temp_fields']['show_in_cart'])) $_SESSION['temp_fields']['show_in_cart'] = 0;	
if(!isset($_SESSION['temp_fields']['show_in_showroom'])) $_SESSION['temp_fields']['show_in_showroom'] = 0;	
if(!isset($_SESSION['temp_fields']['img_alt_text'])) $_SESSION['temp_fields']['img_alt_text'] = '';	
if(!isset($_SESSION['temp_fields']['key_words'])) $_SESSION['temp_fields']['key_words'] = '';
if(!isset($_SESSION['temp_fields']['profile_cat_id'])) $_SESSION['temp_fields']['profile_cat_id'] = 0;
if(!isset($_SESSION['temp_fields']['showroom_item_display_priority'])) $_SESSION['temp_fields']['showroom_item_display_priority'] = '';


require_once($real_root.'/manage/admin-includes/doc_header.php'); 
//iyk23xxriyqcd2gt44r230a2yjinya99cx1kd3tk9huatz50

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
	var attr_str = '';
	var cat_str = '';
	
	if(does_exist(document.form1.name)){
		query_str += "&name="+document.form1.name.value+'YYY';	
	}
	if(does_exist(document.form1.short_name)){
		query_str += "&short_name="+document.form1.short_name.value;	
	}
	if(does_exist(document.form1.tool_tip)){
		query_str += "&tool_tip="+document.form1.tool_tip.value;	
	}
	if(does_exist(document.form1.img_alt_text)){
		query_str += "&img_alt_text="+document.form1.img_alt_text.value;	
	}
	if(does_exist(document.form1.key_words)){
		query_str += "&key_words="+document.form1.key_words.value;	
	}
	
	if(does_exist(document.form1.description)){
		var myContent = tinymce.get("description").getContent();
		query_str += "&description="+myContent;
	}
	if(does_exist(document.form1.sub_1_img_id)){
		query_str += "&sub_1_img_id="+document.form1.sub_1_img_id.value;	
	}
	if(does_exist(document.form1.sub_1_text)){
		var myContent = tinymce.get("sub_1_text").getContent();
		query_str += "&sub_1_text="+myContent;
	}
	if(does_exist(document.form1.sub_2_img_id)){
		query_str += "&sub_2_img_id="+document.form1.sub_2_img_id.value;	
	}
	if(does_exist(document.form1.sub_2_text)){
		var myContent = tinymce.get("sub_2_text").getContent();
		query_str += "&sub_2_text="+myContent;
	}
	if(does_exist(document.form1.sub_3_img_id)){
		query_str += "&sub_3_img_id="+document.form1.sub_3_img_id.value;	
	}
	if(does_exist(document.form1.sub_3_text)){
		var myContent = tinymce.get("sub_3_text").getContent();
		query_str += "&sub_3_text="+myContent;
	}
	if(does_exist(document.form1.spec_materials)){
		var myContent = tinymce.get("spec_materials").getContent();
		query_str += "&spec_materials="+myContent;

	}
	if(does_exist(document.form1.spec_tips)){
		var myContent = tinymce.get("spec_tips").getContent();
		query_str += "&spec_tips="+myContent;

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
		alert(cc);
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
		alert(cc);
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
		alert(cc);
		query_str += "&spec_color_3="+cc;
	}

	return query_str;
}


function testAjax() {
  alert("testAjax");
	/*
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_cat_session.php',
	  success: function(data) {
		  
		alert("data: ");
		
	  }
	});
*/	
}



function set_cat_session(){

	//alert("zzzx");
	//var t = testAjax();
	//alert("testAjax:   "+t);
	var q_str = "?action=1"+get_query_str();	
	//alert(q_str);
	
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_cat_session.php'+q_str,
	  success: function(data) {
		  
		alert("data: "+data);
		
	  }
	});	
	
}

function test(){
	
	alert("TYTYT");
	
}

</script>

</head>
<body>


<?php

//require_once($real_root.'/manage/admin-includes/manage-header.php');
?>
<!--
?action=1
	&name=Stanz Mark
	&short_name=Short name for website navigation
	&tool_tip=
	&img_alt_text=Image Alt Tag text
	&key_words=&description=
<a class="btn btn-primary" onClick="set_cat_session();">UUUUUUUUU</a>
-->


<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php
		require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
		?>
	</div>
	<div class="manage_main">
<?php
	$url_str = "t-category.php";
	$url_str .= "?pagenum=".$_SESSION['paging']['pagenum'];
	$url_str .= "&sortby=".$_SESSION['paging']['sortby'];
	$url_str .= "&a_d=".$_SESSION['paging']['a_d'];
	$url_str .= "&truncate=".$_SESSION['paging']['truncate'];
	$url_str .= "&search_str=".$_SESSION['search_str'];
?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" onSubmit="return validate(this)"  enctype="multipart/form-data" target="_top">
	<input type="hidden" name="text" value="<?php echo $_SESSION['img_id']; ?>" />
    <input type="hidden" name="add_t_cat" value="1">  
		
		

<a class="btn" style="float:left; margin:30px;" 
href="<?php echo SITEROOT;?>manage/catalog/categories/t-category.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" 

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">			
<table cellpadding="10" width="100%" border="1">
<tr>
<td width="15%">SVG ICON</td>
<td>
<?php
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT * 
		FROM svg
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
echo "<select id='svg_id' name='svg_id'>";
while($row = $result->fetch_object()) {		
	$selected = ($_SESSION['temp_fields']['svg_id']  == $row->svg_id)? "selected" : '';
	echo "<option value='".$row->svg_id."' $selected>".$row->name."</option>";
}
echo "</select>";			

?>
</td>
</tr>
<tr>
<td>
Main Image
</td>
<td>
<?php

echo "img_id: ".$_SESSION['img_id'];
echo "<br />";

$sql = "SELECT file_name FROM image WHERE img_id = '".$_SESSION['img_id']."'";
$img_res = $dbCustom->getResult($db,$sql);							
if($img_res->num_rows){
	$img_obj = $img_res->fetch_object();
	echo "<br />";
	echo $img_obj->file_name;
	echo "<br />";
	
	$img_str = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$img_obj->file_name;
	
	echo $img_str;
	echo "<br />";
	
	echo "<img width='50%' src='".$img_str."'>";	
}
//echo $sql;
?>
</td>
</tr>

<tr>
<td></td>
<td>
<?php 
$_SESSION['crop_n'] = 1;				
$_SESSION['img_type'] = 'cart';
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories";
$url_str .= "&cat_id=".$_SESSION['cat_id'];
$url_str .= "&img_id=".$_SESSION['img_id'];
$url_str .= "&img_type=cart";


?>
<a style="margin:30px; color:#52ffff;font: small-caps bold 24px/1 sans-serif;" 
onClick="set_cat_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Main Image</a>
<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories"; 
$url_str .= "&cat_id=".$_SESSION['cat_id'];
$url_str .= "&img_id=".$_SESSION['img_id'];
$url_str .= "&img_type=main";
                  
?>                    
<a style="margin:30px; color:#52ffff;font: small-caps bold 24px/1 sans-serif;" 
class="btn btn-info" href="<?php echo $url_str; ?>">Select Main Image </a>
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
<td>Category Name</td>
<td><input id="name" id="name" style="width:96%;" name="name" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['name']); ?>" />
</td>
</tr>

<tr>
<td>Short Name</td>
<td><input id="short_name" style="width:96%;" name="short_name" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['short_name']); ?>" />
</td>
</tr>

<tr>
<td>Tool Tip</td>
<td><input id="tool_tip" style="width:96%;" name="tool_tip" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['tool_tip']); ?>" />
</td>
</tr>

<tr>
<td>Key Words</td>
<td><input id="key_words" style="width:96%;" name="key_words" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['key_words']); ?>" />
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
$_SESSION['crop_n'] = 0;				
$_SESSION['img_type'] = 'sub_1_img_id';
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories";
$url_str .= "&img_type=sub_1_img_id";
$url_str .= "&cat_id=".$_SESSION['cat_id'];


echo "sub_1_img_id: ".$_SESSION['temp_fields']['sub_1_img_id'];
echo "<br />";

$file_name = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_1_img_id']);
echo "file_name:  ".$file_name;
echo "<br />";
echo "<img width='40%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
echo "<br />";
echo "<a href='edit-t-category.php?remove=sub_1_img_id'>Remove</a>";
?>

<input id="sub_1_img_id" style="width:6%;" name="sub_1_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_1_img_id']; ?>" />
<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px; "
onClick="set_cat_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Spec Image 1</a>


<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories"; 
$url_str .= "&cat_id=".$_SESSION['cat_id'];
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
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories";
$url_str .= "&img_type=sub_2_img_id";
$url_str .= "&cat_id=".$_SESSION['cat_id'];

$file_name = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_2_img_id']);
echo "file_name:  ".$file_name;
echo "<br />";
echo "<img width='40%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
echo "<br />";

?>
<br />
<input id="sub_2_img_id" style="width:6%;" name="sub_2_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_2_img_id']; ?>" />

<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px; " 
onClick="set_cat_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Spec Image 2</a>

<?php

$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories"; 
$url_str .= "&cat_id=".$_SESSION['cat_id'];
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
$_SESSION['crop_n'] = 0;				
$_SESSION['img_type'] = 'sub_3_img_id';
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories";
$url_str .= "&img_type=sub_3_img_id";
$url_str .= "&cat_id=".$_SESSION['cat_id'];

$file_name = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_3_img_id']);
echo "file_name:  ".$file_name;
echo "<br />";
echo "<img width='40%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
echo "<br />";

?>
<br />
<input id="sub_3_img_id" style="width:6%;" name="sub_3_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_3_img_id']; ?>" />

<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px; " 
onClick="set_cat_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Spec Image 3</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories"; 
$url_str .= "&cat_id=".$_SESSION['cat_id'];
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
<td>Spec Color 1<?php echo stripslashes($_SESSION['temp_fields']['spec_color_1']); ?></td>
<td>
<input id="spec_color_1" type="color" name="spec_color_1" 
value="<?php echo stripslashes($_SESSION['temp_fields']['spec_color_1']); ?>">
</td>
</tr>

<tr>
<td>Spec Color 2<?php echo stripslashes($_SESSION['temp_fields']['spec_color_2']); ?></td>
<td>
<input id="spec_color_2" type="color" name="spec_color_2" 
value="<?php echo stripslashes($_SESSION['temp_fields']['spec_color_2']); ?>">
</td>
</tr>

<tr>
<td>Spec Color 3<?php echo stripslashes($_SESSION['temp_fields']['spec_color_3']); ?></td>
<td>
<input id="spec_color_3" type="color" name="spec_color_3" 
value="<?php echo stripslashes($_SESSION['temp_fields']['spec_color_3']); ?>">
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
<?php 


  
foreach($_SESSION['temp_gallery'] as $val){
	$sql = "SELECT file_name FROM image
			WHERE img_id = '".$val."'";
	$img_res = $dbCustom->getResult($db,$sql);
	if($img_res->num_rows > 0){
		$img_obj = $img_res->fetch_object();
		echo $img_obj->file_name;
		echo "<hr />";
		echo "<img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$img_obj->file_name."'>";			
		echo "<a href='edit-t-category.php?delgalleryimgid=".$val."#img' class='btn btn-small btn-danger'>DEL</a>";
		echo "<hr />";
	}
}
$url_str= SITEROOT."manage/upload-pre-crop.php";               								
$url_str.= "?ret_page=edit-t-category";
$url_str.= "&ret_dir=categories";
$url_str.= "&ret_path=catalog/categories";
$url_str.= "&img_type=gallery";
$url_str.= "&cat_id=".$_SESSION['cat_id'];
$url_str.= "&img_id=".$_SESSION['img_id'];
?>
<a onClick="set_cat_session();" style="margin:30px; color:#52ffff;font: small-caps bold 24px/1 sans-serif;" 
class="btn btn-info" href="<?php echo $url_str; ?>">Upload Gallery Image </a>						
<?php
$url_str= SITEROOT."manage/catalog/select-image.php";               				
$url_str.= "?ret_page=edit-t-category";
$url_str.= "&ret_dir=categories";
$url_str.= "&ret_path=catalog/categories";
$url_str.= "&img_type=gallery";
$url_str.= "&cat_id=".$_SESSION['cat_id'];
?>                    
<a onClick="set_cat_session();" style="margin:30px; color:#52ffff;font: small-caps bold 24px/1 sans-serif;" 
class="btn btn-info" href="<?php echo $url_str; ?>">Select Gallery Image </a>

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">			



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

