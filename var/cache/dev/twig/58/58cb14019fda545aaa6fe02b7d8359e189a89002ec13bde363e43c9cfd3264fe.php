<?php

/* layoutPublic.html.twig */
class __TwigTemplate_cfffd2d102d2a2dcf73bade5b1d013519bf1839f6ff37ce8037bb9cad820ec73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fd9352994d6decab330b8707a06f63297095218aa7ada45d8a428a62ab62181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd9352994d6decab330b8707a06f63297095218aa7ada45d8a428a62ab62181->enter($__internal_4fd9352994d6decab330b8707a06f63297095218aa7ada45d8a428a62ab62181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutPublic.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>

  <head>
    <meta charset=\"utf-8\">
    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("library/font-awesome-4.3.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layoutPublic.css"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/thumbnail.png"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/color/rose.css"), "html", null, true);
        echo "\">

    <title>
      ";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "    </title>
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/publicPage.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/contact.css"), "html", null, true);
        echo "\">


  </head>

  <body>

    ";
        // line 30
        $this->displayBlock('head', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "

    <footer class=\"site-footer section-spacing text-center \" id=\"eight\">

      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\"></br>
          <p class=\"footer-links\">
            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/websoft.png"), "html", null, true);
        echo "\" alt=\"\" class=\"websoftLogo\">
          </p>

        </div>

        <div class=\"col-md-4 wonjaReserved\"></br>
        <small>&copy; 2017 Wonja237 reserved.</small>
      </div>
      <div class=\"col-md-4\"></br>
      <ul class=\"social\">
        <li>
          <a href=\"https://twitter.com/wonja_Elle\" target=\"_blank\">
            <i class=\"fa fa-twitter \"></i>
          </a>
        </li>
        <li>
          <a href=\"https://www.facebook.com/FeelBefree/\" target=\"_blank\">
            <i class=\"fa fa-facebook\"></i>
          </a>
        </li>
        <li>
          <a href=\"https://www.youtube.com/channel/UCLz84ljmJDyl8HToevivDNQ\" target=\"_blank\">
            <i class=\"fa fa-youtube-play\"></i>
          </a>
        </li>
      </ul>
    </br>

  </div>
  </div>
  </div>
  </footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/precise-star-rating.js"), "html", null, true);
        echo "\"></script>

<script>
var loader = \"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loader-small.gif"), "html", null, true);
        echo "\";
var ROOT_URL = \"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hz_wonja237_homepage");
        echo "\";
</script>

</body>
</html>
";
        
        $__internal_4fd9352994d6decab330b8707a06f63297095218aa7ada45d8a428a62ab62181->leave($__internal_4fd9352994d6decab330b8707a06f63297095218aa7ada45d8a428a62ab62181_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_4084b53a9bf6112918049c8bd8ba929349efdec12adff83970419fba8b0c8bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4084b53a9bf6112918049c8bd8ba929349efdec12adff83970419fba8b0c8bf0->enter($__internal_4084b53a9bf6112918049c8bd8ba929349efdec12adff83970419fba8b0c8bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Wonja237";
        
        $__internal_4084b53a9bf6112918049c8bd8ba929349efdec12adff83970419fba8b0c8bf0->leave($__internal_4084b53a9bf6112918049c8bd8ba929349efdec12adff83970419fba8b0c8bf0_prof);

    }

    // line 30
    public function block_head($context, array $blocks = array())
    {
        $__internal_e72f097a748635096521347cecb858057c0c4d5868a9c12df5169143ea80c5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72f097a748635096521347cecb858057c0c4d5868a9c12df5169143ea80c5d0->enter($__internal_e72f097a748635096521347cecb858057c0c4d5868a9c12df5169143ea80c5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 31
        echo "    <!-- Navigation
  ==========================================-->
    <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_homepage");
        echo "\">
            <span class=\"themecolor\">Wonja</span><span class=\"vert\">2</span><span class=\"rouge\">3</span><span class=\"jaune\">7</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_homepage");
        echo "\" class=\"page-scroll\">Accueil</a>
            </li>
            <li>
              <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237bundle_contact");
        echo "\" class=\"page-scroll\">Contact</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  ";
        
        $__internal_e72f097a748635096521347cecb858057c0c4d5868a9c12df5169143ea80c5d0->leave($__internal_e72f097a748635096521347cecb858057c0c4d5868a9c12df5169143ea80c5d0_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_a25d440c280af92aeb41452102209dc2abace3219e80b6e0ef6b14134f62273e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25d440c280af92aeb41452102209dc2abace3219e80b6e0ef6b14134f62273e->enter($__internal_a25d440c280af92aeb41452102209dc2abace3219e80b6e0ef6b14134f62273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a25d440c280af92aeb41452102209dc2abace3219e80b6e0ef6b14134f62273e->leave($__internal_a25d440c280af92aeb41452102209dc2abace3219e80b6e0ef6b14134f62273e_prof);

    }

    public function getTemplateName()
    {
        return "layoutPublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 64,  208 => 54,  202 => 51,  191 => 43,  177 => 31,  171 => 30,  159 => 17,  146 => 113,  142 => 112,  136 => 109,  132 => 108,  94 => 73,  84 => 65,  82 => 64,  79 => 63,  77 => 30,  67 => 23,  63 => 22,  57 => 18,  55 => 17,  49 => 14,  44 => 12,  40 => 11,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>

  <head>
    <meta charset=\"utf-8\">
    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('library/font-awesome-4.3.0/css/font-awesome.min.css') }}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/layoutPublic.css') }}\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('images/thumbnail.png') }}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/color/rose.css') }}\">

    <title>
      {% block title %}Wonja237{% endblock %}
    </title>
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/publicPage.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/contact.css') }}\">


  </head>

  <body>

    {% block head %}
    <!-- Navigation
  ==========================================-->
    <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"{{ path('hz_wonja237_homepage')}}\">
            <span class=\"themecolor\">Wonja</span><span class=\"vert\">2</span><span class=\"rouge\">3</span><span class=\"jaune\">7</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"{{ path('hz_wonja237_homepage')}}\" class=\"page-scroll\">Accueil</a>
            </li>
            <li>
              <a href=\"{{ path('hz_wonja237bundle_contact')}}\" class=\"page-scroll\">Contact</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  {% endblock %}

    {% block body %}{% endblock %}


    <footer class=\"site-footer section-spacing text-center \" id=\"eight\">

      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\"></br>
          <p class=\"footer-links\">
            <img src=\"{{ asset('images/websoft.png') }}\" alt=\"\" class=\"websoftLogo\">
          </p>

        </div>

        <div class=\"col-md-4 wonjaReserved\"></br>
        <small>&copy; 2017 Wonja237 reserved.</small>
      </div>
      <div class=\"col-md-4\"></br>
      <ul class=\"social\">
        <li>
          <a href=\"https://twitter.com/wonja_Elle\" target=\"_blank\">
            <i class=\"fa fa-twitter \"></i>
          </a>
        </li>
        <li>
          <a href=\"https://www.facebook.com/FeelBefree/\" target=\"_blank\">
            <i class=\"fa fa-facebook\"></i>
          </a>
        </li>
        <li>
          <a href=\"https://www.youtube.com/channel/UCLz84ljmJDyl8HToevivDNQ\" target=\"_blank\">
            <i class=\"fa fa-youtube-play\"></i>
          </a>
        </li>
      </ul>
    </br>

  </div>
  </div>
  </div>
  </footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
<script src=\"{{ asset('js/jquery.cookie.js') }}\"></script>
<script src=\"{{ asset('js/precise-star-rating.js') }}\"></script>

<script>
var loader = \"{{ asset('images/loader-small.gif') }}\";
var ROOT_URL = \"{{ url('hz_wonja237_homepage')}}\";
</script>

</body>
</html>
", "layoutPublic.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/layoutPublic.html.twig");
    }
}
