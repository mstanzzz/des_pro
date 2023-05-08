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


	if(!isset($_SESSION['cat_id'])) $_SESSION['cat_id'] = 0;
	if(!isset($_SESSION['parent_cat_id'])) $_SESSION['parent_cat_id'] = 0;
	$t_cats = array();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		
	$sql = "SELECT cat_id, name, img_id, show_on_home_page 
			FROM category 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			ORDER BY name";
	$result = $dbCustom->getResult($db,$sql);				
	$i = 0;
	while($row = $result->fetch_object()) {
		$t_cats[$i]['cat_id'] = $row->cat_id;
		$t_cats[$i]['name'] = $row->name;
		$t_cats[$i]['show_on_home_page'] = $row->show_on_home_page;
		$sql = "SELECT file_name 
				FROM image
				WHERE img_id = '".$row->img_id."'";
		$img_res = $dbCustom->getResult($db,$sql);
		if($img_res->num_rows > 0){
			$img_obj = $img_res->fetch_object();
			$t_cats[$i]['file_name'] = $img_obj->file_name;
		}else{
			$t_cats[$i]['file_name'] = '';					
		}
									
		$i++;
	}
	$_SESSION["temp_cats"] = $t_cats; 	
?>
<script type="text/javascript">
function setCatBox(){
	var $optarr = $("select.selectedCats");
	<?php
	foreach($_SESSION["temp_cats"] as $val){		
		$cat_path_array = getCatPath($val['cat_id']);
			$cat_tooltip = '';
			$i = 0;
			$last_index = sizeof($cat_path_array);
			foreach($cat_path_array as $cat_name){
				$cat_name = preg_replace( '/[^a-zA-Z0-9-]+/', ' ', $cat_name );
				$cat_tooltip .= $cat_name;
				$i++;
				if($i < $last_index){
					$cat_tooltip .= " -> ";
				}
			}
	?>
		var option = "<option title='' id='<?php echo $val['cat_id']; ?>' value='<?php echo $val['cat_id']; ?>' ><?php echo $val['name']; ?></option>";
		var opt = $(option);
		$optarr.append(opt);
		opt.attr("selected","selected");
	
	<?php	
	}
	?>
	$(".selectedCats").trigger("liszt:updated");
}


function updateOptions(){
	var selectedCategories = $(".selectcattree input[type='checkbox']");
	var $optarr = $("select.selectedCats");
	$(selectedCategories).each(function() {
		var currentId = $(this).val();
		var option = "<option id='"+currentId+"' value='"+currentId+"' >"+$(this).next(".categoryname").val()+" "+currentId+"</option>";
		var opt = $(option);
		if ($($optarr).has("option#"+currentId).length){
			var existingitem = $optarr.find("option#"+currentId);
			if($(this).attr("checked") == "checked"){
				existingitem.attr("selected","selected");	
			}else{
				existingitem.removeAttr("selected");	
			}
		}
		else {
			if($(this).attr("checked") == "checked"){
				opt.attr("selected","selected");	
			}
			$optarr.append(opt);
		}
	});
	$(".selectedCats").trigger("liszt:updated");
}
function updateCheckboxes(){
	$("select.selectedCats option").each(function() {
		var currentId = $(this).attr("id");
		if ($(".selectcattree input[type='checkbox']#"+currentId).length){
			var existingitem = $(".selectcattree").find("input#"+currentId);
			if($(this).is(":selected")){
				existingitem.attr("checked","checked");	
			}else{
				existingitem.removeAttr("checked");	
			}
		}
	});
}



function collapse_all(){
	$('.selectcattree ul.childrenplaceholder').empty();	
}

$(document).ready(function(){
	$("li").hover(function(){
		$(this).css("background-color", "#F9FBFC");
	}, function(){
		$(this).css("background-color", "transparent");
	});
	$("select.selectedCats").change(function(e){
		updateCheckboxes();	
	});
	$(".expand-all").click(function(e){
		
		e.preventDefault();
		var state = $(this).text();
		if (state.indexOf("Expand") != -1){
			var wheel = "<li><img src='<?php echo SITEROOT; ?>images/progress.gif'></li>";
			$('#categorytree').html(wheel);
			$.ajaxSetup({ cache: false}); 
			$.ajax({
			  url: '<?php echo SITEROOT; ?>manage/catalog/categories/ajax_get_tree_snippet_expanded_cat_list.php?subject_cat_id='+<?php echo $_SESSION['cat_id']; ?>,
			  success: function(data) {
					$('#categorytree').html(data);
					updateCheckboxes();
			  }
			});
			$(this).text("Collapse All");
		}
		else {
		
			collapse_all();
			$(this).text("Expand All");
		}
	});
	setCatBox();
});


</script>
<script type="text/javascript" src="<?php echo SITEROOT;?>js/categorytree.js"></script>

<label>Search for and Select Categories using the category tree. As select and deselect categories from the tree, the searchbox will display the selected categories.</label>
<select id="cats" style="width: 90%;" multiple="multiple" class="selectedCats chosen" data-placeholder='Search and Select Categories' name="chosen_categories[]">
	<!--<option class="placeholder_option">Placeholder</option>-->
</select>
<div class="mT10 mB10"><a class="btn btn-large btn-primary expand-all">Expand All Categories</a></div>
<ul id="categorytree" role="tree" class="tree selectcattree">
	<?php
					$block = '';
					
					
					
					foreach ($t_cats as $t_cat) {
														
						$block .= "<li role='treeitem' aria-expanded='true' id='".$t_cat['cat_id']."'>"; 
						
						$block .= "<a tabindex='-1' class='tree-parent tree-parent-collapsed' 
						onclick='show_children(".$t_cat['cat_id'].")'  data-catid='".$t_cat['cat_id']."' data-cattype='topcat'>
						<img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/".$t_cat['file_name']."'  /><span  >".$t_cat['name']."</span>";
						
						$checked = inArray($t_cat['cat_id'], $_SESSION["temp_cats"], "cat_id") ? "checked='checked'" : '';
						
						$block .= "<input class='checkbox' onclick='updateOptions()' type='checkbox' id='".$t_cat['cat_id']."' value='".$t_cat['cat_id']."' ".$checked." />
						<input type='hidden' value='".$t_cat['name']."' name='categoryname' class='categoryname' /></a>";
						
						$block .= "<ul role='group' class='childrenplaceholder'></ul></li>"; 

					}
					echo $block;
				?>
</ul>
