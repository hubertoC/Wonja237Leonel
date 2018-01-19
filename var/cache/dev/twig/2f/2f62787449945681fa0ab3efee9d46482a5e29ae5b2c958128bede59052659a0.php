<?php

/* :publicites:index.html.twig */
class __TwigTemplate_e698436dd3a67d40cb1bdcd0c52e9a62c4833b1f64903acccfcc4563a52792b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicites:index.html.twig", 1);
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
        $__internal_e5ef80cceb3504a65d3ce01f9cd84ed91f25a52f614c53c42ab034046e619afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ef80cceb3504a65d3ce01f9cd84ed91f25a52f614c53c42ab034046e619afd->enter($__internal_e5ef80cceb3504a65d3ce01f9cd84ed91f25a52f614c53c42ab034046e619afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicites:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ef80cceb3504a65d3ce01f9cd84ed91f25a52f614c53c42ab034046e619afd->leave($__internal_e5ef80cceb3504a65d3ce01f9cd84ed91f25a52f614c53c42ab034046e619afd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_184ca3b4811b46e905eae03ef5e1bee5987a3671060181d96577fa9a51c24b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184ca3b4811b46e905eae03ef5e1bee5987a3671060181d96577fa9a51c24b9f->enter($__internal_184ca3b4811b46e905eae03ef5e1bee5987a3671060181d96577fa9a51c24b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Les publicites</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publicites"] ?? $this->getContext($context, "publicites")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicite"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_show", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["publicite"], "webPath", array())), "html", null, true);
            echo "\" height=\"42\" width=\"42\" ></td>


                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "description", array()), "html", null, true);
            echo "</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_show", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_edit", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
<br>
    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_new");
        echo "\" class=\"mdl-button mdl-js-button mdl-button--raised\" >Create a new publicite</a>
        </li>
    </ul>
";
        
        $__internal_184ca3b4811b46e905eae03ef5e1bee5987a3671060181d96577fa9a51c24b9f->leave($__internal_184ca3b4811b46e905eae03ef5e1bee5987a3671060181d96577fa9a51c24b9f_prof);

    }

    public function getTemplateName()
    {
        return ":publicites:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  104 => 38,  92 => 32,  86 => 29,  78 => 24,  74 => 23,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Les publicites</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for publicite in publicites %}
            <tr>
                <td><a href=\"{{ path('publicites_show', { 'id': publicite.id }) }}\">{{ publicite.id }}</a></td>
                <td><img src=\"{{ asset(publicite.webPath)}}\" height=\"42\" width=\"42\" ></td>


                <td>{{ publicite.name }}</td>
                <td>{{ publicite.description }}</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('publicites_show', { 'id': publicite.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('publicites_edit', { 'id': publicite.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<br>
    <ul>
        <li>
            <a href=\"{{ path('publicites_new') }}\" class=\"mdl-button mdl-js-button mdl-button--raised\" >Create a new publicite</a>
        </li>
    </ul>
{% endblock %}
", ":publicites:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicites/index.html.twig");
    }
}
