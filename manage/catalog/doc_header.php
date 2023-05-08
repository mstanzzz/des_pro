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


?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link href="../manage/js/fancybox2/source/jquery.fancybox.css?v=2.1.4" media="screen"  type="text/css" rel="stylesheet"/>
<link href="../manage/css/manageStyle.css?v=1" media="screen" type="text/css" rel="stylesheet"/>
<link href="../manage/js/chosen/chosen.css" media="screen" type="text/css" rel="stylesheet"/>
<link href="../manage/css/jquery.multiselect.css" media="screen" type="text/css" rel="stylesheet"/>
<link href="../manage/jquery.multiselect.filter.css" media="screen" type="text/css" rel="stylesheet"/>
<link href="../manage/css/custom-theme/jquery-ui-1.8.23.custom.css" media="screen" type="text/css" rel="stylesheet"/>
<link href="../manage/css/print.css" media="print" type="text/css" rel="stylesheet"/>
<link href="../manage/css/forms.css" media="print" type="text/css" rel="stylesheet"/>

<link href="../manage/css/manageStyle.css" media="print" type="text/css" rel="stylesheet"/>


<script src="../manage/js/jquery-1.8.1.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

<script type="text/javascript" src="/manage/js/chosen/chosen.jquery.min.js"></script>

<script type="text/javascript" src="/manage/js/tinymce/tinymce.min.js"></script>

<script type="text/javascript" src="/manage/js/formtoggles.js"></script>

<script type="text/javascript" src="/manage/js/inlineConfirmation.js"></script>

<script type="text/javascript" src="/manage/js/fancybox2/source/jquery.fancybox.js?v=2.1.4"></script>
<script type="text/javascript" src="/manage/js/ui/jquery.ui.core.js"></script>
<script type="text/javascript" src="/manage/js/ui/jquery.ui.widget.js"></script>
<script type="text/javascript" src="/manage/js/ui/jquery.ui.datepicker.js"></script>

<script type="text/javascript" src="/manage/js/jquery.multiselect.min.js" ></script>

<script type="text/javascript" src="/manage/js/jquery.multiselect.filter.min.js"></script>
<script type="text/javascript" src="/manage/js/bootstrapcustom.min.js"></script>


<script type="text/javascript" src="/manage/js/ctg_form_validation.js"></script>


<script type="text/javascript">

$(document).ready(function(){
	
	//$('.fancybox').fancybox();
	
	$('.fancybox').fancybox({
		autoSize : false,
		height : 800,
		width : 1060	
	});	

	
		
});

</script>

