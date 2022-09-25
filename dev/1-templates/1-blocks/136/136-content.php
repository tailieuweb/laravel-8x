<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-136">
    <div class="container sidebar">
        <div class="row">
            <!--LEFT SIDE BAR-->
            <div class="col-md-4">
                <!--WIDGET IMAGES ENROLLMENT-->
                <div class="html">
                    <div class="img">
                        <a href="#">
                            <img src="http://<?php echo $url_path ?>/images/tuyensinh.jpg" alt="tuyensinh" title="Tuyen Sinh TDC">
                        </a>
                    </div>	
                    <div class="divider"></div>
                </div>
                <!--/END WIDGET IMAGES ENROLLMENT-->
            </div>
            <!--/END LEFT SIDE BAR-->
        </div>
    </div>

</div>
