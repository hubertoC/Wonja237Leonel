<?php

/* :category:edit.html.twig */
class __TwigTemplate_3f926ff6719248949e59372ed5e02ee3af06272490ee3a30fa28c9cdd4537068 extends Twig_Template
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
        $__internal_d059fcdd1e5d0db4529bc6b05436b0ff31f3310265d184db321c1689d5f6d7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d059fcdd1e5d0db4529bc6b05436b0ff31f3310265d184db321c1689d5f6d7f6->enter($__internal_d059fcdd1e5d0db4529bc6b05436b0ff31f3310265d184db321c1689d5f6d7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d059fcdd1e5d0db4529bc6b05436b0ff31f3310265d184db321c1689d5f6d7f6->leave($__internal_d059fcdd1e5d0db4529bc6b05436b0ff31f3310265d184db321c1689d5f6d7f6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e4ebc9a062c92710d8ca6510991fc280f277c8386d2daeb1d5de789fd1c2bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4ebc9a062c92710d8ca6510991fc280f277c8386d2daeb1d5de789fd1c2bed->enter($__internal_4e4ebc9a062c92710d8ca6510991fc280f277c8386d2daeb1d5de789fd1c2bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Cree une categorie</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
          <div class=\"form-groupe\">
      ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

<br>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div>
          <br>
  <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
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
        
        $__internal_4e4ebc9a062c92710d8ca6510991fc280f277c8386d2daeb1d5de789fd1c2bed->leave($__internal_4e4ebc9a062c92710d8ca6510991fc280f277c8386d2daeb1d5de789fd1c2bed_prof);

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
        return array (  73 => 22,  64 => 16,  57 => 12,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutP.html.twig' %}
{% block body %}
    <h1>Cree une categorie</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
          <div class=\"form-groupe\">
      {{ form_start(edit_form) }}
{{ form_row(edit_form.name, {'attr':{'class':'form-control'}})}}

<br>
        {{ form_widget(edit_form) }}
        <div>
          <br>
  <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\" />
    {{ form_end(edit_form) }}
    <ul>

        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\"  href=\"{{ path('category_index') }}\">Back to the list</a>
          </div>

        </li>

    </ul>
</div>
</div>

{% endblock %}
", ":category:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/category/edit.html.twig");
    }
}
