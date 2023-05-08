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


$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$spec_id = (isset($_GET['spec_id'])) ? $_GET['spec_id'] : 0;
if(!is_numeric($spec_id))$spec_id=0;

if($spec_id>0){
	$_SESSION['spec_id']=$spec_id;
}else{
	$_SESSION['spec_id']=0;	
}

if(isset($_GET['firstload'])){
//if(0){	
	unset($_SESSION['temp_fields']);
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

	
	$title = '';
	$sub_title = '';
	$svg_id = 0;
	$short_description = '';
	$description = '';
	$sub_1_text = '';
	$sub_2_text = '';
	$sub_3_text = '';
	$sub_1_img_id = 0;
	$sub_2_img_id = 0;
	$sub_3_img_id = 0;
	$sub_1_title='';
	$sub_2_title='';
	$sub_3_title='';
	

if(!isset($_SESSION['temp_fields']['sub_1_title'])) $_SESSION['temp_fields']['sub_1_title'] = $sub_1_title;	
if(!isset($_SESSION['temp_fields']['sub_2_title'])) $_SESSION['temp_fields']['sub_2_title'] = $sub_2_title;	
if(!isset($_SESSION['temp_fields']['sub_3_title'])) $_SESSION['temp_fields']['sub_3_title'] = $sub_3_title;	
	

if(!isset($_SESSION['temp_fields']['svg_id'])) $_SESSION['temp_fields']['svg_id'] = $svg_id;	
if(!isset($_SESSION['temp_fields']['title'])) $_SESSION['temp_fields']['title'] = $title;	
if(!isset($_SESSION['temp_fields']['sub_title'])) $_SESSION['temp_fields']['sub_title'] = $sub_title;	

if(!isset($_SESSION['temp_fields']['short_description'])) $_SESSION['temp_fields']['short_description'] = $short_description;	
if(!isset($_SESSION['temp_fields']['description'])) $_SESSION['temp_fields']['description'] = $description;	
if(!isset($_SESSION['temp_fields']['sub_1_text'])) $_SESSION['temp_fields']['sub_1_text'] = $sub_1_text;	
if(!isset($_SESSION['temp_fields']['sub_2_text'])) $_SESSION['temp_fields']['sub_2_text'] = $sub_2_text;	
if(!isset($_SESSION['temp_fields']['sub_3_text'])) $_SESSION['temp_fields']['sub_3_text'] = $sub_3_text;	

if(!isset($_SESSION['temp_fields']['sub_1_img_id'])) $_SESSION['temp_fields']['sub_1_img_id'] = $sub_1_img_id;	
if(!isset($_SESSION['temp_fields']['sub_2_img_id'])) $_SESSION['temp_fields']['sub_2_img_id'] = $sub_2_img_id;	
if(!isset($_SESSION['temp_fields']['sub_3_img_id'])) $_SESSION['temp_fields']['sub_3_img_id'] = $sub_3_img_id;	


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

$disabled = '';
$block = '';

	$url_str = "specs-list.php";
	$url_str .= "?pagenum=".$_SESSION['paging']['pagenum'];
	$url_str .= "&sortby=".$_SESSION['paging']['sortby'];
	$url_str .= "&a_d=".$_SESSION['paging']['a_d'];
	$url_str .= "&truncate=".$_SESSION['paging']['truncate'];
?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" onSubmit="return validate(this)"  enctype="multipart/form-data">
    <input type="hidden" name="add_spec" value="1">  
    <input type="hidden" name="spec_id" value="<?php echo $_SESSION['spec_id']; ?>">  

<a class="btn" style="float:left; margin:30px;" 
href="<?php echo SITEROOT;?>manage/catalog/specs-feat/specs-list.php" >Cancel &amp; Go Back</a>

<input class="btn btn-primary" style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">	

<table cellpadding="10" width="100%" border="1">
<tr>
<td>SVG Icon</td>
<td>
<label for="cars">Choose an Icon</label>

<select name="svg_id" id="svg_id">
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
<td>Spec Title</td>
<td><input id="title" style="width:96%;" name="title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['title']); ?>" />
</td>
</tr>

<tr>
<td>Spec Sub Title</td>
<td><input id="sub_title" style="width:96%;" name="sub_title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['sub_title']); ?>" />
</td>
</tr>

<tr>
<td>Short Description</td>
<td>
<textarea id="short_description" style="width:96%; height:200px;" name="short_description" rows="10" /><?php echo stripslashes($_SESSION['temp_fields']['short_description']); ?></textarea>
</td>
</tr>

<tr>
<td>Description</td>
<td>
<textarea id="description" style="width:96%; height:200px;" name="description" rows="10" /><?php echo stripslashes($_SESSION['temp_fields']['description']); ?></textarea>
</td>
</tr>

<tr>
<td>Sub Object 1 Image</td>
<td>
<?php 
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=add-spec";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&img_type=sub_1_img";

$file_name = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_1_img_id']);
echo "<img width='30%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
?>
<input id="sub_1_img_id" style="width:6%;" name="sub_1_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_1_text']; ?>" />
<a onClick="set_cat_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Sub Object 1 Image</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=add-specs-feat";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&img_type=sub_1_img";
?>
<a onClick="set_cat_session();" 
class="btn btn-info" href="<?php echo $url_str; ?>">Select Sub Object 1 Image</a>
</td>
</tr>



<tr>
<td> Sub Object 1 Title</td>
<td><input id="sub_1_title" style="width:96%;" name="sub_1_title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['sub_1_title']); ?>" />
</td>



<tr>
<td>Sub Object Text</td>
<td>
<textarea id="sub_1_text" style="width:96%; height:200px;" name="sub_1_text" rows="10" /><?php echo stripslashes($_SESSION['temp_fields']['sub_1_text']); ?></textarea>
</td>
</tr>



<tr>
<td>Sub Object 1 Image</td>
<td>
<?php 
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-spec";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&img_type=sub_1_img";

$file_name_1 = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_1_img_id']);

echo "file_name_1:  ".$file_name_1;

echo "<img width='30%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name_1."'/>";
?>
<input id="sub_1_img_id" style="width:6%;" name="sub_1_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_1_img_id']; ?>" />
<a onClick="set_spec_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Sub Object 1 Image</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-spec";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&img_type=sub_1_img";
?>
<a onClick="set_spec_session();"
class="btn btn-info" href="<?php echo $url_str; ?>">Select Sub Object 1 Image</a>
</td>
</tr>


<tr>
<td> Sub Object 1 Title</td>
<td><input id="sub_1_title" style="width:96%;" name="sub_1_title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['sub_1_title']); ?>" />
</td>


<tr>
<td>Sub Object 1 Text</td>
<td>
<textarea id="sub_1_text" style="width:96%; height:200px;" name="sub_1_text" rows="10" /><?php echo stripslashes($_SESSION['temp_fields']['sub_1_text']); ?></textarea>
</td>
</tr>

<tr>
<td>Sub Object 2 Image</td>
<td>
<?php 
$_SESSION['crop_n'] = 0;				
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-spec";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&img_type=sub_2_img";

$file_name_2 = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_2_img_id']);
echo "<img width='30%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name_2."'/>";
?>




<br />
<input id="sub_2_img_id" style="width:6%;" name="sub_2_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_2_img_id']; ?>" />

<a onClick="set_spec_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Sub Object 2 Image</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-spec";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&img_type=sub_2_img";
?>
<a onClick="set_spec_session();"
class="btn btn-info" href="<?php echo $url_str; ?>">Select Sub image 2 </a>
</td>
</tr>


<tr>
<td> Sub Object 2 Title</td>
<td><input id="sub_2_title" style="width:96%;" name="sub_2_title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['sub_2_title']); ?>" />
</td>

<tr>
<td> Sub Object 2 Text</td>
<td>
<textarea id="sub_2_text" name="sub_2_text" style="width:96%; height:200px;" /><?php echo stripslashes($_SESSION['temp_fields']['sub_2_text']); ?></textarea>
</td>
</tr>


<tr>
<td> Sub Object 3 Image</td>
<td>
<?php 
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-spec";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&img_type=sub_3_img";

$file_name_3 = get_file_name($dbCustom, $_SESSION['temp_fields']['sub_3_img_id']);
echo "<img width='30%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name_3."'/>";
?>
<br />
<input id="sub_3_img_id" style="width:6%;" name="sub_3_img_id" type="text" 
value="<?php echo $_SESSION['temp_fields']['sub_3_img_id']; ?>" />

<a onClick="set_spec_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Sub Object 3 Image</a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-spec";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&img_type=sub_3_img";
?>
<a onClick="set_spec_session();"
class="btn btn-info" href="<?php echo $url_str; ?>">Select Sub Object 3 Image </a>
</td>
</tr>


<tr>
<td> Sub Object 3 Title</td>
<td><input id="sub_3_title" style="width:96%;" name="sub_3_title" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['sub_3_title']); ?>" />
</td>

<tr>
<td> Sub Object 3 Text</td><td>
<textarea id="sub_3_text" style="width:96%; height:200px;" name="sub_3_text" rows="10" /><?php echo stripslashes($_SESSION['temp_fields']['sub_3_text']); ?></textarea>
</td>
</tr>








</table>


<a id="doc"></a>                
   				<fieldset class="edit_page">
					<label>Documents</label>
					<table cellpadding="10" cellspacing="0">
					<thead>
						<tr>
							<th>Document Name</th>
							<th>File Name</th>
							<th></th>							
							<th></th>							

						</tr>
					</thead>
					<tbody>
					<?php
					
					$block = '';       
					foreach($_SESSION['temp_documents'] as $key => $val){						
						
						$block .= "<tr>";
						$block .= "<td>".$val['name']."</td>";
						$block .= "<td>".$val['file_name']."</td>";

						$url_str= SITEROOT."manage/catalog/add-document.php";
						
						$url_str.= "?document_id=".$val['document_id'];
                        $url_str.= "&ret_page=add-item";
                        $url_str.= "&ret_dir=products";
                        
                        $url_str.= "&cat_id=".$_SESSION['cat_id'];		  

						$block .= "<td><a class='btn btn-primary btn-small fancybox fancybox.iframe' 
						href='".$url_str."'><i class='icon-cog icon-white'></i> Edit</a></td>";
			
						
						$block .= "<td><a href='add-item.php?deldocid=".$val['document_id']."#doc' class='btn btn-small btn-danger'><i class='icon-remove icon-white'></i></a></td>";
						$block .= "</tr>";
					}

					echo $block;						
					?>
					</tbody>
				</table>

                    <div class="colcontainer">
                    	<?php
						$url_str= SITEROOT."manage/catalog/doc-upload.php"; 

						$url_str.= "?ret_page=edit-spec";
						$url_str.= "&ret_dir=specs-feat";
						
						$url_str.= "&spec_id=".$_SESSION['spec_id'];
						?>
                        
                        <div class="twocols"> 
                        	<a class="btn btn-large btn-primary fancybox fancybox.iframe" href="<?php echo $url_str; ?>">
                        	<i class="icon-plus icon-white"></i> Upload Document </a>
						</div>
						<?php
						$url_str= SITEROOT."manage/catalog/select-document.php";               				
						$url_str.= "?ret_page=edit-spec";
						$url_str.= "&ret_dir=specs-feat";
						$url_str.= "&spec_id=".$_SESSION['spec_id'];
                        ?>                    
                        <div class="twocols"> 
                            <a class="btn btn-large btn-primary fancybox fancybox.iframe" href="<?php echo $url_str; ?>">
                            <i class="icon-plus icon-white"></i> Select Document </a>
                        </div>
					</div>
					
                   <div class="colcontainer">
 					

					</div>

</form>
</div>
<p class="clear"></p>
</div>
</body>
</html>









