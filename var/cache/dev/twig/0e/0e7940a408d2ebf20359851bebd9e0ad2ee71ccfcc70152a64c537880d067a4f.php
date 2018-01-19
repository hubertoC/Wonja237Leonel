<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5aaef4a3c5fbb7a72a01b0a26b954199ed07a8178ddf9e4b65bad226a87e9a80 extends Twig_Template
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
        $__internal_8a8e7f53b9e9faeab38dfbac02645f6abcbc891b582b4afc8434634ca51bb782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8e7f53b9e9faeab38dfbac02645f6abcbc891b582b4afc8434634ca51bb782->enter($__internal_8a8e7f53b9e9faeab38dfbac02645f6abcbc891b582b4afc8434634ca51bb782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_8a8e7f53b9e9faeab38dfbac02645f6abcbc891b582b4afc8434634ca51bb782->leave($__internal_8a8e7f53b9e9faeab38dfbac02645f6abcbc891b582b4afc8434634ca51bb782_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
