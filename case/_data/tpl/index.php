<?php

	$setting=unserialize(@file_get_contents(DATA_DIR.'/setting/overnotes.dat'));
	ini_set('mbstring.http_input', 'pass');
	parse_str($_SERVER['QUERY_STRING'],$_GET);
	$keyword=isset($_GET['k'])?trim($_GET['k']):'';
	$category=isset($_GET['c'])?trim($_GET['c']):'';
	$page=isset($_GET['p'])?trim($_GET['p']):'';
	$base_title = !empty($setting['title'])? $setting['title'] : 'OverNotes';

?><!Doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link  href="../css/styles.css" rel="stylesheet" type="text/css" />
<link  href="../css/style_sp.css" rel="stylesheet" type="text/css" />
<link  href="../css/responsive.css" rel="stylesheet" type="text/css" />
<link  href="../css/under.css" rel="stylesheet" type="text/css" />
<link  href="../css/under_responsive.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.scroll.js" type="text/javascript"></script>
<script src="../js/rollover.min.js" type="text/javascript"></script>
<script src="../js/common.js" type="text/javascript"></script>
<script src="../js/jquery.fontResizer.js" type="text/javascript"></script>
<script src="../js/jquery.cookie.js" type="text/javascript"></script>

<!-- Google Analytics start -->
<!-- Google Analytics end -->
</head>

<body id="" class="under">
<div id="wrapper">
  <div id="header" class="clearfix">
    <h1 id="top"></h1>
  </div>
  
  <!-- main start -->
  <div id="main" class="clearfix">
    <div id="top_info" class="clearfix">
      <div class="inner clearfix">
        <h2>インプラント(h2)</h2>
      </div>
    </div>
    <div id="topic_path" class="clearfix">
      <div class="inner clearfix">
        <ul>
          <li><a href="">ホーム</a>&nbsp;&gt;&nbsp;</li>
          <li>下層ページ</li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix">
     	<h3>株式会社　幸成の外壁塗装　施工事例</h3> 
     	<div class="section clearfix">
     		<p>株式会社　幸成は、防水工事専門店からスタートした実績と経験、知識による的確な提案をもとに、お客様第一の外壁塗装を行っています。西東京やその周辺地域で外壁塗装をお考えでしたら、まずはお気軽にお問い合わせください。こちらでは、当社の施工事例をご紹介します。</p>
     	</div>
     	<!-- *********   POSTS   ********* -->
        <div class="section clearfix">
          <div class="case_box">
            <?php $limitNum = 5 ?>
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
                <dl>
                  <dt><a href="<?php echo $url; ?>">
                    <?php
	if($img_01_Value){
?><img src="<?php echo $img_01_Src; ?>" alt="<?php echo $title; ?>" />
                      <?php
	}else{
?>
                      <img src="../images/under_dummy.jpg" alt="<?php echo $title; ?>"/> <?php
	}
?>
                    </a></dt>
                  <dd>
                    <div class="case_info">
                      <div class="case_tt"><a href="<?php echo $url; ?>"><?php echo mb_strimwidth($title, 0, 30, '…', 'UTF-8'); ?></a></div>
                      <div class="case01">
                      	<div class="case_cate_txt"><?php echo $category_name; ?></div>
                      	<div class="case_region case_detail_txt"><span>地域名：</span><?php echo mb_strimwidth($content01_Value, 0, 15, '…', 'UTF-8'); ?></div>
                      </div>
                      <div class="case_detail_txt"><span>施工箇所：</span><?php echo mb_strimwidth($content02_Value, 0, 40, '…', 'UTF-8'); ?></div>
                      <div class="case_detail_txt"><span>施工期間：</span><?php echo mb_strimwidth($content03_Value, 0, 40, '…', 'UTF-8'); ?></div>
                      <div class="case_detail_txt"><span>築年数：</span><?php echo mb_strimwidth($content04_Value, 0, 40, '…', 'UTF-8'); ?></div>
                      <div class="case_detail_txt"><span>使用塗料：</span><?php echo mb_strimwidth($content05_Value, 0, 40, '…', 'UTF-8'); ?></div>
                      <div class="case_btn_detai"><a  href="<?php echo $url; ?>">もっと詳しくみる</a></div>
                    </div>
                  </dd>
                </dl>
              <?php
		foreach($field as $field_index=>$field_data){
			unset(${$field_data['code'].'_Name'});
			unset(${$field_data['code'].'_Value'});
			unset(${$field_data['code'].'_Src'});
		}
	}
?>
            
          </div>
        </div>
        
        <!-- *********    /POSTS ********* --> 
     </div>
      <div id="navi"> </div>
    </div>
    <!-- content end --> 
    
  </div>
  <!-- main end -->
  
  <div id="footer">
    <address>
    Copyright &copy; All Rights Reserved.
    </address>
  </div>
</div>
<script type="text/javascript" src="../js/gmaps.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=ここにAPIキー&callback=gmaps.renderAll"></script>
</body>
</html>