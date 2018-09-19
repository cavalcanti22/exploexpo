<div class="page">
  <!-- header -->

  <div class="header" >

    <div class="container">

      <a href="<?=site_url()?>Sites/ingles"><img class="bandeira"  src="<?=site_url()?>resources/site/images/eua_flag.png"></a> 

      <div class="banner">
        <center>
          <a href="#" target="_blank"> 
            <img class=""  src="<?=site_url()?>resources/site/images/logo_explo.png">
          </a>
          <a href="" target="_blank">
            <img class=""  src="<?=site_url()?>resources/site/images/ISSE_2018.png">
          </a>
        </center>
      </div>


      <div class="signin">
        <div class="botoes">
          <ul>
            <li>
              <a href="#location">COMO PARTICIPAR</a>
            </li>
            <li>
              <a href="#form">QUERO PARTICIPAR</a>
            </li>
          </ul>
        </div>
        <div class="frase">
          <center>
            <img src="<?=site_url()?>resources/site/images/signin_texto.jpg" alt="">
          </center>
        </div>
        <center>
          <a href="https://www.hbatools.com.br/Home/ChangeLanguageInscricao/33?lang=pt" target="_blank">
            <img src="<?=site_url()?>resources/site/images/cred.jpg" alt="">
          </a>
          <a href="https://www.hbatools.com.br/Home/ChangeLanguageInscricao/33?lang=pt" target="_blank">
            <img src="<?=site_url()?>resources/site/images/insc.jpg" alt="">
          </a>
        </center>
      </div>

      <!--------------------------------------------------------- RELÓGIO -->

      <!-- Display the countdown timer in an element -->

      <div class="relogio">
        <p id="demo"></p>
      </div>

      <script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 16, 2018 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = "Faltam: "+days + " dias " + hours + " horas "
  + minutes + " min";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<!--------------------------------------------------------- RELÓGIO -->

<div class="logos">
 <center>
   <a href="http://globalevents1959.com/">
    <img class="globallogo"  src="<?=site_url()?>resources/site/images/global_header_.png">
  </a>
  <a href="http://abimex.ind.br">
    <img class="abimexlogo"  src="<?=site_url()?>resources/site/images/frei_caneca_2.png">
  </a>
  <a href="http://abimex.ind.br">
    <img class="abimexlogo"  src="<?=site_url()?>resources/site/images/global_header_2.png">
  </a>
</center>
</div>

</div> <!-- container -->
</div>
<!-- header ends -->



<!-- topics -->
<div class="topics" style="margin-top: 2em;">
  <div class="container">

    <center>
      <img src="<?=site_url()?>resources/site/images/palestrantes.jpg" alt="palestrantes" class="palestrantes"" >
      <a href="https://www.hbatools.com.br/Home/ChangeLanguageInscricao/33?lang=pt" target="_blank" > <img src="<?=site_url()?>resources/site/images/inscricao.jpg" alt="Inscrição"  class="botao_insc" ></a>
    </center>

    <h3 style="text-align: center"><a href="http://mistralgo.com/" target="_blank"><img src="<?=site_url()?>resources/site/images/agencia.png" alt="MistralGo" class="agencia" ></a></h3>

    <h3 style="text-align: center"><a href="http://mistralgo.com/" target="_blank"><img src="<?=site_url()?>resources/site/images/mistral.png" alt="MistralGo"  class="viagem"></a></h3>

    <h3 style="text-align: center"><a href="https://www.itmice.tur.br/explotech2018" target="_blank"><img src="<?=site_url()?>resources/site/images/itmice.jpg" alt="MistralGo" class="viagem" ></a></h3>

    <h3 style="text-align: center"><a href="<?=site_url()?>Sites/Noticias"><img class="noticias" src="<?=site_url()?>resources/site/images/noticiasbr.png" ></a></h3>

    <?php foreach ($noticias as $noticia ): ?>
      <ul style="list-style-type: none;"><li><a href="<?=site_url()?>Sites/Noticias/#<?=$noticia['id']?>" style="text-decoration: none" target="_blank"><p><?=$noticia['titulo']?>  <?=$noticia['horario']?>  <i class="fa fa-mouse-pointer"></i></p></a></li></ul>
    <?php endforeach ?>




    <hr style="margin-bottom: 3em;">




    <h3><strong>Apresentação Evento :</strong><br />EXPLO TECH 2018 – Convenção e Exposição </h3>

    <p>É o evento oficial do setor de explosivos representada pela ABIMEX (Associação Brasileira das Indústrias de Materiais Explosivos e Agregados).</p>
    <p>Realizada em São Paulo, o <b>EXPLO TECH 2018</b> – Exposição e Convenção vêm para atender a demanda do mercado, por um fórum especializado para debater os temas centrais do setor de explosivos e ao mesmo tempo reunir num só espaço as melhores soluções para mineração, desmonte de rochas, segurança na indústria automobilística, pirotecnia, propulsão e demais aplicações.
    </p>
    <p>Se sua empresa está buscando novas oportunidades ou a consolidação de relacionamentos considere a <b>EXPLO TECH</b> na sua agenda de promoção e vendas em 2018. O evento planejado para sua empresa realizar mais negócios!
    </p> 

    <!-- single topic -->
<!--    <div>
<i class="fa fa-code fa-2x"></i>
<h4>Better Coding</h4>
<p>Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat.</p>
</div> -->
<!-- single topic ends! -->

<!-- single topic -->
<!--   <div>
<i class="fa fa-line-chart fa-2x"></i>
<h4>Secret to Succeess</h4>
<p>Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat.</p>
</div> -->
<!-- single topic ends! -->

<!-- single topic -->
<!--    <div>
<i class="fa fa-lightbulb-o fa-2x"></i>
<h4>Make Ideas Happen</h4>
<p>Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat.</p>
</div> -->
<!-- single topic ends! -->

</div>
</div>
<!-- topics ends! -->


<a id="scheadule" class="anchor"></a>

<!-- schedule -->
<div class="schedule">
  <div class="container">

    <h2>Atividades </h2>
    <p class="subtitle">Segmentos e Atividades cobertas pela EXPLO TECH 2018</p>

    <div class="tabs">

      <ul>
        <li><a href="#tabs-1">Explo é Desenvolvimento</a></li>
        <li><a href="#tabs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Explo é Inovação</a></li>
        <li><a href="#tabs-3">&nbsp;&nbsp;&nbsp; &nbsp;Explo é Informação</a></li>
      </ul>

      <!-- day -->
      <div id="tabs-1" class="day">

        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Indústrias extrativas<span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Minerações em geral, terrestre e subaquática.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 

        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Indústrias de transformação <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Fabricantes de explosivos, de pólvoras, ácidos e MP para explosivos.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->
        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Gestão de resíduos e descontaminação  <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>empresas de tratamento de efluentes, recuperadores de ácidos.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 
        <div class="event">

          <!-- event time -->
          <div class="event-time">Construção <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>pesada e leve, tuneis, rodovias, desmontes terrestres e subaquáticos.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 
        <!-- single event ends! --> 
        <div class="event">

          <!-- event time -->
          <div class="event-time">Comércio<span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Comércio e distribuição de explosivos e pólvoras ou materiais destinados ao segmento, incluindo equipamentos, produtos, embalagens.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->

      </div>
      <!-- day ends! -->

      <!-- day -->
      <div id="tabs-2" class="day">

        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Transporte, armazenagem <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Empresas de logística, transportes</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->

        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Informação e comunicação <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>TI, rastreamento, simuladores, sistemas de segurança, drones.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 
        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Atividades financeiras <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Seguros, investimentos e serviços relacionados.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Atividades imobiliárias <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Vendas de áreas industriais, aluguel de galpões.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->   
        <!-- single event ends! -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Atividades <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Atividades profissionais, treinamentos, científicas, técnicas, pericias, projetos, financiamentos.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 
        <div class="event">

          <!-- event time -->
          <div class="event-time">Atividades <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Atividades administrativas e serviços complementares.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->

      </div>
      <!-- day ends! -->

      <!-- day -->
      <div id="tabs-3" class="day">

        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Administração pública  <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Defesa, Segurança.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->  
        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Educação  <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Universidades, escolas técnicas.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 
        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Outras atividades de serviços   <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Incubadoras, centros de pesquisas.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->    

        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Órgãos governamentais, públicos ou privados <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Associações, Sindicatos, Institutos.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 
        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Organismos internacionais <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Empresas estrangeiras, associações internacionais ou localizadas no exterior.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->



      </div>
      <!-- day ends! -->

    </div>

  </div>
</div>
<!-- schedule ends! -->

<!-- why -->
<div class="why">
  <div class="container">

<!--         <div class="testimonials">

<h4>A Força do Mercado de Explosivos</h4>

<div class="slides">

<blockquote>
Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin, erat enim varius nisl, sed porta augue mi et dui.
<cite>Mike Jonson<br /><span>Frontend Developer</span></cite>
</blockquote>

<blockquote>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin, erat enim varius nisl, sed porta augue mi et dui.
<cite>Jennifer Jonson<br /><span>Frontend Developer</span></cite>
</blockquote>

<blockquote>
Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin, erat enim varius nisl, sed porta augue mi et dui.
<cite>Smith Jonson<br /><span>Frontend Developer</span></cite>
</blockquote>

</div>

</div> -->

<div class="bullets">

  <h3>A Força do Mercado de Explosivos</h3>

  <div>
    <h4><i class="fa fa-check"></i> Importante para quem participa, eficiente para quem patrocina e expõe</h4>
    <p>Por suas caraterísticas exclusivas, a <b>EXPLO TECH 2018</b> - Exposição e Convenção 2018 é a oportunidade para empresas fornecedoras construírem e consolidarem relacionamentos com um mercado em constante crescimento.</p>
    <p>A Convenção será formado por painéis, abordando temas estratégicos e palestras técnicas apresentadas por empresas patrocinadoras e parceiras do <b>SINDEX e ABIMEX</b>.</p>
    <p>Ao todo serão realizados oito painéis e trinta e duas palestras técnicas, fazendo do evento uma importante plataforma de atualização mercadológica.</p>
  </div>


  <div>
    <h4><i class="fa fa-check"></i> Integração dos 4 elos da cadeia de Explosivos</h4>
    <p><ul>
      <li>Empresas fabricantes de Explosivos.</li>
      <li>Empresas utilizadoras de Explosivos.</li>
      <li>Empresas fornecedoras de matérias primas para os fabricantes de Explosivos.</li>
      <li>Empresas de equipamentos, armazenagem e transporte de explosivos.</li>
    </ul></p>
  </div>

</div>
</div>
</div>
<!-- why ends! -->

<a id="registration" class="anchor"></a>

<!-- registration -->
<div class="registration">
  <div class="container">

    <h2>Exposição e Convenção:</h2>
    <p class="subtitle"><strong>Máxima Visibilidade </strong> para sua Marca e Empresa.</p>

    <p class="desc">A <b>EXPLO TECH 2018</b> segue o modelo das grandes conferências técnicas mundiais.</p>
    <p class="desc"> Ao participar do evento as empresas patrocinadoras contam com amplo leque de oportunidades para exposição de suas marcas e produtos, gerando uma eficiente campanha de comunicação e marketing de alta frequência para sua empresa.</p>    
    <p class="desc">Os planos de patrocínios da <b>EXPLO TECH 2018 </b>foram criados sob medida para empresas de diversos segmentos integrados, sintonizadas com as estratégias de sua empresa.</p>    
    <p class="desc">Entre em Contato com a <b>GLOBAL EXPO </b> e conheça as condições especiais para participação na EXPLO TECH 2018 </p>

    <h3 id="form"><?=$contato1['titulo']?></h3>

    <div class="form" >

      <form action="envia.php" method="POST">
        <input type="text" name="nomeremetente" placeholder="Nome" required>
        <input type="text" name="assunto" placeholder="Assunto">
        <input type="email" name="emailremetente" placeholder="Email" required>
        <textarea name="mensagem" rows="7" placeholder="Mensagem" required></textarea>

        <!--textarea name="message" placeholder="Your Message *"></textarea-->
        <button name="Submit" type="submit">Enviar</button>

      </form>

    </div>

    <div class="price">

      <div>

        <p class="amount"><i class="fa fa-info-circle" aria-hidden="true"></i></p>
        <h4><span style="font-size: 0.6em;"><i class="fa fa-phone" aria-hidden="true"> <?=$contato1['telefone']?></i> <i class="fa fa-whatsapp" aria-hidden="true"> <?=$contato1['whats']?></i> <br/><i class="fa fa-envelope-o" aria-hidden="true"> <?=$contato1['email']?></i><br/> <i class="fa fa-globe" aria-hidden="true"> <?=$contato1['endereco']?></i> </span>
        </div>

        <div>

          <p class="amount"><i class="fa fa-map-marker" aria-hidden="true"></i></p>
          <h4><span style="font-size: 0.7em;" ><?=$contato2['titulo']?></span></h4>
          <p><span><?=$contato2['endereco']?></span></p>

        </div>


      </div>

    </div>
  </div>
  <!-- registration ends! -->


  <a id="location" class="anchor"></a>

  <!-- location -->
  <div class="location">
    <div class="container">

      <h2>PATROCINE A EXPLO TECH 2018</h2>
      <p class="subtitle">Exponha sua marca, produtos, tecnologia e serviços em um evento de alto desempenho que reúne os principais players no setor de explosivos</p>
      <p class="subtitle">Todos os planos de patrocínios para EXPLO TECH 2018 garantem ampla visibilidade e divulgação de sua marca: 
      </p>
      <p class="subtitle"><B>Antes, Durante e Pós Evento</B></p>
      <P class="subtitle">Clique e conheça todas as modalidades </P>



      <div class="modalx animated fadeInRight">

        <ul>
          <li style="float:left;list-style: none;"><a href="#" class="modal-trigger" data-modal="platina" style="background:#e5e4e2;">PLATINA</a></li>
          <li style="float:left;list-style: none;"><a href="#" class="modal-trigger" data-modal="ouro" style="background:#ffd700;">OURO</a></li>
          <li style="float:left;list-style: none;"><a href="#" class="modal-trigger" data-modal="prata" style="background:#c0c0c0;">PRATA</a></li>
          <li style="float:left;list-style: none;"><a href="#" class="modal-trigger" data-modal="bronze" style="background:#cd7f32;">BRONZE</a></li>
        </ul>



        <!-- Trigger Modal. -->
        <!-- Modal -->
        <div class="modal" id="platina">
          <div class="modal-sandbox"></div>
          <div class="modal-box">
            <div class="modal-header" style="background:#e5e4e2;">
              <div class="close-modal">&#10006;</div> 
              <h1>PLATINA <img class="modalogo" style="max-width: 20%;" src="<?=site_url()?>resources/site/images/explologo.png"></h1>
            </div>
            <div class="modal-body">
              <p><storng>Stand montado no evento 36m<sup>2</sup></storng></p>
              <p style="color: red;margin-top: 3em;">Aplicação da logomarca da empresa, Patrocínio Platina nas seguintes peças de divulgação:</p>
            </p>
            <ul>
              <li>Materiais gráficos (cartaz, convites, guia de visitação, catálogo eletrônico da EXPLO TECH, caderno programa da Convenção, anúncios nas revistas especializadas, e-mails marketing e folders).
              </li>
              <li>Pórtico de entrada, cenário do palco do auditório principal, peças de divulgação externa, sinalização interna.</li>
              <li>Pasta do congressista.</li>
              <li>Aplicação da logomarca na camiseta que a equipe de apoio usará durante o evento.</li>
            </ul>
          </p>
          <p style="color: red;margin-top: 3em;">Comunicação:
          </p>
          <p>
            <ul>
              <li>Inserção de uma página de anúncio em uma das capas do caderno programa da Convenção ou página dupla (o anúncio será fornecido pelo patrocinador).
              </li>
              <li>Logomarca no site do evento, com link para o site da empresa.</li>
              <li>Exibição de vídeo institucional com duração de 1 minuto na abertura da Convenção (vídeo fornecido pelo patrocinador).
              </li>
              <li>Inserção de material promocional da empresa na pasta à ser distribuída à todos os participantes inscritos na Convenção (material fornecido pelo patrocinador).
              </li>
              <li>Participação de um Executivo da Empresa Patrocinadora na Coletiva de Imprensa do Evento.
              </li>
              <li>Desconto de 40% no valor das inscrições da Convenção.
              </li>
            </ul>
          </p>
          <p style="color: red;margin-top: 3em;">Palestra Técnica
          </p>
          <p><ul>
            <li>Realização de duas palestras de 40 minutos durante o evento (Uma a cada dia)</li>
          </ul>
        </p>
        <br />
        <button class="close-modal">FECHAR</button>
      </div>
    </div>
  </div>
  <!-- Modal2 -->

  <div class="modal" id="ouro">
    <div class="modal-sandbox"></div>
    <div class="modal-box">
      <div class="modal-header" style="background:#ffd700;">
        <div class="close-modal">&#10006;</div> 
        <h1>OURO<img class="modalogo" style="max-width: 20%;" src="<?=site_url()?>resources/site/images/explologo.png"></h1>
      </div>
      <div class="modal-body">
        <p>Stand montado no evento 21 m<sup>2</sup>
        </p>
        <p style="color:red;margin-top: 3em;">Aplicação da logomarca da empresa, como Patrocinador Ouro nas seguintes peças de divulgação:
        </p> 
        <p>
          <ul>
            <li>
              Materiais gráficos (cartazes, convites, guia de visitação, catálogo eletrônico da EXPLO TECH, caderno programa da Convenção, anúncios nas revistas especializadas, e-mails marketing e folders).

            </li>
            <li>Pórtico de entrada, cenário do palco do auditório principal, peças de divulgação externa, sinalização interna.</li>
            <li>Pasta do congressista.</li>
          </ul>
        </p>
        <p style="color: red"></p>
        <p>
          <ul>
            <li>Inserção de uma página de anúncio  no caderno programa da Convenção (o anúncio será fornecido pelo patrocinador).
            </li>
            <li>Logomarca no site do evento, com link para o site da empresa.</li>
            <li>Inserção de material promocional da empresa na pasta a ser distribuída à todos os participantes inscritos na Convenção (material fornecido pelo patrocinador).</li>
            <li>Desconto de 30% no valor das inscrições da Convenção.</li>
          </ul>
        </p>
        <p style="color:red;margin-top: 3em;">Palestra Técnica:
        </p>
        <p>
          <ul>
            <li>Realização de uma  palestras de 40 minutos durante o evento</li>
          </ul>
        </p>
        <br />
        <button class="close-modal">FECHAR</button>
      </div>
    </div>
  </div>
  <!-- Modal3 -->

  <div class="modal" id="prata">
    <div class="modal-sandbox"></div>
    <div class="modal-box">
      <div class="modal-header" style="background:#c0c0c0;">
        <div class="close-modal">&#10006;</div> 
        <h1>PRATA<img class="modalogo" style="max-width: 20%;" src="<?=site_url()?>resources/site/images/explologo.png"></h1>
      </div>
      <div class="modal-body">
        <p>Stand montado no evento 12 m<sup>2</sup>  

        </p>
        <p style="color:red;margin-top: 3em;">Aplicação da logomarca da empresa, como Patrocinador Prata  nas seguintes peças de divulgação:
        </p> 
        <p>
          <ul>
            <li>
              Materiais gráficos (cartazes, convites, guia de visitação, catálogo eletrônico da EXPLO TECH, caderno programa da Convenção, anúncios nas revistas especializadas, e-mails marketing e folders).
            </li>
            <li>Pórtico de entrada, cenário do palco do auditório principal, peças de divulgação externa, sinalização interna.
            </li>
            <li>Pasta do congressista.</li>
          </ul>
        </p>
        <p style="color:red;margin-top: 3em;">Comunicação:</p>
        <p>
          <ul>
            <li>Inserção de uma página de anúncio de 1\2 página no  caderno programa da Convenção (o anúncio será fornecido pelo patrocinador). </li>
            <li>Logomarca no site do evento, com link para o site da empresa.</li>
            <li>Desconto de 20% no valor das inscrições da Convenção.
            </li>
          </ul>
        </p>
        <br />
        <button class="close-modal">FECHAR</button>
      </div>
    </div>
  </div>
  <!-- Modal4 -->

  <div class="modal" id="bronze">
    <div class="modal-sandbox"></div>
    <div class="modal-box">
      <div class="modal-header" style="background:#cd7f32;">
        <div class="close-modal">&#10006;</div> 
        <h1>BRONZE<img class="modalogo" style="max-width: 20%;" src="<?=site_url()?>resources/site/images/explologo.png"></h1>
      </div>
      <div class="modal-body">
        <p><b>Stand montado no evento 09 m<sup>2</sup> </b></p>
        <p style="color: red;margin-top: 3em;">Aplicação da logomarca da empresa, como Patrocinador Prata nas seguintes peças de divulgação:
        </p>
        <p>
          <ul>
            <li>Materiais gráficos (cartaz, convites, guia de visitação, catálogo eletrônico da EXPLO TECH, caderno programa da Convenção, anúncios nas revistas especializadas, e-mails marketing e folders).</li>
            <li>Pórtico de entrada, cenário do palco do auditório principal, peças de divulgação externa, sinalização interna.
            </li>
            <li>Pasta do congressista.
            </li>
          </ul>
        </p>
        <p style="color: red;;margin-top: 3em;">Comunicação:</p>
        <p>
          <ul>
            <li>Inserção de uma página de anúncio de 1\4 página no  caderno programa da Convenção (o anúncio será fornecido pelo patrocinador).
            </li>
            <li>Logomarca no site do evento
            </li>
            <li>Desconto de 20% no valor das inscrições da Convenção.</li>
          </ul>
        </p>
        <br />
        <button class="close-modal">FECHAR</button>
      </div>
    </div>
  </div>

</div>


<!-- info -->
<div class="info" style="margin-top: 18em;text-align: center;">
  <h3 class="h2parceiros" ><center>APOIO OPERACIONAL</center></h3>

  <div class="" style="width: 100%;text-align: center;">


    <?php foreach ($imagens2 as $i2): ?>
      <a target="_blank"   href="<?=$i2['link']?>"><img class="imgfix" src="<?=site_url().$i2['imagem']?>" style="max-width: 100%;max-height: 100px;margin-bottom: 1em;"></a>
    <?php endforeach ?>
  </div>  
</div>
<!-- info ends! -->
</div>

</div>
<!-- location ends! -->



<!-- info ends! -->
<!-- social -->
<div class="social" >

  <div class="container">

    <div class="socialdiv">
      <h2>Explo Tech 2018</h2>
      <p class="subtitle"><b>16 E 17 DE OUTUBRO DE 2018</b> <br/>         
        <img style="max-width: 25%" src="<?=site_url()?>resources/site/images/feicaneca.png"> </p>
      </div>

    </div>
    <!-- info -->
    <div class="info" style="margin-top: 10em;text-align: center;padding-bottom: 4em;padding-top: 2em;">
     <h3  class="h2parceiros" ><center>EXPOSITORES</center></h3>
        <img src="<?=site_url()?>resources/site/images/banner.jpg" alt="patrocinadores" class="patrocinadores"" >
      <h3  class="h2parceiros" ><center>APOIO INSTITUCIONAL</center></h3>



    <div class="address animated fadeInRight" style="width: 100%;text-align: center;" >

      <?php foreach ($imagens3 as $i3): ?>
       <a target="_blank" href="<?=$i3['link']?>"> <img class="imgfix " src="<?=site_url().$i3['imagem']?>" style="max-width: 100%;max-height: 100px;"></a>
     <?php endforeach ?>

   </div>

 </div>
</div>
<!-- social ends! -->