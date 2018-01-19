<?php

/* HZWonja237Bundle:ArtistePublic:categoryArtiste.html.twig */
class __TwigTemplate_cf23f86bea6055e8b6e534b772b966a49717886eb6ea0e64914a3fa319f30976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZWonja237Bundle:ArtistePublic:categoryArtiste.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cat_artiste.css"), "html", null, true);
        echo "\">
<br><br><br>
<div class=\"container\" id=\"cont\">
  <section class=\"row\">
    <div class=\"col-md-12  text-center\">
      <h3 class=\"title\">
        <br><br>

        <span class=\"themecolor\">

          <spam class=\"catName\">
            <U>";
        // line 15
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</spam>
          </U>
        </span>

      </h3>
      <br>
    </div>
    <div class=\"container\">
      <br><br>
      <div class=\"row\">
        <div class=\"col-md-12\">
          <!-- Nav tabs -->
          <div class=\"card\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
              <li role=\"presentation\" class=\"active\">
                <a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Tous les artistes</a>
              </li>

            </ul>

            <!-- Tab panes -->
            <div class=\"tab-content\">
              <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">

                <div class=\"login-card\">

                  <div class=\"espace\"></div>

                  <section class=\"row hidden-xs\">
                    <div class=\"col-md-12\">
                      ";
        // line 45
        if ( !($context["artiste"] ?? null)) {
            // line 46
            echo "                      <div class=\"themecolor infos\">
                        Il y a pas encore d'Artiste dans cette Catégorie!
                      </div>
                      ";
        }
        // line 50
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artiste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "                        <div class=\"grid\" id=\"London\">
                          <figure class=\"effect-sarah\">
                            <div class=\"col-xs-12 col-md-12\">
                              <img class=\"img-responsive\"src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"img13\"/>
                            </div>
                            <figcaption>
                              <h2 class=\"nonArtiste\">
                                &nbsp;<span>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</span>

                              </h2>
                              <p>réserver maintenant</p>
                              <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_profile", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\"></a>
                            </figcaption>
                          </figure>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </section>
                    <br>
                  </div>
                </div>

                <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
                  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artiste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 74
            echo "                    <div class=\"grid\" id=\"\">
                      <figure class=\"effect-sarah\">
                        <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"img13\"/>
                        <figcaption>
                          <h2>
                            <span>Raum:
                            </span>
                            &nbsp;&nbsp;<span>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</span>
                          </h2>
                          <p>Buchung und weitere Informationen!</p>
                          <a href=\"#\"></a>
                        </figcaption>
                      </figure>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                </div>
              </section>
            </div>

          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>


<!--small cards-->
<div class=\"container\">
   <div class=\"row hidden-sm hidden-lg\">
     ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artiste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 106
            echo "     <div class=\"col-md-3\">
       <div class=\"card222\">
         <div class=\"card-content\">

           <div class=\"card-body\">
             <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_profile", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">

<img src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"img13\"/>
           </div>

           <nav class=\"nav-tabs\">
             <ul class=\"nav nav-pills pull-left\">
               <li>
                 <a class=\"card-action-red\" href=\"#\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "surname", array()), "html", null, true);
            echo " </a>
               </li>

             </ul>

           </nav>
</a>
         </div>
       </div>
     </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "



 </div>

 </div>

";
    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:categoryArtiste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 130,  203 => 119,  194 => 113,  189 => 111,  182 => 106,  178 => 105,  160 => 89,  146 => 81,  138 => 76,  134 => 74,  130 => 73,  122 => 67,  111 => 62,  104 => 58,  97 => 54,  92 => 51,  87 => 50,  81 => 46,  79 => 45,  46 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:categoryArtiste.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/categoryArtiste.html.twig");
    }
}
