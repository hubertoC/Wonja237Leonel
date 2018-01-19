<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ba988772a59f4e7f73cc2c7bf45672bf0fdccea1fb1f0a5d5aaa1d2b22c9fbc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44e51553f9178584822b25198214958e43756302b69f9e711fdbc651c34bf8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e51553f9178584822b25198214958e43756302b69f9e711fdbc651c34bf8cd->enter($__internal_44e51553f9178584822b25198214958e43756302b69f9e711fdbc651c34bf8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e51553f9178584822b25198214958e43756302b69f9e711fdbc651c34bf8cd->leave($__internal_44e51553f9178584822b25198214958e43756302b69f9e711fdbc651c34bf8cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c22f573ea223c6d28a7303e4a01d45264d80fc5f5583f064f87682c841dc66da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22f573ea223c6d28a7303e4a01d45264d80fc5f5583f064f87682c841dc66da->enter($__internal_c22f573ea223c6d28a7303e4a01d45264d80fc5f5583f064f87682c841dc66da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c22f573ea223c6d28a7303e4a01d45264d80fc5f5583f064f87682c841dc66da->leave($__internal_c22f573ea223c6d28a7303e4a01d45264d80fc5f5583f064f87682c841dc66da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0c069e1587997eb08cc192e2bae0398a29a24f94b6e422dcc47ba7f9c084b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c069e1587997eb08cc192e2bae0398a29a24f94b6e422dcc47ba7f9c084b47->enter($__internal_f0c069e1587997eb08cc192e2bae0398a29a24f94b6e422dcc47ba7f9c084b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f0c069e1587997eb08cc192e2bae0398a29a24f94b6e422dcc47ba7f9c084b47->leave($__internal_f0c069e1587997eb08cc192e2bae0398a29a24f94b6e422dcc47ba7f9c084b47_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
