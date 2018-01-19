<?php

/* :actualite:new.html.twig */
class __TwigTemplate_6aff183f15115d11c8a955dcbc6f162de296c899b01ae7175d70632f0e0b9a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":actualite:new.html.twig", 1);
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
        $__internal_160a0a3da2de7f0a2a980df28cae844eeef46603823cf401acc886c0a822f426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160a0a3da2de7f0a2a980df28cae844eeef46603823cf401acc886c0a822f426->enter($__internal_160a0a3da2de7f0a2a980df28cae844eeef46603823cf401acc886c0a822f426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actualite:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_160a0a3da2de7f0a2a980df28cae844eeef46603823cf401acc886c0a822f426->leave($__internal_160a0a3da2de7f0a2a980df28cae844eeef46603823cf401acc886c0a822f426_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8950588cf142f95e40c4f91103c8172a88a40ddbec2df569b96521b8517f0251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8950588cf142f95e40c4f91103c8172a88a40ddbec2df569b96521b8517f0251->enter($__internal_8950588cf142f95e40c4f91103c8172a88a40ddbec2df569b96521b8517f0251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actualite creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_index");
        echo "\">Back to the list</a>
        </li>
    </ul>





";
        
        $__internal_8950588cf142f95e40c4f91103c8172a88a40ddbec2df569b96521b8517f0251->leave($__internal_8950588cf142f95e40c4f91103c8172a88a40ddbec2df569b96521b8517f0251_prof);

    }

    public function getTemplateName()
    {
        return ":actualite:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Actualite creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_actualite_index') }}\">Back to the list</a>
        </li>
    </ul>





{% endblock %}
", ":actualite:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/actualite/new.html.twig");
    }
}
