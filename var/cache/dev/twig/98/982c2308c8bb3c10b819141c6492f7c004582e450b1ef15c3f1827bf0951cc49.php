<?php

/* :publicites:show.html.twig */
class __TwigTemplate_a744b6bd24f290106bec2e300266760cd8ef8870f6872d820598c1f1201f5c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicites:show.html.twig", 1);
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
        $__internal_35fcdde3b7643af4ade63d440cc95d5edcbc96b175bec9cbbcf966f90f51188c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fcdde3b7643af4ade63d440cc95d5edcbc96b175bec9cbbcf966f90f51188c->enter($__internal_35fcdde3b7643af4ade63d440cc95d5edcbc96b175bec9cbbcf966f90f51188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicites:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35fcdde3b7643af4ade63d440cc95d5edcbc96b175bec9cbbcf966f90f51188c->leave($__internal_35fcdde3b7643af4ade63d440cc95d5edcbc96b175bec9cbbcf966f90f51188c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3c7c39e582047219a50449f99c01ae5acc8b14d5fe031f489c3d845f80edbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c7c39e582047219a50449f99c01ae5acc8b14d5fe031f489c3d845f80edbf6->enter($__internal_d3c7c39e582047219a50449f99c01ae5acc8b14d5fe031f489c3d845f80edbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publicite</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "description", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\"  href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_edit", array("id" => $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d3c7c39e582047219a50449f99c01ae5acc8b14d5fe031f489c3d845f80edbf6->leave($__internal_d3c7c39e582047219a50449f99c01ae5acc8b14d5fe031f489c3d845f80edbf6_prof);

    }

    public function getTemplateName()
    {
        return ":publicites:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  86 => 33,  80 => 30,  74 => 27,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Publicite</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ publicite.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ publicite.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ publicite.description }}</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\"  href=\"{{ path('publicites_index') }}\">Back to the list</a>
        </li>
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('publicites_edit', { 'id': publicite.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":publicites:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicites/show.html.twig");
    }
}
