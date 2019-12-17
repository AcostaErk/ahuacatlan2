    <head>

      <?php
      include 'headerContent/links.php';
      include 'headerContent/metas.php';
      include 'headerContent/styles.php';
      include 'headerContent/script.php';
      ?>

      <title>
        XLI Ayuntamiento de Ahuacatlán Nayarit  &#8211; Gobierno que Construye, Municipio que Avanza 
      </title>   
    </head>
    
    <header class="tc-header clearfix row-fluid tc-tagline-off tc-title-logo-on  tc-shrink-on tc-menu-on logo-left tc-second-menu-in-sn-before-when-mobile" role="banner">
      <div class="brand span3 pull-left">
        <a class="site-logo" href="http://ahuacatlanavanza.gob.mx/" title="XLI Ayuntamiento de Ahuacatlán Nayarit  | Gobierno que Construye, Municipio que Avanza "><img src="http://ahuacatlanavanza.gob.mx/wp-content/uploads/2017/09/logo-1.png" alt="Volver a la página principal" width="272" height="90" style="max-width:250px;max-height:100px" data-no-retina class=" attachment-311"/></a>        
      </div> <!-- brand span3 -->

      <div class="navbar-wrapper clearfix span9 tc-submenu-fade tc-submenu-move tc-open-on-click pull-menu-left">
        <div class="navbar resp">
          <div class="navbar-inner" role="navigation">
            <div class="row-fluid">
              <div class="social-block span5">
                <div class="social-links">
                  <a rel="nofollow" class="social-icon icon-facebook"  title="Síguenos Facebook" aria-label="Síguenos Facebook" href="https://www.facebook.com/XLIAyuntamientoAhuacatlan/"  target="_blank"  style="color:#f51818;font-size:12px">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a rel="nofollow" class="social-icon icon-twitter"  title="Síguenos Twitter" aria-label="Síguenos Twitter" href="javascript:void(0)"  target="_blank"  style="color:#f51818;font-size:12px">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a rel="nofollow" class="social-icon icon-youtube"  title="Síguenos Youtube" aria-label="Síguenos Youtube" href="javascript:void(0)"  target="_blank"  style="color:#f51818;font-size:12px">
                    <i class="fa fa-youtube"></i>
                  </a>
                  <a rel="nofollow" class="social-icon icon-instagram"  title="Síguenos Instagram" aria-label="Síguenos Instagram" href="javascript:void(0)"  target="_blank"  style="color:#f51818;font-size:12px">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a rel="nofollow" class="social-icon icon-phone"  title="(324)2411254" aria-label="(324)2411254" href="tel:324-241-1254"  target="_blank"  style="color:#f51818;font-size:12px"><i class="fa fa-phone"></i>
                  </a>
                  <a rel="nofollow" class="social-icon icon-mail-o"  title="Email" aria-label="Email" href="mailto:ahuacatlanavanza@gmail.com"  target="_blank"  style="color:#f51818;font-size:12px"><i class="fa fa-envelope-o"></i>
                  </a>
                </div>
              </div>

              <?php
              $rol=4;
              if($rol==1)
              {
                include 'headerContent/menuOficialia.php';
              }
              else if ($rol==2)
              {
                include 'headerContent/menuSecretaria.php';
              }
              else if ($rol==3)
              {
                include 'headerContent/menuDepartamentos.php';
              }
              else if ($rol==4)
              {
                include 'headerContent/menuSolicitante.php';
              }
              else
              {
                include 'headerContent/menuVisitante.php';
              }
              ?>

              <div class="btn-toggle-nav pull-right">
                <button type="button" class="btn menu-btn" data-toggle="collapse" data-target=".nav-collapse" title="Abrir el menú" aria-label="Abrir el menú">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                </button>
              </div>               
            </div><!-- /.row-fluid -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar resp -->
      </div><!-- /.navbar-wrapper -->
    </header>
