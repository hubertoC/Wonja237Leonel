<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a75a56d7ed22441b535286c9dff0966a50cee003b8c45588dc577aae5c2e1ba3 extends Twig_Template
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
        $__internal_ad308ecd066dca9f23493375901e31f660c24862ce1be5b14547e9ea6c6884c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad308ecd066dca9f23493375901e31f660c24862ce1be5b14547e9ea6c6884c8->enter($__internal_ad308ecd066dca9f23493375901e31f660c24862ce1be5b14547e9ea6c6884c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ad308ecd066dca9f23493375901e31f660c24862ce1be5b14547e9ea6c6884c8->leave($__internal_ad308ecd066dca9f23493375901e31f660c24862ce1be5b14547e9ea6c6884c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
