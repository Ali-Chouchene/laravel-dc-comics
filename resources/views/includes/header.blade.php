
<header>
        <div class="up-header">
            <div class="container row-e">
                <span class="me-5">
                    <h5>DC POWER&#8480;VISA&#174;</h5>
                </span>
                <span>
                    <h5>
                        ADDITIONAL DC SITES<i class="fa-solid fa-caret-down"></i>
                    </h5>
                </span>
            </div>
        </div>
        <div class="down-header">
            <div class="container row-b">
                <figure>
                    <a href="{{route('home')}}"><img src="../img/dc-logo.png" alt=""></a>
                </figure>
                <div class="navbar row-b">
                    @foreach ($links as $link)
                    <a href="{{route($link['way'])}}">{{$link['text']}}</a>
                    @endforeach
                </div>
                <form>
                    <input class="form-control me-2" type="search" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </div>
        </div>
    </header>
    