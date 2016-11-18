<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<title>Detail Place</title>

<link href="assets/outside/css/venue-detail-2-123f794815db22e987be8c5222c8aa91.css" rel="stylesheet" type="text/css"/>
<link href="assets/outside/css/master-a06646f9a770f03d505462e698f959b8.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="assets/outside/css/jquery.emotions.fb.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body class="notrans withHeaderSearch">
<div id="wrapper">
    <div class="desktopHeaderBarDrawerContainer drawerIsShown" id="desktopHeaderBarDrawerContainer">
        <div class="desktopHeaderDrawerPlaceholder"></div>
        <div id="desktopHeader" class="withDrawer consumerMode ">
            <div class="wrap">
                <div class="leftSide">
                    <div class="logoArea">
                        <a href="/" id="logo">My VnFinder</a>
                    </div><div class="inputs">
                    <form action="/explore" method="get" id="search">
                        <div class="inputSet searchInputSet withDropdownArrow" data-placeholder="I'm looking for...">
                            <input type="text" name="q" placeholder="" maxlength="200" id="headerBarSearch" />
                            <div class="dropdownArrow">
                                <div class="icon"></div>
                            </div>
                        </div>
                        <div class="inputSet locationInputSet">
                            <span class="locationReset" title="Use your current location"></span>
                            <input type="text" name="near" id="headerLocationInput" class="location" placeholder="" value="Thành phố Hồ Chí Minh, Việt Nam" data-longgeoid="72057594039494019"maxlength="200" />
                        </div>
                        <button class="submitButton" type="submit">
                            <img class="goIcon" src="https://ss0.4sqi.net/img/chrome/icon-go_foursquare8-8345435729fdc997093a9bc1654f5569.png" data-retina-url="https://ss0.4sqi.net/img/chrome/icon-go_foursquare8@2x-8104e4d03ad47b81f079c1f043220e75.png" alt="Search" height="22px" width="22px" />
                        </button>
                    </form>
                </div>
                </div>
                <div class="rightSide">
                    <ul class="loggedOutMenu">
                        <li>
                            <a href="/login?continue=%2Fv%2Fsulbing-q-dessert%2F57caa60a498e614383472099&amp;clicked=true"
                               class="log btn">Log In</a>
                        </li>
                        <li>
                            <a href="/signup/"  id="signupButton" class="sign btn">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="desktopHeaderDrawer">
                <div class="wrap">
                    <div class="locationPivotDrawer drawer">
                        <div class="nearbyLocationsBlock">
                            <div class="label">Nearby:</div>
                            <ul class="nearbyLocations"></ul>
                        </div>
                        <div class="getInspiredBlock">
                            <div class="label">Get inspired:</div>
                            <ul class="inspirationalLocations"></ul>
                        </div>
                    </div>
                    <div class="queryPivotDrawer drawer show">
                        <ul class="chiclets">
                            <li class="chiclet topPicks" data-cat="topPicks">
                                <a class="chicletLink" href="/explore?cat=topPicks">
                                    <span class="chicletText">Top Picks</span>
                                </a>
                            </li>
                            <li class="chiclet trending" data-cat="trending">
                                <a class="chicletLink" href="/explore?cat=trending">
                                    <span class="chicletText">Trending</span>
                                </a>
                            </li>
                            <li class="chiclet food" data-cat="food">
                                <a class="chicletLink" href="/explore?cat=food">
                                    <span class="chicletText">Food</span>
                                </a>
                            </li>
                            <li class="chiclet coffee" data-cat="coffee">
                                <a class="chicletLink" href="/explore?cat=coffee">
                                    <span class="chicletText">Coffee</span>
                                </a>
                            </li>
                            <li class="chiclet drinks" data-cat="drinks">
                                <a class="chicletLink" href="/explore?cat=drinks">
                                    <span class="chicletText">Nightlife</span>
                                </a>
                            </li>
                            <li class="chiclet arts" data-cat="arts">
                                <a class="chicletLink" href="/explore?cat=arts">
                                    <span class="chicletText">Fun</span>
                                </a>
                            </li>
                            <li class="chiclet shops" data-cat="shops">
                                <a class="chicletLink" href="/explore?cat=shops">
                                    <span class="chicletText">Shopping</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="container" class="wrap">
        <div class="venueDetail hasPhoto" itemscope="" itemtype="http://schema.org/LocalBusiness">
                <div class="venueInfoSection">
                    <div class="topVenueSection">
                        <div class="mainIconWrapper hasCustomIcon">
                            <img src="https://irs1.4sqi.net/img/user/88x88/334337136-Q0YNTZGSXZO34MBQ.png" alt="Sulbing Q Dessert" class="avatar "width="88" height="88"title="Sulbing Q Dessert"data-retina-url="https://irs1.4sqi.net/img/user/176x176/334337136-Q0YNTZGSXZO34MBQ.png" />
                        </div>
                        <div class="primaryInfo">
                            <div class="venueNameSection">
                                <h1 class="venueName" itemprop="name">{{$dulieu->TenDiaDiem}}</h1>
                            </div>
                            <div class="categories">
                                <span class="unlinkedCategory">{{$dulieu->TenDichVu}}</span>
                               
                            </div>
                            <div class="locationInfo">
                                <span class="venueCity">{{$dulieu->TenTinhThanh}}</span>
                            </div>
                            <div class="bottomVenueSection"></div>
                        </div>
                        <div class="actionBar">
                            <span class="saveAction actionBtn">
                                <div class="saveButton saveToListAction inactive" title="Save to my saved places!">
                                    <span class="buttonLeft">
                                        <img src="https://ss0.4sqi.net/img/lists/button_icon_saveribbon-9c5999c47028ca670954422ee53e7d96.png" height="16" width="16" data-retina-url="https://ss1.4sqi.net/img/lists/button_icon_saveribbon@2x-d809e5af932a66d1725c40dfddcc2855.png" />
                                    </span>
                                    <span class="buttonRight unsaved">
                                        <span class="label">Save</span>
                                    </span>
                                </div>
                            </span>
                            <span class="shareAction actionBtn">
                                <div class="doubleShareButton" title="Share this place with friends!">
                                    <span class="buttonLeft">
                                        <img src="https://ss0.4sqi.net/img/lists/button_icon_saveribbon-9c5999c47028ca670954422ee53e7d96.png" height="16" width="16" data-retina-url="https://ss1.4sqi.net/img/lists/button_icon_saveribbon@2x-d809e5af932a66d1725c40dfddcc2855.png" />
                                    </span>
                                    <span class="buttonRight">
                                        <span class="label">Share</span>
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="sectionsBar">
                        <ul class="sectionTabs">
                            <li class="tipsBtn sectionBtn active">
                                <a href="/v/sulbing-q-dessert/57caa60a498e614383472099" class="sectionGroup">
                                    <span class="sectionLabel">Tips</span>
                                    <span class="sectionCount">{{count($comment)}}</span>
                                </a>
                            </li>
                            <li class="photosBtn sectionBtn ">
                                <a href="/v/sulbing-q-dessert/57caa60a498e614383472099/photos" class="sectionGroup">
                                    <span class="sectionLabel">Photos</span>
                                    <span class="sectionCount">Count Photo</span>
                                </a>
                            </li>
                        </ul>
        
                        <div class="sectionInfo">
                            <span class="sectionInfoName"></span>
                        </div>
                        <div class="venueRateBlock hasNoRating hasNoRatingStats" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                            <div class="likeDislikeControls comboRatingButton">
                                <div class="comboRatingButtonLike like ">
                                    <span class="icon"></span>
                                </div>
                                <div class="comboRatingButtonOk ok ">
                                    <span class="icon"></span>
                                </div>
                                <div class="comboRatingButtonDislike dislike ">
                                    <span class="icon"></span>
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
                                <span class="tipsText sectionText">Tips and reviews</span>
                               
                            </div>
                            <div class="tastes">
                                <span class="filterText">Filter:</span>
                                <ul class="tastePile">
                                    <li class="taste " data-index="1" data-id="52e132be498ed1de2db2dcc1" data-name="bubble tea">
                                        <span class="pill">bubble tea</span>
                                    </li>
                                    <li class="taste " data-index="2" data-id="52e132be498e5e2b851ae697" data-name="mojitos">
                                        <span class="pill">mojitos</span>
                                    </li>
                                    <li class="taste " data-index="3" data-id="52cb360d498e49ae1f58c8e0" data-name="quesadillas">
                                        <span class="pill">quesadillas</span>
                                    </li>
                                    <li class="taste " data-index="4" data-id="52e132be498ec24bad567464" data-name="waffles">
                                        <span class="pill">waffles</span>
                                    </li>
                                    <li class="taste " data-index="5" data-id="52e132be498e0907e6a30352" data-name="smoothies">
                                        <span class="pill">smoothies</span>
                                    </li>
                                    <li class="taste hidden" data-index="6" data-id="52fbc95d498e387e4fa2689d" data-name="good for dates">
                                        <span class="pill">good for dates</span>
                                    </li>
                                    <li class="taste hidden" data-index="7" data-id="531ceb6f498eac7fe9f281a9" data-name="good for working">
                                        <span class="pill">good for working</span>
                                    </li>
                                    <li class="taste seeAllTasteLink">
                                        <span class="pill">(2 more)</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="addTipsSection">
                                <div class="addTipTeaser">                                   
                                    <div class="row">

                                    <img src="https://ss1.4sqi.net/img/venuepage/v2/add_tip_blank_avatar-92b48188df42db391a669d992defe0b8.png" height="32" width="32" />

                                    <textarea  type="text"  style="maxwidth: 80%; width:80%" class="form-control input-sm" rows="2" id="postcmt" name="postcmt"></textarea>

                                    <input name="_token" id="_token" hidden="true" value="{!! csrf_token() !!}">
                                    <button type="button"  class="btn btn-default" id="btnpostCmt">Post</button>                   
                                    </div>                                   
                                </div>
                            </div>
                            <script>
                                $("#btnpostCmt").click(function(){
                                    var postcmt = $('#postcmt').val();
                                    var token   = $('#_token').val();
                                    var madulieu = {{$dulieu->MaDuLieu}};
                                    
                                    $.post('/test',
                                    {
                                        userid : 1,
					madulieu : madulieu,                                 
					postcmt  : postcmt,          
                                       _token : token
                                    },
                                    function(data){
                                        $("#tipsList").prepend('<li class="tip tipWithLogging useTipUpvotes " data-id="57e3ef71498e0b80da3609cf">'
                                           +'<div class="authorImage">'
                                                +'<a  href="/user/222737330"  >'+
                                                    '<img src="https://ss1.4sqi.net/img/venuepage/v2/add_tip_blank_avatar-92b48188df42db391a669d992defe0b8.png" height="32" width="32" />'
                                                +'</a>'
                                            +'</div>'
                                            +'<div class="tipContents">'
                                                +'<div class="tipHeaderRow">'
                                                    +'<span class="userName">'
                                                        +'<a href="/user/222737330" > Vo Kim</a>'
                                                    +'</span>'
                                                    +'<span class="tipDate">'+ data['created_day'] +'</span>'
                                                    +'<div class="tipAuthorJustification">'
                                                    +'</div>'
                                                +'</div>'
                                                +'<div class="tipText">'
                                                    +'<span class="entity tip_taste_match">' + data['postcmt'] +'</span>'
                                                +'</div>'
                                                +' <img class="tipPhoto"src="https://ss1.4sqi.net/img/venuepage/v2/add_tip_blank_avatar-92b48188df42db391a669d992defe0b8.png" photo-id="57e3ef7b498e264f51fbd363" width="558" height="200" alt="" data-retina-url="https://irs0.4sqi.net/img/general/1116x400/222737330_dV5DjUMAiCWkl5_UNl6SPWMWRODVx0goGqWvim3q4x8.jpg" />'
                                                +'<div class="actionButtons">'
                                                    +'<span class="lastVoteTime"></span>'
                                                +'</div>'
                                            +'</div>'
                                        +'</li>');                                      
                                    }); 
                                });
                            </script>
                            <div class="tipsListSection">
                                <h3 class="tipCount"></h3>
                                <div class="tipsSectionHeader">
                                    <div class="filterArea">
                                        <div class="sortControls">Sort:
                                            <ul class="sortOptions">
                                                <li data-sort="recent"  class="selected">
                                                    <span class="sortLink">Recent</span>
                                                </li>
                                                <li data-sort="popular" >
                                                    <span class="sortLink">Popular</span>
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
                                                    <img src="https://ss1.4sqi.net/img/venuepage/v2/add_tip_blank_avatar-92b48188df42db391a669d992defe0b8.png" height="32" width="32" />                                                                    
                                                </a>
                                            </div>
                                            <div class="tipContents">
                                                <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="/user/222737330" >{{$item->fullname}}</a>
                                                    </span>
                                                    <span class="tipDate">{{$item->created_day}}</span>
                                                    <div class="tipAuthorJustification"></div>
                                                </div>
                                                <div class="tipText">
                                                    <span class="entity tip_taste_match">{{$item->comment_content}}</span>
                                                </div>
                                                <img class="tipPhoto"src="https://irs0.4sqi.net/img/general/558x200/222737330_kQ6V5Pu8zfYtklzOMiHltQ0Ai7lWL26ylnCFiqUwKr8.jpg" photo-id="57e3ef58cd103b4b035ca4c9" width="558" height="200" alt="" data-retina-url="https://irs0.4sqi.net/img/general/1116x400/222737330_kQ6V5Pu8zfYtklzOMiHltQ0Ai7lWL26ylnCFiqUwKr8.jpg" />
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
                                               <div class="venueDetails">
                                                   <div class="addressBlock sideVenueBlockRow">
                                                       <div class="venueRowIcon">
                                                           <img height="16" width="16" src="https://ss1.4sqi.net/img/venuepage/v2/venue_detail_address-aa5c2a1ab3bf2784d8f6ee57026a73c0.png" />
                                                       </div>
                                                       <div class="venueRowContent">
                                                         <div class="venueName">Place Name</div>
                                                         <div class="venueAddress">
                                                             <div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                                                 <span itemprop="streetAddress">{{$dulieu->SoNha}} {{$dulieu->TenDuong}}, {{$dulieu->TenPhuong}}, {{$dulieu->TenQuanHuyen}}, {{$dulieu->TenTinhThanh}}</span>
                                                                 <br>
                                                                 <span itemprop="addressLocality">{{$dulieu->TenTinhThanh}}</span>                                                                                             
                                                                 <br>
                                                                 Vi&#7879;t Nam
                                                             </div>
                                                         </div>
                                                         <div class="venueDirections">
                                                             <span class="venueDirectionsLink">
                                                                 <a href="http://maps.google.com/maps?daddr=10.766013045983025,106.69100850820541" rel="nofollow" target="_blank" class="directionsLink ">Get directions</a>
                                                             </span>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="hoursBlock sideVenueBlockRow">
                                                  <div class="venueRowIcon">
                                                      <img height="16" width="16" src="https://ss1.4sqi.net/img/venuepage/v2/venue_detail_hours-5f8f7978fdad3ae6facb96a1425df22c.png" />
                                                  </div>
                                                  <div class="venueRowContent">
                                                      <span class="open">Open until Midnight</span>
                                                      <span class="link toggleAllHoursLink">(Show more)</span>
                                                      <div class="allHours">
                                                          <ul class="timeframes">
                                                              <li class="timeframe">
                                                                  <span class="timeframeDays">Mon–Sun</span>
                                                                  <span class="timeframeHours">
                                                                      <ul>
                                                                          <li>Noon–Midnight</li>
                                                                      </ul>
                                                                  </span>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="phoneBlock sideVenueBlockRow">
                                                  <div class="venueRowIcon">
                                                      <img height="16" width="16" src="https://ss0.4sqi.net/img/venuepage/v2/venue_detail_phone-56d850d0a0506e1ce08284d7b1ad16e7.png" />
                                                  </div>
                                                 
                                              </div>
                                              <div class="phoneBlock sideVenueBlockRow">
                                                  <div class="venueRowIcon">
                                                      <img height="16" width="16" src="https://ss0.4sqi.net/img/venuepage/v2/venue_detail_facebook-606d487eea1a45c15090cc00cf01f2c4.png" />
                                                  </div>
                                                  <div class="venueRowContent">
                                                      <a href="https://facebook.com/sulbingq" target="_blank" class="facebookPageLink"data-sig="qQsK7yHQeelCpaX3J00a+VokdoU=" onmousedown="fourSq.ui.OutgoingLink.mousedown($(this), event)" data-source="venue-detail">{{$dulieu->TenDiaDiem}}</a>
                                                  </div>
                                              </div>
                                          </div>

                                    
     
     <script src="assets/outside/js/jquery.emotions.js"></script>             
    <script>
        $(document).ready(function(){
       
            $('#postcmt').emotions();
            $('.tipText').emotions();
        });
    </script>
                                          
</body>
</html>
