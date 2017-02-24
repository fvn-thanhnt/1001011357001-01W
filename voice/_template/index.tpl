<!Doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>{=$base_title=}</title>
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
<script src="../js/heightLine.js" type="text/javascript"></script>

<!-- Google Analytics start -->
<!-- Google Analytics end -->
</head>

<body id="" class="under">
<div id="wrapper">
  <div id="header" class="clearfix">
    <h1 id="top">{=$base_title=}</h1>
  </div>
  
  <!-- main start -->
  <div id="main" class="clearfix">
    <div id="top_info" class="clearfix">
      <div class="inner clearfix">
        <h2>お客様の声（一覧）</h2>
      </div>
    </div>
    <div id="topic_path" class="clearfix">
      <div class="inner clearfix">
        <ul>
          <li><a href="../">HOME</a></li>
          <li>&gt; お客様の声（一覧）</li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix ovn_content">
        <h3 id="title01">株式会社　幸成の外壁塗装　お客様の声</h3>
        <div class="section clearfix">
          <p>株式会社　幸成は、お客様と密なコミュニケーションを行いながら、ニーズに合わせた適切な外壁塗装を行っています。西東京やその周辺地域で外壁塗装をお考えでしたら、まずはお気軽にお問い合わせください。こちらでは、当社にお寄せいただいたお客様の声をご紹介します。</p>
        </div>
        <?php $limitNum = 2 ?>
        <ONContributeSearch page="@$_GET['p']" limit="$limitNum" category="@$current_category_id">
          <ONContributeFetch>
            <div class="col_2">
              <h6>{=$title=}</h6>
              <?php if($img_01_Value != "") { ?>
              <p class="img_title"><img src="{=$img_01_Src=}" alt="{=$title=}"></p>
			  <?php } ?>
             <?php if($txt_01_Value != "") {
             	$txt_count = strlen($txt_01_Value);
             	if ($txt_count > 135) {
             		$txt_01_Value = substr($txt_01_Value, 0, 135)."...";
             	}
             	else {
             		$txt_01_Value = $txt_01_Value;
             	}
               ?>
              <div class="txt_desc">{=$txt_01_Value=}</div>
              <?php } ?>
              <p class="readmore"><a href="{=$url=}">詳しくみる＞</a></p>
            </div>
          </ONContributeFetch>
        </ONContributeSearch>
        
        
        
        <!--pagination-->
        <ONPagenation record_count="$max_record_count" limit="$limitNum">
          <ONIf condition="$max_record_count > $limitNum">
            <ul class="pagination">
              <ONIf condition="$current_page <= 1">
                <li class="disabled"><a href="#">&lt;&lt;</a></li>
                <ONElse>
                <li><a class="btn_page" href="./?p={=$current_page-1=}#title01">&lt;&lt;</a></li>
              </ONIf>
              <ONPagenationFetch>
                <ONIf condition="$current_page == $page">
                  <li class="active"><a href="#">{=$page=}</a></li>
                  <ONElse>
                  <li><a class="btn_page" href="./?p={=$page=}#title01">{=$page=}</a></li>
                </ONIf>
              </ONPagenationFetch>
              <ONIf condition="$current_page*$limitNum<$max_record_count">
                <li><a class="btn_page" href="./?p={=$current_page+1=}#title01">&gt;&gt;</a></li>
                <ONElse>
                <li class="disabled"><a href="#">&gt;&gt;</a></li>
              </ONIf>
            </ul>
          </ONIf>
        </ONPagenation>
        <!--pagination end--> 
        
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
<script type="text/javascript" src="../js/gmaps.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=ここにAPIキー&callback=gmaps.renderAll"></script>
</body>
</html>