<?php

/* HZWonja237Bundle:Emails:testReception.html.twig */
class __TwigTemplate_c3551f0b23b704128942404e5bc066879d4a5858aa92b8990ebf5d29c7e73626 extends Twig_Template
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
        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/emailFrom.css"), "html", null, true);
        echo "\">
<table cellpadding=\"0\" cellspacing=\"0\">
\t<div style=\"colo:green; font-size: 1.5em;\">
\t<center>\tNuméro de reférence:  ";
        // line 4
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, ($context["profession"] ?? null), "html", null, true);
        echo "</td>
\t</tr>


\t<tr>
\t\t<td>Sexe</td>
\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, ($context["sexe"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Terminal utilisé</td>
\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, ($context["ternaminal"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Réussissez vous à naviguer sur le site sans être aidé ?</td>
\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, ($context["bonneNavigation"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Êtes-vous familier avec l’utilisation d’Internet en général?
</td>
\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, ($context["connaisTuInternet"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Quel est votre site internet préféré ?
</td>
\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, ($context["sitePrefere"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Pourquoi ? (facultatif )
</td>
\t\t<td>";
        // line 51
        echo twig_escape_filter($this->env, ($context["pourquoiSitePreferer"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Quel élément attire le plus votre attention sur de la page d'acceuil
</td>
\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, ($context["attractionPageAcceuil"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>La barre de recherche est-elle facilement visible?
</td>
\t\t<td>";
        // line 62
        echo twig_escape_filter($this->env, ($context["barreDeRescherche"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Sinon, que proposez vous comme amélioration?
</td>
\t\t<td>";
        // line 67
        echo twig_escape_filter($this->env, ($context["ameliorationBarreDeRecherche"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Que pensez-vous de la procédure d'inscription?
</td>
\t\t<td>";
        // line 73
        echo twig_escape_filter($this->env, ($context["inscriptionProzess"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Parvenez-vous à vous inscrire sur le site ?
</td>
\t\t<td>";
        // line 78
        echo twig_escape_filter($this->env, ($context["inscriptionOK"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Si non, veuillez préciser pourquoi
</td>
\t\t<td>";
        // line 84
        echo twig_escape_filter($this->env, ($context["inscriptionPourQuoi"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Que pensez-vous de la procédure de réservation ? :
</td>
\t\t<td>";
        // line 89
        echo twig_escape_filter($this->env, ($context["reservationProzess"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Parvenez-vous à faire une réservation?
</td>
\t\t<td>";
        // line 95
        echo twig_escape_filter($this->env, ($context["reservationOK"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Si non, veuillez préciser pourquoi
</td>
\t\t<td>";
        // line 100
        echo twig_escape_filter($this->env, ($context["reservationPourQuoi"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Parvenez vous à accéder aux catégories ?
</td>
\t\t<td>";
        // line 106
        echo twig_escape_filter($this->env, ($context["acceCategorieOk"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Sinon, veuillez préciser pourquoi
</td>
\t\t<td>";
        // line 111
        echo twig_escape_filter($this->env, ($context["acceCategoriePourQuoi"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Que pensez vous de la présentation des catégories ?
</td>
\t\t<td>";
        // line 117
        echo twig_escape_filter($this->env, ($context["presentationCategorie"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Que proposez vous comme amélioration?
</td>
\t\t<td>";
        // line 122
        echo twig_escape_filter($this->env, ($context["ameliorationCategorie"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Concernant la section \"publicitaire\", quelques sont vos remarques ?
</td>
\t\t<td>";
        // line 128
        echo twig_escape_filter($this->env, ($context["publiciteRemarque"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Que proposez vous comme améliorations ?
</td>
\t\t<td>";
        // line 133
        echo twig_escape_filter($this->env, ($context["ameliorationPublicite"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Comprenez vous utilité de la section partenaire?
</td>
\t\t<td>";
        // line 139
        echo twig_escape_filter($this->env, ($context["partenaireUtileOK"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Si oui qu'en pensez vous ?
</td>
\t\t<td>";
        // line 144
        echo twig_escape_filter($this->env, ($context["partenaiQuePensezVous"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Avez-vous testé l'abonnement à la newsletter ?
</td>
\t\t<td>";
        // line 150
        echo twig_escape_filter($this->env, ($context["testNewsLetter"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Avez-vous essayer de contacter l'équipe via la section \"Contact\" ?
</td>
\t\t<td>";
        // line 155
        echo twig_escape_filter($this->env, ($context["testContact"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Etes-vous satisfait des réponses reçues par email ?
</td>
\t\t<td>";
        // line 161
        echo twig_escape_filter($this->env, ($context["reponseParamilOK"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>";
        // line 166
        echo twig_escape_filter($this->env, ($context["reseauOk"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>";
        // line 171
        echo twig_escape_filter($this->env, ($context["profession"] ?? null), "html", null, true);
        echo "</td>
\t</tr>



\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>";
        // line 179
        echo twig_escape_filter($this->env, ($context["reseauOk"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Profession</td>
\t\t<td>";
        // line 184
        echo twig_escape_filter($this->env, ($context["profession"] ?? null), "html", null, true);
        echo "</td>
\t</tr>


\t<tr>
\t\t<td>Parvenez vous à accéder aux pages (facebook , Twitter, Youtube) de wonja237 ?
</td>
\t\t<td>";
        // line 191
        echo twig_escape_filter($this->env, ($context["reseauOk"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Avez-vous d’autre amélioration du site à proposer ?
</td>
\t\t<td>";
        // line 197
        echo twig_escape_filter($this->env, ($context["ameliorationGlobale"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr>
\t\t<td>Structure du contenu

</td>
\t\t<td>";
        // line 204
        echo twig_escape_filter($this->env, ($context["structureDuContenu"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Pertinence du contenu

</td>
\t\t<td>";
        // line 211
        echo twig_escape_filter($this->env, ($context["pertinenceContenu"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr>
\t\t<td>Design de l’interface

\t\t<td>";
        // line 217
        echo twig_escape_filter($this->env, ($context["design"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Ergonomie:
</td>
\t\t<td>";
        // line 223
        echo twig_escape_filter($this->env, ($context["ergonomie"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr>
\t\t<td>Simplicte:

</td>
\t\t<td>";
        // line 230
        echo twig_escape_filter($this->env, ($context["simplicte"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr style=\"background-color:#fff;\">
\t\t<td>Intuitivité:
</td>
\t\t<td>";
        // line 236
        echo twig_escape_filter($this->env, ($context["intuitivite"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t<tr>
\t\t<td>originalité:

</td>
\t\t<td>";
        // line 243
        echo twig_escape_filter($this->env, ($context["simplicte"] ?? null), "html", null, true);
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
        return array (  388 => 243,  378 => 236,  369 => 230,  359 => 223,  350 => 217,  341 => 211,  331 => 204,  321 => 197,  312 => 191,  302 => 184,  294 => 179,  283 => 171,  275 => 166,  267 => 161,  258 => 155,  250 => 150,  241 => 144,  233 => 139,  224 => 133,  216 => 128,  207 => 122,  199 => 117,  190 => 111,  182 => 106,  173 => 100,  165 => 95,  156 => 89,  148 => 84,  139 => 78,  131 => 73,  122 => 67,  114 => 62,  105 => 56,  97 => 51,  88 => 45,  80 => 40,  71 => 34,  64 => 30,  56 => 25,  47 => 19,  39 => 14,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HZWonja237Bundle:Emails:testReception.html.twig", "/homepages/2/d634677098/htdocs/wonja/src/HZ/Wonja237Bundle/Resources/views/Emails/testReception.html.twig");
    }
}
