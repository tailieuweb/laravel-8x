<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-151">
    <div class="container news">
        <div class="row">
            <!--TOP NEWS-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <a href="#" ><img src="http://<?php echo $url_path ?>/images/posts-1.png" alt="post1"/></a>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-7 col-xs-8 col-xs-offset-1 coshortdesc blocks">
                                <h4>
                                    <a class="hover-fill" href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                            </h4>
                                <p>(PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <a href="#" ><img src="http://<?php echo $url_path ?>/images/posts-1.png" alt="post1"/></a>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-7 col-xs-8 col-xs-offset-1 coshortdesc blocks">
                                <h4>
                                    <a class="hover-fill" href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                            </h4>
                                <p>(PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <a href="#" ><img src="http://<?php echo $url_path ?>/images/posts-1.png" alt="post1"/></a>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-7 col-xs-8 col-xs-offset-1 coshortdesc blocks">
                                <h4>
                                    <a class="hover-fill" href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                            </h4>
                                <p>(PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <a href="#" ><img src="http://<?php echo $url_path ?>/images/posts-1.png" alt="post1"/></a>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-7 col-xs-8 col-xs-offset-1 coshortdesc blocks">
                                <h4>
                                    <a class="hover-fill" href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                            </h4>
                                <p>(PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <a href="#" ><img src="http://<?php echo $url_path ?>/images/posts-1.png" alt="post1"/></a>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-7 col-xs-8 col-xs-offset-1 coshortdesc blocks">
                                <h4>
                                    <a class="hover-fill" href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                            </h4>
                                <p>(PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <a href="#" ><img src="http://<?php echo $url_path ?>/images/posts-1.png" alt="post1"/></a>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-7 col-xs-8 col-xs-offset-1 coshortdesc blocks">
                                <h4>
                                    <a class="hover-fill" href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                            </h4>
                                <p>(PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--END TOP NEWS-->   
        </div>
        <div class="pagination-centered">
            <ul class="pagination">
                <li class="active"><span>1</span></li>
                <li><a href="#" data-ci-pagination-page="2" rel="start">2</a></li>
                <li class="next"><a href="#" data-ci-pagination-page="2" rel="next">→</a></li>
            </ul>    
        </div>
    </div>
</div>



