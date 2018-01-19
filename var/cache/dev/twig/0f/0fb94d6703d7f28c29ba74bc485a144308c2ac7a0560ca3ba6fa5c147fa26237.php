<?php

/* HZWonja237Bundle:Emails:testReception.html.twig */
class __TwigTemplate_f0bd55cef020f554e1499e4a40c3ad6929b8d265aa17660a061f250a4c49a7f2 extends Twig_Template
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
        $__internal_5e3fe016fa2251453d90451554d897555f1aeeefe1047c64a44f4788c3cef3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3fe016fa2251453d90451554d897555f1aeeefe1047c64a44f4788c3cef3b7->enter($__internal_5e3fe016fa2251453d90451554d897555f1aeeefe1047c64a44f4788c3cef3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZWonja237Bundle:Emails:testReception.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/emailFrom.css"), "html", null, true);
        echo "\">
<table cellpadding=\"0\" cellspacing=\"0\">
\t<div style=\"colo:green; font-size: 1.5em;\">
\t<center>\tNuméro de reférence:  ";
        // line 4
        echo twig_escape_filter($this->env, ($context["reference"] ?? $this->getContext($context, "reference")), "html", null, true);
        echo " </center>
\t</div>
\t<tr>
\t\t<th>Qestion</th>
\t\t<th>Réponse</th>
\t</tr>


\t<tr>
\t\t<td>Nom</td>
\t\t<td>";
        // line 14
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, ($context["profession"] ?? $this->getContext($context, "profession")), "html", null, true);
        echo "</td>
\t</tr>


\t<tr>
\t\t<td>Sexe</td>
\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, ($context["sexe"] ?? $this->getContext($context, "sexe")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Terminal utilisé</td>
\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, ($context["ternaminal"] ?? $this->getContext($context, "ternaminal")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Réussissez vous à naviguer sur le site sans être aidé ?</td>
\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, ($context["bonneNavigation"] ?? $this->getContext($context, "bonneNavigation")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Êtes-vous familier avec l’utilisation d’Internet en général?
</td>
\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, ($context["connaisTuInternet"] ?? $this->getContext($context, "connaisTuInternet")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Quel est votre site internet préféré ?
</td>
\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, ($context["sitePrefere"] ?? $this->getContext($context, "sitePrefere")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Pourquoi ? (facultatif )
</td>
\t\t<td>";
        // line 51
        echo twig_escape_filter($this->env, ($context["pourquoiSitePreferer"] ?? $this->getContext($context, "pourquoiSitePreferer")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Quel élément attire le plus votre attention sur de la page d'acceuil
</td>
\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, ($context["attractionPageAcceuil"] ?? $this->getContext($context, "attractionPageAcceuil")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>La barre de recherche est-elle facilement visible?
</td>
\t\t<td>";
        // line 62
        echo twig_escape_filter($this->env, ($context["barreDeRescherche"] ?? $this->getContext($context, "barreDeRescherche")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Sinon, que proposez vous comme amélioration?
</td>
\t\t<td>";
        // line 67
        echo twig_escape_filter($this->env, ($context["ameliorationBarreDeRecherche"] ?? $this->getContext($context, "ameliorationBarreDeRecherche")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Que pensez-vous de la procédure d'inscription?
</td>
\t\t<td>";
        // line 73
        echo twig_escape_filter($this->env, ($context["inscriptionProzess"] ?? $this->getContext($context, "inscriptionProzess")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Parvenez-vous à vous inscrire sur le site ?
</td>
\t\t<td>";
        // line 78
        echo twig_escape_filter($this->env, ($context["inscriptionOK"] ?? $this->getContext($context, "inscriptionOK")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Si non, veuillez préciser pourquoi
</td>
\t\t<td>";
        // line 84
        echo twig_escape_filter($this->env, ($context["inscriptionPourQuoi"] ?? $this->getContext($context, "inscriptionPourQuoi")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Que pensez-vous de la procédure de réservation ? :
</td>
\t\t<td>";
        // line 89
        echo twig_escape_filter($this->env, ($context["reservationProzess"] ?? $this->getContext($context, "reservationProzess")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Parvenez-vous à faire une réservation?
</td>
\t\t<td>";
        // line 95
        echo twig_escape_filter($this->env, ($context["reservationOK"] ?? $this->getContext($context, "reservationOK")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Si non, veuillez préciser pourquoi
</td>
\t\t<td>";
        // line 100
        echo twig_escape_filter($this->env, ($context["reservationPourQuoi"] ?? $this->getContext($context, "reservationPourQuoi")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Parvenez vous à accéder aux catégories ?
</td>
\t\t<td>";
        // line 106
        echo twig_escape_filter($this->env, ($context["acceCategorieOk"] ?? $this->getContext($context, "acceCategorieOk")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Sinon, veuillez préciser pourquoi
</td>
\t\t<td>";
        // line 111
        echo twig_escape_filter($this->env, ($context["acceCategoriePourQuoi"] ?? $this->getContext($context, "acceCategoriePourQuoi")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Que pensez vous de la présentation des catégories ?
</td>
\t\t<td>";
        // line 117
        echo twig_escape_filter($this->env, ($context["presentationCategorie"] ?? $this->getContext($context, "presentationCategorie")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Que proposez vous comme amélioration?
</td>
\t\t<td>";
        // line 122
        echo twig_escape_filter($this->env, ($context["ameliorationCategorie"] ?? $this->getContext($context, "ameliorationCategorie")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Concernant la section \"publicitaire\", quelques sont vos remarques ?
</td>
\t\t<td>";
        // line 128
        echo twig_escape_filter($this->env, ($context["publiciteRemarque"] ?? $this->getContext($context, "publiciteRemarque")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Que proposez vous comme améliorations ?
</td>
\t\t<td>";
        // line 133
        echo twig_escape_filter($this->env, ($context["ameliorationPublicite"] ?? $this->getContext($context, "ameliorationPublicite")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Comprenez vous utilité de la section partenaire?
</td>
\t\t<td>";
        // line 139
        echo twig_escape_filter($this->env, ($context["partenaireUtileOK"] ?? $this->getContext($context, "partenaireUtileOK")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Si oui qu'en pensez vous ?
</td>
\t\t<td>";
        // line 144
        echo twig_escape_filter($this->env, ($context["partenaiQuePensezVous"] ?? $this->getContext($context, "partenaiQuePensezVous")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Avez-vous testé l'abonnement à la newsletter ?
</td>
\t\t<td>";
        // line 150
        echo twig_escape_filter($this->env, ($context["testNewsLetter"] ?? $this->getContext($context, "testNewsLetter")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Avez-vous essayer de contacter l'équipe via la section \"Contact\" ?
</td>
\t\t<td>";
        // line 155
        echo twig_escape_filter($this->env, ($context["testContact"] ?? $this->getContext($context, "testContact")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Etes-vous satisfait des réponses reçues par email ?
</td>
\t\t<td>";
        // line 161
        echo twig_escape_filter($this->env, ($context["reponseParamilOK"] ?? $this->getContext($context, "reponseParamilOK")), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>";
        // line 166
        echo twig_escape_filter($this->env, ($context["reseauOk"] ?? $this->getContext($context, "reseauOk")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>";
        // line 171
        echo twig_escape_filter($this->env, ($context["profession"] ?? $this->getContext($context, "profession")), "html", null, true);
        echo "</td>
\t</tr>



\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>";
        // line 179
        echo twig_escape_filter($this->env, ($context["reseauOk"] ?? $this->getContext($context, "reseauOk")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>";
        // line 184
        echo twig_escape_filter($this->env, ($context["profession"] ?? $this->getContext($context, "profession")), "html", null, true);
        echo "</td>
\t</tr>


\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>";
        // line 191
        echo twig_escape_filter($this->env, ($context["reseauOk"] ?? $this->getContext($context, "reseauOk")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Avez-vous d’autre amélioration du site à proposer ?
</td>
\t\t<td>";
        // line 197
        echo twig_escape_filter($this->env, ($context["ameliorationGlobale"] ?? $this->getContext($context, "ameliorationGlobale")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr>
\t\t<td>Structure du contenu

</td>
\t\t<td>";
        // line 204
        echo twig_escape_filter($this->env, ($context["structureDuContenu"] ?? $this->getContext($context, "structureDuContenu")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Pertinence du contenu

</td>
\t\t<td>";
        // line 211
        echo twig_escape_filter($this->env, ($context["pertinenceContenu"] ?? $this->getContext($context, "pertinenceContenu")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr>
\t\t<td>Design de l’interface

\t\t<td>";
        // line 217
        echo twig_escape_filter($this->env, ($context["design"] ?? $this->getContext($context, "design")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Ergonomie:
</td>
\t\t<td>";
        // line 223
        echo twig_escape_filter($this->env, ($context["ergonomie"] ?? $this->getContext($context, "ergonomie")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr>
\t\t<td>Simplicte:

</td>
\t\t<td>";
        // line 230
        echo twig_escape_filter($this->env, ($context["simplicte"] ?? $this->getContext($context, "simplicte")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Intuitivité:
</td>
\t\t<td>";
        // line 236
        echo twig_escape_filter($this->env, ($context["intuitivite"] ?? $this->getContext($context, "intuitivite")), "html", null, true);
        echo "</td>
\t</tr>

\t<tr>
\t\t<td>originalité:

</td>
\t\t<td>";
        // line 243
        echo twig_escape_filter($this->env, ($context["simplicte"] ?? $this->getContext($context, "simplicte")), "html", null, true);
        echo "</td>
\t</tr>
</table>


<style media=\"screen\">
table {
width: 100%;
border: 1px solid #cef;
text-align: left;
background-color: #E0E0E0;}
th {
font-weight: bold;
background-color: #acf;
border-bottom: 1px solid #cef; }
td,th {
padding: 4px 5px; }


.odd {
background-color: #def; }
.odd td {
border-bottom: 1px solid #cef; }
</style>
<script type=\"text/javascript\">
\$(document).ready(function(){
\$(\"tr:odd\").addClass(\"odd\");
});
</script>
";
        
        $__internal_5e3fe016fa2251453d90451554d897555f1aeeefe1047c64a44f4788c3cef3b7->leave($__internal_5e3fe016fa2251453d90451554d897555f1aeeefe1047c64a44f4788c3cef3b7_prof);

    }

    public function getTemplateName()
    {
        return "HZWonja237Bundle:Emails:testReception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 243,  381 => 236,  372 => 230,  362 => 223,  353 => 217,  344 => 211,  334 => 204,  324 => 197,  315 => 191,  305 => 184,  297 => 179,  286 => 171,  278 => 166,  270 => 161,  261 => 155,  253 => 150,  244 => 144,  236 => 139,  227 => 133,  219 => 128,  210 => 122,  202 => 117,  193 => 111,  185 => 106,  176 => 100,  168 => 95,  159 => 89,  151 => 84,  142 => 78,  134 => 73,  125 => 67,  117 => 62,  108 => 56,  100 => 51,  91 => 45,  83 => 40,  74 => 34,  67 => 30,  59 => 25,  50 => 19,  42 => 14,  29 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/emailFrom.css') }}\">
<table cellpadding=\"0\" cellspacing=\"0\">
\t<div style=\"colo:green; font-size: 1.5em;\">
\t<center>\tNuméro de reférence:  {{reference}} </center>
\t</div>
\t<tr>
\t\t<th>Qestion</th>
\t\t<th>Réponse</th>
\t</tr>


\t<tr>
\t\t<td>Nom</td>
\t\t<td>{{nom}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>{{profession}}</td>
\t</tr>


\t<tr>
\t\t<td>Sexe</td>
\t\t<td>{{sexe}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Terminal utilisé</td>
\t\t<td>{{ternaminal}}</td>
\t</tr>
\t<tr>
\t\t<td>Réussissez vous à naviguer sur le site sans être aidé ?</td>
\t\t<td>{{bonneNavigation}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Êtes-vous familier avec l’utilisation d’Internet en général?
</td>
\t\t<td>{{connaisTuInternet}}</td>
\t</tr>
\t<tr>
\t\t<td>Quel est votre site internet préféré ?
</td>
\t\t<td>{{sitePrefere}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Pourquoi ? (facultatif )
</td>
\t\t<td>{{pourquoiSitePreferer}}</td>
\t</tr>
\t<tr>
\t\t<td>Quel élément attire le plus votre attention sur de la page d'acceuil
</td>
\t\t<td>{{attractionPageAcceuil}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>La barre de recherche est-elle facilement visible?
</td>
\t\t<td>{{barreDeRescherche}}</td>
\t</tr>
\t<tr>
\t\t<td>Sinon, que proposez vous comme amélioration?
</td>
\t\t<td>{{ameliorationBarreDeRecherche}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Que pensez-vous de la procédure d'inscription?
</td>
\t\t<td>{{inscriptionProzess}}</td>
\t</tr>
\t<tr>
\t\t<td>Parvenez-vous à vous inscrire sur le site ?
</td>
\t\t<td>{{inscriptionOK}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Si non, veuillez préciser pourquoi
</td>
\t\t<td>{{inscriptionPourQuoi}}</td>
\t</tr>
\t<tr>
\t\t<td>Que pensez-vous de la procédure de réservation ? :
</td>
\t\t<td>{{reservationProzess}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Parvenez-vous à faire une réservation?
</td>
\t\t<td>{{reservationOK}}</td>
\t</tr>
\t<tr>
\t\t<td>Si non, veuillez préciser pourquoi
</td>
\t\t<td>{{reservationPourQuoi}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Parvenez vous à accéder aux catégories ?
</td>
\t\t<td>{{acceCategorieOk}}</td>
\t</tr>
\t<tr>
\t\t<td>Sinon, veuillez préciser pourquoi
</td>
\t\t<td>{{acceCategoriePourQuoi}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Que pensez vous de la présentation des catégories ?
</td>
\t\t<td>{{presentationCategorie}}</td>
\t</tr>
\t<tr>
\t\t<td>Que proposez vous comme amélioration?
</td>
\t\t<td>{{ameliorationCategorie}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Concernant la section \"publicitaire\", quelques sont vos remarques ?
</td>
\t\t<td>{{publiciteRemarque}}</td>
\t</tr>
\t<tr>
\t\t<td>Que proposez vous comme améliorations ?
</td>
\t\t<td>{{ameliorationPublicite}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Comprenez vous utilité de la section partenaire?
</td>
\t\t<td>{{partenaireUtileOK}}</td>
\t</tr>
\t<tr>
\t\t<td>Si oui qu'en pensez vous ?
</td>
\t\t<td>{{partenaiQuePensezVous}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Avez-vous testé l'abonnement à la newsletter ?
</td>
\t\t<td>{{testNewsLetter}}</td>
\t</tr>
\t<tr>
\t\t<td>Avez-vous essayer de contacter l'équipe via la section \"Contact\" ?
</td>
\t\t<td>{{testContact}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Etes-vous satisfait des réponses reçues par email ?
</td>
\t\t<td>{{reponseParamilOK}}</td>
\t</tr>
\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>{{reseauOk}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>{{profession}}</td>
\t</tr>



\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>{{reseauOk}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>{{profession}}</td>
\t</tr>


\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>{{reseauOk}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Avez-vous d’autre amélioration du site à proposer ?
</td>
\t\t<td>{{ameliorationGlobale}}</td>
\t</tr>

\t<tr>
\t\t<td>Structure du contenu

</td>
\t\t<td>{{structureDuContenu}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Pertinence du contenu

</td>
\t\t<td>{{pertinenceContenu}}</td>
\t</tr>

\t<tr>
\t\t<td>Design de l’interface

\t\t<td>{{design}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Ergonomie:
</td>
\t\t<td>{{ergonomie}}</td>
\t</tr>

\t<tr>
\t\t<td>Simplicte:

</td>
\t\t<td>{{simplicte}}</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Intuitivité:
</td>
\t\t<td>{{intuitivite}}</td>
\t</tr>

\t<tr>
\t\t<td>originalité:

</td>
\t\t<td>{{simplicte}}</td>
\t</tr>
</table>


<style media=\"screen\">
table {
width: 100%;
border: 1px solid #cef;
text-align: left;
background-color: #E0E0E0;}
th {
font-weight: bold;
background-color: #acf;
border-bottom: 1px solid #cef; }
td,th {
padding: 4px 5px; }


.odd {
background-color: #def; }
.odd td {
border-bottom: 1px solid #cef; }
</style>
<script type=\"text/javascript\">
\$(document).ready(function(){
\$(\"tr:odd\").addClass(\"odd\");
});
</script>
", "HZWonja237Bundle:Emails:testReception.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/Emails/testReception.html.twig");
    }
}
