<?php

/* :publicites:edit.html.twig */
class __TwigTemplate_aad8a35b44e2ed97097bc220518e5e527760d12943a878cd034fce5d8c0c1cad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicites:edit.html.twig", 1);
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
        $__internal_e0d843b6037f90ed27fc1967285281a99cc3bb7529be3580ae088e1977a4a048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d843b6037f90ed27fc1967285281a99cc3bb7529be3580ae088e1977a4a048->enter($__internal_e0d843b6037f90ed27fc1967285281a99cc3bb7529be3580ae088e1977a4a048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicites:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d843b6037f90ed27fc1967285281a99cc3bb7529be3580ae088e1977a4a048->leave($__internal_e0d843b6037f90ed27fc1967285281a99cc3bb7529be3580ae088e1977a4a048_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd70e116458fd2809f6d537a41d05a44fd6c6beb576977429ce21ebea7d7bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd70e116458fd2809f6d537a41d05a44fd6c6beb576977429ce21ebea7d7bbb->enter($__internal_9fd70e116458fd2809f6d537a41d05a44fd6c6beb576977429ce21ebea7d7bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Modifier Publicite</h1>
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
        
        $__internal_9fd70e116458fd2809f6d537a41d05a44fd6c6beb576977429ce21ebea7d7bbb->leave($__internal_9fd70e116458fd2809f6d537a41d05a44fd6c6beb576977429ce21ebea7d7bbb_prof);

    }

    public function getTemplateName()
    {
        return ":publicites:edit.html.twig";
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
    <h1>Modifier Publicite</h1>
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
", ":publicites:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicites/edit.html.twig");
    }
}
