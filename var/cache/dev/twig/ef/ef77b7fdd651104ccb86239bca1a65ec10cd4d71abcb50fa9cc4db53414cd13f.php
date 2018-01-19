<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ba6b17745736bf72506c179a52d91a378623b5b5eab07366742aad780047f720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_048b56254bb94c22da2bec6325c8ab2d41ba1c170bdf169c85f7548c610d7c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048b56254bb94c22da2bec6325c8ab2d41ba1c170bdf169c85f7548c610d7c2a->enter($__internal_048b56254bb94c22da2bec6325c8ab2d41ba1c170bdf169c85f7548c610d7c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_048b56254bb94c22da2bec6325c8ab2d41ba1c170bdf169c85f7548c610d7c2a->leave($__internal_048b56254bb94c22da2bec6325c8ab2d41ba1c170bdf169c85f7548c610d7c2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0835088ac6f8f781b418218a69b5b14f2b258ba1ecf13c4213bda27b570b095f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0835088ac6f8f781b418218a69b5b14f2b258ba1ecf13c4213bda27b570b095f->enter($__internal_0835088ac6f8f781b418218a69b5b14f2b258ba1ecf13c4213bda27b570b095f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0835088ac6f8f781b418218a69b5b14f2b258ba1ecf13c4213bda27b570b095f->leave($__internal_0835088ac6f8f781b418218a69b5b14f2b258ba1ecf13c4213bda27b570b095f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
