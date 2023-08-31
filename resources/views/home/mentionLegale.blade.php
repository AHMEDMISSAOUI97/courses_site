<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @php
        $categories = App\Models\Category::all();
    @endphp
    <!-- Topbar Start -->
    @include('home.header')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('home.topNavbar')
    <!-- Navbar End -->

    <!-- Header Start -->

    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">&nbsp;</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;background:#FFFCFC;'>
            <strong><span
                    style="font-size:14px;font-family:Roboto;color:#3C4858;">mentions-l&eacute;gales</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">&nbsp;</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">1. CE SITE A &Eacute;T&Eacute;
                    CON&Ccedil;U ET R&Eacute;ALIS&Eacute; PAR<br>&nbsp;</span></strong><span
                style="font-size:14px;font-family:Roboto;color:#3C4858;">Pro Digital Formation</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">23 RUE DU DEPART 75014<br>&nbsp;T&eacute;l. :
                T&eacute;l. : 0757810791</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Email. :&nbsp;</span><u><span
                    style="font-size:14px;font-family:Roboto;color:#992020;">contact@prodigiforma.fr</span></u></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <em><u><span style="font-size:18px;font-family:Roboto;color:#992020;"><a
                            href="https://www.formaprolearning.fr/"><span
                                style="color:#992020;">ACCUEIL</span></a></span></u></em></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Num&eacute;ro de d&eacute;claration
                d&rsquo;organisme de formation :&nbsp;11756752575</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">SARL SIRET 95203558200016 &ndash; Code APE
                8559A&nbsp;</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Repr&eacute;sent&eacute; par Monsieur Khalil
                BOUDOKHANE &nbsp;</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">2. Nom du site</span></strong><span
                style="font-size:14px;font-family:Roboto;color:#3C4858;"><br>&nbsp;Pro Digital Formation</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">3<span style="background:yellow;">.
                        H&eacute;bergeur OVH</span></span></strong><span
                style="font-size:14px;font-family:Roboto;color:#3C4858;background:yellow;"><br>&nbsp;Si&egrave;ge social
                :<br>&nbsp;2 rue Kellermann<br>&nbsp;59100 Roubaix<br>&nbsp;France</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">4. Utilisation des donn&eacute;es
                personnelles collect&eacute;es</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">4.1 Commentaires<br>&nbsp;Quand vous laissez
                un commentaire sur notre site web, les donn&eacute;es inscrites dans le formulaire de commentaire, mais
                aussi votre adresse IP et l&rsquo;agent utilisateur de votre navigateur sont collect&eacute;s pour nous
                aider &agrave; la d&eacute;tection des commentaires ind&eacute;sirables.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Une cha&icirc;ne anonymis&eacute;e
                cr&eacute;&eacute;e &agrave; partir de votre adresse de messagerie (&eacute;galement appel&eacute;e
                hash) peut &ecirc;tre envoy&eacute;e au service Gravatar pour v&eacute;rifier si vous utilisez ce
                dernier.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">4.2 M&eacute;dias<br>&nbsp;Si vous &ecirc;tes
                un utilisateur ou une utilisatrice enregistr&eacute;e et que vous t&eacute;l&eacute;versez des images
                sur le site web, nous vous conseillons d&rsquo;&eacute;viter de t&eacute;l&eacute;verser des images
                contenant des donn&eacute;es EXIF de coordonn&eacute;es GPS. Les visiteurs de votre site web peuvent
                t&eacute;l&eacute;charger et extraire des donn&eacute;es de localisation depuis ces images.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">4.3 Formulaires de contact<br>&nbsp;Pro
                Digital Formation vous informe que les donn&eacute;es fournies dans ce formulaire sont
                n&eacute;cessaires &agrave; la g&eacute;n&eacute;ration de vos mentions. Elles ne seront pas
                stock&eacute;es dans notre syst&egrave;me d&rsquo;information.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">4.4 Cookies<br>&nbsp;Si vous d&eacute;posez
                un commentaire sur notre site, il vous sera propos&eacute; d&rsquo;enregistrer votre nom, adresse de
                messagerie et site web dans des cookies. C&rsquo;est uniquement pour votre confort afin de ne pas avoir
                &agrave; saisir ces informations si vous d&eacute;posez un autre commentaire plus tard. Ces cookies
                expirent au bout d&rsquo;un an.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Si vous avez un compte et que vous vous
                connectez sur ce site, un cookie temporaire sera cr&eacute;&eacute; afin de d&eacute;terminer si votre
                navigateur accepte les cookies. Il ne contient pas de donn&eacute;es personnelles et sera
                supprim&eacute; automatiquement &agrave; la fermeture de votre navigateur.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Lorsque vous vous connecterez, nous mettrons
                en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos
                pr&eacute;f&eacute;rences d&rsquo;&eacute;cran. La dur&eacute;e de vie d&rsquo;un cookie de connexion
                est de deux jours, celle d&rsquo;un cookie d&rsquo;option d&rsquo;&eacute;cran est d&rsquo;un an. Si
                vous cochez &laquo; Se souvenir de moi &raquo;, votre cookie de connexion sera conserv&eacute; pendant
                deux semaines. Si vous vous d&eacute;connectez de votre compte, le cookie de connexion sera
                effac&eacute;.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">En modifiant ou en publiant une publication,
                un cookie suppl&eacute;mentaire sera enregistr&eacute; dans votre navigateur. Ce cookie ne comprend
                aucune donn&eacute;e personnelle. Il indique simplement l&rsquo;ID de la publication que vous venez de
                modifier. Il expire au bout d&rsquo;un jour.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">4.5 Contenu embarqu&eacute; depuis
                d&rsquo;autres sites<br>&nbsp;Les articles de ce site peuvent inclure des contenus
                int&eacute;gr&eacute;s (par exemple des vid&eacute;os, images, articles&hellip;). Le contenu
                int&eacute;gr&eacute; depuis d&rsquo;autres sites se comporte de la m&ecirc;me mani&egrave;re que si le
                visiteur se rendait sur cet autre site.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Ces sites web pourraient collecter des
                donn&eacute;es sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos
                interactions avec ces contenus embarqu&eacute;s si vous disposez d&rsquo;un compte connect&eacute; sur
                leur site web.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">4.6 Statistiques et mesures
                d&rsquo;audience<br>&nbsp;Vos Informations Personnelles sont conserv&eacute;es par Pro Digital Formation
                uniquement pour le temps correspondant &agrave; la finalit&eacute; de la collecte qui ne saurait en tout
                &eacute;tat de cause exc&eacute;der 36 mois pour les donn&eacute;es r&eacute;colt&eacute;es pour Google
                Analytics.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">5. Utilisation et transmission de vos
                donn&eacute;es personnelles</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">5.1 Dur&eacute;es de stockage de vos
                donn&eacute;es<br>&nbsp;Si vous laissez un commentaire, le commentaire et ses m&eacute;tadonn&eacute;es
                sont conserv&eacute;s ind&eacute;finiment. Cela permet de reconna&icirc;tre et approuver automatiquement
                les commentaires suivants au lieu de les laisser dans la file de mod&eacute;ration.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Pour les utilisateurs et utilisatrices qui
                s&rsquo;enregistrent sur notre site (si cela est possible), nous stockons &eacute;galement les
                donn&eacute;es personnelles indiqu&eacute;es dans leur profil. Tous les utilisateurs et utilisatrices
                peuvent voir, modifier ou supprimer leurs informations personnelles &agrave; tout moment (&agrave;
                l&rsquo;exception de leur nom d&rsquo;utilisatrice). Les gestionnaires du site peuvent aussi voir et
                modifier ces informations.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">5.2 Les droits que vous avez sur vos
                donn&eacute;es<br>&nbsp;Si vous avez un compte ou si vous avez laiss&eacute; des commentaires sur le
                site, vous pouvez demander &agrave; recevoir un fichier contenant toutes les donn&eacute;es personnelles
                que nous poss&eacute;dons &agrave; votre sujet, incluant celles que vous nous avez fournies. Vous pouvez
                &eacute;galement demander la suppression des donn&eacute;es personnelles vous concernant. Cela ne prend
                pas en compte les donn&eacute;es stock&eacute;es &agrave; des fins administratives, l&eacute;gales ou
                pour des raisons de s&eacute;curit&eacute;.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">5.3 Transmission de vos donn&eacute;es
                personnelles<br>&nbsp;Les commentaires des visiteurs peuvent &ecirc;tre v&eacute;rifi&eacute;s &agrave;
                l&rsquo;aide d&rsquo;un service automatis&eacute; de d&eacute;tection des commentaires
                ind&eacute;sirables.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">6. FINALIT&Eacute;S DU TRAITEMENT</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">6.1 Donn&eacute;es issues du formulaire de
                contact<br>&nbsp;Pro Digital Formation est susceptible de traiter vos Informations Personnelles :
                &ndash; Aux fins de vous r&eacute;pondre au formulaire de contact utiliser sur le site internet</span>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">6.2 Donn&eacute;es
                statistiques<br>&nbsp;&ndash; Aux fins de statistiques et mesures d&rsquo;audience nous utilisons Google
                Analytics pour en savoir plus cliquez ici.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">6.3 DESTINATAIRES<br>&nbsp;Seul Pro Digital
                Formation est destinataire de vos Informations Personnelles. Celles-ci, que ce soit sous forme
                individuelle ou agr&eacute;g&eacute;e, ne sont jamais transmises &agrave; un tiers, nonobstant les
                sous-traitants auxquels Pro Digital Formation fait appel.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Ni Pro Digital Formation, ni l&rsquo;un
                quelconque de ses sous-traitants, ne proc&egrave;dent &agrave; la commercialisation des donn&eacute;es
                personnelles des visiteurs et Utilisateurs de son Site. Vous &ecirc;tes toutefois inform&eacute;s
                qu&rsquo;elles pourront &ecirc;tre divulgu&eacute;es en application d&rsquo;une loi, d&rsquo;un
                r&egrave;glement ou en vertu d&rsquo;une d&eacute;cision d&rsquo;une autorit&eacute;
                r&eacute;glementaire ou judiciaire comp&eacute;tente.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">6.4 DUR&Eacute;E DE CONSERVATION<br>&nbsp;Vos
                Informations Personnelles sont conserv&eacute;es par Pro Digital Formation uniquement pour le temps
                correspondant &agrave; la finalit&eacute; de la collecte qui ne saurait en tout &eacute;tat de cause
                exc&eacute;der 36 mois pour les donn&eacute;es r&eacute;colt&eacute;es pour Google Analytics.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">6.5 DROITS INFORMATIQUE ET
                LIBERT&Eacute;S<br>&nbsp;Vous disposez &agrave; tout moment d&rsquo;un droit d&rsquo;acc&egrave;s, de
                modification, de rectification et de suppression de vos donn&eacute;es personnelles, que vous pouvez
                exercer en nous &eacute;crivant &agrave; l&rsquo;adresse email (</span><u><span
                    style="font-size:14px;font-family:Roboto;color:#992020;">contact@prodigiforma.fr</span></u><span
                style="font-size:14px;font-family:Roboto;color:#3C4858;">), &agrave; l&rsquo;adresse postale ou en
                utilisant le formulaire de contact pr&eacute;sent sur le Site &agrave; l&rsquo;adresse url suivante
                :</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <em><u><span style="font-size:18px;font-family:Roboto;color:#992020;"><a
                            href="https://www.formaprolearning.fr/"><span
                                style="color:#992020;">ACCUEIL</span></a></span></u></em></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">6.6 D&Eacute;LAIS DE
                R&Eacute;PONSE<br>&nbsp;Pro Digital Formation s&rsquo;engage &agrave; r&eacute;pondre &agrave; votre
                demande d&rsquo;acc&egrave;s, de rectification ou d&rsquo;opposition ou toute autre demande
                compl&eacute;mentaire d&rsquo;informations dans un d&eacute;lai raisonnable qui ne saurait
                d&eacute;passer 1 mois &agrave; compter de la r&eacute;ception de votre demande.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">6.7 Informations de contact<br>&nbsp;Pro
                Digital Formation<br>&nbsp;23 RUE DU DEPART 75014<br>&nbsp;T&eacute;l. : 0757810791</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Email. :&nbsp;</span><u><span
                    style="font-size:14px;font-family:Roboto;color:#992020;">contact@prodigiforma.fr</span></u></p>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    @include('home.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('home/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('home/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('home/js/main.js') }}"></script>
</body>

</html>
