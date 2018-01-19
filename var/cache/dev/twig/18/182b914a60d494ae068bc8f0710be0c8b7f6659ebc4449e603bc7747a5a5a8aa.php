<?php

/* :category:show.html.twig */
class __TwigTemplate_ee8144aa0be25b29eb201c75e3046a0cda027d63aafc3e89f1f7ae1b0854c27e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":category:show.html.twig", 1);
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
        $__internal_efc33a32b30114c86531abc0441b7f5a6a4d727de11d14e990d3e3804343f931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc33a32b30114c86531abc0441b7f5a6a4d727de11d14e990d3e3804343f931->enter($__internal_efc33a32b30114c86531abc0441b7f5a6a4d727de11d14e990d3e3804343f931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc33a32b30114c86531abc0441b7f5a6a4d727de11d14e990d3e3804343f931->leave($__internal_efc33a32b30114c86531abc0441b7f5a6a4d727de11d14e990d3e3804343f931_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc2e3cf13747a83d192d6b9a3c0d15c93376ff0abefe51f31b65340bcaedfe0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2e3cf13747a83d192d6b9a3c0d15c93376ff0abefe51f31b65340bcaedfe0f->enter($__internal_bc2e3cf13747a83d192d6b9a3c0d15c93376ff0abefe51f31b65340bcaedfe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Categorie</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <br>
            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>



";
        
        $__internal_bc2e3cf13747a83d192d6b9a3c0d15c93376ff0abefe51f31b65340bcaedfe0f->leave($__internal_bc2e3cf13747a83d192d6b9a3c0d15c93376ff0abefe51f31b65340bcaedfe0f_prof);

    }

    public function getTemplateName()
    {
        return ":category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  80 => 29,  74 => 26,  67 => 22,  55 => 13,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
    <h1>Categorie</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ category.name }}</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('category_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <br>
            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>



{% endblock %}
", ":category:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/category/show.html.twig");
    }
}
