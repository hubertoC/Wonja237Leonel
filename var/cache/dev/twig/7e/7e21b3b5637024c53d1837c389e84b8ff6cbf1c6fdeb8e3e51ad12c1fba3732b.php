<?php

/* HZWonja237Bundle:ArtistePublic:enregistremenArtiste.html.twig */
class __TwigTemplate_f71097b7d8ad85dd247f03edcbbba4350338b2f8b12c05f37827abd186d569c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZWonja237Bundle:ArtistePublic:enregistremenArtiste.html.twig", 1);
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
        $__internal_fd4ea4a6b246e71597374b6064f98ee4449212fed7ac0bcc89e82b1f49ce848e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4ea4a6b246e71597374b6064f98ee4449212fed7ac0bcc89e82b1f49ce848e->enter($__internal_fd4ea4a6b246e71597374b6064f98ee4449212fed7ac0bcc89e82b1f49ce848e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:enregistremenArtiste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4ea4a6b246e71597374b6064f98ee4449212fed7ac0bcc89e82b1f49ce848e->leave($__internal_fd4ea4a6b246e71597374b6064f98ee4449212fed7ac0bcc89e82b1f49ce848e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ddfc22c6854c3890499bc4b268497a39e888b3475eed42b1e603bcacf077be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddfc22c6854c3890499bc4b268497a39e888b3475eed42b1e603bcacf077be0->enter($__internal_0ddfc22c6854c3890499bc4b268497a39e888b3475eed42b1e603bcacf077be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <br><br><br><br>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/EnregistrementAutreArtiste.css"), "html", null, true);
        echo "\">
  <br><br>
  <div class=\"login-card\">
                ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? $this->getContext($context, "formAutre")), 'form_start');
        echo "
                ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "user-notice"), "method")) {
            // line 10
            echo "                  <div class=\"alert alert-success\">
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "user-notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

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
            echo "                  </div>
                ";
        }
        // line 23
        echo "

                </div>
  <div class=\"title\">
    <center>
      FORMULAIRE D'INSCRIPTION ARTISTE
    </center>
  </div>

<div class=\"\">


";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? $this->getContext($context, "formAutre")), 'form_start');
        echo "

  <div class=\"row premierBlock \">

    <div class=\"col-sm-4 image\">
      <center>
        <img class=\"img-responsive\"src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/thumbnail.png"), "html", null, true);
        echo "\" alt=\"\">
        <center>
          <div class=\"\">
            <br>
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "image", array()), 'widget', array("attr" => array("class" => "form-control-file")));
        echo "
          </div>
      </div>
    <div class=\"col-sm-8 \" style=\"background-color:#000;\">
      <br>
      ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
      <br>
      ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "surname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom(s)")));
        echo "

      <div class=\"row\">
    <div class=\"col-lg-6\">
      <br>
      ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "number1", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Télephone 1")));
        echo "
    </div>
    <div class=\"offset-1 col-lg-6\">
      <br>
      ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "number2", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Télephone 2")));
        echo "
    </div>
  </div>

  <br>
  ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "

  <br>
  ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ville de résidence")));
        echo "


  <div class=\"row\">
<div class=\"col-lg-6\">
  <br>
  ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "groupe", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
  <label class=\"form-check-label\" for=\"exampleCheck1\">Groupe</label>
</div>
<div class=\"offset-1 col-lg-6\">
  <br>
  ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "solo", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
  <label class=\"form-check-label\" for=\"exampleCheck1\">Solo</label>

</div>
</div>

<br>
";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "nomArtiste", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom(s) d'artiste")));
        echo "

<br>
";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "categories", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom(s) d'artiste")));
        echo "

<br>
";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "autreCategorie", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Autre Categorie Precisez...")));
        echo "
<br>
";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo "

<br>
";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "style", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo "
<br>
    </div>
  </div>


<div class=\"row premierBlock\">
  <div class=\"titreBlock2\">
  <center>  Veuillez s'il vous plaît vous décrire: </center>
  </div>
  <div class=\" offset-1 col-lg-12\">
    <br>
    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "description", array()), 'widget', array("attr" => array("class" => "form-control description")));
        echo "
    <br>
  </div>

  <div class=\"titreBlock2\">
  <center>  Veuillez insérer les liens de  vos réalisations( <span style=\"color:red;\"> au moins un </span>) </center>
  </div>

<div class=\"offset-1 col-lg-12\">
  ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "link1", array()), 'widget', array("attr" => array("class" => "form-control offset-1 col-lg-6", "placeholder" => "Lien de audio ou des images")));
        echo "
<br>
</div>

<div class=\"offset-1 col-lg-12\">
  ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "link2", array()), 'widget', array("attr" => array("class" => "form-control offset-1 col-lg-6", "placeholder" => "Lien de la vidéo")));
        echo "
<br>
</div>

<div class=\"offset-1 col-lg-12\">
  ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "link3", array()), 'widget', array("attr" => array("class" => "form-control offset-1 col-lg-6", "placeholder" => "Lien facebook")));
        echo "
<br><br>
</div>
</div>


<div class=\"row premierBlock\">
  <div class=\"titreBlock2\">
  <center>  Règle et conditions d'utilisation: </center>
  </div>

  <div class=\"regleEtCondition\">

    <span class=\"condition\">
1. Avant d'utiliser le service de réservation de WONJA, lisez attentivement ces CONDITIONS.
    </span>
     En acceptant ou en utilisant ce service, vous acceptez sans réserve les Conditions énoncées ci-dessous avec WONJA237 et serez liés par elles.<br>
     <span class=\"condition\">
2. Nous pouvons modifier le présent Contrat à tout moment en publiant les termes modifiés sur le site Web.
     </span>
      Tous les termes modifiés entreront automatiquement en vigueur 30 jours après leur publication initiale sur le site Web ou votre utilisation des
    services après cette publication, selon ce qui est antérieur.
    <br>
    <span class=\"condition\">
      3. En acceptant ces termes et conditions, vous représentez ce qui suit:<br>
    </span>
    • Vous avez 18 ans (dix-huit) ans ou plus;<br>
    • Capable de conclure un accord juridiquement contraignant;<br>
    • Vous disposez d'un droit, d'une autorité et d'une capacité valides et subsistants pour entrer dans ces Conditions et pour respecter tous les termes et conditions contenus dans ce document; et<br>
    • Vous n'imitez pas une personne ou une entité, ou indiquez faussement ou déformez autrement l'identité, l'âge ou l'affiliation avec une personne ou une entité.<br>
    6. Toutes les références dans ces termes et conditions à \"Vous\" ou \"Votre\" doivent se référer au Client du Site. Toutes les références dans ces termes et conditions à \"Nous\", \"Nous\" ou \"Notre\" désigneront WONJA237, et leurs affiliés respectifs, selon
    le cas. Les clients, les vendeurs et les artistes sont communément appelés utilisateurs.<br><br>
    <span class=\"condition\">
      La procédure
    </span>
    <br>
    Nous vous offrons un large panel diversifié, d’Artistes de diverses catégories et compétences ; A chacun a été attribuée une page contenant des informations et identités visuelles afin de vous aider dans vos choix. Dans chacune des pages, a été
    intégré un bouton « réservé » qui vous conduit au « formulaire de réservation » que vous êtes tenu de remplir et valider ayant lu et accepté les présentes conditions.<br><br>
    Chaque formulaire de réservation contient des informations nécessaires à la réservation, vous confirmez donc que les informations que vous avez fournies sont vraies et vérifiables.<br><br>
    Toutes les informations personnelles seront tenues confidentielles par nous et les équipes managériales, sauf dans le cas où des obligations légales et judiciaires nous sont imposées.<br>
    Après validation de votre réservation, nous nous engageons alors à vous répondre sous les 24h suivant la validation de votre requête au(x) contact(s) que vous nous aurez fournis.<br>
    En cas de validation de la requête de réservation par l’artiste, nous vous notifierons et dresserons un contrat qui vous liera à l’artiste selon les termes en accords avec vos préférences et les prédispositions prises par nous ;<br>
    Une fois le contrat signé, et le versement du premier paiement dans l’un de nos comptes effectué, par vous, nous vous ferons parvenir une copie du contrat signé (par vous, l’artiste et/ou son représentant légal), suivi d’une vidéo (où l’artiste
    confirme sa présence à votre évènement) et des preuves attestant la réception de votre premier versement.<br>
    En outre vous êtes tenu, de conserver les reçus de vos versements.<br>
    Le jour de l’évènement, avant la prestation de l’artiste, vous devez faire le dernier versement pour que l’artiste puisse sans contrainte honorer les clauses du contrat qui le lie à vous.<br><br>
    <span class=\"condition\">
      Vos obligations
    </span>
    <br>
    En cas d’annulation/report, une fois le contrat signé :<br>
    - Si l’annulation vient de vous, nous vous retournerons les fonds de votre versement, ayant déduit nos honoraires et les frais d’indemnisation de l’artiste (10% du versement).<br>
    - Dans le cas d’un report de votre évènement et que vous maintenez votre réservation, le contrat devra être revu et de nouvelles clauses s’ajouteront à celui-ci, selon votre arrangement avec l’artiste et/ou son représentant légal. Nos honoraires ne
    fluctueront pas.<br><br>
    En cas de changement de lieu ou de toute modification de la nature et du déroulement de l’évènement comme mentionné dans le contrat, nous et l’artiste devront être informés dans les plus bref délais ; Une potentielle modification des clauses du
    contrat pourra être nécessaire, selon l’arrangement entre les parties.<br>
    Le contrat est modulable en fonction de vos préférences et des négociations avec les artistes, ainsi toutes les clauses du contrat résulteront d’un commun accord entre vous, l’artiste et nous.<br><br>
    <span class=\"condition\">
      Les obligations de l’artiste
    </span>
    <br>
    Elles se résument essentiellement à honorer le contrat.<br><br>
    <span class=\"condition\">
      En cas de litige :
    </span>
    <br>

    - Nous conseillons fortement le dialogue et l’entendement mutuel avant toute chose.<br>
    - Chaque partie est libre de solliciter les instances judiciaires camerounaises en cas de non-respect de l’une des clauses du contrat, mais avant nous devrons être informé dans un délai de 72h.<br>
    - En cas de mésentente en vous et l’artiste, nous sommes d’abord les intermédiaires.<br><br>
    <span class=\"condition\">
      Nos partenaires
    </span>
    <br><br>
    Si vous sollicitez les services de l’un de nos partenaires, nous ne sommes en rien responsables du contrat qui vous lie. Nous assurons juste la mise en contact par l’intermédiaire de notre site.<br>

  </div>


<div class=\"row premierBlock\">
  <div class=\"offset-1 col-lg-12\">
    <br>
    ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "lu", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
    <label class=\"form-check-label\" for=\"exampleCheck1\"><span style=\"color:red;\"> J'ai lu et accepte de respecter les règles et conditions d'utilisation ci-dessus </span></label>

    <br>
    ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "confirm", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
    <label class=\"form-check-label\" for=\"exampleCheck1\"><span style=\"color:red;\"> je confirme que les informations fournies sont miennes et exactes</span></label>
  </div>

</div>
<div class=\"row\">
  <center>
    <button class=\"btn btn-default \" type=\"submit\">Envoyer<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
      <center>
</div>
<br>
  ";
        // line 226
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? $this->getContext($context, "formAutre")), 'form_end');
        echo "
  </div>

";
        
        $__internal_0ddfc22c6854c3890499bc4b268497a39e888b3475eed42b1e603bcacf077be0->leave($__internal_0ddfc22c6854c3890499bc4b268497a39e888b3475eed42b1e603bcacf077be0_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:enregistremenArtiste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 226,  340 => 215,  333 => 211,  248 => 129,  240 => 124,  232 => 119,  220 => 110,  205 => 98,  199 => 95,  194 => 93,  188 => 90,  182 => 87,  172 => 80,  164 => 75,  155 => 69,  149 => 66,  141 => 61,  134 => 57,  126 => 52,  121 => 50,  113 => 45,  106 => 41,  97 => 35,  83 => 23,  79 => 21,  70 => 18,  62 => 12,  58 => 11,  55 => 10,  53 => 9,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutPublic.html.twig' %}

{% block body %}
  <br><br><br><br>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/EnregistrementAutreArtiste.css') }}\">
  <br><br>
  <div class=\"login-card\">
                {{ form_start(formAutre) }}
                {% if app.session.flashbag.has('user-notice') %}
                  <div class=\"alert alert-success\">
                    {% for msg in app.session.flashbag.get('user-notice') %}
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

                        <span aria-hidden=\"true\">&times;
                        </span>
                        <span class=\"sr-only\">Close</span>
                      </button>
                      <a href=\"/\" class=\"alert-link\">{{ msg }}</a>

                    {% endfor %}
                  </div>
                {% endif %}


                </div>
  <div class=\"title\">
    <center>
      FORMULAIRE D'INSCRIPTION ARTISTE
    </center>
  </div>

<div class=\"\">


{{form_start(formAutre)}}

  <div class=\"row premierBlock \">

    <div class=\"col-sm-4 image\">
      <center>
        <img class=\"img-responsive\"src=\"{{ asset('images/thumbnail.png') }}\" alt=\"\">
        <center>
          <div class=\"\">
            <br>
            {{form_widget(formAutre.image, {'attr':{'class':'form-control-file'}})}}
          </div>
      </div>
    <div class=\"col-sm-8 \" style=\"background-color:#000;\">
      <br>
      {{form_widget(formAutre.name, {'attr':{'class':'form-control' , 'placeholder':'Nom'}})}}
      <br>
      {{form_widget(formAutre.surname, {'attr':{'class':'form-control' , 'placeholder':'Prénom(s)'}})}}

      <div class=\"row\">
    <div class=\"col-lg-6\">
      <br>
      {{form_widget(formAutre.number1, {'attr':{'class':'form-control' , 'placeholder':'Télephone 1'}})}}
    </div>
    <div class=\"offset-1 col-lg-6\">
      <br>
      {{form_widget(formAutre.number2, {'attr':{'class':'form-control' , 'placeholder':'Télephone 2'}})}}
    </div>
  </div>

  <br>
  {{form_widget(formAutre.email, {'attr':{'class':'form-control' , 'placeholder':'Email'}})}}

  <br>
  {{form_widget(formAutre.ville, {'attr':{'class':'form-control' , 'placeholder':'Ville de résidence'}})}}


  <div class=\"row\">
<div class=\"col-lg-6\">
  <br>
  {{form_widget(formAutre.groupe, {'attr':{'class':'form-check-input'}})}}
  <label class=\"form-check-label\" for=\"exampleCheck1\">Groupe</label>
</div>
<div class=\"offset-1 col-lg-6\">
  <br>
  {{form_widget(formAutre.solo, {'attr':{'class':'form-check-input'}})}}
  <label class=\"form-check-label\" for=\"exampleCheck1\">Solo</label>

</div>
</div>

<br>
{{form_widget(formAutre.nomArtiste, {'attr':{'class':'form-control' , 'placeholder':'Nom(s) d\\'artiste'}})}}

<br>
{{form_widget(formAutre.categories, {'attr':{'class':'form-control' , 'placeholder':'Nom(s) d\\'artiste'}})}}

<br>
{{form_widget(formAutre.autreCategorie, {'attr':{'class':'form-control' , 'placeholder':'Autre Categorie Precisez...'}})}}
<br>
{{form_widget(formAutre.sexe, {'attr':{'class':'form-control' , 'placeholder':''}})}}

<br>
{{form_widget(formAutre.style, {'attr':{'class':'form-control' , 'placeholder':''}})}}
<br>
    </div>
  </div>


<div class=\"row premierBlock\">
  <div class=\"titreBlock2\">
  <center>  Veuillez s'il vous plaît vous décrire: </center>
  </div>
  <div class=\" offset-1 col-lg-12\">
    <br>
    {{form_widget(formAutre.description, {'attr':{'class':'form-control description'}})}}
    <br>
  </div>

  <div class=\"titreBlock2\">
  <center>  Veuillez insérer les liens de  vos réalisations( <span style=\"color:red;\"> au moins un </span>) </center>
  </div>

<div class=\"offset-1 col-lg-12\">
  {{form_widget(formAutre.link1, {'attr':{'class':'form-control offset-1 col-lg-6' , 'placeholder':'Lien de audio ou des images'}})}}
<br>
</div>

<div class=\"offset-1 col-lg-12\">
  {{form_widget(formAutre.link2, {'attr':{'class':'form-control offset-1 col-lg-6' , 'placeholder':'Lien de la vidéo'}})}}
<br>
</div>

<div class=\"offset-1 col-lg-12\">
  {{form_widget(formAutre.link3, {'attr':{'class':'form-control offset-1 col-lg-6' , 'placeholder':'Lien facebook'}})}}
<br><br>
</div>
</div>


<div class=\"row premierBlock\">
  <div class=\"titreBlock2\">
  <center>  Règle et conditions d'utilisation: </center>
  </div>

  <div class=\"regleEtCondition\">

    <span class=\"condition\">
1. Avant d'utiliser le service de réservation de WONJA, lisez attentivement ces CONDITIONS.
    </span>
     En acceptant ou en utilisant ce service, vous acceptez sans réserve les Conditions énoncées ci-dessous avec WONJA237 et serez liés par elles.<br>
     <span class=\"condition\">
2. Nous pouvons modifier le présent Contrat à tout moment en publiant les termes modifiés sur le site Web.
     </span>
      Tous les termes modifiés entreront automatiquement en vigueur 30 jours après leur publication initiale sur le site Web ou votre utilisation des
    services après cette publication, selon ce qui est antérieur.
    <br>
    <span class=\"condition\">
      3. En acceptant ces termes et conditions, vous représentez ce qui suit:<br>
    </span>
    • Vous avez 18 ans (dix-huit) ans ou plus;<br>
    • Capable de conclure un accord juridiquement contraignant;<br>
    • Vous disposez d'un droit, d'une autorité et d'une capacité valides et subsistants pour entrer dans ces Conditions et pour respecter tous les termes et conditions contenus dans ce document; et<br>
    • Vous n'imitez pas une personne ou une entité, ou indiquez faussement ou déformez autrement l'identité, l'âge ou l'affiliation avec une personne ou une entité.<br>
    6. Toutes les références dans ces termes et conditions à \"Vous\" ou \"Votre\" doivent se référer au Client du Site. Toutes les références dans ces termes et conditions à \"Nous\", \"Nous\" ou \"Notre\" désigneront WONJA237, et leurs affiliés respectifs, selon
    le cas. Les clients, les vendeurs et les artistes sont communément appelés utilisateurs.<br><br>
    <span class=\"condition\">
      La procédure
    </span>
    <br>
    Nous vous offrons un large panel diversifié, d’Artistes de diverses catégories et compétences ; A chacun a été attribuée une page contenant des informations et identités visuelles afin de vous aider dans vos choix. Dans chacune des pages, a été
    intégré un bouton « réservé » qui vous conduit au « formulaire de réservation » que vous êtes tenu de remplir et valider ayant lu et accepté les présentes conditions.<br><br>
    Chaque formulaire de réservation contient des informations nécessaires à la réservation, vous confirmez donc que les informations que vous avez fournies sont vraies et vérifiables.<br><br>
    Toutes les informations personnelles seront tenues confidentielles par nous et les équipes managériales, sauf dans le cas où des obligations légales et judiciaires nous sont imposées.<br>
    Après validation de votre réservation, nous nous engageons alors à vous répondre sous les 24h suivant la validation de votre requête au(x) contact(s) que vous nous aurez fournis.<br>
    En cas de validation de la requête de réservation par l’artiste, nous vous notifierons et dresserons un contrat qui vous liera à l’artiste selon les termes en accords avec vos préférences et les prédispositions prises par nous ;<br>
    Une fois le contrat signé, et le versement du premier paiement dans l’un de nos comptes effectué, par vous, nous vous ferons parvenir une copie du contrat signé (par vous, l’artiste et/ou son représentant légal), suivi d’une vidéo (où l’artiste
    confirme sa présence à votre évènement) et des preuves attestant la réception de votre premier versement.<br>
    En outre vous êtes tenu, de conserver les reçus de vos versements.<br>
    Le jour de l’évènement, avant la prestation de l’artiste, vous devez faire le dernier versement pour que l’artiste puisse sans contrainte honorer les clauses du contrat qui le lie à vous.<br><br>
    <span class=\"condition\">
      Vos obligations
    </span>
    <br>
    En cas d’annulation/report, une fois le contrat signé :<br>
    - Si l’annulation vient de vous, nous vous retournerons les fonds de votre versement, ayant déduit nos honoraires et les frais d’indemnisation de l’artiste (10% du versement).<br>
    - Dans le cas d’un report de votre évènement et que vous maintenez votre réservation, le contrat devra être revu et de nouvelles clauses s’ajouteront à celui-ci, selon votre arrangement avec l’artiste et/ou son représentant légal. Nos honoraires ne
    fluctueront pas.<br><br>
    En cas de changement de lieu ou de toute modification de la nature et du déroulement de l’évènement comme mentionné dans le contrat, nous et l’artiste devront être informés dans les plus bref délais ; Une potentielle modification des clauses du
    contrat pourra être nécessaire, selon l’arrangement entre les parties.<br>
    Le contrat est modulable en fonction de vos préférences et des négociations avec les artistes, ainsi toutes les clauses du contrat résulteront d’un commun accord entre vous, l’artiste et nous.<br><br>
    <span class=\"condition\">
      Les obligations de l’artiste
    </span>
    <br>
    Elles se résument essentiellement à honorer le contrat.<br><br>
    <span class=\"condition\">
      En cas de litige :
    </span>
    <br>

    - Nous conseillons fortement le dialogue et l’entendement mutuel avant toute chose.<br>
    - Chaque partie est libre de solliciter les instances judiciaires camerounaises en cas de non-respect de l’une des clauses du contrat, mais avant nous devrons être informé dans un délai de 72h.<br>
    - En cas de mésentente en vous et l’artiste, nous sommes d’abord les intermédiaires.<br><br>
    <span class=\"condition\">
      Nos partenaires
    </span>
    <br><br>
    Si vous sollicitez les services de l’un de nos partenaires, nous ne sommes en rien responsables du contrat qui vous lie. Nous assurons juste la mise en contact par l’intermédiaire de notre site.<br>

  </div>


<div class=\"row premierBlock\">
  <div class=\"offset-1 col-lg-12\">
    <br>
    {{form_widget(formAutre.lu, {'attr':{'class':'form-check-input'}})}}
    <label class=\"form-check-label\" for=\"exampleCheck1\"><span style=\"color:red;\"> J'ai lu et accepte de respecter les règles et conditions d'utilisation ci-dessus </span></label>

    <br>
    {{form_widget(formAutre.confirm, {'attr':{'class':'form-check-input'}})}}
    <label class=\"form-check-label\" for=\"exampleCheck1\"><span style=\"color:red;\"> je confirme que les informations fournies sont miennes et exactes</span></label>
  </div>

</div>
<div class=\"row\">
  <center>
    <button class=\"btn btn-default \" type=\"submit\">Envoyer<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
      <center>
</div>
<br>
  {{form_end(formAutre)}}
  </div>

{% endblock %}
", "HZWonja237Bundle:ArtistePublic:enregistremenArtiste.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/enregistremenArtiste.html.twig");
    }
}
