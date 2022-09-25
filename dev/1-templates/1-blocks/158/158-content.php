<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-158">
    <div class="container sidebar">
        <div class="row">
            <!--LEFT SIDE BAR-->
            <div class="col-md-8">
                <!--LIST HEADLINES-->
                <div class="headlines">
                    <ul>
                        <li>
                            <div class="headlinesdate">
                                <div class="headlinesdm">
                                    <div class="headlinesday">21</div>
                                    <div class="headlinesmonth">09</div>
                                </div>
                                <div class="headlinesyear">14</div>
                            </div>
                            <div class="headlinestitle">
                                <p class="effect-hover">  <a href="#">CSS Image Sprites</a>   </p>             
                            </div>
                        <li>
                            <div class="headlinesdate">
                                <div class="headlinesdm">
                                    <div class="headlinesday">21</div>
                                    <div class="headlinesmonth">09</div>
                                </div>
                                <div class="headlinesyear">14</div>
                            </div>
                            <div class="headlinestitle">
                                <p class="effect-hover">   <a href="#">CSS Image Sprites CSS Image Sprites CSS Image Sprites</a>                
                                </p>
                            </div>     
                        </li>
                        <li>
                            <div class="headlinesdate">
                                <div class="headlinesdm">
                                    <div class="headlinesday">21</div>
                                    <div class="headlinesmonth">09</div>
                                </div>
                                <div class="headlinesyear">14</div>
                            </div>
                            <div class="headlinestitle">
                                <p class="effect-hover"> <a href="#">CSS Image Sprites CSS Image Sprites</a>                
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/END LIST HEADLINES-->
                <!--PAGINATION-->
                <div class="pagination-center">
                    <ul class="pagination">
                        <li class="active"><span>1</span></li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li class="next">
                            <a href="#">→</a>
                        </li>
                    </ul>     
                </div>
                <!--/END PAGINATION-->
            </div>
        </div>
    </div>
</div>

