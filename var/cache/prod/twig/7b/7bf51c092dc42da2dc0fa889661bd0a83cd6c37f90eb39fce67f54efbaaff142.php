<?php

/* :category:show.html.twig */
class __TwigTemplate_96943cb5aecd8ffe0ea8be6cffdf59379115233ea1c5532dedde6b4ed539ee6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":category:show.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Categorie</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "name", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
          <br>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute(($context["category"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
            <br>
            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
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
        return ":category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  71 => 29,  65 => 26,  58 => 22,  46 => 13,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":category:show.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/category/show.html.twig");
    }
}
