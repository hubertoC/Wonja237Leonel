<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_62e18af929096670783add4293c0fc2e9701b19229ee8d85ef570199c36d97e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ff9b2749b54c99a200d4dc4e2ffb9504f6393897090a54282792291537bf3d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9b2749b54c99a200d4dc4e2ffb9504f6393897090a54282792291537bf3d78->enter($__internal_ff9b2749b54c99a200d4dc4e2ffb9504f6393897090a54282792291537bf3d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff9b2749b54c99a200d4dc4e2ffb9504f6393897090a54282792291537bf3d78->leave($__internal_ff9b2749b54c99a200d4dc4e2ffb9504f6393897090a54282792291537bf3d78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c57afcc533adc9fc3c7d9b6ed1f9651f09e0c81ba02351faa888f937f8ae5d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57afcc533adc9fc3c7d9b6ed1f9651f09e0c81ba02351faa888f937f8ae5d7a->enter($__internal_c57afcc533adc9fc3c7d9b6ed1f9651f09e0c81ba02351faa888f937f8ae5d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c57afcc533adc9fc3c7d9b6ed1f9651f09e0c81ba02351faa888f937f8ae5d7a->leave($__internal_c57afcc533adc9fc3c7d9b6ed1f9651f09e0c81ba02351faa888f937f8ae5d7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
