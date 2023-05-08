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

$page_title = "Categories";
$page_group = "cat";

$msg = '';

function get_svg_icon($dbCustom,$svg_id){

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT svg_code
			FROM svg
			WHERE svg_id = '".$svg_id."'";
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		return $object->svg_code;		
		
	}
	return  '';
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

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
$sortby = (isset($_GET['sortby'])) ? trim($_GET['sortby']) : '';
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
$search_str = (isset($_GET['search_str'])) ? addslashes($_GET['search_str']) : '';

unset($_SESSION['temp_fields']);
unset($_SESSION['feat_id']);

if(isset($_POST['add_spec'])){

	$svg_id = (isset($_POST['svg_id']))? $_POST['svg_id'] : 0;
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : '';
	$sub_title = (isset($_POST['sub_title']))? trim(addslashes($_POST['sub_title'])) : '';

	if(!is_numeric($svg_id))$svg_id=0;

	$sql = sprintf("INSERT INTO spec
		(title
		,sub_title
		,svg_id
		,profile_account_id) 
	VALUES ('%s','%s','%u','%u')", 
		$title
		,$sub_title
		,$svg_id
		,$_SESSION['profile_account_id']);		
	$res = $dbCustom->getResult($db,$sql);

	$spec_id = $db->insert_id;
}

if(isset($_POST['add_feat'])){

	$svg_id = (isset($_POST['svg_id']))? $_POST['svg_id'] : 0;
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : '';
	$sub_title = (isset($_POST['sub_title']))? trim(addslashes($_POST['sub_title'])) : '';
	$sub_1_title = (isset($_POST['sub_1_title']))? trim(addslashes($_POST['sub_1_title'])) : '';
	$img_id = (isset($_POST['img_id']))? $_POST['img_id'] : 0;
	$text = (isset($_POST['text']))? trim(addslashes($_POST['text'])) : '';

	if(!is_numeric($img_id))$img_id=0;
	if(!is_numeric($svg_id))$svg_id=0;

	$sql = sprintf("INSERT INTO feat 
		(title
		,sub_title
		,sub_1_title
		,text
		,svg_id
		,img_id
		,profile_account_id) 
	VALUES ('%s','%s','%s','%s','%u','%u','%u')", 
		$title
		,$sub_title
		,$sub_1_title
		,$text
		,$svg_id
		,$img_id
		,$_SESSION['profile_account_id']);		
	$res = $dbCustom->getResult($db,$sql);

	$feat_id = $db->insert_id;

	if(isset($_SESSION['temp_gallery'])){
		foreach($_SESSION['temp_gallery'] as $val){
			$sql = "INSERT INTO feat_gallery
						(feat_id
						,img_id)
						VALUES
						('".$feat_id."','".$val."')"; 
			$res = $dbCustom->getResult($db,$sql);							
		}
	}

}

if(isset($_POST['update_feat'])){

	$svg_id = (isset($_POST['svg_id']))? $_POST['svg_id'] : 0;
	$feat_id = (isset($_POST['feat_id']))? $_POST['feat_id'] : 0;
	$img_id = (isset($_POST['img_id']))? $_POST['img_id'] : 0;

	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : '';
	$sub_title = (isset($_POST['sub_title']))? trim(addslashes($_POST['sub_title'])) : '';
	$sub_1_title = (isset($_POST['sub_1_title']))? trim(addslashes($_POST['sub_1_title'])) : '';
	$text = (isset($_POST['text']))? trim(addslashes($_POST['text'])) : '';

	if(!is_numeric($img_id))$img_id=0;
	if(!is_numeric($svg_id))$svg_id=0;
	if(!is_numeric($feat_id))$feat_id=0;
	
	$sql = "UPDATE feat 
			SET title = '".$title."'
			,sub_title = '".$sub_title."'
			,sub_1_title = '".$sub_1_title."'
			,text = '".$text."'
			,svg_id = '".$svg_id."'
			,img_id = '".$img_id."'
			WHERE feat_id = '".$feat_id."'";



	$res = $dbCustom->getResult($db,$sql);

	if(isset($_SESSION['temp_gallery'])){
		$sql = "DELETE FROM feat_gallery 
				WHERE feat_id = '".$feat_id."'";
		$result = $dbCustom->getResult($db,$sql);
		foreach($_SESSION['temp_gallery'] as $val){
			$sql = "INSERT INTO feat_gallery
						(feat_id
						,img_id)
						VALUES
						('".$feat_id."','".$val."')"; 
			$res = $dbCustom->getResult($db,$sql);							
		}
	}
}

if(isset($_POST['set_active'])){
	
	$actives = (isset($_POST['active']))? $_POST['active'] : array();	
	//print_r($actives);
	$sql = "UPDATE feat SET active = '0' 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($actives as $key => $value){
		$sql = "UPDATE feat SET active = '1' WHERE feat_id = '".$value."'";
		$res = $dbCustom->getResult($db,$sql);			
		//echo "key: ".$key."   value: ".$value."<br />"; 

	}
	
	$msg = 'Changes Saved.';
}

if(isset($_POST['del_id'])){
	$feat_id = $_POST['del_id'];
	$sql = "DELETE FROM feat 
			WHERE feat_id = '".$feat_id."'";
	$result = $dbCustom->getResult($db,$sql);

	$msg = 'Your change is now live.';
}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>

<script>

function regularSubmit() {
  document.form.submit(); 
}	
</script>

</head>
<body>
<?php
if(!$strip){
	require_once($real_root.'/manage/admin-includes/manage-header.php');
	require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
}
?>
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

	$tab="feat";
require_once($real_root.'/manage/admin-includes/specs-section-tabs.php');
	
	$total_t_cats = array();
	$t_spfts = array();

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT feat_id
			,title
			,active
			,svg_id
			,img_id	
	FROM feat 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";

	if($sortby != ''){
		if($sortby == 'title'){
			if($a_d == 'd'){
				$sql .= " ORDER BY title DESC";
			}else{
				$sql .= " ORDER BY title";		
			}
		}			
	}else{
		$sql .= " ORDER BY feat_id";					
	}
	$result = $dbCustom->getResult($db,$sql);
	
	$i = 0;
	while($row = $result->fetch_object()) {
		$total_t_cats[$i]['feat_id'] = $row->feat_id;
		$total_t_cats[$i]['title'] = $row->title;
		$total_t_cats[$i]["active"] = $row->active;
		$total_t_cats[$i]['svg_id'] = $row->svg_id;
		$total_t_cats[$i]['img_id'] = $row->img_id;
		$i++;
	}		
	
	$url_str = "add-feat.php";
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	$url_str .= "&strip=".$strip;

	echo "<a style='margin-left:30px;' href='#' onClick='regularSubmit();'  class='btn btn-success btn-large'>Save Changes </a>";		
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>Add Features</a>"; 
	
	$url_str = "feats-list.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	$url_str .= "&strip=".$strip;

?>

<form name="form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data" target="_self">        
<input type="hidden" name="set_active" value="1">	


<table cellpadding="6" cellspacing="6" style="width:100%;" >
<tr style="height:60px; background-color:#ababab; color:white; font-size:1.4em;">
	<td><br />Image</td>
	<td width="10%"><br />SVG</td>
	
	<td width="15%;">
	<a href="feats-list.php?sortby=title&a_d=a">
	<img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Title
	<br />
	<a href="feats-list.php?sortby=title&a_d=d">
	<img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>		
	</td>
	<td width="10%"><br />Active</td>
	<td width="10%"></td>
	<td></td>
</tr>

<?php

$disabled = ($admin_access->product_catalog_level < 2)? "disabled" : '';
$disabled='';
$block = '';						
foreach($total_t_cats as $t_spft) {
	$block .= "<tr>";						

	$fn=get_file_name($dbCustom,$t_spft['img_id']);
	
	$block .= "<td>";
	$block .= "<a class='fancybox' href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$fn."'>";
	$block .= "<img src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$fn."'></a></td>";
	$block .= "</td>";


	$icon = get_svg_icon($dbCustom,$t_spft['svg_id']);
	$block .= "<td>".$icon."</td>"; 	

	$block .= "<td>".stripslashes($t_spft['title'])."</td>"; 

	$checked = ($t_spft["active"])? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='active[]' 
				value='".$t_spft['feat_id']."' ".$checked." /></div>";
	$block .= "</td>";	
				
	$url_str = "edit-feat.php";
	$url_str .= "?feat_id=".$t_spft['feat_id'];
	$url_str .= "&firstload=1";									
	$url_str .= "&strip=".$strip;							
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	$url_str .= "&search_str=".$search_str;
	$block .= "<td valign='middle'>
				<a class='btn btn-primary' href='".$url_str."'>
				<i class='icon-cog icon-white'></i> Edit</a>";
	$block .= "</td>";
										
	$block .= "<td>
				<a class='btn btn-danger confirm ".$disabled." '>
				<input type='hidden' id='".$t_spft['feat_id']."' 
				class='itemId' value='".$t_spft['feat_id']."' />Delete</a>";
	$block .= "</td>";
	$block .= "</tr>";
}
$block .= "</table>";
						
echo $block;
		
echo "<a style='margin-left:30px;' href='#' onClick='regularSubmit();'  class='btn btn-success btn-large'>Save Changes </a>";	
?>
<input type="hidden" name="cats_from_this_page" value="<?php echo $cats_from_this_page; ?>">      
</form> 

  </div>
  <p class="clear"></p>
  
</div>

<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

    <?php
	$url_str = "feat-list.php";
	$url_str = "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	$url_str .= "&strip=".$strip;
	?>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this Category?</h3>
	<form name="del_category" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_id" class="itemId" type="hidden" name="del_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_cat" type="submit" >Yes, Delete</button>
	</form>
</div>

</body>
</html>





