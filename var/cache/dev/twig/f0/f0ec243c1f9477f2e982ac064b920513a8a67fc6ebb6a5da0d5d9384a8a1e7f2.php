<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_454a17297e93d0fcae578b6733ddf2d229ef49b33670d5ab23ae7d1938c0408a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d69767cf7d24d8114f6cf5bb0a50bcc621291c5730c5a2a6ace5555864df7a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69767cf7d24d8114f6cf5bb0a50bcc621291c5730c5a2a6ace5555864df7a0e->enter($__internal_d69767cf7d24d8114f6cf5bb0a50bcc621291c5730c5a2a6ace5555864df7a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69767cf7d24d8114f6cf5bb0a50bcc621291c5730c5a2a6ace5555864df7a0e->leave($__internal_d69767cf7d24d8114f6cf5bb0a50bcc621291c5730c5a2a6ace5555864df7a0e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_634fa102403e31f2d21a1af8cefe196df019ed375ee06c6fb94fe52996d557ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634fa102403e31f2d21a1af8cefe196df019ed375ee06c6fb94fe52996d557ce->enter($__internal_634fa102403e31f2d21a1af8cefe196df019ed375ee06c6fb94fe52996d557ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_634fa102403e31f2d21a1af8cefe196df019ed375ee06c6fb94fe52996d557ce->leave($__internal_634fa102403e31f2d21a1af8cefe196df019ed375ee06c6fb94fe52996d557ce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5933567b2c6adbe3a3722baea1af29b955522de8f4d7cebab866611e5cdd4602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5933567b2c6adbe3a3722baea1af29b955522de8f4d7cebab866611e5cdd4602->enter($__internal_5933567b2c6adbe3a3722baea1af29b955522de8f4d7cebab866611e5cdd4602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5933567b2c6adbe3a3722baea1af29b955522de8f4d7cebab866611e5cdd4602->leave($__internal_5933567b2c6adbe3a3722baea1af29b955522de8f4d7cebab866611e5cdd4602_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23b9bdb91df6d5e3efa9477d0dec3c6f699491fcd64849d1fc0f52433bbd354c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b9bdb91df6d5e3efa9477d0dec3c6f699491fcd64849d1fc0f52433bbd354c->enter($__internal_23b9bdb91df6d5e3efa9477d0dec3c6f699491fcd64849d1fc0f52433bbd354c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_23b9bdb91df6d5e3efa9477d0dec3c6f699491fcd64849d1fc0f52433bbd354c->leave($__internal_23b9bdb91df6d5e3efa9477d0dec3c6f699491fcd64849d1fc0f52433bbd354c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
