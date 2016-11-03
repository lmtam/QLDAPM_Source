<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<!-- Mirrored from foursquare.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2016 15:17:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <title>{{ $title }}</title>
  <meta content="en" http-equiv="Content-Language" />
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
  <link href="assets/outside/css/master-a06646f9a770f03d505462e698f959b8.css" type="text/css" rel="stylesheet"/>
  <link href="./assets/outside/css/standalone-pages/new-homepage-b10d40c14fb7461378d4556f9204e3be.css" type="text/css" rel="stylesheet"/>
    <link href="/assets/outside/css/login.css" rel="stylesheet">
  <script type="text/javascript">window.fourSq = window.fourSq || {}; fourSq.queue = [];</script>

  <script type="text/javascript" src="./assets/outside/js/third_party/jquery-1.7.2.min-b8d64d0bc142b3f670cc0611b0aebcae.js"></script>
  <script type="text/javascript" src="./assets/outside/js/build/en/leaflet/current-0c3d1252324b30da598b6a91231ecea5.js"></script>
  <script type="text/javascript" src="./assets/outside/js/build/en/chrome/root-377269c47d053b2e83f047009ce9664b.js"></script>
  <script type="text/javascript" src="./assets/outside/js/build/en/foursquare/root-7dbb428a032eeb5443f75acfda482e86.js"></script>
  <script type="text/javascript" src="./assets/outside/js/build/en/foursquare/map-support-f8e8458bd8fd63240fa21331a6a242b4.js"></script>
  <script type="text/javascript" src="./assets/outside/js/build/en/foursquare/new-homepage-d1bebac5ea32225d2079bb1bc4b42c3c.js"></script>

</head>
<body class="notrans withoutHeaderSearch withProductBar">
  <div id="wrapper"  style="padding-top:0px">
    <div class="desktopHeaderBarDrawerContainer " id="desktopHeaderBarDrawerContainer">
      <div class="desktopHeaderDrawerPlaceholder"></div>
      <div id="desktopHeader" style="margin-top:0px" class="withDrawer consumerMode withProductBar">
        

        <div class="wrap">
          <div class="leftSide">
            <div class="logoArea">
              <a href="#" id="logo">MyFinder</a>
            </div>
          </div>

          <div class="rightSide">
            <ul class="loggedOutMenu">
              <!-- <li class="enterpriseSiteMenuLink"><a href="https://enterprise.foursquare.com/" class="enterprise">Foursquare for Enterprise</a></li> -->
              <li class="aboutMenuLink"><a href="#" class="about">About MyFinder</a></li>
              <!-- <li class="downloadAppMenuLink"><a href="download.html" class="getTheApp">Get the App</a></li> -->
              <li><a href="https://foursquare.com/login?continue=%2F&amp;clicked=true" class="log btn">Log In</a></li>
              <li><a href="signup/index.html"  id="signupButton" class="sign btn">Sign Up</a></li>
            </ul>
          </div>
        </div>
        <div class="desktopHeaderDrawer">
          <div class="wrap">
            <div class="locationPivotDrawer drawer">
              <div class="nearbyLocationsBlock">
                <div class="label">Nearby:</div>
                <ul class="nearbyLocations">

                </ul>
              </div>
              <div class="getInspiredBlock">
                <div class="label">Get inspired:</div>
                <ul class="inspirationalLocations">

                </ul>
              </div>
            </div>
            <div class="queryPivotDrawer drawer ">
              <ul class="chiclets">
                <li class="chiclet topPicks" data-cat="topPicks">
                  <a class="chicletLink" href="explore9f70.html?cat=topPicks">
                    <span class="chicletText">Top Picks</span>
                  </a>
                </li>
                <li class="chiclet trending" data-cat="trending">
                  <a class="chicletLink" href="explore0489.html?cat=trending">
                    <span class="chicletText">Trending</span>
                  </a>
                </li>
                <li class="chiclet food" data-cat="food">
                  <a class="chicletLink" href="exploredb64.html?cat=food">
                    <span class="chicletText">Food</span>
                  </a>
                </li>
                <li class="chiclet coffee" data-cat="coffee">
                  <a class="chicletLink" href="explore9863.html?cat=coffee">
                    <span class="chicletText">Coffee</span>
                  </a>
                </li>
                <li class="chiclet drinks" data-cat="drinks">
                  <a class="chicletLink" href="explore091e.html?cat=drinks">
                    <span class="chicletText">Nightlife</span>
                  </a>
                </li>
                <li class="chiclet arts" data-cat="arts">
                  <a class="chicletLink" href="explorece43.html?cat=arts">
                    <span class="chicletText">Fun</span>
                  </a>
                </li>
                <li class="chiclet shops" data-cat="shops">
                  <a class="chicletLink" href="explore55c5.html?cat=shops">
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
      <div class="newHomepage">
        <div class="searchArea">
          <div id="searchMap">

          </div>
          <div class="searchContentBackground">

          </div>
          <div class="searchContentWrapper">
            <div class="searchContent">
              <h1 class=""style="color:white; size:20px"> MyFinder</h1>
              <h2 class="tagline">Find the best places to eat, drink, shop, or visit in any city in the world. Access over 75 million short tips from local experts.</h2>
              <div class="inputs">

                <form action="{{ asset('search') }}" method="get" id="search">
                  <div class="inputSet searchInputSet withDropdownArrow" data-placeholder="I'm looking for...">
                    <input type="text" name="tukhoa" placeholder="" maxlength="200" id="txtTuKhoa" />
                    <div class="dropdownArrow">
                      <div class="icon">
                        
                      </div>
                    </div>
                  </div>
                  <button class="submitButton" type="submit">
                    <img class="goIcon" src="assets/outside/img/chrome/icon-go_foursquare8-8345435729fdc997093a9bc1654f5569.png" data-retina-url="https://ss0.4sqi.net/img/chrome/icon-go_foursquare8@2x-8104e4d03ad47b81f079c1f043220e75.png" alt="Search" height="22px" width="22px" />
                    <span class="buttonCopy">Search</span>
                  </button>
                </form>
              </div>
              <ul class="chiclets">
                <li class="food simpleChiclet">
                  <a class="chicletLink" href="explore937c.html?near=Ho%20Chi%20Minh%20City&amp;cat=food">
                    <span class="chicletText">Food</span>
                  </a>
                </li>
                <li class="coffee simpleChiclet">
                  <a class="chicletLink" href="explore113e.html?near=Ho%20Chi%20Minh%20City&amp;cat=coffee">
                    <span class="chicletText">Coffee</span>
                  </a>
                </li>
                <li class="drinks simpleChiclet">
                  <a class="chicletLink" href="explore7a7f.html?near=Ho%20Chi%20Minh%20City&amp;cat=drinks">
                    <span class="chicletText">Nightlife</span>
                  </a>
                </li>
                <li class="arts simpleChiclet">
                  <a class="chicletLink" href="exploreb7fd.html?near=Ho%20Chi%20Minh%20City&amp;cat=arts">
                    <span class="chicletText">Fun</span>
                  </a>
                </li>
                <li class="shops simpleChiclet">
                  <a class="chicletLink" href="explore59eb.html?near=Ho%20Chi%20Minh%20City&amp;cat=shops">
                    <span class="chicletText">Shopping</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
     <!--  <div class="signupPromptWrapper">
        <div class="homepageSection signupPromptSection whiteSection">
          <div class="contentWrapper">
            <div id="signupPromptContainer" data-style="homepage">
              
            </div>
          </div>
        </div>
      </div> -->
      <div class="footerWrapper lightFooter">
        <div id="sidebarFooter" class="notrans">
          <img src="assets/outside/img/footer-top-fa1353033c43b8d9c1ea995d2b66371e.png"
          alt="" width="279" height="12" data-retina-url="https://ss0.4sqi.net/img/footer-top@2x-ef6ccfa1b4ce50e9257b922d1c8935ac.png" />
          <ul class="notrans">
           <li>
             <a href="about.html">About</a>
           </li>
           <li>
             <a href="http://blog.foursquare.com/">Blog</a>
           </li>
           <li>
             <a href="http://business.foursquare.com/">Businesses</a>
           </li>
           <li>
             <a href="cities.html">Cities</a>
           </li>
           <li>
             <a href="http://developer.foursquare.com/">Developers</a>
           </li>
           <li>
             <a href="http://support.foursquare.com/">Help</a>
           </li>
           <li>
             <a href="jobs/index.html">Jobs</a>
           </li>
           <li>
             <a href="legal/cookiepolicy.html">Cookies (Updated)</a>
           </li>
           <li>
             <a href="legal/privacy.html">Privacy (Updated)</a>
           </li>
           <li>
             <a href="legal/terms.html">Terms</a>
           </li>
           <li>
             <span id="currentLanguage" class="link">English</span>
             <ul class="languages">
               <li class="language">
                 <a href="index.html" class="current">English</a></li> <li class="language"><a href="https://fr.foursquare.com/" >Français</a></li> 
                 <li class="language">
                   <a href="https://de.foursquare.com/" >Deutsch</a>
                 </li> 
                 <li class="language">
                   <a href="https://id.foursquare.com/" >Bahasa Indonesia</a>
                 </li> 
                 <li class="language">
                   <a href="https://it.foursquare.com/" >Italiano</a>
                 </li> 
                 <li class="language">
                   <a href="https://ja.foursquare.com/" >日本語</a>
                 </li> 
                 <li class="language">
                   <a href="https://ko.foursquare.com/" >한국어</a>
                 </li> 
                 <li class="language"><a href="https://pt.foursquare.com/" >Português</a></li> 
                 <li class="language"><a href="https://ru.foursquare.com/" >Русский</a></li> 
                 <li class="language"><a href="https://es.foursquare.com/" >Español</a></li> 
                 <li class="language"><a href="https://th.foursquare.com/" >ภาษาไทย</a></li> 
                 <li class="language"><a href="https://tr.foursquare.com/" >Türkçe</a></li> 
               </ul>
             </li>
           </ul>

           <p>vnFinder &copy; 2016 &nbsp;Lovingly made in Nhóm 1</p>
         </div>
       </div>
       <script type="text/javascript">fourSq.newhomepage.pages.LoggedOutHomepage.init({bounds: {"ne":{"lat":10.860618,"lng":106.744179},"sw":{"lat":10.701005,"lng":106.599831}},center: {lat: 10.82302, lng: 106.62965}, tipsAndVenues: [], largeSearchBar: true, showRatePrompt: true, rateVenue: null, rateVenueAction: "null"});</script>
     </div>

     <script>

     // setTimeout(function(){
     //    //alert("fdsaf");
     //    var e1 = document.getElementById("headerBarSearch");
     //    e1.style.height = "0px";
     //    alert("fdasf");
     // },2000);

      function login(){


      }

      function signup(){

      }

      function search(){
        $('#')
      }

    

     </script>

     <noscript>
       <div id="noscript">
         <h3>You must enable JavaScript to use foursquare.com</h3>
         <p>We use the latest and greatest technology available to provide the best possible web experience.<br />Please enable JavaScript in your browser settings to continue.</p>
         </div></noscript></body>
         <!-- Mirrored from foursquare.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2016 15:19:02 GMT -->
         </html>