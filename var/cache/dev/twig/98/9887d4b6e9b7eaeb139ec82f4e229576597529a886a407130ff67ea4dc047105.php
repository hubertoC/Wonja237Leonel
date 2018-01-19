<?php

/* :enregistrementautreartiste:show.html.twig */
class __TwigTemplate_f5d500fa3427888787afc003ed51c567f869292f69fb3dc0d3f7c4f363dded9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enregistrementautreartiste:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2a16da44e90d777dd4648225aa046b70d770c0ff1611654883e8b067cccb1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a16da44e90d777dd4648225aa046b70d770c0ff1611654883e8b067cccb1e9->enter($__internal_b2a16da44e90d777dd4648225aa046b70d770c0ff1611654883e8b067cccb1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enregistrementautreartiste:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2a16da44e90d777dd4648225aa046b70d770c0ff1611654883e8b067cccb1e9->leave($__internal_b2a16da44e90d777dd4648225aa046b70d770c0ff1611654883e8b067cccb1e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef5569b104c1078c2b5d89253bf33398c88610f3f1d1ab888b04bf49ec316b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5569b104c1078c2b5d89253bf33398c88610f3f1d1ab888b04bf49ec316b78->enter($__internal_ef5569b104c1078c2b5d89253bf33398c88610f3f1d1ab888b04bf49ec316b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enregistrementautreartiste</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "surname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomartiste</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "nomArtiste", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link1</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "link1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link2</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "link2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link3</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "link3", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Autrecategorie</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "autreCategorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number1</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "number1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number2</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "number2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lu</th>
                <td>";
        // line 62
        if ($this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "lu", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Confirm</th>
                <td>";
        // line 66
        if ($this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "confirm", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Groupe</th>
                <td>";
        // line 70
        if ($this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "groupe", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Solo</th>
                <td>";
        // line 74
        if ($this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "solo", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "sexe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Style</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "style", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_edit", array("id" => $this->getAttribute(($context["enregistrementAutreArtiste"] ?? $this->getContext($context, "enregistrementAutreArtiste")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 97
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ef5569b104c1078c2b5d89253bf33398c88610f3f1d1ab888b04bf49ec316b78->leave($__internal_ef5569b104c1078c2b5d89253bf33398c88610f3f1d1ab888b04bf49ec316b78_prof);

    }

    public function getTemplateName()
    {
        return ":enregistrementautreartiste:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 97,  212 => 95,  206 => 92,  200 => 89,  190 => 82,  183 => 78,  172 => 74,  161 => 70,  150 => 66,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Enregistrementautreartiste</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ enregistrementAutreArtiste.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ enregistrementAutreArtiste.name }}</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>{{ enregistrementAutreArtiste.surname }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ enregistrementAutreArtiste.email }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ enregistrementAutreArtiste.ville }}</td>
            </tr>
            <tr>
                <th>Nomartiste</th>
                <td>{{ enregistrementAutreArtiste.nomArtiste }}</td>
            </tr>
            <tr>
                <th>Link1</th>
                <td>{{ enregistrementAutreArtiste.link1 }}</td>
            </tr>
            <tr>
                <th>Link2</th>
                <td>{{ enregistrementAutreArtiste.link2 }}</td>
            </tr>
            <tr>
                <th>Link3</th>
                <td>{{ enregistrementAutreArtiste.link3 }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ enregistrementAutreArtiste.description }}</td>
            </tr>
            <tr>
                <th>Autrecategorie</th>
                <td>{{ enregistrementAutreArtiste.autreCategorie }}</td>
            </tr>
            <tr>
                <th>Number1</th>
                <td>{{ enregistrementAutreArtiste.number1 }}</td>
            </tr>
            <tr>
                <th>Number2</th>
                <td>{{ enregistrementAutreArtiste.number2 }}</td>
            </tr>
            <tr>
                <th>Lu</th>
                <td>{% if enregistrementAutreArtiste.lu %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Confirm</th>
                <td>{% if enregistrementAutreArtiste.confirm %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Groupe</th>
                <td>{% if enregistrementAutreArtiste.groupe %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Solo</th>
                <td>{% if enregistrementAutreArtiste.solo %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{{ enregistrementAutreArtiste.sexe }}</td>
            </tr>
            <tr>
                <th>Style</th>
                <td>{{ enregistrementAutreArtiste.style }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_enregistrement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_enregistrement_edit', { 'id': enregistrementAutreArtiste.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":enregistrementautreartiste:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/enregistrementautreartiste/show.html.twig");
    }
}
