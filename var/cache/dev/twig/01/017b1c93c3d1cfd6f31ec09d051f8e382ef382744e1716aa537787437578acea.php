<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5b2d75b98d1247c6b49db509838d592972c6c5851c4c5eb894ce14faf29edc10 extends Twig_Template
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
        $__internal_b3c55f15fd74574da7e86a085e94db6da2761f92d179fbafe2f49591a54f17ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c55f15fd74574da7e86a085e94db6da2761f92d179fbafe2f49591a54f17ee->enter($__internal_b3c55f15fd74574da7e86a085e94db6da2761f92d179fbafe2f49591a54f17ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "
    <head>
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <meta charset=\"";
        // line 4
        echo $this->env->getCharset();
        echo "\" />
        <title>Une erreur est survenue: ";
        // line 5
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "</title>
    </head>
    <body>
<div class=\"jumbotron\" style=\"text-align: center\">
  <h1 >Oops! Une erreur est survenue!</h1>
  <h2 >Le serveur a renvoyé une Erreur \"";
        // line 10
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".</h2>

    Quelque chose est cassé. S'il vous plaît laissez-nous savoir ce que vous faisiez lorsque cette erreur est survenue. <br>
             Nous allons corriger dès que possible. Désolé pour la gêne occasionnée.
  </div>

<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Button (Double) -->
<div class=\"form-group\" style=\"margin-left: 38em;\">
  <div class=\"col-md-8\">
    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237bundle_contact");
        echo "\" class=\"btn btn-success\">Contact</a>
    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hz_wonja237_homepage");
        echo "\" class=\"btn btn-danger\">Acceuil</a>
  </div>
</div>

</fieldset>
</form>
    </body>
";
        
        $__internal_b3c55f15fd74574da7e86a085e94db6da2761f92d179fbafe2f49591a54f17ee->leave($__internal_b3c55f15fd74574da7e86a085e94db6da2761f92d179fbafe2f49591a54f17ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  59 => 25,  39 => 10,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    <head>
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <meta charset=\"{{ _charset }}\" />
        <title>Une erreur est survenue: {{ status_text }}</title>
    </head>
    <body>
<div class=\"jumbotron\" style=\"text-align: center\">
  <h1 >Oops! Une erreur est survenue!</h1>
  <h2 >Le serveur a renvoyé une Erreur \"{{ status_code }} {{ status_text }}\".</h2>

    Quelque chose est cassé. S'il vous plaît laissez-nous savoir ce que vous faisiez lorsque cette erreur est survenue. <br>
             Nous allons corriger dès que possible. Désolé pour la gêne occasionnée.
  </div>

<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Button (Double) -->
<div class=\"form-group\" style=\"margin-left: 38em;\">
  <div class=\"col-md-8\">
    <a href=\"{{ path('hz_wonja237bundle_contact')}}\" class=\"btn btn-success\">Contact</a>
    <a href=\"{{ path('hz_wonja237_homepage')}}\" class=\"btn btn-danger\">Acceuil</a>
  </div>
</div>

</fieldset>
</form>
    </body>
", "TwigBundle:Exception:error.txt.twig", "/homepages/2/d634677098/htdocs/wonja/app/Resources/TwigBundle/views/Exception/error.txt.twig");
    }
}
