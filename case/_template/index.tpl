<!Doctype html>
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
            <ONContributeSearch page="@$_GET['p']" limit="$limitNum" category="@$current_category_id">
              <ONContributeFetch>
                <dl>
                  <dt><a href="{=$url=}">
                    <ONIf condition="$img_01_Value"><img src="{=$img_01_Src=}" alt="{=$title=}" />
                      <ONElse>
                      <img src="../images/under_dummy.jpg" alt="{=$title=}"/> </ONIf>
                    </a></dt>
                  <dd>
                    <div class="case_info">
                      <div class="case_tt"><a href="{=$url=}">{=mb_strimwidth($title, 0, 30, '…', 'UTF-8')=}</a></div>
                      <div class="case01">
                      	<div class="case_cate_txt">{=$category_name=}</div>
                      	<div class="case_region case_detail_txt"><span>地域名：</span>{=mb_strimwidth($content01_Value, 0, 15, '…', 'UTF-8')=}</div>
                      </div>
                      <div class="case_detail_txt"><span>施工箇所：</span>{=mb_strimwidth($content02_Value, 0, 40, '…', 'UTF-8')=}</div>
                      <div class="case_detail_txt"><span>施工期間：</span>{=mb_strimwidth($content03_Value, 0, 40, '…', 'UTF-8')=}</div>
                      <div class="case_detail_txt"><span>築年数：</span>{=mb_strimwidth($content04_Value, 0, 40, '…', 'UTF-8')=}</div>
                      <div class="case_detail_txt"><span>使用塗料：</span>{=mb_strimwidth($content05_Value, 0, 40, '…', 'UTF-8')=}</div>
                      <div class="case_btn_detai"><a  href="{=$url=}">もっと詳しくみる</a></div>
                    </div>
                  </dd>
                </dl>
              </ONContributeFetch>
            </ONContributeSearch>
          </div>
        </div>
        
        <!-- *********    /POSTS ********* --> 
        <!-- *********   PAGINATION   ********* -->
          
          <ONPagenation record_count="$max_record_count" limit="$limitNum">
            <ONIf condition="$max_record_count > $limitNum">
              <div class="section clearfix">
                <ul class="pagination">
                  <ONIf condition="$current_page <= 1">
                    <li class="disabled"><a href="#">&lt;&lt;</a></li>
                    <ONElse>
                    <li><a href="./?p={=$current_page-1=}">&lt;&lt;</a></li>
                  </ONIf>
                  <ONPagenationFetch>
                    <ONIf condition="$current_page == $page">
                      <li class="active"><a href="#">{=$page=}</a></li>
                      <ONElse>
                      <li><a href="./?p={=$page=}">{=$page=}</a></li>
                    </ONIf>
                  </ONPagenationFetch>
                  <ONIf condition="$current_page*$limitNum<$max_record_count">
                    <li><a href="./?p={=$current_page+1=}">&gt;&gt;</a></li>
                    <ONElse>
                    <li class="disabled"><a href="#">&gt;&gt;</a></li>
                  </ONIf>
                </ul>
              </div>
            </ONIf>
          </ONPagenation>
          <!-- *********    /PAGINATION ********* --> 
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