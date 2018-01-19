<?php

/* :actualite:show.html.twig */
class __TwigTemplate_a7a5c2e74f735853bfefd8ec4ef7cf08f286eb468ebaf8077dd4136a3370f369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":actualite:show.html.twig", 1);
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
        $__internal_904f423e90016f927e8dcbe8a67ea9610dad0cdd4bdb489368634fb9d84583ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904f423e90016f927e8dcbe8a67ea9610dad0cdd4bdb489368634fb9d84583ad->enter($__internal_904f423e90016f927e8dcbe8a67ea9610dad0cdd4bdb489368634fb9d84583ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actualite:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_904f423e90016f927e8dcbe8a67ea9610dad0cdd4bdb489368634fb9d84583ad->leave($__internal_904f423e90016f927e8dcbe8a67ea9610dad0cdd4bdb489368634fb9d84583ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_252050128b129928492d0d97e1ec9c7c789cd238897dcd0c61e89475b8aeab4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252050128b129928492d0d97e1ec9c7c789cd238897dcd0c61e89475b8aeab4d->enter($__internal_252050128b129928492d0d97e1ec9c7c789cd238897dcd0c61e89475b8aeab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actualite</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actualite"] ?? $this->getContext($context, "actualite")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actualite"] ?? $this->getContext($context, "actualite")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actualite"] ?? $this->getContext($context, "actualite")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_edit", array("id" => $this->getAttribute(($context["actualite"] ?? $this->getContext($context, "actualite")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_252050128b129928492d0d97e1ec9c7c789cd238897dcd0c61e89475b8aeab4d->leave($__internal_252050128b129928492d0d97e1ec9c7c789cd238897dcd0c61e89475b8aeab4d_prof);

    }

    public function getTemplateName()
    {
        return ":actualite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Actualite</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ actualite.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ actualite.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ actualite.content }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_actualite_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_actualite_edit', { 'id': actualite.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":actualite:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/actualite/show.html.twig");
    }
}
