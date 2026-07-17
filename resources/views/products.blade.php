<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products-page.css') }}">
    <title>Products</title>
</head>
<body>
    @include('components.navbar')

    <div class="page-wrapper">
        @include('components.header')

        <section class="products-page">
            <h1 class="products-title">Our Products</h1>

            <div class="category-wrapper">
                <label for="category">Category</label>
                <div class="custom-select">
                    <select id="category">
                        <option value="all">All Categories</option>
                        <option value="Beginner Friendly">Beginner Friendly</option>
                        <option value="Travel & Lightweight">Travel & Lightweight</option>
                        <option value="Cinematography">Cinematography</option>
                        <option value="High-Performance">High-Performance</option>
                    </select>

                </div>
            </div>


            <div class="product-list" id="productGrid">

                <!-- Product 1 -->
                <div class="product-card">
                    <img src="/images/products/Maverick-2S.png" class="product-img" id="img1">
                    <div class="product-info">
                        <h2 id="name1">Maverick 2S</h2>
                        <p>
                            A rugged exploration drone built for extreme environments. Its reinforced carbon frame,
                            splash resistance, and dual-camera setup make the Maverick 2S perfect for outdoor 
                            expeditions and environmental research.
                        </p>
                        <a class="store-btn" href="store">View Store Page</a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <img src="/images/products/AeroNova-X7.png" class="product-img">
                    <div class="product-info">
                        <h2>AeroNova X7</h2>
                        <p>
                            A lightweight, beginner-friendly drone designed for effortless flying. Equipped with 
                            smart stabilization, intelligent auto-pathing, and a crisp 1080p camera, the AeroNova X7 
                            is perfect for users who want smooth flights and easy aerial captures.
                        </p>
                        <a class="store-btn" href="store">View Store Page</a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <img src="/images/products/HelixStorm-Nano.png" class="product-img">
                    <div class="product-info">
                        <h2>HelixStorm Nano</h2>
                        <p>
                            A compact mini drone designed for indoor exploration and fun. With anti-collision 
                            sensors and auto takeoff/landing, the HelixStorm Nano is extremely beginner-friendly 
                            and safe to fly in small spaces.
                        </p>
                        <a class="store-btn" href="store">View Store Page</a>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <img src="/images/drone.png" class="product-img">
                    <div class="product-info">
                        <h2>LuminAir 4K</h2>
                        <p>
                            A cinematic drone crafted for photographers and storytellers. Its UltraSharp 4K camera, 
                            built-in color profiles, and precision hovering allow creators to capture stunning, 
                            stable, and highly detailed aerial visuals.
                        </p>
                        <a class="store-btn" href="store">View Store Page</a>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <img src="/images/products/VortexEdge-R1.png" class="product-img">
                    <div class="product-info">
                        <h2>VortexEdge R1</h2>
                        <p>
                            A powerful performance drone engineered to withstand strong winds. The VortexEdge R1 
                            uses a robust brushless motor system and intelligent wind-resistance algorithms to 
                            maintain smooth flight even in challenging outdoor conditions.
                        </p>
                        <a class="store-btn" href="/store">View Store Page</a>
                    </div>
                </div>

            </div>
        </section>
    </div>

    @include('components.footer')
    <script defer src="{{ asset('js/products.js') }}"></script>

</body>
</html>