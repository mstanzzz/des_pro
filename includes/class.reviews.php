<?php

class Reviews {

	function __construct()
	{
	
	}

	function getAll($dbCustom,$words=0)
	{		
		
		$all_reviews=array();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$sql = "SELECT *
				FROM testimonial
				WHERE hide = '0'
				AND profile_account_id = '".$_SESSION['profile_account_id']."'
				ORDER BY testimonial_id";
		$result = $dbCustom->getResult($db,$sql);
		$i=0;
		while($row=$result->fetch_object()){
			$all_reviews[$i]['name']=$row->name;	
			$all_reviews[$i]['addr']=$row->city_state;	
			if($words>0){
				$msg=$this->limit_words($row->content,$words).' ...';
			}else{
				$msg=$row->content;
			}				
			$all_reviews[$i]['msg']=$msg;
			$all_reviews[$i]['stars']=$this->get_review_stars($row->rating);	
			$i++;	
		}
		
		return $all_reviews;
	}


	function getMultiRandom($dbCustom,$n=6,$words=0,$min_stars=4)
	{		
		$all_reviews=array();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$sql = "SELECT *
				FROM testimonial
				WHERE hide = '0'
				AND rating >= '".$min_stars."'
				AND profile_account_id = '".$_SESSION['profile_account_id']."'
				ORDER BY RAND() LIMIT ".$n;
				
		$result = $dbCustom->getResult($db,$sql);
		$i=0;
		while($row=$result->fetch_object()){
			$all_reviews[$i]['name']=$row->name;	
			$all_reviews[$i]['addr']=$row->city_state;
			if($words>0){
				$msg=$this->limit_words($row->content,$words).' ...';
			}else{
				$msg=$this->$row->content;
			}				

			$all_reviews[$i]['msg']=$msg;
			$all_reviews[$i]['stars']=$this->get_review_stars($row->rating);	
			$i++;	
		}
		
		return $all_reviews;
	}

	function getOneRandom($dbCustom,$words=0,$min_stars=4)
	{
		$review=array();
		$review['name']='Reggie D.';	
		$review['addr']='Nashville, Tennessee';	
		$review['msg']='I love my closet. I now want to do some of the other closets in the house. The service was great.';
		$review['stars']=$this->get_review_stars(5);	
		
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$sql = "SELECT *
				FROM testimonial
				WHERE hide = '0'
				AND rating >= '".$min_stars."'
				AND profile_account_id = '".$_SESSION['profile_account_id']."'
				ORDER BY RAND() LIMIT 1";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows>0){
			$object=$result->fetch_object();
			$review['name']=$object->name;	
			$review['addr']=$object->city_state;
			if($words>0){
				$msg=$this->limit_words($object->content,$words).' ...';
			}else{
				$msg=$this->$object->content;
			}				
			$review['msg']=$msg;
			$review['stars']=$this->get_review_stars($object->rating);
		}
		return $review;
	}


	
	function limit_words($string, $word_limit)
	{
		$words = explode(" ",$string);
		return implode(" ",array_splice($words,0,$word_limit));
	}
 
 
 
	function get_review_stars($rating){
		
		$stars = '';
		$stars .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 

		$stars_four = '';
		$stars_four .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars_four .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars_four .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars_four .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 

		$stars_three = '';
		$stars_three .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars_three .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		$stars_three .= "<img src='".SITEROOT."images/star.svg' alt=''>"; 
		
		if($rating==3){
			return $stars_three;	
		}
		if($rating==4){
			return $stars_four;	
		}
		return $stars;	
		
	}




}

?>
