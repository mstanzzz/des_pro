<?php
if(!isset($_SESSION['temp_id'])){
	$_SESSION['temp_id'] = time();	
}
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$ts = time();
$msg = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="We design">
<link rel="stylesheet" href="<?php echo SITEROOT; ?>DF_css/forms.css?v=2"/>
<link rel="stylesheet" type="text/css" media="screen" 
	href="<?php echo SITEROOT; ?>plupload-2.1.8/js/jquery.plupload.queue/css/jquery.plupload.queue.css" />
<link rel="stylesheet" type="text/css" media="all" 
	href="<?php echo SITEROOT; ?>DF_css/design_request.css?v=1.2.1" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script src="<?php echo SITEROOT; ?>plupload-2.1.8/js/plupload.full.min.js"></script>

<script src="<?php echo SITEROOT; ?>plupload-2.1.8/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>

<script>

$( document ).ready(function() {
alert("HHHHHHHHHH");

});
</script>



</head>
<body style="background-color:#6495ED;">
<div id="file_uploads_container">
<h2>Attach an Image</h2>
<br /><br />
<div id="uploader">
<p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
</div>
</div>
<div style="clear:both;"></div> 
<?php
$temp_id = "'".$_SESSION['temp_id']."'";
?>
    
<script type="text/javascript">

$(function() {
	
	// Setup html5 version
	$("#uploader").pluploadQueue({
		// General settings
		runtimes : 'html5,flash,silverlight,html4',
		url : '<?php echo SITEROOT; ?>plupload-2.1.8/otg/upload.php?temp_id='+<?php echo $temp_id; ?>,
		chunk_size: '1mb',
		rename : true,
		dragdrop: true,
		filters : {
			// Maximum file size
			max_file_size : '10mb',
			// Specify what files to browse for
			mime_types: [
				{title : "Image files", extensions : "jpg,jpeg,gif,png,pdf"},
				{title : "Zip files", extensions : "zip"}
			]
		},


		flash_swf_url : '<?php echo SITEROOT; ?>plupload-2.1.8/js/Moxie.swf',
		silverlight_xap_url : '<?php echo SITEROOT; ?>plupload-2.1.8/js/Moxie.xap'
	});
	
	var uploader = $('#uploader').pluploadQueue();
	
	uploader.bind('FileUploaded', function() {
		if (uploader.files.length == (uploader.total.uploaded + uploader.total.failed)) {
			$("#submit_sendto").show();
        }else{
			$("#submit_sendto").hide();
		}
	});
	
	uploader.bind('UploadProgress', function(up, file) {
    
        if(file.percent < 100 && file.percent >= 1){
			$("#submit_sendto").hide();
        }else{
			//$("#submit_sendto").show();
        }                               
    });

});

</script>


</body>
</html>
