<!Doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<ONContribute id="$contribute_id">
<title>{=$title=}｜{=$base_title=}</title>
<ONIf condition="$description_Value">
  <meta name="description" content="{=$description_Value=}" />
  <ONElse>
  <meta name="description" content="" />
</ONIf>
<ONIf condition="$keywords_Value">
  <meta name="keywords" content="{=$keywords_Value=}" />
  <ONElse>
  <meta name="keywords" content="" />
</ONIf>
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
          <li><a href="../">{=$base_title=}</a>&nbsp;&gt;&nbsp;</li>
          <li><a href="../{=$category_url=}/">{=$category_name=}</a>&nbsp;&gt;&nbsp;</li>
          <li>{=$title=}</li>
        </ul>
      </div>
    </div>
    <!-- content start -->
    <div class="inner clearfix">
      <div id="content" class="clearfix">
        <h3>タイトルが入ります</h3>
        <div class="section clearfix">
          <div class="case01">
            <p class="case_cate_txt">{=$category_name=}</p>
            <p class="case_region case_detail_txt"><span>地域:</span>{=mb_strimwidth($content01_Value, 0, 50, '…', 'UTF-8')=}</p>
          </div>
          <div class="case_box">
            <dl>
              <dt>
                <div class="case_img">
                  <ONIf condition="$img_01_Value"><img src="{=$img_01_Src=}" alt="{=$title=}" />
                    <ONElse>
                    <img src="../../images/under_dummy.jpg" alt="{=$title=}"/></ONIf>
                </div>
                <?php if($img_01_Value!=""){  ?>
                <ul class="case_btn02">
                  <ONIf condition="$img_01_Value">
                    <li><a role="{=$img_01_Src=}">Before</a></li>
                  </ONIf>
                  <ONIf condition="$img_02_Value">
                    <li><a role="{=$img_02_Src=}">After</a></li>
                  </ONIf>
                </ul>
                <?php }?>
              </dt>
              <dd>
                <?php if($content02_Value!=""||$content03_Value!=""||$content04_Value!=""||$content05_Value!=""){  ?>
                <div class="case_txt">
                  <ONIf condition="$content02_Value">
                    <div class="case_detail_txt"><span class="case_tt01">施工箇所:</span>{=$content02_Value=}</div>
                  </ONIf>
                  <ONIf condition="$content03_Value">
                    <div class="case_detail_txt"><span class="case_tt01">施工期間:</span>{=$content03_Value=}</div>
                  </ONIf>
                  <ONIf condition="$content04_Value">
                    <div class="case_detail_txt"><span class="case_tt01">築年数:</span>{=$content04_Value=}</div>
                  </ONIf>
                  <ONIf condition="$content05_Value">
                    <div class="case_detail_txt"><span class="case_tt01">使用塗料:</span>{=$content05_Value=}</div>
                  </ONIf>
                </div>
                <?php }?>
              </dd>
            </dl>
          </div>
        </div>
  <?php if($content06_Value!=""){  ?>
        <h4>{=mb_strimwidth($content06_Value, 0, 50, '…', 'UTF-8')=}</h4>
        <div class="section clearfix">
          <ONIf condition="$content07_Value">
            <div class="mb10 clearfix">{=$content07_Value=}</div>
          </ONIf>
        </div>
        <?php }?>
        <?php if($content08_Value!=""){ ?>
        <h4>{=mb_strimwidth($content08_Value, 0, 50, '…', 'UTF-8')=}</h4>
        <div class="section clearfix">
          <ONIf condition="$content08_Value">
            <div class="mb10 clearfix">{=$content09_Value=}</div>
          </ONIf>
        </div>
        <?php } ?>
        <?php if($content10_Value!=""){ ?>
        <ONIf condition="$content10_Value">
          <h4>{=mb_strimwidth($content10_Value, 0, 50, '…', 'UTF-8')=}</h4>
        </ONIf>
        <?php } ?>



        <?php if($img_03_Value!=""||$img_04_Value!=""||$img_05_Value!=""||$img_06_Value!=""||$img_07_Value!=""||$img_08_Value!=""||$img_09_Value!=""||$img_10_Value!=""){  ?>
        <div class="section clearfix">

          <ul id="contribute_slider_list" class="slider_list case_img_l clearfix">
              <ONIf condition="$img_03_Value">
                <li> <span><img src="{=$img_03_Src=}" alt="{=$title=}" /></span>
                  <ONIf condition="$content11_Value">
                    <div class="caption">{=$content11_Value=}</div>
                  </ONIf>
                </li>
              </ONIf>
              <ONIf condition="$img_04_Value">
                <li> <span><img src="{=$img_04_Src=}" alt="{=$title=}" /></span>
                  <ONIf condition="$content12_Value">
                    <div class="caption">{=$content12_Value=}</div>
                  </ONIf>
                </li>
              </ONIf>
              <ONIf condition="$img_05_Value">
                <li> <span><img src="{=$img_05_Src=}" alt="{=$title=}" /></span>
                  <ONIf condition="$content13_Value">
                    <div class="caption">{=$content13_Value=}</div>
                  </ONIf>
                </li>
              </ONIf>
              <ONIf condition="$img_06_Value">
                <li> <span><img src="{=$img_06_Src=}" alt="{=$title=}" /></span>
                  <ONIf condition="$content14_Value">
                    <div class="caption">{=$content14_Value=}</div>
                  </ONIf>
                </li>
              </ONIf>
              <ONIf condition="$img_07_Value">
                <li> <span><img src="{=$img_07_Src=}" alt="{=$title=}" /></span>
                  <ONIf condition="$content15_Value">
                    <div class="caption">{=$content15_Value=}</div>
                  </ONIf>
                </li>
              </ONIf>
              <ONIf condition="$img_08_Value">
                <li> <span><img src="{=$img_08_Src=}" alt="{=$title=}" /></span>
                  <ONIf condition="$content16_Value">
                    <div class="caption">{=$content16_Value=}</div>
                  </ONIf>
                </li>
              </ONIf>
              <ONIf condition="$img_09_Value">
                <li> <span><img src="{=$img_09_Src=}" alt="{=$title=}" /></span>
                  <ONIf condition="$content17_Value">
                    <div class="caption">{=$content17_Value=}</div>
                  </ONIf>
                </li>
              </ONIf>
              <ONIf condition="$img_10_Value">
                <li> <span><img src="{=$img_10_Src=}" alt="{=$title=}" /></span>
                  <ONIf condition="$content18_Value">
                    <div class="caption">{=$content18_Value=}</div>
                  </ONIf>
                </li>
              </ONIf>
            </ul>
            </ul>

            <?php $count = -1; ?>
            <ul id="contribute_bx_pager">
              <ONIf condition="$img_03_Value">
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="{=$img_03_Src=}" alt="{=$title=}" /></a></li>
              </ONIf>

              <ONIf condition="$img_04_Value">
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="{=$img_04_Src=}" alt="{=$title=}" /></a></li>
              </ONIf>
              <ONIf condition="$img_05_Value">
                  <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="{=$img_05_Src=}" alt="{=$title=}" /></a></li>
              </ONIf>
              <ONIf condition="$img_06_Value">
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="{=$img_06_Src=}" alt="{=$title=}" /></a></li>
              </ONIf>
              <ONIf condition="$img_07_Value">
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="{=$img_07_Src=}" alt="{=$title=}" /></a></li>
              </ONIf>
              <ONIf condition="$img_08_Value">
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="{=$img_08_Src=}" alt="{=$title=}" /></a></li>
              </ONIf>
              <ONIf condition="$img_09_Value">
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="{=$img_09_Src=}" alt="{=$title=}" /></a></li>
              </ONIf>
              <ONIf condition="$img_10_Value">
                <?php $count++; ?>
                <li><a href="" data-slide-index="<?php echo $count; ?>"><img src="{=$img_10_Src=}" alt="{=$title=}" /></a></li>
              </ONIf>
            </ul>
          </div>
        
        <?php }?>


        <div class="section clearfix">
          <?php $current_url = $url; ?>
          <ONContributeSearch>
            <ONContributeFetch>
              <?php $pages[] = $url; ?>
            </ONContributeFetch>
          </ONContributeSearch>
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
</ONContribute>
</html>