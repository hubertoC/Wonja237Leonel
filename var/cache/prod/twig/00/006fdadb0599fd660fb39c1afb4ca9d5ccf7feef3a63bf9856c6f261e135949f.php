<?php

/* :artiste:new.html.twig */
class __TwigTemplate_a228eced81794a606a01e19d6e818bbdacce1b3f4061bd2f47c6419937d61ebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutP.html.twig", ":artiste:new.html.twig", 1);
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
        echo "    <h1>Artiste creation</h1>
    <div class= \"cration_artiste\">
   ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
       <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
           ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "surname", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ville", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sexe", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "style", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "number", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
   ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
<br>
   <div class=\"jumbotron\">
     ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "image", array()), "file", array()), 'row');
        echo "
     <br>
     ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categories", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
     <br>
     Video Youtube:
     ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "video", array()), "url", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

    <div>

    </div>

   </br>

           ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
           </div>
         </div>





         <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Valider\" />
           ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
           <ul>

               <li>
                 <div class=\"lon\">

                   <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminArtiste_index");
        echo "\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour á la list</a>
                 </div>

               </li>

           </ul>
         </div>

           </div>
";
    }

    public function getTemplateName()
    {
        return ":artiste:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  114 => 43,  102 => 34,  91 => 26,  85 => 23,  80 => 21,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":artiste:new.html.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/views/artiste/new.html.twig");
    }
}
