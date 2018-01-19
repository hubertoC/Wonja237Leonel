<?php

/* :category:new.html.twig */
class __TwigTemplate_dcf55922f4773a82f39b7626f6e893b3cba23f2d0259fdbbe1cb4d69507e3ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":category:new.html.twig", 1);
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
        $__internal_2b6395f9c735031c489a0124bda8351b7822eff484bd14acaa3aa62837c4aa46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6395f9c735031c489a0124bda8351b7822eff484bd14acaa3aa62837c4aa46->enter($__internal_2b6395f9c735031c489a0124bda8351b7822eff484bd14acaa3aa62837c4aa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6395f9c735031c489a0124bda8351b7822eff484bd14acaa3aa62837c4aa46->leave($__internal_2b6395f9c735031c489a0124bda8351b7822eff484bd14acaa3aa62837c4aa46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb46c6cd992f71ece44a560998068f719254c95354946fc312056d5ecffc901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb46c6cd992f71ece44a560998068f719254c95354946fc312056d5ecffc901->enter($__internal_8fb46c6cd992f71ece44a560998068f719254c95354946fc312056d5ecffc901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cree une categorie</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
          <div class=\"form-groupe\">
      ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
<br>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <div>
          <br>
  <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <ul>

        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\"  href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Retour</a>
          </div>

        </li>

    </ul>
</div>
</div>

";
        
        $__internal_8fb46c6cd992f71ece44a560998068f719254c95354946fc312056d5ecffc901->leave($__internal_8fb46c6cd992f71ece44a560998068f719254c95354946fc312056d5ecffc901_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  63 => 16,  56 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Cree une categorie</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
          <div class=\"form-groupe\">
      {{ form_start(form) }}
{{ form_row(form.name, {'attr':{'class':'form-control'}})}}
<br>
        {{ form_widget(form) }}
        <div>
          <br>
  <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\" />
    {{ form_end(form) }}
    <ul>

        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\"  href=\"{{ path('category_index') }}\">Retour</a>
          </div>

        </li>

    </ul>
</div>
</div>

{% endblock %}
", ":category:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/category/new.html.twig");
    }
}
