<?php

 final class Footer{
    
    function createFooter($current_page,$total_pages,$boundaries,$around){    

        if(!is_null($current_page) && !is_null($total_pages) && !is_null($boundaries) && !is_null($around)){
        $start = $boundaries;
        $end = $total_pages - $boundaries + 1; 

        $rigth = $current_page + $around +1;
        $left =  $current_page - $around;
        $values = array();
        $pagination = array();
        $j = 0;


        for($i=1; $i <= $total_pages; $i++){            
            if($i == 1 || $i == $total_pages || $i <= $start)
            {
                $values[]=$i;
            } 
            else if($i >= $end && $i < $total_pages)
            { 
                $values[]=$i; 
            }               
            else if($i >= $left && $i < $rigth)
            {
                $values[]=$i;
            }            
        
        } 
        foreach($values as $val){

            if($j){
                if($val -$j != 1){
                    $pagination[] = "...";
                }
            }
            $pagination[] = $val;
            $j = $val;
        } 

        return $pagination;
        }
    }
 }
