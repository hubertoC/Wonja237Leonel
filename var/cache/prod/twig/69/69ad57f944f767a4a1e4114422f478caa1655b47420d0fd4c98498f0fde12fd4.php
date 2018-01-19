<?php

/* :category:edit.html.twig */
class __TwigTemplate_167f06d31326cedeea0ee2e13a0696ee1d052963509c67055612dcaca12d7db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":category:edit.html.twig", 1);
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
        echo "    <h1>Cree une categorie</h1>
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
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["edit_form"] ?? null), 'widget');
        echo "
        <div>
          <br>
  <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    <ul>

        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\"  href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
          </div>

        </li>

    </ul>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return ":category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  55 => 16,  48 => 12,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":category:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/category/edit.html.twig");
    }
}
