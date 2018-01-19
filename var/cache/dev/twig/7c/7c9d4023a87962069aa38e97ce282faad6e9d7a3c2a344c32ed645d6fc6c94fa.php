<?php

/* :artiste:show.html.twig */
class __TwigTemplate_534ff19fa607f29491276285a0b96e6dcf003c19d5663dc956dddd7cc2aa9011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":artiste:show.html.twig", 1);
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
        $__internal_398ca33abaf054c52d19ed53491f52f7b65ae8eb492e6320c0033bf43e477acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398ca33abaf054c52d19ed53491f52f7b65ae8eb492e6320c0033bf43e477acf->enter($__internal_398ca33abaf054c52d19ed53491f52f7b65ae8eb492e6320c0033bf43e477acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":artiste:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398ca33abaf054c52d19ed53491f52f7b65ae8eb492e6320c0033bf43e477acf->leave($__internal_398ca33abaf054c52d19ed53491f52f7b65ae8eb492e6320c0033bf43e477acf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_534ed660b6da8f31feaccfad7b4a703e0f7c4de5c21e517a90fde8d3ac64218f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534ed660b6da8f31feaccfad7b4a703e0f7c4de5c21e517a90fde8d3ac64218f->enter($__internal_534ed660b6da8f31feaccfad7b4a703e0f7c4de5c21e517a90fde8d3ac64218f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Artiste  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "name", array()), "html", null, true);
        echo "</h1>
<div class=\"conte_show\">
    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">

        <tbody>
            <tr>
              <th>Profile</th>
              <th>Id</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Email</th>
              <th>Ville</th>
              <th>Sexe</th>
              <th>Style</th>
              <th>Status</th>
              <th>Telephone</th>
              <th>Lu</th>
            </tr>
            <tr>
              <td><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "image", array()), "webPath", array())), "html", null, true);
        echo "\" height=\"42\" width=\"42\" ></td>
              <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "id", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "name", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "surname", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "email", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "ville", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "sexe", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "style", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "status", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "number", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "lu", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <li>
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "

          <div class=\"show_suprimer\">

            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
          </div>

        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </li>
    <ul>
      <div class=\"show_modifier\">

      <li>

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_edit", array("id" => $this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "id", array()))), "html", null, true);
        echo "\">Modifier<i class=\"glyphicon glyphicon-pencil\"></i></a>
      </li>
    </div>
  </ul>
  <ul>
    <div class=\"show_retour\">

      <li>

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_index");
        echo "\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour á la liste</a>
      </li>

    </div>





    </ul>
</div>

";
        
        $__internal_534ed660b6da8f31feaccfad7b4a703e0f7c4de5c21e517a90fde8d3ac64218f->leave($__internal_534ed660b6da8f31feaccfad7b4a703e0f7c4de5c21e517a90fde8d3ac64218f_prof);

    }

    public function getTemplateName()
    {
        return ":artiste:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 63,  133 => 54,  123 => 47,  113 => 40,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Artiste  {{ artiste.name }}</h1>
<div class=\"conte_show\">
    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">

        <tbody>
            <tr>
              <th>Profile</th>
              <th>Id</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Email</th>
              <th>Ville</th>
              <th>Sexe</th>
              <th>Style</th>
              <th>Status</th>
              <th>Telephone</th>
              <th>Lu</th>
            </tr>
            <tr>
              <td><img src=\"{{ asset(artiste.image.webPath)}}\" height=\"42\" width=\"42\" ></td>
              <td>{{ artiste.id }}</td>
              <td>{{ artiste.name }}</td>
              <td>{{ artiste.surname }}</td>
              <td>{{ artiste.email }}</td>
              <td>{{ artiste.ville }}</td>
              <td>{{ artiste.sexe }}</td>
              <td>{{ artiste.style }}</td>
              <td>{{ artiste.status }}</td>
              <td>{{ artiste.number }}</td>
              <td>{{ artiste.lu }}</td>
            </tr>

        </tbody>
    </table>

    <li>
        {{ form_start(delete_form) }}

          <div class=\"show_suprimer\">

            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
          </div>

        {{ form_end(delete_form) }}
    </li>
    <ul>
      <div class=\"show_modifier\">

      <li>

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminArtiste_edit', { 'id': artiste.id }) }}\">Modifier<i class=\"glyphicon glyphicon-pencil\"></i></a>
      </li>
    </div>
  </ul>
  <ul>
    <div class=\"show_retour\">

      <li>

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminArtiste_index') }}\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour á la liste</a>
      </li>

    </div>





    </ul>
</div>

{% endblock %}
", ":artiste:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/artiste/show.html.twig");
    }
}
