<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-173">
    <div class="container"> 
        <div class="row">
            <div class="tc rel">
                <div class="book" id="book">
                    <div class="page p">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print1.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print2.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print3.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print4.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print5.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print6.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print7.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print8.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print9.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print10.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print11.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print12.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print13.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print14.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print15.jpg" alt=""/>
                    </div>
                    <div class="page">
                        <img src="http://<?php echo $url_path ?>/images/iTDCcatalog_print16.jpg" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
