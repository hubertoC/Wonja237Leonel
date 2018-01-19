<?php

/* :category:index.html.twig */
class __TwigTemplate_1eedbebd1038308b40e58269aff2afabe9171cda238ec0b95d286f685d331741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":category:index.html.twig", 1);
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
        $__internal_ad982b0b2aa443bb0a6015a64c07a07fa91a45314f1f26f609d5f3a19288c0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad982b0b2aa443bb0a6015a64c07a07fa91a45314f1f26f609d5f3a19288c0ed->enter($__internal_ad982b0b2aa443bb0a6015a64c07a07fa91a45314f1f26f609d5f3a19288c0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad982b0b2aa443bb0a6015a64c07a07fa91a45314f1f26f609d5f3a19288c0ed->leave($__internal_ad982b0b2aa443bb0a6015a64c07a07fa91a45314f1f26f609d5f3a19288c0ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_435497677ec1592ab9bf1ea4993c65b14e0cf0eaed2881761e0dd55131d92aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435497677ec1592ab9bf1ea4993c65b14e0cf0eaed2881761e0dd55131d92aee->enter($__internal_435497677ec1592ab9bf1ea4993c65b14e0cf0eaed2881761e0dd55131d92aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>
    <table  class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["category"], "webPath", array())), "html", null, true);
            echo "\" height=\"42\" width=\"42\" ></td>

                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_435497677ec1592ab9bf1ea4993c65b14e0cf0eaed2881761e0dd55131d92aee->leave($__internal_435497677ec1592ab9bf1ea4993c65b14e0cf0eaed2881761e0dd55131d92aee_prof);

    }

    public function getTemplateName()
    {
        return ":category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  97 => 34,  85 => 28,  79 => 25,  71 => 20,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Categories list</h1>
    <table  class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td><img src=\"{{ asset(category.webPath)}}\" height=\"42\" width=\"42\" ></td>

                <td>{{ category.name }}</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('category_show', { 'id': category.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", ":category:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/category/index.html.twig");
    }
}
