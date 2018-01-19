<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_38a507aa2fc83647801f20a1651ba0ae79a828320d835255a636383f2e9155fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_7903a030e784fe7f5a7f78dac7036be5596be5a71995da019ab41da3978d994e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7903a030e784fe7f5a7f78dac7036be5596be5a71995da019ab41da3978d994e->enter($__internal_7903a030e784fe7f5a7f78dac7036be5596be5a71995da019ab41da3978d994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7903a030e784fe7f5a7f78dac7036be5596be5a71995da019ab41da3978d994e->leave($__internal_7903a030e784fe7f5a7f78dac7036be5596be5a71995da019ab41da3978d994e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_400cfe5ebae4d49ad555f924de6675e9b619da4610a8f4b8ce3bb1ac9c8efb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400cfe5ebae4d49ad555f924de6675e9b619da4610a8f4b8ce3bb1ac9c8efb81->enter($__internal_400cfe5ebae4d49ad555f924de6675e9b619da4610a8f4b8ce3bb1ac9c8efb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_400cfe5ebae4d49ad555f924de6675e9b619da4610a8f4b8ce3bb1ac9c8efb81->leave($__internal_400cfe5ebae4d49ad555f924de6675e9b619da4610a8f4b8ce3bb1ac9c8efb81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
