<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_adc0ccf2339f22fd6a3f6240372bd3af2abfaf6e87ca3a01f5fd610496e2f45e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_985946b7d362ec41011cce9fab0095a1c1cbcfe06d328dd3069e9f38b9d3cae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985946b7d362ec41011cce9fab0095a1c1cbcfe06d328dd3069e9f38b9d3cae5->enter($__internal_985946b7d362ec41011cce9fab0095a1c1cbcfe06d328dd3069e9f38b9d3cae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_985946b7d362ec41011cce9fab0095a1c1cbcfe06d328dd3069e9f38b9d3cae5->leave($__internal_985946b7d362ec41011cce9fab0095a1c1cbcfe06d328dd3069e9f38b9d3cae5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
