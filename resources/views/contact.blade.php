<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact-page.css') }}">
    <title>Contact Us</title>
</head>
<body>
    @include('components.navbar')

    <div class="page-wrapper">
        @include('components.header')
        
        <section class="contact-page">
            <h2 class="contact-title">Contact Us</h2>

            <div class="contact-container">
                <form class="contact-form" id="contact-form">
                    <div class="form-group">
                        <label for="name-input">Full Name <span class="required">*</span></label>
                        <input type="text" name="name" id="name-input" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                        <label for="phone-input">Phone Number <span class="required">*</span></label>
                        <input type="number" name="phoneNumber" id="phone-input" placeholder="081382850746">
                    </div>

                    <div class="form-group">
                        <label for="email-input">Email <span class="required">*</span></label>
                        <input type="text" name="email" id="email-input" placeholder="username@email.com">
                    </div>

                    <div class="form-group">
                        <label for="message-input">Message <span class="required">*</span></label>
                        <textarea id="message-input" placeholder="Message"></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="terms" id="terms-input">
                        <label for="terms-input">I agree to Terms and Conditions</label>
                    </div>

                    <button type="submit" class="submit-btn">Submit</button>
                </form>

                <div class="contact-info-box">
                    <h3>JCI Contact Info</h3>

                    <div class="info-row">
                        <img src="images/icons//contact/phone.svg" class="icon">
                        <span>08134579682354</span>
                    </div>

                    <div class="info-row">
                        <img src="images/icons//contact/mail.svg" class="icon">
                        <span>JCITechCompany@email.com</span>
                    </div>

                    <div class="info-row">
                        <img src="images/icons//contact/clock.svg" class="icon">
                        <span>Monday - Thursday<br>08:00 AM - 17:00 PM</span>
                    </div>

                    <div class="info-row">
                        <img src="images/icons/contact/pin-point.svg" class="icon">
                        <span>301 Park Ave, New York, NY 10022, United States</span>
                    </div>

                    <img src="images/drone.png" class="drone-img">
                </div>

            </div>
        </section>
    </div>

    @include('components.footer')
    <script src="{{ asset('js/contact.js') }}"></script>
    
</body>
</html>