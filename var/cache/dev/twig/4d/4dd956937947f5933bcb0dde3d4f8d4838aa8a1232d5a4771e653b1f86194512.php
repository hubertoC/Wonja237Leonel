<?php

/* :enregistrementautreartiste:index.html.twig */
class __TwigTemplate_723583588d9fc54f031edfc5c781317121af5d96ac0425d47ff2298c754b0654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":enregistrementautreartiste:index.html.twig", 1);
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
        $__internal_8de1830e3542ce294887883f7a004a020e285755a34eca063fd536ec307b00f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de1830e3542ce294887883f7a004a020e285755a34eca063fd536ec307b00f7->enter($__internal_8de1830e3542ce294887883f7a004a020e285755a34eca063fd536ec307b00f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enregistrementautreartiste:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8de1830e3542ce294887883f7a004a020e285755a34eca063fd536ec307b00f7->leave($__internal_8de1830e3542ce294887883f7a004a020e285755a34eca063fd536ec307b00f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2516d2eecb0864070257a9214fa8712c934f1dc38754a4008380397c841daf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2516d2eecb0864070257a9214fa8712c934f1dc38754a4008380397c841daf11->enter($__internal_2516d2eecb0864070257a9214fa8712c934f1dc38754a4008380397c841daf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste d'enregistrement d'Artiste</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Nomartiste</th>
                <th>Link1</th>
                <th>Link2</th>
                <th>Link3</th>
                <th>Description</th>
                <th>Autrecategorie</th>
                <th>Number1</th>
                <th>Number2</th>
                <th>Lu</th>
                <th>Confirm</th>
                <th>Groupe</th>
                <th>Solo</th>
                <th>Sexe</th>
                <th>Style</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enregistrementAutreArtistes"] ?? $this->getContext($context, "enregistrementAutreArtistes")));
        foreach ($context['_seq'] as $context["_key"] => $context["enregistrementAutreArtiste"]) {
            // line 33
            echo "            <tr>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_show", array("id" => $this->getAttribute($context["enregistrementAutreArtiste"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "surname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "nomArtiste", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "link1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "link2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "link3", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "autreCategorie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "number1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "number2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            if ($this->getAttribute($context["enregistrementAutreArtiste"], "lu", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 48
            if ($this->getAttribute($context["enregistrementAutreArtiste"], "confirm", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 49
            if ($this->getAttribute($context["enregistrementAutreArtiste"], "groupe", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($context["enregistrementAutreArtiste"], "solo", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["enregistrementAutreArtiste"], "style", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_show", array("id" => $this->getAttribute($context["enregistrementAutreArtiste"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_edit", array("id" => $this->getAttribute($context["enregistrementAutreArtiste"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enregistrementAutreArtiste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_new");
        echo "\">Create a new enregistrementAutreArtiste</a>
        </li>
    </ul>
";
        
        $__internal_2516d2eecb0864070257a9214fa8712c934f1dc38754a4008380397c841daf11->leave($__internal_2516d2eecb0864070257a9214fa8712c934f1dc38754a4008380397c841daf11_prof);

    }

    public function getTemplateName()
    {
        return ":enregistrementautreartiste:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 70,  192 => 65,  180 => 59,  174 => 56,  167 => 52,  163 => 51,  155 => 50,  147 => 49,  139 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  77 => 34,  74 => 33,  70 => 32,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Liste d'enregistrement d'Artiste</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Nomartiste</th>
                <th>Link1</th>
                <th>Link2</th>
                <th>Link3</th>
                <th>Description</th>
                <th>Autrecategorie</th>
                <th>Number1</th>
                <th>Number2</th>
                <th>Lu</th>
                <th>Confirm</th>
                <th>Groupe</th>
                <th>Solo</th>
                <th>Sexe</th>
                <th>Style</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for enregistrementAutreArtiste in enregistrementAutreArtistes %}
            <tr>
                <td><a href=\"{{ path('admin_enregistrement_show', { 'id': enregistrementAutreArtiste.id }) }}\">{{ enregistrementAutreArtiste.id }}</a></td>
                <td>{{ enregistrementAutreArtiste.name }}</td>
                <td>{{ enregistrementAutreArtiste.surname }}</td>
                <td>{{ enregistrementAutreArtiste.email }}</td>
                <td>{{ enregistrementAutreArtiste.ville }}</td>
                <td>{{ enregistrementAutreArtiste.nomArtiste }}</td>
                <td>{{ enregistrementAutreArtiste.link1 }}</td>
                <td>{{ enregistrementAutreArtiste.link2 }}</td>
                <td>{{ enregistrementAutreArtiste.link3 }}</td>
                <td>{{ enregistrementAutreArtiste.description }}</td>
                <td>{{ enregistrementAutreArtiste.autreCategorie }}</td>
                <td>{{ enregistrementAutreArtiste.number1 }}</td>
                <td>{{ enregistrementAutreArtiste.number2 }}</td>
                <td>{% if enregistrementAutreArtiste.lu %}Yes{% else %}No{% endif %}</td>
                <td>{% if enregistrementAutreArtiste.confirm %}Yes{% else %}No{% endif %}</td>
                <td>{% if enregistrementAutreArtiste.groupe %}Yes{% else %}No{% endif %}</td>
                <td>{% if enregistrementAutreArtiste.solo %}Yes{% else %}No{% endif %}</td>
                <td>{{ enregistrementAutreArtiste.sexe }}</td>
                <td>{{ enregistrementAutreArtiste.style }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_enregistrement_show', { 'id': enregistrementAutreArtiste.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_enregistrement_edit', { 'id': enregistrementAutreArtiste.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_enregistrement_new') }}\">Create a new enregistrementAutreArtiste</a>
        </li>
    </ul>
{% endblock %}
", ":enregistrementautreartiste:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/enregistrementautreartiste/index.html.twig");
    }
}
