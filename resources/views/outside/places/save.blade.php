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


        </div>
        <!-- Hết bản đồ -->

        <div id="loadingResults">Reloading results...</div>

        <!-- Bên trai -->
        <div id="resultsContainer">


            <script>
                var image = "/assets/outside/img/map/1.png";
                function clickFunc(id) {
                    console.log(id); //should see ID here

                    // image = "/assets/outside/img/map/xxx.jpg";
                }

            </script>
            <!-- Ket qua -->
            <div id="resultsView">
                <div id="results " style="position: relative;">
                    <div class="container">
                        <div class="listing titleBlock">
                            <div class="titlePhoto"><img class="photo" src="https://irs3.4sqi.net/img/general/699x268/pYWobgLh0JO6B2_Vk__D-WjiESGnyWDqD0k1rgLsaHA.jpg" alt="My Saved Places" width="90%" /></div>
                            <div class="metadata ">
                                <h1 class="title">My Saved Places</h1>
                                <div class="avatar"><a href="/user/347725618"><img src="https://irs3.4sqi.net/img/user/32x32/347725618-NFLET3VBPK13JBQD.jpg" alt="" width="32" height="32" /></a></div>
                                <span class="creator">Created by <a href="/user/347725618">{{ Session::get('fullname') }}</a></span><span class="publicationDate"> • Updated On: November 29, 2016</span>
                                <div class="actions">
                                    <div class="buttons">
                                        <div class="facebook-share-button">
                                            <div class="facebook-share-button-inner"><img class="facebook-share-img" src="https://ss1.4sqi.net/img/facebook_white_18-6875722153c5cc272e8c0a35bd2300aa.png" alt="" width="14" height="14" /><span class="share-text">Share</span></div>
                                        </div>
                                        <div class="twitter-tweet-button-inner"><img class="twitter-tweet-img" src="https://ss0.4sqi.net/img/twitter_white_20-dddc8e223ea8cdef536fb8e9997eea92.png" alt="" width="14" height="14" /><span class="tweet-text">Tweet</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i = 1;?>
                        @foreach($result as $item)
                        <div class="main">
                            <?php $i = 1;?>
                            @foreach($result as $item)
                                    <input name="lat-" id="lat-{{ $i }}" value="{{$item->ViDo}}" hidden="true">
                                    <input name="lng" id="lng-{{ $i }}" value="{{$item->KinhDo}}" hidden="true">
                                <div class="listing venue" data-venueid="" data-tipid="null" data-saved="true">
                                    <div class="listingPhoto neutral">
                                        <div class="rankAndPhotoContainer"><a class="venueLink" href="#" target="_blank"><img class="photo" src="{{ $item->image_name }}"  /></a></div>
                                    </div>
                                    <div class="venueInfo">
                                        <div class="name">
                                            <p class="venueName"><a class="venueLink" href="#" target="_blank"><span class="rank">1.</span>{{ $item->TenDiaDiem }}</a></p>
                                            <div class="meta"><span class="address">
                                                    <?php echo $item->SoNha . ' Đường '. $item->TenDuong. ' Phuong '. $item->TenPhuong. ' Quận '. $item->TenQuanHuyen. ' Thành Phố'. $item->TenTinhThanh?>
                                                </span></div>
                                            <div class="meta adjusted"><span class="unlinkedCategory">$item->TenDichVu</span><span class="tipCount"> · </span></div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="saveButton saveToListAction active" title="Save to my saved places!"><span class="buttonLeft"><img src="https://ss0.4sqi.net/img/lists/button_icon_saveribbon-9c5999c47028ca670954422ee53e7d96.png" alt="" width="16" height="16" data-retina-url="https://ss1.4sqi.net/img/lists/button_icon_saveribbon@2x-d809e5af932a66d1725c40dfddcc2855.png" /></span><span class="buttonRight unsaved"><span class="label">Saved</span></span></div>
                                    </div>
                                </div>
                                    <?php $i++;?>
                            @endforeach
                        </div>

                    </div>

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
            var pyrmont = {lat: 10.754206, lng: 106.678208};
            var khtn = {lat: 10.762945, lng: 106.682059};
            /*for(var i=0; i<2; i++){
             diadiem.push(pyrmont);
             }*/
//            diadiem.push(pyrmont);
//            diadiem.push(khtn);
//


            var countplace = {{ count($result) }};
            console.log(countplace);
            for(var i = 1;i<=countplace; i++){
                var lat = parseFloat($('#lat-'+ i).val());
                var lng = parseFloat($('#lng-'+ i).val());
                alert(lat+ ' '+lng);
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