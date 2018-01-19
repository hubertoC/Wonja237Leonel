<?php

/* HZWonja237Bundle:Emails:register.html.twig */
class __TwigTemplate_60a02adebc1d3b4412058f411d5c95a7a48f59bb06bc8178c42d5c3467880c0c extends Twig_Template
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
        $__internal_6ede1f243b4b2cd38b1f89c4808897d3ffa39f052223b48456f85158abb3a67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ede1f243b4b2cd38b1f89c4808897d3ffa39f052223b48456f85158abb3a67c->enter($__internal_6ede1f243b4b2cd38b1f89c4808897d3ffa39f052223b48456f85158abb3a67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:Emails:register.html.twig"));

        // line 1
        echo "<h3>You did it! You registered!</h3>

Hi ";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "! You're successfully registered.

";
        // line 6
        echo "To login, go to: <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
        echo "\">...</a>.

Thanks!

";
        // line 11
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\">
";
        
        $__internal_6ede1f243b4b2cd38b1f89c4808897d3ffa39f052223b48456f85158abb3a67c->leave($__internal_6ede1f243b4b2cd38b1f89c4808897d3ffa39f052223b48456f85158abb3a67c_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:Emails:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  31 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>You did it! You registered!</h3>

Hi {{ name }}! You're successfully registered.

{# example, assuming you have a route named \"login\" #}
To login, go to: <a href=\"{{ url('login') }}\">...</a>.

Thanks!

{# Makes an absolute URL to the /images/logo.png file #}
<img src=\"{{ absolute_url(asset('images/logo.png')) }}\">
", "HZWonja237Bundle:Emails:register.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/Emails/register.html.twig");
    }
}
