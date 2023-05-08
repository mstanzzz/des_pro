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
$ts = time();
$progress = new SetupProgress;
$module = new Module;
$page_title = " policies";
$page_group = " policies";
$page = " policies";
$ts = time();

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT policies_id FROM  policies WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO policies 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['policies_id'] = $db->insert_id;
}else{
	$_SESSION['policies_id'] = (isset($_REQUEST['policies_id'])) ? $_REQUEST['policies_id'] : 0;
}
if(!is_numeric($_SESSION['policies_id'])) $_SESSION['policies_id'] = 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST["update"])){

	$seo_name	= 'policies';
	$page	= 'policies';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'policies';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'policies';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'policies';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'policies';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'policies';

	require_once($real_root."/manage/cms/insert_page_seo.php");
	unset($_SESSION['temp_fields']);

}


$sql = "SELECT *  
		FROM policies
		WHERE policies_id = '".$_SESSION['policies_id']."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
}else{
}
require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>

function get_query_str(){
	
	var query_str = '';
	return query_str;
}

tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false

});	
</script>
</head>
<body>
<?php
	require_once($real_root.'/manage/admin-includes/manage-header.php');
	require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
?>
<div class="manage_page_container">
    <div class="manage_side_nav">
        <?php 
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
    </div>	
	<div class="manage_main">
		<center><h1>Policies Page</h1></center>
		<form name="form" action="policies.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="update" value="1">
		<input type="hidden" name="policies_id" value="<?php echo $_SESSION['policies_id']; ?>">
		<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
		<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			
		<?php 
		require_once($real_root."/manage/cms/get_seo_variables.php");
		require_once("edit_page_seo.php"); 
		?>
		</form>
	</div>
	<p class="clear"></p>
    
</div>
    

</body>
</html>



