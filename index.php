<?php include_once("head.php")?>
    <header class="main-header">
       <?php include_once("cabeçalho.php")?>
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
            <div class="row">
                <div class="col-2">
                    <article class="recent-works-card">
                        <a class="img-link" href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos" width="440px"></a>
                        <p class="recent-works-card-title">Titulo do trabalho</p>
                        <p class="recent-works-card-content"> descrição do trabalho</p>
                     </article>
                    </div>

                <div class="col-2">
                    <article class="recent-works-card">
                        <a class="img-link" href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos" width="440px"></a>
                        <p class="recent-works-card-title">Titulo do trabalho 2</p>
                        <p class="recent-works-card-content"> descrição do trabalho</p>
                    </article>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2">
                    <article class="recent-works-card">
                        <a class="img-link" href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos" width="440px"></a>
                        <p class="recent-works-card-title">Titulo do trabalho 3</p>
                        <p class="recent-works-card-content"> descrição do trabalho</p>
                      </article>
                    </div>
            
                <div class="col-2">
                    <article class="recent-works-card">
                        <a class="img-link" href="img/works.jpg"><img src="img/works.jpg" alt="Trabalhos" width="440px"></a>
                        <p class="recent-works-card-title">Titulo do trabalho 4</p>
                        <p class="recent-works-card-content"> descrição do trabalho</p>
                    </article>
                </div>
            </div>
            
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
            <div class="row">
                <div class="col-2">
                    <div class="team-card">
                        <img class="img-perfil" src="img/zeus.jpg" alt="Evandro" width="440px">
                        <p class="team-card-title">Evandro Ignácio</p>
                        <p class="team-card-text">Texto falando sobre..</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="team-card">
                        <img class="img-perfil" src="img/zeus.jpg" alt="Zeus" width="440px">
                        <p class="team-card-title">Evandro Ignácio</p>
                        <p class="team-card-text">Texto falando sobre..</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- todas a outras sections ficaram aqui -->
            
        <section class="main-content-section">
            <h3>Entre em contato</h3>
            <p>Aqui você pode me enviar uma mesagem para orçamento ou até mesmo uma sugestão</p>
            <div clss="row">
                <div class="col-2-3">
                    <form action ="#" method="POST">
                        <div class="row">
                            <div class="col-2">
                                <label for="nome">Nome</label>
                                <input placeholder="" type="text" name="nome" id="nome">
                            </div>      
                            <div class="col-2">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email">
                            </div>
                        </div>
                        <div class="row">
                             <label for="assunto">Assunto</label>
                             <select>
                                <option value="0" disabled selected>Assunto</option>
                                <option value="1">Orçamento</option>
                                <option value="2">Sugestões</option>
                                <option value="3">Vagas</option>
                                <option value="4">Outros</option>
                             </select>
                        </div>
                        <div class="row">
                            <label for="mensagem">Digite sua mensagem</label>
                        </div>
                        <div class="row">
                            <textarea name="mensagem" id="mensagem"></textarea>
                        </div>
                        <input class="button-default" type="submit" value="Enviar">
                        <a href="#" title="limpar" class="button-empty">Limpar</a>
                      </form>
                </div>
                <div class="col-1-3">
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
                </div> 
            </div>
        </section>
    </main>
    <?php include_once("rodape.php")?>