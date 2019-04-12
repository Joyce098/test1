<?php


    $MyPicDataList = array("ID"=>1,"PicName"=>"news_pic1.PNG","text"=>"空車50萬");
    $MyPicDataList1 = array("ID"=>2,"PicName"=>"news_pic2.PNG","text"=>"空車60萬");
    $MyPicDataList2 = array("ID"=>3,"PicName"=>"news_pic3.PNG","text"=>"空車70萬");
    $MyPicDataListAll = array($MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2,
	$MyPicDataList,$MyPicDataList1,$MyPicDataList2);

    echo json_encode($MyPicDataListAll, JSON_UNESCAPED_UNICODE); 

	
?>