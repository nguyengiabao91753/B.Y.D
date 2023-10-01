<?php 
function recursiveCategory($categories, $parent=0,$str=''){
    foreach ($categories as $key => $value){
        if($value->parent_id== $parent){
            echo '<option value="'.$value->id.'">'.$str.$value->name.'</option>';
            unset($categories[$key]);


            recursiveCategory($categories,$value->id,$str."--");
        }
    }
}
?>