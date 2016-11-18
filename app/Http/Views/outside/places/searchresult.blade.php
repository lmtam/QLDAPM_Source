@extends("{$moduleName}.layout.header")
@section('content')
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
    </div>
@endsection