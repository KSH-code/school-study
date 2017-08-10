<?php
$id =$_POST['i'];
$pw =$_POST['p'];
if($id!='hong'){
    echo('wrong id');
}elseif($pw!='1234'){
    echo('wrong pw');
}else{
    echo('성공');    
}