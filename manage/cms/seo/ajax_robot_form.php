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

$action = (isset($_REQUEST['action']))?	$_REQUEST['action'] : '';


if($action != '0'){
	
	for($i = 0; $i < $_SESSION['input_count']; $i++){
		
		if(isset($_REQUEST["exc_$i"])){
		
			//echo "<br />".$_REQUEST["exc_$i"];	
			
			$_SESSION['exclude_values'][$i] = $_REQUEST["exc_$i"]; 
		}else{
			$_SESSION['exclude_values'][$i] = '';
		}
	}
}

if($action == 'delete'){

	$del_num = (isset($_REQUEST["del_num"])) ? $_REQUEST["del_num"] : '';

	$t = array();
	
	if($del_num != ''){
		for($i = 0; $i < $_SESSION['input_count']; $i++){

			if($i != $del_num){
				if(isset($_SESSION['exclude_values'][$i])){
					if($_SESSION['exclude_values'][$i] != ''){
						$t[] = $_SESSION['exclude_values'][$i];	
					}
				}
			}
		}
		$_SESSION['exclude_values'] = $t; 		
		$_SESSION['input_count'] = count($t);	
	}
}

if($action == 'add'){
	$_SESSION['input_count']++;
}

?>

<script>

function get_query_str(){
	
	query_str = '';
	
	var the_val = ''
	
	<?php for($i = 0; $i < $_SESSION['input_count']; $i++){ ?>	
		
		the_val = $('#exc_<?php echo $i; ?>').val();
		
		the_val = the_val.replace("&", "||");
		
		query_str += '&exc_<?php echo $i; ?>='+the_val;
		
		
		 		
	<?php } ?>
	
	//alert(query_str);
	
	return query_str;
}


function delete_exclude(v){

	q_str = '?action=delete&del_num='+v;
	q_str += get_query_str();
	set_form(q_str);
}


</script>

<?php

//$db = $dbCustom->getDbConnect(CART_N_DATABASE);

	//if(isset($_GET['name'])) $_SESSION["temp_fields"]['name'] = $_GET['name'];


	$block = '';

	for($i = 0; $i < $_SESSION['input_count']; $i++){
					
		if(!isset($_SESSION['exclude_values'][$i])) $_SESSION['exclude_values'][$i] = '';					 
		
		
		$_SESSION['exclude_values'][$i] = str_replace('||','&', $_SESSION['exclude_values'][$i]);
										
		$block .= "<div style='float:left;'><input id='exc_".$i."' type='text' name='excludes[]' value='".$_SESSION['exclude_values'][$i]."'></div>";
		$block .= "<div style='float:left;'><a onclick='delete_exclude(".$i.")' href='#'>Delete</a></div>";						
		$block .= "<div style='clear:both'></div>";
					
	}			



//echo "input_count".$_SESSION['input_count'];

echo $block;



?>


