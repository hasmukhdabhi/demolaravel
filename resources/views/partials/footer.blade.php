<!-- resources/views/partials/footer.blade.php -->
<footer id="footer" class="footer">
    <!-- Footer content -->
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-top">
        <!-- Footer links and content -->
    </div>
    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            Designed by <a href="{{url('/')}}">BootstrapMade</a>
        </div>
    </div>
</footer>