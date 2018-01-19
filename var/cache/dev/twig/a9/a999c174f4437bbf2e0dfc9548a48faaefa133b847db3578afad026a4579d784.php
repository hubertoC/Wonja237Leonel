<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fc28a888f636319bf498a4b4ea94393d45885807db2424dc348546816fafd375 extends Twig_Template
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
        $__internal_7f9f26bbc25b8627ea4019c354aca3eb051997e55cc7f4a10ce8c4cf78b68c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9f26bbc25b8627ea4019c354aca3eb051997e55cc7f4a10ce8c4cf78b68c59->enter($__internal_7f9f26bbc25b8627ea4019c354aca3eb051997e55cc7f4a10ce8c4cf78b68c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7f9f26bbc25b8627ea4019c354aca3eb051997e55cc7f4a10ce8c4cf78b68c59->leave($__internal_7f9f26bbc25b8627ea4019c354aca3eb051997e55cc7f4a10ce8c4cf78b68c59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
