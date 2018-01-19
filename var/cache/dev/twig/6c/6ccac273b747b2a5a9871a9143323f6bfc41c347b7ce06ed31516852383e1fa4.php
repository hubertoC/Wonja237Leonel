<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_226477cf11a992838e0386d7959b5d436007dc37955f32be05f7bd844de9a221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_811f4bfa474a361f92def8421a75c1694187a67ccbd002ba8555f9b3bc7da521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811f4bfa474a361f92def8421a75c1694187a67ccbd002ba8555f9b3bc7da521->enter($__internal_811f4bfa474a361f92def8421a75c1694187a67ccbd002ba8555f9b3bc7da521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_811f4bfa474a361f92def8421a75c1694187a67ccbd002ba8555f9b3bc7da521->leave($__internal_811f4bfa474a361f92def8421a75c1694187a67ccbd002ba8555f9b3bc7da521_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40a712660cca4b3df95ffcf45877bea6b444e0db1a25e2e40b205be3ca0e8ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a712660cca4b3df95ffcf45877bea6b444e0db1a25e2e40b205be3ca0e8ef7->enter($__internal_40a712660cca4b3df95ffcf45877bea6b444e0db1a25e2e40b205be3ca0e8ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_40a712660cca4b3df95ffcf45877bea6b444e0db1a25e2e40b205be3ca0e8ef7->leave($__internal_40a712660cca4b3df95ffcf45877bea6b444e0db1a25e2e40b205be3ca0e8ef7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
