<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-144">
    <div class="container news">
        <div class="row">
            <!--LIST NEWS-->
            <div class="col-md-8 col-xs-12">
                <div class="list_news">
                    <div class="list_new_view">
                        <div class="row">
                            <!--THE IMAGES OF THE ARTICLE-->
                            <div class="col-md-5 col-xs-12 col-sm-6">
                                <div class="top_news_block_thumb text-center">
                                    <a href="#">
                                        <img src="http://<?php echo $url_path ?>/images/posts-1.jpg" alt="post-1"/>
                                    </a>
                                </div>
                            </div>
                            <!--END THE IMAGES OF THE ARTICLE-->
                            <!--ARTICLE CONTENT-->
                            <div class="col-md-7 col-xs-12 col-sm-6 top_news_block_desc">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3 topnewstime">
                                        <span class="topnewsdate">20</span><br>
                                        <span class="topnewsmonth">Tháng 10</span><br>
                                    </div>
                                    <div class="col-md-9 col-xs-9 shortdesc">
                                        <h4>
                                            <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>
                                        </h4>
                                        <p>Navigos Search vừa công bố nhu cầu tuyển dụng nhân sự trung và cao cấp tại thị trường Việt Nam quý III/2016.<a href="#">[...]</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--END ARTICLE CONTENT-->
                        </div>
                    </div>
                    <div class="list_new_view">
                        <div class="row">
                            <!--THE IMAGES OF THE ARTICLE-->
                            <div class="col-md-5 col-xs-12 col-sm-6">
                                <div class="top_news_block_thumb text-center">
                                    <a href="#">
                                        <img src="http://<?php echo $url_path ?>/images/posts-1.jpg" alt="post-1"/>
                                    </a>
                                </div>
                            </div>
                            <!--END THE IMAGES OF THE ARTICLE-->
                            <!--ARTICLE CONTENT-->
                            <div class="col-md-7 col-xs-12 col-sm-6 top_news_block_desc">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3 topnewstime">
                                        <span class="topnewsdate">20</span><br>
                                        <span class="topnewsmonth">Tháng 10</span><br>
                                    </div>
                                    <div class="col-md-9 col-xs-9 shortdesc">
                                        <h4>
                                            <a href="#">Săn lùng kỹ sư công nghệ thông tin</a>
                                        </h4>
                                        <p>Navigos Search vừa công bố nhu cầu tuyển dụng nhân sự trung và cao cấp tại thị trường Việt Nam quý III/2016.<a href="#">[...]</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--END ARTICLE CONTENT-->
                        </div>
                    </div>
                    <!--PAGINATION-->    
                    <div class="pagination-centered">
                        <ul class="pagination">
                            <li class="active"><span>1</span></li>
                            <li><a href="#" data-ci-pagination-page="2" rel="start">2</a></li>
                            <li><a href="#" data-ci-pagination-page="3">3</a></li>
                            <li><a href="#" data-ci-pagination-page="4">4</a></li>
                            <li><a href="#" data-ci-pagination-page="5">5</a></li>
                            <li class="next"><a href="#" data-ci-pagination-page="2" rel="next">→</a></li>
                        </ul>            
                    </div>
                    <!--END PAGINATION-->  
                </div>

            </div>
            <!--END LIST NEWS-->

            <!--EVENT-->
            <div class="col-md-4"></div>
            <!--END EVENT-->                     
        </div>        
    </div>
</div>


