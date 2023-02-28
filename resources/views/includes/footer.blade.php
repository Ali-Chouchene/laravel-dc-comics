<footer>
    <!------------------------------>
    <div id="footer-nav" class="bg-blue">
        <div class="container">
            <div class="row-b">
                @foreach ($cards as $card)
                <div class="col row">
                    <img src="../img/{{$card['img']}}" alt="">
                    <h5>{{ $card['text'] }}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!---------------------------------------------------------->
    <div id="mid-footer">
        <div class="f-main container">
            <div class="more-info">
                <div>
                    <h3>DC COMICS</h3>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a> </li>
                        <li><a href="#">Movies</a> </li>
                        <li><a href="#">TV</a> </li>
                        <li><a href="#">Games</a> </li>
                        <li><a href="#">Videos</a> </li>
                        <li><a href="#">News</a> </li>
                    </ul>
                    <h3>SHOP</h3>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a> </li>

                    </ul>
                </div>
                <div>
                    <h3>DC</h3>
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy (New)</a> </li>
                        <li><a href="#">Ad Choice</a> </li>
                        <li><a href="#">Advertising</a> </li>
                        <li><a href="#">Jobs</a> </li>
                        <li><a href="#">Subscriptions</a> </li>
                        <li><a href="#">Talent Workshops</a> </li>
                        <li><a href="#">CSPC Certificates</a> </li>
                        <li><a href="#">Ratings</a> </li>
                        <li><a href="#">Shop Help</a> </li>
                        <li><a href="#">Contact Us</a> </li>
                    </ul>
                </div>
                <div>
                    <h3>SITES</h3>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a> </li>
                        <li><a href="#">DC Kids</a> </li>
                        <li><a href="#">DC Universe</a> </li>
                        <li><a href="#">DC Power Visa</a> </li>
                    </ul>
                </div>
            </div>
            <div class="f-logo">
                <img src="../img/dc-logo-bg.png" alt="dc-logo">
            </div>
        </div>
    </div>
    <!---------------------------------------->
    <div id="footer-bt">
        <div class="f-b-bg">
            <div class="container">
                <div class="f-b">
                    <div>
                        <button>
                            <h3>SIGN-UP NOW!</h3>
                        </button>
                    </div>
                    <nav>

                        <ul>
                            <h3>FOLLOW US</h3>
                            @foreach($socials as $social)
                            <li><a href="#"><img src="../img/{{$social['img']}}" alt="{{$social['text']}}"></a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>