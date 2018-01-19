<?php

/* :enregistrementautreartiste:index.html.twig */
class __TwigTemplate_652c41cc854c0d7287dfe421fd40a03bb2afcd42dfcb2d0dd7754d1cca3e33d9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["enregistrementAutreArtistes"] ?? null));
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
        return array (  190 => 70,  183 => 65,  171 => 59,  165 => 56,  158 => 52,  154 => 51,  146 => 50,  138 => 49,  130 => 48,  122 => 47,  118 => 46,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  86 => 38,  82 => 37,  78 => 36,  74 => 35,  68 => 34,  65 => 33,  61 => 32,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":enregistrementautreartiste:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/enregistrementautreartiste/index.html.twig");
    }
}
