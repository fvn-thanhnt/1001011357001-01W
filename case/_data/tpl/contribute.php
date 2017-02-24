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
<?php
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
<title><?php echo $title; ?>｜<?php echo $base_title; ?></title>
<?php
	if($description_Value){
?>
  <meta name="description" content="<?php echo $description_Value; ?>" />
  <?php
	}else{
?>
  <meta name="description" content="" />
<?php
	}
?>
<?php
	if($keywords_Value){
?>
  <meta name="keywords" content="<?php echo $keywords_Value; ?>" />
  <?php
	}else{
?>
  <meta name="keywords" content="" />
<?php
	}
?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link  href="../../css/styles.css" rel="stylesheet" type="text/css" />
<link  href="../../css/style_sp.css" rel="stylesheet" type="text/css" />
<link  href="../../css/responsive.css" rel="stylesheet" type="text/css" />
<link  href="../../css/under.css" rel="stylesheet" type="text/css" />
<link  href="../../css/under_responsive.css" rel="stylesheet" type="text/css" />
<link  href="../../css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
<script src="../../js/jquery.js" type="text/javascript"></script>
<script src="../../js/jquery.scroll.js" type="text/javascript"></script>
<script src="../../js/rollover.min.js" type="text/javascript"></script>
<script src="../../js/common.js" type="text/javascript"></script>
<script src="../../js/jquery.fontResizer.js" type="text/javascript"></script>
<script src="../../js/jquery.cookie.js" type="text/javascript"></script>
<script src="../../js/jquery.bxslider.js" type="text/javascript"></script>

<!-- Google Analytics start -->
<!-- Google Analytics end -->
</head>

<body id="case_detail" class="under">
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
          <li><a href="../../index.html">ホーム</a>&nbsp;&gt;&nbsp;</li>
          <li><a href="../"><?php echo $base_title; ?></a>&nbsp;&gt;&nbsp;</li>
          <li><a href="../<?php echo $category_url; ?>/"><?php echo $category_name; ?></a>&nbsp;&gt;&nbsp;</li>
          <li><?php echo $title; ?></li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix">
        <h3>タイトルが入ります</h3>
        <div class="section clearfix">
          <div class="case01">
            <p class="case_cate_txt"><?php echo $category_name; ?></p>
            <p class="case_region case_detail_txt"><span>地域:</span><?php echo mb_strimwidth($content01_Value, 0, 50, '…', 'UTF-8'); ?></p>
          </div>
          <div class="case_box">
            <dl>
              <dt>
                <div class="case_img">
                  <?php
	if($img_01_Value){
?><img src="<?php echo $img_01_Src; ?>" alt="<?php echo $title; ?>" />
                    <?php
	}else{
?>
                    <img src="../../images/under_dummy.jpg" alt="<?php echo $title; ?>"/><?php
	}
?>
                </div>
                <?php if($img_01_Value!=""){  ?>
                <ul class="case_btn02">
                  <?php
	if($img_01_Value){
?>
                    <li><a role="<?php echo $img_01_Src; ?>">Before</a></li>
                  <?php
	}
?>
                  <?php
	if($img_02_Value){
?>
                    <li><a role="<?php echo $img_02_Src; ?>">After</a></li>
                  <?php
	}
?>
                </ul>
                <?php }?>
              </dt>
              <dd>
                <?php if($content02_Value!=""||$content03_Value!=""||$content04_Value!=""||$content05_Value!=""){  ?>
                <div class="case_txt">
                  <?php
	if($content02_Value){
?>
                    <div class="case_detail_txt"><span class="case_tt01">施工箇所:</span><?php echo $content02_Value; ?></div>
                  <?php
	}
?>
                  <?php
	if($content03_Value){
?>
                    <div class="case_detail_txt"><span class="case_tt01">施工期間:</span><?php echo $content03_Value; ?></div>
                  <?php
	}
?>
                  <?php
	if($content04_Value){
?>
                    <div class="case_detail_txt"><span class="case_tt01">築年数:</span><?php echo $content04_Value; ?></div>
                  <?php
	}
?>
                  <?php
	if($content05_Value){
?>
                    <div class="case_detail_txt"><span class="case_tt01">使用塗料:</span><?php echo $content05_Value; ?></div>
                  <?php
	}
?>
                </div>
                <?php }?>
              </dd>
            </dl>
          </div>
        </div>
  <?php if($content06_Value!=""){  ?>
        <h4><?php echo mb_strimwidth($content06_Value, 0, 50, '…', 'UTF-8'); ?></h4>
        <div class="section clearfix">
          <?php
	if($content07_Value){
?>
            <div class="mb10 clearfix"><?php echo $content07_Value; ?></div>
          <?php
	}
?>
        </div>
        <?php }?>
        <?php if($content08_Value!=""){ ?>
        <h4><?php echo mb_strimwidth($content08_Value, 0, 50, '…', 'UTF-8'); ?></h4>
        <div class="section clearfix">
          <?php
	if($content08_Value){
?>
            <div class="mb10 clearfix"><?php echo $content09_Value; ?></div>
          <?php
	}
?>
        </div>
        <?php } ?>
        <?php if($content10_Value!=""){ ?>
        <?php
	if($content10_Value){
?>
          <h4><?php echo mb_strimwidth($content10_Value, 0, 50, '…', 'UTF-8'); ?></h4>
        <?php
	}
?>
        <?php } ?>



        <?php if($img_03_Value!=""||$img_04_Value!=""||$img_05_Value!=""||$img_06_Value!=""||$img_07_Value!=""||$img_08_Value!=""||$img_09_Value!=""||$img_10_Value!=""){  ?>
        <div class="section clearfix">

          <ul id="contribute_slider_list" class="slider_list case_img_l clearfix">
              <?php
	if($img_03_Value){
?>
                <li> <span><img src="<?php echo $img_03_Src; ?>" alt="<?php echo $title; ?>" /></span>
                  <?php
	if($content11_Value){
?>
                    <div class="caption"><?php echo $content11_Value; ?></div>
                  <?php
	}
?>
                </li>
              <?php
	}
?>
              <?php
	if($img_04_Value){
?>
                <li> <span><img src="<?php echo $img_04_Src; ?>" alt="<?php echo $title; ?>" /></span>
                  <?php
	if($content12_Value){
?>
                    <div class="caption"><?php echo $content12_Value; ?></div>
                  <?php
	}
?>
                </li>
              <?php
	}
?>
              <?php
	if($img_05_Value){
?>
                <li> <span><img src="<?php echo $img_05_Src; ?>" alt="<?php echo $title; ?>" /></span>
                  <?php
	if($content13_Value){
?>
                    <div class="caption"><?php echo $content13_Value; ?></div>
                  <?php
	}
?>
                </li>
              <?php
	}
?>
              <?php
	if($img_06_Value){
?>
                <li> <span><img src="<?php echo $img_06_Src; ?>" alt="<?php echo $title; ?>" /></span>
                  <?php
	if($content14_Value){
?>
                    <div class="caption"><?php echo $content14_Value; ?></div>
                  <?php
	}
?>
                </li>
              <?php
	}
?>
              <?php
	if($img_07_Value){
?>
                <li> <span><img src="<?php echo $img_07_Src; ?>" alt="<?php echo $title; ?>" /></span>
                  <?php
	if($content15_Value){
?>
                    <div class="caption"><?php echo $content15_Value; ?></div>
                  <?php
	}
?>
                </li>
              <?php
	}
?>
              <?php
	if($img_08_Value){
?>
                <li> <span><img src="<?php echo $img_08_Src; ?>" alt="<?php echo $title; ?>" /></span>
                  <?php
	if($content16_Value){
?>
                    <div class="caption"><?php echo $content16_Value; ?></div>
                  <?php
	}
?>
                </li>
              <?php
	}
?>
              <?php
	if($img_09_Value){
?>
                <li> <span><img src="<?php echo $img_09_Src; ?>" alt="<?php echo $title; ?>" /></span>
                  <?php
	if($content17_Value){
?>
                    <div class="caption"><?php echo $content17_Value; ?></div>
                  <?php
	}
?>
                </li>
              <?php
	}
?>
              <?php
	if($img_10_Value){
?>
                <li> <span><img src="<?php echo $img_10_Src; ?>" alt="<?php echo $title; ?>" /></span>
                  <?php
	if($content18_Value){
?>
                    <div class="caption"><?php echo $content18_Value; ?></div>
                  <?php
	}
?>
                </li>
              <?php
	}
?>
            </ul>
            </ul>

            <?php $count = -1; ?>
            <ul id="contribute_bx_pager">
              <?php
	if($img_03_Value){
?>
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="<?php echo $img_03_Src; ?>" alt="<?php echo $title; ?>" /></a></li>
              <?php
	}
?>

              <?php
	if($img_04_Value){
?>
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="<?php echo $img_04_Src; ?>" alt="<?php echo $title; ?>" /></a></li>
              <?php
	}
?>
              <?php
	if($img_05_Value){
?>
                  <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="<?php echo $img_05_Src; ?>" alt="<?php echo $title; ?>" /></a></li>
              <?php
	}
?>
              <?php
	if($img_06_Value){
?>
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="<?php echo $img_06_Src; ?>" alt="<?php echo $title; ?>" /></a></li>
              <?php
	}
?>
              <?php
	if($img_07_Value){
?>
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="<?php echo $img_07_Src; ?>" alt="<?php echo $title; ?>" /></a></li>
              <?php
	}
?>
              <?php
	if($img_08_Value){
?>
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="<?php echo $img_08_Src; ?>" alt="<?php echo $title; ?>" /></a></li>
              <?php
	}
?>
              <?php
	if($img_09_Value){
?>
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="<?php echo $img_09_Src; ?>" alt="<?php echo $title; ?>" /></a></li>
              <?php
	}
?>
              <?php
	if($img_10_Value){
?>
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="<?php echo $img_10_Src; ?>" alt="<?php echo $title; ?>" /></a></li>
              <?php
	}
?>
            </ul>
          </div>
        
        <?php }?>


        <div class="section clearfix">
          <?php $current_url = $url; ?>
          <?php
	$contribute_index=contribute_search(
		''
		,''
		,''
		,''
		,''
		,''
	);
	$max_record_count=count($contribute_index);

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
              <?php $pages[] = $url; ?>
            <?php
		foreach($field as $field_index=>$field_data){
			unset(${$field_data['code'].'_Name'});
			unset(${$field_data['code'].'_Value'});
			unset(${$field_data['code'].'_Src'});
		}
	}
?>
          
          <?php $current_page = array_search($current_url,$pages); ?>
          <ul class="case_btn01 clearfix">
            <?php if($prev = @$pages[$current_page+1]): ?>
            <li class="prevPage"><a href="../<?php echo $prev ?>">前の事例へ</a></li>
            <?php endif ?>
            <li><a href="../" class="btn-default">一覧に戻る</a></li>
            <?php if($next = @$pages[$current_page-1]): ?>
            <li class="nextPage"><a href="../<?php echo $next ?>">次の事例へ</a></li>
            <?php endif ?>
          </ul>
         </div>
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
<script type="text/javascript">

</script> 
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#contribute_slider_list').bxSlider({
      pagerCustom: '#contribute_bx_pager',
      mode: 'fade',
      pause: '5000',
      controls: 'true', 
     nextText: '<img src="../../images/arrow_next.png">',
    prevText: '<img src="../../images/arrow_pre.png">',
    });
  });
</script>
<script>
	$(document).ready(function() {
     $(".case_btn02 li a").click(function(){
		var link01 = $(this).attr("role");
		$(".case_img").find("img").attr("src",link01);
	});
});
	</script>

<script type="text/javascript">
$(document).ready(function(){
	    $(".slick_arrow_wrapper .slick-prev").click(function(event) {
        $('.slider').slick('slickPrev');
    });

    $(".slick_arrow_wrapper .slick-next").click(function(event) {
      $('.slider').slick('slickNext');
    });
  });
  
</script> 
<script type="text/javascript" src="../../js/gmaps.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=ここにAPIキー&callback=gmaps.renderAll"></script>
</body>

</html>