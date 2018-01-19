<?php

/* :enregistrementautreartiste:new.html.twig */
class __TwigTemplate_3788e1091f5812c5b7091bcab567b474bb61e51d90110698deaa87b6913decb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enregistrementautreartiste:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fee75b0191ec63368911a6450f3b6ac22995c3db17940fc0d45dcf8f2f5ffde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fee75b0191ec63368911a6450f3b6ac22995c3db17940fc0d45dcf8f2f5ffde->enter($__internal_3fee75b0191ec63368911a6450f3b6ac22995c3db17940fc0d45dcf8f2f5ffde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enregistrementautreartiste:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fee75b0191ec63368911a6450f3b6ac22995c3db17940fc0d45dcf8f2f5ffde->leave($__internal_3fee75b0191ec63368911a6450f3b6ac22995c3db17940fc0d45dcf8f2f5ffde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15fef266619ff52863f14dce7469367fd233dedd7f2e4207f695307264827ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fef266619ff52863f14dce7469367fd233dedd7f2e4207f695307264827ef4->enter($__internal_15fef266619ff52863f14dce7469367fd233dedd7f2e4207f695307264827ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enregistrementautreartiste creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_15fef266619ff52863f14dce7469367fd233dedd7f2e4207f695307264827ef4->leave($__internal_15fef266619ff52863f14dce7469367fd233dedd7f2e4207f695307264827ef4_prof);

    }

    public function getTemplateName()
    {
        return ":enregistrementautreartiste:new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Enregistrementautreartiste creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_enregistrement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":enregistrementautreartiste:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/enregistrementautreartiste/new.html.twig");
    }
}
