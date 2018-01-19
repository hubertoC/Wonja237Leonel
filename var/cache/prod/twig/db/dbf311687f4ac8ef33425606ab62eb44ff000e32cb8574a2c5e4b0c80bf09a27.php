<?php

/* HZWonja237Bundle:ArtistePublic:message_commentaire.html.twig */
class __TwigTemplate_422f6c8e16938d843234aaf385922bb5b128a6330f0f8669f7ba5d662b7c94dd extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["artiste"] ?? null), "commentaire", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 2
            echo "  <div class=\"commentaire-nom\">
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "name", array()), "html", null, true);
            echo "
    <span class=\"commentaire-content\">
      :&nbsp
      ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo "</span>
  </div>

  <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:message_commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:message_commentaire.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/message_commentaire.html.twig");
    }
}
