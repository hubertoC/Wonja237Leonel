<?php

/* :reservation:index.html.twig */
class __TwigTemplate_3cb54a47ddd276feffa11c1073ea9c6ab4d5f648ed30c868803f0123322d71ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":reservation:index.html.twig", 1);
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
        $__internal_8c80dc5b05653ce797a6b2b0d4c705f00fd0b27a126cdb17ada312117c134a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c80dc5b05653ce797a6b2b0d4c705f00fd0b27a126cdb17ada312117c134a40->enter($__internal_8c80dc5b05653ce797a6b2b0d4c705f00fd0b27a126cdb17ada312117c134a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c80dc5b05653ce797a6b2b0d4c705f00fd0b27a126cdb17ada312117c134a40->leave($__internal_8c80dc5b05653ce797a6b2b0d4c705f00fd0b27a126cdb17ada312117c134a40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a67af0862ec64ffae24e57ae3928fd73d0b440fb8c456819800bccf8ff481d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a67af0862ec64ffae24e57ae3928fd73d0b440fb8c456819800bccf8ff481d5->enter($__internal_4a67af0862ec64ffae24e57ae3928fd73d0b440fb8c456819800bccf8ff481d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Number</th>
                <th>Ville</th>
                <th>Exigence</th>
                <th>Date</th>
                <th>Datedereservation</th>
                <th>Lu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "surname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "exigence", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["reservation"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["reservation"], "dateDeReservation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "dateDeReservation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["reservation"], "lu", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation_new");
        echo "\">Create a new reservation</a>
        </li>
    </ul>
";
        
        $__internal_4a67af0862ec64ffae24e57ae3928fd73d0b440fb8c456819800bccf8ff481d5->leave($__internal_4a67af0862ec64ffae24e57ae3928fd73d0b440fb8c456819800bccf8ff481d5_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  139 => 47,  127 => 41,  121 => 38,  110 => 34,  104 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Number</th>
                <th>Ville</th>
                <th>Exigence</th>
                <th>Date</th>
                <th>Datedereservation</th>
                <th>Lu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td><a href=\"{{ path('admin_reservation_show', { 'id': reservation.id }) }}\">{{ reservation.id }}</a></td>
                <td>{{ reservation.name }}</td>
                <td>{{ reservation.surname }}</td>
                <td>{{ reservation.email }}</td>
                <td>{{ reservation.number }}</td>
                <td>{{ reservation.ville }}</td>
                <td>{{ reservation.exigence }}</td>
                <td>{% if reservation.date %}{{ reservation.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if reservation.dateDeReservation %}{{ reservation.dateDeReservation|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if reservation.lu %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_reservation_show', { 'id': reservation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_reservation_edit', { 'id': reservation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_reservation_new') }}\">Create a new reservation</a>
        </li>
    </ul>
{% endblock %}
", ":reservation:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/reservation/index.html.twig");
    }
}
