<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_08b1b94e6f0571f6f6da27e4f529874b48fc7e427e5a1b646148bd7c1fcc29f6 extends Twig_Template
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
        $__internal_808dc19cec11a40eb8ca20701daff3431cdfe01686f46eb4467a35159e565349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808dc19cec11a40eb8ca20701daff3431cdfe01686f46eb4467a35159e565349->enter($__internal_808dc19cec11a40eb8ca20701daff3431cdfe01686f46eb4467a35159e565349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_808dc19cec11a40eb8ca20701daff3431cdfe01686f46eb4467a35159e565349->leave($__internal_808dc19cec11a40eb8ca20701daff3431cdfe01686f46eb4467a35159e565349_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d12d5359b551d323fc3ae92d42a6dd6d94c5aaf01a819f3c393ca46c58907a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12d5359b551d323fc3ae92d42a6dd6d94c5aaf01a819f3c393ca46c58907a5f->enter($__internal_d12d5359b551d323fc3ae92d42a6dd6d94c5aaf01a819f3c393ca46c58907a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d12d5359b551d323fc3ae92d42a6dd6d94c5aaf01a819f3c393ca46c58907a5f->leave($__internal_d12d5359b551d323fc3ae92d42a6dd6d94c5aaf01a819f3c393ca46c58907a5f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0e8a6f87597aa64cf6889d79a34405eddb3a6848545a8c163307b092f8c593a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8a6f87597aa64cf6889d79a34405eddb3a6848545a8c163307b092f8c593a2->enter($__internal_0e8a6f87597aa64cf6889d79a34405eddb3a6848545a8c163307b092f8c593a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0e8a6f87597aa64cf6889d79a34405eddb3a6848545a8c163307b092f8c593a2->leave($__internal_0e8a6f87597aa64cf6889d79a34405eddb3a6848545a8c163307b092f8c593a2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_660a0339dfb961d07c0b49a38c7307d50b58c6f74122f0e010907a2a86c59697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660a0339dfb961d07c0b49a38c7307d50b58c6f74122f0e010907a2a86c59697->enter($__internal_660a0339dfb961d07c0b49a38c7307d50b58c6f74122f0e010907a2a86c59697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_660a0339dfb961d07c0b49a38c7307d50b58c6f74122f0e010907a2a86c59697->leave($__internal_660a0339dfb961d07c0b49a38c7307d50b58c6f74122f0e010907a2a86c59697_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
