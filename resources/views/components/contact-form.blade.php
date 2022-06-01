<!-- Contact -->
<section class="section-wrap bg-light">
    <div class="container">

        <div class="title-row">
            <p class="subtitle">Contact Us</p>
            <h2 class="section-title">Get in Touch</h2>
            <p>Send us a message if you would like to enquire about anything</p>
        </div>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <!-- Contact Form -->
        <form id="contact-form" class="contact-form material" method="post" action="{{route('contact-us')}}">

            @csrf

            <div class="row">
                <!-- Name -->
                <div class="col-md-6 col-lg-4 material__form-group form-group">
                    <input type="text" name="name" id="name" class="form-input material__input" required="">
                    <label for="name" class="material__label">Name
                        <abbr title="required" class="required">*</abbr>
                    </label>
                    <span class="material__underline"></span>
                </div>

                <!-- Email -->
                <div class="col-md-6 col-lg-4 material__form-group form-group">
                    <input type="email" name="email" id="email" class="form-input material__input" required="">
                    <label for="email" class="material__label">Email
                        <abbr title="required" class="required">*</abbr>
                    </label>
                    <span class="material__underline"></span>
                </div>

                <!-- Subject -->
                <div class="col-md-12 col-lg-4 material__form-group form-group">
                    <input type="text" name="subject" id="subject" class="form-input material__input">
                    <label for="subject" class="material__label">Subject
                    </label>
                    <span class="material__underline"></span>
                </div>

                <div class="col-md-12 col-lg-12 material__form-group form-group">
                    <textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
                    <label for="message" class="material__label">Message
                        <abbr title="required" class="required">*</abbr>
                    </label>
                    <span class="material__underline"></span>
                </div>
            </div>


            <input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
            <div id="msg" class="message"></div>
        </form>

    </div>
</section> <!-- end contact -->
