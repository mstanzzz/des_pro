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
require_once($real_root.'/includes/config.php');

if(!isset($_SESSION['temp_id'])){
	$_SESSION['temp_id'] = time();	
}

$temp_id = $_SESSION['temp_id'];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>Plupload - Queue widget example</title>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo SITEROOT; ?>plupload-2.1.8/js/jquery.plupload.queue/css/jquery.plupload.queue.css" type="text/css" media="screen" />
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!-- production -->
<script type="text/javascript" src="<?php echo SITEROOT; ?>plupload-2.1.8/js/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>plupload-2.1.8/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<!-- debug 
<script type="text/javascript" src="<?php echo SITEROOT; ?>js/moxie.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>js/plupload.dev.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
 -->
</head>
<body style="font: 13px Verdana; background: #eee; color: #333">
<form method="post" action="dump.php">	
	<div id="uploader">
		<p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
	</div>
</form>
<script type="text/javascript">
$(function() {
	
	// Setup html5 version
	$("#uploader").pluploadQueue({
		// General settings
		runtimes : 'html5,flash,silverlight,html4',
		url : '<?php echo SITEROOT; ?>/plupload-2.1.8/otg/upload.php?temp_id='+<?php echo $temp_id; ?>,
		chunk_size: '1mb',
		rename : true,
		dragdrop: true,
		//autostart: true,
		filters : {
			// Maximum file size
			max_file_size : '10mb',
			// Specify what files to browse for
			mime_types: [
				{title : "Image files", extensions : "jpg,jpeg,gif,png,pdf"},
				{title : "Zip files", extensions : "zip"}
			]
		},
		flash_swf_url : '<?php echo SITEROOT; ?>/plupload-2.1.8/js/Moxie.swf',
		silverlight_xap_url : '<?php echo SITEROOT; ?>/plupload-2.1.8/js/Moxie.xap'

	});
	
	var uploader = $('#uploader').pluploadQueue();
	
	// M Stanz added this for auto upload
	//uploader.bind('FilesAdded', function() {
		//uploader.start();
	//});
	
	uploader.bind('FileUploaded', function() {
		if (uploader.files.length == (uploader.total.uploaded + uploader.total.failed)) {
			
			// Autostart
			//setTimeout(uploader.start, 1); // "detach" from the main thread
			//$(".plupload_add").show();
        
		}else{
		}
	});
	
	uploader.bind('UploadProgress', function(up, file) {    
        if(file.percent < 100 && file.percent >= 1){

        }else{
			
        }                               
    });

});


</script>

</body>
</html>
