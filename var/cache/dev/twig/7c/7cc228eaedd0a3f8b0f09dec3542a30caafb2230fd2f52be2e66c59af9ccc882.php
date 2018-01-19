<?php

/* :artiste:new.html.twig */
class __TwigTemplate_05a0b63d68dd1d25d17550d74b3dbc19ebb656f4779806e9dea0d67874e6ac57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":artiste:new.html.twig", 1);
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
        $__internal_43e909c9dadb40e570a537a9e94a8dc8a6a94d7852b3208907ca479a20ffe474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e909c9dadb40e570a537a9e94a8dc8a6a94d7852b3208907ca479a20ffe474->enter($__internal_43e909c9dadb40e570a537a9e94a8dc8a6a94d7852b3208907ca479a20ffe474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":artiste:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e909c9dadb40e570a537a9e94a8dc8a6a94d7852b3208907ca479a20ffe474->leave($__internal_43e909c9dadb40e570a537a9e94a8dc8a6a94d7852b3208907ca479a20ffe474_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c381158296a88fa912ec11326fa024e13c1f876632696ebd943dc9e7cb88a364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c381158296a88fa912ec11326fa024e13c1f876632696ebd943dc9e7cb88a364->enter($__internal_c381158296a88fa912ec11326fa024e13c1f876632696ebd943dc9e7cb88a364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Artiste creation</h1>
    <div class= \"cration_artiste\">
   ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
       <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
           ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "style", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
<br>
   <div class=\"jumbotron\">
     ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), "file", array()), 'row');
        echo "
     <br>
     ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
     <br>
     Video Youtube:
     ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "video", array()), "url", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

    <div>

    </div>

   </br>

           ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
           </div>
         </div>





         <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Valider\" />
           ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
           <ul>

               <li>
                 <div class=\"lon\">

                   <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_index");
        echo "\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour á la list</a>
                 </div>

               </li>

           </ul>
         </div>

           </div>
";
        
        $__internal_c381158296a88fa912ec11326fa024e13c1f876632696ebd943dc9e7cb88a364->leave($__internal_c381158296a88fa912ec11326fa024e13c1f876632696ebd943dc9e7cb88a364_prof);

    }

    public function getTemplateName()
    {
        return ":artiste:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  123 => 43,  111 => 34,  100 => 26,  94 => 23,  89 => 21,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Artiste creation</h1>
    <div class= \"cration_artiste\">
   {{ form_start(form) }}
       <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
           {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
             {{ form_row(form.surname, {'attr':{'class':'form-control'}})}}
   {{ form_row(form.ville, {'attr':{'class':'form-control'}})}}
   {{ form_row(form.email, {'attr':{'class':'form-control'}})}}
   {{ form_row(form.sexe, {'attr':{'class':'form-control'}})}}
   {{ form_row(form.style, {'attr':{'class':'form-control'}})}}
   {{ form_row(form.status, {'attr':{'class':'form-control'}})}}
   {{ form_row(form.number, {'attr':{'class':'form-control'}})}}
   {{ form_row(form.description, {'attr':{'class':'form-control'}})}}
<br>
   <div class=\"jumbotron\">
     {{ form_row(form.image.file)}}
     <br>
     {{ form_row(form.categories, {'attr':{'class':'form-control'}})}}
     <br>
     Video Youtube:
     {{ form_row(form.video.url, {'attr':{'class':'form-control'}})}}

    <div>

    </div>

   </br>

           {{ form_widget(form) }}
           </div>
         </div>





         <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Valider\" />
           {{ form_end(form) }}
           <ul>

               <li>
                 <div class=\"lon\">

                   <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminArtiste_index') }}\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour á la list</a>
                 </div>

               </li>

           </ul>
         </div>

           </div>
{% endblock %}
", ":artiste:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/artiste/new.html.twig");
    }
}
