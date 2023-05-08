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

function get_file_name($dbCustom,$img_id){
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

if(isset($_GET['firstload'])){
//if(0){	
	unset($_SESSION['temp_fields']);
	
	unset($_SESSION['feat_gallery']);

	$_SESSION['img_type']="gallery";
	$_SESSION['img_id']=0;
	$_SESSION['gal_img_id']=0;
	$_SESSION['feat_id']=0;
}

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$feat_id = (isset($_GET['feat_id'])) ? $_GET['feat_id'] : 0;
if(!is_numeric($feat_id))$feat_id=0;
if($_SESSION['feat_id']<1)$_SESSION['feat_id']=$feat_id;

$img_id = (isset($_GET['img_id'])) ? $_GET['img_id'] : 0;
if(!is_numeric($img_id)) $img_id = 0;
if($img_id > 0){
	$_SESSION['img_id'] = $img_id;
}
if(!isset($_SESSION['img_id']))$_SESSION['img_id']=0;


$db = $dbCustom->getDbConnect(CART_N_DATABASE);


if(!isset($_SESSION['feat_gallery'])){
	$_SESSION['feat_gallery']=array();
	$sql = "SELECT img_id FROM feat_gallery WHERE feat_id = '".$_SESSION['feat_id']."'"; 
	$result = $dbCustom->getResult($db,$sql);
	while($row = $result->fetch_object()){		
		$_SESSION['feat_gallery'][]=$row->img_id;
	}
}

if(isset($_GET['delgalleryimgid'])){
	$key = array_search($_GET['delgalleryimgid'],$_SESSION['feat_gallery']);
	if($key!==false){
		unset($_SESSION['feat_gallery'][$key]);
		$_SESSION['feat_gallery'] = array_values($_SESSION['feat_gallery']);
	}
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


$sql = "SELECT * FROM feat WHERE feat_id = '".$_SESSION['feat_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$title = $object->title;
	$sub_title = $object->sub_title;
	$svg_id = $object->svg_id;
	$sub_1_title = $object->sub_1_title;
	$text = $object->text;
	$img_id = $object->img_id;

}else{
	$title = '';
	$sub_title = '';
	$svg_id = 0;
	$sub_1_title = '';
	$text = '';
	$img_id=0;
}

if($_SESSION['img_id'] < 1)$_SESSION['img_id']=$img_id;

if(!isset($_SESSION['temp_fields']['svg_id'])) $_SESSION['temp_fields']['svg_id'] = $svg_id;	
if(!isset($_SESSION['temp_fields']['title'])) $_SESSION['temp_fields']['title'] = $title;	
if(!isset($_SESSION['temp_fields']['sub_title'])) $_SESSION['temp_fields']['sub_title'] = $sub_title;	
if(!isset($_SESSION['temp_fields']['sub_1_title'])) $_SESSION['temp_fields']['sub_1_title'] = $sub_1_title;	
if(!isset($_SESSION['temp_fields']['text'])) $_SESSION['temp_fields']['text'] = $text;	


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

	if(does_exist(document.form1.svg_id)){
		query_str += "&svg_id="+document.form1.svg_id.value; 
	}
	if(does_exist(document.form1.title)){
		query_str += "&title="+document.form1.title.value; 
	}
	if(does_exist(document.form1.sub_title)){
		query_str += "&sub_title="+document.form1.sub_title.value; 
	}

	if(does_exist(document.form1.sub_1_title)){
		query_str += "&sub_1_title="+document.form1.sub_1_title.value; 
	}
	
	if(does_exist(document.form1.text)){
		query_str += "&text="+escape(tinyMCE.get('text').getContent());
	}
	
	return query_str;
}


function set_feat_session(){
	var q_str = "?action=1"+get_query_str();	

//alert(q_str);

	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_spec_session.php'+q_str,
	  success: function() {
		//alert("data: ");
	  }
	});
}

</script>


</head>
<body>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php
		if(!$strip){
			require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
		}
		?>
	</div>
	<div class="manage_main">
<?php

$disabled = '';
$block = '';

if($strip){
	$target="_self";
}else{
	$target="_top";
}

$url_str = "feats-list.php";
$url_str .= "?pagenum=".$_SESSION['paging']['pagenum'];
$url_str .= "&sortby=".$_SESSION['paging']['sortby'];
$url_str .= "&a_d=".$_SESSION['paging']['a_d'];
$url_str .= "&truncate=".$_SESSION['paging']['truncate'];
$url_str .= "&strip=".$strip;
echo "strip: ".$strip;
?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" 
	onSubmit="return validate(this)"  enctype="multipart/form-data"  target="<?php echo $target; ?>">
    <input type="hidden" name="update_feat" value="1">  
    <input type="hidden" name="feat_id" value="<?php echo $_SESSION['feat_id']; ?>">  

<a class="btn" style="float:left; margin:30px;" 
href="<?php echo $url_str;?>" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" 

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">	


<table cellpadding="10" width="100%" border="1">
<tr>
<td width="30%"></td>
<td></td>
</tr>

<tr>
<td>Icon</td>
<td>
<label for="cars">Choose an Icon</label>

<select id="svg_id" name="svg_id">
  <option value="0">Select</option>
<?php
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT * 
		FROM svg
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()) {		

	$sel=($row->svg_id == $_SESSION['temp_fields']['svg_id'])?"selected":"";
	echo "<option value='".$row->svg_id."' ".$sel.">".$row->name."</option>";
}
?> 
</select>
</td>
</tr>

<tr>
<td> Title</td>
<td><input id="title" style="width:96%;" name="title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['title']); ?>" />
</td>
</tr>

<tr>
<td> Sub Title</td>
<td><input id="sub_title" style="width:96%;" name="sub_title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['sub_title']); ?>" />
</td>
</tr>


<tr>
<td> Main Image</td>
<td>
<?php

$file_name = get_file_name($dbCustom, $_SESSION['img_id']);
echo "<img width='30%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
?></td>
</tr>


<tr>
<td>Main Image</td>
<td>
<?php 

$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&feat_id=".$_SESSION['feat_id'];
$url_str .= "&img_type=cart";
$url_str .= "&strip=".$strip;
?>
<input id="img_id" style="width:6%;" name="img_id" type="text" value="<?php echo $_SESSION['img_id']; ?>" />


<a onClick="set_feat_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Image</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&feat_id=".$_SESSION['feat_id']; 
$url_str .= "&img_type=cart";
$url_str .= "&strip=".$strip;
?>
<a onClick="set_feat_session();"
class="btn btn-info" href="<?php echo $url_str; ?>">Select Image</a>
</td>
</tr>


<tr>
<td> Sub Object Title</td>
<td><input id="sub_1_title" style="width:96%;" name="sub_1_title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['sub_1_title']); ?>" />
</td>


<tr>
<td>Sub Object Text</td>
<td>
<textarea id="text" style="width:96%; height:200px;" name="text" rows="10" /><?php echo stripslashes($_SESSION['temp_fields']['text']); ?></textarea>
</td>
</tr>

<?php       
foreach($_SESSION['feat_gallery'] as $val){
	$sql = "SELECT file_name FROM image
	WHERE img_id = '".$val."'";
	$img_res = $dbCustom->getResult($db,$sql);
	if($img_res->num_rows > 0){
		$img_obj = $img_res->fetch_object();
		echo "<tr>";

		echo "<td><img width='40%' src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$img_obj->file_name."'></td>";			
		
		echo "<td><a href='edit-feat.php?delgalleryimgid=".$val."#img' class='btn btn-small btn-danger'></a></td>";
		
		echo "</tr>";
	}
}
$url_str= SITEROOT."manage/upload-pre-crop.php";               								
$url_str.= "?ret_page=edit-feat";
$url_str.= "&ret_dir=specs-feat";
$url_str.= "&ret_path=catalog/specs-feat";
$url_str.= "&img_type=gallery";
$url_str .= "&strip=".$strip;
	
?>

<tr>
<td>Gallery Image</td>
<td><a onClick="set_feat_session()" class="btn btn-primary upload" href="<?php echo $url_str; ?>">Upload New Gallery Image </a>
</td>
</tr>


<?php
$url_str= SITEROOT."manage/catalog/select-image.php";               				
$url_str.= "?ret_page=edit-feat";
$url_str.= "&ret_dir=specs-feat";
$url_str.= "&ret_path=catalog/specs-feat";
$url_str.= "&img_type=gallery";
$url_str .= "&strip=".$strip;

?>                    
<tr>
<td>Gallery Image</td>
<td><a onClick="set_feat_session()" class="btn btn-large btn-primary" href="<?php echo $url_str; ?>">Select New Gallery Image </a>
</td>
</tr>


</table>

<input class="btn btn-primary" style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">			

</form>











</div>
<p class="clear"></p>
</div>
</body>
</html>

