<!DOCTYPE html>`
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forum-page.css') }}">
    <title>Document</title>
</head>
<body>
    @include('components.navbar')

    <div class="page-wrapper">
        @include('components.header')
        
        <section class="forum-section">
            <h2 class="forum-title">Forum</h2>

            <div class="hot-categories">
                <h3>Hot Categories</h3>
                <div class="category-list">
                    <button class="category-btn" data-filter="all">All</button>
                    <button class="category-btn" data-filter="Beginner Friendly">Beginner Friendly</button>
                    <button class="category-btn" data-filter="Cinematography">Cinematography</button>
                    <button class="category-btn" data-filter="Photography">Photography</button>
                    <button class="category-btn" data-filter="Innovation">Innovation</button>
                    <button class="category-btn" data-filter="Flight Guides">Flight Guides</button>
                </div>
            </div>

            <div class="forum-grid">
                <div class="forum-card" data-category="Beginner Friendly">
                    <img src="/images/pp-forum/img1.jpg" class="profile-img" alt="">
                    <div class="post-text">
                        <h4>First Drone, First Crash</h4>
                        <p class="user-name">@skynewbie</p>
                        <p class="desc">New comers here! Yes, I crashed on my 
                            first flight, but here’s what helped me recover. Taking short, controlled flights 
                            in an open field really boosted my confidence. Practicing gentle takeoffs, slow directional 
                            movements, and emergency stops made a huge difference. If you stay calm and take it step-by-step, 
                            your control improves faster than you think..</p>
                    </div>
                    <div class="post-stats">
                        <span><img src="/images/icons/forum/view.svg"> 210</span>
                        <span><img src="/images/icons/forum/like.svg"> 210</span>
                        <span><img src="/images/icons/forum/share.svg"> 210</span>
                    </div>
                </div>

                <div class="forum-card" data-category="Beginner Friendly, Flight Guides">
                    <img src="/images/pp-forum/img2.png" class="profile-img" alt="">
                    <div class="post-text">
                        <h4>Beginner Settings Tips</h4>
                        <p class="user-name">@prodronerfley</p>
                        <p class="desc">I want to share a few beginner-friendly settings that really helped me stay in control 
                            during my early flights. Using full GPS mode is a must to keeps the drone locked in position. I 
                            also recommend setting the drone to the lowest speed mode so movements feel slower and easier to manage.</p>
                    </div>
                    <div class="post-stats">
                        <span><img src="/images/icons/forum/view.svg"> 125</span>
                        <span><img src="/images/icons/forum/like.svg"> 100</span>
                        <span><img src="/images/icons/forum/share.svg"> 150</span>
                    </div>
                </div>

                <div class="forum-card" data-category="Cinematography, Flight Guides">
                    <img src="/images/pp-forum/img3.png" class="profile-img" alt="">
                    <div class="post-text">
                        <h4>Smooth “Movie Fly-In” Shot</h4>
                        <p class="user-name">@dronePilot37</p>
                        <p class="desc">To get a cinematic fly-in shot, the key is controlling speed and camera angle. Start by flying 
                            at a slow, steady pace and slightly tilting the gimbal downward as you move forward. Using tripod or cine 
                            mode helps smoothen motion even more. The trick is to maintain consistent speed so the approach looks intentional, 
                            soft, and professional.</p>
                    </div>
                    <div class="post-stats">
                        <span><img src="/images/icons/forum/view.svg"> 112</span>
                        <span><img src="/images/icons/forum/like.svg"> 100</span>
                        <span><img src="/images/icons/forum/share.svg"> 99</span>
                    </div>
                </div>

                <div class="forum-card" data-category="Photography">
                    <img src="/images/pp-forum/img4.jpg" class="profile-img" alt="">
                    <div class="post-text">
                        <h4>Create Dramatic Shadows</h4>
                        <p class="user-name">@LightSeeker</p>
                        <p class="desc">The best way to achieve strong, dramatic shadows is to shoot during golden hour when the sun is low. 
                            Positioning the drone slightly off-angle from the sunlight helps elongate shadows without losing detail. Lower ISO 
                            and slightly underexposed shots preserve shape and texture. This timing adds a natural cinematic look to any landscape.</p>
                    </div>
                    <div class="post-stats">
                        <span><img src="/images/icons/forum/view.svg"> 99</span>
                        <span><img src="/images/icons/forum/like.svg"> 80</span>
                        <span><img src="/images/icons/forum/share.svg"> 87</span>
                    </div>
                </div>

                <div class="forum-card" data-category="Photography">
                    <img src="/images/pp-forum/img5.jpg" class="profile-img" alt="">
                    <div class="post-text">
                        <h4>Help! Overexposure</h4>
                        <p class="user-name">@bluedragon</p>
                        <p class="desc">I found that balancing the sky and ground exposure becomes much easier when using ND filters. Setting the exposure 
                            with the sky as priority prevents blown highlights. After that, slightly increasing shadows in post-processing keeps the landscape 
                            visible. Adjusting EV to negative values also helps maintain detail in bright skies while preserving a natural look.</p>
                    </div>
                    <div class="post-stats">
                        <span><img src="/images/icons/forum/view.svg"> 86</span>
                        <span><img src="/images/icons/forum/like.svg"> 70</span>
                        <span><img src="/images/icons/forum/share.svg"> 75</span>
                    </div>
                </div>

                <div class="forum-card" data-category="Innovation">
                    <img src="/images/pp-forum/img6.jpg" class="profile-img" alt="">
                    <div class="post-text">
                        <h4>Battery Mod for Longer Flight Time</h4>
                        <p class="user-name">@techwing</p>
                        <p class="desc">I’ve been testing lightweight battery modifications that improve efficiency. Using high-density cells with proper cooling 
                            spacing helps extend flight time without overheating. Reducing unnecessary casing materials can also cut weight. While these mods boost 
                            performance, they must be done carefully to avoid voltage instability. When applied correctly, they offer noticeably longer and smoother flights.</p>
                    </div>
                    <div class="post-stats">
                        <span><img src="/images/icons/forum/view.svg"> 75</span>
                        <span><img src="/images/icons/forum/like.svg"> 66</span>
                        <span><img src="/images/icons/forum/share.svg"> 59</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('components.footer')
    <script src="{{ asset('js/forum.js') }}"></script>
    
</body>
</html>