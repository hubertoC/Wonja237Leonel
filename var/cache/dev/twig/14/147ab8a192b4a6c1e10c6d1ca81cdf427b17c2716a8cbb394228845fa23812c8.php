<?php

/* :artiste:index.html.twig */
class __TwigTemplate_04222c44e1e027f60956f087842acf24163d8782b646cff9c609d39a2594a799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":artiste:index.html.twig", 1);
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
        $__internal_8390a62b6a00a63ad415895d0292b6bce2784f4aec85badf23b51f41bdbab16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8390a62b6a00a63ad415895d0292b6bce2784f4aec85badf23b51f41bdbab16c->enter($__internal_8390a62b6a00a63ad415895d0292b6bce2784f4aec85badf23b51f41bdbab16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":artiste:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8390a62b6a00a63ad415895d0292b6bce2784f4aec85badf23b51f41bdbab16c->leave($__internal_8390a62b6a00a63ad415895d0292b6bce2784f4aec85badf23b51f41bdbab16c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23cfe3432bfe0206d322a30c9b8ba864aced1a4f14b515eb0af760543f0ddfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cfe3432bfe0206d322a30c9b8ba864aced1a4f14b515eb0af760543f0ddfd8->enter($__internal_23cfe3432bfe0206d322a30c9b8ba864aced1a4f14b515eb0af760543f0ddfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h1>Liste des Artistes</h1>

    <table  class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profil</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Sexe</th>
                <th>Style</th>
                <th>Status</th>
                <th>Telephone</th>
                <th>Categorie</th>



                <th>Lu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artistes"] ?? $this->getContext($context, "artistes")));
        foreach ($context['_seq'] as $context["_key"] => $context["artiste"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_show", array("id" => $this->getAttribute($context["artiste"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["artiste"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" height=\"42\" width=\"42\" ></td>

                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "surname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "style", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "number", array()), "html", null, true);
            echo "</td>
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["artiste"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["artistes"]) {
                // line 43
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artistes"], "name", array()), "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artistes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["artiste"], "lu", array()), "html", null, true);
            echo "</td>


                <td>
                    <ul>
                        <li>
                            <a class=\"bon\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_show", array("id" => $this->getAttribute($context["artiste"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_edit", array("id" => $this->getAttribute($context["artiste"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artiste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>

    <ul>
      <div class= \"cration_artiste\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_new");
        echo "\" ><i class=\"glyphicon glyphicon-plus\"></i>Créer un artiste</a>
</div>
        </li>
    </ul>
";
        
        $__internal_23cfe3432bfe0206d322a30c9b8ba864aced1a4f14b515eb0af760543f0ddfd8->leave($__internal_23cfe3432bfe0206d322a30c9b8ba864aced1a4f14b515eb0af760543f0ddfd8_prof);

    }

    public function getTemplateName()
    {
        return ":artiste:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 65,  158 => 60,  146 => 54,  140 => 51,  130 => 45,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  80 => 32,  74 => 31,  71 => 30,  67 => 29,  40 => 4,  34 => 3,  11 => 1,);
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

  <h1>Liste des Artistes</h1>

    <table  class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profil</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Sexe</th>
                <th>Style</th>
                <th>Status</th>
                <th>Telephone</th>
                <th>Categorie</th>



                <th>Lu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for artiste in artistes %}
            <tr>
                <td><a href=\"{{ path('adminArtiste_show', { 'id': artiste.id }) }}\">{{ artiste.id }}</a></td>
                <td><img src=\"{{ asset(artiste.image.webPath)}}\" height=\"42\" width=\"42\" ></td>

                <td>{{ artiste.name }}</td>
                <td>{{ artiste.surname }}</td>
                <td>{{ artiste.email }}</td>
                <td>{{ artiste.ville }}</td>
                <td>{{ artiste.sexe }}</td>
                <td>{{ artiste.style }}</td>
                <td>{{ artiste.status }}</td>
                <td>{{ artiste.number }}</td>
                {% for artistes in artiste.categories %}
                <td>{{ artistes.name}}</td>
                {% endfor %}
                <td>{{ artiste.lu }}</td>


                <td>
                    <ul>
                        <li>
                            <a class=\"bon\" href=\"{{ path('adminArtiste_show', { 'id': artiste.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminArtiste_edit', { 'id': artiste.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
      <div class= \"cration_artiste\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminArtiste_new') }}\" ><i class=\"glyphicon glyphicon-plus\"></i>Créer un artiste</a>
</div>
        </li>
    </ul>
{% endblock %}
", ":artiste:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/artiste/index.html.twig");
    }
}
