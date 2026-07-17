<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/components/header.css">
    <title>Header</title>
</head>
<body>
    <div class="banner-container">
        <div class="banner-wrapper">
            <div class="banner-slide fade">
                <img src="/images/banner/banner1.png" alt="Banner 1">
                <div class="banner-overlay1">
                    <h2>Company Vision:</h2>
                    <span>Become the leading innovator in drone technology, empowering people and industries to explore the world from new perspectives.</span>
                </div>
            </div>

            <div class="banner-slide fade">
                <img src="/images/banner/banner2.png" alt="Banner 2">
                <div class="banner-overlay2">
                    <h2>Capture the world from above!</h2>
                </div>
            </div>

            <div class="banner-slide fade">
                <img src="/images/banner/banner3.png" alt="Banner 3">
                <div class="banner-overlay3">
                    <h2>JCI Maverick 2S</h2>
                    <a href="/store" class="banner-btn">Shop Now</a>
                </div>
            </div>

            <a class="banner-prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="banner-next" onclick="plusSlides(1)">&#10095;</a>

            <div class="banner-dots">
                <span class="banner-dot" onclick="currentSlide(1)"></span>
                <span class="banner-dot" onclick="currentSlide(2)"></span>
                <span class="banner-dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/components/header.js') }}"></script>

</body>
</html>