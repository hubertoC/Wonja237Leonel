<?php

/* :enregistrementautreartiste:show.html.twig */
class __TwigTemplate_598477f33723267827191662fb5a570a3bedc316d3868280af64dad31ef8a75b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Enregistrementautreartiste</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "surname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomartiste</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "nomArtiste", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link1</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "link1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link2</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "link2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link3</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "link3", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Autrecategorie</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "autreCategorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number1</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "number1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number2</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "number2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lu</th>
                <td>";
        // line 62
        if ($this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "lu", array())) {
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
        if ($this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "confirm", array())) {
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
        if ($this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "groupe", array())) {
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
        if ($this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "solo", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "sexe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Style</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "style", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_enregistrement_edit", array("id" => $this->getAttribute(($context["enregistrementAutreArtiste"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 97
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
";
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
        return array (  208 => 97,  203 => 95,  197 => 92,  191 => 89,  181 => 82,  174 => 78,  163 => 74,  152 => 70,  141 => 66,  130 => 62,  123 => 58,  116 => 54,  109 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":enregistrementautreartiste:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/enregistrementautreartiste/show.html.twig");
    }
}
