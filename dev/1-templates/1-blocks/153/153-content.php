<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-153">
    <div class="container sidebar">
        <div class="row">
            <!--RIGHT-->
            <!--END RIGHT-->
            <!--LEFT SIDE BAR-->
            <div class="col-md-4">
                <!--RECENT NEWS-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Tin tức <br><span>Thông báo</span></h2>
                    </div>
                    <div class="crossedbg"></div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item on-recent-news boxshow">
                                <a href="#">Thông báo V/v Tổ chức thi tốt nghiệp bậc TCCN chính quy-Đợt 1 năm học 2016-2017</a>                            
                                <span> - 15/02/2017</span>
                                <span class="productdot"> </span>
                            </li>
                            <li class="list-group-item on-recent-news boxshow">
                                <a href="#">Thông báo v/v các lớp học phần sẽ bị hủy vì không đủ sĩ số</a>                            
                                <span> - 08/02/2017</span>
                                <span class="productdot"> </span>
                            </li>
                            <li class="list-group-item on-recent-news boxshow">
                                <a href="#">Thông báo v/v đăng ký học phần học kỳ 2 năm học 2016 - 2017</a>                            
                                <span> - 06/01/2017</span>
                                <span class="productdot"> </span>
                            </li>
                            <li class="list-group-item on-recent-news boxshow">
                                <a href="#">Thời gian nhận và trả lễ phục</a>                            
                                <span> - 20/12/2016</span>
                                <span class="productdot"> </span>
                            </li>
                            <li class="list-group-item on-recent-news boxshow">
                                <a href="#">Thông báo đăng ký dự lễ tốt nghiệp khóa 2013 bậc CĐ và khóa 2014 bậc TCCN</a>                            
                                <span> - 12/12/2016</span>
                                <span class="productdot"> </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/END RECENT NEWS-->
            </div>
            <!--/END LEFT SIDE BAR-->
        </div>
    </div>
</div>
