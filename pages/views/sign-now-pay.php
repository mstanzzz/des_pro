<?php
//http://localhost/storittek/about-us.html	
foreach($_SESSION['pages'] as $p_val){
	//$url_str = SITEROOT.$_SESSION['global_url_word']."/".$p_val['page_name'].".html";
	$url_str = SITEROOT.$p_val['page_name'].".html";
	
	echo "<br />";
	echo "<a href='".$url_str."'>".$url_str."</a>";
	echo "<br />";
	echo "<br />";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="about-us">

</head>
<body>
<table width="600" border="1">
<tr>
<td scope="row" class="text">shipping_name_first:</td>
<td>
<input type="text" name="shipping_name_first" value="<?php echo $data['shipping_name_first']; ?>" />
</td>
</tr>

<tr>
<td scope="row" class="text">shipping_name_last:</td>
<td>
<input type="text" name="shipping_name_last" value="<?php echo $data['shipping_name_last']; ?>" />
</td>
</tr>

<tr>
<td scope="row" class="text">shipping_address_one:</td>
<td>
<input type="text" name="shipping_address_one" value="<?php echo $data['shipping_address_one']; ?>" />
</td>
</tr>

<tr>
<td scope="row" class="text">shipping_address_two:</td>
<td>
<input type="text" name="shipping_address_two" value="<?php echo $data['shipping_address_two']; ?>" />
</td>
</tr>

<tr>
<td scope="row" class="text">shipping_city:</td>
<td>
<input type="text" name="shipping_city" value="<?php echo $data['shipping_city']; ?>" />
</td>
</tr>

<tr>
<td scope="row" class="text">shipping_state:</td>
<td>
<select id="input_shipping_state" name="shipping_state">
<option value='0' selected>State</option>
<?php 
$db = $dbCustom->getDbConnect(SITE_DATABASE);
$sql = "SELECT state, state_abr 
FROM states 
WHERE hide = '0'
AND profile_account_id = '".$_SESSION['profile_account_id']."'  
ORDER BY state"; 
$result = $dbCustom->getResult($db,$sql);								
$block = "";
while($row = $result->fetch_object()) {
$sel =  ($_SESSION['checkout_info_array']['shipping_state'] == $row->state_abr) ? "selected" : '';	
$block .= "<option value='".$row->state_abr."' ".$sel." >".$row->state_abr."</option>";
}
echo $block;
?>
</select>

</td>
</tr>

<tr>
<td scope="row" class="text">shipping_zip:</td>
<td><input type="text" name="shipping_zip" value="<?php echo $data['shipping_zip']; ?>" /></td>
</tr>

<tr>
<td scope="row" class="text">shipping_phone:</td>
<td><input type="text" name="shipping_phone" value="<?php echo $data['shipping_phone']; ?>" /></td>
</tr>

<tr>
<td scope="row" class="text">billing_name_first:</td>
<td><input type="text" name="billing_name_first" value="<?php echo $data['billing_name_first']; ?>" /></td>
</tr>

<tr>
<td scope="row" class="text">billing_name_last:</td>
<td><input type="text" name="billing_name_last" value="<?php echo $data['billing_name_last']; ?>" /></td>
</tr>


<tr>
<td scope="row" class="text">billing_address_one:</td>
<td><input type="text" name="billing_address_one" value="<?php echo $data['billing_address_one']; ?>" /></td>
</tr>

<tr>
<td scope="row" class="text">billing_address_two:</td>
<td><input type="text" name="billing_address_two" value="<?php echo $data['billing_address_two']; ?>" /></td>
</tr>

<tr>
<td scope="row" class="text">billing_city:</td>
<td><input type="text" name="billing_city" value="<?php echo $data['billing_city']; ?>" /></td>
</tr>

<tr>
<td scope="row" class="text">billing_state:</td>
<td>

<select id="input_billing_state" name="billing_state">
<option value='0' selected>State</option>
<?php 
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT state, state_abr 
FROM states 
WHERE hide = '0'
AND profile_account_id = '".$_SESSION['profile_account_id']."'  
ORDER BY state"; 
$result = $dbCustom->getResult($db,$sql);									
$block = "";
while($row = $result->fetch_object()) {
$sel =  ($_SESSION['checkout_info_array']['billing_state'] == $row->state_abr) ? "selected" : '';	
$block .= "<option value='".$row->state_abr."' ".$sel." >".$row->state_abr."</option>";
}
echo $block;
?>
</select>
</td>
<tr>
<td scope="row" class="text">billing_zip:</td>
<td><input type="text" name="billing_zip" value="<?php echo $data['billing_zip']; ?>" /></td>
</tr>

<tr>
<td scope="row" class="text">billing_phone:</td>
<td><input type="text" name="billing_phone" value="<?php echo $data['billing_phone']; ?>" /></td>
</tr>
<tr>
<td scope="row" class="text">email:</td>
<td><input type="text" name="email" value="<?php echo $data['email']; ?>" /></td>
</tr>
</tr>
<tr>
<td scope="row" class="text">Sub Total:</td>
<td>$52.44</td>
</tr>
<tr>
<td scope="row" class="text">Discount:</td>
<td>$0.00</td>
</tr>
<tr>
<td scope="row" class="text">Tax:</td>
<td>$0.00</td>
</tr>
<tr>
<td>Price:</td>
<td class="text-right">$52.44</td>
</tr>
<!-- 4111111111111111 -->
<tr>
<td>Card Number:</td>
<td class="text-right"><input type="text" value="" autocomplete="off" name="CARDNUM" id="input_CARDNUM" /></td>
</tr>


<tr>
<td>Expiration Month:</td>
<td class="text-right">
<select name="EXPMONTH" id="input_EXPMONTH">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option> 
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</td>
</tr>

<tr>
<td>Expiration Year:</td>
<td class="text-right">
<select name="EXPYEAR" id="input_EXPYEAR">
<?php
$year_4digit =  date("Y");
$year_2digit =  date("y");
for($i = 0; $i < 8; $i++){
echo "<option value='".$year_2digit."'>".$year_4digit."</option>";      
$year_2digit++;
$year_4digit++;
}
?>
</select>
</td>
</tr>

<tr>
<td>CVV2:</td>
<td class="text-right">
<input style="width:80px; position:relative; top:8px;" type="text" name="CVV2" id="input_CVV2" />
</td>
</tr>

<tr>
<td></td>
<td class="text-right">
<button class="btn btn-secondary btn-checkout btn-full btn-full">
submit order
</button>
</td>
</tr>

</table>





</body>
</html>

