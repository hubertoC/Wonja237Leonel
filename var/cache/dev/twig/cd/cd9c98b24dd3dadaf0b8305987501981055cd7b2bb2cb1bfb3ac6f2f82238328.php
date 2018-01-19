<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1aea2e737438f03d6b5c798a75e90fb8a89e8d957881aaaede3208927e2b5bfc extends Twig_Template
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
        $__internal_d7389438002539679ec2b7faffa640d06096be73a4180ef9efdad3d5be00f1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7389438002539679ec2b7faffa640d06096be73a4180ef9efdad3d5be00f1b6->enter($__internal_d7389438002539679ec2b7faffa640d06096be73a4180ef9efdad3d5be00f1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d7389438002539679ec2b7faffa640d06096be73a4180ef9efdad3d5be00f1b6->leave($__internal_d7389438002539679ec2b7faffa640d06096be73a4180ef9efdad3d5be00f1b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
