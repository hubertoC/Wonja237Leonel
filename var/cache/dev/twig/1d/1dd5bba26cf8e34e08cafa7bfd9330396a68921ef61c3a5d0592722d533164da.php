<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3e1a22e41743e38c2605c5516733aab959e715d7173bc88d802eeaf6a5b56996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_812cb20a7080d6994a9bc68ed679afca40adc09f14065aafaff624eb64ca3c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812cb20a7080d6994a9bc68ed679afca40adc09f14065aafaff624eb64ca3c06->enter($__internal_812cb20a7080d6994a9bc68ed679afca40adc09f14065aafaff624eb64ca3c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812cb20a7080d6994a9bc68ed679afca40adc09f14065aafaff624eb64ca3c06->leave($__internal_812cb20a7080d6994a9bc68ed679afca40adc09f14065aafaff624eb64ca3c06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3a08c65690aff38550dca60f9518f379973240360fab5a8892abb984b008577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a08c65690aff38550dca60f9518f379973240360fab5a8892abb984b008577->enter($__internal_b3a08c65690aff38550dca60f9518f379973240360fab5a8892abb984b008577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b3a08c65690aff38550dca60f9518f379973240360fab5a8892abb984b008577->leave($__internal_b3a08c65690aff38550dca60f9518f379973240360fab5a8892abb984b008577_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
