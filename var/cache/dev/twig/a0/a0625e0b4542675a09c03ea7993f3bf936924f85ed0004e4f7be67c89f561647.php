<?php

/* HZWonja237Bundle:ArtistePublic:category.html.twig */
class __TwigTemplate_5548376020832e714d6204d1c917c72ab112faf13a26900a6865c4add5b64835 extends Twig_Template
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
        $__internal_b90f385110f7793b34c68cc0006e0df693ab937345a3cc5250668365254325dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90f385110f7793b34c68cc0006e0df693ab937345a3cc5250668365254325dc->enter($__internal_b90f385110f7793b34c68cc0006e0df693ab937345a3cc5250668365254325dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:category.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "  <li>

    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_categoryArtiste", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">
      ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>

  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b90f385110f7793b34c68cc0006e0df693ab937345a3cc5250668365254325dc->leave($__internal_b90f385110f7793b34c68cc0006e0df693ab937345a3cc5250668365254325dc_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for category in category %}
  <li>

    <a href=\"{{ path('hz_wonja237_categoryArtiste', {'category': category.id}) }}\">
      {{category.name}}</a>

  </li>
{% endfor %}
", "HZWonja237Bundle:ArtistePublic:category.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/category.html.twig");
    }
}
