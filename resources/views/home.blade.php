<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
    <title>Home</title>
</head>
<body>
    @include('components.navbar')

    <div class="page-wrapper">
        @include('components.header')

        <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="product-grid">
                <div class="product-card">
                    <input type="image" src="/images/products/Maverick-2S.png" alt="Maverick 2S" class="product-image" />
                    <h3>Maverick 2S</h3>
                    <p>A rugged exploration drone built for extreme environments.</p>
                    <a href="store">
                        <button class="buy-now">Buy Now</button>
                    </a>
                    
                </div>
                <div class="product-card">
                    <input type="image" src="/images/products/AeroNova-X7.png" alt="AeroNova X7" class="product-image" />
                    <h3>AeroNova X7</h3>
                    <p>A lightweight, beginner-friendly drone designed for effortless flying.</p>
                    <a href="store">
                        <button class="buy-now">Buy Now</button>
                    </a>
                </div>
                <div class="product-card">
                    <input type="image" src="/images/products/HelixStorm-Nano.png" alt="HelixStorm Nano" class="product-image" />
                    <h3>HelixStorm Nano</h3>
                    <p>A compact mini drone designed for indoor exploration and fun.</p>
                    <a href="store">
                        <button class="buy-now">Buy Now</button>
                    </a>
                </div>
            </div>
        </section>

        <div class="mid">
            <h2>Fields of Expertise</h2>
        </div>

        <section class="expertise">
            <div class="expertise-grid">
                <div class="expertise-card">
                    <input type="image" src="/images/icons/home/slate.svg" alt="Aerial Imaging" />
                    <h3>Aerial Imaging & Cinematic Technology</h3>
                </div>
                <div class="expertise-card">
                    <input type="image" src="/images/icons/home/industry.svg" alt="Industrial & Environmental" />
                    <h3>Industrial & Environmental Intelligence</h3>
                </div>
                <div class="expertise-card">
                    <input type="image" src="/images/icons/home/beginner.svg" alt="Smart Consumer" />
                    <h3>Smart Consumer & Beginner-Friendly</h3>
                </div>
            </div>
        </section>

        <section class="awards">
            <h2>Innovation Awards</h2>
            <div class="awards-grid">
                <div class="award-card">
                    <input type="image" src="/images/icons/home/trophy.svg" alt="Award" />
                    <h3>Future Flight Sustainability & Impact Award 2022</h3>
                </div>
                <div class="award-card">
                    <input type="image" src="/images/icons/home/trophy.svg" alt="Award" />
                    <h3>Tech Forward Design Excellence 2023</h3>
                </div>
                <div class="award-card">
                    <input type="image" src="/images/icons/home/trophy.svg" alt="Award" />
                    <h3>Global Aerial Innovation Award 2025</h3>
                </div>
            </div>
        </section>
    </div>

    @include('components.footer')
    <script src="{{ asset('js/home.js') }}"></script>

</body>
</html>