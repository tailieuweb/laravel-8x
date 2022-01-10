@extends('product.layout')

@section('title', 'List of products')

@section('content')








<div class="type-91">
            <div class="container college-box">
                <div class="course-events">
                    <div class="wrapper clearfix">
                        <div class="row no-margin">
                            <div class="our-college-sidebar col-4 col-md-4 col-sm-12 col-xs-12">
                                <article>
                                    <h3>Thông tin tuyển sinh TDC</h3>
                                    <p>Tin tức</p>
                                    <p>Ngành học tại TDC</p>
                                    <p>Lý do chọn TDC</p>
                                    <p>Cơ hội việc làm</p>
                                    <p>Trắc nghiệm định hướng nghề nghiệp</p>
                                    <p>Một số câu hỏi thường gặp</p>
                                </article>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-12">


                                <section class="events flexslider">
                                    <h3>Thông báo - Tin tức</h3>

                                    <ul class="swiper-container-div content-list-div">
                                         <div class="swiper-wrapper-div">

                                             <?php for ($i = 0; $i < $products->count(); $i++): ?>
                                             <div class="swiper-slide-div">
                                                 <li >

                                                     <article>
                                                         <span class="date">{{ $products[$i]->created_at->format('d') }}<span>{{ $products[$i]->created_at->format('m') }}-{{ $products[$i]->created_at->format('Y') }}</span></span>
                                                         <h3><a href="{!! URL::route('detail', [   'id' => $products[$i]->post_id]) !!}"><?php echo $products[$i]->post_name; ?></a></h3>
                                                         <p><?php echo $categories[$i] ?></p>
                                                         <div>
                                                             <button type="button" class="btn btn-primary" style="padding: 0px 5px !important"
                                                                     data-toggle="modal" data-target="#publicKey{{$products[$i]->post_id}}">
                                                                     Show public key
                                                             </button>
                                                             <button type="button" class="btn btn-primary pull-right" style="padding: 0px 5px !important"
                                                                     data-toggle="modal" data-target="#verify{{$products[$i]->post_id}}">
                                                                     Verify
                                                             </button>
                                                             <p><?php echo $products[$i]->post_overview; ?></p>
                                                         </div>

                                                         <!-- Public key -->
                                                         <div class="modal fade" id="publicKey{{$products[$i]->post_id}}" role="dialog">
                                                             <div class="modal-dialog">

                                                                 <!-- Modal content-->
                                                                 <div class="modal-content">
                                                                     <div class="modal-header">
                                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                         <h4 class="modal-title">Public key</h4>
                                                                     </div>
                                                                     <div class="modal-body">
                                                                         <p>{{$publicKey}}</p>
                                                                     </div>
                                                                     <div class="modal-footer">
                                                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>

                                                         <!-- Verify -->
                                                         <div class="modal fade" id="verify{{$products[$i]->post_id}}" role="dialog">
                                                             <div class="modal-dialog">

                                                                 <!-- Modal content-->
                                                                 <div class="modal-content">
                                                                     <div class="modal-header">
                                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                         <h4 class="modal-title">Verify</h4>
                                                                     </div>
                                                                     <div class="modal-body">
                                                                         <form class="form-inline" id="frm{{$products[$i]->post_id}}" action="/action_page.php" onsubmit="return mySubmitFunction(event, {{$products[$i]->post_id}})">
                                                                             <div class="row" style="margin-bottom: 30px">
                                                                                 <div class="col-md-2">
                                                                                     <label for="key">Key</label>
                                                                                 </div>
                                                                                 <div class="col-md-10">
                                                                                     <textarea class="form-control" id="key" name="key" row="15" col="30" style="width: 100%">{{$products[$i]->token}}</textarea>
                                                                                 </div>


                                                                             </div>
                                                                             <div class="row">
                                                                                 <div class="col-md-2">
                                                                                     <label for="publicKey">Public key</label>
                                                                                 </div>
                                                                                 <div class="col-md-10">
                                                                                     <textarea class="form-control" id="publicKey" row="30" name="publicKey" style="width: 100%"></textarea>
                                                                                 </div>


                                                                             </div>
                                                                             <div class="row col-md-12">
                                                                                 <button type="submit" class="btn btn-default">Verify</button>
                                                                             </div>

                                                                             <div class="col-md-12 info{{$products[$i]->post_id}}">
                                                                                    <div class="row">
                                                                                        <b>Status:</b> <span class="status"></span>
                                                                                    </div>
                                                                                 <div class="row">
                                                                                     <b>Group:</b> <span class="group"></span>
                                                                                 </div>
                                                                                 <div class="row">
                                                                                     <b>Username:</b> <span class="username"></span>
                                                                                 </div>
                                                                             </div>
                                                                         </form>
                                                                     </div>
                                                                     <div class="modal-footer">
                                                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>




                                                     </article>

                                                 </li>
                                             </div>

                                             <?php endfor; ?>


                                        </div>


                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
