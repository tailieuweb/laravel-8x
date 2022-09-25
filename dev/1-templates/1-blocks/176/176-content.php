<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-176">
    <div class="container event">
        <div class="row">
            <!--LEFT SIDE BAR-->
            <div class="col-md-4">
                <!--WIDGET TOP EVENTS-->
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Catalogue<br><span>English</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <a href="https://view.publitas.com/tdc/fit-tdc-catalogue-2018-english/" target="_blank"><img src="http://<?php echo $url_path ?>/images/tdc-en.jpg" class="img-responsive" alt="FIT - TDC catalogue English"></a>
                        <div class="crossedbg"></div>

                        <div class="panel-heading">
                            <h2><span>Japanese</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <a href="https://view.publitas.com/tdc/fit-tdc-catalogue-2018-japanese/" target="_blank"><img src="http://<?php echo $url_path ?>/images/tdc-japan.jpg" class="img-responsive" alt="FIT - TDC catalogue Japanese"></a>
                        <div class="crossedbg"></div>
                    </div>	<div class="divider"></div>
                </div>	<div class="divider"></div>
            </div>
        </div>
        <!--/END WIDGET TOP EVENTS-->
    </div>
    <!--/END LEFT SIDE BAR-->
    <!--RIGHT SIDE BAR-->
    <!--/END RIGHT SIDE BAR-->
</div>
