<article class="contact-form">
    <form action="<?=SITE_TEMPLATE_PATH?>/php/contact-form.php" id="contact-form" role="form">
        <div class="alert alert-success hidden" id="contact-alert-success">
            <strong>Success!</strong> Thank you for your message. Reply will be in a while!
        </div>
        <div class="alert alert-danger hidden" id="contact-alert-error">
            <strong>Error!</strong> Something went wrong sending your message.
        </div>
        <div class="form-group">
            <label class="sr-only" for="name"></label>
            <input type="text" class="form-control" value="" placeholder="Name" data-msg-required="Please enter your name." name="name" id="name">
        </div>
        <div class="form-group">
            <label class="sr-only" for="email"></label>
            <input type="email" value="" placeholder="E-mail" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label class="sr-only" for="message"></label>
            <textarea placeholder="Enter your message..." data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="message"></textarea>
        </div>
        <input type="submit" value="Send Message" class="btn btn-submit btn-block" data-loading-text="Loading...">
    </form>
</article>