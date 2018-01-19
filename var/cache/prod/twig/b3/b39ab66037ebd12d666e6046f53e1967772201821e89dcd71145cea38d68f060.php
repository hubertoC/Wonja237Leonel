<?php

/* :publicites:new.html.twig */
class __TwigTemplate_0253fa60f2d39ba64929b72794d713122aa548c6eceae77257a9af67d50d986b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicites:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutP.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Cree un Partenaire</h1>
<div class= \"cration_artiste\">
  <div class=\"cration mdl-shadow--2dp\">
    <div class=\"form_creation\">
      <div class=\"form-groupe\">
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "link", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\"/>
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    <ul>
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_index");
        echo "\">Retour</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":publicites:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  60 => 15,  55 => 13,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":publicites:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicites/new.html.twig");
    }
}
