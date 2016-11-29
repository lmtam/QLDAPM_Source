@extends("{$moduleName}.layout.header")
@section('content_result')
    <script src="/assets/outside/js/jquery-2.2.3.js"></script>
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
    <div id="explore" class="newEp">
        <!-- Bên phải Bản đồ -->
        <div id="mapView">
            <div id="map"></div>
            <script>
//                function initMap() {
//                    var uluru = {lat: 10.773599, lng: 106.694420};
//                    var map = new google.maps.Map(document.getElementById('map'), {
//                        zoom: 10,
//                        center: uluru
//                    });
//                    var marker = new google.maps.Marker({
//                        position: uluru,
//                        map: map
//                    });
//
//
//                    var infoWindow = new google.maps.InfoWindow({map: map});
//
//                    // Try HTML5 geolocation.
//                    if (navigator.geolocation) {
//                        navigator.geolocation.getCurrentPosition(function(position) {
//                            var pos = {
//                                lat: position.coords.latitude,
//                                lng: position.coords.longitude
//                            };
//
//                            infoWindow.setPosition(pos);
//                            infoWindow.setContent('Location found.');
//                            map.setCenter(pos);
//                        }, function() {
//                            handleLocationError(true, infoWindow, map.getCenter());
//                        });
//                    } else {
//                        // Browser doesn't support Geolocation
//                        handleLocationError(false, infoWindow, map.getCenter());
//                    }
//                }
//
//                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
//                    infoWindow.setPosition(pos);
//                    infoWindow.setContent(browserHasGeolocation ?
//                            'Error: The Geolocation service failed.' :
//                            'Error: Your browser doesn\'t support geolocation.');
//                }

            </script>

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
            <script>
                var image = "/assets/outside/img/map/1.png";
                function clickFunc(id) {
                    console.log(id); //should see ID here

                   // image = "/assets/outside/img/map/xxx.jpg";
                }

            </script>
        <!-- Ket qua -->
            <div id="resultsView">
                <div id="results" style="position: relative;">
                    <ul class="recommendationList">
                        <?php $i =1;?>
                        @foreach($result as $item)
                        <li class="card singleRecommendation hasPhoto tipWithLogging" onmousemove="clickFunc('{!! $item->dulieu->MaDuLieu !!}')">

                                <?php
                                $url = route('places.getDetail',['MaDuLieu'=>$item->dulieu->MaDuLieu]);

                                ?>
                                <input name="lat-" id="lat-{{ $i }}" value="{{$item->dulieu->ViDo}}" hidden="true">
                                <input name="lng" id="lng-{{ $i }}" value="{{$item->dulieu->KinhDo}}" hidden="true">
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
                                            <span class="categoryName">
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
                                        {{--<div class="detail tips ">--}}
                                            {{--<ul class="tips">--}}
                                                {{--<li class="tip"><div class="avatar"><img src="https://irs2.4sqi.net/img/user/64x64/WFHLQATWKK5C3YKL.jpg"--}}
                                                                                         {{--alt="Charly L." class="avatar " width="64" height="64"--}}
                                                                                         {{--title="Charly L." data-retina-url="https://irs2.4sqi.net/img/user/128x128/WFHLQATWKK5C3YKL.jpg">--}}
                                                    {{--</div><p class="tipText">--}}
                                    {{--<span class="tipAuthor ">--}}
                                        {{--<a class="userName" href="/user/35442177" target="_blank">Charly L.</a> • June 12--}}
                                    {{--</span>--}}
                                                        {{--Amazing chocolate <span class="entity tip_taste_match">cakes</span></p>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
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
                                    <?php
                                    if (!empty(old('image_name'))) :
                                        $path = old('image_name');
                                    else :
                                        $path = '/upload/images/' . $item->dulieu->image_name;
                                    endif;

                                    ?>
                                    <div class="photoCol">
                                        <div class="photoContainer">
                                            <img class="photo" src="{{ $path }}" width="300" height="300" alt="">
                                        </div>
                                    </div>
                                </div>
                                <?php $i++;?>



                        </li>
                        @endforeach
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
    <?php
    $hinh =1;

    ?>
    <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        var map;
        var infowindow;



        function initMap() {
            var diadiem = new Array()
//            var pyrmont = {lat: 10.754206, lng: 106.678208};
//            var khtn = {lat: 10.762945, lng: 106.682059};
            /*for(var i=0; i<2; i++){
             diadiem.push(pyrmont);
             }*/
//            diadiem.push(pyrmont);
//            diadiem.push(khtn);
//


                    var countplace = {{ count($result) }};
                    console.log(countplace);
                    for(var i =1;i<countplace; i++){
                        var lat = parseFloat($('#lat-'+ i).val());
                        var lng = parseFloat($('#lng-'+ i).val());
                        var a = {lat: lat, lng: lng};
                        diadiem.push(a);

                    }
//                    diadiem.push(pyrmont);
//                    diadiem.push(khtn);


//                    console.log(diadiem[1]['lat']);
            map = new google.maps.Map(document.getElementById('map'), {
                center: diadiem[1],
                zoomControl: true,
                scaleControl: true,

                zoom: 15
            });
            // hiển thị thông tin ghi chú
            contentString = new Array();

//                    var image = "xxx.jpg";
            contentString[0] = '<table bordercolor="#0000CC"><tr><td height="42" width="42" rowspan="2" background="do an.png" style="background-size: 100% 100%;"></td><td colspan="2"><a href="#">Quan An Quan 8 Day</a></td></tr><tr><td height="42" width="42" rowspan="2" style="background-size: 100% 100%;" background="<?php if($hinh==0){echo "bun.jpg";}else{if($hinh==1){echo "binh thuong.jpg";}else{echo "vui.jpg";}} ?>"  ></td><td>Địa chỉ quán</td></tr><tr><td align="center" bgcolor="#999999">1</td><td >Vị trí - Giá Tiền</td></tr> </table>';
            contentString[1] = "xyz";
            var infowindow = new google.maps.InfoWindow({
                content: "",

            });
            hinh = new Array();
            hinht = new Array();
            for(var i=1; i<=20; i++){
                hinh[i] = '/assets/outside/img/maker/'+ i +'.png';
                hinht[i] = '/assets/outside/img/maker/t'+ i +'.png';

            }
            for(var i = 0; i < diadiem.length; i++ )
            {
                var marker = new google.maps.Marker({
                    position: diadiem[i],
                    map: map,
                    title: 'Hello World!',
                    icon: hinh[i+1]
                });
                incontent(marker, map, infowindow, contentString[i],i);
            }

            function incontent(marker,map, infowindow, mota,i)
            {
                marker.addListener('mousemove', function() {
                    infowindow.open(map, marker);
                    infowindow.setContent(mota)
                    marker.setIcon(hinh[i+1]);
                });
                marker.addListener('mouseout',function(){
                    marker.setIcon(hinh[0]);
                    infowindow.close();
                });



            }

        }



    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA43oZfX0hL9Sc6ixgrHpuPNFlf_g1O6o&callback=initMap">
    </script>
@endsection