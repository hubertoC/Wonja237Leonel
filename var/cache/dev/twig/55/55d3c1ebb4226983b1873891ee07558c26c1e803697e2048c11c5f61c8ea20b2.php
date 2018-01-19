<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e01ddedc13f4dc112887157cd08ca30258ce646951a74fe71d1b8219a54818ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8cb888e5e1a80340e080304f25a2c17e41830176f493473445e6d01940cb2d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb888e5e1a80340e080304f25a2c17e41830176f493473445e6d01940cb2d35->enter($__internal_8cb888e5e1a80340e080304f25a2c17e41830176f493473445e6d01940cb2d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb888e5e1a80340e080304f25a2c17e41830176f493473445e6d01940cb2d35->leave($__internal_8cb888e5e1a80340e080304f25a2c17e41830176f493473445e6d01940cb2d35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e90fb7f50a4fff772ef2211c4540a8fee6a976dd36272b678459298d428d8c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90fb7f50a4fff772ef2211c4540a8fee6a976dd36272b678459298d428d8c18->enter($__internal_e90fb7f50a4fff772ef2211c4540a8fee6a976dd36272b678459298d428d8c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e90fb7f50a4fff772ef2211c4540a8fee6a976dd36272b678459298d428d8c18->leave($__internal_e90fb7f50a4fff772ef2211c4540a8fee6a976dd36272b678459298d428d8c18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
