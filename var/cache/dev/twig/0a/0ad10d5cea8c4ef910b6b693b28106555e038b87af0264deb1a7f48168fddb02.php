<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ce9f5b06c9e47fb662d9fc597ffe957848398d96ec349c58d3070f720ef9ee64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d0812f7947874c56abee92e7b7a6d92faeb01f70448a0d69a9d0d174055193b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0812f7947874c56abee92e7b7a6d92faeb01f70448a0d69a9d0d174055193b->enter($__internal_0d0812f7947874c56abee92e7b7a6d92faeb01f70448a0d69a9d0d174055193b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d0812f7947874c56abee92e7b7a6d92faeb01f70448a0d69a9d0d174055193b->leave($__internal_0d0812f7947874c56abee92e7b7a6d92faeb01f70448a0d69a9d0d174055193b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10333e2e919fc53861de8e2e5cdd6a9341174f4c554ab65003bbbc49245a6d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10333e2e919fc53861de8e2e5cdd6a9341174f4c554ab65003bbbc49245a6d04->enter($__internal_10333e2e919fc53861de8e2e5cdd6a9341174f4c554ab65003bbbc49245a6d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_10333e2e919fc53861de8e2e5cdd6a9341174f4c554ab65003bbbc49245a6d04->leave($__internal_10333e2e919fc53861de8e2e5cdd6a9341174f4c554ab65003bbbc49245a6d04_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f313f9f166a27d5fa37d06ab77b13227a1c69386093a03689ad45e75eed488da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f313f9f166a27d5fa37d06ab77b13227a1c69386093a03689ad45e75eed488da->enter($__internal_f313f9f166a27d5fa37d06ab77b13227a1c69386093a03689ad45e75eed488da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f313f9f166a27d5fa37d06ab77b13227a1c69386093a03689ad45e75eed488da->leave($__internal_f313f9f166a27d5fa37d06ab77b13227a1c69386093a03689ad45e75eed488da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_354065c6c2d829cbc05d9be07300b19ae80002cddc2d560c2deaa294ea7ba168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354065c6c2d829cbc05d9be07300b19ae80002cddc2d560c2deaa294ea7ba168->enter($__internal_354065c6c2d829cbc05d9be07300b19ae80002cddc2d560c2deaa294ea7ba168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_354065c6c2d829cbc05d9be07300b19ae80002cddc2d560c2deaa294ea7ba168->leave($__internal_354065c6c2d829cbc05d9be07300b19ae80002cddc2d560c2deaa294ea7ba168_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
