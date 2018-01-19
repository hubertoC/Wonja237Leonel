<?php

/* ::base.html.twig */
class __TwigTemplate_36695ba9b7ca22178385ee0840815ded1bd0f307be84676f27fc705f26bc1f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'link' => array($this, 'block_link'),
            'nav' => array($this, 'block_nav'),
            'cathegorie' => array($this, 'block_cathegorie'),
            'activite' => array($this, 'block_activite'),
            'pub' => array($this, 'block_pub'),
            'partenaire' => array($this, 'block_partenaire'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e978fdd6e1987a1e2b751175040871eddae6c6e029d3a2a941d00ec6e95d71b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e978fdd6e1987a1e2b751175040871eddae6c6e029d3a2a941d00ec6e95d71b9->enter($__internal_e978fdd6e1987a1e2b751175040871eddae6c6e029d3a2a941d00ec6e95d71b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head onLoad=window.open( ........)>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>Wonja237</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"Hubert Tegang Foyang\" content=\"\">
    ";
        // line 9
        $this->displayBlock('link', $context, $blocks);
        // line 10
        echo "
    <!-- Stylesheet
    ================================================== -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" media=\"screen and (max-width: 640px)\" href=\"\" type=\"text/css\"/>

    <!-- publicite2
    ================================================== -->
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
    <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
    <meta charset='UTF-8'>
    <meta name=\"robots\" content=\"noindex\">
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css'>

    <!-- publicite2 fin
    ================================================== -->

    <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">

  </head>

  <body >
    <script type=\"text/javascript\">
      jQuery(document).ready(function() {
        \$(\".more\").hide();
        jQuery('.button-read-more').click(function() {
          \$(this).closest('.less').addClass('active');
          \$(this).closest(\".less\").prev().stop(true).slideDown(\"1000\");
        });
        jQuery('.button-read-less').click(function() {
          \$(this).closest('.less').removeClass('active');
          \$(this).closest(\".less\").prev().stop(true).slideUp(\"1000\");
        });
      });
    </script>
    <style>
      .button-read-less,
      .less.active .button-read-more {
        display: none;
      }
      .less.active .button-read-less {
        display: block;
      }
      .more {
        margin-top: 10px;
      }
      .more p {
        margin: 0;
        padding: 0;
      }
    </style>
    <div class=\"hidden-xs\"id=\"boxes\">
      <div style=\"top: 199.5px; left: 551.5px; display: none;\" id=\"dialog\" class=\"window\">
        Guide d'utilisation de wonja
        <div id=\"lorem\">

          <p>
            <span class=\"gudeTitle\">1. Accueil</span><br>
            Ici, découvrez la première fenêtre de Wonja237 et ayez la possibilité de rechercher directement un artiste à Booker en écrivant juste son nom dans la barre intuitive. Dès que vous commencerez à saisir, des suggestions apparaîtront pour vous
            faciliter la recherche.
            <span class=\"gudeTitle\">2.Catégories</span><br>
            Les catégories vous permettent de chercher un profil précis d'artiste. Le choix ici porte sur le profil que vous désirez, les artistes ici sont donc regroupés.

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">3. Actualités</span><br>

                  Soyez au courant de toute l'actualité des artistes présents sur Wonja237 pour suivre au mieux les talents promus par cette plate-forme. Cliquez sur l'actualité qui vous interesse pour la developpervet mieux lire les informations.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">3. Actualités</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">4. Partenaires</span><br>

                  Découvrez ici la liste de tous ceux qui croient en la vision de Wonja237 et là soutiennent....n'hésitez pas à cliquer dessus pour plus amples informations.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">4. Partenaires</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">5. Newsletter</span><br>

                  Insérez votre adresse mail, et soyez au courant de toutes les actualités et évolution de la plate-forme. V ous pourrez à tout moment vous désinscrire depuis votre boite mail si vous le souhaitez.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">5. Newsletter</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">6. Contacts</span><br>

                  N'hésitez pas à nous laisser un message au cas où vous rencontrez un problème sur la plate-forme ou à nous faire parvenir vos remarques, vos critiques, et vos suggestions.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">6. Contacts</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">7. Page d'artiste</span><br>

                  A yez des informations détaillées sur l'artiste de votre choix. n'hésitez pas à le noter, à regarder sa vidéo, à lire sa description, à commenter dt à répondre aux commentaires d'autres avant vous.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">7. Page d'artiste</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">8. Inscriptions</span><br>

                  Tout artiste est libre de solliciter un espace survola page juste en donnant quelques informations sur sa personnevet sur ses capacités artistiques.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">8. Inscriptions</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">9. les publicités</span><br>
                  Tout artiste est libre de solliciter un espace survola page juste en donnant quelques informations sur sa personnevet sur ses capacités artistiques.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">9. les publicités</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

          </p>
        </div>
        <div id=\"popupfoot\">
          <a class=\"agree\" style=\"color:red;\" href=\"#\">
            <span class=\"guideFin\">
              Merci et bonne visite de votre site web... Feel Free, be free!</span>
          </a>
        </div>
      </div>
      <div style=\"width: 1478px; font-size: 32pt; color:#000; height: 602px; display: none; opacity: 0.8;\" id=\"mask\"></div>
    </div>
    <script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main1.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol
          ? 'https://ssl'
          : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
    ";
        // line 214
        $this->displayBlock('nav', $context, $blocks);
        // line 215
        echo "
    <!-- Header -->


    ";
        // line 219
        $this->displayBlock('cathegorie', $context, $blocks);
        // line 220
        echo "  </div>
</header>

";
        // line 223
        $this->displayBlock('activite', $context, $blocks);
        // line 224
        echo "<div class=\"clearfix1\" style=\"color:#c7c7c7;\">
  X
</div>
";
        // line 227
        $this->displayBlock('pub', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('partenaire', $context, $blocks);
        // line 230
        echo "<div class=\"\" id=\"Newsletter \">
  ";
        // line 231
        $this->loadTemplate("HZWonja237Bundle:ArtistePublic:newsLetter.html.twig", "::base.html.twig", 231)->display($context);
        // line 232
        echo "</div>

<footer class=\"site-footer section-spacing text-center \" id=\"eight\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4\"></br>
      <p class=\"footer-links\">
        <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/websoft.png"), "html", null, true);
        echo "\" alt=\"\" class=\"websoftLogo\">
      </p>

    </div>

    <div class=\"col-md-4 wonjaReserved\"></br>
    <small>&copy; 2017 Wonja237 reserved.</small>
  </div>
  <div class=\"col-md-4\"></br>
  <ul class=\"social\">
    <li>
      <a href=\"https://twitter.com/wonja_Elle\" target=\"_blank\">
        <i class=\"fa fa-twitter \"></i>
      </a>
    </li>
    <li>
      <a href=\"https://www.facebook.com/FeelBefree/\" target=\"_blank\">
        <i class=\"fa fa-facebook\"></i>
      </a>
    </li>
    <li>
      <a href=\"https://www.youtube.com/channel/UCLz84ljmJDyl8HToevivDNQ\" target=\"_blank\">
        <i class=\"fa fa-youtube-play\"></i>
      </a>
    </li>
  </ul>
</br>

</div>
</div>
</div>
</footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.1.11.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.isotope.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cath.js"), "html", null, true);
        echo "\"></script>

</body>
";
        
        $__internal_e978fdd6e1987a1e2b751175040871eddae6c6e029d3a2a941d00ec6e95d71b9->leave($__internal_e978fdd6e1987a1e2b751175040871eddae6c6e029d3a2a941d00ec6e95d71b9_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_143432ac0b822be913f87d070643e4b1b4fa3e9d9606af50c3136ecae8d39b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143432ac0b822be913f87d070643e4b1b4fa3e9d9606af50c3136ecae8d39b53->enter($__internal_143432ac0b822be913f87d070643e4b1b4fa3e9d9606af50c3136ecae8d39b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        
        $__internal_143432ac0b822be913f87d070643e4b1b4fa3e9d9606af50c3136ecae8d39b53->leave($__internal_143432ac0b822be913f87d070643e4b1b4fa3e9d9606af50c3136ecae8d39b53_prof);

    }

    // line 214
    public function block_nav($context, array $blocks = array())
    {
        $__internal_cf997a7929014a7caafc516d5367aeac275f2d33c5e2b56265a02f3afd80aa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf997a7929014a7caafc516d5367aeac275f2d33c5e2b56265a02f3afd80aa1f->enter($__internal_cf997a7929014a7caafc516d5367aeac275f2d33c5e2b56265a02f3afd80aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_cf997a7929014a7caafc516d5367aeac275f2d33c5e2b56265a02f3afd80aa1f->leave($__internal_cf997a7929014a7caafc516d5367aeac275f2d33c5e2b56265a02f3afd80aa1f_prof);

    }

    // line 219
    public function block_cathegorie($context, array $blocks = array())
    {
        $__internal_ae3ba1eeb474c389eb6045f949c6170b1497688df93191b3989a822aef102669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3ba1eeb474c389eb6045f949c6170b1497688df93191b3989a822aef102669->enter($__internal_ae3ba1eeb474c389eb6045f949c6170b1497688df93191b3989a822aef102669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cathegorie"));

        
        $__internal_ae3ba1eeb474c389eb6045f949c6170b1497688df93191b3989a822aef102669->leave($__internal_ae3ba1eeb474c389eb6045f949c6170b1497688df93191b3989a822aef102669_prof);

    }

    // line 223
    public function block_activite($context, array $blocks = array())
    {
        $__internal_bcc56f9ccac9be1e2f299ef5e96e6ac6765423a519868f89425e47f309e57ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc56f9ccac9be1e2f299ef5e96e6ac6765423a519868f89425e47f309e57ba2->enter($__internal_bcc56f9ccac9be1e2f299ef5e96e6ac6765423a519868f89425e47f309e57ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "activite"));

        
        $__internal_bcc56f9ccac9be1e2f299ef5e96e6ac6765423a519868f89425e47f309e57ba2->leave($__internal_bcc56f9ccac9be1e2f299ef5e96e6ac6765423a519868f89425e47f309e57ba2_prof);

    }

    // line 227
    public function block_pub($context, array $blocks = array())
    {
        $__internal_2ee4babdca1e6b417cdbc0fe3af6a494b04937ab3ffec1fa5d3f9700028504b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee4babdca1e6b417cdbc0fe3af6a494b04937ab3ffec1fa5d3f9700028504b2->enter($__internal_2ee4babdca1e6b417cdbc0fe3af6a494b04937ab3ffec1fa5d3f9700028504b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pub"));

        
        $__internal_2ee4babdca1e6b417cdbc0fe3af6a494b04937ab3ffec1fa5d3f9700028504b2->leave($__internal_2ee4babdca1e6b417cdbc0fe3af6a494b04937ab3ffec1fa5d3f9700028504b2_prof);

    }

    // line 229
    public function block_partenaire($context, array $blocks = array())
    {
        $__internal_a273c865ee280dd13e8bdb1617f64efd34eac71112d19a1fea4ef507db392a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a273c865ee280dd13e8bdb1617f64efd34eac71112d19a1fea4ef507db392a87->enter($__internal_a273c865ee280dd13e8bdb1617f64efd34eac71112d19a1fea4ef507db392a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaire"));

        
        $__internal_a273c865ee280dd13e8bdb1617f64efd34eac71112d19a1fea4ef507db392a87->leave($__internal_a273c865ee280dd13e8bdb1617f64efd34eac71112d19a1fea4ef507db392a87_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 229,  424 => 227,  413 => 223,  402 => 219,  391 => 214,  380 => 9,  369 => 280,  365 => 279,  361 => 278,  357 => 277,  353 => 276,  349 => 275,  345 => 274,  341 => 273,  305 => 240,  295 => 232,  293 => 231,  290 => 230,  288 => 229,  285 => 228,  283 => 227,  278 => 224,  276 => 223,  271 => 220,  269 => 219,  263 => 215,  261 => 214,  238 => 194,  74 => 33,  69 => 31,  49 => 14,  45 => 13,  40 => 10,  38 => 9,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head onLoad=window.open( ........)>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>Wonja237</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"Hubert Tegang Foyang\" content=\"\">
    {% block link %}{% endblock %}

    <!-- Stylesheet
    ================================================== -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/prettyPhoto.css') }}\">
    <link rel=\"stylesheet\" media=\"screen and (max-width: 640px)\" href=\"\" type=\"text/css\"/>

    <!-- publicite2
    ================================================== -->
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
    <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
    <meta charset='UTF-8'>
    <meta name=\"robots\" content=\"noindex\">
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css'>

    <!-- publicite2 fin
    ================================================== -->

    <script type=\"text/javascript\" src=\"{{ asset('js/modernizr.custom.js') }}\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/main.css') }}\">

  </head>

  <body >
    <script type=\"text/javascript\">
      jQuery(document).ready(function() {
        \$(\".more\").hide();
        jQuery('.button-read-more').click(function() {
          \$(this).closest('.less').addClass('active');
          \$(this).closest(\".less\").prev().stop(true).slideDown(\"1000\");
        });
        jQuery('.button-read-less').click(function() {
          \$(this).closest('.less').removeClass('active');
          \$(this).closest(\".less\").prev().stop(true).slideUp(\"1000\");
        });
      });
    </script>
    <style>
      .button-read-less,
      .less.active .button-read-more {
        display: none;
      }
      .less.active .button-read-less {
        display: block;
      }
      .more {
        margin-top: 10px;
      }
      .more p {
        margin: 0;
        padding: 0;
      }
    </style>
    <div class=\"hidden-xs\"id=\"boxes\">
      <div style=\"top: 199.5px; left: 551.5px; display: none;\" id=\"dialog\" class=\"window\">
        Guide d'utilisation de wonja
        <div id=\"lorem\">

          <p>
            <span class=\"gudeTitle\">1. Accueil</span><br>
            Ici, découvrez la première fenêtre de Wonja237 et ayez la possibilité de rechercher directement un artiste à Booker en écrivant juste son nom dans la barre intuitive. Dès que vous commencerez à saisir, des suggestions apparaîtront pour vous
            faciliter la recherche.
            <span class=\"gudeTitle\">2.Catégories</span><br>
            Les catégories vous permettent de chercher un profil précis d'artiste. Le choix ici porte sur le profil que vous désirez, les artistes ici sont donc regroupés.

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">3. Actualités</span><br>

                  Soyez au courant de toute l'actualité des artistes présents sur Wonja237 pour suivre au mieux les talents promus par cette plate-forme. Cliquez sur l'actualité qui vous interesse pour la developpervet mieux lire les informations.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">3. Actualités</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">4. Partenaires</span><br>

                  Découvrez ici la liste de tous ceux qui croient en la vision de Wonja237 et là soutiennent....n'hésitez pas à cliquer dessus pour plus amples informations.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">4. Partenaires</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">5. Newsletter</span><br>

                  Insérez votre adresse mail, et soyez au courant de toutes les actualités et évolution de la plate-forme. V ous pourrez à tout moment vous désinscrire depuis votre boite mail si vous le souhaitez.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">5. Newsletter</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">6. Contacts</span><br>

                  N'hésitez pas à nous laisser un message au cas où vous rencontrez un problème sur la plate-forme ou à nous faire parvenir vos remarques, vos critiques, et vos suggestions.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">6. Contacts</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">7. Page d'artiste</span><br>

                  A yez des informations détaillées sur l'artiste de votre choix. n'hésitez pas à le noter, à regarder sa vidéo, à lire sa description, à commenter dt à répondre aux commentaires d'autres avant vous.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">7. Page d'artiste</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">8. Inscriptions</span><br>

                  Tout artiste est libre de solliciter un espace survola page juste en donnant quelques informations sur sa personnevet sur ses capacités artistiques.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">8. Inscriptions</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

            <div class=\"toggle\">
              <div class=\"more\">
                <p>
                  <br>
                  <span class=\"gudeTitle\">9. les publicités</span><br>
                  Tout artiste est libre de solliciter un espace survola page juste en donnant quelques informations sur sa personnevet sur ses capacités artistiques.
                </p>
              </div>
              <div class=\"less\">
                <a class=\"button-read-more button-read\" href=\"#read\">9. les publicités</a>
                <a class=\"button-read-less button-read\" href=\"#read\">Replier</a>
              </div>
            </div>

          </p>
        </div>
        <div id=\"popupfoot\">
          <a class=\"agree\" style=\"color:red;\" href=\"#\">
            <span class=\"guideFin\">
              Merci et bonne visite de votre site web... Feel Free, be free!</span>
          </a>
        </div>
      </div>
      <div style=\"width: 1478px; font-size: 32pt; color:#000; height: 602px; display: none; opacity: 0.8;\" id=\"mask\"></div>
    </div>
    <script type=\"text/javascript\" src=\"{{ asset('js/main1.js') }}\"></script>

    <script type=\"text/javascript\">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol
          ? 'https://ssl'
          : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
    {% block nav %}{% endblock %}

    <!-- Header -->


    {% block cathegorie %}{% endblock %}
  </div>
</header>

{% block activite %}{% endblock %}
<div class=\"clearfix1\" style=\"color:#c7c7c7;\">
  X
</div>
{% block pub %}{% endblock %}

{% block partenaire %}{% endblock %}
<div class=\"\" id=\"Newsletter \">
  {% include 'HZWonja237Bundle:ArtistePublic:newsLetter.html.twig' %}
</div>

<footer class=\"site-footer section-spacing text-center \" id=\"eight\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4\"></br>
      <p class=\"footer-links\">
        <img src=\"{{ asset('images/websoft.png') }}\" alt=\"\" class=\"websoftLogo\">
      </p>

    </div>

    <div class=\"col-md-4 wonjaReserved\"></br>
    <small>&copy; 2017 Wonja237 reserved.</small>
  </div>
  <div class=\"col-md-4\"></br>
  <ul class=\"social\">
    <li>
      <a href=\"https://twitter.com/wonja_Elle\" target=\"_blank\">
        <i class=\"fa fa-twitter \"></i>
      </a>
    </li>
    <li>
      <a href=\"https://www.facebook.com/FeelBefree/\" target=\"_blank\">
        <i class=\"fa fa-facebook\"></i>
      </a>
    </li>
    <li>
      <a href=\"https://www.youtube.com/channel/UCLz84ljmJDyl8HToevivDNQ\" target=\"_blank\">
        <i class=\"fa fa-youtube-play\"></i>
      </a>
    </li>
  </ul>
</br>

</div>
</div>
</div>
</footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.1.11.1.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/SmoothScroll.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.prettyPhoto.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.isotope.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jqBootstrapValidation.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/main.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/cath.js') }}\"></script>

</body>
", "::base.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/base.html.twig");
    }
}
