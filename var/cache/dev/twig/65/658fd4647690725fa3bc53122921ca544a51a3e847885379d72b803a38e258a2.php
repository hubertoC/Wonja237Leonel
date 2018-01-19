<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_75a07baa67972f242ed188f4f4bb4dcb4d2e3f7d8ed2019abc7489577f7856c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6914de61706372e7770ae43416eccb4b8e5dd726f8c87f0f8c3123b9f80bf8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6914de61706372e7770ae43416eccb4b8e5dd726f8c87f0f8c3123b9f80bf8af->enter($__internal_6914de61706372e7770ae43416eccb4b8e5dd726f8c87f0f8c3123b9f80bf8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6914de61706372e7770ae43416eccb4b8e5dd726f8c87f0f8c3123b9f80bf8af->leave($__internal_6914de61706372e7770ae43416eccb4b8e5dd726f8c87f0f8c3123b9f80bf8af_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b3ba0e0e4c494fa7a64e461450e0ef8bb8c40611be8f690272e45444908c0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3ba0e0e4c494fa7a64e461450e0ef8bb8c40611be8f690272e45444908c0d0->enter($__internal_3b3ba0e0e4c494fa7a64e461450e0ef8bb8c40611be8f690272e45444908c0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_3b3ba0e0e4c494fa7a64e461450e0ef8bb8c40611be8f690272e45444908c0d0->leave($__internal_3b3ba0e0e4c494fa7a64e461450e0ef8bb8c40611be8f690272e45444908c0d0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_467068db1754c7569a37e1216c128c38907ddb1c0e052ab142acb43d40e95d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467068db1754c7569a37e1216c128c38907ddb1c0e052ab142acb43d40e95d6f->enter($__internal_467068db1754c7569a37e1216c128c38907ddb1c0e052ab142acb43d40e95d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_467068db1754c7569a37e1216c128c38907ddb1c0e052ab142acb43d40e95d6f->leave($__internal_467068db1754c7569a37e1216c128c38907ddb1c0e052ab142acb43d40e95d6f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5673708c15799913f890c0c42b22b8704cc85a4985987a7f6624e2a9b133f16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5673708c15799913f890c0c42b22b8704cc85a4985987a7f6624e2a9b133f16e->enter($__internal_5673708c15799913f890c0c42b22b8704cc85a4985987a7f6624e2a9b133f16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5673708c15799913f890c0c42b22b8704cc85a4985987a7f6624e2a9b133f16e->leave($__internal_5673708c15799913f890c0c42b22b8704cc85a4985987a7f6624e2a9b133f16e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
