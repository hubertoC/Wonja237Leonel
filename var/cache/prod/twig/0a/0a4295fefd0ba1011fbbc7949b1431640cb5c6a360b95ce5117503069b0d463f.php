<?php

/* HZWonja237Bundle:ArtistePublic:contact.html.twig */
class __TwigTemplate_aeff6af6e97b05a28e4f3c185cd42a13366d4da675886817b77a2d9cd7d2ed02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZWonja237Bundle:ArtistePublic:contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  <div class=\"\">

    <section id=\"contact\">
      <div class=\"section-content\">
        ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "has", array(0 => "user-notice"), "method")) {
            // line 10
            echo "          <div class=\"alert alert-success\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "user-notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

                <span aria-hidden=\"true\">&times;
                </span>
                <span class=\"sr-only\">Close</span>
              </button>
              <a href=\"/\" class=\"alert-link\">";
                // line 18
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</a>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "          </div>
        ";
        }
        // line 23
        echo "
        <br><br><br><br>
        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/thumbnail.png"), "html", null, true);
        echo "\" width=\"200em\" height=\"200em\">
        <h1 class=\"section-header\">Entrez en contact avec nous
          <span class=\"content-header wow fadeIn \" data-wow-delay=\"0.2s\" data-wow-duration=\"2s\">
          </span>
        </h1>
        <h3>Avec ce formulaire, vous pouvez nous envoyer un message.
        </h3>
      </div>
      ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
      <div class=\"col-md-6 form-line\">
        <div class=\"form-group\">

          ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">

          ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        </div>
        <div class=\"form-group\">
          ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "number", array()), 'label', array("label" => "Téléphone:"));
        echo "
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "number", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>
        <div class=\"form-group\">

          ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ville", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"form-group\">
          ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "content", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div>

          <button class=\"btn btn-default submit\" type=\"submit\">Envoyer<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
          </button><br>
          ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
      </section>

    </div>

    <link href=\"https://fonts.googleapis.com/css?family=Oleo+Script:400,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Teko:400,700\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/categories/style.css"), "html", null, true);
        echo "\" media=\"screen\">

  ";
    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 73,  135 => 64,  126 => 58,  116 => 51,  108 => 46,  104 => 45,  97 => 41,  90 => 37,  83 => 33,  72 => 25,  68 => 23,  64 => 21,  55 => 18,  47 => 12,  43 => 11,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:contact.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/contact.html.twig");
    }
}
