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


$page_title = "View Careers Request";
$page_group = '';
$msg = '';
	
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

require_once($real_root.'/manage/admin-includes/doc_header.php'); 

?>
</head>

<body class="printable_page">
<div class="print_container">
	<?php 
        
    $db = $dbCustom->getDbConnect(SITE_N_DATABASE);

    $careers_app_id = (isset($_GET['careers_app_id'])) ? $_GET['careers_app_id'] : 0; 
    
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "SELECT * FROM careers_app WHERE careers_app_id = '".$careers_app_id."' ";
	$result = $dbCustom->getResult($db,$sql);	
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$last_update = $object->last_update; 

		$first_name = $object->first_name;
		$last_name = $object->last_name;
		$name = $object->name;
		$email = $object->email;
		$phone = $object->phone;
		$department = $object->department;
		$position = $object->position;
		$user_id = $object->user_id;					
	}else{
		$first_name = '';
		$last_name = '';
		$name = '';
		$email = '';
		$phone = '';
		$department = '';
		$position = '';
		$user_id = 0;					
	}
	
	$url_str = "careers.php";
	
	?>
	<div class="fltrt">
    <a href="#" onClick="window.print();return false" class="btn btn-large">Print Page</a><br /><br />
    
    <a href="<?php echo $url_str; ?>" target="_top" class="btn btn-large"> Go Back</a><br /></div>
    
	<h2><?php echo $name; ?><br /><?php echo date("F j, Y, g:i a", $last_update); ?></h2>
	<table border="0" cellpadding="6" width="100%">
		<tr>
			<td class="section_heading" colspan="4"><strong>Contact Info</strong></td>
		</tr>
		<tr>
			<td width="25%">Name</td>
			<td><?php echo $name;?></td>
		</tr>	
		<tr>
			<td width="25%">Email</td>
			<td><?php echo $email; ?></td> 
		</tr>
		<tr>
			<td>Phone</td>
			<td><?php echo $phone; ?></td>
		</tr>
		<tr>
			<td>Department</label></td>
			<td><?php echo $department; ?></td>
		</tr>
		<tr>

			<td>Position</td>
			<td><?php echo $position; ?></td>
		</tr>	
	</table>
	
    <div class="page_break"></div>
	<table width="100%" cellpadding="6" cellspacing="0">
		<tr>
			<td class="section_heading"><strong>Submitted Images / Applications</strong></td>
		</tr>
		<?php        
			$sql = "SELECT file_name
					FROM careers_app_image 
					WHERE careers_app_id = '".$careers_app_id."' 
					ORDER BY careers_app_image_id";	
					
			echo $sql;
			
			
			$result = $dbCustom->getResult($db,$sql);
			$block = '';	
			if($result->num_rows == 0){
				$block .= "<tr><td><label>No Images Submitted.</label></td></tr>";
			}else{
				
				$block = ''; 
				$i = 1;
				while($img_row = $result->fetch_object()) {					
									
					if(file_exists($real_root."/user_uploads/".$_SESSION['profile_account_id']."/".$img_row->file_name)){				
										
						$block .= "<tr><td>";
						$block .= "<a href=''".SITEROOT."/user_uploads/".$_SESSION['profile_account_id']."/".$img_row->file_name."' target='_blank'>";
						$block .= "<img src='".SITEROOT."/user_uploads/".$_SESSION['profile_account_id']."/".$img_row->file_name."' />";
						$block .= "</a>";
						$block .= "</td></tr>";
						$block .= "<tr><td><hr /></td></tr>";
					}
				}
				echo $block;
				}
			?>
	</table>
  
    
</div>
</body>
</html>

