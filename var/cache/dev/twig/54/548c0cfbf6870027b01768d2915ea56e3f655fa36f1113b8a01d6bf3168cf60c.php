<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8891a7e21d6d00055e964632f6c11eedfe5b61216fb94380c46b6df465f39751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_6fc079a88e0488d52ca57e4d7e44355b64cfe2897b4a987baf16add4d24183fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc079a88e0488d52ca57e4d7e44355b64cfe2897b4a987baf16add4d24183fb->enter($__internal_6fc079a88e0488d52ca57e4d7e44355b64cfe2897b4a987baf16add4d24183fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fc079a88e0488d52ca57e4d7e44355b64cfe2897b4a987baf16add4d24183fb->leave($__internal_6fc079a88e0488d52ca57e4d7e44355b64cfe2897b4a987baf16add4d24183fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fadf361c85ca04cadd6e882862fe056404f914c1439e263c1147df15193e1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fadf361c85ca04cadd6e882862fe056404f914c1439e263c1147df15193e1ea->enter($__internal_9fadf361c85ca04cadd6e882862fe056404f914c1439e263c1147df15193e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9fadf361c85ca04cadd6e882862fe056404f914c1439e263c1147df15193e1ea->leave($__internal_9fadf361c85ca04cadd6e882862fe056404f914c1439e263c1147df15193e1ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
