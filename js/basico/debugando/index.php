<?php
/**
 * Aprenda a debugar seus scripts em Javascript, este é o primeiro passo na depurarção de código.
 * debugando código js, depurando código js, firebug, alert
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/basico/debugando/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo?></h1>
                <p>Aprenda a debugar o JS com FIREBUG.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#intro">O que é debugar ?</a>
                            </li>
                            <li>
                                <a href="#formas">Formas rudimentares</a>
                            </li>
                            <li>
                                <a href="#depuradores">Depuradores</a>
                            </li>
                            <li>
                                <a href="#problemas">Como saber...</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">O que é debugar ?</h1>
                        </div>

                        <blockquote>
                            <p>Precisamos debugar o programa para sabermos onde [e como] está ocorrendo o erro.
                                <small>Conversa imaginária entre programador e estagiário</small></p>
                        </blockquote>

                        <p>Essa frase faz parte do dia a dia do desenvolvedor e, não raro, ela tira o sono de muita gente.</p>

                        <p>Debugar é um esforço para encontrar determinado ponto (às vezes vários pontos) "defeituoso" no código para que seja
                            corrigido.</p>

                        <p>Debugar é o aportuguesamento da palavra debug. É sinônimo de depurar, acho que esse é o termo mais correto.
                            Mas gramática não é o tema desta matéria. Nosso objetivo aqui é enteder esse processo.</p>

                        <p>Ao sentar-se na frente do computador para codificar (seja lá o que for) o desenvolvedor estabelece, ou deveria estabelecer,
                            uma conversa com o computador e seu código fonte:</p>

                        <pre><code class="no-highlight">dev: E aí computer, me mostre o VALOR da variável "resultado".

cpu: Ok, mas parece que não está retornando nada, veja o valor que ela contém... "".

O dev para e pensa um pouco: Qual será o tipo do dado, pois o valor não está ajudando muito.

dev: Computer, me mostra agora TIPO de dado da variável "resultado".

cpu: string(0)

O dev novamente reflexivo: O valor é "", o tipo é string. Acho que vou "parar" em outro ponto...
</code></pre>

                        <p>Esse é o processo de depuração: ir parando em determinados pontos do código fonte e pedir para o computador mostrar o
                            que vai em sua memória.</p>

                        <p>Acredite, isso não é nada sexy.</p>

                        <p>Esse "ponto" ao qual estou me referindo nada mais é do que uma linha de código, por isso que 99% dos editores de código
                            enumeram as linhas do arquivo. Seu colega de trabalho do andar de cima te liga é diz: "veja o erro está na linha 37".
                            Você deve olhar a linha 37 com a tranquilidade de que estão tratando exatamente a mesma linha.</p>

                        <p>Em muitos casos, o problema não está exatamente na linha que estamos debugando. O problema é culpa de umas linhas um
                            pouco mais acima, ou até de outro script.</p>

                        <p>Em outros casos, podem aparecer diversos erros, mas que foram ocasionados por uma única linha. A correção dessa linha
                            siginifica a correção de todos os erros descobertos. Veja a tirinha baixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Desenho em quadrinhos satirizando as mensagens de debugação!"  src="tirinha16-debugando.png">
                            <p>Se programar já é uma arte, imagine debugar!!!</p>
                            <p>Fonte:<a href="http://vidadeprogramador.com.br/2011/08/19/erro-nao-documentado/" title="link-externo">Vida de programador</a></p>
                        </div>

                        <p>Superficialmente, <strong>debugar</strong> é sinônimo de teste, mas em essência são coisas
                            totalmente diferentes. "Testes" é uma palavra com escopo ampliado.</p>

                        <p>Veja o que a Wikipedia tem a nos dizer sobre testes: <a href="http://pt.wikipedia.org/wiki/Teste_de_software" title="link-externo">http://pt.wikipedia.org/wiki/Teste&#95;de&#95;software</a></p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="formas">Formas rudimentares</h1>
                        </div>

                        <p>A forma mais rudimentar de debugar em JS é exibir um alerta. Com o tempo você vai se encher com as popup e logo vai
                            procurar uma alternativa.</p>

                        <pre><code class="language-javascript">var minha_variavel = "Hello, word";
alert(minha_variavel);</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Debugando com Janela popup!" src="debug-alert.png" />
                            <p><a href="https://courses.cs.washington.edu/courses/cse190m/11su/labs/lab5-pimpmytext.shtml" title="link-externo">Fonte da imagem acima</a></p>
                        </div>


                        <p>Outra forma, também rudimentar, seria mostrar o resultado na própria página (nosso HTML)
                            através do método <code>write()</code> do objeto  nativo  <code>document</code>.</p>

                        <pre><code class="language-javascript">var minha_variavel = "Hello word";
document.write(minha_variavel);</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Debugando no próprio HTML"  src="debug-write.png">
                            <p><a href="http://blueashes.com/2011/web-development/install-nodejs-on-windows/" title="link-externo">Fonte da imagem acima</a></p>
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="depuradores">Depuradores (subindo um degrau)</h1>
                        </div>

                        <p>Quem desenvolve em JS e utiliza o Firefox para ver o resultado pode contar com o Firebug (já comentei um monte de vez
                            sobre esse plugin em matérias anteriores). Se você ainda não tem ele instalado, faça isso imediatamente.</p>

                        <p>O Firebug é um plugin do navegador Firefox, ele é opensource e está disponível para download em:
                            <a href="https://addons.mozilla.org/pt-br/firefox/addon/firebug" title="link-externo">https://addons.mozilla.org/pt-br/firefox/addon/firebug</a></p>

                        <pre><code class="language-javascript">var minha_variavel = "Hello word!";
console.log(minha_variavel);</code></pre>

                        <p>A imagem abaixo ilustra o resultado do console do firebug, repare que o desenvolvedor está usando o plugin do firebug
                            na IDE Eclipse.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Debugando com firebug"  src="debug-firebug.png">
                            <p><a href=http://1.bp.blogspot.com/-yxbVFlzsyK8/UBUm7iInQAI/AAAAAAAAFpQ/l4ZSI-Mv4Ps/s1600/console.png" title="link-externo">Fonte da imagem acima</a></p>
                        </div>

                        <p>Ele parece-se com o do navegador (document.write) mas não se engane, a janela do console tem muitas outras
                            funcionalidades e atrativos.</p>

                        <p><span style="text-decoration:line-through;">Em breve, voltarei para apresentar brevemente o Firebug.</span></p>

                        <p>Já voltei. </p>

                        <p>Cada vídeo que eu gravo é uma aventura! No primeiro, havia a voz da minha pequena grande Joana, neste eu
                            estava com gripe e minha voz (que já é baixa) ficou super abafada. Tentei amplificar mais consegui apenas alguns chiados.</p>

                        <p>De qualquer forma, vale a pena assistir ao video. É uma breve demonstração do Firebug e das funcionalidades comentadas.</p>

                        <div class="bs-example">
                            <iframe width="560" height="315" src="http://www.youtube.com/embed/IP8xDTGkfjc" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="problemas">Como saber se o código não está com problemas ?</h1>
                        </div>

                        <p>Estou mereferindo ao código quebrado, aquele que nem compila ou, em nosso caso, onde a
                            linguagem é interpretada, estou me referindo ao código trava por causa de um erro.
                            <strong>E como demostrar os erros?</strong>.</p>

                        <p>Quando executamos o arquivo (seja <code>.html</code> ou <code>.php</code> ou qualquer outra linguagem que você use) os
                            erros podem não aparecerem, em outras palavra, alguns erros são "timidos". Para encorajá-los
                            a sair da "toca" é preciso utilizar o <code>console.log()</code> e, obviamente, manter o Firebug aberto.</p>

                        <p>O teste mais básico que podemos fazer em um script JS é abrir o HTML, ligar o Firebug (acione a tecla F12), escolha a aba "console" e
                            recarrega a página cmn a tecla F5 ( à vezes precisamos executar um CTRL + F5, isso força a atualização).</p>

                        <p>Se não aparecer nenhuma mensagem de erro, ótimo! Seu script está correto (pelo menos do ponto de vista da sintaxe).</p>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>ody>
</html>
