<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e0d5c85e38f51ae05bd1e08e7b110e7d5d39824e5b47f2d664409aee80121131 extends Twig_Template
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
        $__internal_a318c8d0284d02aa4f53fbfa9d034c34bfb4eddb2a02a9a4eef16564ebd81581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a318c8d0284d02aa4f53fbfa9d034c34bfb4eddb2a02a9a4eef16564ebd81581->enter($__internal_a318c8d0284d02aa4f53fbfa9d034c34bfb4eddb2a02a9a4eef16564ebd81581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a318c8d0284d02aa4f53fbfa9d034c34bfb4eddb2a02a9a4eef16564ebd81581->leave($__internal_a318c8d0284d02aa4f53fbfa9d034c34bfb4eddb2a02a9a4eef16564ebd81581_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
