<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0694672a2f007b815dceffb00719ccf014ac1f0565bfb1e0b615ececd71ffa2d extends Twig_Template
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
        $__internal_4d896f54d36d0ac7fb4bc24258a058dfd35a26265db2f3fc72529ef0168be0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d896f54d36d0ac7fb4bc24258a058dfd35a26265db2f3fc72529ef0168be0e0->enter($__internal_4d896f54d36d0ac7fb4bc24258a058dfd35a26265db2f3fc72529ef0168be0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4d896f54d36d0ac7fb4bc24258a058dfd35a26265db2f3fc72529ef0168be0e0->leave($__internal_4d896f54d36d0ac7fb4bc24258a058dfd35a26265db2f3fc72529ef0168be0e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
