<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b205566cc8755c497030b980b8daa027449100af9ca7d6735bf61876bef5784f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_05dc374a5eb8a73f5b8b0d0fb335c5852787410a07de26940a72b20016ee3a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05dc374a5eb8a73f5b8b0d0fb335c5852787410a07de26940a72b20016ee3a4c->enter($__internal_05dc374a5eb8a73f5b8b0d0fb335c5852787410a07de26940a72b20016ee3a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05dc374a5eb8a73f5b8b0d0fb335c5852787410a07de26940a72b20016ee3a4c->leave($__internal_05dc374a5eb8a73f5b8b0d0fb335c5852787410a07de26940a72b20016ee3a4c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c4fd204d74aacfeabf7bb4d2e6537419e0d1ca02f9964bd11f40896031dd8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4fd204d74aacfeabf7bb4d2e6537419e0d1ca02f9964bd11f40896031dd8ee->enter($__internal_8c4fd204d74aacfeabf7bb4d2e6537419e0d1ca02f9964bd11f40896031dd8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8c4fd204d74aacfeabf7bb4d2e6537419e0d1ca02f9964bd11f40896031dd8ee->leave($__internal_8c4fd204d74aacfeabf7bb4d2e6537419e0d1ca02f9964bd11f40896031dd8ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
