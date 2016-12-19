
@extends("{$moduleName}.layout.header")

<link rel="stylesheet" href="/assets/outside/css/jquery.emotions.fb.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


@section('menu')
    <div class="desktopHeaderDrawer" >
        <div class="wrap" >
            <div class="queryPivotDrawer drawer show">
        	<?php
                  $url_caphe    = route('places.getService',['tendichvu' => 'Quán café']);
                  $url_quanan   = route('places.getService',['tendichvu' => 'Quán ăn']);
                  $url_benhvien = route('places.getService',['tendichvu' => 'Bệnh viện']);
                  $url_ATM      = route('places.getService',['tendichvu' => 'ATM']);
                  $url_shopping = route('places.getService',['tendichvu' => 'Shop thời trang']);

          ?>
        	<ul class="chiclets" >


                <li class="chiclet food" data-cat="Quán Ăn">
                    <a class="chicletLink" href="{{ $url_quanan}}">
                        <span class="chicletText">Quán ăn</span>
                    </a>
                </li>
                <li class="chiclet coffee" data-cat="Cà phê">
                    <a class="chicletLink" href="{{ $url_caphe}}">
                        <span class="chicletText">Cà Phê</span>
                    </a>
                </li>
                <li class="chiclet drinks" data-cat="Bệnh viện">
                    <a class="chicletLink" href="{{ $url_benhvien}}">
                        <span class="chicletText">Bệnh viện</span>
                    </a>
                </li>
                <li class="chiclet arts" data-cat="ATM">
                    <a class="chicletLink" href="{{ $url_ATM}}">
                        <span class="chicletText">ATM</span>
                    </a>
                </li>
                <li class="chiclet shops" data-cat="Shop">
                    <a class="chicletLink" href="{{ $url_shopping}}">
                        <span class="chicletText">Mua sắm</span>
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content_detail')
    <div class="venueDetail hasPhoto" itemscope="" itemtype="http://schema.org/LocalBusiness">
        <div class="venueInfoSection">
            <div class="topVenueSection">
                <?php $path = '/upload/images_thumbs/Images/' . $dulieu->image_name; ?>
                <div class="mainIconWrapper hasCustomIcon">
                    <img src="{{ $path }}" alt="Sulbing Q Dessert" class="avatar "width="88" height="88" />
                </div>
                <div class="primaryInfo">
                    <div class="venueNameSection">
                        <h1 class="venueName" itemprop="name">{{$dulieu->TenDiaDiem}}</h1>
                    </div>
                    <div class="categories" >
                        <span class="unlinkedCategory">{{ $dulieu->TenDichVu }} Place</span>

                    </div>
                    <div class="locationInfo">
                        <span class="venueCity">Thành Phố {{ $dulieu->TenTinhThanh }}</span>
                    </div>
                    <div class="bottomVenueSection"></div>
                </div>
                <div class="actionBar">
                            <span class="saveAction actionBtn">
                                <div class="saveButton saveToListAction inactive" style="display: inline;" title="Save to my saved places!">
                                    <span class="buttonLeft" >
                                        <img src="/assets/outside/img/Save.png" style="display: inline; margin-top:5px;" height="20" width="20" />
                                    </span>
                                    <span class="buttonRight unsaved" onclick="SavePlace('{{ $dulieu->MaDuLieu }}')">
                                        <span class="label">Lưu</span>
                                    </span>
                                </div>
                            </span>
                    <span class="shareAction actionBtn">
                                <div class="doubleShareButton"  style="display: inline;"  title="Share this place with friends!">
                                    <span class="buttonLeft">
                                        <img src="/assets/outside/img/Share.png" style="display: inline; margin-top:5px;" height="20" width="20"  />
                                    </span>
                                    <span class="buttonRight" >
                                        <a class="btn btn-link" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) }}" target="_blank">
										<span class="label">Chia sẻ</span>
										</a>

                                    </span>
                                </div>
                            </span>
                </div>
            </div>
            <div class="sectionsBar">
                <ul class="sectionTabs">
                    <li class="tipsBtn sectionBtn active">
                        <a href="#" class="sectionGroup">
                            <span class="sectionLabel">Bình luận</span>
                            <span class="sectionCount">{{count($comment)}}</span>
                        </a>
                    </li>

                </ul>
                <?php  $IsLogin = Session::get('IsLogin');?>
                <div class="sectionInfo">
                    <span class="sectionInfoName"></span>
                </div>
                <input class="hidden" value="{{ $rating_status }}" id="rating_status">
                <script>
                    function addRating(status,MaDuLieu) {

                        var isLogin = {{ $IsLogin }};
                        if(isLogin == 0){
                            alert("Bạn Phải đăng nhập để đánh giá");
                            return;

                        }
                        else {
                            $.post('/addrating',
                                    {
                                        _token: '{{ csrf_token() }}',
                                        status: status,
                                        MaDuLieu: MaDuLieu
                                    },
                                    function (data) {
                                        if(data == 1 ){
                                            if(status == 'like'){
                                                $('#like').addClass('hidden');
                                                $('#likered').removeClass('hidden');

                                                $('#okred').addClass('hidden');
                                                $('#ok').removeClass('hidden');

                                                $('#dislikered').addClass('hidden');
                                                $('#dislike').removeClass('hidden');
                                            }
                                            else if(status == 'ok'){

                                                $('#likered').addClass('hidden');
                                                $('#like').removeClass('hidden');

                                                $('#ok').addClass('hidden');
                                                $('#okred').removeClass('hidden');

                                                $('#dislikered').addClass('hidden');
                                                $('#dislike').removeClass('hidden');
                                            }
                                            else{
                                                $('#likered').addClass('hidden');
                                                $('#like').removeClass('hidden');

                                                $('#okred').addClass('hidden');
                                                $('#ok').removeClass('hidden');

                                                $('#dislike').addClass('hidden');
                                                $('#dislikered').removeClass('hidden');

                                            }
                                        }
                                    });
                        }

                    }
                    function deleteRating(status,MaDuLieu) {
                        $.post('/deleterating',
                                {
                                    _token: '{{ csrf_token() }}',
                                    status: status,
                                    MaDuLieu: MaDuLieu
                                },
                                function (data) {
                                    if(data == 1){
//                                        alert(status + 'red');
                                        $('#'+status + 'red').addClass('hidden');
                                        $('#'+ status).removeClass('hidden');

                                    }
                                });
                    }
                    $(document).ready(function () {
                        var IsRating = {{ $IsRating }};
//                        alert(IsRating)
                        if(IsRating == 1) {
                            var rating_status = $('#rating_status').val() ;
//                            alert(rating_status);
                            if (rating_status == 'like') {
                                $('#like').addClass('hidden');
                                $('#likered').removeClass('hidden');

                                $('#okred').addClass('hidden');
                                $('#ok').removeClass('hidden');

                                $('#dislikered').addClass('hidden');
                                $('#dislike').removeClass('hidden');
                            }
                            else if (rating_status == 'ok') {

                                $('#likered').addClass('hidden');
                                $('#like').removeClass('hidden');

                                $('#ok').addClass('hidden');
                                $('#okred').removeClass('hidden');

                                $('#dislikered').addClass('hidden');
                                $('#dislike').removeClass('hidden');
                            }
                            else {
                                $('#likered').addClass('hidden');
                                $('#like').removeClass('hidden');

                                $('#okred').addClass('hidden');
                                $('#ok').removeClass('hidden');

                                $('#dislike').addClass('hidden');
                                $('#dislikered').removeClass('hidden');

                            }
                        }
                        else{
                            $('#like').removeClass('hidden');
                            $('#ok').removeClass('hidden');
                            $('#dislike').removeClass('hidden');
                            $('#likered').addClass('hidden');
                            $('#okred').addClass('hidden');
                            $('#dislikered').addClass('hidden');
                        }
                    });
                    function SavePlace(MaDuLieu) {
                        var isLogin = {{ $IsLogin }};
                        if(isLogin == 0){
                            alert("Bạn Phải đăng nhập để lưu địa điểm");
                            return;

                        }
                        else {
                            $.post('/addsave',
                                    {
                                        _token: '{{ csrf_token() }}',
                                        MaDuLieu: MaDuLieu
                                    },
                                    function (data) {

                                    });
                        }
                    }

                </script>


                <div class="venueRateBlock  " itemscope="" itemtype="" >

                    <div class="likeDislikeControls comboRatingButton" style="display: inline;">

                        <div class="comboRatingButtonLike like  " id="like" onclick="addRating('like',{{ $dulieu->MaDuLieu }})"  >
                            <span class="icon"  >
                                <img src="/assets/outside/img/rating/like.png"  style="height: 32px;width:32px;">

                            </span>
                        </div>
                        <div class="comboRatingButtonLike like hidden" id="likered" onclick="deleteRating('like',{{ $dulieu->MaDuLieu }})" >
                                <span class="icon"  >
                                    <img src="/assets/outside/img/rating/liked.png" style="height: 32px;width:32px;">

                                </span>
                        </div>
                        <div class="comboRatingButtonOk ok " id="ok" onclick="addRating('ok',{{ $dulieu->MaDuLieu }})">
                            <span class="icon" >
                                 <img src="/assets/outside/img/rating/ok.png" style="height: 32px;width:32px;">

                            </span>
                        </div>
                        <div class="comboRatingButtonOk ok hidden" id="okred" onclick="deleteRating('ok',{{ $dulieu->MaDuLieu }})">
                            <span class="icon" >
                                 <img src="/assets/outside/img/rating/oked.png" style="height: 32px;width:32px;">

                            </span>
                        </div>

                        <div class="comboRatingButtonDislike dislike " id="dislike" onclick="addRating('dislike',{{ $dulieu->MaDuLieu }})">
                            <span class="icon" >
                                 <img src="/assets/outside/img/rating/dislike.png" style="height: 32px;width:32px;">
                            </span>
                        </div>
                        <div class="comboRatingButtonDislike dislike hidden" id="dislikered" onclick="deleteRating('dislike',{{ $dulieu->MaDuLieu }})">
                            <span class="icon" >
                                 <img src="/assets/outside/img/rating/disliked.png" style="height: 32px;width:32px;">
                            </span>
                        </div>

                    </div>
                    <div style="display:inline; margin-left:5px;">
                        <span class="venueScore positive" title="{{$ratingPoint}}/10 - People like this place" style="background-color: #73CF42;">
                            <span itemprop="ratingValue">{{$ratingPoint}}</span><sup>/<span itemprop="bestRating">10</span></sup></span>
                        <div class="numRatingsBlock" style="float:right;">
                            <div class="numRatings" itemprop="ratingCount">{{$totalRating}}</div><div class="numRatingsLabel">đánh giá</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="mainColumn">
            <div class="allTipsSection subVenueSection active">
                <div class="signupPromptContainer" data-style="manual"></div>
                <div class="tipsSection">
                    <div class="sectionTitle">
                        <img class="sectionIcon" src="https://ss1.4sqi.net/img/venuepage/v2/section_title_tips-cf2a6004e780a9518fe37521968b56d0.png" height="25" width="25" />
                        <span class="tipsCount sectionCount">{{count($comment)}}</span>
                        <span class="tipsText sectionText">Bình luận và đánh giá</span>

                    </div>

                    <?php $isLogin = Session::get('IsLogin');?>
                    <?php
                    $url_back = URL::current();
                    $url_back = base64_encode($url_back);
                    $url_login = route("users.login",['url_back' => $url_back]);
                    //    $url_login = '/login';
                    Session::put('message','');
                    Session::save();

                    ?>
                    <div class="addTipsSection">

                        <div class="addTipTeaser" >
                            @if(!$isLogin)
                            <div class="addTipBlock">
                                <div class="userImage">
                                    <img src="assets/outside/img/avatar.png" height="32" width="32" />
                                </div>
                                <div class="addTipArea">
                                    <a href="{!! $url_login !!}">Đăng nhập</a> để bình luận.
                                </div>
                                <div class="buttonArea">
                                    <button class="greyButton">Gửi</button>
                                </div>
                            </div>
                            @else
                                <div class="addTipBlock" >
                                    <a href="/user/373255273" class="" style="display: inline;">
                                        <img src="assets/outside/img/avatar.png"  width="32" height="32"  >
                                    </a>
                                    <div class="addItemArea " style="height: 30px; display: inline">
                                        <span class="input-holder">
                                            <textarea  type="text"  style="width:90%;" class="form-control input-sm" rows="3" id="postcmt" name="postcmt"></textarea>

                                            <input name="_token" id="_token" hidden="true" value="{!! csrf_token() !!}">
                                        </span>
                                        <span class="charCount"></span>
                                        <p class="inputError"></p>
                                    </div>
                                    <div class="buttonArea">
                                        <button class="shareTipButton greenButton" id="btnpostCmt" tabindex="2">Gửi</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <input hidden="true" id="fullname" value="{!! Session::get('fullname') !!}">
                    <script>
                        $("#btnpostCmt").click(function(){
//                            alert ('123');

                            var postcmt = $('#postcmt').val();
                            var token   = $('#_token').val();
                            var madulieu = {{$dulieu->MaDuLieu}};
                            var user_id = {{ Session::get('user_id') }};
                            var now = new Date();

                            var fullname = $('#fullname').val();
//                            alert(fullname);
//                            return;
//                            alert (user_id);
                            $.post('/comments',
                                    {
                                        userid : user_id,
                                        MaDuLieu : madulieu,
                                        postcmt  : postcmt,
                                        _token : token
                                    },
                                    function(data){
                                        $("#tipsList").prepend('<li class="tip tipWithLogging useTipUpvotes " data-id="57e3ef71498e0b80da3609cf">'
                                                +'<div class="authorImage">'
                                                +'<a  href="#"  >'+
                                                '<img src="/assets/outside/img/avatar.png" height="32" width="32" />'
                                                +'</a>'
                                                +'</div>'
                                                +'<div class="tipContents">'
                                                +'<div class="tipHeaderRow">'
                                                +'<span class="userName">'
                                                +'<a href="/user/222737330" > '+ fullname +'</a>'
                                                +'</span>'
                                                +'<span class="tipDate">'+ now +'</span>'
                                                +'<div class="tipAuthorJustification">'
                                                +'</div>'
                                                +'</div>'
                                                +'<div class="tipText">'
                                                +'<span class="entity tip_taste_match">' + postcmt +'</span>'
                                                +'</div>'
                                                +'<div class="actionButtons">'
                                                +'<span class="lastVoteTime"></span>'
                                                +'</div>'
                                                +'</div>'
                                                +'</li>');
                                        $('.tipText').emotions();

                                    });
                        });
                    </script>
                    <div class="tipsListSection">
                        <h3 class="tipCount"></h3>
                        <div class="tipsSectionHeader">
                            <div class="filterArea">
                                <div class="sortControls">
                                    <ul class="sortOptions">
                                        <li data-sort="recent"  class="selected">
                                            <span class="sortLink">Tất cả</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tipsSectionBody">
                            <div id="tipsContainer">
                                <!---Đổ dữ liệu comment của người dùng bằng js-->
                                <ul id="tipsList">
                                    <?php
                                    foreach ($comment as $item):?>
                                    <li class="tip tipWithLogging useTipUpvotes " data-id="57e3ef53498e7ea1e4db8473">
                                        <div class="authorImage">
                                            <a  href="/user/222737330"  >
                                                <img src="/assets/outside/img/avatar.png" height="32" width="32" />
                                            </a>
                                        </div>
                                        <div class="tipContents">
                                            <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="#" >{{$item->fullname}}</a>
                                                    </span>
                                                <span class="tipDate">{{$item->created_day}}</span>
                                                <div class="tipAuthorJustification"></div>
                                            </div>
                                            <div class="tipText">
                                                <span class="entity tip_taste_match">{{$item->comment_content}}</span>
                                            </div>

                                            <div class="actionButtons">
                                                <span class="lastVoteTime"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                                <!---Kết thúc load comment--->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Phần dưới này không cần quan tâm-->
            <div class="allPhotosSection subVenueSection ">
                <div class="photosTitle sectionTitle">
                    <img class="sectionIcon" src="https://ss0.4sqi.net/img/venuepage/v2/section_title_photos-8f94fe369722d78e2322dec97fa9488d.png" height="25" width="25" />
                    <span class="photosCount sectionCount">8</span>
                    <span class="photosText sectionText">Photos</span>
                </div>
                <div class="photosBlock"></div>
            </div>
            <div class="menuSection subVenueSection "></div>
            <div class="footerWrapper"></div></div><div class="sidebar">


            {{-- Mô tả vị trí địa điểm --}}

                <div class="venueDetails">
                    <div class="addressBlock sideVenueBlockRow">
                        <div class="sideVenueBlock">
                            <div class="mapSection">
                                <div id="vmap">

                                </div>
                                <script>
                                    function initMap() {
                                        var lng = {{$dulieu->KinhDo}};
                                        var lat = {{$dulieu->ViDo}};

                                        var uluru = {lat: lat, lng: lng};
                                        var vmap = new google.maps.Map(document.getElementById('vmap'), {
                                            zoom: 16,
                                            center: uluru
                                        });
                                        var marker = new google.maps.Marker({
                                            position: uluru,
                                            map: vmap
                                        });
                                    }
                                </script>
                                <script async defer
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxy3BQabW8Yw9G1kZFOhUCvTHxn1rXM_M&callback=initMap">
                                </script>
                            </div>
                        </div>
                        <div class="venueRowContent">
                            <div class="venueName">{{ $dulieu->TenDiaDiem }}</div>
                            <div class="venueAddress">
                                <div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                        <span itemprop="streetAddress">
                                       <?php echo $dulieu->SoNha . ' Đường '. $dulieu->TenDuong. ' Phường '. $dulieu->TenPhuong. ' Quận '. $dulieu->TenQuanHuyen;?>
                                        </span>
                                    <br>
                                    <span itemprop="addressLocality">Thành Phố {{$dulieu->TenTinhThanh}}</span>
                                    <br>

                                </div>
                            </div>
                            <div class="venueDirections">
                                                             <span class="venueDirectionsLink">
                                                                 <a href="http://maps.google.com/maps?daddr={{ $dulieu->ViDo }},{{ $dulieu->KinhDo }}" rel="nofollow" target="_blank" class="directionsLink ">Chỉ đường</a>
                                                             </span>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <script src="assets/outside/js/jquery.emotions.js"></script>
            <script>
                $(document).ready(function(){

                    $('#postcmt').emotions();
                    $('.tipText').emotions();
                    $('#tukhoa').css("height","40px");

                });
            </script>


@endsection