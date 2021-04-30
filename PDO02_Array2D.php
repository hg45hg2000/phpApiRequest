<!DOCTYPE HTML >
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
$arr2D = array(
           array(20, 26, 18),
           array(18, 35, 29),
           array(35, 49, 77),
           array(68, 45, 18)
            
        );
// echo count($arr2D)."<BR>"
for($t = 0; $t < count($arr2D); $t++){
$sum = 0;
for($i = 0; $i < count($arr2D[$t]); $i++){
    $sum += $arr2D[$t][$i];
    
}
echo "sum=$sum<BR>";
echo "<HR>";
}




// $arr1D = array(20,25,38,46);
// $sum = 0;
// foreach($arr1D as  $v){  
//     //foreach($arr1D as $k=> $v){ 此為從0開始的一員陣列 所以對key值 沒意義
//     $sum += $v;
    
// }
// echo "sum=$sum<BR>";
?>


	 <div align = 'center'>My first Javascripts Program<BR>
    <button id='btn01'>HEllo_1</button>
    </div>
    <HR>
    <div id ='msgArea'></div>
   
    
</body>
</html>