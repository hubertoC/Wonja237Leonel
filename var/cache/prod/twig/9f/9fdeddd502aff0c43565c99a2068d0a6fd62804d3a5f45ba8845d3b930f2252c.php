<?php

/* layoutPublic.html.twig */
class __TwigTemplate_e0cb0761c06c0078b03491d3b5a9c197d92158fcd8e6e756b6787e2f19108acf extends Twig_Template
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
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo "Wonja237";
    }

    // line 30
    public function block_head($context, array $blocks = array())
    {
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
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
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
        return array (  206 => 64,  193 => 54,  187 => 51,  176 => 43,  162 => 31,  159 => 30,  153 => 17,  143 => 113,  139 => 112,  133 => 109,  129 => 108,  91 => 73,  81 => 65,  79 => 64,  76 => 63,  74 => 30,  64 => 23,  60 => 22,  54 => 18,  52 => 17,  46 => 14,  41 => 12,  37 => 11,  32 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layoutPublic.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/layoutPublic.html.twig");
    }
}
