<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-133">
    <!--MENU HOME-->

    <div class="navbar-default hidden-menutop" role="navigation">
        <div class="container menu">        
            <nav class="topnav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed mobile" data-toggle="collapse" data-target="#maintop" aria-expanded="false" aria-controls="navbar"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="maintop">
                    <ul  class="nav navbar-nav">
                        <li class="active"><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Tuyển sinh</a></li>
                        <li><a href="#">Brochure</a></li>
                        <li><a href="#">Tài liệu chuyên ngành</a></li>
                        <li><a href="#">Liên hệ</a></li> 
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--END MENU HOME-->
    <header id="scoll-top">
        <nav id="clear-navbar-fixed"class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
            <!--LIST OF HEADER -->
            <div class="container menu">
                <div class="left-bg">&nbsp;</div>
                <div class="container menu">
                    <div class="logo">
                        <a href="#"><img alt="TDC-Khoa CNTT logo" src="http://<?php echo $url_path ?>/images/logo.png"></a>
                        <span class="triangle-arrow">&nbsp;</span>
                    </div>

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false" aria-controls="navbar"> 
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button>
                    </div>
                    <div class="navbar-collapse collapse" id="mainnav">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 menutop clear_padding">
                            <ul  class="nav navbar-nav">
                                <li><a href="#">Trang chủ</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Tuyển sinh</a></li>
                                <li><a href="#">Brochure</a></li>
                                <li><a href="#">Tài liệu chuyên ngành</a></li>
                                <li><a href="#">Liên hệ</a></li> 
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 clear-left clear_padding">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="first parent"><a href="#">tin tức</a></li>
                                <li class="parent"><a href="#">giảng viên</a></li>
                                <li class="parent"><a href="#">sinh viên</a></li>
                                <li class="parent"><a href="#">chuyên đề</a></li>
                                <li class="last parent"><a href="#">đào tạo</a></li>
                            </ul>
                        </div>
                    </div>                  
                </div>
            </div>
        </nav>
    </header>
    <!--END MENU HEADER-->

</div>
