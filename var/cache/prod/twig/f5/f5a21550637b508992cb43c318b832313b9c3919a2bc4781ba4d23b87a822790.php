<?php

/* :artiste:edit.html.twig */
class __TwigTemplate_9a66cc3647e8f9bd1bc44dc45e14a128da698a552a236e8d2face7e391d9a911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":artiste:edit.html.twig", 1);
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
        echo "    <h1>Artiste edit</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "surname", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ville", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "sexe", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "style", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "status", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "number", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "lu", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "



<div class=\"jumbotron\">
  ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "image", array()), "file", array()), 'row');
        echo "
  <td><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["artiste"] ?? null), "image", array()), "webPath", array())), "html", null, true);
        echo "\" height=\"42\" width=\"42\" ></td>

  <br>
  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "categories", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
  <br>
  Video Youtube:
  ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "video", array()), "url", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

 <div>
     ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["edit_form"] ?? null), 'widget');
        echo "
       <div class=\"button_p_edit\">
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Modifier\" />

    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "

    <ul>
        <li>

<div class=\"retour\">
      <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_index");
        echo "\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour á la liste</a>
</div>
        </li>
        <li>

            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "

            <div class=\"modifier\">
  <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Suprimer\">
</div>


            ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>

    </ul>
  </div>
  </div>
</div>
  </div>
";
    }

    public function getTemplateName()
    {
        return ":artiste:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 54,  127 => 47,  119 => 42,  110 => 36,  103 => 32,  97 => 29,  91 => 26,  85 => 23,  81 => 22,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":artiste:edit.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/artiste/edit.html.twig");
    }
}
