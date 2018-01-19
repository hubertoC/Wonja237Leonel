<?php

/* HZWonja237Bundle:ArtistePublic:newsLetter.html.twig */
class __TwigTemplate_0acf604988622d885eb6a027dc7f96216130e8ca57a0e24ff7a54f996b6adcb3 extends Twig_Template
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
        $__internal_d3fa6c100bfc3aa03ff115659f3d511c824d5b851ef2bcd9b4bca83a5dac2a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fa6c100bfc3aa03ff115659f3d511c824d5b851ef2bcd9b4bca83a5dac2a09->enter($__internal_d3fa6c100bfc3aa03ff115659f3d511c824d5b851ef2bcd9b4bca83a5dac2a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:newsLetter.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/newsLetter.css"), "html", null, true);
        echo "\">


<section class=\"home-newsletter\" >
<div class=\"container\" >
<div class=\"row\">
<div class=\"col-sm-12\">
\t<div class=\"single\" id=\"Newsletter\">
\t\t<h2>Abonnez-vous à notre newsletter</h2>
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "input-group")));
        echo "

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez votre E-Mail")));
        echo "
         <span class=\"input-group-btn\">
         ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "S'abonner"));
        echo "
         </span>
         ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


\t</div>
</div>
</div>
</div>
</section>
";
        
        $__internal_d3fa6c100bfc3aa03ff115659f3d511c824d5b851ef2bcd9b4bca83a5dac2a09->leave($__internal_d3fa6c100bfc3aa03ff115659f3d511c824d5b851ef2bcd9b4bca83a5dac2a09_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:newsLetter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  45 => 14,  40 => 12,  35 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/newsLetter.css') }}\">


<section class=\"home-newsletter\" >
<div class=\"container\" >
<div class=\"row\">
<div class=\"col-sm-12\">
\t<div class=\"single\" id=\"Newsletter\">
\t\t<h2>Abonnez-vous à notre newsletter</h2>
    {{ form_start(form , {attr: {class: 'input-group'} }) }}

    {{ form_row(form.email, {'attr':{'class':'form-control' , 'placeholder':'Entrez votre E-Mail'}})}}
         <span class=\"input-group-btn\">
         {{ form_widget(form.save, { 'label': 'S\\'abonner' }) }}
         </span>
         {{ form_end(form) }}


\t</div>
</div>
</div>
</div>
</section>
", "HZWonja237Bundle:ArtistePublic:newsLetter.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/newsLetter.html.twig");
    }
}
