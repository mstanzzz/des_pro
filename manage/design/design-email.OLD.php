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

$page_title = "Design Email Requests";
$page_group = "design-email";
$msg = '';
	
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

if(isset($_POST["edit_email_content"])){

	$design_email_content_id = $_POST["design_email_content_id"];
	$content = trim($_POST["content"]);

	$stmt = $db->prepare("UPDATE design_email_content
						SET content = ?
						WHERE design_email_content_id = ?");

						//echo 'Error '.$db->error;	
	$stmt->bind_param('si'
						,$content
						,$design_email_content_id);
	$stmt->execute();
	$stmt->close();		
	$msg = 'success';
}

if(isset($_POST["del_design_email"])){
	//if($user_level > 1){
		$design_email_id = $_POST["del_design_email_id"];
		$sql = "SELECT file_name
				FROM design_email_image 
				WHERE design_email_id = '".$design_email_id."'";	
				
		$img_result = $dbCustom->getResult($db,$sql);
		while($img_row = $img_result->fetch_object()) {								
						
			$theFile =  $_SERVER['DOCUMENT_ROOT']."/user_uploads/".$_SESSION['profile_account_id']."/".$img_row->file_name;
			if(is_file($theFile)){
				unlink($theFile);	
			}
		}
		$sql = sprintf("DELETE FROM design_email_image WHERE design_email_id = '%u'", $design_email_id);
		$result = $dbCustom->getResult($db,$sql);
		$sql = sprintf("DELETE FROM design_email WHERE design_email_id = '%u'", $design_email_id);
		$result = $dbCustom->getResult($db,$sql);
	//}else{
		//$msg = "You are not authorised to delete.";		
	//}
}

unset($_SESSION['paging']);

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
	
	<a class="btn btn-primary btn-large" href="design-email-sel.php"> Select to Export </a>
	
		<?php 
	
	
	$ret_page = (isset($_GET['ret_page'])) ? $_GET['ret_page'] : '';
		require_once($real_root."/manage/admin-includes/class.admin_bread_crumb.php");	
		$bread_crumb = new AdminBreadCrumb;
		$bread_crumb->reSet();
		if($ret_page == "design-tool-landing"){	
			$bread_crumb->add("Design Area", SITEROOT."manage/design-tool-landing.php");
		}		
		$bread_crumb->add("Design Request Email", '');
		echo $bread_crumb->output();
		
        
		$sortby = (isset($_GET['sortby'])) ? $_GET['sortby'] : '';
		$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
		
		$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
		$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
		
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
		$sql = "SELECT * FROM design_email WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
		
		if($search_str != ''){
			if(is_numeric($search_str)){
				$sql .= " AND user_id = '".$search_str."'";
			}else{			
				$search_str = addslashes($search_str);
				$sql .= " AND (name like '%".$search_str."%' OR city like '%".$search_str."%' OR email like '%".$search_str."%' )" ;
			}
		}
		if($date_from != ''){		
			$sql .= " AND date_submitted >= '".$date_from."'";
		}
		if($date_to != ''){		
			$sql .= " AND date_submitted <= '".$date_to."'";
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
					$sql .= " ORDER BY name DESC, design_email_id".$limit;
				}else{
					$sql .= " ORDER BY name, design_email_id".$limit;		
				}
			}
			if($sortby == 'email'){
				if($a_d == 'd'){
					$sql .= " ORDER BY email DESC, name".$limit;
				}else{
					$sql .= " ORDER BY email, name".$limit;		
				}
			}
			if($sortby == 'date_submitted'){
				if($a_d == 'd'){
					$sql .= " ORDER BY date_submitted DESC, name".$limit;
				}else{
					$sql .= " ORDER BY date_submitted, name".$limit;		
				}
			}
			if($sortby == 'user_id'){
				if($a_d == 'd'){
					$sql .= " ORDER BY user_id DESC, name".$limit;
				}else{
					$sql .= " ORDER BY user_id, name".$limit;		
				}
			}

		}else{
			$sql .= " ORDER BY design_email_id DESC, name".$limit;
		}
		
		$result = $dbCustom->getResult($db,$sql);		
		?>
			<div class="page_actions">
   	            <form name="search_form" action="design-email.php" method="post" enctype="multipart/form-data">
                <table width="100%">
                    <tr>
                    <td width="20%">
                    <label>Enter name, email address,<br /> city, or customer ID</label>
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
					<button type="submit" class="btn btn-primary btn-large" value="search"></button>
                    </div>
                    </td>
                    
					<td>
                
                    </td>
                    </tr>		
                </table>
                </form>
                </div>

            <div class="clear"></div>

<?php 
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, SITEROOT."manage/design/design-email.php", $sortby, $a_d, 0, 0,  $search_str);
echo "<br /><br /><br /><br />";
}
?>	
	<table cellpadding="10" cellspacing="0" border="0">
	<tr style="height:60px; background-color:#ababab; color:white; font-size:1.4em;">
	<td>
	<a href="design-email.php?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Name
	<br />
	<a href="design-email.php?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
	</td>
	<td>
	<br />
	Location
	<br />
	</td>
	<td>
	<a href="design-email.php?sortby=email&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Email Address
	<br />
	<a href="design-email.php?sortby=email&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
	</td>
	<td>
	<a href="design-email.php?sortby=date_submitted&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Date Time
	<br />
	<a href="design-email.php?sortby=date_submitted&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
	</td>
	<td width="10%;">
	<a href="design-email.php?sortby=user_id&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Cust ID
	<br />
	<a href="design-email.php?sortby=user_id&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
	</td>
	<td width="12%"></td>
	<td width="5%"></td>
	</tr>
	<?php
	require_once($real_root."/includes/class.customer_login.php");
	$lgn = new CustomerLogin();
					
	$block = ''; 
	while($row = $result->fetch_object()){
		$block .= "<tr>"; 
		$block .= "<td>".stripSlashes($row->name)."</td>";			
		$block .= "<td>".$row->city." ".$row->state." ".$row->zip."</td>";
		$block .= "<td>".$row->email."</td>";								
		$block .= "<td>".date("M j, Y, g:i a", $row->date_submitted)."</td>";			
		$block .= "<td>".$row->user_id."</td>";
		$url_str = "view-design-email.php";
		$url_str .= "?design_email_id=".$row->design_email_id;
		$url_str .= "&pagenum=".$pagenum;
		$url_str .= "&sortby=".$sortby;
		$url_str .= "&a_d=".$a_d;
		$url_str .= "&truncate=".$truncate;
		$url_str .= "&search_str=".$search_str;
		$block .= "<td>";
		$block .= "<a class='btn btn-small' href='".$url_str."'>View / Print</a></td>";
		$block .= "<td>";
		$block .= "<a class='btn btn-danger confirm'>
		<input type='hidden' id='".$row->design_email_id."' 
		class='itemId' value='".$row->design_email_id."' />DEL</a></td>";
		$block .= "</tr>";
	}
	echo $block;
	?>
	</table>
<?php 
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, SITEROOT."manage/design/design-email.php", $sortby, $a_d, 0, 0,  $search_str);
}
?>	                
		
	</div>
	<p class="clear"></p>
	<?php 
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
	
	$url_str = "design-email.php";
	$url_str .= "?pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	$url_str .= "&search_str=".$search_str;
	
	?>
</div>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this design request?</h3>
	<form name="del_design_email" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_design_email_id" class="itemId" type="hidden" name="del_design_email_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_design_email" type="submit" >Yes, Delete</button>
	</form>
</div>
<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

<a href="clean-spam.php">Clean Spam</a>

</body>
</html>
