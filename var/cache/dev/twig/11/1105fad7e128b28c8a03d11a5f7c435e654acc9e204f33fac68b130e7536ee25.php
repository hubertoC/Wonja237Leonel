<?php

/* :reservation:show.html.twig */
class __TwigTemplate_cce6a2bcb3f937a0dfd8f8890eb7349e582321add9e835740e0c8321c15740b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":reservation:show.html.twig", 1);
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
        $__internal_26ed910f347ddf2e4a750a82d6fae1f2860563bf737c2039342abf6f7fbc2b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ed910f347ddf2e4a750a82d6fae1f2860563bf737c2039342abf6f7fbc2b0b->enter($__internal_26ed910f347ddf2e4a750a82d6fae1f2860563bf737c2039342abf6f7fbc2b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ed910f347ddf2e4a750a82d6fae1f2860563bf737c2039342abf6f7fbc2b0b->leave($__internal_26ed910f347ddf2e4a750a82d6fae1f2860563bf737c2039342abf6f7fbc2b0b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e644df6000b1b09050e4e8d1d1a3b4e28a5e24530ffe527e1904639a78e51814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e644df6000b1b09050e4e8d1d1a3b4e28a5e24530ffe527e1904639a78e51814->enter($__internal_e644df6000b1b09050e4e8d1d1a3b4e28a5e24530ffe527e1904639a78e51814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "surname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Exigence</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "exigence", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 38
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datedereservation</th>
                <td>";
        // line 42
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "dateDeReservation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "dateDeReservation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lu</th>
                <td>";
        // line 46
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "lu", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation_edit", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e644df6000b1b09050e4e8d1d1a3b4e28a5e24530ffe527e1904639a78e51814->leave($__internal_e644df6000b1b09050e4e8d1d1a3b4e28a5e24530ffe527e1904639a78e51814_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 61,  141 => 59,  135 => 56,  129 => 53,  115 => 46,  106 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ reservation.name }}</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>{{ reservation.surname }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ reservation.email }}</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>{{ reservation.number }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ reservation.ville }}</td>
            </tr>
            <tr>
                <th>Exigence</th>
                <td>{{ reservation.exigence }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if reservation.date %}{{ reservation.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datedereservation</th>
                <td>{% if reservation.dateDeReservation %}{{ reservation.dateDeReservation|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Lu</th>
                <td>{% if reservation.lu %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_reservation_edit', { 'id': reservation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reservation:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/reservation/show.html.twig");
    }
}
