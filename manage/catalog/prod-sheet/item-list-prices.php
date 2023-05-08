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

function prod_sheet_get_img($img_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$ret = '';
	$sql = "SELECT file_name FROM image WHERE img_id = '".$img_id."'";
	$res = $dbCustom->getResult($db,$sql);
	if($res->num_rows > 0){			
		$obj = $res->fetch_object();
		$ret = $obj->file_name;
	}
	return $ret;
} 
$msg = (isset($_REQUEST['msg'])) ? $_REQUEST['msg'] : '';

$cart_spec_sizes_id = (isset($_GET['cart_spec_sizes_id'])) ? $_GET['cart_spec_sizes_id'] : 0;

$feat_id = (isset($_GET['feat_id'])) ? $_GET['feat_id'] : 0;
$spec_id = (isset($_GET['spec_id'])) ? $_GET['spec_id'] : 0;
$s_f_acces_id = (isset($_GET['s_f_acces_id'])) ? $_GET['s_f_acces_id'] : 0;
$for_cart = (isset($_GET['for_cart']))?1 : 0;
$for_showroom = (isset($_GET['for_showroom']))?1 : 0;
$db = $dbCustom->getDbConnect(CART_N_DATABASE);


$sql = "SELECT *
		FROM  item 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";	
if($for_cart){
	$sql.=" AND show_in_showroom = '0'";
}elseif($for_showroom){
	$sql.=" AND show_in_showroom = '1'";
}else{

}

$result = $dbCustom->getResult($db,$sql);		

$all_item_array = array();
$truncate = 0;
$i = 0;		
while($row = $result->fetch_object()){

	$all_item_array[$i]['item_id'] = $row->item_id;
	$all_item_array[$i]['img_id'] = $row->img_id;
	$all_item_array[$i]['name'] = stripslashes($row->name);
	$all_item_array[$i]['show_in_showroom'] = $row->show_in_showroom;
	$all_item_array[$i]['brand_id'] = $row->brand_id;
	$all_item_array[$i]['sku'] = $row->sku;
	$all_item_array[$i]['upc'] = $row->upc;
	$all_item_array[$i]['vendor_part_num'] = $row->vendor_part_num;
	$all_item_array[$i]['is_drop_shipped'] = $row->is_drop_shipped;
	$all_item_array[$i]['active'] = $row->active;
	$all_item_array[$i]['price_flat'] = $row->price_flat;
	$all_item_array[$i]['price_wholesale'] = $row->price_wholesale;
	$all_item_array[$i]['percent_markup'] = $row->percent_markup;
	$all_item_array[$i]['call_for_pricing'] = $row->call_for_pricing;
	$all_item_array[$i]['shipping_flat_charge'] = $row->shipping_flat_charge;	
	$all_item_array[$i]['show_in_showroom'] = $row->show_in_showroom;
	$all_item_array[$i]['show_in_tool'] = $row->show_in_tool;
	$all_item_array[$i]['show_start_design_btn'] = $row->show_start_design_btn;
	$all_item_array[$i]['show_design_request_btn'] = $row->show_design_request_btn;	
	$all_item_array[$i]['is_free_shipping'] = $row->is_free_shipping;	
	$all_item_array[$i]['in_house_price_tool'] = $row->in_house_price_tool;	
	$all_item_array[$i]['flooring'] = $row->flooring;	
	$all_item_array[$i]['added_value'] = $row->added_value;	
	

	$i++; 	
}

$item_array = $all_item_array;
$disabled = '';

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
largerCheckbox { 
	width: 20px; 
	height: 20px; 
} 
</style>		
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
/*
function submit_by_name() {
	var x = document.getElementsByName('del_form');
	x[0].submit();
}
*/

function set_is_item_active(item_id){
	var is_checked =  document.getElementById('is_active_check_box_'+item_id).checked; 
	var numerate = 0;
	if(is_checked) numerate = 1;
	alert(is_checked+"  "+numerate);
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-is-checked-box.php";
	url_str += "?item_id="+item_id+"&numerate="+numerate+"&from=item-list&type=IS_ACT";;
	axios.get(url_str).then(function(response){
		console.log(response.data);			
		alert(response.data);
	}).catch(function(error){
		console.log(error);
	});
}
function set_item_brand(item_id){
	/*
	var brand_id =  document.getElementById('item_brand_select_'+item_id).value; 
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-item-brand.php";
	url_str += "?item_id="+item_id+"&brand_id="+brand_id+"&from=item-list";
	axios.get(url_str).then(function(response){
		console.log(response.data);			
	}).catch(function(error){
		console.log(error);
	});
	*/
}
function set_item_call_for_pricing(item_id){
	var is_checked =  document.getElementById('call_for_pricing_check_box_'+item_id).checked; 
	var numerate = 0;
	if(is_checked) numerate = 1;
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-is-checked-box.php";
	url_str += "?item_id="+item_id+"&numerate="+numerate+"&from=item-list&type=call_FP";
	axios.get(url_str).then(function(response){
		console.log(response.data);			
	}).catch(function(error){
		console.log(error);
	});
}
function set_item_show_in_showroom(item_id){
	var is_checked =  document.getElementById('show_in_cart_check_box_'+item_id).checked; 
	var numerate = 0;
	if(is_checked) numerate = 1;
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-is-checked-box.php";
	url_str += "?item_id="+item_id+"&numerate="+numerate+"&from=item-list&type=SHISRM";
	axios.get(url_str).then(function(response){
		console.log(response.data);							
	}).catch(function(error){
		console.log(error);
	});
}
function set_item_is_free_shipping_checked(item_id){
	var is_checked =  document.getElementById('is_free_shipping_check_box_'+item_id).checked; 
	var numerate = 0;
	if(is_checked) numerate = 1;
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-is-checked-box.php";
	url_str += "?item_id="+item_id+"&numerate="+numerate+"&from=item-list&type=FREESHIP";
	axios.get(url_str).then(function(response){
		console.log(response.data);					
	}).catch(function(error){
		console.log(error);
	});
}
function set_item_price_wholesale(item_id){
	var price_wholesale =  document.getElementById('item_price_wholesale_'+item_id).value; 
	alert(price_wholesale);
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-item-price-wholesale.php";
	url_str += "?item_id="+item_id+"&price_wholesale="+price_wholesale+"&from=item-list";
	axios.get(url_str).then(function(response){
		console.log(response.data);			
	}).catch(function(error){
		console.log(error);
	});
}
function set_item_percent_markup(item_id){
	
	var percent_markup =  document.getElementById('item_percent_markup_'+item_id).value; 
	alert(percent_markup);

	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-item-percent-markup.php";
	url_str += "?item_id="+item_id+"&percent_markup="+percent_markup+"&from=item-list";
	axios.get(url_str).then(function(response){
		console.log(response.data);			
	}).catch(function(error){
		console.log(error);
	});
	
}
function set_item_shipping_flat_charge(item_id){
	var shipping_flat_charge =  document.getElementById('item_shipping_flat_charge_'+item_id).value; 
	alert(shipping_flat_charge);

	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-item-shipping-flat-charge.php";
	url_str += "?item_id="+item_id+"&shipping_flat_charge="+shipping_flat_charge+"&from=item-list";
	axios.get(url_str).then(function(response){
		console.log(response.data);			
	}).catch(function(error){
		console.log(error);
	});
}
function set_item_flooring(item_id){
	var flooring =  document.getElementById('item_flooring_'+item_id).value; 
	alert(flooring);

	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-item-flooring.php";
	url_str += "?item_id="+item_id+"&flooring="+flooring+"&from=item-list";
	axios.get(url_str).then(function(response){
		console.log(response.data);			
	}).catch(function(error){
		console.log(error);
	});
}
function set_item_added_value(item_id){
	var added_value =  document.getElementById('item_added_value_'+item_id).value; 
	alert(added_value);

	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-item-added-value.php";
	url_str += "?item_id="+item_id+"&added_value="+added_value+"&from=item-list";
	axios.get(url_str).then(function(response){
		console.log(response.data);			
	}).catch(function(error){
		console.log(error);
	});
}

function set_item_price_flat(item_id){

	var price_flat =  document.getElementById('item_price_flat_'+item_id).value; 
	alert(price_flat);
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-item-price-flat.php";
	url_str += "?item_id="+item_id+"&price_flat="+price_flat+"&from=item-list";
	axios.get(url_str).then(function(response){
		console.log(response.data);	
	}).catch(function(error){
		console.log(error);
	});
}


function set_show_in(show_in_showroom,item_id){
	//alert(show_in_showroom);
	//alert(item_id);
	if(show_in_showroom < 1) show_in_sr = 1;
	if(show_in_showroom > 0) show_in_sr = 0;
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-show-in-sr.php?item_id="+item_id+"&show_in_sr="+show_in_sr;
	axios.get(url_str).then(function(response){
		console.log(response.data);	
	}).catch(function(error){
		console.log(error);
	});


}

</script>
</head>
<body>
<br />
<a class="btn btn-info" style="margin-left:14px; float:left;" 
href="<?php echo SITEROOT.'manage/catalog/prod-sheet/index.php'; ?>">Go Back</a>
<a class="btn btn-info" style="margin-left:14px; float:left;" 
href="<?php echo SITEROOT.'manage/catalog/prod-sheet/item-list.php?for_cart=1'; ?>">Get Only Cart Products</a>
<a class="btn btn-info" style="margin-left:14px; float:left;" 
href="<?php echo SITEROOT.'manage/catalog/prod-sheet/item-list.php?for_showroom=1'; ?>">Get Only Showroom Products</a>
<a class="btn btn-info" style="margin-left:14px; float:left;" 
href="<?php echo SITEROOT.'manage/catalog/prod-sheet/item-list.php?all=1'; ?>">Get All Products</a>

<div style="clear:both; height:20px;"></div>

<table width="100%" cellspacing="1" cellpadding="1" border="1" style="background: #7499CA; color:white; font-size:0.8em;"> 
	<tr height="60" style="color:#D2E7FC; font-size:18px; background:#5576A3; ">
    <td width="2%"></td>
 
    <td width="2%">Item No</td> 
    <td width="15%">Name</td>
    <td width="5%">Show in Showroom</td>
	<td width="10%">Flat Price</td>
	<td width="10%">Wholesale</td>
	<td width="10%">Percent Markup</td>
	<td width="10%">Shipping Flat Charge</td>
	<td width="10%">Flooring</td>
	<td>Added Value</td>
    </tr>
    <?php
	$block = "";
    foreach($item_array as $key => $val){
		
		$fn = prod_sheet_get_img($val['img_id']);
		$block .= "<tr>";
		
		$block .= "<td>";
		$block .= "<a class='fancybox' href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$fn."'>";
		$block .= "<img src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$fn."'></a></td>";
		$block .= "</td>";
		$block .= "<td><input type='hidden' name='item_id[]' value='".$val['item_id']."' >".$val['item_id']."</td>";
		$block .= "<td>".$val['name']."</td>";

	$checked = ($val["show_in_showroom"])? "checked='checked'" : ''; 
	$block	.= "<td>
				<div   onClick='set_show_in(".$val['show_in_showroom'].",".$val['item_id'].");' class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input id='show_in_showroom' type='checkbox' class='checkboxinput' name='show_in_showroom' 
				value='".$val['show_in_showroom']."' ".$checked." /></div>";
	$block .= "</td>";	


		
		$block .= "<td>";
		$block .= "<input style='width:60px;' type='text' name='price_flat' id='item_price_flat_".$val['item_id']."'";
		$block .= " value='".$val['price_flat']."' onBlur='set_item_price_flat(".$val['item_id'].");'  />";
		$block .= "</td>";				 
		
		$block .= "<td>";
		$block .= "<input style='width:60px;' type='text' name='price_wholesale' id='item_price_wholesale_".$val['item_id']."'";
		$block .= " value='".$val['price_wholesale']."' onBlur='set_item_price_wholesale(".$val['item_id'].");'  />";
		$block .= "</td>";
		$block .= "<td>";
		$block .= "<input style='width:60px;' type='text' name='percent_markup' id='item_percent_markup_".$val['item_id']."'";
		$block .= " value='".$val['percent_markup']."' onBlur='set_item_percent_markup(".$val['item_id'].");'  />";
		$block .= "</td>";
		
		$block .= "<td>";
		$block .= "<input style='width:60px;' type='text' name='shipping_flat_charge' id='item_shipping_flat_charge_".$val['item_id']."'";
		$block .= " value='".$val['shipping_flat_charge']."' onBlur='set_item_shipping_flat_charge(".$val['item_id'].");'  />";
		$block .= "</td>";
		
		$block .= "<td>";
		$block .= "<input style='width:60px;' type='text' name='flooring' id='item_flooring_".$val['item_id']."'";
		$block .= " value='".$val['flooring']."' onBlur='set_item_flooring(".$val['item_id'].");'  />";
		$block .= "</td>";
	
		$block .= "<td>";
		$block .= "<input style='width:60px;' type='text' name='added_value' id='item_added_value_".$val['item_id']."'";
		$block .= " value='".$val['added_value']."' onBlur='set_item_added_value(".$val['item_id'].");'  />";
		$block .= "</td>";
		
		$block .= "</tr>";
    
	}
    
    echo $block; 
	
    ?>
    </table>
	
</body>
</html>

