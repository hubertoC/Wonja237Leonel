<?php

/* :artiste:show.html.twig */
class __TwigTemplate_10d35436fa58d608b150ede0d56d75a3e6e7017260e3e9150122fe2b3c6ba44d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Artiste  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["artiste"] ?? null), "image", array()), "webPath", array())), "html", null, true);
        echo "\" height=\"42\" width=\"42\" ></td>
              <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "id", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "name", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "surname", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "email", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "ville", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "sexe", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "style", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "status", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "number", array()), "html", null, true);
        echo "</td>
              <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["artiste"] ?? null), "lu", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <li>
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "

          <div class=\"show_suprimer\">

            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
          </div>

        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
    </li>
    <ul>
      <div class=\"show_modifier\">

      <li>

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_edit", array("id" => $this->getAttribute(($context["artiste"] ?? null), "id", array()))), "html", null, true);
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
        return array (  136 => 63,  124 => 54,  114 => 47,  104 => 40,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  54 => 23,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":artiste:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/artiste/show.html.twig");
    }
}
