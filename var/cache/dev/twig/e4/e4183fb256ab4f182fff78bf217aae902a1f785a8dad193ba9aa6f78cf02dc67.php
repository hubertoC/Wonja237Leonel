<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0f3198fcbd2a8e7d62d3ecec7e9f84464a4194e680339f6b01e6cf567ab57c55 extends Twig_Template
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
        $__internal_e2ce600b87e44c5ade002f0be9fcf2c8571f4aff9ba9e4067f8d5fa94d10bfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ce600b87e44c5ade002f0be9fcf2c8571f4aff9ba9e4067f8d5fa94d10bfaf->enter($__internal_e2ce600b87e44c5ade002f0be9fcf2c8571f4aff9ba9e4067f8d5fa94d10bfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e2ce600b87e44c5ade002f0be9fcf2c8571f4aff9ba9e4067f8d5fa94d10bfaf->leave($__internal_e2ce600b87e44c5ade002f0be9fcf2c8571f4aff9ba9e4067f8d5fa94d10bfaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
