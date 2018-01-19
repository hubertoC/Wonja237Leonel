<?php

/* :reservation:edit.html.twig */
class __TwigTemplate_b05c1ec18f931c58ba2ee46493d5c0e46cb57683f887ecfa2f5d1969afd0628c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":reservation:edit.html.twig", 1);
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
        $__internal_376a8afd9ef5b10d2df67df19d399c70f72f40d74f89b0b3ac15dea6380d1b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376a8afd9ef5b10d2df67df19d399c70f72f40d74f89b0b3ac15dea6380d1b53->enter($__internal_376a8afd9ef5b10d2df67df19d399c70f72f40d74f89b0b3ac15dea6380d1b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_376a8afd9ef5b10d2df67df19d399c70f72f40d74f89b0b3ac15dea6380d1b53->leave($__internal_376a8afd9ef5b10d2df67df19d399c70f72f40d74f89b0b3ac15dea6380d1b53_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b21c874cea8136e4df2354f4ef603e90f75de9ed845995fc96344e47bf90a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b21c874cea8136e4df2354f4ef603e90f75de9ed845995fc96344e47bf90a94->enter($__internal_4b21c874cea8136e4df2354f4ef603e90f75de9ed845995fc96344e47bf90a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4b21c874cea8136e4df2354f4ef603e90f75de9ed845995fc96344e47bf90a94->leave($__internal_4b21c874cea8136e4df2354f4ef603e90f75de9ed845995fc96344e47bf90a94_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Reservation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reservation:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/reservation/edit.html.twig");
    }
}
