<?php

	$setting=unserialize(@file_get_contents(DATA_DIR.'/setting/overnotes.dat'));
	ini_set('mbstring.http_input', 'pass');
	parse_str($_SERVER['QUERY_STRING'],$_GET);
	$keyword=isset($_GET['k'])?trim($_GET['k']):'';
	$category=isset($_GET['c'])?trim($_GET['c']):'';
	$page=isset($_GET['p'])?trim($_GET['p']):'';
	$base_title = !empty($setting['title'])? $setting['title'] : 'OverNotes';

?><?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $base_title; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link  href="../../css/styles.css" rel="stylesheet" type="text/css" />
<script src="../../js/jquery.js" type="text/javascript"></script>
<script src="../../js/jquery.scroll.js" type="text/javascript"></script>
<script src="../../js/rollover.min.js" type="text/javascript"></script>
<script src="http://www.google.com/jsapi?key=" type="text/javascript"></script>
<script src="../../js/gmap.js?auto" type="text/javascript"> </script>
<script src="../../js/CustomScrollbar.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(e) {    
	$("#news_scroll").mCustomScrollbar();	
});
</script>
<script type="text/javascript">
  $(function(){
    $("#tiny").load("../../tiny/news.php");
  });
</script>
<!-- Start Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9575919-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics -->
</head>

<body id="" class="under">
<div id="wrapper">
  <div id="header" class="clearfix"> 
    
    <!-- header_top start -->
    <div id="header_top" class="clearfix">
      <h1 id="top"><?php echo $base_title; ?></h1>
      <p id="logo"><a href="http://www.yoshiki-dental.com/"><img src="../../images/logo.png" height="60" width="345" alt="技術に裏付けされた「安心・安全」な歯科治療吉樹デンタルクリニック" /></a></p>
      <div id="head_R" class="clearfix">
        <ul id="head_list01">
          <li><img src="../../images/header_btn_01.png" height="24" width="150" alt="新橋駅　徒歩4分" /></li>
          <li><img src="../../images/header_btn_02.png" height="24" width="150" alt="平日20時まで診療" /></li>
        </ul>
        <ul id="head_list02">
          <li><img src="../../images/header_tel.png" height="30" width="188" alt="03-3434-6480" /></li>
          <li><a href="https://www.shika-town.com/reservation/?cl=s00000763" target="_blank"><img src="../../images/header_cont_off.png" height="30" width="170" alt="WEB診療予約" /></a></li>
          <li><img src="../../images/header_info.png" height="24" width="358" alt="診療時間10:00～13:00 / 14:00～20:00休診日土曜・日曜・祝日" /></li>
        </ul>
      </div>
    </div>
    <!-- header_top end --> 
    
    <!-- gnavi start -->
    <div id="gnavi" class="clearfix">
      <ul>
        <li><a href="http://www.yoshiki-dental.com/"><img src="../../images/gnavi_01_off.png" height="50" width="160" alt="HOME" /></a></li>
        <li><a href="../../clinic/concept.html"><img src="../../images/gnavi_02_off.png" height="50" width="158" alt="診療コンセプト" /></a></li>
        <li><a href="../../clinic/staff.html"><img src="../../images/gnavi_03_off.png" height="50" width="158" alt="スタッフ紹介" /></a></li>
        <li><a href="../../clinic/access.html"><img src="../../images/gnavi_04_off.png" height="50" width="158" alt="院内紹介・アクセス" /></a></li>
        <li><a href="../../clinic/first.html"><img src="../../images/gnavi_05_off.png" height="50" width="158" alt="初めてお越しになる方へ" /></a></li>
        <li><a href="../../treatment/price.html"><img src="../../images/gnavi_06_off.png" height="50" width="158" alt="治療費紹介" /></a></li>
      </ul>
    </div>
    <!-- gnavi end --> 
    
    <!-- top_info start -->
    <div id="top_info" class="clearfix">
      <div id="top_info_inner" class="clearfix">
        <h2><?php echo $base_title; ?></h2>
        <ul class="topic_path">
          <li><a href="http://www.yoshiki-dental.com/">ホーム</a></li>
          <li><a href="../"><?php echo $base_title; ?></a></li>
          <li><?php echo $current_category_name; ?></li>
        </ul>
      </div>
    </div>
    <!-- top_info end --> 
  </div>
  
  <!-- main start -->
  <div id="main" class="clearfix"> 
    
    <!-- content start -->
    <div id="content"> 
      
      <!-- inner start -->
      <div id="inner">
        
        <h3>新着情報一覧</h3>
        
        <!-- *********   Load category   ********* -->
        <div class="clearfix">
          <ul class="list_cate">
            <?php
	$category_index=get_category_index();
	foreach($category_index as $rowid=>$id){
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$id.'.dat'));
		$category_url=$category_data['id'];
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$category_id=$id;
		${'category'.$id.'_url'}=$category_data['id'];
		${'category'.$id.'_name'}=$category_data['name'];
		${'category'.$id.'_text'}=@$category_data['text'];
		$selected=(@$_GET['c']==$id?' selected="selected"':'');

?>
              <li class="cate0<?php echo $category_id; ?>"> <a href="../<?php echo $category_url; ?>"><?php echo $category_name; ?></a> </li>
            <?php
	}
?>
          </ul>
        </div>
        
        <!-- *********    / Load category ********* --> 
        
        <!-- *********   POSTS   ********* -->
        <div class="section clearfix">
          <table summary="新着情報一覧" class="tb_cate">
            <?php $limitNum = 20 ?>
            <?php
	$contribute_index=contribute_search(
		@$current_category_id
		,''
		,''
		,''
		,''
		,''
	);
	$max_record_count=count($contribute_index);

	$current_page=(@$_GET['p'])?(@$_GET['p']):1;
	$contribute_index=array_slice($contribute_index,($current_page-1)*$limitNum,$limitNum);
	$record_count=count($contribute_index)

?>
              <?php
	$local_index=0;
	foreach($contribute_index as $rowid=>$index){
		$contribute=unserialize(@file_get_contents(DATA_DIR.'/contribute/'.$index['id'].'.dat'));
		$title=$contribute['title'];
		$url=$contribute['url'].'/';
		$category_id=$index['category'];
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$category_id.'.dat'));
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$field_id=$index['field'];
		$date=$index['public_begin_datetime'];
		$id=$index['id'];
		$field=get_field($field_id);

		foreach($field as $field_index=>$field_data){
			${$field_data['code'].'_Name'}=$field_data['name'];
			${$field_data['code'].'_Value'}=make_value(
		$field_data['name']
				,@$contribute['data'][$field_id][$field_index]
				,$field_data['type']
				,$id
				,$field_id
				,$field_index
			);
	
			if($field_data['type']=='image'){
				${$field_data['code'].'_Src'}=ROOT_URI.'/_data/contribute/images/'.@$contribute['data'][$field_id][$field_index];
			}
		}
		$local_index++;

?>
                <tr>
                  <td class="col_cate"> <?php echo $date; ?> <span class="cate0<?php echo $category_id; ?>"><?php echo $category_name; ?></span></td>
                  <td><a href="../<?php echo $url; ?>"><?php echo $title; ?></a></td>
                </tr>
              <?php
		foreach($field as $field_index=>$field_data){
			unset(${$field_data['code'].'_Name'});
			unset(${$field_data['code'].'_Value'});
			unset(${$field_data['code'].'_Src'});
		}
	}
?>
            
          </table>
        </div>
        
        <!-- *********    /POSTS ********* --> 
        
        <!-- *********   PAGINATION   ********* -->
        
        <?php
	$page_count=(int)ceil($max_record_count/(float)$limitNum);
?>
          <?php
	if($max_record_count > $limitNum){
?>
            <div class="section clearfix">
              <ul class="pagination">
                <?php
	if($current_page <= 1){
?>
                  <li class="disabled"><a href="#">&lt;&lt;</a></li>
                  <?php
	}else{
?>
                  <li><a href="./?p=<?php echo $current_page-1; ?>">&lt;&lt;</a></li>
                <?php
	}
?>
                <?php
	$page_old=@$page;
	for($page=1;$page<=$page_count;$page++){
?>
                  <?php
	if($current_page == $page){
?>
                    <li class="active"><a href="#"><?php echo $page; ?></a></li>
                    <?php
	}else{
?>
                    <li><a href="./?p=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                  <?php
	}
?>
                <?php
	}
$page=$page_old;
?>
                <?php
	if($current_page*$limitNum<$max_record_count){
?>
                  <li><a href="./?p=<?php echo $current_page+1; ?>">&gt;&gt;</a></li>
                  <?php
	}else{
?>
                  <li class="disabled"><a href="#">&gt;&gt;</a></li>
                <?php
	}
?>
              </ul>
            </div>
          <?php
	}
?>
        
        
        <!-- *********    /PAGINATION ********* -->   
        
      </div>
      <!-- inner end --> 
      
    </div>
    <!-- content end --> 
    
    <!-- navi start -->
    <div id="navi" class="clearfix">
      <ul class="navi_list01">
        <li><img src="../../images/navi_tit_01.png" height="40" width="240" alt="医院情報" /></li>
        <li><a href="../../clinic/concept.html"><img src="../../images/navi_01_off.png" height="41" width="240" alt="診療コンセプト" /></a></li>
        <li><a href="../../clinic/staff.html"><img src="../../images/navi_02_off.png" height="40" width="240" alt="スタッフ紹介" /></a></li>
        <li><a href="../../clinic/access.html"><img src="../../images/navi_03_off.png" height="40" width="240" alt="院内紹介・アクセス" /></a></li>
        <li><a href="../../clinic/first.html"><img src="../../images/navi_04_off.png" height="40" width="240" alt="初めてお越しになる方へ" /></a></li>
        <li><a href="../../treatment/price.html"><img src="../../images/navi_05_off.png" height="40" width="240" alt="料金表" /></a></li>
      </ul>
      <ul class="navi_list01">
        <li><img src="../../images/navi_tit_02.png" height="40" width="240" alt="治療メニュー" /></li>
        <li><a href="../../treatment/prevent.html"><img src="../../images/navi_06_off.png" height="41" width="240" alt="CARE-予防" /></a></li>
        <li><a href="../../treatment/perio.html"><img src="../../images/navi_07_off.png" height="40" width="240" alt="歯周病治療" /></a></li>
        <li><a href="../../treatment/noextracted.html"><img src="../../images/navi_08_off.png" height="40" width="240" alt="抜歯しない治療" /></a></li>
        <li><a href="../../treatment/root.html"><img src="../../images/navi_09_off.png" height="40" width="240" alt="根管治療" /></a></li>
        <li><a href="../../treatment/esthe.html"><img src="../../images/navi_10_off.png" height="40" width="240" alt="審美歯科" /></a></li>
        <li><a href="../../treatment/ortho.html"><img src="../../images/navi_11_off.png" height="40" width="240" alt="矯正歯科" /></a></li>
        <li><a href="../../treatment/dental.html"><img src="../../images/navi_12_off.png" height="40" width="240" alt="口腔外科" /></a></li>
        <li><a href="http://www.shinbashi-implant.com/" target="_blank"><img src="../../images/navi_13_off.png" height="40" width="240" alt="インプラント" /></a></li>
        <li><a href="../../treatment/denture.html"><img src="../../images/navi_14_off.png" height="40" width="240" alt="入れ歯・義歯" /></a></li>
      </ul>
      <dl class="news clearfix">
        <dt><img src="../../images/navi_tit_03.png" height="40" width="240" alt="医院からのお知らせ" /></dt>
        <dd id="news_scroll">
          <div id="tiny"></div>
        </dd>
      </dl>
      <ul class="navi_list02">
        <li><a href="https://www.shika-town.com/reservation/?cl=s00000763" target="_blank"><img src="../../images/navi_btn_01_off.png" height="70" width="240" alt="WEB診療予約" /></a></li>
        <li><a href="http://yoshiki-dent.jugem.jp/" target="_blank"><img src="../../images/navi_btn_02_off.png" height="70" width="240" alt="院長BLOG" /></a></li>
        <li><a href="https://www.shika-town.com/s00000763/" target="_blank"><img src="../../images/navi_bnr_01.png" height="80" width="240" alt="歯科医院ポータル" /></a></li>
      </ul>
      <ul class="navi_list02">
        <li><a href="http://www.surugabank.co.jp/reserved/landing/dental/" target="_blank"><img src="../../images/navi_bnr_02.png" height="130" width="180" alt="スルガ銀行のデンタルローン" /></a></li>
        <li><img src="../../images/navi_bnr_03.png" height="130" width="180" alt="週刊朝日MOOK" /></li>
      </ul>
    </div>
    <!-- navi end --> 
    
  </div>
  <!-- main end -->
  
  <div id="footer" class="clearfix">
    <div id="footer_inner" class="clearfix">
      <div id="footer_info" class="clearfix">
        <p id="footer_logo"><a href="http://www.yoshiki-dental.com/"><img src="../../images/footer_logo.png" height="18" width="255" alt="吉樹デンタルクリニック 医院紹介" /></a></p>
        <dl>
          <dt>住所</dt>
          <dd>〒105-0004 東京都港区新橋4-27-4 新橋吉樹ビル1F</dd>
          <dt>TEL</dt>
          <dd id="f_tel"><img src="../../images/footer_tel.png" height="18" width="148" alt="03-3434-6480" /></dd>
        </dl>
        <p id="footer_cal"><img src="../../images/footer_cal.png" height="82" width="420" alt="診療時間" /></p>
      </div>
      <div id="footer_map" class="clearfix">
        <div class="gMap gMapZoom16 gMapDisableScrollwheel gMapNavigationSmall gMapMinifyInfoWindow" style="width: 492px; height: 192px;">
          <div class="gMapCenter">
            <p class="gMapLatLng">35.6642286,139.75502089999998</p>
          </div>
          <div class="gMapMarker">
            <div class="gMapInfoWindow"><span style="font-weight: bold">吉樹デンタルクリニック</span><br />〒105-0004<br />東京都港区新橋4-27-4 新橋吉樹ビル1F</div>
            <p class="gMapLatLng">35.6642286,139.75502089999998</p>
          </div>
        </div>
      </div>
    </div>
    <p id="toTop"><a href="#top"><img src="../../images/totop_off.png" height="45" width="45" alt="トップへ戻る" /></a></p>
    <address>
    Copyright &copy;  吉樹デンタルクリニック All Rights Reserved.
    </address>
  </div>
</div>
<!-- FS Conversion Analyzer start --> 
<!-- FS Conversion Analyzer end -->
</body>
</html>