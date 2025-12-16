<!------------------- NAVIGATOR ------------------->
<header class="navhome" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Ninth navbar example">
        <div class="container">
          
          <div class="toggle-menu" data-bs-toggle="button">
                <button class="navbar-toggler ico-menu" id="navbarToggler">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
    
          <div class="navbar-collapse flex-grow-1" id="navbarsExample07XL">
            <ul class="collapse navbar-nav mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{asset('')}}">Home</a>
                </li>
                @foreach($menu as $key => $val)
                    @if($val->parent == 0)
                        @if($key==2)
                        <li class="logo">
                            <a class="navbar-brand" href="{{asset('')}}"><img src="data/images/{{$setting->img}}" alt="" class="mw-100"></a>
                        </li>
                        @else
                            @if(count($menu->where('parent', $val->id)) == 0)
                            <li class="nav-item">
                                <a class="nav-link" href="{{$val->slug}}">{{$val->name}}</a>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{$val->slug}}" data-bs-toggle="dropdown" onclick="myFunctLink(this)">{{$val->name}}</a>
                                <a class="expand dropdown-toggle d-lg-none" href="#" data-bs-toggle="dropdown"></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        @foreach($menu->where('parent', $val->id) as $sub)
                                        <li><a href="{{$sub->slug}}" class="submenu-link"><i class="icon-next me-2"></i>{{$sub->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            @endif
                        @endif
                    @endif
                @endforeach
                <li class="nav-item">
                    <div class="icon-header">
                        <a target="_blank" href="{{$setting->facebook}}"><img src="assets/images/facebook-logo-icon.png"></a>
                        <a target="_blank" href="{{$setting->youtube}}"><img src="assets/images/youtube-logo-icon.png"></a>
                        <div class="dropdown language">
                            <a title="English" target="{{ asset('') }}" href=""><img src="assets/images/lang/en.avif"></a>
                            <a class="expand dropdown-toggle d-lg-none" href="#" data-bs-toggle="dropdown"></a>
                            <div class="dropdown-menu">
                                <div class="mb-2"><a href="{{ asset('') }}"><img src="assets/images/lang/en.avif"> English</a></div>
                                <div class="mb-2"><a href="https://kr.vietnampropertymarket.com/"><img src="assets/images/lang/kr.avif"> 한국어</a></div>
                                <div><a href="https://cn.vietnampropertymarket.com/"><img src="assets/images/lang/cn.avif"> 中文</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
<!------------------- END NAVIGATOR ------------------->