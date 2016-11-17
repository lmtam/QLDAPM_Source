<!DOCTYPE html>
<html lang="en">
<!--
<head>
    <title>Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="StyleResult.css" rel="stylesheet">

</head>

-->
<?php
//foreach ($dulieu as $item){
//    echo "<pre>";
//    print_r($item->diadiem);
//    print_r($item->dichvu);
//    print_r($item->duong);
//
//}
//echo "<pre>";
//print_r($dulieu);
//die();
?>
<head>

    <title>{{ $tukhoa }}</title>
    <meta content="en" http-equiv="Content-Language">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

    <link href="assets/outside/css/master-a06646f9a770f03d505462e698f959b8.css" type="text/css" rel="stylesheet">
    <link href="assets/outside/css/explorepage-f3b440947af3a27d526b5a6322a82044.css" type="text/css" rel="stylesheet">
    <link href="assets/outside/css/venue-menu-0dd1e698d3b88d480d4a9a9112641171.css" type="text/css" rel="stylesheet">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">


    {{--<script type="text/javascript" async="" src="https://stats.g.doubleclick.net/dc.js"></script>--}}

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>


</head>
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<script>
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 10.762903, lng: 106.681995},
            zoom: 15
        });

        var infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);

        service.getDetails({
            placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
        }, function(place, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                var marker = new google.maps.Marker({
                    map: map,
                    position: place.geometry.location
                });
                google.maps.event.addListener(marker, 'mousemove', function() {
                    infowindow.setContent('<img src="tumblr_msnl6bNM0A1shxxh8o1_500.gif" width="500" height="202">' + "<br/>đây là cái hình");
                    infowindow.open(map, this);
                });


            }
        });
    }
</script>

<body class="notrans withHeaderSearch withGetTheAppBar">

<!---------Body----------- -->

<div id="wrapper">
    <div class="desktopHeaderBarDrawerContainer " id="desktopHeaderBarDrawerContainer">
        <div class="desktopHeaderDrawerPlaceholder">

        </div>
        <div id="desktopHeader" class="withDrawer consumerMode ">
            <div class="wrap"><div class="leftSide">
                    <div class="logoArea"><a href="/" id="logo">MyFinder</a>
                    </div>
                    <div class="inputs">
                        <form action="" method="get" id="search">

                            <div class="inputSet locationInputSet">
                    <span class="locationReset" title="">

                    </span>
                                <input type="text" name="near" id="headerLocationInput" class="location ui-autocomplete-input"
                                       placeholder="" value="{{$tukhoa}}" data-longgeoid="10014946" maxlength="200"
                                       autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"
                                       style="background-image: none;"></div><button class="submitButton"
                                                                                     type="submit"><img class="goIcon"
                                                                                                        src="https://ss0.4sqi.net/img/chrome/icon-go_foursquare8-8345435729fdc997093a9bc1654f5569.png"
                                                                                                        data-retina-url="https://ss0.4sqi.net/img/chrome/icon-go_foursquare8@2x-8104e4d03ad47b81f079c1f043220e75.png"
                                                                                                        alt="Search" height="22px" width="22px">
                            </button>
                        </form>
                    </div>
                </div>
                {{--<div class="rightSide">--}}
                    {{--<div id="notifications" class="right" outside-click-id="1">--}}
                    {{--<span id="notificationsTrigger" class="link">--}}
                        {{--<span class="none">0--}}
                        {{--</span>--}}
                    {{--</span>--}}
                        {{--<div id="notificationsTray" style="display:none"--}}
                             {{--outside-click-id="1">--}}
                            {{--<ul>--}}

                            {{--</ul>--}}
                            {{--<div id="notificationsSeeAll"><a href="/user/348245470/notifications">See All Notifications</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="user"><a class="userPathLink" href="/user">--}}
                    {{--<span class="pic"><img src="https://irs1.4sqi.net/img/user/64x64/348245470-T1RQDJSFGEFO4Z13.jpg"--}}
                                           {{--alt="Nguyễn T." class="avatar " width="64" height="64" title="Nguyễn T."--}}
                                           {{--data-retina-url="https://irs1.4sqi.net/img/user/128x128/348245470-T1RQDJSFGEFO4Z13.jpg">--}}
                    {{--</span>--}}
                            {{--Nguyễn--}}
                            {{--<img src="https://ss1.4sqi.net/img/chrome/iconArrow-8410fbe6e1f9d75d83a583ff0fb87ad6.png" alt=""--}}
                                 {{--class="userArrow" width="7" height="5"></a><div id="userMenu"><ul><li><a class="userProfileLink"--}}
                                                                                                          {{--href="/user">My Profile</a>--}}
                                {{--</li>--}}
                                {{--<li class="myProfile"><a class="addTastesLink" href="/tastes/add">Add Tastes--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="myProfile"><a class="userListLink" href="/user/348245470/lists">Lists</a>--}}
                                {{--</li>--}}
                                {{--<li class="myProfile"><a class="userTodoLink" href="/user/348245470/list/todos">Saved</a>--}}
                                {{--</li>--}}
                                {{--<li class="myProfile"><a class="userTripTipsLink" href="/trip-tips">Trip Tips</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="accountSettingsLink" href="/settings">Settings</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<form name="logout" id="chromeLogout" method="POST" style="display:none;" action="/logout">--}}
                                        {{--<input type="hidden" name="token" value="XXI1XIKXHGNNIRAOVWV2500PNIUEGQR3FE5A3EA0DWBOXDE5">--}}
                                    {{--</form>--}}
                                    {{--<a href="/logout" class="logoutLink" id="logoutLink"--}}
                                       {{--onclick="$('#chromeLogout').submit();return false;">Log Out</a></li></ul></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
                <div class="rightSide">
                    <ul class="loggedOutMenu">
                        <li>
                            <a href="#"
                               class="log btn">Log In</a>
                        </li>
                        <li>
                            <a href="#"  id="signupButton" class="sign btn">Sign Up</a>
                        </li>
                    </ul>
                </div>
            <div class="desktopHeaderDrawer"><div class="wrap">
                    <div class="locationPivotDrawer drawer"><div class="nearbyLocationsBlock">
                            <div class="label">Nearby:</div><ul class="nearbyLocations">

                            </ul>
                        </div>
                        <div class="getInspiredBlock">
                            <div class="label">Get inspired:
                            </div>
                            <ul class="inspirationalLocations">

                            </ul>
                        </div>
                    </div>
                    <div class="queryPivotDrawer drawer ">
                        <ul class="chiclets"><li class="chiclet topPicks" data-cat="topPicks">
                                <a class="chicletLink" href="/explore?cat=topPicks"><span class="chicletText">Top Picks</span>
                                </a>
                            </li>
                            <li class="chiclet trending" data-cat="trending">
                                <a class="chicletLink" href="/explore?cat=trending"><span class="chicletText">Trending</span>
                                </a>
                            </li>
                            <li class="chiclet food" data-cat="food">
                                <a class="chicletLink" href="/explore?cat=food"><span class="chicletText">Food</span></a>
                            </li><li class="chiclet coffee" data-cat="coffee"><a class="chicletLink" href="/explore?cat=coffee">
                                    <span class="chicletText">Coffee</span></a>
                            </li><li class="chiclet drinks" data-cat="drinks">
                                <a class="chicletLink" href="/explore?cat=drinks">
                                    <span class="chicletText">Nightlife</span>
                                </a>
                            </li>
                            <li class="chiclet arts" data-cat="arts"><a class="chicletLink" href="/explore?cat=arts">
                                    <span class="chicletText">Fun</span></a>
                            </li>
                            <li class="chiclet shops" data-cat="shops">
                                <a class="chicletLink" href="/explore?cat=shops">
                                    <span class="chicletText">Shopping</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="container" class="wrap">
        <div id="explore" class="newEp">
            <!-- Bên phải Bản đồ -->
            <div id="mapView">

                <div id="mapCanvas" class="leaflet-container leaflet-touch leaflet-fade-anim mode-view" style="position: relative;">
                    <div class="leaflet-map-pane" style="transform: translate3d(-193px, -24px, 0px);"><div class="leaflet-tile-pane">
                            <div class="leaflet-layer"><div class="leaflet-tile-container"></div>
                                <div class="leaflet-tile-container leaflet-zoom-animated">
                                    <div id="map"></div>
                                    <script async defer
                                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9pF96R--7AvEVpK1qjEeIRhAbX92svPI&libraries=places&callback=initMap">
                                    </script>
                                 </div>
                            </div>
                        </div>
                        <div class="leaflet-objects-pane">
                            <div class="leaflet-shadow-pane">
                            </div>
                            <div class="leaflet-overlay-pane">

                            </div>
                            <div class="leaflet-marker-pane">
                                </div><div class="leaflet-popup-pane">

                            </div>
                        </div>
                    </div>
                    <div class="leaflet-control-container">
                        <div class="leaflet-top leaflet-left">
                            <div class="leaflet-control-requery leaflet-control active">
                                <a href="#"></a><span>Search this area</span>
                            </div>
                            <div class="leaflet-control-zoom leaflet-control">
                                <a href="#" class="leaflet-control-zoom-in" title="Zoom in">

                                </a>
                                <a href="#" class="leaflet-control-zoom-out" title="Zoom out">

                                </a>
                            </div>
                            <div class="leaflet-control-locate leaflet-control">
                                <a href="#" title="">

                                </a>
                            </div>
                            <div class="leaflet-control-draw leaflet-control">
    <span
            class="draw-control-button">Draw
    </span>
                            </div>
                        </div>
                        <div class="leaflet-top leaflet-right">

                        </div>
                        <div class="leaflet-bottom leaflet-left">

                        </div>
                        <div class="leaflet-bottom leaflet-right">
                            <div class="leaflet-control-attribution leaflet-control">
                                <a class="footerLink" href="/legal/privacy" target="_blank">Privacy
                                </a>
                                <a class="footerLink" href="/legal/terms" target="_blank">Terms
                                </a>
                                <a class="footerLink terms" href="https://www.mapbox.com/about/maps/"
                                   target="_blank">© Mapbox © OpenStreetMap</a>
                                <!--<a class="footerLink aboutOurMaps" href="https://foursquare.com/about/osm" target="_blank">About our maps</a>-->
                                <a class="footerLink mapbox-improve-map" href="" target="_blank">Improve this map
                                </a>
                            </div>
                        </div>
                    </div>
                    <svg class="tracer" width="200" height="200">

                    </svg>
                </div>
            </div>
            <!-- Hết bản đồ -->

            <div id="loadingResults">Reloading results...</div>

            <!-- Bên trai -->
            <div id="resultsContainer">

                <!--Phần lọc điều kiện -->
                {{--<div id="filterView">--}}
                    {{--<div class="suggestionGrouping">--}}
                        {{--<div id="messageBar"><h1 class="message"><span>Suggestions for <span class="searchTerm">Trending</span>--}}
        {{--near <span class="location">Nguyễn Thái Bình, Ho Chi Minh City</span></span></h1>--}}
                            {{--<div class="share" title=""><img width="16" height="16"--}}
                                                             {{--src="https://ss0.4sqi.net/img/linkIcon_16-c45db3b0951cacfca870739ed89e33e1.png"--}}
                                                             {{--data-retina-url="https://ss1.4sqi.net/img/linkIcon_16@2x-764351037c986694cdef6f0de193ae42.png"--}}
                                                             {{--alt="Copy link"></div>--}}
                            {{--<div class="spelling"></div>--}}
                        {{--</div></div>--}}

                    {{--<div class="newFilterControls"><h5 class="headerVisible">Filters:</h5>--}}
                        {{--<ul class="chips">--}}
                            {{--<li class="chip"><span>Specials</span></li>--}}
                            {{--<li class="chip"><span>Haven't Been</span></li>--}}
                            {{--<li class="chip"><span>Following</span></li>--}}
                            {{--<li class="chip"><span>Price</span></li>--}}
                            {{--<li class="chip"><span>Open Now</span></li>--}}
                            {{--<li class="chip"><span>Saved</span></li>--}}
                            {{--<li class="chip"><span>Liked</span></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                {{--</div>--}}

                <!-- Ket qua -->
                <div id="resultsView">
                    <div id="results" style="position: relative;">
                        <ul class="recommendationList">
                            <li class="card singleRecommendation hasPhoto tipWithLogging"
                                data-id="57403c6c498e61fb4c15b6ff" data-tipid="575d4dbccd102c62e01d3e15">
                                <?php $i =1;?>
                                @foreach($result as $item)
                                <?php
                                    $url = route('places.getDetail',['MaDuLieu'=>$item->dulieu->MaDuLieu]);

                                ?>

                                <div class="indexCol"><span class="venueIndex">{{$i}}.</span>
                                    <div class="outOfBoundsContainer"></div>
                                </div>
                                <div class="contentHolder">
                                    <div class="infoCol">
                                        <div class="venueBlock">
                                            <div class="venueDetails">
                                                <div class="venueName">
                                                    <h2><a href="{{ $url }}"
                                                           target="_blank">{{$item->diadiem->TenDiaDiem}}</a></h2></div><div class="venueMeta">
                                                    <div class="venueScore positive" title="" style="background-color: #73CF42;">8.3
                                                    </div>
                                                    <div class="venueAddressData">
                                                        <div class="venueAddress">
                                                            <?php echo $item->dulieu->SoNha . ' Đường '. $item->duong->TenDuong. ' Phuong '. $item->phuong->TenPhuong. ' Quận '. $item->quanhuyen->TenQuanHuyen. ' Thành Phố'. $item->tinhthanh->TenTinhThanh?>
                                                        </div>
                                                        <div class="venueData">
                                        <span class="venueDataItem">
                                            <span class="categoryName">Desserts
                                            </span>
                                            <span class="delim"> •
                                            </span>
                                        </span>
                                                            <span class="venueDataItem">
                                            <span class="price" title="">
                                                <span class="darken" itemprop="priceRange">$
                                                </span>$$$
                                            </span>
                                            <span class="delim"> •
                                            </span>
                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail tips ">
                                            <ul class="tips">
                                                <li class="tip"><div class="avatar"><img src="https://irs2.4sqi.net/img/user/64x64/WFHLQATWKK5C3YKL.jpg"
                                                                                         alt="Charly L." class="avatar " width="64" height="64"
                                                                                         title="Charly L." data-retina-url="https://irs2.4sqi.net/img/user/128x128/WFHLQATWKK5C3YKL.jpg">
                                                    </div><p class="tipText">
                                    <span class="tipAuthor ">
                                        <a class="userName" href="/user/35442177" target="_blank">Charly L.</a> • June 12
                                    </span>
                                                        Amazing chocolate <span class="entity tip_taste_match">cakes</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                <div class="resultFooter">
                                <div class="buttons">
                                    <div class="save-button  inactive">
                                    <span class="icon">

                                        </span>
                                            <span class="label">Save
                                        </span>
                                    </div>
                                </div>
                                </div>
                                    </div>
                                    <div class="photoCol">
                                        <div class="photoContainer">
                                            <img class="photo" src="https://irs2.4sqi.net/img/general/300x300/109699555_PaRSmNygmd4TTSO8dUMCM8p6QrGPwi6yAj0FtvUGlBI.jpg"
                                                 photo-id="5808bee4498eaeca808f7941" width="300" height="300" alt=""
                                                 data-retina-url="https://irs2.4sqi.net/img/general/600x600/109699555_PaRSmNygmd4TTSO8dUMCM8p6QrGPwi6yAj0FtvUGlBI.jpg">
                                        </div>
                                    </div>
                                </div>
                                <?php $i++;?>

                                @endforeach

                            </li>
                            <li class="card fewResults">
                                <h4>Only 1 result? Try...</h4>
                                <ul class="suggestions"><li class="zoomSuggestion">
                    <span class="link" data-action="zoomOut1">Zooming out
                    </span>
                                        to search a bigger area</li><li>Searching for something more general (like <span class="link"
                                                                                                                         data-action="category"
                                                                                                                         data-value="food">Food</span>,
                                        <span class="link" data-action="category" data-value="coffee">Coffee</span>, or <span class="link" data-action="category"
                                                                                                                              data-value="drinks">Nightlife</span>)
                                    </li>
                                    <li>Checking your spelling
                                    </li>
                                </ul>
                                <p>Don't see the place you're looking for? <span class="link" data-action="addVenue">
                    Add a new place to foursquare.
                </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- hết Ket qua -->
            </div>
            <!--Hêt bên trái -->

        </div>
    </div>


</div>




<!---------Hết body----------- -->

</body>
</html>