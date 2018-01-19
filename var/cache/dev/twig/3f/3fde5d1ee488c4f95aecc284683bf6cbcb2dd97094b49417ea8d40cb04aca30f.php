<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_359f56951bf45fb1e84a6ddaa6b853c3e1ece6fa3b7a6d549ef800adc36ae13c extends Twig_Template
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
        $__internal_a587ca689029a1c4737e98cb1af8c31f3dd201245c284b6c05444c61056b2a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a587ca689029a1c4737e98cb1af8c31f3dd201245c284b6c05444c61056b2a23->enter($__internal_a587ca689029a1c4737e98cb1af8c31f3dd201245c284b6c05444c61056b2a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a587ca689029a1c4737e98cb1af8c31f3dd201245c284b6c05444c61056b2a23->leave($__internal_a587ca689029a1c4737e98cb1af8c31f3dd201245c284b6c05444c61056b2a23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/homepages/2/d634677098/htdocs/wonja/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
