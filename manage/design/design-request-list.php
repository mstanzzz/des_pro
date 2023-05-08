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

$this_page="design-request-list.php";
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
if(isset($_POST["edit_email_content"])){
	$sql = sprintf("DELETE FROM design_email_image WHERE design_email_id = '%u'", $design_email_id);
	//$result = $dbCustom->getResult($db,$sql);
	$sql = sprintf("DELETE FROM design_email WHERE design_email_id = '%u'", $design_email_id);
	//$result = $dbCustom->getResult($db,$sql);
}

if(isset($_POST['del_design_email_id'])){
	$del_design_email_id = (isset($_POST['del_design_email_id']))? $_POST['del_design_email_id'] : 0;	
	$sql = "DELETE FROM design_email 
	WHERE design_email_id = '".$del_design_email_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$msg = 'Changes Saved.';
}

if(isset($_POST['set_done'])){
	$done = (isset($_POST['done']))? $_POST['done'] : array();	
	//print_r($done);
	$sql = "UPDATE design_email SET done = '0' 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	//$result = $dbCustom->getResult($db,$sql);
	foreach($done as $key => $value){
		$sql = "UPDATE design_email SET done = '1' WHERE design_email_id = '".$value."'";
		//$res = $dbCustom->getResult($db,$sql);			
		echo "key::: ".$key."   value::: ".$value."<br />"; 
	}
	$msg = 'Changes Saved.';
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

<a class="btn" href="design-request-list-done.php"> See Done Design Requests</a>	

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

$sql = "UPDATE design_email 
SET done='1'
WHERE design_email_id < '1459968318'"; 
//$n = $dbCustom->getResult($db,$sql);
$sql = "UPDATE design_email ";
$sql .= "SET done = '0'"; 
//$sql .= "WHERE date_submitted < '1409968318'";
//$n = $dbCustom->getResult($db,$sql);


$sql = "DELETE FROM design_email"; 
//$n = $dbCustom->getResult($db,$sql);
 

$sql = "SELECT * 
FROM design_email 
WHERE done = '0' 
AND profile_account_id = '".$_SESSION['profile_account_id']."'";
//echo $search_str;
if($search_str != ''){
	if(is_numeric($search_str)){
		$sql .= " AND user_id = '".$search_str."'";
	}else{			
		$search_str = addslashes($search_str);
		$sql .= " AND (city like '%".$search_str."%' 
					OR state like '%".$state."%'
					OR email like '%".$email."%'
					OR name like '%".$search_str."%')";
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
	if($sortby == 'design_email_id'){
		if($a_d == 'd'){
			$sql .= " ORDER BY design_email_id DESC, name".$limit;
		}else{
			$sql .= " ORDER BY design_email_id, name".$limit;		
		}
	}


}else{

	$sql .= " ORDER BY design_email_id DESC, name".$limit;
}

$result = $dbCustom->getResult($db,$sql);		
?>
<div class="page_actions">

<form name="search_form" action="<?php echo $this_page; ?>" method="post" enctype="multipart/form-data">
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
	<button type="submit" class="btn" value="search">Searh</button>
	</div>
</td>

</tr>		
</table>
</form>
</div>

<div class="clear"></div>

<form name="form" action="<?php echo $this_page; ?>" method="post" enctype="multipart/form-data">        
<input type="hidden" name="set_done" value="1">	
<input type="submit" value="Save Changes">	
<?php 
$url_str = SITEROOT."manage/design/".$this_page;
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, $url_str, $sortby, $a_d, 0, 0,  $search_str);
echo "<br /><br /><br /><br />";
}
$disabled=0;

$url_str = $this_page; 
$url_str .= "?strip=".$strip;
$url_str .= "&pagenum=".$pagenum;
$url_str .= "&sortby=".$sortby;
$url_str .= "&a_d=".$a_d;
$url_str .= "&truncate=".$truncate;
?>
<table cellpadding="10" cellspacing="0" border="0">
<tr style="height:60px; background-color:#ababab; color:white; font-size:1.4em;">	
<td width=>
	<a href="<?php echo $this_page; ?>?sortby=done&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Set done
	<br />
	<a href="<?php echo $this_page; ?>?sortby=done&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>

<td>
	<a href="<?php echo $this_page; ?>?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Name
	<br />
	<a href="<?php echo $this_page; ?>?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>

<td>
	<a href="<?php echo $this_page; ?>?sortby=city&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Location
	<br />
	<a href="<?php echo $this_page; ?>?sortby=city&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>

<td>
	<a href="<?php echo $this_page; ?>?sortby=email&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Email Address
	<br />
	<a href="<?php echo $this_page; ?>?sortby=email&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>
<td>
	<a href="<?php echo $this_page; ?>?sortby=date_submitted&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Date Time
	<br />
	<a href="<?php echo $this_page; ?>?sortby=date_submitted&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>
<td width="10%;">
	<a href="<?php echo $this_page; ?>?sortby=user_id&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Cust ID
	<br />
	<a href="<?php echo $this_page; ?>?sortby=user_id&a_d=d">
	<img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>
<td width="5%;">
	<a href="<?php echo $this_page; ?>?sortby=user_id&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	ID
	<br />
	<a href="<?php echo $this_page; ?>?sortby=user_id&a_d=d">
	<img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
</td>


<td></td>

<td width="5%"></td>
</tr>
<?php
require_once($real_root."/includes/class.customer_login.php");
$lgn = new CustomerLogin();
$block = ''; 
while($row = $result->fetch_object()){
	$block .= "<tr>"; 

	$checked = ($row->done >0)? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
		<div class='checkboxtoggle on ".$disabled." '> 
		<span class='ontext'>ON</span>
		<a class='switch on' href='#'></a>
		<span class='offtext'>OFF</span>
		<input type='checkbox' class='checkboxinput' name='done[]' 
		value='".$row->design_email_id."' ".$checked." /></div>";
	$block .= "</td>";	

	$block .= "<td>".stripSlashes($row->name)."</td>";

	$block .= "<td>city:".$row->city." state:".$row->state." zip:".$row->zip."</td>";

	$block .= "<td>".$row->email."</td>";	

	$block .= "<td>";
	//$block .= "<td>".date("M j, Y, g:i a", $row->date_submitted)."</td>";	
	$block .= date("M j, Y, g:i a", $row->date_submitted);
	$block .="</td>";	

	$block .= "<td>user_id:".$row->user_id."</td>";

	$block .= "<td>design_email_id:".$row->design_email_id."</td>";

		$url_str = "view-design-request.php";
		$url_str .= "?design_email_id=".$row->design_email_id;
		$url_str .= "&pagenum=".$pagenum;
		$url_str .= "&sortby=".$sortby;
		$url_str .= "&a_d=".$a_d;
		$url_str .= "&truncate=".$truncate;
		$url_str .= "&search_str=".$search_str;
	$block .= "<td>";
		$block .= "<a class='btn btn-small' href='".$url_str."'>View ".$row->design_email_id."</a>";
	$block .= "</td>";
	
	$block .= "<td>";
	$block .= "<a class='btn btn-danger confirm'>
		<input type='hidden' id='".$row->design_email_id."' 
		class='itemId' value='".$row->design_email_id."' />DEL</a></td>";
	$block .= "</tr>";
}
echo $block;
?>
</table>
<input type="submit">	

</form>
<?php 
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, SITEROOT."manage/design/".$this_page, $sortby, $a_d, 0, 0,  $search_str);
}
?>	                

</div>
<p class="clear"></p>
<?php 
require_once($real_root.'/manage/admin-includes/manage-footer.php');
$url_str = $this_page;
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
	<input id="del_design_email_id" class="itemId" type="text" name="del_design_email_id" value='' />
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
