<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_99779d14c200462491e2e93224af2dc73a9c8da408e7a0bb4e46b95b8e042b08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e303b5d4a0792b184f9eb3022e095411a80644f96c139028a2d6cb53a009796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e303b5d4a0792b184f9eb3022e095411a80644f96c139028a2d6cb53a009796->enter($__internal_0e303b5d4a0792b184f9eb3022e095411a80644f96c139028a2d6cb53a009796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e303b5d4a0792b184f9eb3022e095411a80644f96c139028a2d6cb53a009796->leave($__internal_0e303b5d4a0792b184f9eb3022e095411a80644f96c139028a2d6cb53a009796_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5ddc41f39ea97ef025a821557322b96f7e30d8c136c6d5fac0715bc0bf82ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ddc41f39ea97ef025a821557322b96f7e30d8c136c6d5fac0715bc0bf82ef5->enter($__internal_a5ddc41f39ea97ef025a821557322b96f7e30d8c136c6d5fac0715bc0bf82ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a5ddc41f39ea97ef025a821557322b96f7e30d8c136c6d5fac0715bc0bf82ef5->leave($__internal_a5ddc41f39ea97ef025a821557322b96f7e30d8c136c6d5fac0715bc0bf82ef5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
