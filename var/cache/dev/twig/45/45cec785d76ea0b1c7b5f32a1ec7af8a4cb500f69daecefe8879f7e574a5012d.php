<?php

/* HZWonja237Bundle:ArtistePublic:contact.html.twig */
class __TwigTemplate_0a2c014c6f8e714ac894b51195dccd56656492dd05a8d162faa57afd4db56676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZWonja237Bundle:ArtistePublic:contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0088257993ee7aad4612674210d49ca1b8a874b30025f4e6b76ff8eda10c553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0088257993ee7aad4612674210d49ca1b8a874b30025f4e6b76ff8eda10c553->enter($__internal_a0088257993ee7aad4612674210d49ca1b8a874b30025f4e6b76ff8eda10c553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0088257993ee7aad4612674210d49ca1b8a874b30025f4e6b76ff8eda10c553->leave($__internal_a0088257993ee7aad4612674210d49ca1b8a874b30025f4e6b76ff8eda10c553_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_faff6b28be8c250ccd93e0e5ec28157e488003f0c91ffddbb70f081271bfebf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faff6b28be8c250ccd93e0e5ec28157e488003f0c91ffddbb70f081271bfebf9->enter($__internal_faff6b28be8c250ccd93e0e5ec28157e488003f0c91ffddbb70f081271bfebf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"\">

    <section id=\"contact\">
      <div class=\"section-content\">
        ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "user-notice"), "method")) {
            // line 10
            echo "          <div class=\"alert alert-success\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "user-notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

                <span aria-hidden=\"true\">&times;
                </span>
                <span class=\"sr-only\">Close</span>
              </button>
              <a href=\"/\" class=\"alert-link\">";
                // line 18
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</a>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "          </div>
        ";
        }
        // line 23
        echo "
        <br><br><br><br>
        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/thumbnail.png"), "html", null, true);
        echo "\" width=\"200em\" height=\"200em\">
        <h1 class=\"section-header\">Entrez en contact avec nous
          <span class=\"content-header wow fadeIn \" data-wow-delay=\"0.2s\" data-wow-duration=\"2s\">
          </span>
        </h1>
        <h3>Avec ce formulaire, vous pouvez nous envoyer un message.
        </h3>
      </div>
      ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
      <div class=\"col-md-6 form-line\">
        <div class=\"form-group\">

          ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">

          ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        </div>
        <div class=\"form-group\">
          ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'label', array("label" => "Téléphone:"));
        echo "
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>
        <div class=\"form-group\">

          ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"form-group\">
          ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div>

          <button class=\"btn btn-default submit\" type=\"submit\">Envoyer<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
          </button><br>
          ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
      </section>

    </div>

    <link href=\"https://fonts.googleapis.com/css?family=Oleo+Script:400,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Teko:400,700\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/categories/style.css"), "html", null, true);
        echo "\" media=\"screen\">

  ";
        
        $__internal_faff6b28be8c250ccd93e0e5ec28157e488003f0c91ffddbb70f081271bfebf9->leave($__internal_faff6b28be8c250ccd93e0e5ec28157e488003f0c91ffddbb70f081271bfebf9_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 73,  144 => 64,  135 => 58,  125 => 51,  117 => 46,  113 => 45,  106 => 41,  99 => 37,  92 => 33,  81 => 25,  77 => 23,  73 => 21,  64 => 18,  56 => 12,  52 => 11,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutPublic.html.twig' %}

{% block body %}

  <div class=\"\">

    <section id=\"contact\">
      <div class=\"section-content\">
        {% if app.session.flashbag.has('user-notice') %}
          <div class=\"alert alert-success\">
            {% for msg in app.session.flashbag.get('user-notice') %}
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

                <span aria-hidden=\"true\">&times;
                </span>
                <span class=\"sr-only\">Close</span>
              </button>
              <a href=\"/\" class=\"alert-link\">{{ msg }}</a>

            {% endfor %}
          </div>
        {% endif %}

        <br><br><br><br>
        <img src=\"{{ asset('images/thumbnail.png') }}\" width=\"200em\" height=\"200em\">
        <h1 class=\"section-header\">Entrez en contact avec nous
          <span class=\"content-header wow fadeIn \" data-wow-delay=\"0.2s\" data-wow-duration=\"2s\">
          </span>
        </h1>
        <h3>Avec ce formulaire, vous pouvez nous envoyer un message.
        </h3>
      </div>
      {{ form_start(form) }}
      <div class=\"col-md-6 form-line\">
        <div class=\"form-group\">

          {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">

          {{ form_row(form.email, {'attr':{'class':'form-control'}})}}

        </div>
        <div class=\"form-group\">
          {{ form_label(form.number, 'Téléphone:') }}
          {{ form_widget(form.number,{'attr':{'class':'form-control'}})}}

        </div>
        <div class=\"form-group\">

          {{ form_row(form.ville, {'attr':{'class':'form-control'}})}}

        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"form-group\">
          {{ form_row(form.content, {'attr':{'class':'form-control'}})}}
        </div>
        <div>

          <button class=\"btn btn-default submit\" type=\"submit\">Envoyer<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
          </button><br>
          {{ form_end(form) }}
        </div>
      </section>

    </div>

    <link href=\"https://fonts.googleapis.com/css?family=Oleo+Script:400,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Teko:400,700\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/categories/style.css') }}\" media=\"screen\">

  {% endblock %}
", "HZWonja237Bundle:ArtistePublic:contact.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/contact.html.twig");
    }
}
