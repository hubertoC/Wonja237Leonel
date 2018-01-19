<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_77460ccf2f88d653564e3487acadf74f575ed6157c50b59fa49e6b6ffba18b50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_ed0c79c41fdf4f1f49ae35ca45d831c01018137bed97bd266c62447e6e6ff08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0c79c41fdf4f1f49ae35ca45d831c01018137bed97bd266c62447e6e6ff08a->enter($__internal_ed0c79c41fdf4f1f49ae35ca45d831c01018137bed97bd266c62447e6e6ff08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed0c79c41fdf4f1f49ae35ca45d831c01018137bed97bd266c62447e6e6ff08a->leave($__internal_ed0c79c41fdf4f1f49ae35ca45d831c01018137bed97bd266c62447e6e6ff08a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e23c2a56450be22109e2e082e16c8cefc97d5a0513521462b0f89c2f67543765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23c2a56450be22109e2e082e16c8cefc97d5a0513521462b0f89c2f67543765->enter($__internal_e23c2a56450be22109e2e082e16c8cefc97d5a0513521462b0f89c2f67543765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e23c2a56450be22109e2e082e16c8cefc97d5a0513521462b0f89c2f67543765->leave($__internal_e23c2a56450be22109e2e082e16c8cefc97d5a0513521462b0f89c2f67543765_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
