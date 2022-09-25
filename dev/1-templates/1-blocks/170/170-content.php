<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>    
<div class="type-338">
    <div class="container special">
        <div class="row">
            <!--SPECIAL SUBJECT-->
            <div class="navbar-collapse" id="catenav">
                <ul class="nav navbar-nav">
                    <li class="boxshow title">
                        <h4>
                            <a href="#">BÀI VIẾT CHUYÊN ĐỀ
                            </a>
                        </h4>
                        <span class="productdot"> </span>

                    </li>
                    <li class="col-xs-6 auto-width boxshow"><a href="#">Tin học cơ sở <span class="productdot"></span></a></li>
                    <li class="col-xs-6 auto-width boxshow"><a href="#">Công nghệ phần mềm <span class="productdot"></span></a></li>
                    <li class="col-xs-6 auto-width boxshow"><a href="#">Đồ họa</a> <span class="productdot"></span></li>
                    <li class="col-xs-6 auto-width boxshow"><a href="#">Mạng máy tính <span class="productdot"></span></a></li>
                </ul>
            </div>
            <!--END SPECIAL SUBJECT-->
        </div>
    </div>
</div>

