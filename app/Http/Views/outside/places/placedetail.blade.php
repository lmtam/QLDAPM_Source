@extends("{$moduleName}.layout.header")
@section('content')
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
                        <span class="unlinkedCategory">{{ $dulieu->TenDichVu }} Place</span>

                    </div>
                    <div class="locationInfo">
                        <span class="venueCity">Thành Phố {{ $dulieu->TenTinhThanh }}</span>
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
                        <a href="#" class="sectionGroup">
                            <span class="sectionLabel">Tips</span>
                            <span class="sectionCount">Count Tip</span>
                        </a>
                    </li>
                    <li class="photosBtn sectionBtn ">
                        <a href="#" class="sectionGroup">
                            <span class="sectionLabel">Photos</span>
                            <span class="sectionCount">Count Photo</span>
                        </a>
                    </li>
                </ul>
                <div class="sectionInfo">
                    <span class="sectionInfoName">Sulbing Q Dessert</span>
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
                        <span class="tipsCount sectionCount">'$Tips Count'</span>
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
                            <div class="addTipBlock">
                                <div class="userImage">
                                    <img src="https://ss1.4sqi.net/img/venuepage/v2/add_tip_blank_avatar-92b48188df42db391a669d992defe0b8.png" height="32" width="32" />
                                </div>
                                <div class="addTipArea">
                                    <a href="/login?continue=/v/sulbing-q-dessert/57caa60a498e614383472099">Log in</a> to leave a tip here.
                                </div>
                                <div class="buttonArea">
                                    <button class="greyButton">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <!---Người thứ nhất-->
                                    <li class="tip tipWithLogging useTipUpvotes " data-id="57e3ef71498e0b80da3609cf">
                                        <div class="authorImage">
                                            <a  href="/user/222737330"  >
                                                <img src="https://irs1.4sqi.net/img/user/32x32/222737330-M3RJVUWXX5W1XZ10.png" alt="Vo K." class="avatar "width="32" height="32"title="Vo K."data-retina-url="https://irs1.4sqi.net/img/user/64x64/222737330-M3RJVUWXX5W1XZ10.png" />
                                            </a>
                                        </div>
                                        <div class="tipContents">
                                            <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="/user/222737330" >Vo Kim</a>
                                                    </span>
                                                <span class="tipDate">September 22</span>
                                                <div class="tipAuthorJustification"></div></div><div class="tipText">
                                                <span class="entity tip_taste_match">Banana Crepe</span>
                                            </div>
                                            <img class="tipPhoto"src="https://irs0.4sqi.net/img/general/558x200/222737330_dV5DjUMAiCWkl5_UNl6SPWMWRODVx0goGqWvim3q4x8.jpg" photo-id="57e3ef7b498e264f51fbd363" width="558" height="200" alt="" data-retina-url="https://irs0.4sqi.net/img/general/1116x400/222737330_dV5DjUMAiCWkl5_UNl6SPWMWRODVx0goGqWvim3q4x8.jpg" />
                                            <div class="actionButtons">
                                                <span class="lastVoteTime"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tip tipWithLogging useTipUpvotes " data-id="57e3ef53498e7ea1e4db8473">
                                        <div class="authorImage">
                                            <a  href="/user/222737330"  >
                                                <img src="https://irs1.4sqi.net/img/user/32x32/222737330-M3RJVUWXX5W1XZ10.png" alt="Vo K." class="avatar "width="32" height="32"title="Vo K."data-retina-url="https://irs1.4sqi.net/img/user/64x64/222737330-M3RJVUWXX5W1XZ10.png" />
                                            </a>
                                        </div>
                                        <div class="tipContents">
                                            <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="/user/222737330" >Vo Kim</a>
                                                    </span>
                                                <span class="tipDate">September 22</span>
                                                <div class="tipAuthorJustification"></div>
                                            </div>
                                            <div class="tipText">
                                                <span class="entity tip_taste_match">Fruit Crepe</span>
                                            </div>
                                            <img class="tipPhoto"src="https://irs0.4sqi.net/img/general/558x200/222737330_kQ6V5Pu8zfYtklzOMiHltQ0Ai7lWL26ylnCFiqUwKr8.jpg" photo-id="57e3ef58cd103b4b035ca4c9" width="558" height="200" alt="" data-retina-url="https://irs0.4sqi.net/img/general/1116x400/222737330_kQ6V5Pu8zfYtklzOMiHltQ0Ai7lWL26ylnCFiqUwKr8.jpg" />
                                            <div class="actionButtons">
                                                <span class="lastVoteTime"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tip tipWithLogging useTipUpvotes " data-id="57e00ba3498e0b80d351479e">
                                        <div class="authorImage">
                                            <a  href="/user/222737330"  >
                                                <img src="https://irs1.4sqi.net/img/user/32x32/222737330-M3RJVUWXX5W1XZ10.png" alt="Vo K." class="avatar "width="32" height="32"title="Vo K."data-retina-url="https://irs1.4sqi.net/img/user/64x64/222737330-M3RJVUWXX5W1XZ10.png" />
                                            </a>
                                        </div>
                                        <div class="tipContents">
                                            <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="/user/222737330" >Vo Kim</a>
                                                    </span>
                                                <span class="tipDate">September 19</span>
                                                <div class="tipAuthorJustification"></div>
                                            </div>
                                            <div class="tipText">
                                                <span class="entity tip_taste_match">Mango</span>
                                                <span class="entity tip_taste_match">cheese</span>
                                                <span class="entity tip_taste_match">bingsu</span> is number one here. I love it so much
                                            </div>
                                            <img class="tipPhoto"src="https://irs3.4sqi.net/img/general/558x200/222737330_iBs__oNKsRtBUcoZpOhn3N74y5mQEQV8ncQx5yaE2TA.jpg" photo-id="57e00ba6498ee69b6cca8f85" width="558" height="200" alt="" data-retina-url="https://irs3.4sqi.net/img/general/1116x400/222737330_iBs__oNKsRtBUcoZpOhn3N74y5mQEQV8ncQx5yaE2TA.jpg" />
                                            <div class="actionButtons">
                                                <span class="lastVoteTime">Upvoted 1 week ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tip tipWithLogging useTipUpvotes " data-id="57de8204498e92928679aa1b">
                                        <div class="authorImage">
                                            <a  href="/user/222737330"  >
                                                <img src="https://irs1.4sqi.net/img/user/32x32/222737330-M3RJVUWXX5W1XZ10.png" alt="Vo K." class="avatar "width="32" height="32"title="Vo K."data-retina-url="https://irs1.4sqi.net/img/user/64x64/222737330-M3RJVUWXX5W1XZ10.png" />
                                            </a>
                                        </div>
                                        <div class="tipContents">
                                            <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="/user/222737330" >Vo Kim</a>
                                                    </span>
                                                <span class="tipDate">September 18</span>
                                                <div class="tipAuthorJustification"></div>
                                            </div>
                                            <div class="tipText">
                                                <span class="entity tip_taste_match">Egg</span>
                                                <span class="entity tip_taste_match">crepe</span> is good
                                            </div>
                                            <img class="tipPhoto"src="https://irs3.4sqi.net/img/general/558x200/222737330_rVUUE357CRZIUoTQf7LGetqtoNDnShBIe8Z5lWeAHDQ.jpg" photo-id="57de820c498e06f25f96f5e0" width="558" height="200" alt="" data-retina-url="https://irs3.4sqi.net/img/general/1116x400/222737330_rVUUE357CRZIUoTQf7LGetqtoNDnShBIe8Z5lWeAHDQ.jpg" />
                                            <div class="actionButtons">
                                                <span class="lastVoteTime">Downvoted 1 week ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tip tipWithLogging useTipUpvotes " data-id="57de81b4cd10a84e8a6cb816">
                                        <div class="authorImage">
                                            <a  href="/user/222737330"  >
                                                <img src="https://irs1.4sqi.net/img/user/32x32/222737330-M3RJVUWXX5W1XZ10.png" alt="Vo K." class="avatar "width="32" height="32"title="Vo K."data-retina-url="https://irs1.4sqi.net/img/user/64x64/222737330-M3RJVUWXX5W1XZ10.png" />
                                            </a>
                                        </div>
                                        <div class="tipContents">
                                            <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="/user/222737330" >Vo Kim</a>
                                                    </span>
                                                <span class="tipDate">September 18</span>
                                                <div class="tipAuthorJustification"></div>
                                            </div>
                                            <div class="tipText">
                                                <span class="entity tip_taste_match">Kiwi</span>
                                                <span class="entity tip_taste_match">bingsu</span> is good.
                                            </div>
                                            <img class="tipPhoto"src="https://irs2.4sqi.net/img/general/558x200/222737330_Rfj79SB0T4vZ594UiosR0MgOenFFnKu5U-2Evd2Crrc.jpg" photo-id="57de81b7498e0781fc90049f" width="558" height="200" alt="" data-retina-url="https://irs2.4sqi.net/img/general/1116x400/222737330_Rfj79SB0T4vZ594UiosR0MgOenFFnKu5U-2Evd2Crrc.jpg" />
                                            <div class="actionButtons">
                                                <span class="lastVoteTime">Downvoted 1 week ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Lặp lại bằng js -->
                                    <li class="tip tipWithLogging useTipUpvotes " data-id="57d54c8d498e0b59f2b41ac6">
                                        <div class="authorImage">
                                            <a  href="/user/100182636"  >
                                                <img src="https://irs1.4sqi.net/img/user/32x32/100182636-NW40G2PZMG2J1NW0.jpg" alt="Jamie S." class="avatar "width="32" height="32"title="Jamie S."data-retina-url="https://irs1.4sqi.net/img/user/64x64/100182636-NW40G2PZMG2J1NW0.jpg" />
                                            </a>
                                            <img src="https://ss0.4sqi.net/img/tip_like-15304d96d5c973561bbdb225059e89f0.png" class="tipAuthorInteractionIcon"/>
                                        </div>
                                        <div class="tipContents">
                                            <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="/user/100182636" >Jamie Seo</a>
                                                    </span>
                                                <span class="tipDate">September 11</span>
                                                <div class="tipAuthorJustification"></div>
                                            </div>
                                            <div class="tipText">Great bingsu..snow
                                                <span class="entity tip_taste_match">Ice cream</span>
                                            </div>
                                            <div class="actionButtons">
                                                <span class="lastVoteTime"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <!---Comment của người dùng thứ ...-->
                                    <li class="tip tipWithLogging useTipUpvotes " data-id="57d3f6f2498e24eaf242c10a">
                                        <div class="authorImage">
                                            <a  href="/user/335492241"  >
                                                <img src="https://irs2.4sqi.net/img/user/32x32/blank_girl.png" alt="kim v." class="avatar blankAvatar "width="32" height="32"title="kim v."data-retina-url="https://irs2.4sqi.net/img/user/64x64/blank_girl.png" />
                                            </a>
                                        </div>
                                        <div class="tipContents">
                                            <div class="tipHeaderRow">
                                                    <span class="userName">
                                                        <a href="/user/335492241" >kim vo</a>
                                                    </span>
                                                <span class="tipDate">September 10</span>
                                                <div class="tipAuthorJustification"></div>
                                            </div>
                                            <div class="tipText">We sale
                                                <span class="entity tip_taste_match">Ice Cream</span>, Snow
                                                <span class="entity tip_taste_match">Ice Cream</span>,
                                                <span class="entity tip_taste_match">Bubble Tea</span>,
                                                <span class="entity tip_taste_match">Smoothie</span>, Ice Blended,
                                                <span class="entity tip_taste_match">Coffee</span>,
                                                <span class="entity tip_taste_match">Mojitos</span>,
                                                <span class="entity tip_taste_match">Waffle</span>,
                                                <span class="entity tip_taste_match">Quesadilla</span>,.
                                            </div>
                                            <div class="actionButtons">
                                                <span class="lastVoteTime">Downvoted 1 week ago</span>
                                            </div>
                                        </div>
                                    </li>
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
                </div>
                <div class="venueDetails">
                    <div class="addressBlock sideVenueBlockRow">
                        <div class="venueRowIcon">
                            <img height="16" width="16" src="https://ss1.4sqi.net/img/venuepage/v2/venue_detail_address-aa5c2a1ab3bf2784d8f6ee57026a73c0.png" />
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
                                                                 <a href="http://maps.google.com/maps?daddr=10.766013045983025,106.69100850820541" rel="nofollow" target="_blank" class="directionsLink ">Get directions</a>
                                                             </span>
                            </div>
                        </div>
                    </div>


                    <div class="phoneBlock sideVenueBlockRow">
                        <div class="venueRowIcon">
                            <img height="16" width="16" src="https://ss0.4sqi.net/img/venuepage/v2/venue_detail_facebook-606d487eea1a45c15090cc00cf01f2c4.png" />
                        </div>
                        <div class="venueRowContent">
                            <a href="https://facebook.com/sulbingq" target="_blank" class="facebookPageLink"data-sig="qQsK7yHQeelCpaX3J00a+VokdoU=" onmousedown="fourSq.ui.OutgoingLink.mousedown($(this), event)" data-source="venue-detail">sulbingq</a>
                        </div>
                    </div>
                </div>
            </div>
@endsection