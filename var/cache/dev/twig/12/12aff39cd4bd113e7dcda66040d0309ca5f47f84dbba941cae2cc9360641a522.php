<?php

/* :publicites:new.html.twig */
class __TwigTemplate_6f192e0578549f9d007280d97744911c3352d09fb90a4e0f787388cff9a100ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicites:new.html.twig", 1);
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
        $__internal_a827e0c41d66b102c0030f7e116df34902a07d84b6dda61a5553b3bac03a0a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a827e0c41d66b102c0030f7e116df34902a07d84b6dda61a5553b3bac03a0a09->enter($__internal_a827e0c41d66b102c0030f7e116df34902a07d84b6dda61a5553b3bac03a0a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicites:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a827e0c41d66b102c0030f7e116df34902a07d84b6dda61a5553b3bac03a0a09->leave($__internal_a827e0c41d66b102c0030f7e116df34902a07d84b6dda61a5553b3bac03a0a09_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbabcedd80b7852acf5ff4bdc4938cdf9e05c7bb642af46b35de93d0e7849202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbabcedd80b7852acf5ff4bdc4938cdf9e05c7bb642af46b35de93d0e7849202->enter($__internal_bbabcedd80b7852acf5ff4bdc4938cdf9e05c7bb642af46b35de93d0e7849202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Cree un Partenaire</h1>
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
        <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\"/>
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_index");
        echo "\">Retour</a>
        </li>
    </ul>
";
        
        $__internal_bbabcedd80b7852acf5ff4bdc4938cdf9e05c7bb642af46b35de93d0e7849202->leave($__internal_bbabcedd80b7852acf5ff4bdc4938cdf9e05c7bb642af46b35de93d0e7849202_prof);

    }

    public function getTemplateName()
    {
        return ":publicites:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  69 => 15,  64 => 13,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
<h1>Cree un Partenaire</h1>
<div class= \"cration_artiste\">
  <div class=\"cration mdl-shadow--2dp\">
    <div class=\"form_creation\">
      <div class=\"form-groupe\">
    {{ form_start(form) }}
    {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.description, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.link, {'attr':{'class':'form-control'}})}}

        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\"/>
    {{ form_end(form) }}

    <ul>
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('publicites_index') }}\">Retour</a>
        </li>
    </ul>
{% endblock %}
", ":publicites:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicites/new.html.twig");
    }
}
