<?php

/* HZWonja237Bundle:ArtistePublic:testSite.html.twig */
class __TwigTemplate_3085b731ee8ffeeab3bde43a216f4aa751ebd461b4c5392e67f6aaf4b3a569d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZWonja237Bundle:ArtistePublic:testSite.html.twig", 1);
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
        $__internal_26830cd9e63eeac712821410abae56222824ac8c5e06cea21d5c5e056393dd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26830cd9e63eeac712821410abae56222824ac8c5e06cea21d5c5e056393dd6a->enter($__internal_26830cd9e63eeac712821410abae56222824ac8c5e06cea21d5c5e056393dd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:ArtistePublic:testSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26830cd9e63eeac712821410abae56222824ac8c5e06cea21d5c5e056393dd6a->leave($__internal_26830cd9e63eeac712821410abae56222824ac8c5e06cea21d5c5e056393dd6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4979c9ac01f7a00b4441d6b454db722f55b89d110d9f88e8ea61e4ea96c19327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4979c9ac01f7a00b4441d6b454db722f55b89d110d9f88e8ea61e4ea96c19327->enter($__internal_4979c9ac01f7a00b4441d6b454db722f55b89d110d9f88e8ea61e4ea96c19327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <br><br><br><br>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/testCss.css"), "html", null, true);
        echo "\">
  <br><br>

  <div class=\"login-card\">
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? $this->getContext($context, "formAutre")), 'form_start');
        echo "
    ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "user-notice"), "method")) {
            // line 11
            echo "      <div class=\"alert alert-success\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "user-notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 13
                echo "          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

            <span aria-hidden=\"true\">&times;
            </span>
            <span class=\"sr-only\">Close</span>
          </button>
          <a href=\"/\" class=\"alert-link\">";
                // line 19
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</a>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </div>
    ";
        }
        // line 24
        echo "
  </div>
  <div class=\"title\">
    <center>
      FORMULAIRE DE TEST WONJA237
    </center>
  </div>

  ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? $this->getContext($context, "formAutre")), 'form_start');
        echo "

  <div class=\"row contentForme\">
    <form class=\"form-horizontal\">
      <fieldset>
        <div class=\"titreblock\">
          Profil utilisateur
        </div>

        <!-- Form Name -->
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "nom", array()), 'label', array("label" => "Nom:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "nom", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "profession", array()), 'label', array("label" => "Profession:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "profession", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "sexe", array()), 'label', array("label" => "Sexe:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ternaminal", array()), 'label', array("label" => "Terminal utilisé:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ternaminal", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "

              <br><br>
              <div class=\"titreblock1\">
                Questions dirigées
                <br><br>
              </div>
            </div>

          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "bonneNavigation", array()), 'label', array("label" => "Réussissez vous à naviguer sur le site sans être aidé ?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "bonneNavigation", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>



        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "connaisTuInternet", array()), 'label', array("label" => "Êtes-vous familier avec l’utilisation d’Internet en général?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "connaisTuInternet", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "sitePrefere", array()), 'label', array("label" => "Quel est votre site internet préféré ?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "sitePrefere", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>


        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "pourquoiSitePreferer", array()), 'label', array("label" => "Pourquoi ? (facultatif )"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "pourquoiSitePreferer", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>




        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "attractionPageAcceuil", array()), 'label', array("label" => "Quel élément attire le plus  votre attention sur de la page d'acceuil "));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "attractionPageAcceuil", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>


        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "barreDeRescherche", array()), 'label', array("label" => "La barre de recherche est-elle facilement visible?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "barreDeRescherche", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ameliorationBarreDeRecherche", array()), 'label', array("label" => "Sinon, que proposez vous comme amélioration?

"));
        // line 178
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ameliorationBarreDeRecherche", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "inscriptionProzess", array()), 'label', array("label" => "Que pensez-vous de la procédure d'inscription?

"));
        // line 192
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "inscriptionProzess", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "inscriptionOK", array()), 'label', array("label" => "Parvenez-vous à vous inscrire sur le site ?

"));
        // line 206
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "inscriptionOK", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "inscriptionPourQuoi", array()), 'label', array("label" => "Si non, veuillez préciser pourquoi

"));
        // line 220
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "inscriptionPourQuoi", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reservationProzess", array()), 'label', array("label" => "Que pensez-vous de la procédure de réservation ?

:"));
        // line 234
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reservationProzess", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>











        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reservationOK", array()), 'label', array("label" => "Parvenez-vous à faire une réservation?

"));
        // line 258
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reservationOK", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 270
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reservationPourQuoi", array()), 'label', array("label" => "Si non, veuillez préciser pourquoi

"));
        // line 272
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reservationPourQuoi", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "acceCategorieOk", array()), 'label', array("label" => "Parvenez vous à accéder aux catégories ?

"));
        // line 286
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "acceCategorieOk", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 297
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "acceCategoriePourQuoi", array()), 'label', array("label" => "Sinon, veuillez préciser pourquoi

"));
        // line 299
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "acceCategoriePourQuoi", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "presentationCategorie", array()), 'label', array("label" => "Que pensez vous de la présentation des catégories  ?

"));
        // line 312
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "presentationCategorie", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 323
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ameliorationCategorie", array()), 'label', array("label" => "Que proposez vous comme amélioration?

"));
        // line 325
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 328
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ameliorationCategorie", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>


        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 338
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "publiciteRemarque", array()), 'label', array("label" => "Concernant la section \"publicitaire\", quelques sont vos remarques ?

"));
        // line 340
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "publiciteRemarque", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 351
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ameliorationPublicite", array()), 'label', array("label" => "Que proposez vous comme améliorations ?

"));
        // line 353
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 356
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ameliorationPublicite", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 365
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "partenaireUtileOK", array()), 'label', array("label" => "Comprenez vous utilité de la section partenaire?

"));
        // line 367
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 370
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "partenaireUtileOK", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 378
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "partenaiQuePensezVous", array()), 'label', array("label" => "Si oui qu'en pensez vous ?

"));
        // line 380
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 383
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "partenaiQuePensezVous", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 392
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "testNewsLetter", array()), 'label', array("label" => "Avez-vous testé l'abonnement à la newsletter  ?

"));
        // line 394
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "testNewsLetter", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 406
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "testContact", array()), 'label', array("label" => "Avez-vous essayer de contacter l'équipe via la section \"Contact\" ?

"));
        // line 408
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 411
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "testContact", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 420
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reponseParamilOK", array()), 'label', array("label" => "Etes-vous satisfait des réponses reçues par email ?

"));
        // line 422
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 425
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reponseParamilOK", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 434
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reseauOk", array()), 'label', array("label" => "Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?

"));
        // line 436
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 439
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "reseauOk", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              Si oui, veuillez svp aimer/partager ces pages pour encourager, merci.
              <br>
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 450
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ameliorationGlobale", array()), 'label', array("label" => "Avez-vous d’autre amélioration du site à proposer ?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 453
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ameliorationGlobale", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br><br>
              <div class=\"note\">
                Quelle note donneriez-vous pour chacun des éléments suivants du site?

              </div>

            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">


              ";
        // line 469
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "structureDuContenu", array()), 'label', array("label" => "Structure du contenu"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 472
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "structureDuContenu", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 481
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "pertinenceContenu", array()), 'label', array("label" => "Pertinence du contenu
"));
        // line 482
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 485
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "pertinenceContenu", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 494
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "design", array()), 'label', array("label" => "Design de l’interface"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 497
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "design", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 506
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ergonomie", array()), 'label', array("label" => "Ergonomie:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 509
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "ergonomie", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 518
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "simplicte", array()), 'label', array("label" => "Simplicte:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 521
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "simplicte", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 530
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "intuitivite", array()), 'label', array("label" => "Intuitivité:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 533
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "intuitivite", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              ";
        // line 542
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "originalite", array()), 'label', array("label" => "originalité:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 545
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? $this->getContext($context, "formAutre")), "originalite", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              <br>
            </div>
          </div>
        </div>





        <div class=\"\">
          <div class=\"\">

            <div class=\"\">
              <div class=\"\">

                <div class=\"col-md-12\" style=\"color:green;\">
                  Nous vous remercions de votre disponibilité, et soyez rassurez, vos réponses et commentaires seront pris en considération afin d'apporter des amélioration à l'expérience utilisateur sur notre site.

        Merci !
                </div>
              </div>
            </div>

            <center><div class=\"col-md-12\">
              <br>
              <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Envoyer
                <i class=\"material-icons right\">send</i>
              </button>     </center>         <br>
            </div>
          </div>
        </div>









        ";
        // line 586
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? $this->getContext($context, "formAutre")), 'form_end');
        echo "

      </div>

    ";
        
        $__internal_4979c9ac01f7a00b4441d6b454db722f55b89d110d9f88e8ea61e4ea96c19327->leave($__internal_4979c9ac01f7a00b4441d6b454db722f55b89d110d9f88e8ea61e4ea96c19327_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:ArtistePublic:testSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  893 => 586,  849 => 545,  843 => 542,  831 => 533,  825 => 530,  813 => 521,  807 => 518,  795 => 509,  789 => 506,  777 => 497,  771 => 494,  759 => 485,  754 => 482,  751 => 481,  739 => 472,  733 => 469,  714 => 453,  708 => 450,  694 => 439,  689 => 436,  685 => 434,  673 => 425,  668 => 422,  664 => 420,  652 => 411,  647 => 408,  643 => 406,  631 => 397,  626 => 394,  622 => 392,  610 => 383,  605 => 380,  601 => 378,  590 => 370,  585 => 367,  581 => 365,  569 => 356,  564 => 353,  560 => 351,  549 => 343,  544 => 340,  540 => 338,  527 => 328,  522 => 325,  518 => 323,  507 => 315,  502 => 312,  498 => 310,  487 => 302,  482 => 299,  478 => 297,  467 => 289,  462 => 286,  458 => 284,  446 => 275,  441 => 272,  437 => 270,  425 => 261,  420 => 258,  416 => 256,  394 => 237,  389 => 234,  385 => 232,  373 => 223,  368 => 220,  364 => 218,  352 => 209,  347 => 206,  343 => 204,  331 => 195,  326 => 192,  322 => 190,  310 => 181,  305 => 178,  301 => 176,  289 => 167,  283 => 164,  270 => 154,  264 => 151,  249 => 139,  243 => 136,  230 => 126,  224 => 123,  212 => 114,  206 => 111,  192 => 100,  186 => 97,  168 => 82,  162 => 79,  151 => 71,  145 => 68,  134 => 60,  128 => 57,  116 => 48,  110 => 45,  94 => 32,  84 => 24,  80 => 22,  71 => 19,  63 => 13,  59 => 12,  56 => 11,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/testCss.css') }}\">
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
      FORMULAIRE DE TEST WONJA237
    </center>
  </div>

  {{form_start(formAutre)}}

  <div class=\"row contentForme\">
    <form class=\"form-horizontal\">
      <fieldset>
        <div class=\"titreblock\">
          Profil utilisateur
        </div>

        <!-- Form Name -->
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.nom, 'Nom:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.nom, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.profession, 'Profession:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.profession, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.sexe, 'Sexe:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.sexe, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.ternaminal, 'Terminal utilisé:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.ternaminal, {'attr':{'class':'form-control input-md'}})}}

              <br><br>
              <div class=\"titreblock1\">
                Questions dirigées
                <br><br>
              </div>
            </div>

          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.bonneNavigation, 'Réussissez vous à naviguer sur le site sans être aidé ?') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.bonneNavigation, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>



        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.connaisTuInternet, 'Êtes-vous familier avec l’utilisation d’Internet en général?') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.connaisTuInternet, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.sitePrefere, 'Quel est votre site internet préféré ?') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.sitePrefere, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>


        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.pourquoiSitePreferer, 'Pourquoi ? (facultatif )') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.pourquoiSitePreferer, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>




        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.attractionPageAcceuil, 'Quel élément attire le plus  votre attention sur de la page d\\'acceuil ') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.attractionPageAcceuil, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>


        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.barreDeRescherche, 'La barre de recherche est-elle facilement visible?') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.barreDeRescherche, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.ameliorationBarreDeRecherche, 'Sinon, que proposez vous comme amélioration?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.ameliorationBarreDeRecherche, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.inscriptionProzess, 'Que pensez-vous de la procédure d\\'inscription?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.inscriptionProzess, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.inscriptionOK, 'Parvenez-vous à vous inscrire sur le site ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.inscriptionOK, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.inscriptionPourQuoi, 'Si non, veuillez préciser pourquoi

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.inscriptionPourQuoi, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.reservationProzess, 'Que pensez-vous de la procédure de réservation ?

:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.reservationProzess, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>











        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.reservationOK, 'Parvenez-vous à faire une réservation?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.reservationOK, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.reservationPourQuoi, 'Si non, veuillez préciser pourquoi

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.reservationPourQuoi, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.acceCategorieOk, 'Parvenez vous à accéder aux catégories ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.acceCategorieOk, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.acceCategoriePourQuoi, 'Sinon, veuillez préciser pourquoi

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.acceCategoriePourQuoi, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.presentationCategorie, 'Que pensez vous de la présentation des catégories  ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.presentationCategorie, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.ameliorationCategorie, 'Que proposez vous comme amélioration?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.ameliorationCategorie, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>


        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.publiciteRemarque, 'Concernant la section \"publicitaire\", quelques sont vos remarques ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.publiciteRemarque, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.ameliorationPublicite, 'Que proposez vous comme améliorations ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.ameliorationPublicite, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.partenaireUtileOK, 'Comprenez vous utilité de la section partenaire?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.partenaireUtileOK, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>
        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.partenaiQuePensezVous, 'Si oui qu\\'en pensez vous ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.partenaiQuePensezVous, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.testNewsLetter, 'Avez-vous testé l\\'abonnement à la newsletter  ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.testNewsLetter, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.testContact, 'Avez-vous essayer de contacter l\\'équipe via la section \"Contact\" ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.testContact, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.reponseParamilOK, 'Etes-vous satisfait des réponses reçues par email ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.reponseParamilOK, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.reseauOk, 'Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?

') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.reseauOk, {'attr':{'class':'form-control input-md'}})}}
              Si oui, veuillez svp aimer/partager ces pages pour encourager, merci.
              <br>
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.ameliorationGlobale, 'Avez-vous d’autre amélioration du site à proposer ?') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.ameliorationGlobale, {'attr':{'class':'form-control input-md'}})}}
              <br><br>
              <div class=\"note\">
                Quelle note donneriez-vous pour chacun des éléments suivants du site?

              </div>

            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">


              {{ form_label(formAutre.structureDuContenu, 'Structure du contenu') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.structureDuContenu, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.pertinenceContenu, 'Pertinence du contenu
') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.pertinenceContenu, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.design, 'Design de l’interface') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.design, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.ergonomie, 'Ergonomie:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.ergonomie, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.simplicte, 'Simplicte:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.simplicte, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.intuitivite, 'Intuitivité:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.intuitivite, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>

        <div class=\"\">
          <div class=\"\">
            <div class=\"col-md-4 control-label\">
              {{ form_label(formAutre.originalite, 'originalité:') }}
            </div>
            <div class=\"col-md-6\">
              {{form_widget(formAutre.originalite, {'attr':{'class':'form-control input-md'}})}}
              <br>
            </div>
          </div>
        </div>





        <div class=\"\">
          <div class=\"\">

            <div class=\"\">
              <div class=\"\">

                <div class=\"col-md-12\" style=\"color:green;\">
                  Nous vous remercions de votre disponibilité, et soyez rassurez, vos réponses et commentaires seront pris en considération afin d'apporter des amélioration à l'expérience utilisateur sur notre site.

        Merci !
                </div>
              </div>
            </div>

            <center><div class=\"col-md-12\">
              <br>
              <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Envoyer
                <i class=\"material-icons right\">send</i>
              </button>     </center>         <br>
            </div>
          </div>
        </div>









        {{form_end(formAutre)}}

      </div>

    {% endblock %}
", "HZWonja237Bundle:ArtistePublic:testSite.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/testSite.html.twig");
    }
}
