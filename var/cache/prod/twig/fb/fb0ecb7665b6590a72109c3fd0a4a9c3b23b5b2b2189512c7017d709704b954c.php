<?php

/* ::layoutP.html.twig */
class __TwigTemplate_754cb5dfa8dde6aaf43ecb8d5a55c428c32c92e3fe48de7d30392a6e41a28157 extends Twig_Template
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
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Wouja237";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        // line 65
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>

  ";
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
        return array (  145 => 65,  143 => 64,  140 => 63,  135 => 51,  129 => 8,  122 => 70,  120 => 63,  113 => 59,  104 => 52,  102 => 51,  93 => 45,  87 => 42,  81 => 39,  75 => 36,  69 => 33,  63 => 30,  57 => 27,  41 => 14,  36 => 11,  33 => 9,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::layoutP.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/layoutP.html.twig");
    }
}
