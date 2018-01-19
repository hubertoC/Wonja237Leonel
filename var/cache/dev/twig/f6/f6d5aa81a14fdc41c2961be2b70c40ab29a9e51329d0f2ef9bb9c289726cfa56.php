<?php

/* :actualite:index.html.twig */
class __TwigTemplate_cd4dbcb8a0f2ddeea964a96aeafbc0e4c91fbdf57b8c7a328ca96ab1301506ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":actualite:index.html.twig", 1);
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
        $__internal_c4a64ce90fe58aa87b9e6bfcf48fa86c2353974ff56b061980f09fd8f2908258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a64ce90fe58aa87b9e6bfcf48fa86c2353974ff56b061980f09fd8f2908258->enter($__internal_c4a64ce90fe58aa87b9e6bfcf48fa86c2353974ff56b061980f09fd8f2908258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actualite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4a64ce90fe58aa87b9e6bfcf48fa86c2353974ff56b061980f09fd8f2908258->leave($__internal_c4a64ce90fe58aa87b9e6bfcf48fa86c2353974ff56b061980f09fd8f2908258_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e89ae417d2e5ec7b0266947173fed32517a3eced6ffb8c30dd8b3fdf150666f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e89ae417d2e5ec7b0266947173fed32517a3eced6ffb8c30dd8b3fdf150666f->enter($__internal_4e89ae417d2e5ec7b0266947173fed32517a3eced6ffb8c30dd8b3fdf150666f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actualites list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actualites"] ?? $this->getContext($context, "actualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_show", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualite"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualite"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["actualite"], "content", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_show", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_edit", array("id" => $this->getAttribute($context["actualite"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_new");
        echo "\">Create a new actualite</a>
        </li>
    </ul>
";
        
        $__internal_4e89ae417d2e5ec7b0266947173fed32517a3eced6ffb8c30dd8b3fdf150666f->leave($__internal_4e89ae417d2e5ec7b0266947173fed32517a3eced6ffb8c30dd8b3fdf150666f_prof);

    }

    public function getTemplateName()
    {
        return ":actualite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Actualites list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for actualite in actualites %}
            <tr>
                <td><a href=\"{{ path('admin_actualite_show', { 'id': actualite.id }) }}\">{{ actualite.id }}</a></td>
                <td>{{ actualite.title }}</td>
                <td>{{ actualite.content }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_actualite_show', { 'id': actualite.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_actualite_edit', { 'id': actualite.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_actualite_new') }}\">Create a new actualite</a>
        </li>
    </ul>
{% endblock %}
", ":actualite:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/actualite/index.html.twig");
    }
}
