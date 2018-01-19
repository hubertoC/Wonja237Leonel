<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_db51b51f7bd6905a3601147452395596ab3c95999c32b5b9a0751eae73b9555a extends Twig_Template
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
        $__internal_9a13c20ce2bcc38434fbd3ee62b7dbd211c8ec914e00e8e07f0407ff0f1b8d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a13c20ce2bcc38434fbd3ee62b7dbd211c8ec914e00e8e07f0407ff0f1b8d2e->enter($__internal_9a13c20ce2bcc38434fbd3ee62b7dbd211c8ec914e00e8e07f0407ff0f1b8d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9a13c20ce2bcc38434fbd3ee62b7dbd211c8ec914e00e8e07f0407ff0f1b8d2e->leave($__internal_9a13c20ce2bcc38434fbd3ee62b7dbd211c8ec914e00e8e07f0407ff0f1b8d2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
