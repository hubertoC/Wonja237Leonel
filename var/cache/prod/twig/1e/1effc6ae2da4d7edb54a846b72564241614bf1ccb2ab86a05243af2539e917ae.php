<?php

/* :publicitedefile:index.html.twig */
class __TwigTemplate_d47dde67ca08aec465aee9441ddf5156bbc82be16e020231224e59412e1a1700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":publicitedefile:index.html.twig", 1);
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
        echo "    <h1>Publicitedefiles list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Image</th>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publiciteDefiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["publiciteDefile"]) {
            // line 18
            echo "            <tr>
                <td><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["publiciteDefile"], "webPath", array())), "html", null, true);
            echo "\" height=\"42\" width=\"42\" ></td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_show", array("id" => $this->getAttribute($context["publiciteDefile"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publiciteDefile"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["publiciteDefile"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["publiciteDefile"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_show", array("id" => $this->getAttribute($context["publiciteDefile"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_edit", array("id" => $this->getAttribute($context["publiciteDefile"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publiciteDefile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
          <br>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicitedefile_new");
        echo "\" class=\"mdl-button mdl-js-button mdl-button--raised\">Crée une publicitée</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":publicitedefile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  92 => 35,  80 => 29,  74 => 26,  67 => 22,  63 => 21,  57 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":publicitedefile:index.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/publicitedefile/index.html.twig");
    }
}
