<?php include_once("head.php")?>
<?php include_once("cabeçalho.php")?>
    <header class="main-header">
        <a href="index.php" class="main-header-lik">
            <img src="img/evandro.jpg" alt="Evandro Ignácio" width="180px">
        </a>
        <h1 class="main-header-title">
            Portifólio<br>
            Desenvolvedor Web.<br>
            Back - End.<br>
            Por<strong> Evandro Ignácio</strong>
        </h1>
    </header>
    <main class="main-content">
        <section class="main-content-section">
            <h2>Sobre</h2>
            <p>Se você precisa de ajuda em alguma das áreas mencionadas abaixo, conte-me sua necessidade. Terei prazer em ajudá-lo(a) a planejar e implementar uma estratégia digital eficaz para o seu negócio.</p>
            <p>Saiba que ter um site hoje não é mais um diferencial de uma marca, mas, sim, uma obrigação. Digamos que o site é um cartão de visitas, que fortalece ou começa a estabelecer a presença no mundo digital de uma empresa.</p>
            <a href="#" title="veja mais" class="button-default"> Ver mais</a>
        </section>
        <section class="main-content-section">
            <h3>Trabalhos</h3>
            <article class="recent-works-card">
                <a href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos" width="440px"></a>
                <p class="recent-works-card-title">Titulo do trabalho</p>
                <p class="recent-works-card-content"> descrição do trabalho</p>
            </article>
            
            <article class="recent-works-card">
                <a href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos" width="440px"></a>
                <p class="recent-works-card-title">Titulo do trabalho 2</p>
                <p class="recent-works-card-content"> descrição do trabalho</p>
            </article>
            
            <article class="recent-works-card">
                <a href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos" width="440px"></a>
                <p class="recent-works-card-title">Titulo do trabalho 3</p>
                <p class="recent-works-card-content"> descrição do trabalho</p>
            </article>
            
            <article class="recent-works-card">
                <a href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos" width="440px"></a>
                <p class="recent-works-card-title">Titulo do trabalho 4</p>
                <p class="recent-works-card-content"> descrição do trabalho</p>
            </article>
            
            <a href="#" title="veja mais" class="button-default">Veja o portifolio completo</a>
            
        </section>
        
        <section class="main-content-section">
            <h3>Skils</h3>
            <table class="table">
                <thead>
                    <th>Tecnologia</th>
                    <th>Descrição</th>
                    <th>Nível de habilidades</th>
                </thead>
                <tfoot>
                  
                </tfoot>
                <tbody>
                    <tr>
                        <td>PHP</td>
                        <td>a que sei mais</td>
                        <td>4 estrelas</td>
                    </tr>
                    <tr>
                        <td>C#</td>
                        <td>a que sei mais</td>
                        <td>4 estrelas</td>
                    </tr>
                    <tr>
                        <td>Java</td>
                        <td>a que sei mais</td>
                        <td>4 estrelas</td>
                    </tr>
                    <tr>
                        <td>SQL</td>
                        <td>a que sei mais</td>
                        <td>4 estrelas</td>
                    </tr>
                    <tr>
                        <td>HTML</td>
                        <td>a que sei mais</td>
                        <td>4 estrelas</td>
                    </tr>
                    <tr>
                        <td>CSS</td>
                        <td>a que sei mais</td>
                        <td>4 estrelas</td>
                    </tr>
                    <tr>
                        <td>JavaScript</td>
                        <td>a que sei mais</td>
                        <td>4 estrelas</td>
                    </tr>
                    <tr>
                        <td>Git</td>
                        <td>a que sei mais</td>
                        <td>4 estrelas</td>
                    </tr>
                </tbody>
            </table>
        </section>
        
        <section class="main-content-section">
            <h3>Time</h3>
            <div class="team-card">
                <img src="img/evandro.jpg" alt="Evandro" width="440px">
                <p class="team-card-title">Evandro Ignácio</p>
                <p class="team-card-text">Texto falando sobre..</p>
            </div>
            <div class="team-card">
                <img src="img/works.jpg" alt="Zeus" width="440px">
                <p class="team-card-title">Evandro Ignácio</p>
                <p class="team-card-text">Texto falando sobre..</p>
            </div>
        </section>
        <!-- todas a outras sections ficaram aqui -->
            
        <section class="main-content-section">
            <h3>Entre em contato</h3>
            <form action ="#" method="POST">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                
                <label for="assunto">Assunto</label>
                <select>
                    <option value="0" disabled selected>Assunto</option>
                    <option value="1">Orçamento</option>
                    <option value="2">Sugestões</option>
                    <option value="3">Vagas</option>
                    <option value="4">Outros</option>
                </select>
                
                <label for="nome">Nome</label>
                <textarea name="mensagem" id="mensagem"></textarea>
                    
                <input type="submit" value="Enviar">
                <button class="button-default">Limpar</button>
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