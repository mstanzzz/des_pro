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
$page_title = "Edit Top Category";
$page_group = "t-cat";

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
if(isset($_GET['firstload'])){
//if(0){	
	unset($_SESSION['temp_fields']);
	unset($_SESSION['temp_attr_ids']);
	unset($_SESSION['temp_cats']);
	unset($_SESSION['cat_id']);	
	unset($_SESSION['img_id']);	
}

$_SESSION['crop_n']=1;

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

$_SESSION['img_id']=(isset($_GET['img_id']))?$_GET['img_id']:0;


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


if(!isset($_SESSION['img_type']))$_SESSION['img_type'] = 'cart';

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

if(!isset($_SESSION['temp_gallery'])){
	$_SESSION['temp_gallery'] = array();
	$sql = "SELECT img_id
			FROM cat_gallery
			WHERE cat_id = '".$_SESSION['cat_id']."'";
	$result = $dbCustom->getResult($db,$sql);	
	while($row = $result->fetch_object()){
		$_SESSION['temp_gallery'][] = $row->img_id;
	}
}

if(isset($_GET['delgalleryimgid'])){
	$key = array_search($_GET['delgalleryimgid'],$_SESSION['temp_gallery']);
	if($key!==false){
		unset($_SESSION['temp_gallery'][$key]);
		$_SESSION['temp_gallery'] = array_values($_SESSION['temp_gallery']);
	}
}

$sql = sprintf("SELECT * FROM category WHERE cat_id = '%u'", $_SESSION['cat_id']);
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$name = $object->name;
	$short_name = $object->short_name;
	$tool_tip = $object->tool_tip;

	$short_description = $object->short_description;

	$description = $object->description;
	$show_on_home_page = $object->show_on_home_page;
	$show_in_cart = $object->show_in_cart;
	$show_in_showroom = $object->show_in_showroom;
	$img_id = $object->img_id;
	$img_alt_text = $object->img_alt_text;
	$key_words = $object->key_words;
	$profile_cat_id = $object->profile_cat_id;
	$showroom_item_display_priority = $object->showroom_item_display_priority;
	$svg_id = $object->svg_id;
	if($_SESSION['img_id'] == 0)$_SESSION['img_id'] = $img_id;
 	
	$custom1 = $object->custom1;
	$custom2 = $object->custom2;
	$custom3 = $object->custom3;

}else{
	$name = '';
	$short_name = '';
	$tool_tip = '';
	$short_description='';
	$description = '';
	$show_on_home_page = '';		
	$show_in_cart = '';
	$show_in_showroom = '';
	$img_id = 0;
	$img_alt_text = '';
	$key_words = '';
	$profile_cat_id = '';
	$showroom_item_display_priority = 1;

	$custom1 = '';
	$custom2 = '';
	$custom3 = '';

}



if(!isset($_SESSION['temp_fields']['svg_id'])){
	$_SESSION['temp_fields']['svg_id'] = $svg_id;
}
if(!isset($_SESSION['temp_fields']['name'])) $_SESSION['temp_fields']['name'] = $name;	
if(!isset($_SESSION['temp_fields']['short_name'])) $_SESSION['temp_fields']['short_name'] = $short_name;	
if(!isset($_SESSION['temp_fields']['tool_tip'])) $_SESSION['temp_fields']['tool_tip'] = $tool_tip;	
if(!isset($_SESSION['temp_fields']['description'])) $_SESSION['temp_fields']['description'] = $description;	
if(!isset($_SESSION['temp_fields']['show_on_home_page'])) $_SESSION['temp_fields']['show_on_home_page'] = $show_on_home_page;	
if(!isset($_SESSION['temp_fields']['show_in_cart'])) $_SESSION['temp_fields']['show_in_cart'] = $show_in_cart;	
if(!isset($_SESSION['temp_fields']['show_in_showroom'])) $_SESSION['temp_fields']['show_in_showroom'] = $show_in_showroom;	
if(!isset($_SESSION['temp_fields']['img_alt_text'])) $_SESSION['temp_fields']['img_alt_text'] = $img_alt_text;	
if(!isset($_SESSION['temp_fields']['key_words'])) $_SESSION['temp_fields']['key_words'] = $key_words;
if(!isset($_SESSION['temp_fields']['profile_cat_id'])) $_SESSION['temp_fields']['profile_cat_id'] = $profile_cat_id;
if(!isset($_SESSION['temp_fields']['showroom_item_display_priority'])) $_SESSION['temp_fields']['showroom_item_display_priority'] = $showroom_item_display_priority;

if(!isset($_SESSION['temp_fields']['custom1'])) $_SESSION['temp_fields']['custom1'] = $custom1;	
if(!isset($_SESSION['temp_fields']['custom2'])) $_SESSION['temp_fields']['custom2'] = $custom2;	
if(!isset($_SESSION['temp_fields']['custom3'])) $_SESSION['temp_fields']['custom3'] = $custom3;	
if(!isset($_SESSION['temp_fields']['short_description'])) $_SESSION['temp_fields']['short_description'] = $short_description;	



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
	/*
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
		query_str += "&description="+tinyMCE.get('description').getContent();
	}
	
	if(does_exist(document.form1.img_id)){
		query_str += "&img_id="+document.form1.img_id.value;	

	}
	*/
	
	return query_str;
}

function set_cat_session(){
	var q_str = "?action=1"+get_query_str();

	$.ajaxSetup({ cache: false}); 
	//alert(q_str);
	
	$.ajax({
	  url: 'ajax_set_cat_session.php'+q_str,
	  success: function(data) {
		//alert(data);
		
	  }
	});	
}
</script>
</head>
<body>
<?php


if(!$strip){
	require_once($real_root.'/manage/admin-includes/manage-header.php');
}
?>

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
	$url_str .= "&strip=".$strip;

?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" onSubmit="return validate(this)"  
	enctype="multipart/form-data" target="_self">
	<input id="cat_id" type="hidden" name="cat_id" value="<?php echo $_SESSION['cat_id'];  ?>" />
	<input type="hidden" name="img_id" value="<?php echo $_SESSION['img_id']; ?>" />
    <input type="hidden" name="update_t_cat" value="1">  
		

<a class="btn" style="float:left; margin:30px;" 
href="<?php echo $url_str; ?>" >Cancel &amp; Go Back</a>

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">			
<table cellpadding="10" width="100%" border="1">

<tr>
<td width="15%">SVG ICON</td>
<td>
<?php

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT svg_id, name  
		FROM svg
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		AND active > '0' 
		ORDER BY name";
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

$sql = "SELECT file_name FROM image WHERE img_id = '".$_SESSION['img_id']."'";
$img_res = $dbCustom->getResult($db,$sql);							
if($img_res->num_rows){
	$img_obj = $img_res->fetch_object();
	$img_str = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$img_obj->file_name;
	echo "<img width='50%' src='".$img_str."'>";	
}
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
$url_str .= "&crop_n=1";
$url_str .= "&strip=".$strip;


?>
<a onClick="set_cat_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Main Image</a>
<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-t-category";
$url_str .= "&ret_path=catalog/categories";
$url_str .= "&ret_dir=categories"; 
$url_str .= "&cat_id=".$_SESSION['cat_id'];
$url_str .= "&img_id=".$_SESSION['img_id'];
$url_str .= "&img_type=main";
$url_str .= "&strip=".$strip;
                  
?>                    
<a onClick="set_cat_session()" href="<?php echo $url_str; ?>" class="btn btn-info" >Select Main Image </a>
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
<td>
TOP custom1
</td>
<td>
<input id="custom1" style="width:96%;" type="text"  name="custom1" 
value="<?php echo stripslashes($_SESSION['temp_fields']['custom1']); ?>"/>
</td>
</tr>

<tr>
<td>
TOP custom2
</td>
<td>
<input id="custom2" style="width:96%;" type="text"  name="custom2" 
value="<?php echo stripslashes($_SESSION['temp_fields']['custom2']); ?>"/>
</td>
</tr>
<tr>
<td>
TOP custom3
</td>
<td>
<input id="custom3" style="width:96%;" type="text"  name="custom3" 
value="<?php echo stripslashes($_SESSION['temp_fields']['custom3']); ?>"/>
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
<td>URL ID Number</td>
<td><input id="profile_cat_id" name="profile_cat_id" style="width:96%;" name="profile_cat_id" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['profile_cat_id']); ?>" />
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
<td>Above Description</td>
<td>
short_description
<textarea id="short_description" name="short_description" style="width:96%; height:100px;" /><?php echo stripslashes($_SESSION['temp_fields']['short_description']); ?></textarea>
</td>
</tr>

<tr>
<td>Main Description</td>
<td>
<textarea id="description" name="description" style="width:96%; height:400px;" /><?php echo stripslashes($_SESSION['temp_fields']['description']); ?></textarea>
</td>
</tr>

</table>

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">			



</form>
</div>
<p class="clear"></p>
</div>


<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>



