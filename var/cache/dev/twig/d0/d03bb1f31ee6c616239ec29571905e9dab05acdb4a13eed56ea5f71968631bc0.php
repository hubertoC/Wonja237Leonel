<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_441fbadce6fd1afb35da02e98ce5cad3062a9cf0a74b98cd7a489a3d8927d2c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5693b5bbd359782c414381abdcb464bddf429bba9e9d4076d18255875ab3f65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5693b5bbd359782c414381abdcb464bddf429bba9e9d4076d18255875ab3f65c->enter($__internal_5693b5bbd359782c414381abdcb464bddf429bba9e9d4076d18255875ab3f65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5693b5bbd359782c414381abdcb464bddf429bba9e9d4076d18255875ab3f65c->leave($__internal_5693b5bbd359782c414381abdcb464bddf429bba9e9d4076d18255875ab3f65c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a153006cc2390e3f4e01d30a312f124459804f356b73cdff92ba22b6badc054b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a153006cc2390e3f4e01d30a312f124459804f356b73cdff92ba22b6badc054b->enter($__internal_a153006cc2390e3f4e01d30a312f124459804f356b73cdff92ba22b6badc054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a153006cc2390e3f4e01d30a312f124459804f356b73cdff92ba22b6badc054b->leave($__internal_a153006cc2390e3f4e01d30a312f124459804f356b73cdff92ba22b6badc054b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cad3f2267dd645e35d2d5388419b16f1aff1820bb5137739910e0e3d765273e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad3f2267dd645e35d2d5388419b16f1aff1820bb5137739910e0e3d765273e2->enter($__internal_cad3f2267dd645e35d2d5388419b16f1aff1820bb5137739910e0e3d765273e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cad3f2267dd645e35d2d5388419b16f1aff1820bb5137739910e0e3d765273e2->leave($__internal_cad3f2267dd645e35d2d5388419b16f1aff1820bb5137739910e0e3d765273e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6d964ad87d09ce95120626a568c84fb5cd99ef1546cc5fd39fd88f27ac7d1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d964ad87d09ce95120626a568c84fb5cd99ef1546cc5fd39fd88f27ac7d1ed->enter($__internal_d6d964ad87d09ce95120626a568c84fb5cd99ef1546cc5fd39fd88f27ac7d1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6d964ad87d09ce95120626a568c84fb5cd99ef1546cc5fd39fd88f27ac7d1ed->leave($__internal_d6d964ad87d09ce95120626a568c84fb5cd99ef1546cc5fd39fd88f27ac7d1ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
