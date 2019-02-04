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
(function() {
  var node = document.getElementById('message'),
    message = "This is my message... ! Thx =)",
    current = message.split("").reverse(),
    interval = setInterval(function() {
      if (current.length)
        node.innerHTML += current.pop();
      else
        clearInterval(interval);
    }, 300);
}());
</script>