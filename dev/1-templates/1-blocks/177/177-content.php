<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-177">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footerinfo">
                    <h4>KHOA CÔNG NGHỆ THÔNG TIN<br/>
                        Trường Cao Đẳng Công Nghệ Thủ Đức</h4>
                    <p>53 Võ Văn Ngân, P.Linh Chiểu, Q.Thủ Đức, Tp.HCM</p>
                    <p>Điện thoại: (028) 22 158 642</p>
                    <p>Fax: (028)38962474</p>
                    <p>Email: fit@tdc.edu.vn</p>
                    <p>Facebook: <a href="#">facebook.com/tdc.fit</a></p>
                    <p>Youtube: <a href="#">youtube.com/fit-tdc</a></p>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="bottom-link">
                    <li class=""><a href="#">Giới thiệu</a></li>
                    <li class=""><a href="#">Trường Cao Đẳng Công Nghệ Thủ Đức</a></li>
                    <!--<li class=""><a href="#">Quy trình ISO</a></li>-->
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="bottom-link">
                    <li class=""><a href="#">Liên hệ</a></li>
                    <li class="">2018 <a href="#">Khoa Công nghệ thông tin | Cao đẳng Công nghệ Thủ Đức | FIT - TDC</a> All Rights Reserved.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
