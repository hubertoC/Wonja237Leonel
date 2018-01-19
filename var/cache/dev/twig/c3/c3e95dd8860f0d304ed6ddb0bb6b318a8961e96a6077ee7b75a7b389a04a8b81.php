<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2946b34403719e503c12049c7b6196c30373c085dc2d46f0c0b98aef17726d3d extends Twig_Template
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
        $__internal_1666620ec7af9d355cc6919ab6e27321662d0ce95228e331ed94ad0f2c91090c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1666620ec7af9d355cc6919ab6e27321662d0ce95228e331ed94ad0f2c91090c->enter($__internal_1666620ec7af9d355cc6919ab6e27321662d0ce95228e331ed94ad0f2c91090c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1666620ec7af9d355cc6919ab6e27321662d0ce95228e331ed94ad0f2c91090c->leave($__internal_1666620ec7af9d355cc6919ab6e27321662d0ce95228e331ed94ad0f2c91090c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
