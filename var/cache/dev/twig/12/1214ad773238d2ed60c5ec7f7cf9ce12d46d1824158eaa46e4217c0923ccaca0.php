<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_bc93d2bc7e5a845194cfa71d7bc2dd68ea023666d56dc7a05b68b06c1c62d428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd346df7c9652c4b1f6bae5c84b55bbbeb28a4c1602bc7f2cfa2c205ce1a171f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd346df7c9652c4b1f6bae5c84b55bbbeb28a4c1602bc7f2cfa2c205ce1a171f->enter($__internal_fd346df7c9652c4b1f6bae5c84b55bbbeb28a4c1602bc7f2cfa2c205ce1a171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fd346df7c9652c4b1f6bae5c84b55bbbeb28a4c1602bc7f2cfa2c205ce1a171f->leave($__internal_fd346df7c9652c4b1f6bae5c84b55bbbeb28a4c1602bc7f2cfa2c205ce1a171f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
