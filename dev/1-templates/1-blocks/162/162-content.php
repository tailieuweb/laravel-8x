<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>  
<div class="type-162">
    <!--LIST OF HEADER-->
    <div class="container">
        <div class="title-tuyensinh">
            <div class="ribbon">
                <div class="ribbon-stitches-top"></div>
                <div class="ribbon-content">
                    <h1>
                        Tuyển sinh 2017
                    </h1>
                </div>
                <div class="ribbon-stitches-bottom"></div>
            </div>
        </div>
        <!--IMAGES-->
        <div>
            <img class="images-gif" src="http://<?php echo $url_path ?>/images/tdcwhyus.gif" alt="tdc-tuyensinh-2015">
            <img class="images-gif" src="http://<?php echo $url_path ?>/images/tdc-tuyensinh.gif" alt="tdc-tuyensinh-2015-tong-quan">
        </div>
    </div>
    <!--END OF HEADER-->
</div>
