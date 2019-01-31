<?php include_once("head.php")?>
<?php include_once("cabeçalho.php")?>
    <header class="main-header">
        <a href="index.php" class="main-header-lik">
            <img src="img/evandro.jpg" alt="Evandro Ignácio">
        </a>
        <h1>
            Portifólio<br>
            Desenvolvedor Web.<br>
            Back - End.<br>
            Por<strong> Evandro Ignácio</strong>
        </h1>
    </header>
    <main class="main-contet">
        <section class="main-content-section">
            <h2>Sobre</h2>
            <p>Se você precisa de ajuda em alguma das áreas mencionadas abaixo, conte-me sua necessidade. Terei prazer em ajudá-lo(a) a planejar e implementar uma estratégia digital eficaz para o seu negócio.</p>
            <p>Saiba que ter um site hoje não é mais um diferencial de uma marca, mas, sim, uma obrigação. Digamos que o site é um cartão de visitas, que fortalece ou começa a estabelecer a presença no mundo digital de uma empresa.</p>
            <a href="#" title="veja mais" class="button-default"> Ver mais</a>
        </section>
        <section class="main-content-section">
            <h3>Trabalhos</h3>
            <article class="recent-works-card">
                <a href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos"></a>
                <p class="recent-works-card-title">Titulo do trabalho</p>
                <p class="recent-works-card-content"> descrição do trabalho</p>
            </article>
            
            <article class="recent-works-card">
                <a href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos"></a>
                <p class="recent-works-card-title">Titulo do trabalho 2</p>
                <p class="recent-works-card-content"> descrição do trabalho</p>
            </article>
            
            <article class="recent-works-card">
                <a href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos"></a>
                <p class="recent-works-card-title">Titulo do trabalho 3</p>
                <p class="recent-works-card-content"> descrição do trabalho</p>
            </article>
            
            <article class="recent-works-card">
                <a href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos"></a>
                <p class="recent-works-card-title">Titulo do trabalho 4</p>
                <p class="recent-works-card-content"> descrição do trabalho</p>
            </article>
            
            <a href="#" title="veja mais" class="button-default">Veja o portifolio completo</a>
            
        </section>
        
        <!-- todas a outras sections ficaram aqui -->
            
        <section class="main-content-section">
            <h3>Entre em contato</h3>
            <form action ="#" method="POST">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                
                <label for="nome">Nome</label>
                <textarea name="mensagem" id="mensagem"></textarea>
                    
                <input type="submit" value="Enviar">
            </form>
            <address>
                <p>
                    <span>Endereço</span>
                    Encruzilhada - Santos, SP
                </p>
                <p>
                    <span>Telefone</span>
                    (13)997125069
                </p>
                <p>
                    <span>E-mail</span>
                    eignacio403@gmail.com
                </p>
            </address>
        </section>
    </main>
    <footer class="main-footer">
    </footer>

    <?php include_once("rodape.php")?>