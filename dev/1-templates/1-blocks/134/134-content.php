<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-134">
    <div class="container slideshow">
        <!--SLIDE SHOW-->
        <div class="swiper-container">
            <!--SLIDE BANNER-->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="http://<?php echo $url_path ?>/images/banner3.jpg" alt=""/>
                    </a>
                    <div class="content-slide-show">
                        <h3 class="title" data-swiper-parallax="-100">Ra mắt <br><span class="subtitle">Logo Khoa CNTT</span></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="http://<?php echo $url_path ?>/images/banner2.jpg" alt=""/>
                    </a>
                    <div class="content-slide-show">
                        <h3 class="title" data-swiper-parallax="-100"><span class="subtitle">Chào mừng Tân Sinh viên</span><br>Khóa 2016</h3>
                    </div>       
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="http://<?php echo $url_path ?>/images/banner1.jpg" alt=""/>
                    </a>   
                    <div class="content-slide-show">
                        <h3 class="title" data-swiper-parallax="-100"><span class="subtitle">Khoa CNTT</span><br>Trường CĐ Công Nghệ Thủ Đức</h3>
                    </div>    
                </div>
            </div>
            <!--END SLIDE BANNER-->
            <!--ARROWS -->
            <div class="swiper-button-next"><span class="btn-next fa fa-chevron-right"></span></div>
            <div class="swiper-button-prev"><span class="btn-prev fa fa-chevron-left"></span></div>
            <!--END ARROWS-->
        </div>
        <!--END SLIDE SHOW-->
    </div>
</div>
