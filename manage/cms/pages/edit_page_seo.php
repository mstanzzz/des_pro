<?php
if(!isset($page)) $page = '';
if(!isset($from_added_page)) $from_added_page = 0;
if(!isset($is_dynamic)) $is_dynamic = 0;
if($page == "showroom"){
	$is_dynamic = 1;	
}else{
	$is_dynamic = 0;
}
if(!isset($_SESSION['temp_fields']['seo_name'])) $_SESSION['temp_fields']['seo_name']='';		
if(!isset($_SESSION['temp_fields']['title'])) $_SESSION['temp_fields']['title'] = '';	
if(!isset($_SESSION['temp_fields']['keywords'])) $_SESSION['temp_fields']['keywords'] = '';	
if(!isset($_SESSION['temp_fields']['description'])) $_SESSION['temp_fields']['description'] = '';
?>
<table width="100%" border="1">

<tr>
<td width="20%;">Page URL</td>
<td><?php echo SITEROOT; ?>
<input style="width:96%" id="seo_name" name="seo_name" type="text" 
value="<?php echo $_SESSION['temp_fields']['seo_name']; ?>" />.html 
</td>
</tr>

<tr>
<td>META Title</td>
<td>
<input style="width:96%" id="title" name="title" type="text" 
value="<?php echo $_SESSION['temp_fields']['title']; ?>" />
</td>
</tr>

<tr>
<td>META Keywords</td>
<td>
<input style="width:96%" id="keywords" name="keywords" type="text" 
value="<?php echo $_SESSION['temp_fields']['keywords']; ?>" />
</td>
</tr>


<tr>
<td>META Description</td>
<td>
<input style="width:96%" id="description" name="description" type="text" 
value="<?php echo $_SESSION['temp_fields']['description']; ?>" />
</td>
</tr>

</table>


        
