<div id="contact" class="contact_wrapper">
    <div class="text-center">
        <h2 class="section_title">Drop a line</h2>
    </div>
    <div class="row justify-content-center">
        <!-- start contact info ( email - phone) -->
        <div class="col-lg-3 col-md-12">
            <div class="contact_item">
                <h5>Phone</h5>
                <p>+255 655 464 655</p>
                <p>+255 777 464 655</p>
            </div>
            <div class="contact_item">
                <h5>Email</h5>
                <p>alisaleh42797@gmail.com</p>
            </div>
        </div>
        <!-- end contact info ( email - phone) -->
        <!-- start contact form -->
        <div class="col-lg-7 col-md-12">
            <form id="contact-form" action="email-handler.php">
                <div class="row">
                    <div class="col">
                        <p class="form-message"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <!-- input field for NAME -->
                        <input class="input_field required" type="text" name="name" placeholder="Name">
                        <!-- input field for EMAIL -->
                        <input class="input_field required" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-md-7">
                        <!-- input field for MESSAGE -->
                        <textarea class="input_field required" name="message" placeholder="Tell Me About Your Query."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- button for MESSAGE-SEND -->
                        <button class="button slide-vertical" type="submit" data-splitting>send message</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- end contact form -->
    </div>
</div>