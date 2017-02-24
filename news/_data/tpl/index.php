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
<title><?php echo $base_title; ?></title>
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

<body id="kiji_index" class="under">
<div id="wrapper">
  <div id="header" class="clearfix">
    <h1 id="top"><?php echo $base_title; ?></h1>
  </div>
  
  <!-- main start -->
  <div id="main" class="clearfix">
    <div id="top_info" class="clearfix">
      <div class="inner clearfix">
        <h2><?php echo $base_title; ?></h2>
      </div>
    </div>
    <div id="topic_path" class="clearfix">
      <div class="inner clearfix">
        <ul>
          <li><a href="../">HOME</a></li>
          <li>&gt; <?php echo $base_title; ?></li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix">
        <h3><?php echo $base_title; ?></h3>
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
          <ul class="kiji_list_post">
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
              <?php
             	$title_count = strlen($title);
             	if ($title_count > 110) {
             		$title = substr($title, 0, 110)."...";
             	}
             	else {
             		$title = $title;
             	}
               ?>
              <li>
                <dl>
                  <dt><?php echo $date; ?></dt>
                  <dd><a href="<?php echo $url; ?>"><?php echo $title; ?></a> </dd>
                </dl>
              </li>
            <?php
		foreach($field as $field_index=>$field_data){
			unset(${$field_data['code'].'_Name'});
			unset(${$field_data['code'].'_Value'});
			unset(${$field_data['code'].'_Src'});
		}
	}
?>
          </ul>
        
        <!--pagination-->
        <?php
	$page_count=(int)ceil($max_record_count/(float)$limitNum);
?>
          <?php
	if($max_record_count > $limitNum){
?>
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
          <?php
	}
?>
        
        <!--pagination end--> 
      </div>
      <div id="navi" class="box_pc">
        <div class="kiji_navi">
          <p class="kiji_navi_title">キジカク名</p>
          <ul class="kiji_navi_list">
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
              <li> <a href="<?php echo $category_url; ?>"><?php echo $category_name; ?></a> </li>
            <?php
	}
?>
          </ul>
        </div>
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
<script type="text/javascript" src="../js/gmaps.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=ここにAPIキー&callback=gmaps.renderAll"></script>
</body>
</html>