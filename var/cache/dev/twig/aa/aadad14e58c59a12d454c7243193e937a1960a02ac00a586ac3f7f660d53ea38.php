<?php

/* :actualite:edit.html.twig */
class __TwigTemplate_b8851ead0dccbfef6dc44c2fc887aa6b9aad742c9753d5a4bf62356609eae133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":actualite:edit.html.twig", 1);
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
        $__internal_c0a2818f7f00e1c4c92c60a4d7d059308d934e7636062ce7b6ac472e1a7bb64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a2818f7f00e1c4c92c60a4d7d059308d934e7636062ce7b6ac472e1a7bb64b->enter($__internal_c0a2818f7f00e1c4c92c60a4d7d059308d934e7636062ce7b6ac472e1a7bb64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actualite:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a2818f7f00e1c4c92c60a4d7d059308d934e7636062ce7b6ac472e1a7bb64b->leave($__internal_c0a2818f7f00e1c4c92c60a4d7d059308d934e7636062ce7b6ac472e1a7bb64b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb89ad0ba9ad1d51b25409ec9c36c8720af002727d1b0ec6c03d90fe9faf584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb89ad0ba9ad1d51b25409ec9c36c8720af002727d1b0ec6c03d90fe9faf584->enter($__internal_ecb89ad0ba9ad1d51b25409ec9c36c8720af002727d1b0ec6c03d90fe9faf584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actualite edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_index");
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
        
        $__internal_ecb89ad0ba9ad1d51b25409ec9c36c8720af002727d1b0ec6c03d90fe9faf584->leave($__internal_ecb89ad0ba9ad1d51b25409ec9c36c8720af002727d1b0ec6c03d90fe9faf584_prof);

    }

    public function getTemplateName()
    {
        return ":actualite:edit.html.twig";
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
    <h1>Actualite edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_actualite_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":actualite:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/actualite/edit.html.twig");
    }
}
