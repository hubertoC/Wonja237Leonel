<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_af928be6b8564925b4f833b0d3a2bbc25a5c02faba901a3b6219cc66ab0ef3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dd672eaa6b4ced2dffa63e88cc2348f0ac59d339f71df5a6bcf971506d52743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd672eaa6b4ced2dffa63e88cc2348f0ac59d339f71df5a6bcf971506d52743->enter($__internal_8dd672eaa6b4ced2dffa63e88cc2348f0ac59d339f71df5a6bcf971506d52743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8dd672eaa6b4ced2dffa63e88cc2348f0ac59d339f71df5a6bcf971506d52743->leave($__internal_8dd672eaa6b4ced2dffa63e88cc2348f0ac59d339f71df5a6bcf971506d52743_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_651e4a7a4fec394f6d0074efa772604587203e9e1ec20e8f3113f938fc20d263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651e4a7a4fec394f6d0074efa772604587203e9e1ec20e8f3113f938fc20d263->enter($__internal_651e4a7a4fec394f6d0074efa772604587203e9e1ec20e8f3113f938fc20d263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_651e4a7a4fec394f6d0074efa772604587203e9e1ec20e8f3113f938fc20d263->leave($__internal_651e4a7a4fec394f6d0074efa772604587203e9e1ec20e8f3113f938fc20d263_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
