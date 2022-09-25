<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-179">
    <div class="container sidebar">
        <div class="row">
            <div class="col-md-8">
                <div class="row title">
                    <div class="col-md-10 col-xs-9">
                        <h1>Thông báo danh sách SV khóa 2018 bị xóa tên vì rút học phí và không đóng học phí</h1>
                    </div>
                    <div class="col-md-2 col-xs-3 padding-left">
                        <div class="headlinesdate">
                            <div class="headlinesdm">
                                <div class="headlinesday">04</div>
                                <div class="headlinesmonth">10</div>
                            </div>
                            <div class="headlinesyear">'18</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><div class="overviewline"></div></div>
                </div>
                <div class="row overview">
                    <div class="col-md-12 padding">
                        <p>Nếu SV có tên trong danh sách còn đi học mà chưa hoàn tất các khoản học phí, lệ phí hoặc đã đóng phí rồi mà có tên trong danh sách vui lòng phản hồi về văn phòng khoa đến hết 16h ngày mai thứ 6 ngày 5/10/2018.</p>

                    </div>
                </div>
                <div class="row maincontent">
                    <div class="col-md-12 padding">
                        <p>
                            <a href="#">Danh sách xóa tên sinh viên.</a>       
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
