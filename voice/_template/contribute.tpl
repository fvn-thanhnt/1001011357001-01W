<ONContribute id="$contribute_id"></ONContribute>
<?php
$current_category_id   = $category_id;
$current_category_name = $category_name;
?>
<ONCategory>
  <?php if( $current_category_id==$category_id ) $current_category_url = $category_url; ?>
</ONCategory>

<!Doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>{=$title=}｜{=$base_title=}</title>
<ONIf condition="$description_Value">
  <meta name="description" content="{=$description_Value=}" />
</ONIf>
<ONIf condition="$keywords_Value">
  <meta name="keywords" content="{=$keywords_Value=}" />
</ONIf>
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
    <h1>{=$title=}｜{=$base_title=}</h1>
  </div>
  
  <!-- main start -->
  <div id="main" class="clearfix">
    <div id="top_info" class="clearfix">
      <div class="inner clearfix">
        <h2>{=$title=}</h2>
      </div>
    </div>
    <div id="topic_path" class="clearfix">
      <div class="inner clearfix">
        <ul>
          <li><a href="../../">HOME</a></li>
          <li>&gt; <a href="../">{=$base_title=}</a></li>
          <li>&gt; {=$title=}</li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix ovn_content">
        <h3>東京都{=$title=}市　A様　などのタイトルが入ります</h3>
        <div class="section clearfix">
        	<p>お客様のコメントが入ります。（一言）</p>
        	<h4>様邸　地域名　</h6>
        	<p class="img_detail"><img src="{=$img_01_Src=}" alt="{=$title=}"></p>
        	<p>お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。お客様へのコメントが入ります。</p>
        </div>
        
        
        <ONIf condition="$txt_01_Value">
        	<h5>塗り替え前のお悩みは？</h5>
        	<div class="section clearfix">
        		<p>{=$txt_01_Value=}</p>
        	</div>
        </ONIf>
        
        
        
        
        
        <?php if($txt_02_Value != "") { ?>
        <h5>幸成を選んだ理由は？</h5>
        <div class="section clearfix">
        	<p>{=$txt_02_Value=}</p>
        </div>
        <?php } ?>
        <?php if($txt_03_Value != "") { ?>
        <h5>施工後のお気持ちは？</h5>
        <div class="section clearfix">
        	<p>{=$txt_03_Value=}</p>
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