<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-137">
    <div class="container event">
        <div class="row">
            <!--LEFT SIDE BAR-->
            <div class="col-md-4">
                <!--WIDGET TOP EVENTS-->
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Sự kiện <br><span>Hoạt động</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="bodytimeline">
                            <div class="timeline">
                                <!--TOP EVENTS LEFT-->
                                <div class="timeline-left">
                                    <div class="timeline-badge "></div>
                                    <div class="timeline-panel">
                                        <div class="eventtime">
                                            <div class="eventtimecover">
                                                <div class="eventdm">
                                                    <div class="eventday">14</div>
                                                    <div class="eventmonth">01</div>
                                                </div>
                                                <div class="eventyear">'17</div>
                                            </div>
                                        </div>
                                        <div class="eventdetails">
                                            <div class="eventlocation">
                                                Hội trường H
                                            </div>
                                            <div class="eventdesc">
                                                <a href="#">Hội nghị học tập, quán triệt nghị quyết TW4 và chỉ thị 05</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-right">
                                    <div class="timeline-badge "></div>
                                    <div class="timeline-panel">
                                        <div class="eventtime">
                                            <div class="eventtimecover">
                                                <div class="eventdm">
                                                    <div class="eventday">15</div>
                                                    <div class="eventmonth">09</div>
                                                </div>
                                                <div class="eventyear">'18</div>
                                            </div>
                                        </div>
                                        <div class="eventdetails">
                                            <div class="eventlocation">
                                                Hội trường H                                </div>
                                            <div class="eventdesc">
                                                <a href="#">Lễ chào đón Tân FIT - TDCers</a>                                </div>
                                        </div>
                                    </div>
                                </div>

                                <!--/END TOP EVENTS LEFT-->
                                <!--TOP EVENTS RIGHT-->
                                <!--/END TOP EVENTS RIGHT-->
                            </div>
                        </div>
                        <div class="crossedbg"></div>
                    </div>
                    <div class="divider"></div>
                </div>
                <!--/END WIDGET TOP EVENTS-->
            </div>
            <!--/END LEFT SIDE BAR-->
            <!--RIGHT SIDE BAR-->
            <!--/END RIGHT SIDE BAR-->
        </div>
    </div>
</div>
