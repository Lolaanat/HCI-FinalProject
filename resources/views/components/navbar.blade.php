<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700;800&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Navbar</title>
</head>

<body>
    <nav class="navbar">
        <div class="nav-inner">

            <span class="logo">JCI</span>

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/forum">Forum</a></li>
                <li><a href="/store">Store</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>

            <div class="nav-actions">

                <div class="box search-box">
                    <input type="text" placeholder="Search..." />
                    <img src="{{ asset('images/icons/search.svg') }}" class="icon-img">
                </div>

                <div class="box icon-box">
                    <a href="/store"><img src="{{ asset('images/icons/cart.svg') }}" class="icon-img" ></a>
                </div>

                <div class="box profile-box">
                    <img src="{{ asset('images/icons/profile.svg') }}" class="icon-img">
                    <span class="username">User Name</span>
                </div>

            </div>

            <div class="hamburger" onclick="toggleMenu()">
                <span></span><span></span><span></span>
            </div>

        </div>

        <div id="mobileMenu" class="mobile-menu">
            <a href="/">Home</a>
            <a href="/products">Products</a>
            <a href="/forum">Forum</a>
            <a href="/store">Store</a>
            <a href="/contact">Contact Us</a>
        </div>
    </nav>

    <script src="{{ asset('js/components/navbar.js') }}"></script>

</body>
</html>