<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3474df371df9bb480f7d6512091bb40695c49d7c94ef58816700188365fdbf6b extends Twig_Template
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
        $__internal_f3bdc8485e0e78bbbbe8a69ffc5cc9255bbaa44fa9e2e3bf3a90c90d1655e39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bdc8485e0e78bbbbe8a69ffc5cc9255bbaa44fa9e2e3bf3a90c90d1655e39c->enter($__internal_f3bdc8485e0e78bbbbe8a69ffc5cc9255bbaa44fa9e2e3bf3a90c90d1655e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f3bdc8485e0e78bbbbe8a69ffc5cc9255bbaa44fa9e2e3bf3a90c90d1655e39c->leave($__internal_f3bdc8485e0e78bbbbe8a69ffc5cc9255bbaa44fa9e2e3bf3a90c90d1655e39c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
