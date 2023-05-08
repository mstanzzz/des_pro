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

$page_title = "Add Location";

	

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$msg = '';


require_once($real_root.'/manage/admin-includes/doc_header.php'); 

?>
</head>
<body>

<div class="lightboxholder">
	<?php if($msg != ''){ ?>
	<div class="alert">
		<p><?php echo $msg ?></p>
	</div>
	<?php } ?>
	<form name="form" action="contact-us.php" method="post" target="_top">
		<div class="lightboxcontent">
			<h2>Add a New Location</h2>
			<fieldset class="colcontainer">
					<div class="location_container">
                        <div class="colcontainer formcols">
							<div class="twocols">
								<label>Location Name</label>
							</div>
							<div class="twocols">
								<input type="text" name="name"  />
							</div>
						</div>
						<div class="colcontainer formcols">
							<div class="twocols">
								<label>Street Address</label>
							</div>
							<div class="twocols">
								<input type="text" name="street_addr"  />
							</div>
						</div> 

						<div class="colcontainer formcols">
							<div class="twocols">
								<label>City</label>
							</div>
							<div class="twocols">
								<input type="text" name="city"  />

							</div>
						</div>
						<div class="colcontainer formcols">
							<div class="twocols">
								<label>State</label>
							</div>
							<div class="twocols">
  							<select name="state" style="width:120px;">
							<?php 
							$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
							$sql = "SELECT state, state_abr 
									FROM states 
									WHERE hide = '0'
									AND profile_account_id = '1' 
									ORDER BY country DESC, state"; 
					$result = $dbCustom->getResult($db,$sql);							
							 $block = '';		 
							 while($row = $result->fetch_object()) {
								$block .= "<option value='".$row->state_abr."' $sel >$row->state</option>";
							 }
							echo $block;
							?>
							</select>

							</div>
						</div>
						<div class="colcontainer formcols">
							<div class="twocols">
								<label>Zip Code</label>
							</div>
							<div class="twocols">
								<input type="text" name="zip" />
							</div>
						</div>
  						<div class="colcontainer formcols">
							<div class="twocols">
								<label>Location Phone</label>
							</div>
							<div class="twocols">
								<input type="text" name="phone" />
							</div>
						</div>
  						<div class="colcontainer formcols">
							<div class="twocols">
								<label>Location Email Address</label>
							</div>
							<div class="twocols">
								<input type="text" name="email"  />
							</div>
						</div>
						<div class="colcontainer formcols">
							<div class="twocols">
								<label>Location Hours</label>
							</div>
							<div class="twocols">
								<textarea class="wysiwyg small" name="hours"></textarea>
							</div>
						</div>

            		</div>
				</fieldset>
			</div>
		<div class="savebar">
            <button class="btn btn-large btn-success" name="add_location" type="submit" ><i class="icon-ok icon-white"></i> Add New Location </button>
		</div>
	</form>
</div>
</body>
</html> 




















