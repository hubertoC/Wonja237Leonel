<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_55c8ff360a8afb82d0f78a04e516f63dea1f40ddf497ca2aeb06dabf0d208ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_05ecaa89bb5401b69424d0bdd38b047bbfb087b82bd5a44751ed407e019bc325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ecaa89bb5401b69424d0bdd38b047bbfb087b82bd5a44751ed407e019bc325->enter($__internal_05ecaa89bb5401b69424d0bdd38b047bbfb087b82bd5a44751ed407e019bc325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ecaa89bb5401b69424d0bdd38b047bbfb087b82bd5a44751ed407e019bc325->leave($__internal_05ecaa89bb5401b69424d0bdd38b047bbfb087b82bd5a44751ed407e019bc325_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8df3cfebc14ed4346960f2878315b07e01f592bfe8fef584baf678c4bfa0257b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df3cfebc14ed4346960f2878315b07e01f592bfe8fef584baf678c4bfa0257b->enter($__internal_8df3cfebc14ed4346960f2878315b07e01f592bfe8fef584baf678c4bfa0257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8df3cfebc14ed4346960f2878315b07e01f592bfe8fef584baf678c4bfa0257b->leave($__internal_8df3cfebc14ed4346960f2878315b07e01f592bfe8fef584baf678c4bfa0257b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
