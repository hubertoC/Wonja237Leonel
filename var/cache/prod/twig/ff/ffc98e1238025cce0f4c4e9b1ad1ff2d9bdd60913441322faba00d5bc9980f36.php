<?php

/* HZWonja237Bundle:ArtistePublic:publiciteCarousel.html.twig */
class __TwigTemplate_0747576f4d6852ffd2e3ab8e02fcffc6a833795560ff12a01fdf77acbe2c1867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"publicite1\">

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/publicite.css"), "html", null, true);
        echo "\">

  <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
  <section class=\"team-sec\">
    <div class=\"container\">
      <div class=\"row\">
        <div id=\"carousel-example\" class=\"carousel slide team team-web-view\" data-ride=\"carousel\">
          <div class=\"carousel-line\">
            <div class=\"controls pull-right\">
              <a class=\"left fa fa-angle-left btn\" href=\"#carousel-example\" data-slide=\"prev\"></a>
              <a class=\"right fa fa-angle-right btn \" href=\"#carousel-example\" data-slide=\"next\"></a>
            </div>
          </div>
          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\">

            <div class=\"item active\">
              <div class=\"row\">

                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publicitesDefile"] ?? null));
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
            // line 23
            echo "                  ";
            $context["index"] = ($this->getAttribute($context["loop"], "index", array()) - 1);
            // line 24
            echo "                  ";
            if ((($context["index"] ?? null) < 4)) {
                // line 25
                echo "                  <div class=\"col-sm-3\">
                    <div class=\"col-item\">
                      <div class=\"\"></div>
                      <div class=\"photo\">
                        <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                        <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "webPath", array())), "html", null, true);
                echo "\" class=\"img-responsive\" style=\"height:100%\">
                        </a>
                      </div>
                      <div class=\"info\">
                        <div class=\"name\"></div>
                        <div class=\"degination\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"social-connect\">
                          <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "facebook", array()), "html", null, true);
                echo "\" target=\"_blank\">
                            <i class=\"fa fa-facebook\"></i>
                          </a>
                          <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "twiter", array()), "html", null, true);
                echo "\" target=\"_blank\">
                            <i class=\"fa fa-twitter\"></i>
                          </a>
                          <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "instagram", array()), "html", null, true);
                echo "\" target=\"_blank\">
                            <i class=\"fa fa-instagram\"></i>
                          </a>

                        </div>
                        <div class=\"clearfix\"></div>
                      </div>
                    </div>
                  </div>
                  ";
            }
            // line 54
            echo "                ";
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
        // line 55
        echo "
              </div>
            </div>

            <div class=\"item\">
              <div class=\"row\">
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publicitesDefile"] ?? null));
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
            // line 62
            echo "                  ";
            $context["index"] = ($this->getAttribute($context["loop"], "index", array()) - 1);
            // line 63
            echo "                  ";
            if ((($context["index"] ?? null) >= 4)) {
                // line 64
                echo "                    <div class=\"col-sm-3\">
                      <div class=\"col-item\">
                        <div class=\"photo\">
                          <img src=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "webPath", array())), "html", null, true);
                echo "\" class=\"img-responsive\" style=\"height:100%\">
                        </div>
                        <div class=\"info\">
                          <div class=\"name\"></div>
                          <div class=\"degination\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</div>
                          <div class=\"social-connect\">
                            <a href=\"javascript:void(0);\">
                              <i class=\"fa fa-facebook\"></i>
                            </a>
                            <a href=\"javascript:void(0);\">
                              <i class=\"fa fa-twitter\"></i>
                            </a>
                            <a href=\"javascript:void(0);\">
                              <i class=\"fa fa-instagram\"></i>
                            </a>
                          </div>
                          <div class=\"clearfix\"></div>
                        </div>
                      </div>
                    </div>

                  ";
            }
            // line 89
            echo "                ";
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
        // line 90
        echo "              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

</section>

<div class=\"publicite2\">

  <style class=\"cp-pen-styles\">
    .swiper-container {
      width: 100%;
      height: 200px;
    }
    body > div > div.publicite2 > div > div.swiper-wrapper > div > img {
      height: 200px;
      max-width: 300%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      /*width:90%;*/
    }

  </style>
</head>
<body>
  <!-- Swiper -->
  <div class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
      ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publicitesDefile"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 140
            echo "        <div class=\"swiper-slide\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\"/></div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "    </div>
    <!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
  </div>
  <script >
    var swiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      spaceBetween: 0,
      //loop: true,
      autoplay: 2500,
      autoplayDisableOnInteraction: false,
      slidesPerView: 4,
      coverflow: {
        rotate: 30,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true
      }
    });

    //# sourceURL=pen.js
  </script>
</body>
</html>
</div>
";
    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:publiciteCarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 143,  264 => 140,  260 => 139,  209 => 90,  195 => 89,  174 => 71,  167 => 67,  162 => 64,  159 => 63,  156 => 62,  139 => 61,  131 => 55,  117 => 54,  104 => 44,  98 => 41,  92 => 38,  86 => 35,  78 => 30,  74 => 29,  68 => 25,  65 => 24,  62 => 23,  45 => 22,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:publiciteCarousel.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/publiciteCarousel.html.twig");
    }
}
