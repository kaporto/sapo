<?php
$current_page = $_GET['current'];
$total_pages = $_GET['total'];
$boundaries = $_GET['boundaries'];
$around = $_GET['around'];

$previous = ($current_page == 1)?1:$current_page-1;
$next = ($current_page == $total_pages)? $total_pages : $current_page +1;

include './controller/FooterController.php';
$range = Footer::createFooter($current_page,$total_pages,$boundaries,$around);
if($range){
echo "<footer>";
echo "<div class='pagination'>";
echo "<a href='index.php?current=".$previous."&total=".$total_pages."&boundaries=".$boundaries."&around=".$around."'>&laquo;</a>";

foreach($range as $v){
    if($v == $current_page || $v == '...'){
        echo "<span class='current_page'>".$v."</span>"; 
    }else{
        echo "<a href='index.php?current=".$v."&total=".$total_pages."&boundaries=".$boundaries."&around=".$around."'>".$v."</a>";
    }
    
}
echo "<a href='index.php?current=".$next."&total=".$total_pages."&boundaries=".$boundaries."&around=".$around."'>&raquo;</a>";
echo "</div>";
echo "</footer>";
}