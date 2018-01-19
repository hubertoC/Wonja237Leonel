<?php

/* HZWonja237Bundle:ArtistePublic:profile.html.twig */
class __TwigTemplate_d956b03cd202bae0e124e40e56dcb384fd41f5c48b118f6ab641e86c8281338b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZWonja237Bundle:ArtistePublic:profile.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  <div class=\"container\" id=\"\">
    <br><br><br><br><br><br><br>
<div id=\"cont1\">

<div class=\"row\">
  <div class=\"col-lg-4 \" style=\"background-color:; padding-top:1em;\">
    <div class=\"foto\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["artiste"] ?? null), "image", array()), "webPath", array())), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Tigre\" style=\"width:100%;\">
      <div class=\" nomEtEtoile\">
        <div class=\"caption\">
          ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "name", array()), "html", null, true);
        echo "
          ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "surname", array()), "html", null, true);
        echo "

        <ul class=\"etoile\">
          <center>
            <li>
              ";
        // line 20
        echo $this->env->getExtension('HZ\Wonja237Bundle\Twig\StarRatingExtension')->myStarBar(5, $this->getAttribute(($context["artiste"] ?? null), "id", array()), 25);
        echo "</spam>
          </li></center>
        </ul>
        </div>
      </div>
    </div>
  </div>

  <div class=\" col-lg-offset-0 col-lg-8 \" style=\"background-color:;padding-top:1em;\">
    <div class=\"col-lg-12 description-Admin\">
      <spam class=\"artisteDescipt\">
        <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "description", array()), "html", null, true);
        echo "<br></FONT>
      </p>
    </div>
  </div>


</div>

<div class=\"row\">
  <div class=\"  col-lg-4 \" style=\"background-color:; padding-top:1em;\">
      <center><br>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237bundle_reservation", array("id" => $this->getAttribute(($context["artiste"] ?? null), "id", array()), "name" => $this->getAttribute(($context["artiste"] ?? null), "name", array()))), "html", null, true);
        echo "\">
          <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Reservation
            <i class=\"material-icons right\">send</i>
          </button>
        </a>
      </center>
  </div>

  <div class=\" col-lg-offset-0 col-lg-8 \" style=\"background-color:;padding-top:1em;\">
<iframe height=\"300\"class=\"embed-responsive-item\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "video", array()), "html", null, true);
        echo "\"></iframe>
  </div>

</div>



<div class=\"row\">
  <div class=\"  col-lg-12\" style=\"background-color:;\">
    <br>
    <h5>
      <center><pam class=\"artisteCom\">Commentaire :</FONT></center>
    </h5>

    <div class=\"commentaire\" id=\"message\">


      ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["artiste"] ?? null), "commentaire", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 69
            echo "

        <div class=\"commentaire-nom\">
<div class=\"commentaireNom\">
  ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "name", array()), "html", null, true);
            echo "

</div>
          <div class=\"\">
            <span class=\"commentaire-content\">
              &nbsp
              ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo "</span>
          </div>
        </div>


        <br>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </div>
    <br>
  </div>
</div>

<div class=\"row\">
  <div class=\"  col-lg-12\" style=\"background-color:;\">
    <div id=\"html\">
      ";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
      <div class=\"commentAutor\">
        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <br>
        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contenu", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
      </div>

      <br>

      <center>
        <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_edit", array("id" => $this->getAttribute(($context["artiste"] ?? null), "id", array()))), "html", null, true);
        echo "\">
          <button class=\"btn btn-primary\" type=\"submit\">Poster mon Commentaire</button>
          <br>
        </a>

      </center>

      ";
        // line 111
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>
  </div>
</div>


</div>
<br><br>
</div>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profil.css"), "html", null, true);
        echo "\" media=\"screen\">



";
    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 121,  189 => 111,  179 => 104,  170 => 98,  165 => 96,  160 => 94,  150 => 86,  137 => 79,  128 => 73,  122 => 69,  118 => 68,  98 => 51,  86 => 42,  72 => 31,  58 => 20,  50 => 15,  46 => 14,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:profile.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/profile.html.twig");
    }
}
