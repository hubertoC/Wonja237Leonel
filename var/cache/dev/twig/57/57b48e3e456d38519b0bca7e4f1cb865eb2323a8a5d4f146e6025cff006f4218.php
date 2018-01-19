<?php

/* ::layoutP.html.twig */
class __TwigTemplate_994659227c2ee9c43d455c789893cf35e715fde2b85ae1f7455b0d55b72ff208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_191128997f0d0f95d50770cb8dae8ff4f3f30b307ad7c37b7375f869e2a1d77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191128997f0d0f95d50770cb8dae8ff4f3f30b307ad7c37b7375f869e2a1d77e->enter($__internal_191128997f0d0f95d50770cb8dae8ff4f3f30b307ad7c37b7375f869e2a1d77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutP.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>
      ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/adminCss.css"), "html", null, true);
        echo "\">
  </head>

  <body>

    <nav class=\"navbar navbar-default \"></nav>
    <div class=\"row\">

      <div id=\"menu\" class=\"col-md-3\">

        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_homepage");
        echo "\">Acceuil</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Catégorie</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicites_index");
        echo "\">Partenairer</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_index");
        echo "\">Artiste</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_index");
        echo "\">Publicité</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_actualite_index");
        echo "\">Actualité</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_index");
        echo "\">Enregistrement</a>
          </li>
        </ul>

      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>H.Z-Entreprise ©
        ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
    </footer>
  </div>

  ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
</body>
</html>
";
        
        $__internal_191128997f0d0f95d50770cb8dae8ff4f3f30b307ad7c37b7375f869e2a1d77e->leave($__internal_191128997f0d0f95d50770cb8dae8ff4f3f30b307ad7c37b7375f869e2a1d77e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d62a0e054208fafff4d164664bc8362a7b2b9361b3d6d3d0b4780f50fc56ed82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62a0e054208fafff4d164664bc8362a7b2b9361b3d6d3d0b4780f50fc56ed82->enter($__internal_d62a0e054208fafff4d164664bc8362a7b2b9361b3d6d3d0b4780f50fc56ed82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Wouja237";
        
        $__internal_d62a0e054208fafff4d164664bc8362a7b2b9361b3d6d3d0b4780f50fc56ed82->leave($__internal_d62a0e054208fafff4d164664bc8362a7b2b9361b3d6d3d0b4780f50fc56ed82_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_0752f507ab123a6a99ddd5825fbaf14b19c6eae23a574091fd7c87ea0de31ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0752f507ab123a6a99ddd5825fbaf14b19c6eae23a574091fd7c87ea0de31ca8->enter($__internal_0752f507ab123a6a99ddd5825fbaf14b19c6eae23a574091fd7c87ea0de31ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0752f507ab123a6a99ddd5825fbaf14b19c6eae23a574091fd7c87ea0de31ca8->leave($__internal_0752f507ab123a6a99ddd5825fbaf14b19c6eae23a574091fd7c87ea0de31ca8_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f75ecca2ac7b777dfde3a3b729de8b13e57cfb1656846d96dd9d054ae941fadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75ecca2ac7b777dfde3a3b729de8b13e57cfb1656846d96dd9d054ae941fadb->enter($__internal_f75ecca2ac7b777dfde3a3b729de8b13e57cfb1656846d96dd9d054ae941fadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    ";
        // line 65
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>

  ";
        
        $__internal_f75ecca2ac7b777dfde3a3b729de8b13e57cfb1656846d96dd9d054ae941fadb->leave($__internal_f75ecca2ac7b777dfde3a3b729de8b13e57cfb1656846d96dd9d054ae941fadb_prof);

    }

    public function getTemplateName()
    {
        return "::layoutP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  164 => 64,  158 => 63,  147 => 51,  135 => 8,  125 => 70,  123 => 63,  116 => 59,  107 => 52,  105 => 51,  96 => 45,  90 => 42,  84 => 39,  78 => 36,  72 => 33,  66 => 30,  60 => 27,  44 => 14,  39 => 11,  36 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>
      {% block title %}Wouja237{% endblock %}
    </title>
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/adminCss.css') }}\">
  </head>

  <body>

    <nav class=\"navbar navbar-default \"></nav>
    <div class=\"row\">

      <div id=\"menu\" class=\"col-md-3\">

        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li>
            <a class=\"colo_menu\" href=\"{{ path('hz_wonja237_homepage') }}\">Acceuil</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('category_index') }}\">Catégorie</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('publicites_index') }}\">Partenairer</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('adminArtiste_index') }}\">Artiste</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('publicitedefile_index') }}\">Publicité</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('admin_actualite_index') }}\">Actualité</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('admin_enregistrement_index') }}\">Enregistrement</a>
          </li>
        </ul>

      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}{% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>H.Z-Entreprise ©
        {{ 'now'|date('Y') }}.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>

  {% endblock %}

</body>
</html>
", "::layoutP.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/layoutP.html.twig");
    }
}
