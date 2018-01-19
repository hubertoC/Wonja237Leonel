<?php

/* HZWonja237Bundle:ArtistePublic:partenaire.html.twig */
class __TwigTemplate_85f10c4922f80394c51f9fc0cdf7a561857b96f878cd794e1ba65382b5cf667b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
    <title></title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/partenaire.css"), "html", null, true);
        echo "\">

  </head>
  <body>
    <div class=\"containerP\" >
      <ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publicites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "

        <li>
          <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "webPath", array())), "html", null, true);
            echo "\" alt=\"\">

          </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </ul>
    </div>

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  47 => 16,  43 => 15,  38 => 12,  34 => 11,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:partenaire.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/partenaire.html.twig");
    }
}
