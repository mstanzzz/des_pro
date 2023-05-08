<?php 
require_once('config.php');

	
	//Constant Definitions
	//require 'parameterConstants.php';
	//require 'sessionParameterConstants.php';
	
class DesignCart {
		
	public $customer_id;
	public $anonymous_shopper_id;	
	public $design_cart_array;
	public $total_price;

		
	function __construct() {
                
		   $this->customer_id = (isset($_SESSION['ctg_cust_id']))? $_SESSION['ctg_cust_id'] : 0;
		   $this->anonymous_shopper_id = (isset($_SESSION['anonymous_shopper_id']))? $_SESSION['anonymous_shopper_id'] : rand();	
			
			if(!isset($_SESSION['design_cart'])){
				$_SESSION['design_cart'] = array();
			}
		   
			$this->design_cart_array = $_SESSION['design_cart'];
			  
	}
		
	
		
	function reloadDesignCart(){
				
				
		return 1;
				
			
	}
		
	function removeDesign($cartDesign_id = 0)
	{
		return 1;
	}
			
	function getItemCount(){
		return count($_SESSION['design_cart']);
	}
		
	function hasItems()
	{
		return (count($_SESSION['design_cart']) > 0) ? 1 : 0;	
	}
			
	function setDesignPurchased($cartDesign_id = 0){
				
	}
			
	function setCartPurchased(){
		foreach($this->design_cart_array as $val){					
			$this->setDesignPurchased($val['cartDesign_id']);					
		}				
	}
			
	function emptyCart()
	{ 
		return 0;	
	} 
			
	function getContents(){
		return $_SESSION['design_cart'];
	}
	
	function saveCart(){
		return 1;
	}

	function inCart($design_id){
				
		foreach($this->design_cart_array as $val){					
					
					if($design_id == $val['designID']){ 
					
						return 1;
					}
		}
				
		return 0;
	}
			
	function getHeaderBlock(){
				
		$block = '';
				
		foreach ($this->design_cart_array as $val) {
					
			$itemDetailsLink = $_SERVER['DOCUMENT_ROOT']."/app/#direct=".$val['designID'];
			$qty_price = $val['designPrice'] * $val['qty']; 
			$block .= '<tr>';
			$block .= "<td><a href='".$itemDetailsLink."'>";
			$block .= "<img src='/images/custom-item-in-cart.jpg' alt='' /></a>";
			$block .= '</td>';
			$block .= "<td><a href='".$itemDetailsLink."'>";
			if(strlen($val['name']) > 12){	
						$block .=  stripslashes(substr($val['name'], 0 , 12));
						$block .= "...";
			}else{
						$block .= stripslashes($val['name']);	
			}
			$block .= '</a></td>';
			$block .= "<td><a href='".$itemDetailsLink."'>";
			$block .= $val['qty'];
			$block .= '</a></td>';
			$block .= "<td><a href='".$itemDetailsLink."'>";
			$block .= '$'.number_format($qty_price,2);
			$block .= '</td>';
			$block .= '</tr>';
		}					
		return $block;					
	}
}