<?php

/* HZWonja237Bundle:ArtistePublic:message_commentaire.html.twig */
class __TwigTemplate_d7077cbe2ddee4c6cfc5ac8a989130de38ad82fa8c7a357373fec1a1d389ec68 extends Twig_Template
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
        $__internal_8841b6fa3691b6bc73783a030e7b6f8513c751dda56adb3fa5f4ce83eafff29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8841b6fa3691b6bc73783a030e7b6f8513c751dda56adb3fa5f4ce83eafff29b->enter($__internal_8841b6fa3691b6bc73783a030e7b6f8513c751dda56adb3fa5f4ce83eafff29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:message_commentaire.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["artiste"] ?? $this->getContext($context, "artiste")), "commentaire", array()));
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
        
        $__internal_8841b6fa3691b6bc73783a030e7b6f8513c751dda56adb3fa5f4ce83eafff29b->leave($__internal_8841b6fa3691b6bc73783a030e7b6f8513c751dda56adb3fa5f4ce83eafff29b_prof);

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
        return array (  35 => 6,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for commentaire in artiste.commentaire %}
  <div class=\"commentaire-nom\">
    {{commentaire.name}}
    <span class=\"commentaire-content\">
      :&nbsp
      {{commentaire.contenu}}</span>
  </div>

  <br>
{% endfor %}
", "HZWonja237Bundle:ArtistePublic:message_commentaire.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/message_commentaire.html.twig");
    }
}
