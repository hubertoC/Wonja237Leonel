<?php

/* :publicitedefile:edit.html.twig */
class __TwigTemplate_f4baf7f74d04a48be859a45502a68e4d3a0f366f25032b0f10075c5ca1d8e062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicitedefile:edit.html.twig", 1);
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
        echo "    <h1>Modifier la Publicité</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
          <div class=\"form-groupe\">
      ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
<br>
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

<br>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["edit_form"] ?? null), 'widget');
        echo "
        <div>
          <br>
  <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\" />
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    <ul>

        <li>
          <div class=\"lon\">
            <input type=\"submit\" value=\"Delete\" class=\"mdl-button mdl-js-button mdl-button--raised\" >
          </div>

        </li>

    </ul>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return ":publicitedefile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  53 => 14,  47 => 11,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":publicitedefile:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicitedefile/edit.html.twig");
    }
}
