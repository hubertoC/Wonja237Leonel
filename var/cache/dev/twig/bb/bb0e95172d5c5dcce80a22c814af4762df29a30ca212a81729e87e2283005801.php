<?php

/* HZWonja237Bundle:ArtistePublic:partenaire.html.twig */
class __TwigTemplate_9789a4097837befd3dc3174f51773ccfafdca86a36336c0bd431e12b1f5e5e1d extends Twig_Template
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
        $__internal_a6900bd7d6f39ea435e2aa2d407d1b52f2caba8845fa98c4cad0652113e46d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6900bd7d6f39ea435e2aa2d407d1b52f2caba8845fa98c4cad0652113e46d76->enter($__internal_a6900bd7d6f39ea435e2aa2d407d1b52f2caba8845fa98c4cad0652113e46d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:partenaire.html.twig"));

        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
    <title></title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/partenaire.css"), "html", null, true);
        echo "\">

  </head>
  <body>
    <div class=\"containerP\" >
      <ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publicites"] ?? $this->getContext($context, "publicites")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "

        <li>
          <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "webPath", array())), "html", null, true);
            echo "\" alt=\"\">

          </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </ul>
    </div>

  </body>
</html>
";
        
        $__internal_a6900bd7d6f39ea435e2aa2d407d1b52f2caba8845fa98c4cad0652113e46d76->leave($__internal_a6900bd7d6f39ea435e2aa2d407d1b52f2caba8845fa98c4cad0652113e46d76_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  50 => 16,  46 => 15,  41 => 12,  37 => 11,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  <head>
    <meta charset=\"utf-8\">
    <title></title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/partenaire.css') }}\">

  </head>
  <body>
    <div class=\"containerP\" >
      <ul>
        {% for item in publicites %}


        <li>
          <a href=\"{{item.link}}\">
            <img src=\"{{ asset(item.webPath)}}\" alt=\"\">

          </a>
        </li>
        {% endfor %}
      </ul>
    </div>

  </body>
</html>
", "HZWonja237Bundle:ArtistePublic:partenaire.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/partenaire.html.twig");
    }
}
