<?php

/* :publicitedefile:edit.html.twig */
class __TwigTemplate_df4c748d0981ad543c994086d4047e6662b4dac63854ec0399223b6fb5b649cc extends Twig_Template
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
        $__internal_b5807abe09ef294ab9fbd90f134aa65c41e29d06b786ceabc0fe3ca2588394e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5807abe09ef294ab9fbd90f134aa65c41e29d06b786ceabc0fe3ca2588394e2->enter($__internal_b5807abe09ef294ab9fbd90f134aa65c41e29d06b786ceabc0fe3ca2588394e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicitedefile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5807abe09ef294ab9fbd90f134aa65c41e29d06b786ceabc0fe3ca2588394e2->leave($__internal_b5807abe09ef294ab9fbd90f134aa65c41e29d06b786ceabc0fe3ca2588394e2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c314b1388359e777f546861ce295227dd6a5c0ed27796dff51e3a785b170660c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c314b1388359e777f546861ce295227dd6a5c0ed27796dff51e3a785b170660c->enter($__internal_c314b1388359e777f546861ce295227dd6a5c0ed27796dff51e3a785b170660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Modifier la Publicité</h1>
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
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

<br>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div>
          <br>
  <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\" />
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
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
        
        $__internal_c314b1388359e777f546861ce295227dd6a5c0ed27796dff51e3a785b170660c->leave($__internal_c314b1388359e777f546861ce295227dd6a5c0ed27796dff51e3a785b170660c_prof);

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
        return array (  69 => 18,  62 => 14,  56 => 11,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
    <h1>Modifier la Publicité</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
          <div class=\"form-groupe\">
      {{ form_start(edit_form) }}
{{ form_row(edit_form.name, {'attr':{'class':'form-control'}})}}
<br>
{{ form_row(edit_form.description, {'attr':{'class':'form-control'}})}}

<br>
        {{ form_widget(edit_form) }}
        <div>
          <br>
  <input type=\"submit\" value=\"Create\" class=\"mdl-button mdl-js-button mdl-button--raised\" />
    {{ form_end(edit_form) }}
    <ul>

        <li>
          <div class=\"lon\">
            <input type=\"submit\" value=\"Delete\" class=\"mdl-button mdl-js-button mdl-button--raised\" >
          </div>

        </li>

    </ul>
</div>
</div>

{% endblock %}
", ":publicitedefile:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicitedefile/edit.html.twig");
    }
}
