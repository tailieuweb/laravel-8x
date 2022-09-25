<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-141">
    <div class="container sidebar">
        <div class="row">
            <!--LEFT SIDE BAR-->

            <!--/END LEFT SIDE BAR-->

            <!--RIGHT CONTENTS HOME-->

            <!--LEFT PARTNERS-->
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Đối tác</h2>
                    </div>
                    <div class="crossedbg"></div>
                    <h4><b>Chứng nhận</b></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 padding">
                            <div class="partnerlogo">
                                <div class="img">
                                    <a href="http://<?php echo $url_path ?>/images/ms_cert.gif" data-toggle="lightbox" data-title="Microsoft IT Academy">
                                        <img class="img-responsive" src="http://<?php echo $url_path ?>/images/micr.png" alt="Microsoft logo"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 padding">
                            <div class="partnerlogo">
                                <div class="img">
                                    <a href="http://<?php echo $url_path ?>/images/cisco_cert.gif" data-toggle="lightbox" data-title="Microsoft IT Academy">
                                        <img class="img-responsive" src="http://<?php echo $url_path ?>/images/cisco.gif" alt="Microsoft logo"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4><b>Công ty thực tập</b></h4>

                    <div class="swiper-container1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/thue.png"  alt="Cục thuế Tp.HCM logo" title="Cục thuế Tp.HCM">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/tma.png" alt="TMA solutions logo" title="TMA Solutions">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/fpt.png"  alt="FPT Software logo" title="FPT Software" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/pmsv.png"  alt="PMSV logo" title="Phần mềm giáo dục">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/esc.png" alt="ESC logo" title="ESC">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/abs.gif" alt="ABS Việt Mỹ logo" title="ABS Việt Mỹ" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/softWorld.gif" alt="SoftWorld logo" title="SoftWorld Việt Nam" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/thietbinhanh.gif" alt="Bibiam logo" title="Bibiam">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/3T.png"  alt="3T logo" title="3T" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/bk.gif" alt="Bach Khoa Group logo" title="Bach Khoa Group">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/pnc.png" alt="PNC logo" title="PNC Telecom" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/cmc.png" alt="CMC P&T logo" title="CMC P&T" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <div class="img">
                                        <a href=#>
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/southernWaveS.gif" alt="Sóng nam logo" title="Sóng Nam" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button">
                            <div class="swiper-button-next"><span class="btn-next fa fa-chevron-right"></span></div>
                            <div class="swiper-button-prev"><span class="btn-prev fa fa-chevron-left"></span></div>
                        </div>
                    </div>

                    <div class="divider"></div>
                </div>
                <!--/END LEFT PARTNERS-->
            </div>
        </div>
    </div>
</div>
