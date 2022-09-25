<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-152">
    <div class="container slidebar">
        <div class="row">
            <!--LEFT-->
            <!--/END LEFT-->
            <!--RIGHT SIDE BAR-->
            <div class="col-md-4">
                <!--LIST DEPARTMENTS-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Bộ môn <br><span>Chuyên ngành</span></h2>
                    </div>
                    <div class="crossedbg"></div>
                    <div class="dep_item dep_network">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 mask ">
                                <a>
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/mmt_thumb.jpg" alt="mmt">
                                </a>   
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                Mạng<br>máy tính
                            </div>
                        </div>
                    </div>
                    <div class="dep_item dep_software">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 mask ">
                                <a>
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/cnpm_thumb.jpg" alt="cnpm">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                công nghệ<br> phần mềm
                            </div>
                        </div>
                    </div>
                    <div class="dep_item dep_graphic">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 mask ">
                                <a>
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/dh_thumb.jpg" alt="dh">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                Đồ họa
                            </div>
                        </div>
                    </div>
                    <div class="dep_item dep_informatics">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 mask ">
                                <a>
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/thcs_thumb.jpg" alt="thcs">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 dep_name">
                                Tin học<br>cơ sở
                            </div>
                        </div>
                    </div>
                </div>	

                <div class="divider"></div>
                <!--/END LIST DEPARTMENTS-->

            </div>             
        </div>
        <!--/END RIGHT SIDE BAR-->
    </div>
</div>

