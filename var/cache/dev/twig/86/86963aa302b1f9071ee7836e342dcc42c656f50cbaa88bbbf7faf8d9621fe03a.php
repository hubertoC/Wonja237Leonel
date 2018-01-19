<?php

/* :publicitedefile:show.html.twig */
class __TwigTemplate_330239af4f99a3d30a272850bf1447c61c7a8f0793a2821cca0416a5f07bb23c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicitedefile:show.html.twig", 1);
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
        $__internal_7c40487840f1b683903515cd551376d1b7ee17452aaf9e0de49eefbfaa4c1e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c40487840f1b683903515cd551376d1b7ee17452aaf9e0de49eefbfaa4c1e2b->enter($__internal_7c40487840f1b683903515cd551376d1b7ee17452aaf9e0de49eefbfaa4c1e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicitedefile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c40487840f1b683903515cd551376d1b7ee17452aaf9e0de49eefbfaa4c1e2b->leave($__internal_7c40487840f1b683903515cd551376d1b7ee17452aaf9e0de49eefbfaa4c1e2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ce6b9035be8b8df8a4e177403a7501afe696145aeab07d0d358d102d0d2cf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce6b9035be8b8df8a4e177403a7501afe696145aeab07d0d358d102d0d2cf36->enter($__internal_2ce6b9035be8b8df8a4e177403a7501afe696145aeab07d0d358d102d0d2cf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publicitée</h1>
    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publiciteDefile"] ?? $this->getContext($context, "publiciteDefile")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publiciteDefile"] ?? $this->getContext($context, "publiciteDefile")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publiciteDefile"] ?? $this->getContext($context, "publiciteDefile")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li><br>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_index");
        echo "\" class=\"mdl-button mdl-js-button mdl-button--raised\" >Retour á la liste</a>
        </li>
        <li><br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_edit", array("id" => $this->getAttribute(($context["publiciteDefile"] ?? $this->getContext($context, "publiciteDefile")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li><br>
            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2ce6b9035be8b8df8a4e177403a7501afe696145aeab07d0d358d102d0d2cf36->leave($__internal_2ce6b9035be8b8df8a4e177403a7501afe696145aeab07d0d358d102d0d2cf36_prof);

    }

    public function getTemplateName()
    {
        return ":publicitedefile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  83 => 30,  77 => 27,  71 => 24,  61 => 17,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Publicitée</h1>
    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ publiciteDefile.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ publiciteDefile.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ publiciteDefile.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li><br>
            <a href=\"{{ path('publicitedefile_index') }}\" class=\"mdl-button mdl-js-button mdl-button--raised\" >Retour á la liste</a>
        </li>
        <li><br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('publicitedefile_edit', { 'id': publiciteDefile.id }) }}\">Modifier</a>
        </li>
        <li><br>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":publicitedefile:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicitedefile/show.html.twig");
    }
}
