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

unset($_SESSION['global_url_word']);

require_once($real_root.'/manage/admin-includes/manage-includes.php');

require_once($real_root."/includes/class.store_data.php");

require_once($real_root."/includes/class.nav.php");

$nav = new Nav;
$store_data = new StoreData;

$progress = new SetupProgress;
$module = new Module;

$page_title = "Sitemap Generator";
$page_group = "seo";

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$action = (isset($_GET["action"])) ? $_GET["action"] : '';

function cat_has_showroom_items($dbCustom, $cat_id){

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);  
	$sql = "SELECT item.show_in_showroom
			FROM item, item_to_category
			WHERE item_to_category.item_id = item_to_category.item_id
			AND item.active > '0'		
			AND item_to_category.cat_id = '".$cat_id."'";
	$result = $dbCustom->getResult($db,$sql);
	while($object=$result->fetch_object()){
		if($object->show_in_showroom > 0){
			return 1;
		}			
	} 
	
	return 0;
}


function loadCat($dbCustom){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$t = array();
	$sql = "SELECT cat_id ,name, profile_cat_id
	FROM category 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
	AND active = '1'";	
	$result = $dbCustom->getResult($db,$sql);
	while($row = $result->fetch_object()){		
		$n=getUrlText($row->name);				
		if(cat_has_showroom_items($dbCustom, $row->cat_id)>0){
$t[]="showroom-category-".$row->profile_cat_id."/".$n.".html";	
		}else{
$t[]="category-".$row->profile_cat_id."/".$n.".html";	
		}
	}
	return $t;	
}

function loadItems($dbCustom){

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$t = array();	
	$sql = "SELECT item_id, name, show_in_showroom, profile_item_id
		FROM item	
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		AND item.active = '1'";
	$result = $dbCustom->getResult($db,$sql);		
	$t = array();
	while($row = $result->fetch_object()){
		$n=getUrlText($row->name);
		if($row->show_in_showroom > 0){
$t[]="showroom-".$row->profile_item_id."/".$n.".html";	
		}else{
$t[]="product-".$row->profile_item_id."/".$n.".html";	
		}
	}
	return $t;	
}

function loadMisc(){	
	$t[]="about-us.html";
	$t[]="services.html";	
	$t[]="support.html";
	$t[]="features.html";
	$t[]="faq.html";
	$t[]="for-the-pros.html";
	$t[]="process.html";
	$t[]="blog.html";
	$t[]="locations.html";
	$t[]="careers.html";
	$t[]="privacy-statement.html";
	$t[]="policies.html";
	$t[]="our-reviews.html";
	$t[]="request-design.html";
	$t[]="comparison.html";
	$t[]="diy-instructions.html";
	$t[]="closet-system-contact.html";
	$t[]="free-in-home-consults.html";	
	$t[]="pre-assembly.html";
	$t[]="showroom.html";
	$t[]="accessory-categories.html";
	return $t;	
}



//if(0){
if(isset($_GET['action'])){

	$url_array = array();
	$cat_url_array = loadCat($dbCustom);
	$item_url_array = loadItems($dbCustom);

	$url_array = array_merge($cat_url_array,$item_url_array);	
	$misc_url_array = loadMisc();
	
	$url_array = array_merge($url_array,$misc_url_array);	
	$url_array = array_unique($url_array);
	
	$final_array = array(); 
	foreach($url_array as $url){
		$final_array[] = str_replace ("//" ,"/" ,$url);
	}

/*


<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>https://www.example.com/foo.html</loc>
    <lastmod>YYYY-MM-DD</lastmod>
  </url>
</urlset>

*/	

	$str='';	
	$str.="<?xml version='1.0' encoding='UTF-8'?>\n";
	$str.="<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>\n";

$pro = 'http://www.'; 

$home = $pro.$_SERVER['HTTP_HOST'];


	$str.="<url>".$home."</url>\n";
	$str.="<lastmod>2023-01-18</lastmod>\n";

	foreach($final_array as $j => $url){
		$str.="<url>".SITEROOT.$url."</url>\n";
		$str.="<lastmod>2023-02-28</lastmod>\n";
		
		echo "<br />".SITEROOT.$url;
		
	}
	$str.="</urlset>";
	
	$msg = "Sitemaps Created";

/*
	$fn=$real_root."/sitemap.xml";
	$the_file = fopen($fn, "w") or die("Unable to open file!");
	fwrite($the_file, $str);
	fclose($the_file);
*/
	$myfile = fopen("../../../sitemap.xml", "w") or die("Unable to open file!");
	fwrite($myfile, $str);
	fclose($myfile);


}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 

?>


<style>
.spinner {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-left: -50px; /* half width of the spinner gif */
    margin-top: -50px; /* half height of the spinner gif */
    text-align:center;
    z-index:1234;
    overflow: auto;
    width: 100px; /* width of the spinner gif */
    height: 102px; /*hight of the spinner gif +2px to fix IE8 issue */
}

</style>

<script>


var submitted = false;
function doSubmit() {
	if (!submitted) {
		submitted = true;
		ProgressImg = document.getElementById('inprogress_img');
		document.getElementById("inprogress").style.visibility = "visible";
		setTimeout("ProgressImg.src = ProgressImg.src",1000);
		return true;
	}else{
		return false;
	}
}


$(document).ready(function() {
	//$('#spinner').show();	
});	

$(window).load(function(){
	$('#spinner').hide();
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
<?php
        require_once($real_root."/manage/admin-includes/seo-section-tabs.php");
        $db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		
		//$string = "Test";
		//$zipped = gzencode($string);
		//echo "<textarea>".$zipped."</textarea>";
		
		//$file = 'sitemap.gz';
		// Open the file to get existing content
		//$current = file_get_contents($file);
		//echo $current;
		
		// Append a new person to the file
		//$current .= "John Smith\n";
		// Write the contents back to the file
		
		
		//file_put_contents($file, $zipped);
		//$filename = "sitemap.gz";
		//echo "|".strtolower(substr($filename,-2))."|";
		
		?>
		<br /><br /><br />
		<p style="visibility:hidden" id="inprogress"> <img id="inprogress_img" src="<?php echo SITEROOT; ?>images/progress.gif"> Please Wait... </p>

		<?php 
        if($admin_access->cms_level > 1){
		?>
        <form action="sitemap-generator.php" method="get" onSubmit="doSubmit()">
        	<input type="hidden" name="action" value="generate">
        	<button class='btn btn-success btn-large'>Generate Sitemap</button>         
        </form>
        <?php
		}else{?>
            <div class="alert"><span class="fltlft"><i class="icon-warning-sign"></i></span> Sorry, you don't have the permissions to edit this item.</div>
        <?php } ?>
  	</div>
        
    <p class="clear"></p>
	<?php 
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
	?>
</div>
</body>
</html>

