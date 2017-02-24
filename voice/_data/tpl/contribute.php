<?php

	$setting=unserialize(@file_get_contents(DATA_DIR.'/setting/overnotes.dat'));
	ini_set('mbstring.http_input', 'pass');
	parse_str($_SERVER['QUERY_STRING'],$_GET);
	$keyword=isset($_GET['k'])?trim($_GET['k']):'';
	$category=isset($_GET['c'])?trim($_GET['c']):'';
	$page=isset($_GET['p'])?trim($_GET['p']):'';
	$base_title = !empty($setting['title'])? $setting['title'] : 'OverNotes';

?><?php
	$contribute=get_contribute($contribute_id);
		$title=$contribute['title'];
	$category_id=$contribute['category'];
	$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$category_id.'.dat'));
	$category_name=$category_data['name'];
	$category_text=@$category_data['text'];
	$category_url=$category_data['id'];
	$field_id=$contribute['field'];
	$id=$contribute['id'];
	$field=get_field($field_id);
	$date=$contribute['public_begin_datetime'];
	$url=$contribute['url'].'/';

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

?>
<?php
$current_category_id   = $category_id;
$current_category_name = $category_name;
?>
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
  <?php if( $current_category_id==$category_id ) $current_category_url = $category_url; ?>
<?php
	}
?>

<!Doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title><?php echo $title; ?>｜<?php echo $base_title; ?></title>
<?php
	if($description_Value){
?>
  <meta name="description" content="<?php echo $description_Value; ?>" />
<?php
	}
?>
<?php
	if($keywords_Value){
?>
  <meta name="keywords" content="<?php echo $keywords_Value; ?>" />
<?php
	}
?>
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link  href="../../css/styles.css" rel="stylesheet" type="text/css" />
<link  href="../../css/style_sp.css" rel="stylesheet" type="text/css" />
<link  href="../../css/responsive.css" rel="stylesheet" type="text/css" />
<link  href="../../css/under.css" rel="stylesheet" type="text/css" />
<link  href="../../css/under_responsive.css" rel="stylesheet" type="text/css" />
<script src="../../js/jquery.js" type="text/javascript"></script>
<script src="../../js/jquery.scroll.js" type="text/javascript"></script>
<script src="../../js/rollover.min.js" type="text/javascript"></script>
<script src="../../js/common.js" type="text/javascript"></script>
<script src="../../js/jquery.fontResizer.js" type="text/javascript"></script>
<script src="../../js/jquery.cookie.js" type="text/javascript"></script>

<!-- Google Analytics start -->
<!-- Google Analytics end -->
</head>

<body id="kiji_cont" class="under">
<div id="wrapper">
  <div id="header" class="clearfix">
    <h1><?php echo $title; ?>｜<?php echo $base_title; ?></h1>
  </div>
  
  <!-- main start -->
  <div id="main" class="clearfix">
    <div id="top_info" class="clearfix">
      <div class="inner clearfix">
        <h2><?php echo $title; ?></h2>
      </div>
    </div>
    <div id="topic_path" class="clearfix">
      <div class="inner clearfix">
        <ul>
          <li><a href="../../">HOME</a></li>
          <li>&gt; <a href="../"><?php echo $base_title; ?></a></li>
          <li>&gt; <?php echo $title; ?></li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix ovn_content">
        <h3>東京都<?php echo $title; ?>市　A様　などのタイトルが入ります</h3>
        <div class="section clearfix">
        	<p>お客様のコメントが入ります。（一言）</p>
        	<h4>様邸　地域名　</h6>
        	<p class="img_detail"><img src="<?php echo $img_01_Src; ?>" alt="<?php echo $title; ?>"></p>
        	<p>お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。</p>
        </div>
        
        
        <?php
	if($txt_01_Value){
?>
        	<h5>塗り替え前のお悩みは？</h5>
        	<div class="section clearfix">
        		<p><?php echo $txt_01_Value; ?></p>
        	</div>
        <?php
	}
?>
        
        
        
        
        
        <?php if($txt_02_Value != "") { ?>
        <h5>幸成を選んだ理由は？</h5>
        <div class="section clearfix">
        	<p><?php echo $txt_02_Value; ?></p>
        </div>
        <?php } ?>
        <?php if($txt_03_Value != "") { ?>
        <h5>施工後のお気持ちは？</h5>
        <div class="section clearfix">
        	<p><?php echo $txt_03_Value; ?></p>
        </div>
        <?php } ?>
        
        <div class="clearfix">
          <p class="btn_back"><a href="../" class="btn-default"> 戻る </a> </p>
        </div>
      </div>
      <div id="navi">
        
      </div>
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
<script type="text/javascript" src="../../js/gmaps.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=ここにAPIキー&callback=gmaps.renderAll"></script>
</body>
</html>