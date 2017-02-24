<!Doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>{=$current_category_name=}｜{=$base_title=}</title>
<meta name="description" content="{=$current_category_name=}｜giống page khác của setting site" />
<meta name="keywords" content="{=$current_category_name=}, giống page khác của setting site " />
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

<body id="kiji_cate" class="under">
<div id="wrapper">
  <div id="header" class="clearfix">
    <h1 id="top">{=$current_category_name=}｜{=$base_title=}</h1>
  </div>
  
  <!-- main start -->
  <div id="main" class="clearfix">
    <div id="top_info" class="clearfix">
      <div class="inner clearfix">
        <h2>{=$current_category_name=}</h2>
      </div>
    </div>
    <div id="topic_path" class="clearfix">
      <div class="inner clearfix">
        <ul>
          <li><a href="../../">HOME</a></li>
          <li>&gt; <a href="../">{=$base_title=}</a></li>
          <li>&gt; {=$current_category_name=}</li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix">
        <h3>{=$current_category_name=}</h3>
        {=$current_category_text=}
        <?php $limitNum = 5 ?>
        <ONContributeSearch page="@$_GET['p']" limit="$limitNum" category="@$current_category_id">
          <ul class="kiji_list_post">
            <ONContributeFetch>
              <?php $url = "../{$url}";
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
                  <dt>{=$date=}</dt>
                  <dd><a href="{=$url=}">{=$title=}</a> </dd>
                </dl>
              </li>
            </ONContributeFetch>
          </ul>
        </ONContributeSearch>
        <ONPagenation record_count="$max_record_count" limit="$limitNum">
          <ONIf condition="$max_record_count > $limitNum">
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
          </ONIf>
        </ONPagenation>
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