
+<?php
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

require_once($real_root.'/includes/class.customer_login.php');
if(!isset($lgn)){
	$lgn = new CustomerLogin;
}
$progress = new SetupProgress;
$module = new Module;
$page_title = 'Customer List';
$page_group = 'customer';
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

if(isset($_POST['submit_add_prof'])){
			
	$business_name=isset($_POST['business_name'])? trim(addcslashes($_POST['business_name'])): "";
	$website=isset($_POST['website'])? trim(addcslashes($_POST['website'])): "";
	$name=isset($_POST['name'])? trim(addcslashes($_POST['name'])): "";
	$phone=isset($_POST['phone'])? trim(addcslashes($_POST['phone'])): "";
	$email=isset($_POST['email'])? trim(addcslashes($_POST['email'])): "";
	$address=isset($_POST['address'])? trim(addcslashes($_POST['address'])): "";
	$license=isset($_POST['license'])? trim(addcslashes($_POST['license'])): "";
	$interested=isset($_POST['interested'])? trim(addcslashes($_POST['interested'])): "";
	$comment=isset($_POST['comment'])? trim(addcslashes($_POST['comment'])): "";

	$stmt = $db->prepare("INSERT INTO professional
		(business_name
		,website
		,name
		,phone
		,email
		,address
		,license
		,interested
		,comment
		,created
		,profile_account_id)
		VALUES
		(?	
		,?
		,?		
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?)"); 	

	if(!$stmt->bind_param("sssssssssi",
		$business_name
		,$website
		,$name
		,$phone
		,$email
		,$address
		,$license
		,$interested
		,$comment
		,$ts
		,$_SESSION['profile_account_id'])){		
		echo 'Error-2 '.$db->error;
	}else{
		$stmt->execute();
		$stmt->close();
		$msg = "Your request has been submitted";
		
	}
}

if(isset($_POST['email_prof'])){
	
}

if(isset($_POST['submit_update_prof'])){
	
	$business_name=isset($_POST['business_name'])? trim(addcslashes($_POST['business_name'])): "";
	$website=isset($_POST['website'])? trim(addcslashes($_POST['website'])): "";
	$name=isset($_POST['name'])? trim(addcslashes($_POST['name'])): "";
	$phone=isset($_POST['phone'])? trim(addcslashes($_POST['phone'])): "";
	$email=isset($_POST['email'])? trim(addcslashes($_POST['email'])): "";
	$address=isset($_POST['address'])? trim(addcslashes($_POST['address'])): "";
	$license=isset($_POST['license'])? trim(addcslashes($_POST['license'])): "";
	$interested=isset($_POST['interested'])? trim(addcslashes($_POST['interested'])): "";
	$comment=isset($_POST['comment'])? trim(addcslashes($_POST['comment'])): "";
	
	$prof_id=isset($_POST['prof_id'])? $_POST['prof_id']: 0;
	
	/*			
	$sql = "UPDATE prof 
				   SET business_name
					,website 
					,name
					,phone
					,email
					,address
					,license
					,interested
					,comment
					
					
	$result = $dbCustom->getResult($db,$sql);
	*/	
}

if(isset($_POST['del_prof_id'])){

	$sql = "DELETE FROM prof WHERE id = '".$_POST['del_prof_id']."'";
	$result = $dbCustom->getResult($db,$sql);

}

unset($_SESSION['paging']);
require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>

</head>
<body>

<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php 
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
	</div>
	<div class="manage_main">
		<?php 
		$ret_page = (isset($_GET['ret_page'])) ? $_GET['ret_page'] : '';
		$sortby = (isset($_GET['sortby'])) ? trim($_GET['sortby']) : '';
		$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
		$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
		$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
		$s_profile_account_id = 1;
		
		$search_str = (isset($_REQUEST["search_string"])) ? trim(addslashes($_REQUEST["search_string"])) : ''; 

		$sql = "SELECT business_name
				,website
				,name
				,phone
				,email
				,address
				,license
				,interested
				,comment
				,created
				FROM  professional
				WHERE profile_account_id = '".$s_profile_account_id."'";
		if($search_str != ''){			
			$sql .= " AND (name like '%".$search_str."%' OR  username like '%".$search_str."%' )" ;
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
					$sql .= " ORDER BY name ".$limit;		
				}
			}
			if($sortby == 'username'){
				if($a_d == 'd'){
					$sql .= " ORDER BY username DESC".$limit;
				}else{
					$sql .= " ORDER BY username ".$limit;		
				}
			}
			if($sortby == 'created'){
				if($a_d == 'd'){
					$sql .= " ORDER BY created DESC".$limit;
				}else{
					$sql .= " ORDER BY created ".$limit;		
				}
			}
		}else{
			$sql .= " ORDER BY professional_id ".$limit;					
		}
					
		$result = $dbCustom->getResult($db,$sql);	
		
		
		?>
		<form name="search_form" action="prof-installers-list.php" method="post" enctype="multipart/form-data">

			<div class="page_actions">
				<div class="search_bar">
                	Search by email or name<br />
<input type="text" name="search_string" class="searchbox" placeholder="Find a Customer" />
				</div>
                    
			<?php
			if($admin_access->master_level > 0){
				echo "<div class='search_bar'>
				<select name='s_profile_account_id'>";
						$sql = "SELECT id
								,company
								,domain_name
								,active
								FROM  profile_account";
								
						$res = $dbCustom->getResult($db,$sql);
								
						while($row = $res->fetch_object()){							
							$selected = ($s_profile_account_id == $row->id) ? 'selected' : '';
							echo "<option value='".$row->id."' $selected>".$row->domain_name."</option>"; 
						}
						echo "</select></div>";
			}
			?>
                    <button type="submit" class="btn btn-primary btn-large" value="Search"></button>
                </form>			
        	</div>
            <div class="clear"></div>
	<table cellpadding="10" cellspacing="0" border="0">
	<tr style="height:60px; background-color:#ababab; color:white; font-size:1.4em;">
	<td>
	<a href="customer-list.php?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Name
	<br />
	<a href="customer-list.php?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
	</td>
	<td>
	<a href="customer-list.php?sortby=username&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Username
	<br />
	<a href="customer-list.php?sortby=username&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
	</td>

	<td width="15%;">
	<a href="customer-list.php?sortby=created&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	When Created
	<br />
	<a href="customer-list.php?sortby=created&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
	</td>
	<td width="11%">&nbsp;</td>
	<td width="11%">&nbsp;</td>
    <td width="11%">&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
					
<?php
$block = '';
while($row = $result->fetch_object()) {
$block .= "<tr>";
$block .= "<td>".stripslashes($row->name)."</td>";
$block .= "<td>".$row->username."</td>";
$block .= "<td>".date("m/d/Y",strtotime($row->created))."</td>"; 
$block .= "<td><a class='btn btn-info fancybox fancybox.iframe' href='view-email-prof.php?prof_id=".$row->id."'>View</a></td>"; 
$url_str = "edit-prof.php";
$url_str .= "?prof_id=".$row->prof_id;
$url_str .= "&pagenum=".$pagenum;
$url_str .= "&sortby=".$sortby;
$url_str .= "&a_d=".$a_d;
$url_str .= "&truncate=".$truncate;
$url_str .= "&s_profile_account_id=".$s_profile_account_id;
$url_str .= "&search_str=".$search_str;
$block .= "<td><a class='btn btn-info' href='".$url_str."'>Edit</a></td>"; 
if(getProfileType($dbCustom) == 'master'){
$url_dir = 'master';
}elseif(getProfileType($dbCustom) == 'parent'){
$url_dir = 'sas-parent';
}else{
$url_dir = 'sas-non-parent';
}
$block .= "<td valign='middle'><a class='btn btn-danger confirm btn-small '>
<input type='hidden' id='".$row->prof_id."' class='itemId' value='".$row->prof_id."' />Del</a></td>";
$block .= '</tr>';
					
					}
					echo $block;
					?>
				</table>
	</div>
    
    <?php
	$url_str = "prof-installers-list.php";
	$url_str .= "?pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
    ?>
    
    <div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this Installer?</h3>
	<form name="del_prof" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_prof_id" class="itemId" type="hidden" name="del_prof_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_cust" type="submit" >Yes, Delete</button>
	</form>
	</div>
	<p class="clear"></p>
</div>
<div style="display:none">
	<div id="edit" style="width:900px; height:620px;"> </div>
</div>

<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>
