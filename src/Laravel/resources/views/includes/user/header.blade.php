<header class="header">
    <div class="header_overlay"></div>
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo">
            <a href="/">
                <div class="d-flex flex-row align-items-center justify-content-start">
                    <div><img src="front/images/logo_1.png" alt=""></div>
                    <div>Joy & B</div>
                </div>
            </a>
        </div>
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                {{-- <li class="active"><a href="#">Women</a></li> --}}
                @foreach(App\Category::all() as $item)
                <li><a href="/category/{{$item->id}}">{{ $item->label }}</a></li>
                @endforeach
            </ul>
        </nav>
        <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
            <!-- Search -->
            <div class="header_search">
                <form action="#" id="header_search_form">
                    <input type="text" class="search_input" placeholder="Search Item" required="required">
                    <button class="header_search_button"><img src="front/images/search.png" alt=""></button>
                </form>
            </div>
            <!-- User -->
            <div class="user"><a href="#"><div><img src="front/images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
            <!-- Cart -->
            <div class="cart"><a href="/cart"><div><img class="svg" src="front/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
            <!-- Phone -->
            <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                <div><div><img src="front/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
                <div>+234 7050000000</div>
            </div>
        </div>
    </div>
</header>