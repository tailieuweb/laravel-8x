<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-178">
    <div class="container video">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Khoa Công nghệ thông tin <br><span>Trường Cao đẳng Công nghệ Thủ Đức</span></h2>
                    </div>
                    <div class="crossedbg"></div>
                    <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/cm57ye-svYI" frameborder="0" allowfullscreen=""></iframe></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Khoa Công nghệ Thông tin Trường Cao đẳng Công nghệ Thủ Đức được thành lập năm 2008, trên cơ sở Khoa Công Nghệ Thông Tin trường Trung Cấp Kỹ Thuật và Nghiệp Vụ Thủ Đức.</p>
                                <p>Khoa Công Nghệ Thông Tin có nhiệm vụ đào tạo:</p>
                                <p>- Đào tạo Cử nhân Cao đẳng ngành Công nghệ Thông tin, Truyền thông và Mạng máy tính, Thiết kế đồ họa.</p>
                                <p>- Đào tạo hệ TCCN các ngành Tin học ứng dụng, Truyền thông đa phương tiện. <a href="gioi-thieu">[...]</a></p>
                            </div>

                        </div>
                    </div>
                </div>	
                <div class="divider"></div>
            </div>	
        </div>
    </div>
</div>
