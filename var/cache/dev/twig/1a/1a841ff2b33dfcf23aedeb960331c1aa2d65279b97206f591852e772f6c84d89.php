<?php

/* HZWonja237Bundle:ArtistePublic:profile.html.twig */
class __TwigTemplate_682852bdc250209ba6e350a19f2598e9a813abcc527c246fec618b2699fc4112 extends Twig_Template
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
        $__internal_8ac110ab06a1a7fb15797d7ec215dccd64ed04f0a2cdf8cdb6fe42550e255fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac110ab06a1a7fb15797d7ec215dccd64ed04f0a2cdf8cdb6fe42550e255fc6->enter($__internal_8ac110ab06a1a7fb15797d7ec215dccd64ed04f0a2cdf8cdb6fe42550e255fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac110ab06a1a7fb15797d7ec215dccd64ed04f0a2cdf8cdb6fe42550e255fc6->leave($__internal_8ac110ab06a1a7fb15797d7ec215dccd64ed04f0a2cdf8cdb6fe42550e255fc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_abae316f136ba86017dc90f65606a19c106ef82d81b18bc2abd9e04bdb8acb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abae316f136ba86017dc90f65606a19c106ef82d81b18bc2abd9e04bdb8acb54->enter($__internal_abae316f136ba86017dc90f65606a19c106ef82d81b18bc2abd9e04bdb8acb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"container\" id=\"\">
    <br><br><br><br><br><br><br>
<div id=\"cont1\">

<div class=\"row\">
  <div class=\"col-lg-4 \" style=\"background-color:; padding-top:1em;\">
    <div class=\"foto\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "image", array()), "webPath", array())), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Tigre\" style=\"width:100%;\">
      <div class=\" nomEtEtoile\">
        <div class=\"caption\">
          ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "name", array()), "html", null, true);
        echo "
          ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "surname", array()), "html", null, true);
        echo "

        <ul class=\"etoile\">
          <center>
            <li>
              ";
        // line 20
        echo $this->env->getExtension('HZ\Wonja237Bundle\Twig\StarRatingExtension')->myStarBar(5, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "id", array()), 25);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "description", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237bundle_reservation", array("id" => $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "id", array()), "name" => $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "name", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "video", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "commentaire", array()));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
      <div class=\"commentAutor\">
        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <br>
        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
      </div>

      <br>

      <center>
        <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_edit", array("id" => $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "id", array()))), "html", null, true);
        echo "\">
          <button class=\"btn btn-primary\" type=\"submit\">Poster mon Commentaire</button>
          <br>
        </a>

      </center>

      ";
        // line 111
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_abae316f136ba86017dc90f65606a19c106ef82d81b18bc2abd9e04bdb8acb54->leave($__internal_abae316f136ba86017dc90f65606a19c106ef82d81b18bc2abd9e04bdb8acb54_prof);

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
        return array (  211 => 121,  198 => 111,  188 => 104,  179 => 98,  174 => 96,  169 => 94,  159 => 86,  146 => 79,  137 => 73,  131 => 69,  127 => 68,  107 => 51,  95 => 42,  81 => 31,  67 => 20,  59 => 15,  55 => 14,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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

  <div class=\"container\" id=\"\">
    <br><br><br><br><br><br><br>
<div id=\"cont1\">

<div class=\"row\">
  <div class=\"col-lg-4 \" style=\"background-color:; padding-top:1em;\">
    <div class=\"foto\"><img src=\"{{ asset(artiste.image.webPath)}}\" class=\"img-responsive\" alt=\"Tigre\" style=\"width:100%;\">
      <div class=\" nomEtEtoile\">
        <div class=\"caption\">
          {{artiste.name}}
          {{artiste.surname}}

        <ul class=\"etoile\">
          <center>
            <li>
              {{ starBar(5, artiste.id, 25)|raw }}</spam>
          </li></center>
        </ul>
        </div>
      </div>
    </div>
  </div>

  <div class=\" col-lg-offset-0 col-lg-8 \" style=\"background-color:;padding-top:1em;\">
    <div class=\"col-lg-12 description-Admin\">
      <spam class=\"artisteDescipt\">
        <p>{{artiste.description}}<br></FONT>
      </p>
    </div>
  </div>


</div>

<div class=\"row\">
  <div class=\"  col-lg-4 \" style=\"background-color:; padding-top:1em;\">
      <center><br>
        <a href=\"{{ path('hz_wonja237bundle_reservation', {'id': artiste.id , 'name': artiste.name}) }}\">
          <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Reservation
            <i class=\"material-icons right\">send</i>
          </button>
        </a>
      </center>
  </div>

  <div class=\" col-lg-offset-0 col-lg-8 \" style=\"background-color:;padding-top:1em;\">
<iframe height=\"300\"class=\"embed-responsive-item\" src=\"{{artiste.video}}\"></iframe>
  </div>

</div>



<div class=\"row\">
  <div class=\"  col-lg-12\" style=\"background-color:;\">
    <br>
    <h5>
      <center><pam class=\"artisteCom\">Commentaire :</FONT></center>
    </h5>

    <div class=\"commentaire\" id=\"message\">


      {% for commentaire in artiste.commentaire %}


        <div class=\"commentaire-nom\">
<div class=\"commentaireNom\">
  {{commentaire.name}}

</div>
          <div class=\"\">
            <span class=\"commentaire-content\">
              &nbsp
              {{commentaire.contenu}}</span>
          </div>
        </div>


        <br>
      {% endfor %}
    </div>
    <br>
  </div>
</div>

<div class=\"row\">
  <div class=\"  col-lg-12\" style=\"background-color:;\">
    <div id=\"html\">
      {{ form_start(form) }}
      <div class=\"commentAutor\">
        {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
        <br>
        {{ form_row(form.contenu, {'attr':{'class':'form-control'}}) }}
      </div>

      <br>

      <center>
        <a href=\"{{ path('adminArtiste_edit', { 'id': artiste.id }) }}\">
          <button class=\"btn btn-primary\" type=\"submit\">Poster mon Commentaire</button>
          <br>
        </a>

      </center>

      {{ form_end(form) }}

    </div>
  </div>
</div>


</div>
<br><br>
</div>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/profil.css') }}\" media=\"screen\">



{% endblock %}
", "HZWonja237Bundle:ArtistePublic:profile.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/profile.html.twig");
    }
}
