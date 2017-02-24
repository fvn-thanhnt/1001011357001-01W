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
          <li>&gt; <a href="../{=$current_category_url=}">{=$current_category_name=}</a></li>
          <li>&gt; {=$title=}</li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix">
        <h3>{=$title=}</h3>
        <ONIf condition="$image1_Value"> <img src="{=$image1_Src=}" alt="" style="float:left; margin-right:15px; margin-bottom:15px; max-width:320px; max-height: 240px;" /> </ONIf>
        {=$text1_Value=}
        <div class="btn_back"> <a href="../" class="btn btn-default"> 戻る </a> </div>
      </div>
      <div id="navi" class="box_pc">
        <div class="kiji_navi">
          <p class="kiji_navi_title">キジカク名</p>
          <ul class="kiji_navi_list">
            <ONCategory>
              <li> <a href="../{=$category_url=}">{=$category_name=}</a> </li>
            </ONCategory>
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
<script type="text/javascript" src="../../js/gmaps.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=ここにAPIキー&callback=gmaps.renderAll"></script>
</body>
</html>