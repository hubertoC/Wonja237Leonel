<?php

/* HZWonja237Bundle:ArtistePublic:index.html.twig */
class __TwigTemplate_f962366a781afcfbcde9ff8b08f2daeab6a998c8433b19cde461a29de2bda7fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "HZWonja237Bundle:ArtistePublic:index.html.twig", 1);
        $this->blocks = array(
            'link' => array($this, 'block_link'),
            'nav' => array($this, 'block_nav'),
            'activite' => array($this, 'block_activite'),
            'pub' => array($this, 'block_pub'),
            'partenaire' => array($this, 'block_partenaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_link($context, array $blocks = array())
    {
        // line 4
        echo "  <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/thumbnail.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <link rel=\"apple-touch-icon\" href=\"img/apple-touch-icon.png\">
  <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"img/apple-touch-icon-72x72.png\">
  <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"img/apple-touch-icon-114x114.png\">

  <!-- Bootstrap -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <script src=\"https://code.jquery.com/jquery-1.10.2.js\"></script>
  ";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        // line 80
        echo "  <section>

    <div class=\"row\">
      <div class=\"col-md-12 carous\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
          </ol>
          <div class=\"carousel-inner\">
            <div class=\"item active\">
              <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/imgm2.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
            </div>
            <div class=\"item\">
              <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/imgm3.jpeg"), "html", null, true);
        echo "\" alt=\"Second slide\">
            </div>
            <div class=\"item\">
              <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/imgm4.jpeg"), "html", null, true);
        echo "\" alt=\"Second slide\">
            </div>

          </div>
        </div>
        <div class=\"main-text\">
          <br><br><br>

          <div class=\"col-md-12 text-center\">

            <h1>
              <span class=\"color\">RÉSERVER VOS ARTISTES</span>
            </h1>

            <div class=\"clearfix\"></div>

            <div class=\"form-group\" id=\"searchForm\">
              <input type=\"text\" id=\"search\" class=\"control_text\" placeholder=\"Nom de l'artiste\">
              <button type=\"submit\" class=\"btn btn-default btn-lg page-scroll hidden-xs hidden-sm\">Rechercher</button>
              <ul class=\"nav\" id=\"recherche\">
                <li>
                  <center>
                    <ul  style=\"background-color:#ff1;\"class=\"nav nav-second-leve\" id=\"entitiesNav\"></ul>
                    <center>
                    </li>
                  </ul>
            </div>

            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

          <script type=\"text/javascript\">
          jQuery(document).ready(function() {
          var searchRequest = null;
          \$(\"#search\").keyup(function() {
           var minlength = 3;
           var that = this;
           var value = \$(this).val();
           var entitySelector = \$(\"#entitiesNav\").html('');
           if (value.length >= minlength) {
             if (searchRequest != null)
               searchRequest.abort();
             searchRequest = \$.ajax({
               type: \"GET\",
               url: \"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search");
        echo "\",
               data: {
                 'q': value
               },
               dataType: \"text\",
               success: function(msg) {
                 //we need to check if the value is the same
                 if (value == \$(that).val()) {
                   var result = JSON.parse(msg);
                   \$.each(result, function(key, arr) {
                     \$.each(arr, function(id, value) {
                       if (key == 'entities') {
                         if (id != 'error') {
                           entitySelector.append('<div ><li><a href=\"/artisteProfile/' + id + '\">' + value + '</a></li></div>');
                         } else {
                           entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                         }
                       }
                     });
                   });
                 }
               }
             });
           }
          });
          });
          </script>
                ";
        // line 168
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "has", array(0 => "user-notice"), "method")) {
            // line 169
            echo "                  <div class=\"alert alert-success\">
                    ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "user-notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 171
                echo "                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

                        <span aria-hidden=\"true\">&times;
                        </span>
                        <span class=\"sr-only\">Close</span>
                      </button>
                      <a href=\"/\" class=\"alert-link\">";
                // line 177
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</a>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                  </div>
                ";
        }
        // line 182
        echo "                <br><br><br><br>
                <div class=\"row hidden-xs hidden-sm \" id=\"categorie\">

                  ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 186
            echo "                    <div class=\"teste\">
                      <a href=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_categoryArtiste", array("category" => $this->getAttribute($context["category"], "id", array()), "name" => $this->getAttribute($context["category"], "name", array()))), "html", null, true);
            echo "\">

                        <img src=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["category"], "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive img-center\">
                        <div class=\"overlay\">
                          <div class=\"text\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</div>
                        </div>
                        <p class=\"text-center\" style=\"background-color:#fff; color:#000; padding-left:1.5em; padding-right:1.5em;\">
                          <a href=\"javascript:void(0);\" >";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                        </p>
                      </a>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "
                </div>
              </section>

              <section class=\"categoryPhone\">
                <div class=\"activite_title\" id=\"categoryPhone\">
                  <h1>CATÉGORIES</h1>
                </div>
                <div class=\"row\" id=\"categoryPhone\">

                  ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 210
            echo "                    <div class=\"teste\">
                      <a href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_categoryArtiste", array("category" => $this->getAttribute($context["category"], "id", array()), "name" => $this->getAttribute($context["category"], "name", array()))), "html", null, true);
            echo "\">

                      <img src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["category"], "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive img-center\">
                      <div class=\"overlay\">
                        <div class=\"text\">";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</div>
                      </div>
                      <p class=\"text-center\" style=\"background-color:#fff; color:#000; padding-left:1.5em; padding-right:1.5em;\">
                        <a href=\"javascript:void(0);\" >";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                      </p>
                    </a>
                    </div>

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "
                </div>

              </section>
            ";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        // line 16
        echo "
    <!-- Navigation
  ==========================================-->
    <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_homepage");
        echo "\">
            <span class=\"themecolor\">Wonja</span><span class=\"vert\">2</span><span class=\"rouge\">3</span><span class=\"jaune\">7</span></a>

          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_homepage");
        echo "\" class=\"page-scroll\">Accueil</a>
            </li>

            <li id=\"image-neon\">
              <script type=\"text/javascript\">
                function FaireClignoterImage() {
                  \$(\"#image-neon\").fadeOut(200).delay(200).fadeIn(2000);
                }
                \$(document).ready(function() {
                  setInterval('FaireClignoterImage()', 200);
                });
              </script>
              <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237bundle_enregistrement");
        echo "\" id=\"#test\" class=\"page-scroll guide\">S'inscrire</a>

            </li>

            <li>
              <a href=\"#categorie\" class=\"page-scroll\">Catégories</a>
            </li>
            <li>
              <a href=\"#about-actualités\" class=\"page-scroll\">Actualités</a>
            </li>
            <li>
              <a href=\"#about-Partenaire\" class=\"page-scroll\">Partenaire</a>
            </li>

            <li>
              <a href=\"#Newsletter\" class=\"page-scroll\">Newsletter</a>
            </li>
            <li>
              <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237bundle_contact");
        echo "\" class=\"page-scroll\">Contact</a>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

  ";
    }

    // line 230
    public function block_activite($context, array $blocks = array())
    {
        // line 231
        echo "
              <section>
                <div class=\"activite_title\" id=\"about-actualités\">
                  <h1>Actualités</h1>
                </div>
                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

                  <div class=\"col-md-7 padding-0\">
                    <div class=\"\">
                      <a href=\"/w3images/fjords.jpg\">

                        <div class=\"carousel-inner\" id=\"carouselGrand\">

                          ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actualite"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 245
            echo "                            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 246
                echo "                              <div class=\"item active\">
                                <img src=\"";
                // line 247
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
                echo "\">
                                <div class=\"carousel-caption\">
                                  <h4>
                                    <a href=\"#\">";
                // line 250
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</a>
                                    <!-- Lorem ipsum dolor sit amet consetetur sadipscing -->
                                  </h4>

                                  <p>";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
                echo "
                                  </p>
                                </div>
                              </div>
                            ";
            } else {
                // line 259
                echo "                              <div class=\"item\">
                                <img src=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
                echo "\">
                                <div class=\"carousel-caption\">
                                  <h4>
                                    <a href=\"#\">";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</a>
                                  </h4>
                                  <p>";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
                echo "
                                  </p>
                                </div>
                              </div>
                            ";
            }
            // line 270
            echo "                          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                          <!-- End Item -->
                        </div>

                      </a>
                    </div>
                  </div>

                  <div class=\"col-md-5 padding-0 \">
                    <div class=\"actualitePetit\">
                      <a href=\"/w3images/fjords.jpg\">
                        <ul class=\"list-group\">
                          ";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actualite"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 283
            echo "                            ";
            $context["index"] = ($this->getAttribute($context["loop"], "index", array()) - 1);
            // line 284
            echo "                            <li data-target=\"#myCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\" class=\"active\">
                              <a class=\"\" id=\"carousel-selector-";
            // line 285
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
            echo "\"></a>
                              <center>
                                <h5>
                                  ";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "
                                </h5>
                              </center>
                              <div class=\"contentActualite\">
                                <span >
                              ";
            // line 293
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "
                                </span>
                              </div>
                              <!--    Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquipex ea commodo consequat. Excepteur sint occaecat cupidatat non -->
                            </li>
                          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        echo "                        </ul>

                      </a>
                    </div>
                  </div>
                </div>
              </section>

            ";
    }

    // line 309
    public function block_pub($context, array $blocks = array())
    {
        // line 310
        echo "              <div class=\"\">
                ";
        // line 311
        $this->loadTemplate("HZWonja237Bundle:ArtistePublic:publiciteCarousel.html.twig", "HZWonja237Bundle:ArtistePublic:index.html.twig", 311)->display($context);
        // line 312
        echo "              </div>

            ";
    }

    // line 316
    public function block_partenaire($context, array $blocks = array())
    {
        // line 317
        echo "            <div class=\"clearfix1\" style=\"padding-bottom:5em; color:#c7c7c7;\">
              X
            </div>
              <div class=\"partenaire\" style=\"color:#fff;\" id=\"about-Partenaire\">
                ";
        // line 321
        $this->loadTemplate("HZWonja237Bundle:ArtistePublic:partenaire.html.twig", "HZWonja237Bundle:ArtistePublic:index.html.twig", 321)->display($context);
        // line 322
        echo "
              </div>



            ";
    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 322,  573 => 321,  567 => 317,  564 => 316,  558 => 312,  556 => 311,  553 => 310,  550 => 309,  538 => 299,  518 => 293,  510 => 288,  502 => 285,  497 => 284,  494 => 283,  477 => 282,  464 => 271,  450 => 270,  442 => 265,  437 => 263,  431 => 260,  428 => 259,  420 => 254,  413 => 250,  407 => 247,  404 => 246,  401 => 245,  384 => 244,  369 => 231,  366 => 230,  351 => 69,  330 => 51,  315 => 39,  302 => 29,  287 => 16,  284 => 15,  276 => 224,  264 => 218,  258 => 215,  253 => 213,  248 => 211,  245 => 210,  241 => 209,  229 => 199,  218 => 194,  212 => 191,  207 => 189,  202 => 187,  199 => 186,  195 => 185,  190 => 182,  186 => 180,  177 => 177,  169 => 171,  165 => 170,  162 => 169,  160 => 168,  130 => 141,  84 => 98,  78 => 95,  72 => 92,  58 => 80,  56 => 15,  49 => 11,  45 => 10,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/index.html.twig");
    }
}
