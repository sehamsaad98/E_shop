<div class="top_nav">
  <div class="container top_nav_container">
    <div class="top_nav_wrapper">
      <p class="tap_nav_p">
        this is the nav section
      </p>
      <a href="#" class="top_nav_link">Shop Now</a>
    </div>
  </div>
</div>
<nav class="nav">
  <div class="container nav_container">
    <a href="" class="nav_logo">EXCLUSIVE</a>
    <ul class="nav_list">
      <li class="nav_item"><a href="{{route('home')}}" class="nav_link">Home</a></li>
      <li class="nav_item"><a href="# " class="nav_link">About</a></li>
      <li class="nav_item"><a href="#" class="nav_link">Contact</a></li>
      <li class="nav_item"><a href="3" class="nav_link">Sign Up</a></li>
    </ul>
    <div class="nav_items">
      <form action="#" class="nav_form"><input type="text" class="nav_input" placeholder="search here .....">
        <img src="{{asset('assets/img/site/icons/Component 2.png')}}" alt="" class="nav_search">
      </form>
           <a href="{{route('favorite')}}"><img src="{{asset('assets/img/site/icons/heart.png')}}" alt="" class="nav_heart"></a>
       <a href="{{route('cart')}}"><img src="{{asset('assets/img/site/icons/Cart1.png')}}" alt="" class="nav_cart"></a>
    </div>
    <span class="nave_droplist">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>

    </span>
  </div>
</nav>
<nav class="mobile_nav mobile_nav_hide">
  <ul class="mobile_nav_list">
    <li class="mobile_nav_item"><a href="{{route('home')}}" class="bav_mobile_link">Home</a></li>
    <li class="mobile_nav_item"><a href="" class="bav_mobile_link">About Us</a></li>
    <li class="mobile_nav_item"><a href="" class="bav_mobile_link">Contact Us</a></li>
    <li class="mobile_nav_item"><a href="" class="bav_mobile_link">Sign up</a> </li>
    <li class="mobile_nav_item"><a href="{{route('cart')}}" class="bav_mobile_link">cart</a></li>
  </ul>
</nav>