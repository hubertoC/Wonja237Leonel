<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fdc97e6f2e93ba47412eb1eae9f64a4155fe14924efefd97de1d99fd7a6b410e extends Twig_Template
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
        $__internal_82903a24a76fd136e9e80701635f7af4b49d376bf36da7722c76f544da4e911a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82903a24a76fd136e9e80701635f7af4b49d376bf36da7722c76f544da4e911a->enter($__internal_82903a24a76fd136e9e80701635f7af4b49d376bf36da7722c76f544da4e911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_82903a24a76fd136e9e80701635f7af4b49d376bf36da7722c76f544da4e911a->leave($__internal_82903a24a76fd136e9e80701635f7af4b49d376bf36da7722c76f544da4e911a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
