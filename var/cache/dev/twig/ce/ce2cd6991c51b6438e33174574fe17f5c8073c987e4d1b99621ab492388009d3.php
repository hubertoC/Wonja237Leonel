<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e65d50dfeb590d98c29ff2cd43cc1c58b21d41ea71fd609eb695ee730fbd369a extends Twig_Template
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
        $__internal_49b74d1b54a639cef1037b7cf2cf83428e6a70e4ef962708f7f1fe05c840297c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b74d1b54a639cef1037b7cf2cf83428e6a70e4ef962708f7f1fe05c840297c->enter($__internal_49b74d1b54a639cef1037b7cf2cf83428e6a70e4ef962708f7f1fe05c840297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_49b74d1b54a639cef1037b7cf2cf83428e6a70e4ef962708f7f1fe05c840297c->leave($__internal_49b74d1b54a639cef1037b7cf2cf83428e6a70e4ef962708f7f1fe05c840297c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
