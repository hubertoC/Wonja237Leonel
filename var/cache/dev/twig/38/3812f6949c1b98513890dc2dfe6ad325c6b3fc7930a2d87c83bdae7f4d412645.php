<?php

/* :publicitedefile:new.html.twig */
class __TwigTemplate_25e211036db18be7fda1ecd0b8bf9c17182c9dbce93086de1c2a384539ea693e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicitedefile:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutP.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fc50cd107d516f8fd4a0a65e392f5e637d29a0811c430e26527b7952aea4a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc50cd107d516f8fd4a0a65e392f5e637d29a0811c430e26527b7952aea4a00->enter($__internal_8fc50cd107d516f8fd4a0a65e392f5e637d29a0811c430e26527b7952aea4a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicitedefile:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc50cd107d516f8fd4a0a65e392f5e637d29a0811c430e26527b7952aea4a00->leave($__internal_8fc50cd107d516f8fd4a0a65e392f5e637d29a0811c430e26527b7952aea4a00_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_69ab79df1d5d104013c9b67544d3d8a3f1ed7ba949bbad7459f539d0d9a214be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ab79df1d5d104013c9b67544d3d8a3f1ed7ba949bbad7459f539d0d9a214be->enter($__internal_69ab79df1d5d104013c9b67544d3d8a3f1ed7ba949bbad7459f539d0d9a214be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Cree une Publicitée</h1>
<div class= \"cration_artiste\">
  <div class=\"cration mdl-shadow--2dp\">
    <div class=\"form_creation\">
      <div class=\"form-groupe\">
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "link", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <br>
        <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\"/>
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_index");
        echo "\">Retour</a>
        </li>
    </ul>
";
        
        $__internal_69ab79df1d5d104013c9b67544d3d8a3f1ed7ba949bbad7459f539d0d9a214be->leave($__internal_69ab79df1d5d104013c9b67544d3d8a3f1ed7ba949bbad7459f539d0d9a214be_prof);

    }

    public function getTemplateName()
    {
        return ":publicitedefile:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  70 => 16,  64 => 13,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutP.html.twig' %}
{% block body %}
<h1>Cree une Publicitée</h1>
<div class= \"cration_artiste\">
  <div class=\"cration mdl-shadow--2dp\">
    <div class=\"form_creation\">
      <div class=\"form-groupe\">
    {{ form_start(form) }}
    {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.description, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.link, {'attr':{'class':'form-control'}})}}

        {{ form_widget(form) }}
        <br>
        <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\"/>
    {{ form_end(form) }}

    <ul>
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('publicitedefile_index') }}\">Retour</a>
        </li>
    </ul>
{% endblock %}
", ":publicitedefile:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicitedefile/new.html.twig");
    }
}
