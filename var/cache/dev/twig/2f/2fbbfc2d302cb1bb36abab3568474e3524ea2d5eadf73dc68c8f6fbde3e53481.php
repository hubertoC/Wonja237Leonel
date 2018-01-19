<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b07bef6479d22f61b8b74bff27c5b6bc70257d1bec300a82347f13b9c5a66f0a extends Twig_Template
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
        $__internal_e4d2a099b5a8b552097fcfce7c6ed095010a01c9504c0384cf5e5f6b7b98bc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d2a099b5a8b552097fcfce7c6ed095010a01c9504c0384cf5e5f6b7b98bc48->enter($__internal_e4d2a099b5a8b552097fcfce7c6ed095010a01c9504c0384cf5e5f6b7b98bc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e4d2a099b5a8b552097fcfce7c6ed095010a01c9504c0384cf5e5f6b7b98bc48->leave($__internal_e4d2a099b5a8b552097fcfce7c6ed095010a01c9504c0384cf5e5f6b7b98bc48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
