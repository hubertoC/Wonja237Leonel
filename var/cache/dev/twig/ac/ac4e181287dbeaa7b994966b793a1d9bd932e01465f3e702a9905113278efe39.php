<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7a3b979689713a6c34462739ea1f577dde9409d7ae27543474fd76ef0fc13d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f892fb1d8779e2af70a806a9a963104743d303d01dbacc0c5088b6958ba6689d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f892fb1d8779e2af70a806a9a963104743d303d01dbacc0c5088b6958ba6689d->enter($__internal_f892fb1d8779e2af70a806a9a963104743d303d01dbacc0c5088b6958ba6689d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f892fb1d8779e2af70a806a9a963104743d303d01dbacc0c5088b6958ba6689d->leave($__internal_f892fb1d8779e2af70a806a9a963104743d303d01dbacc0c5088b6958ba6689d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a18a3b5cf8fdbf45447b31bf3cf4dead0c72c4d3af7b4d921d37557a98a08f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18a3b5cf8fdbf45447b31bf3cf4dead0c72c4d3af7b4d921d37557a98a08f3c->enter($__internal_a18a3b5cf8fdbf45447b31bf3cf4dead0c72c4d3af7b4d921d37557a98a08f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a18a3b5cf8fdbf45447b31bf3cf4dead0c72c4d3af7b4d921d37557a98a08f3c->leave($__internal_a18a3b5cf8fdbf45447b31bf3cf4dead0c72c4d3af7b4d921d37557a98a08f3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
