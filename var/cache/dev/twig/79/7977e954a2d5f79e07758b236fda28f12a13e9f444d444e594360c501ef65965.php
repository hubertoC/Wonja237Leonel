<?php

/* HZWonja237Bundle:ArtistePublic:recherche.html.twig */
class __TwigTemplate_cab312dbc010ad21d53d1f40b2df433197a86acf2c054281c67436c9fd617e9c extends Twig_Template
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
        $__internal_c4cddb15dc8592d55ba97983a6fef1e17647d2681c2801a3dc8f2cbd6c51dca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cddb15dc8592d55ba97983a6fef1e17647d2681c2801a3dc8f2cbd6c51dca9->enter($__internal_c4cddb15dc8592d55ba97983a6fef1e17647d2681c2801a3dc8f2cbd6c51dca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:recherche.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["result"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 2
            echo "
  ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", array()), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c4cddb15dc8592d55ba97983a6fef1e17647d2681c2801a3dc8f2cbd6c51dca9->leave($__internal_c4cddb15dc8592d55ba97983a6fef1e17647d2681c2801a3dc8f2cbd6c51dca9_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for result in result %}

  {{result.name}}

{% endfor %}
", "HZWonja237Bundle:ArtistePublic:recherche.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/recherche.html.twig");
    }
}
