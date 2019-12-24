<!-- FOOTER -->
<?php
include 'footerContent/script.php';
?>

<div id="tc-footer-btt-wrapper" class="tc-btt-wrapper right">
  <i class="btt-arrow"></i>
</div>

<footer id="footer" class="">
  <div class="container footer-widgets ">
    <div class="row widget-area" role="complementary">
      <div id="footer_one" class="span4">
        <aside id="wpcw_contact-8" class="widget wpcw-widgets wpcw-widget-contact">
          <h3 class="widget-title">
            Presidencia Municipal
          </h3>

          <ul>
            <li class="has-label">
              <strong>
                Email
              </strong>
              <br>

              <div>
                <a href="mailto:pr&#101;&#115;&#105;&#100;&#101;ncia&#64;&#97;hu&#97;&#99;a&#116;&#108;an&#97;&#118;a&#110;&#122;&#97;&#46;&#103;ob&#46;mx">
                  pr&#101;&#115;&#105;&#100;&#101;ncia&#64;&#97;hu&#97;&#99;a&#116;&#108;an&#97;&#118;a&#110;&#122;&#97;&#46;&#103;ob&#46;mx
                </a>
              </div>
            </li>

            <li class="has-label">
              <strong>
                Tel&eacute;fono
              </strong>
              <br>

              <div>
                (324)241 1254
              </div>
            </li>

            <li class="has-label">
              <strong>
                Direcci&oacute;n
              </strong>
              <br>

              <div>
                Calle Hidalgo s/n, Centro, 63900
                <br/>
                Ahuacatl&aacute;n, Nayarit
              </div>
            </li>
          </ul>
        </aside>
      </div><!-- .{$key}_widget_class -->

      <div id="footer_two" class="span4">
        <aside id="nav_menu-5" class="widget widget_nav_menu">
          <h3 class="widget-title">
            Navegaci&oacute;n
          </h3>

          <?php

              if($rolUsuarioSesion==1)
              {
                include 'footerContent/menuOficialia.php';
              }
              else if ($rolUsuarioSesion==2)
              {
                include 'footerContent/menuSecretaria.php';
              }
              else if ($rolUsuarioSesion==3)
              {
                include 'footerContent/menuDepartamentos.php';
              }
              else if ($rolUsuarioSesion==4)
              {
                include 'footerContent/menuSolicitante.php';
              }
              else
              {
                include 'footerContent/menuVisitante.php';
              }
              ?>
        </aside>
      </div><!-- .{$key}_widget_class -->

      <div id="footer_three" class="span4">
        <aside id="search-6" class="widget widget_search">
          <h3 class="widget-title">
            B&uacute;squeda
          </h3>

          <form role="search" method="get" id="searchform" class="searchform" action="http://ahuacatlanavanza.gob.mx/">
            <div>
              <label class="screen-reader-text" for="s">
                Buscar:
              </label>

              <input type="text" value="" name="s" id="s" />
              <input type="submit" id="searchsubmit" value="Buscar" />
            </div>
          </form>
        </aside>
      </div><!-- .{$key}_widget_class -->
    </div><!-- .row.widget-area -->
  </div><!--.footer-widgets -->

  <div class="colophon">
    <div class="container">
      <div class="row-fluid">
        <div class="span3 social-block pull-left">
          <span class="social-links">
            <a rel="nofollow" class="social-icon icon-facebook"  title="Síguenos Facebook" aria-label="Síguenos Facebook" href="https://www.facebook.com/XLIAyuntamientoAhuacatlan/"  target="_blank"  style="color:#f51818;font-size:12px">
              <i class="fa fa-facebook">
              </i>
            </a>

            <a rel="nofollow" class="social-icon icon-twitter"  title="Síguenos Twitter" aria-label="Síguenos Twitter" href="javascript:void(0)"  target="_blank"  style="color:#f51818;font-size:12px">
              <i class="fa fa-twitter">
              </i>
            </a>

            <a rel="nofollow" class="social-icon icon-youtube"  title="Síguenos Youtube" aria-label="Síguenos Youtube" href="javascript:void(0)"  target="_blank"  style="color:#f51818;font-size:12px">
              <i class="fa fa-youtube">
              </i>
            </a>

            <a rel="nofollow" class="social-icon icon-instagram"  title="Síguenos Instagram" aria-label="Síguenos Instagram" href="javascript:void(0)"  target="_blank"  style="color:#f51818;font-size:12px">
              <i class="fa fa-instagram">
              </i>
            </a>

            <a rel="nofollow" class="social-icon icon-phone"  title="(324)2411254" aria-label="(324)2411254" href="tel:324-241-1254"  target="_blank"  style="color:#f51818;font-size:12px">
              <i class="fa fa-phone">
              </i>
            </a>

            <a rel="nofollow" class="social-icon icon-mail-o"  title="Email" aria-label="Email" href="mailto:ahuacatlanavanza@gmail.com"  target="_blank"  style="color:#f51818;font-size:12px">
              <i class="fa fa-envelope-o">
              </i>
            </a>
          </span>
        </div>

        <div class="span6 credits">
          <p>
            &middot;
            <span class="tc-copyright-text">
              &copy; 2019
            </span>
            <a href="http://ahuacatlanavanza.gob.mx" title="XLI Ayuntamiento de Ahuacatlán Nayarit " rel="bookmark">
              XLI Ayuntamiento de Ahuacatl&aacute;n Nayarit
            </a>
            &middot;
            <span class="tc-wp-powered-text">
              Creado con
            </span>
            <a class="icon-wordpress" target="_blank" href="https://wordpress.org" title="Creado con WordPress">
            </a>
            &middot;
            <span class="tc-credits-text">
              Diseñado con el
              <a class="czr-designer-link" href="https://presscustomizr.com/customizr" title="Tema Customizr">
                Tema Customizr
              </a>
            </span>
            &middot;
          </p>
        </div>
      </div><!-- .row-fluid -->
    </div><!-- .container -->
  </div><!-- .colophon -->
</footer>
