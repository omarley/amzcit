<?php
$title_page = "Contáctenos | Amazon City";
$contacto = true;

include_once 'assets/header.php';
?>

<!--======= BANNER =========-->
  <div class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h1>Contácto</h1>
        <ol class="breadcrumb">
          <li class="pull-left">Contácto</li>
          <li><a href="/">Inicio</a></li>
          <li class="active">Contácto</li>
        </ol>
      </div>
    </div>
  </div>

<section class="properties white-bg">
    <div class="container width-small">             
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3947.3066866817994!2d-74.5611199!3d-8.3714626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a3bd3da64c7461%3A0x727638fd8dcd5e16!2sHotel+Amazon+City!5e0!3m2!1ses!2ses!4v1445964359711" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

  <!--======= CONTACT =========-->
  <section class="contact"> 
    <div class="contact-form">
      <div class="container width-small"> 
        
        <!--======= TITTLE =========-->
        <div class="tittle"> <img src="images/tit2.png" alt="">
          <h3>No dude en comunicarse con nosotros.</h3>
          <p>Si desea saber más acerca de nuestro prestigioso Hotel <strong>Amazon City</strong> no dude en escribirnos, nosotros estaremos gustosos a responderle lo más pronto posible.</p>
        </div>
        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Gracias, su mensaje ha sido enviado con existo, trateremos de responderle lo más pronto posible.</div>
        <form role="form" id="contact_form" method="post" onSubmit="return false">
          <ul class="row">
            <li class="col-sm-6">
              <label class="font-montserrat">Sus Nombres *
                <input type="text" class="form-control" name="name" id="name" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Su e-mail *
                <input type="text" class="form-control" name="email" id="email" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Telefono *
                <input type="text" class="form-control" name="company" id="company" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Asunto
                <input type="text" class="form-control" name="website" id="website" placeholder="">
              </label>
            </li>
            <li class="col-sm-12">
              <label class="font-montserrat">Mensaje
                <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
              </label>
            </li>
            <li class="col-sm-12">
              <button type="submit" value="submit" class="btn font-montserrat" id="btn_submit" onClick="proceed();">Enviar Mensaje</button>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </section>

  <!--======= CONTACT =========-->
<section class="contact"> 
    
    <!--======= CONTACT INFORMATION =========-->
    <div class="contact-info padding-top">
      <div class="container"> 
        <!--======= CONTACT =========-->
        <ul class="row con-det">
          
          <!--======= ADDRESS =========-->
          <li class="col-md-4"> <i class="fa fa-map-marker"></i>
            <p>Puca 01, Yarinacocha, Pucallpa, Jr. Garcilaso de la Vega Mz. 162 Lt. 7G</p>
          </li>
          
          <!--======= EMAIL =========-->
          <li class="col-md-4"> <i class="fa fa-phone"></i>
            <p>Tel  :  51 61 596905</p>            
          </li>
          
          <!--======= ADDRESS =========-->
          <li class="col-md-4"> <i class="fa fa-clock-o"></i>
            <p>Lunes - Domingo</p>            
            <p>12:00 A.M. - 12:00 P.M.</p>
          </li>
        </ul>                        
      </div>
    </div>   
</section>

<?php

include_once 'assets/footer.php';

?>