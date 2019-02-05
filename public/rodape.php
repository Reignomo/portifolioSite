        <footer>    
            <div class="row">
                <ul class="ul-icons">
                    <li><a href="#" class="icon-link"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" class="icon-link"><i class="fab fa-github"></i></a></li>
                    <li><a href="#" class="icon-link"><i class="fab fa-linkedin"></i></a></li>
                </ul>    
            </div>
            <div class="row">
                <b><p>Todos os direitos reservados ©</p> - <p class="footer-author">Evandro Ignácio</p></b>
            </div>
        </footer>
    </body>
</html>
<script>
    // handle links with @href started with '#' only
    $(document).on('click', 'a[href^="#"]', function(e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $id.offset().top;

        // animated top scrolling
        $('body, html').animate({scrollTop: pos});
    });
</script>