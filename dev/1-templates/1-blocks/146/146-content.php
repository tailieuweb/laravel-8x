<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-146">
    <div class="container teacher">
        <div class="row">
            <!--FACULTY OFFICE (văn phòng khoa)--> 
            <!--LIST TEACHER OF FACULTY OFFICE-->
            <div class="col-sm-8 col-md-8 prof_list">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 placeholder profview">
                        <div class="profview_thumb">
                            <div class="profview_thumb_wrap">
                                <a href="#">
                                    <img src="http://<?php echo $url_path ?>/images/VoThanhTrung.jpg" alt=""/>
                                </a>
                            </div>
                        </div>
                        <h4 class="prof_name"><a href="#">Võ Thành Trung</a></h4>
                        <span class="prof_title">Trưởng khoa</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder profview">
                        <div class="profview_thumb">
                            <div class="profview_thumb_wrap">
                                <a href="#">
                                    <img src="http://<?php echo $url_path ?>/images/TieuKimCuong.jpg" alt=""/>
                                </a>
                            </div>
                        </div>
                        <h4 class="prof_name"><a href="#">Tiêu Kim Cương</a></h4>
                        <span class="prof_title">Phó khoa</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder profview">
                        <div class="profview_thumb">
                            <div class="profview_thumb_wrap">
                                <a href="#">
                                    <img src="http://<?php echo $url_path ?>/images/NguyenHongLan.png" alt=""/>
                                </a>
                            </div>
                        </div>
                        <h4 class="prof_name"><a href="#">Nguyễn Hồng Lân</a></h4>
                        <span class="prof_title">Nhân viên</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder profview">
                        <div class="profview_thumb">
                            <div class="profview_thumb_wrap">
                                <a href="#">
                                    <img src="http://<?php echo $url_path ?>/images/DongThiHoan.jpg" alt=""/>
                                </a>
                            </div>
                        </div>
                        <h4 class="prof_name"><a href="#">Đồng Thị Hoan</a></h4>
                        <span class="prof_title">Nhân viên</span>
                    </div>
                </div>
            </div>
            <!--END LIST TEACHER OF FACULTY OFFICE-->
        </div>
        <!--END FACULTY OFFICE-->
    </div>   
</div>


