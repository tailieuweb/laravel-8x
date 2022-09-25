<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>    
<div class="type-164">
    <div class="container address">
        <div class="row">
            <!--LEFT ADDRESS-->
            <!--/END LEFT ADDRESS-->
            <!--RIGHT CONTACTS-->
            <div class="col-sm-6 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Liên hệ<br><span>Với chúng tôi</span></h2>
                    </div>
                    <div class="crossedbg"></div>
                    <div class="panel-body">
                        <!--CONTACT FORM-->
                        <form id="feedbackForm" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên">
                                <span class="help-block">Please enter your name.</span>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <span class="help-block">Please enter a valid e-mail address.</span>
                            </div>
                            <div class="form-group">
                                <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Lời nhắn" style="resize:none;"></textarea>
                                <span class="help-block">Please enter a message.</span>
                            </div>
                            <img src="http://<?php echo $url_path ?>/images/captcha.PNG" alt=""/>
                            <div class="form-group">
                                <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Vì lý do bảo mật, xin vui lòng điền mã hiển thị bên trên">
                                <span class="help-block">Please enter the code displayed within the image.</span>
                            </div>
                            <span class="help-block">Please enter a the security code.</span>
                            <button type="submit" id="feedbackSubmit" name="feedbackSubmit" class="btn btn-primary btn-lg" style="display: block; margin-top: 10px;">Gửi</button>
                        </form>
                        <!--/END CONTACT FORM-->
                    </div>
                </div>			
            </div>
            <!--/END RIGHT CONTACTS-->
        </div>
    </div>
</div>
