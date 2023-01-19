<form action="<?=SITE_TEMPLATE_PATH?>/php/newsletter-form.php" id="contact-form" class="subscription-form" role="form">
    <div class="alert alert-success hidden" id="contact-alert-success">
        <strong>Success!</strong> Thank you for your message. Reply will be in a while!
    </div>
    <div class="alert alert-danger hidden" id="contact-alert-error">
        <strong>Error!</strong> Something went wrong sending your message.
    </div>
    <div class="form-group">
        <label class="sr-only" for="email"></label>
        <input type="email" value="" placeholder="E-mail" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="email" id="email">
    </div>
    <button type="submit" class="icon icon-mail btn-inside" data-loading-text="..."></button>
</form>