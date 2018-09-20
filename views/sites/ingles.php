<div class="page">


  <!-- header -->
  <div class="header" style="margin-bottom:5em; ">

    <div class="container">


      <a href="<?=site_url()?>"><img class="bandeira"  src="<?=site_url()?>resources/site/images/br_flag.png"></a><!-- <p style="color:#4f81bd;font-size: 5em;">2018</p> -->
      <!-- <p class="subtitle " id="subtitulo" style="color:#000;" ><b><?=$header['titulo']?></b></p> -->

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
              <a href="#location">HOW PARTICIPATE</a>
            </li>
            <li>
              <a href="#form">I WANT</a>
            </li>
          </ul>
        </div>
        <div class="frase">
          <center>
            <img src="<?=site_url()?>resources/site/images/signin_texto_en.jpg" alt="">
          </center>
        </div>
        <center>
          <a href="https://www.hbatools.com.br/Home/ChangeLanguageInscricao/33?lang=en" target="_blank">
            <img src="<?=site_url()?>resources/site/images/cred2_en.jpg" alt="">
          </a>
          <a href="https://www.hbatools.com.br/Home/ChangeLanguageInscricao/33?lang=en" target="_blank">
            <img src="<?=site_url()?>resources/site/images/cred_en.jpg" alt="">
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
  document.getElementById("demo").innerHTML = days + " dias " + hours + " horas "
  + minutes + " min"+ " Lefting";

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
<div class="topics" style="margin-top: 5em;">
  <div class="container">
      <center>
      <img src="<?=site_url()?>resources/site/images/palestrantes.jpg" alt="palestrantes" class="palestrantes" >
      <a href="https://www.hbatools.com.br/Home/ChangeLanguageInscricao/33?lang=en
" target="_blank" > <img src="<?=site_url()?>resources/site/images/signup.jpg" alt="Inscrição" style="width: 70%;margin-bottom: 3em" ></a>
    </center>

      <h3 style="text-align: center"><a href="http://mistralgo.com/" target="_blank"><img src="<?=site_url()?>resources/site/images/agencia.png" alt="MistralGo" class="agencia" ></a></h3>

    <h3 style="text-align: center"><a href="http://mistralgo.com/" target="_blank"><img src="<?=site_url()?>resources/site/images/mistral.png" alt="MistralGo"  class="viagem"></a></h3>

    <h3 style="text-align: center"><a href="https://www.itmice.tur.br/explotech2018" target="_blank"><img src="<?=site_url()?>resources/site/images/itmice.jpg" alt="MistralGo" class="viagem" ></a></h3>



    <hr style="margin-bottom: 3em;">

    <h3><strong>Event´s Presentation  :</strong><br />EXPLO TECH 2018 - Exposition and Convention </h3>

    <p>It’s the official event of the explosive materials industry in Brazil, promoted ABIMEX (the Brazilian association of makers of explosive material and aggregates).</p>
    <p>Occurring in São Paulo,<b>EXPLO TECH 2018</b> – will gather the best and most innovative solutions in the Brazilian explosives market, including issues like: Drilling and Blasting technics, safe transport of explosive materials, pyrotechnics, among others.
    </p>
    <p>If your company is currently searching for new opportunities, and/or the consolidation of relationships in the Brazilian explosive materials market, then you should consider participating in <b>EXPLOTECH 2018</b>.
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

    <h2>Activities </h2>
    <p class="subtitle">Market Segments and Activities covered in EXPLO TECH 2018:</p>

    <div class="tabs">


      <!-- day -->
      <div id="tabs-1" class="day">

        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Extractive Industries<span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Overall land and underwater mining.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 

        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Chemical Industry <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Overall explosive manufacturers.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->
        <!-- single event -->
        <div class="event">

          <!-- event time -->
          <div class="event-time">Explosive waste management and environmental decontamination Industries  <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>companies that work with waste management and acid recovery systems.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 
        <div class="event">

          <!-- event time -->
          <div class="event-time">Construction Industries <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>Overall, tunnel and highway construction.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! --> 
        <!-- single event ends! --> 
        <div class="event">

          <!-- event time -->
          <div class="event-time">Overall sale<span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>transport, distribution and storage of explosive materials.</h4>
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
          <div class="event-time">Safety and Security <span></span></div>
          <!-- event time ends! -->

          <!-- event details -->
          <div class="event-info">

            <div>
              <h4>tracking, monitoring and security systems.</h4>
            </div>

          </div>
          <!-- event details ends! -->

        </div>
        <!-- single event ends! -->

        <!-- single event -->
        <!-- <div class="event"> -->

          <!-- event time -->
          <!-- <div class="event-time">Informação e comunicação <span></span></div> -->
          <!-- event time ends! -->

          <!-- event details -->
      <!--     <div class="event-info">

            <div>
              <h4>tracking, monitoring and security systems.</h4>
            </div>

          </div> -->
          <!-- event details ends! -->

          <!-- </div> -->
          <!-- single event ends! --> 
          <!-- single event -->
          <div class="event">

            <!-- event time -->
            <div class="event-time">Financial Activities <span></span></div>
            <!-- event time ends! -->

            <!-- event details -->
            <div class="event-info">

              <div>
                <h4>insurance and investment activities related to the explosive materials field.</h4>
              </div>

            </div>
            <!-- event details ends! -->

          </div>
          <!-- single event ends! -->
          <div class="event">

            <!-- event time -->
            <div class="event-time">Real estate <span></span></div>
            <!-- event time ends! -->

            <!-- event details -->
            <div class="event-info">

              <div>
                <h4>Sale and rent of adequate areas to develop the explosive materials industry.</h4>
              </div>

            </div>
            <!-- event details ends! -->

          </div>
          <!-- single event ends! -->   
          <!-- single event ends! -->
          <div class="event">

            <!-- event time -->
            <div class="event-time">Activities <span></span></div>
            <!-- event time ends! -->

            <!-- event details -->
            <div class="event-info">

              <div>
                <h4>Professional activities, training, scientific, technical, expert, projects, financing..</h4>
              </div>

            </div>
            <!-- event details ends! -->

          </div>
          <!-- single event ends! --> 
          <div class="event">

            <!-- event time -->
            <div class="event-time">Activities <span></span></div>
            <!-- event time ends! -->

            <!-- event details -->
            <div class="event-info">

              <div>
                <h4>Administrative activities and complementary services.</h4>
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
            <div class="event-time">Administrative Activities and overall complementary services  <span></span></div>
            <!-- event time ends! -->

            <!-- event details -->
            <div class="event-info">

              <div>
                <h4>Defense and security industries.</h4>
              </div>

            </div>
            <!-- event details ends! -->

          </div>
          <!-- single event ends! -->  
          <!-- single event -->
          <div class="event">

            <!-- event time -->
            <div class="event-time">Education  <span></span></div>
            <!-- event time ends! -->

            <!-- event details -->
            <div class="event-info">

              <div>
                <h4>Technical and scientific teaching facilities, and research centers related to the explosive materials industry.</h4>
              </div>

            </div>
            <!-- event details ends! -->

          </div>
          <!-- single event ends! --> 
          <!-- single event -->
          <!-- <div class="event"> -->

            <!-- event time -->
            <!-- <div class="event-time">Outras atividades de serviços   <span></span></div> -->
            <!-- event time ends! -->

            <!-- event details -->
            <!-- <div class="event-info"> -->

         <!--    <div>
              <h4>Incubadoras, centros de pesquisas.</h4>
            </div>

          </div> -->
          <!-- event details ends! -->

          <!-- </div> -->
          <!-- single event ends! -->    

          <!-- single event -->
          <div class="event">

            <!-- event time -->
            <div class="event-time">Public and Private Sectors <span></span></div>
            <!-- event time ends! -->

            <!-- event details -->
            <div class="event-info">

              <div>
                <h4>Associations, Unions, and regulatory agencies.</h4>
              </div>

            </div>
            <!-- event details ends! -->

          </div>
          <!-- single event ends! --> 
          <!-- single event -->
          <div class="event">

            <!-- event time -->
            <div class="event-time">International Organizations <span></span></div>
            <!-- event time ends! -->

            <!-- event details -->
            <div class="event-info">

              <div>
                <h4>Foreign companies, associations and other public and private entities.</h4>
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

  <h3>The Explosives Market Strength</h3>

  <div>
    <h4><i class="fa fa-check"></i> Important to who participate and efficient to those who sponsor and expose</h4>
    <p><b>EXPLO TECH 2018 </b>is the perfect opportunity for companies to build and consolidate long term relationships in a steadily growing market.</p>
    <p>The Discussion Board will be composed of sessions where strategic themes will be approached by market and academic experts.</p>
    <p><b>EXPLO TECH 2018</b> follows the global tendency of technical expositions and conferences. Sponsoring participants will have a wide variety of marketing tools to promote their brands.</p>
  </div>


  <div>
  <!--   <h4><i class="fa fa-check"></i> Integração dos 4 elos da cadeia de Explosivos</h4>
    <p><ul>
      <li>Empresas fabricantes de Explosivos.</li>
      <li>Empresas utilizadoras de Explosivos.</li>
      <li>Empresas fornecedoras de matérias primas para os fabricantes de Explosivos.</li>
      <li>Empresas de equipamentos, armazenagem e transporte de explosivos.</li>
    </ul></p> -->
  </div>

</div>
</div>
</div>
<!-- why ends! -->

<a id="registration" class="anchor"></a>

<!-- registration -->
<div class="registration">
  <div class="container">

    <h2>Marketing Packages:</h2>
    <!-- <p class="subtitle"><strong>Máxima Visibilidade </strong> para sua Marca e Empresa.</p> -->

    <p class="desc"><b>EXPLO TECH 2018</b> Marketing Packages are tailor-made to meet the particular requirements of various industrial branches, in tune with your company’s individual strategies. 
    </p>
    <!-- <p class="desc"> Ao participar do evento as empresas patrocinadoras contam com amplo leque de oportunidades para exposição de suas marcas e produtos, gerando uma eficiente campanha de comunicação e marketing de alta frequência para sua empresa.</p>     -->
    <!-- <p class="desc">Os planos de patrocínios da <b>EXPLO TECH 2018 </b>foram criados sob medida para empresas de diversos segmentos integrados, sintonizadas com as estratégias de sua empresa.</p>     -->
    <p class="desc">Get in touch with our team and learn more about EXPLO TECH 2018. </p>

    <h3 id="form"><?=$contato1['titulo']?></h3>

    <div class="form" >

      <form action="envia.php" method="POST">
        <input type="text" name="nomeremetente" placeholder="Name">
        <input type="text" name="assunto" placeholder="Subject">
        <input type="email" name="emailremetente" placeholder="Email" required>
        <textarea name="mensagem" rows="7" placeholder="Message"></textarea>

        <!--textarea name="message" placeholder="Your Message *"></textarea-->
        <button name="Submit" type="submit">Send</button>

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

      <h2>SPONSOR EXPLO TECH 2018 </h2>
      <p class="subtitle">Showcase your brand, products, technology and services in a high performance event that gathers the most important market players.</p>
      <p class="subtitle">ALL SPONSOR PLANS FOR EXPLO TECH 2018 GUARANTEE WIDE VISIBILITY AND DISCLOSURE OF YOUR BRAND:
      </p>
      <p class="subtitle"><B>BEFORE, DURING AND AFTER EVENT</B></p>
      <P class="subtitle">CLICK AND KNOW ALL THE MODALITIES </P>



      <div class="modalx animated fadeInRight">

        <ul>
          <li style="float:left;list-style: none;"><a href="#" class="modal-trigger" data-modal="platina" style="background:#e5e4e2;">PLATINUM</a></li>
          <li style="float:left;list-style: none;"><a href="#" class="modal-trigger" data-modal="ouro" style="background:#ffd700;">GOLD</a></li>
          <li style="float:left;list-style: none;"><a href="#" class="modal-trigger" data-modal="prata" style="background:#c0c0c0;">SILVER</a></li>
          <li style="float:left;list-style: none;"><a href="#" class="modal-trigger" data-modal="bronze" style="background:#cd7f32;">BRONZE</a></li>
        </ul>



        <!-- Trigger Modal. -->
        <!-- Modal -->
        <div class="modal" id="platina">
          <div class="modal-sandbox"></div>
          <div class="modal-box">
            <div class="modal-header" style="background:#e5e4e2;">
              <div class="close-modal">&#10006;</div> 
              <h1>PLATINUM <img class="modalogo" style="max-width: 20%;" src="<?=site_url()?>resources/site/images/explologo.png"></h1>
            </div>
            <div class="modal-body">
              <p><storng>Mounted Stand 36m<sup>2</sup></storng></p>
              <p style="color: red;margin-top: 3em;">Application of the company´s logo, platinum sponsorship in the following advertisement pieces:</p>
            </p>
            <ul>
              <li>Graphic materials (poster, invitations, visitation Guide, electronic catalogue of EXPLO TECH, Convention Schedule, advertisements in specialized magazines, e-mails marketing and folders).</li>
              <li>Entrance portico, stage scenery of the main auditorium, external advertisement pieces.</li>
              <li>Convention briefcase.</li>
              <li>Application of the logo on the T-shirt that the support team will use during the event.</li>
            </ul>
          </p>
          <p style="color: red;margin-top: 3em;">Communication:
          </p>
          <p>
            <ul>
              <li>Advertisement page in the official Convention schedule. (material to be provided by the sponsor)

              </li>
              <li>Logomarca no site do evento, com link para o site da empresa.</li>
              <li>Logo on the website of the event, with link to the company's website.</li>
              <li>Display of institutional video lasting 1 minute at the opening of Convention (video provided by the sponsor).</li>
              <li>Promotional material from the company in the folders distributed to all participants registered in the event (material to be provided by the sponsor).</li>
              <li>Participation of a company´s executive in the event´s press conference.</li>
              <li>• 40% discount in the Convention enrollment fees for employees.</li>
            </ul>
          </p>
          <p style="color: red;margin-top: 3em;">Technical Lecture</p>
          <p><ul>
            <li>Holding two lectures of 40 minutes during the event (one each day)</li>
          </ul>
        </p>
        <br />
        <button class="close-modal">CLOSE</button>
      </div>
    </div>
  </div>
  <!-- Modal2 -->

  <div class="modal" id="ouro">
    <div class="modal-sandbox"></div>
    <div class="modal-box">
      <div class="modal-header" style="background:#ffd700;">
        <div class="close-modal">&#10006;</div> 
        <h1>GOLD<img class="modalogo" style="max-width: 20%;" src="<?=site_url()?>resources/site/images/explologo.png"></h1>
      </div>
      <div class="modal-body">
       <p>21 m<sup>2</sup> Mounted Stand.</p>
       <p style="color:red;margin-top: 3em;">Application of the company´s logo, as gold sponsor in the following advertisement pieces:
       </p> 
       <p>
        <ul>
          <li>Graphic materials (posters, invitations, visitation Guide, electronic catalogue of EXPLO TECH, Convention Schedule, advertisements in specialized magazines, e-mails marketing and folders). </li>
          <li>Entrance portico, stage scenery of the main auditorium, external advertisement pieces.</li>
          <li>Convention briefcase.</li>
        </ul>
      </p>
      <p style="color: red"></p>
      <p>
        <ul>
          <li>Advertisement page in the official Convention schedule.</li>
          <li>Logo in the event´s website, with link to the company's website.</li>
          <li>Promotional material from the company in the folders distributed to all participants registered in the event (material to be provided by the sponsor).</li>
          <li>30% discount in the Convention enrollment fees for employees.</li>
        </ul>
      </p>
      <p style="color:red;margin-top: 3em;">Technical Lecture:</p>
      <p>
        <ul>
          <li>Realization of one 40 minutes lecture during the event.</li>
        </ul>
      </p>
      <br />
      <button class="close-modal">CLOSE</button>
    </div>
  </div>
</div>
<!-- Modal3 -->

<div class="modal" id="prata">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header" style="background:#c0c0c0;">
      <div class="close-modal">&#10006;</div> 
      <h1>SILVER<img class="modalogo" style="max-width: 20%;" src="<?=site_url()?>resources/site/images/explologo.png"></h1>
    </div>
    <div class="modal-body">
      <p>12 m<sup>2</sup> m2 Mounted Stand.</p>
      <p style="color:red;margin-top: 3em;">Application of the company´s logo, as a silver sponsor in the following advertisement pieces:</p> 
      <p>
        <ul>
          <li>Graphic materials (posters, invitations, visitation Guide, electronic catalogue of EXPLO TECH, Convention Schedule, advertisements in specialized magazines, e-mails marketing and folders). </li>
          <li>Entrance portico, stage scenery of the main auditorium, external advertisement pieces.</li>
          <li>Convention briefcase.</li>
        </ul>
      </p>
      <p style="color:red;margin-top: 3em;">Communication:</p>
      <p>
        <ul>
          <li>Advertisement page in the official Convention schedule. (material to be provided by the sponsor).</li>
          <li>Logo on the event´s website, with link to the company's website.</li>
          <li>20% discount in the Convention enrollment fees for employees.</li>
        </ul>
      </p>
      <br />
      <button class="close-modal">CLOSE</button>
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
      <p><b>09 m<sup>2</sup> Mounted Stand</b></p>
      <p style="color: red;margin-top: 3em;">Application of the company´s logo, as a silver sponsor in the following advertisement pieces:
      </p>
      <p>
        <ul>
          <li>Graphic materials (posters, invitations, visitation Guide, electronic catalogue of EXPLO TECH, Convention Schedule, advertisements in specialized magazines, e-mails marketing and folders). </li>
          <li>Entrance portico, stage scenery of the main auditorium, external advertisement pieces.</li>
          <li>Convention briefcase.</li>
        </ul>
      </p>
      <p style="color: red;;margin-top: 3em;">Communication:</p>
      <p>
        <ul>
          <li>Advertisement page in the Convention Schedule (the advertisement will be provided by the sponsor).</li>
          <li>Logo on the event´s website, with link to the company's website.</li>
          <li>10% discount in the Convention enrollment fees for employees.</li>
        </ul>
      </p>
      <br />
      <button class="close-modal">CLOSE</button>
    </div>
  </div>
</div>

</div>


<!-- info -->
<div class="info" style="margin-top: 18em;text-align: center;">
 <h3 class="h2parceiros" ><center>OPERATIONAL SUPPORT</center></h3>

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
      <p class="subtitle"><b>October 16 and 17 of 2018</b> <br/>         
       <img  src="<?=site_url()?>resources/site/images/feicaneca.png"> </p>
     </div>

   </div>
   <!-- info -->
   <div class="info" style="margin-top: 10em;text-align: center;padding-bottom: 4em;padding-top: 2em;">
      <h3  class="h2parceiros" ><center>EXHIBITORS</center></h3>
        <img src="<?=site_url()?>resources/site/images/banner.jpg" alt="patrocinadores" class="patrocinadores" >
     <h3  class="h2parceiros" style="margin-top: 2em;"><center>INSTITUTIONAL SUPPORT</center></h3>

     <div class="address animated fadeInRight" style="width: 100%;text-align: center;" >

      <?php foreach ($imagens3 as $i3): ?>
       <a target="_blank" href="<?=$i3['link']?>"> <img class="imgfix " src="<?=site_url().$i3['imagem']?>" style="max-width: 100%;max-height: 100px;"></a>
     <?php endforeach ?>

   </div>

 </div>
</div>
<!-- social ends! -->