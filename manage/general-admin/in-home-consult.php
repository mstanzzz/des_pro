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

$page_title = "For the Pros";
$page_group = '';
$msg = '';
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

if(isset($_POST["del_request_id"])){

	//if($user_level > 1){
		$request_id = $_POST["del_request_id"];
		$sql = sprintf("DELETE FROM in_home_consult_request WHERE request_id = '%u'", $request_id);
		$result = $dbCustom->getResult($db,$sql);
		
	//}else{
		//$msg = "You are not authorised to delete.";		
	//}
}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>
$(document).ready(function() {

	$("#datepicker1").datepicker();
	$("#datepicker2").datepicker();
	
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
		<h1>In Home Consult Requests</h1>
	
		<?php
		$all = (isset($_GET['all'])) ? trim($_GET['all']) : 0;	
		$sortby = (isset($_GET['sortby'])) ? trim($_GET['sortby']) : '';
		$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
		$pagenum = (isset($_GET['pagenum'])) ? $_GET['pagenum'] : 0;
		$truncate = (isset($_GET['truncate'])) ? $_GET['truncate'] : 1;
		$search_str = isset($_REQUEST['search_str']) ? trim(addslashes($_REQUEST['search_str'])) : '';
		if(isset($_REQUEST["date_from"])){
			$date_from = strpos($_REQUEST['date_from'], '/') ? strtotime(trim($_REQUEST['date_from'])) : '';
		}else{
			$date_from = ''; 
		}
		if(isset($_REQUEST['date_to'])){
			$date_to = strpos($_REQUEST['date_to'], '/') ? strtotime(trim($_REQUEST['date_to'])) : '';
		}else{
			$date_to = ''; 
		}
				
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
    	$sql = "SELECT * FROM in_home_consult_request 
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
		
		if($all<1){
			
			if($search_str != ''){
				$sql .= " AND (first_name like '%".$search_str."%' 
					OR last_name like '%".$search_str."%'
					OR email like '%".$search_str."%' )" ;
			}
			if($date_from != ''){		
				$sql .= " AND date_entered >= '".$date_from."'";
			}
			if($date_to != ''){		
				$sql .= " AND date_entered <= '".$date_to."'";
			}
			
		}			
		$nmx_res = $dbCustom->getResult($db,$sql);

		$total_rows = $nmx_res->num_rows;
		$rows_per_page = 16;
		$last = ceil($total_rows/$rows_per_page); 
						
		if ($pagenum > $last){ 
			$pagenum = $last; 
		}
		if ($pagenum < 1){ 
			$pagenum = 1; 
		}
		$limit = ' limit ' .($pagenum - 1) * $rows_per_page.','.$rows_per_page;

		if($sortby != ''){
			if($sortby == 'name'){
				if($a_d == 'd'){
					$sql .= " ORDER BY name DESC".$limit;
				}else{
					$sql .= " ORDER BY name".$limit;		
				}
			}
			if($sortby == 'email'){
				if($a_d == 'd'){
					$sql .= " ORDER BY email DESC".$limit;
				}else{
					$sql .= " ORDER BY email".$limit;		
				}
			}

			if($sortby == 'city'){
				if($a_d == 'd'){
					$sql .= " ORDER BY city DESC".$limit;
				}else{
					$sql .= " ORDER BY city".$limit;		
				}
			}
			if($sortby == 'state'){
				if($a_d == 'd'){
					$sql .= " ORDER BY state DESC".$limit;
				}else{
					$sql .= " ORDER BY state".$limit;		
				}
			}
			if($sortby == 'zip'){
				if($a_d == 'd'){
					$sql .= " ORDER BY zip DESC".$limit;
				}else{
					$sql .= " ORDER BY zip".$limit;		
				}
			}





		}else{
			$sql .= " ORDER BY request_id DESC".$limit;
		}
		$result = $dbCustom->getResult($db,$sql);		

		$url_str = "in-home-consult.php";
		$url_str .= "?pagenum=".$pagenum;
		$url_str .= "&sortby=".$sortby;
		$url_str .= "&a_d=".$a_d;
		$url_str .= "&truncate=".$truncate;
		?>
<div class="page_actions">
<table width="100%">
<form name="search_form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">
<tr>
<td width="20%">
	<label>Enter name, email address, customer ID, or Subject</label>
	<input type="text" name="search_str" class="searchbox" placeholder="Search Requests" />
</td>
<td width="10%">
	<div style="padding-top:17px;">
	<label>Date From</label>
	<input id="datepicker1" type="text" name="date_from" value="none" style='width:80px;'/>
	</div>
</td>
<td width="10%">
<div style="padding-top:17px;">
	<label>Date To</label>
	<input id="datepicker2" type="text" name="date_to" value="today" style='width:100px;'/>
</div>
</td>
<td>
	<div style="padding-top:47px;">
	<button type="submit" class="btn btn-primary btn-large" value="search">Search</button>
	</div>
</td>
</form>
<td>
	<div style="padding-top:47px;">
	<a href="for-pros.php?all=1" class="btn btn-primary btn-large">All</a>
	</div>
</td>

</tr>		
</table>
</div>

<div class="clear"></div>
<?php 
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, "in-home-consult.php", $sortby, $a_d, 0, 0,  $search_str,0,0,$strip);
echo "<br /><br /><br />";
}
?>	

<table cellpadding="10" cellspacing="0" border="0" width="100%">
<tr style="height:60px; background-color:#ababab; color:white; font-size:1.4em;">
<td width="20%">
	<a href="in-home-consult.php?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Name
	<br />
	<a href="in-home-consult.php?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>
<td width="20%">
	<a href="in-home-consult.php?sortby=email&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	email
	<br />
	<a href="in-home-consult.php?sortby=email&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>
<td width="10%">
	<a href="in-home-consult.php?sortby=date_entered&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	date_entered
	<br />
	<a href="in-home-consult.php?sortby=date_entered&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>

<td  width="40%">
	<a href="in-home-consult.php?sortby=city&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	City
	<br />
	<a href="in-home-consult.php?sortby=city&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								

</td>

<td  width="40%">
	<a href="in-home-consult.php?sortby=state&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	State
	<br />
	<a href="in-home-consult.php?sortby=state&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								

</td>


<td  width="40%">
	<a href="in-home-consult.php?sortby=zip&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	ZIP
	<br />
	<a href="in-home-consult.php?sortby=zip&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								

</td>



<td width="12%">View</td>
<td width="5%">Delete</td>
</tr>
<?php


$block = ''; 
while($row = $result->fetch_object()) {
	$block .= "<tr>"; 
	$block .= "<td valign='top'>".$row->name."</td>";	
	$block .= "<td valign='top'>".$row->email."</td>";	
	
	if($row->date_entered > 0){
		$block .= "<td valign='top'>".date("F j, Y, g:i a", $row->date_entered)."</td>";			
	}else{
		$block .= "<td valign='top'></td>";										
	}
	$block .= "<td valign='top'>".$row->city."</td>";
	$block .= "<td valign='top'>".$row->state."</td>";
	$block .= "<td valign='top'>".$row->zip."</td>";
						
	$url_str = "view-in-home-consult.php";
	$url_str .= "?request_id=".$row->request_id;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	$url_str .= "&search_str=".$search_str;
	
	$block .= "<td valign='top'><a class='btn btn-small' 
	href='".$url_str."'>View / Print</a></td>";
	$disabled = ($admin_access->customers_level < 2)? "disabled" : '';
	$disabled = '';				
	$block .= "<td valign='middle'><a class='btn btn-danger confirm ".$disabled."'>
	<input type='hidden' id='".$row->request_id."' class='itemId' 
	value='".$row->request_id."' />DEL</a></td>";
	$block .= "</tr>";
}
echo $block;
?>
</table>
<?php 
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, "in-home-consult.php", $sortby, $a_d, 0, 0,  $search_str,0,0,$strip);
}
?>	                
</div>
<p class="clear"></p>
<?php 
require_once($real_root.'/manage/admin-includes/manage-footer.php');
	
$url_str = "in-home-consult.php";
$url_str .= "?pagenum=".$pagenum;
$url_str .= "&sortby=".$sortby;
$url_str .= "&a_d=".$a_d;
$url_str .= "&truncate=".$truncate;
$url_str .= "&search_str=".$search_str;
?>
</div>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this email?</h3>
	<form name="del_request" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_request_id" class="itemId" type="hidden" name="del_request_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_request" type="submit" >Yes, Delete</button>
	</form>
</div>
<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

</body>
</html>





