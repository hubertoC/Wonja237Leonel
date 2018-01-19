<?php

/* :publicitedefile:show.html.twig */
class __TwigTemplate_7ee9a2e66cde83273a963f29c5b76842b5dd372df0c24d9d544a8cc240261a18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicitedefile:show.html.twig", 1);
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
        echo "    <h1>Publicitée</h1>
    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publiciteDefile"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publiciteDefile"] ?? null), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publiciteDefile"] ?? null), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li><br>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_index");
        echo "\" class=\"mdl-button mdl-js-button mdl-button--raised\" >Retour á la liste</a>
        </li>
        <li><br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_edit", array("id" => $this->getAttribute(($context["publiciteDefile"] ?? null), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li><br>
            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":publicitedefile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  74 => 30,  68 => 27,  62 => 24,  52 => 17,  45 => 13,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":publicitedefile:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicitedefile/show.html.twig");
    }
}
