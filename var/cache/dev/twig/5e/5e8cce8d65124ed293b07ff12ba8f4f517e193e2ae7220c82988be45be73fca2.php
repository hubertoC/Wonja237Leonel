<?php

/* :artiste:edit.html.twig */
class __TwigTemplate_3a1639860b658266196dbd6f65ad4db8b9709f6b3cf21425fca71c500f40b4eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":artiste:edit.html.twig", 1);
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
        $__internal_a5384a244ed2a364082432aa939592f8065394dbeb6b801b06dc023b0d41f811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5384a244ed2a364082432aa939592f8065394dbeb6b801b06dc023b0d41f811->enter($__internal_a5384a244ed2a364082432aa939592f8065394dbeb6b801b06dc023b0d41f811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":artiste:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5384a244ed2a364082432aa939592f8065394dbeb6b801b06dc023b0d41f811->leave($__internal_a5384a244ed2a364082432aa939592f8065394dbeb6b801b06dc023b0d41f811_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02abe310569e502e949ef3982f45c852c6a903a372ce637700e63a3fcf013a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02abe310569e502e949ef3982f45c852c6a903a372ce637700e63a3fcf013a1a->enter($__internal_02abe310569e502e949ef3982f45c852c6a903a372ce637700e63a3fcf013a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Artiste edit</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "surname", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ville", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sexe", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "style", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "status", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "number", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lu", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "



<div class=\"jumbotron\">
  ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "image", array()), "file", array()), 'row');
        echo "
  <td><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "image", array()), "webPath", array())), "html", null, true);
        echo "\" height=\"42\" width=\"42\" ></td>

  <br>
  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "categories", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
  <br>
  Video Youtube:
  ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "video", array()), "url", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

 <div>
     ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
       <div class=\"button_p_edit\">
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Modifier\" />

    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>

<div class=\"retour\">
      <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_index");
        echo "\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour á la liste</a>
</div>
        </li>
        <li>

            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "

            <div class=\"modifier\">
  <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Suprimer\">
</div>


            ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>

    </ul>
  </div>
  </div>
</div>
  </div>
";
        
        $__internal_02abe310569e502e949ef3982f45c852c6a903a372ce637700e63a3fcf013a1a->leave($__internal_02abe310569e502e949ef3982f45c852c6a903a372ce637700e63a3fcf013a1a_prof);

    }

    public function getTemplateName()
    {
        return ":artiste:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  136 => 47,  128 => 42,  119 => 36,  112 => 32,  106 => 29,  100 => 26,  94 => 23,  90 => 22,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Artiste edit</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
    {{ form_start(edit_form) }}
{{ form_row(edit_form.name, {'attr':{'class':'form-control'}})}}
{{ form_row(edit_form.surname, {'attr':{'class':'form-control'}})}}
{{ form_row(edit_form.ville, {'attr':{'class':'form-control'}})}}
{{ form_row(edit_form.email, {'attr':{'class':'form-control'}})}}
{{ form_row(edit_form.sexe, {'attr':{'class':'form-control'}})}}
{{ form_row(edit_form.style, {'attr':{'class':'form-control'}})}}
{{ form_row(edit_form.status, {'attr':{'class':'form-control'}})}}
{{ form_row(edit_form.number, {'attr':{'class':'form-control'}})}}
{{ form_row(edit_form.lu, {'attr':{'class':'form-control'}})}}



<div class=\"jumbotron\">
  {{ form_row(edit_form.image.file)}}
  <td><img src=\"{{ asset(artiste.image.webPath)}}\" height=\"42\" width=\"42\" ></td>

  <br>
  {{ form_row(edit_form.categories, {'attr':{'class':'form-control'}})}}
  <br>
  Video Youtube:
  {{ form_row(edit_form.video.url, {'attr':{'class':'form-control'}})}}

 <div>
     {{ form_widget(edit_form) }}
       <div class=\"button_p_edit\">
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Modifier\" />

    {{ form_end(edit_form) }}

    <ul>
        <li>

<div class=\"retour\">
      <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminArtiste_index') }}\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour á la liste</a>
</div>
        </li>
        <li>

            {{ form_start(delete_form) }}

            <div class=\"modifier\">
  <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Suprimer\">
</div>


            {{ form_end(delete_form) }}
        </li>

    </ul>
  </div>
  </div>
</div>
  </div>
{% endblock %}
", ":artiste:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/artiste/edit.html.twig");
    }
}
