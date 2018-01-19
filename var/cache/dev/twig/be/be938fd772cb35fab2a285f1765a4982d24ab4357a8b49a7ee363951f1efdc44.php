<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d1d760939fd81003fc8ae9017f1a56e6b7164fc7caf02fd3e468579f8a137148 extends Twig_Template
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
        $__internal_94f6c9893a6c171d7659be78e3acc30737e38c40495a5a5b3a8f464f37bdf2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f6c9893a6c171d7659be78e3acc30737e38c40495a5a5b3a8f464f37bdf2a9->enter($__internal_94f6c9893a6c171d7659be78e3acc30737e38c40495a5a5b3a8f464f37bdf2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_94f6c9893a6c171d7659be78e3acc30737e38c40495a5a5b3a8f464f37bdf2a9->leave($__internal_94f6c9893a6c171d7659be78e3acc30737e38c40495a5a5b3a8f464f37bdf2a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
