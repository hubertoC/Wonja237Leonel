<?php

/* HZWonja237Bundle:ArtistePublic:newsLetter.html.twig */
class __TwigTemplate_d7bf85292247708f5c6ba863e483bae80847dfb1c235eb176f8268b341a48f9a extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "input-group")));
        echo "

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez votre E-Mail")));
        echo "
         <span class=\"input-group-btn\">
         ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("label" => "S'abonner"));
        echo "
         </span>
         ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


\t</div>
</div>
</div>
</div>
</section>
";
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
        return array (  47 => 16,  42 => 14,  37 => 12,  32 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:newsLetter.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/newsLetter.html.twig");
    }
}
