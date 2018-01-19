<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e377d92f0a2c3eacd6a0de0ca02554e3bc1447aed7c5a3aac403910e210bf9e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_bab81b0d3dd5257c204443c6c441d3388e1b5a2a229cf4a5ac81e71d77702ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab81b0d3dd5257c204443c6c441d3388e1b5a2a229cf4a5ac81e71d77702ffb->enter($__internal_bab81b0d3dd5257c204443c6c441d3388e1b5a2a229cf4a5ac81e71d77702ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bab81b0d3dd5257c204443c6c441d3388e1b5a2a229cf4a5ac81e71d77702ffb->leave($__internal_bab81b0d3dd5257c204443c6c441d3388e1b5a2a229cf4a5ac81e71d77702ffb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc485eeedad99ce34fef8c51eb56237e5c64627252d7ba7cf73379f383a3de77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc485eeedad99ce34fef8c51eb56237e5c64627252d7ba7cf73379f383a3de77->enter($__internal_bc485eeedad99ce34fef8c51eb56237e5c64627252d7ba7cf73379f383a3de77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bc485eeedad99ce34fef8c51eb56237e5c64627252d7ba7cf73379f383a3de77->leave($__internal_bc485eeedad99ce34fef8c51eb56237e5c64627252d7ba7cf73379f383a3de77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
