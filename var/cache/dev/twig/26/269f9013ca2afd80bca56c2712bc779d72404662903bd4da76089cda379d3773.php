<?php

/* :enregistrementautreartiste:edit.html.twig */
class __TwigTemplate_2a83e905d0447efefe8a18e2e1351693ddb02a2436a408dde9f6d041448814a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enregistrementautreartiste:edit.html.twig", 1);
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
        $__internal_571ce3e0d1b0d6be317f1616d663b0eef05d69f560ff6711a873cfaac1fdc59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571ce3e0d1b0d6be317f1616d663b0eef05d69f560ff6711a873cfaac1fdc59f->enter($__internal_571ce3e0d1b0d6be317f1616d663b0eef05d69f560ff6711a873cfaac1fdc59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enregistrementautreartiste:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571ce3e0d1b0d6be317f1616d663b0eef05d69f560ff6711a873cfaac1fdc59f->leave($__internal_571ce3e0d1b0d6be317f1616d663b0eef05d69f560ff6711a873cfaac1fdc59f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_104ffd1b840ece9f18275aa8d0d96e5d6bd3d09163ce3d11d75dffb3cc9136fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104ffd1b840ece9f18275aa8d0d96e5d6bd3d09163ce3d11d75dffb3cc9136fc->enter($__internal_104ffd1b840ece9f18275aa8d0d96e5d6bd3d09163ce3d11d75dffb3cc9136fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enregistrementautreartiste edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_index");
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
        
        $__internal_104ffd1b840ece9f18275aa8d0d96e5d6bd3d09163ce3d11d75dffb3cc9136fc->leave($__internal_104ffd1b840ece9f18275aa8d0d96e5d6bd3d09163ce3d11d75dffb3cc9136fc_prof);

    }

    public function getTemplateName()
    {
        return ":enregistrementautreartiste:edit.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Enregistrementautreartiste edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_enregistrement_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":enregistrementautreartiste:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/enregistrementautreartiste/edit.html.twig");
    }
}
