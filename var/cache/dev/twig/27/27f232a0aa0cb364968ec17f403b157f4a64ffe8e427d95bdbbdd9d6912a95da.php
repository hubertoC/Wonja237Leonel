<?php

/* HZWonja237Bundle:ArtistePublic:categoryArtiste.html.twig */
class __TwigTemplate_59e4a973fb0be5d1495264a2fc6136e357e60bc0446d7cd744b2924665b82105 extends Twig_Template
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
        $__internal_408ebaf1a5df833e8250a3b1f472534c6bde3e8fc634237d6818451d2c965d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408ebaf1a5df833e8250a3b1f472534c6bde3e8fc634237d6818451d2c965d62->enter($__internal_408ebaf1a5df833e8250a3b1f472534c6bde3e8fc634237d6818451d2c965d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:categoryArtiste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_408ebaf1a5df833e8250a3b1f472534c6bde3e8fc634237d6818451d2c965d62->leave($__internal_408ebaf1a5df833e8250a3b1f472534c6bde3e8fc634237d6818451d2c965d62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62981c8800751c3cd3f8dfca5c375c5fa750fa3ae31df76df511eb64b76d4068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62981c8800751c3cd3f8dfca5c375c5fa750fa3ae31df76df511eb64b76d4068->enter($__internal_62981c8800751c3cd3f8dfca5c375c5fa750fa3ae31df76df511eb64b76d4068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
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
        if ( !($context["artiste"] ?? $this->getContext($context, "artiste"))) {
            // line 46
            echo "                      <div class=\"themecolor infos\">
                        Il y a pas encore d'Artiste dans cette Catégorie!
                      </div>
                      ";
        }
        // line 50
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artiste"] ?? $this->getContext($context, "artiste")));
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
        $context['_seq'] = twig_ensure_traversable(($context["artiste"] ?? $this->getContext($context, "artiste")));
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
        $context['_seq'] = twig_ensure_traversable(($context["artiste"] ?? $this->getContext($context, "artiste")));
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
        
        $__internal_62981c8800751c3cd3f8dfca5c375c5fa750fa3ae31df76df511eb64b76d4068->leave($__internal_62981c8800751c3cd3f8dfca5c375c5fa750fa3ae31df76df511eb64b76d4068_prof);

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
        return array (  231 => 130,  212 => 119,  203 => 113,  198 => 111,  191 => 106,  187 => 105,  169 => 89,  155 => 81,  147 => 76,  143 => 74,  139 => 73,  131 => 67,  120 => 62,  113 => 58,  106 => 54,  101 => 51,  96 => 50,  90 => 46,  88 => 45,  55 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutPublic.html.twig' %}

{% block body %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/cat_artiste.css') }}\">
<br><br><br>
<div class=\"container\" id=\"cont\">
  <section class=\"row\">
    <div class=\"col-md-12  text-center\">
      <h3 class=\"title\">
        <br><br>

        <span class=\"themecolor\">

          <spam class=\"catName\">
            <U>{{ name }}</spam>
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
                      {% if not artiste %}
                      <div class=\"themecolor infos\">
                        Il y a pas encore d'Artiste dans cette Catégorie!
                      </div>
                      {% endif %}
                      {% for item in artiste %}
                        <div class=\"grid\" id=\"London\">
                          <figure class=\"effect-sarah\">
                            <div class=\"col-xs-12 col-md-12\">
                              <img class=\"img-responsive\"src=\"{{ asset(item.image.webPath)}}\" alt=\"img13\"/>
                            </div>
                            <figcaption>
                              <h2 class=\"nonArtiste\">
                                &nbsp;<span>{{item.name}}</span>

                              </h2>
                              <p>réserver maintenant</p>
                              <a href=\"{{ path('hz_wonja237_profile', {'id': item.id}) }}\"></a>
                            </figcaption>
                          </figure>
                        </div>
                      {% endfor %}
                    </section>
                    <br>
                  </div>
                </div>

                <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
                  {% for item in artiste %}
                    <div class=\"grid\" id=\"\">
                      <figure class=\"effect-sarah\">
                        <img src=\"{{ asset(item.image.webPath)}}\" alt=\"img13\"/>
                        <figcaption>
                          <h2>
                            <span>Raum:
                            </span>
                            &nbsp;&nbsp;<span>{{item.name}}</span>
                          </h2>
                          <p>Buchung und weitere Informationen!</p>
                          <a href=\"#\"></a>
                        </figcaption>
                      </figure>
                    </div>
                  {% endfor %}
                </div>
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
     {% for item in artiste %}
     <div class=\"col-md-3\">
       <div class=\"card222\">
         <div class=\"card-content\">

           <div class=\"card-body\">
             <a href=\"{{ path('hz_wonja237_profile', {'id': item.id}) }}\">

<img src=\"{{ asset(item.image.webPath)}}\" alt=\"img13\"/>
           </div>

           <nav class=\"nav-tabs\">
             <ul class=\"nav nav-pills pull-left\">
               <li>
                 <a class=\"card-action-red\" href=\"#\">{{item.name}} {{item.surname}} </a>
               </li>

             </ul>

           </nav>
</a>
         </div>
       </div>
     </div>
{% endfor %}




 </div>

 </div>

{% endblock %}
", "HZWonja237Bundle:ArtistePublic:categoryArtiste.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/categoryArtiste.html.twig");
    }
}
