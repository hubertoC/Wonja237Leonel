<?php

/* HZWonja237Bundle:ArtistePublic:testSite.html.twig */
class __TwigTemplate_416764976f4a4dbd13b221b9e8f83054c887de1079a1e8043176f64bf300882b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? null), 'form_start');
        echo "
    ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "has", array(0 => "user-notice"), "method")) {
            // line 11
            echo "      <div class=\"alert alert-success\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "user-notice"), "method"));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? null), 'form_start');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "nom", array()), 'label', array("label" => "Nom:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "nom", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "profession", array()), 'label', array("label" => "Profession:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "profession", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "sexe", array()), 'label', array("label" => "Sexe:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "sexe", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ternaminal", array()), 'label', array("label" => "Terminal utilisé:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ternaminal", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "bonneNavigation", array()), 'label', array("label" => "Réussissez vous à naviguer sur le site sans être aidé ?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "bonneNavigation", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "connaisTuInternet", array()), 'label', array("label" => "Êtes-vous familier avec l’utilisation d’Internet en général?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "connaisTuInternet", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "sitePrefere", array()), 'label', array("label" => "Quel est votre site internet préféré ?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "sitePrefere", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "pourquoiSitePreferer", array()), 'label', array("label" => "Pourquoi ? (facultatif )"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "pourquoiSitePreferer", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "attractionPageAcceuil", array()), 'label', array("label" => "Quel élément attire le plus  votre attention sur de la page d'acceuil "));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "attractionPageAcceuil", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "barreDeRescherche", array()), 'label', array("label" => "La barre de recherche est-elle facilement visible?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "barreDeRescherche", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ameliorationBarreDeRecherche", array()), 'label', array("label" => "Sinon, que proposez vous comme amélioration?

"));
        // line 178
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ameliorationBarreDeRecherche", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "inscriptionProzess", array()), 'label', array("label" => "Que pensez-vous de la procédure d'inscription?

"));
        // line 192
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "inscriptionProzess", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "inscriptionOK", array()), 'label', array("label" => "Parvenez-vous à vous inscrire sur le site ?

"));
        // line 206
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "inscriptionOK", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "inscriptionPourQuoi", array()), 'label', array("label" => "Si non, veuillez préciser pourquoi

"));
        // line 220
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "inscriptionPourQuoi", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reservationProzess", array()), 'label', array("label" => "Que pensez-vous de la procédure de réservation ?

:"));
        // line 234
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reservationProzess", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reservationOK", array()), 'label', array("label" => "Parvenez-vous à faire une réservation?

"));
        // line 258
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reservationOK", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reservationPourQuoi", array()), 'label', array("label" => "Si non, veuillez préciser pourquoi

"));
        // line 272
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reservationPourQuoi", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "acceCategorieOk", array()), 'label', array("label" => "Parvenez vous à accéder aux catégories ?

"));
        // line 286
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "acceCategorieOk", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "acceCategoriePourQuoi", array()), 'label', array("label" => "Sinon, veuillez préciser pourquoi

"));
        // line 299
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "acceCategoriePourQuoi", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "presentationCategorie", array()), 'label', array("label" => "Que pensez vous de la présentation des catégories  ?

"));
        // line 312
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "presentationCategorie", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ameliorationCategorie", array()), 'label', array("label" => "Que proposez vous comme amélioration?

"));
        // line 325
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 328
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ameliorationCategorie", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "publiciteRemarque", array()), 'label', array("label" => "Concernant la section \"publicitaire\", quelques sont vos remarques ?

"));
        // line 340
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "publiciteRemarque", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ameliorationPublicite", array()), 'label', array("label" => "Que proposez vous comme améliorations ?

"));
        // line 353
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 356
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ameliorationPublicite", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "partenaireUtileOK", array()), 'label', array("label" => "Comprenez vous utilité de la section partenaire?

"));
        // line 367
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 370
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "partenaireUtileOK", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "partenaiQuePensezVous", array()), 'label', array("label" => "Si oui qu'en pensez vous ?

"));
        // line 380
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 383
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "partenaiQuePensezVous", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "testNewsLetter", array()), 'label', array("label" => "Avez-vous testé l'abonnement à la newsletter  ?

"));
        // line 394
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "testNewsLetter", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "testContact", array()), 'label', array("label" => "Avez-vous essayer de contacter l'équipe via la section \"Contact\" ?

"));
        // line 408
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 411
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "testContact", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reponseParamilOK", array()), 'label', array("label" => "Etes-vous satisfait des réponses reçues par email ?

"));
        // line 422
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 425
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reponseParamilOK", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reseauOk", array()), 'label', array("label" => "Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?

"));
        // line 436
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 439
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "reseauOk", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ameliorationGlobale", array()), 'label', array("label" => "Avez-vous d’autre amélioration du site à proposer ?"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 453
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ameliorationGlobale", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "structureDuContenu", array()), 'label', array("label" => "Structure du contenu"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 472
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "structureDuContenu", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "pertinenceContenu", array()), 'label', array("label" => "Pertinence du contenu
"));
        // line 482
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 485
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "pertinenceContenu", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "design", array()), 'label', array("label" => "Design de l’interface"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 497
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "design", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ergonomie", array()), 'label', array("label" => "Ergonomie:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 509
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "ergonomie", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "simplicte", array()), 'label', array("label" => "Simplicte:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 521
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "simplicte", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "intuitivite", array()), 'label', array("label" => "Intuitivité:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 533
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "intuitivite", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "originalite", array()), 'label', array("label" => "originalité:"));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 545
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["formAutre"] ?? null), "originalite", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["formAutre"] ?? null), 'form_end');
        echo "

      </div>

    ";
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
        return array (  884 => 586,  840 => 545,  834 => 542,  822 => 533,  816 => 530,  804 => 521,  798 => 518,  786 => 509,  780 => 506,  768 => 497,  762 => 494,  750 => 485,  745 => 482,  742 => 481,  730 => 472,  724 => 469,  705 => 453,  699 => 450,  685 => 439,  680 => 436,  676 => 434,  664 => 425,  659 => 422,  655 => 420,  643 => 411,  638 => 408,  634 => 406,  622 => 397,  617 => 394,  613 => 392,  601 => 383,  596 => 380,  592 => 378,  581 => 370,  576 => 367,  572 => 365,  560 => 356,  555 => 353,  551 => 351,  540 => 343,  535 => 340,  531 => 338,  518 => 328,  513 => 325,  509 => 323,  498 => 315,  493 => 312,  489 => 310,  478 => 302,  473 => 299,  469 => 297,  458 => 289,  453 => 286,  449 => 284,  437 => 275,  432 => 272,  428 => 270,  416 => 261,  411 => 258,  407 => 256,  385 => 237,  380 => 234,  376 => 232,  364 => 223,  359 => 220,  355 => 218,  343 => 209,  338 => 206,  334 => 204,  322 => 195,  317 => 192,  313 => 190,  301 => 181,  296 => 178,  292 => 176,  280 => 167,  274 => 164,  261 => 154,  255 => 151,  240 => 139,  234 => 136,  221 => 126,  215 => 123,  203 => 114,  197 => 111,  183 => 100,  177 => 97,  159 => 82,  153 => 79,  142 => 71,  136 => 68,  125 => 60,  119 => 57,  107 => 48,  101 => 45,  85 => 32,  75 => 24,  71 => 22,  62 => 19,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:ArtistePublic:testSite.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/ArtistePublic/testSite.html.twig");
    }
}
