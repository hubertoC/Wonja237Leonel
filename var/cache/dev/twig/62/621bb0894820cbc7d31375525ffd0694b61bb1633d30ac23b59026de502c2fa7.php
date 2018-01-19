<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ea7f6d354d92fcbb0b1e9779a23e5a29676a4f48fa4c8cc63ad14fe88c8c6f4a extends Twig_Template
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
        $__internal_90793fd8595d57f27848e22e83b58a3fca6e2b8e609f21719667c0e3dc0dadf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90793fd8595d57f27848e22e83b58a3fca6e2b8e609f21719667c0e3dc0dadf2->enter($__internal_90793fd8595d57f27848e22e83b58a3fca6e2b8e609f21719667c0e3dc0dadf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_90793fd8595d57f27848e22e83b58a3fca6e2b8e609f21719667c0e3dc0dadf2->leave($__internal_90793fd8595d57f27848e22e83b58a3fca6e2b8e609f21719667c0e3dc0dadf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
