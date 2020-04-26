@extends('layouts.user-master-layout',['currentPage' => 'News Detail'])
@section('page-title','News Detail')
@section('content')
    <head>
        <link href="{{asset('newstheme/css/bootstrap1.min.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/fonts/font-awesome/css/font-awesome1.min.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/css/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/css/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/css/offcanvas.min.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/css/style1.css')}}" rel="stylesheet">
    </head>
    {{--Content--}}
    <nav aria-label="breadcrumb" class="align-items-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/news">Tin Tức Thể Hình</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php
                ?>
            </li>
        </ol>
    </nav>

    <body id="page-top" data-spy="scroll" data-target=".navbar">
    <div id="main-wrapper">
        <!-- Feature Category Section & sidebar -->
        <section id="feature_category_section" class="feature_category_section single-page section_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="single_content_layout">
                            <div class="item feature_news_item">
                                <div class="item_img">
                                    <img class="img-responsive" style="width: 500px; height:200px " src="{{$newsDetail->images}}" alt="">
                                </div><!--item_img-->
                                <div class="item_wrapper">
                                    <div class="news_item_title">
                                        <h2><a href="#" style="font-size: 20px; font-weight: bold">{{$newsDetail->title}}</a></h2>
                                    </div><!--news_item_title-->
                                    <div class="item_meta"><a href="#">{{$newsDetail->created_at}}</a> by: <a href="#">Admin</a></div>

                                    <span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>

                                    <div class="single_social_icon">
                                        <a class="fb-ic" href="#"><i class="fa fa-facebook"></i><span style="vertical-align: text-top">Facebook</span></a>
                                        <!--Twitter-->
                                        <a class="tw-ic" href="#"><i class="fa fa-twitter"></i><span style="vertical-align: text-top">Twitter</span></a>
                                        <!--Google +-->
                                        <a class="gplus-ic" href="#"><i class="fa fa-google-plus"></i><span style="vertical-align: text-top">Google Plus</span></a>
                                        <!--Linkedin-->
                                        <a class="li-ic" href="#"><i class="fa fa-linkedin"></i><span style="vertical-align: text-top">Linkedin</span></a>
                                    </div> <!--social_icon1-->

                                    <div class="item_content">
                                        <p class="lead">
                                            {!! $newsDetail->content !!}
                                        </p>

                                    </div><!--item_content-->

                                </div><!--item_wrapper-->
                            </div><!--feature_news_item-->

                            <div class="ad">
                                <img class="img-responsive" src="{{asset('newstheme/img/img-single-ad.jpg')}}" alt="Chania">
                            </div>

                            <div class="readers_comment">
                                <div class="single_media_title"><h2>Related Comments</h2></div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img alt="64x64" class="media-object" data-src="assets/img/img-author1.jpg"
                                                 src="assets/img/img-author1.jpg" data-holder-rendered="true">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h2 class="media-heading">Sr. Ryan</h2>
                                        But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                                        no annoying consequences, or one who avoids a pain that produces no resultant pleasure?


                                        <div class="comment_article_social">
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                                            <a href="#"><span class="reply_ic">Reply </span></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img alt="64x64" class="media-object" data-src="assets/img/img-author1.jpg"
                                                 src="assets/img/img-author1.jpg" data-holder-rendered="true">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h2 class="media-heading">S. Joshep</h2>
                                        But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                                        no annoying consequences, or one who avoids a pain that produces no resultant pleasure?

                                        <div class="comment_article_social">
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                                            <a href="#"><span class="reply_ic"> Reply </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--readers_comment-->

                            <div class="add_a_comment">
                                <div class="single_media_title"><h2>Add a Comment</h2></div>
                                <div class="comment_form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group comment">
                                            <textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-submit red">Submit</button>
                                    </form>
                                </div><!--comment_form-->
                            </div><!--add_a_comment-->

                        </div><!--single_content_layout-->
                    </div>

                    <div class="col-md-3">

                        <div class="tab sitebar">
                            <div class="sidebar_title">
                                <h2 style="padding: 20px 15px 0px 20px">Related News</h2>
                            </div>

                            <div class="tab-content">
                                @foreach($related as $news)
                                <div class="tab-pane active" id="1">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="news/{{$news->id}}.html"><img class="media-object" width="120px" height="80px" src="{{$news->images}}" alt="Generic placeholder image"></a>
                                        </div><!--media-left-->
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#" style="font-size: 13px; font-weight: bold ">{{$news->title}}</a></h3>
                                            <span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>
                                        </div><!--media-body-->
                                    </div><!--media-->
                                </div>
                                @endforeach
                               <!--tab-pane-->
                            </div><!--tab-content-->

                        </div><!--tab-->


                        <div class="ad">
                            <img class="img-responsive" src="{{asset('newstheme/img/img-sitebar.jpg')}}" alt="img" />
                            <img class="img-responsive" src="{{asset('newstheme/img/img-sitebar.jpg')}}" alt="img" />
                            <img class="img-responsive" src="{{asset('newstheme/img/img-sitebar.jpg')}}" alt="img" />
                            <img class="img-responsive" src="{{asset('newstheme/img/img-sitebar.jpg')}}" alt="img" />
                        </div><!--ad-->

                        <div class="ad">
                            <img class="img-responsive" src="{{asset('newstheme/img/img-ad.jpg')}}" alt="img" />
                        </div>

                        <div class="ad">
                            <img class="img-responsive" src="{{asset('newstheme/img/img-ad2.jpg')}}" alt="img" />
                        </div>

                        <div class="most_comment">
                            <div class="sidebar_title">
                                <h2>Most Commented</h2>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="assets/img/img-list.jpg" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                                    <div class="comment_box">
                                        <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                        <div class="comments"><a href="#">9 Comments</a></div>
                                    </div><!--comment_box-->
                                </div><!--media-body-->
                            </div><!--media-->
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="assets/img/img-list2.jpg" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                                    <div class="comment_box">
                                        <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                        <div class="comments"><a href="#">20 Comments</a></div>
                                    </div><!--comment_box-->
                                </div><!--media-body-->
                            </div><!--media-->
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="assets/img/img-list3.jpg" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                                    <div class="comment_box">
                                        <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                        <div class="comments"><a href="#">23 Comments</a></div>
                                    </div><!--comment_box-->
                                </div><!--media-body-->
                            </div><!--media-->
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="assets/img/img-list3.jpg" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                                    <div class="comment_box">
                                        <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                        <div class="comments"><a href="#">44 Comments</a></div>
                                    </div><!--comment_box-->
                                </div><!--media-body-->
                            </div><!--media-->
                        </div><!--most_comment-->
                    </div>
                </div>
            </div>
        </section><!--feature_category_section-->
    </div>

    {{--Script--}}
    <script src="{{asset('newstheme/js/jquery.min.js')}}"></script>
    <script src="{{asset('newstheme/js/owl.carousel.js')}}"></script>
    <script src="{{asset('newstheme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('newstheme/js/script.js')}}"></script>
    <script src="{{asset('newstheme/js/offcanvas.min.js')}}"></script>

@endsection
