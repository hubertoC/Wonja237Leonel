<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d7aa8cf849f95b1cbd447e6ef7b53f724cdf85013b8238e86d6fc5326145061e extends Twig_Template
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
        $__internal_83ba37946b1a933bda98d59587ed0429329570e4ca2e18764d52a981ed750117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ba37946b1a933bda98d59587ed0429329570e4ca2e18764d52a981ed750117->enter($__internal_83ba37946b1a933bda98d59587ed0429329570e4ca2e18764d52a981ed750117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_83ba37946b1a933bda98d59587ed0429329570e4ca2e18764d52a981ed750117->leave($__internal_83ba37946b1a933bda98d59587ed0429329570e4ca2e18764d52a981ed750117_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
