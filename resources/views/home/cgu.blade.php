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
            style='margin-top:15.0pt;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:32px;font-family:Roboto;color:#3C4858;">CGU</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">En visitant http</span><span
                style="font-size:14px;font-family:Roboto;color:black;">://www.prodigiforma.fr, v</span><span
                style="font-size:14px;font-family:Roboto;color:#3C4858;">ous consentez &agrave; nos conditions de
                service.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">SURVOL</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">En utilisant http://www.formaprolearning.fr,
                appel&eacute; le &laquo;Site&raquo;, tous les visiteurs, appel&eacute;s &laquo;Utilisateurs&raquo;,
                &laquo;Vous&raquo; et &laquo;Votre&raquo; sont li&eacute;s par ces &eacute;l&eacute;ments. Les termes
                &laquo;Nous&raquo;, &laquo;Notre&raquo; et &laquo;Nos&raquo; font r&eacute;f&eacute;rence &agrave; PRO
                DIGITAL FORMATION (la &laquo;Soci&eacute;t&eacute;&raquo;), propri&eacute;taire de http</span><span
                style="font-size:14px;font-family:Roboto;color:black;">://www.prodigiforma.fr</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">L&rsquo;acc&egrave;s &agrave; ce site
                constitue une utilisation du site et une acceptation des termes et des avertissements fournis aux
                pr&eacute;sentes.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">En utilisant le site, vous acceptez ces
                conditions d&rsquo;utilisation et avis de non-responsabilit&eacute;, sans modification, et vous
                reconnaissez les lire. Nous nous r&eacute;servons le droit de modifier p&eacute;riodiquement les
                pr&eacute;sentes conditions d&rsquo;utilisation et les mentions l&eacute;gales ou d&rsquo;imposer de
                nouvelles conditions d&rsquo;utilisation du site. Dans ce cas, nous publierons les conditions
                d&rsquo;utilisation et les clauses &eacute;dict&eacute;es r&eacute;vis&eacute;es sur ce site. En
                continuant &agrave; utiliser le site apr&egrave;s la publication de telles modifications, vous acceptez
                les nouvelles conditions avec les modifications.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">UTILISATION DU SITE</span></strong>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Pour acc&eacute;der au site ou
                l&rsquo;utiliser, vous devez &ecirc;tre &acirc;g&eacute; de 18 ans ou plus et disposer du pouvoir et de
                l&rsquo;autorit&eacute; n&eacute;cessaires pour souscrire aux pr&eacute;sentes conditions
                d&rsquo;utilisation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Afin d&rsquo;utiliser le site, il peut vous
                &ecirc;tre demand&eacute; de fournir des informations vous concernant, notamment votre nom, votre
                adresse &eacute;lectronique et d&rsquo;autres informations personnelles. Vous acceptez que les
                informations d&rsquo;enregistrement que vous fournissez &agrave; la soci&eacute;t&eacute; soient
                toujours exactes, correctes et &agrave; jour. Vous ne devez pas emprunter l&rsquo;identit&eacute; de
                quelqu&rsquo;un d&rsquo;autre ou fournir des informations de compte ou une adresse e-mail autre que la
                v&ocirc;tre. Votre compte ne doit pas &ecirc;tre utilis&eacute; &agrave; des fins ill&eacute;gales ou
                non autoris&eacute;es. Vous ne devez pas, dans l&rsquo;utilisation du site, enfreindre les lois en
                vigueur dans votre juridiction.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Vous pouvez utiliser le Site &agrave; des
                fins l&eacute;gitimes uniquement. Vous ne devez pas publier ou transmettre sur le Site tout
                mat&eacute;riel qui viole ou enfreint les droits d&rsquo;autrui, ou qui est mena&ccedil;ant, abusif,
                diffamatoire, diffamatoire, portant atteinte &agrave; la vie priv&eacute;e ou aux droits publicitaires,
                vulgaire, obsc&egrave;ne, profane ou autrement r&eacute;pr&eacute;hensible. , des recettes, ou des
                instructions, qui encouragent une conduite qui constituerait une infraction p&eacute;nale, engagerait la
                responsabilit&eacute; civile ou enfreindrait toute loi.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">PROPRI&Eacute;T&Eacute;
                    INTELLECTUELLE</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Le Site contient des propri&eacute;t&eacute;s
                intellectuelles appartenant &agrave; la Soci&eacute;t&eacute;, y compris, sans limitation, des marques,
                droits d&rsquo;auteur, informations propri&eacute;taires et autres droits de propri&eacute;t&eacute;
                intellectuelle, ainsi que le nom, le logo, tous les dessins, textes et graphiques de PRO DIGITAL
                FORMATION.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Vous pouvez afficher, imprimer, et / ou
                t&eacute;l&eacute;charger une copie du Mat&eacute;riel de ce site Web sur un seul ordinateur, uniquement
                pour votre usage personnel, informatif et non commercial, &agrave; condition que vous gardiez intacts
                tous les droits d&rsquo;auteur et autres avis de propri&eacute;t&eacute;.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Vous ne pouvez pas modifier, publier,
                transmettre, participer au transfert ou &agrave; la vente de, cr&eacute;er des &oelig;uvres
                d&eacute;riv&eacute;es &agrave; partir de, distribuer, afficher, reproduire ou ex&eacute;cuter, ou
                exploiter de quelque mani&egrave;re que ce soit dans n&rsquo;importe quel format que ce soit le contenu
                du site ou la propri&eacute;t&eacute; intellectuelle, en totalit&eacute;. ou en partie sans notre
                consentement &eacute;crit pr&eacute;alable. Nous nous r&eacute;servons le droit de vous retirer
                imm&eacute;diatement du site, sans remboursement, si vous &ecirc;tes surpris en train de violer cette
                politique de propri&eacute;t&eacute; intellectuelle.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">LIMITATIONS DE
                    RESPONSABILIT&Eacute;</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">La Soci&eacute;t&eacute; ne fait aucune
                d&eacute;claration et ne donne aucune garantie sur le fait que les informations fournies, quelle que
                soit leur source (le &laquo;Contenu&raquo;), sont exactes, compl&egrave;tes, fiables, &agrave; jour et
                sans erreur. La Soci&eacute;t&eacute; d&eacute;cline toute responsabilit&eacute; pour toute
                inexactitude, erreur ou caract&egrave;re incomplet du contenu.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">En participant &agrave; et / ou en lisant ce
                site Web et / ou tout autre contenu, y compris, mais sans s&rsquo;y limiter, blog, courrier
                &eacute;lectronique, vid&eacute;os, webinaires et / ou t&eacute;l&eacute;seminaires, vous reconnaissez
                que la soci&eacute;t&eacute; ne peut garantir le r&eacute;sultat des services et / ou des
                recommandations fournis dans le cadre du site. Le contenu et les commentaires sur les r&eacute;sultats
                ne sont que des expressions d&rsquo;opinion. La Soci&eacute;t&eacute; ne peut donner aucune garantie
                autre que celle de fournir des informations, une &eacute;ducation et des services achet&eacute;s tels
                que d&eacute;crits.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">En participant / en lisant le contenu de la
                Soci&eacute;t&eacute;, vous reconnaissez que la Soci&eacute;t&eacute; et ses repr&eacute;sentants ne
                sont pas des psychologues, des avocats ou des conseillers financiers agr&eacute;&eacute;s, et que les
                services ou les informations fournis ici ne se substituent pas aux soins de professionnels de la
                sant&eacute; ou autres professionnels agr&eacute;&eacute;s. Les informations fournies ici ne doivent en
                aucun cas &ecirc;tre interpr&eacute;t&eacute;es ou substitu&eacute;es comme des conseils
                m&eacute;dicaux, des conseils psychologiques ou tout autre type de th&eacute;rapie ou de conseil.</span>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">La Soci&eacute;t&eacute; peut fournir
                &agrave; l&rsquo;utilisateur des informations relatives &agrave; des produits et / ou services tiers
                qui, selon elle, pourraient &ecirc;tre utiles &agrave; l&rsquo;Utilisateur, notamment des plateformes et
                applications commerciales et marketing et autres, mais ces informations ne constituent qu&rsquo;une
                recommandation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">LA SOCI&Eacute;T&Eacute; N&rsquo;EST PAS
                RESPONSABLE DES EFFETS IND&Eacute;SIRABLES OU DES CONS&Eacute;QUENCES QUI POURRAIENT R&Eacute;SULTER,
                DIRECTEMENT OU INDIRECTEMENT, DE TOUTES RECOMMANDATIONS &Eacute;CRITES.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">L&rsquo;utilisateur accepte que ce ne sont
                que des recommandations et la Soci&eacute;t&eacute; ne sera pas tenue responsable des produits et / ou
                services fournis par un tiers &agrave; l&rsquo;utilisateur. Si la Soci&eacute;t&eacute; est
                affili&eacute;e &agrave; un produit et / ou service et re&ccedil;oit une commission, cette information
                sera divulgu&eacute;e au moment de l&rsquo;achat.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Vous reconnaissez que la
                soci&eacute;t&eacute; n&rsquo;a fait et ne fait aucune d&eacute;claration quant aux revenus,
                r&eacute;sultats, volume des ventes, rentabilit&eacute; potentielle ou perte de quelque nature que ce
                soit pouvant r&eacute;sulter de l&rsquo;utilisation du site Web, cours, produits ou services de la
                soci&eacute;t&eacute;. Les t&eacute;moignages, les gains ou les exemples pr&eacute;sent&eacute;s sur le
                site Web, les programmes et / ou les services ne sont que des exemples de ce qui peut &ecirc;tre
                possible. Il ne peut y avoir aucune assurance quant &agrave; un r&eacute;sultat financier particulier
                bas&eacute; sur l&rsquo;utilisation des cours et / ou services de la soci&eacute;t&eacute;.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">LIMITATION DE
                    RESPONSABILIT&Eacute;</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">VOUS ACCEPTEZ QU&rsquo;EN AUCUN CAS, Pro
                Digital Formation NE POURRA &Ecirc;TRE TENU RESPONSABLE DES DOMMAGES DIRECTS, INDIRECTS, ACCESSOIRES,
                CONS&Eacute;CUTIFS, SP&Eacute;CIAUX, PUNITIFS, EXEMPLAIRES OU TOUT AUTRE DOMMAGE R&Eacute;SULTANT DE
                VOTRE UTILISATION DU SITE OU DU SERVICE. DE PLUS, Pro Digital Formation N&rsquo;EST PAS RESPONSABLE DES
                DOMMAGES LI&Eacute;S &Agrave; TOUT MANQUEMENT &Agrave; LA PERFORMANCE, &Agrave; UNE ERREUR, &Agrave; UNE
                OMISSION, &Agrave; UN REFUS DE SERVICE, &Agrave; UNE INTERRUPTION, &Agrave; UNE SUPPRESSION, &Agrave; UN
                D&Eacute;FAUT OU AU RETARD D&rsquo;EXPLOITATION.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">RESSOURCES DE TIERCE
                    PARTIE</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Le site peut contenir des liens vers des
                sites Web et des ressources tierces. Vous reconnaissez et acceptez que nous ne sommes pas responsables
                de la disponibilit&eacute;, de l&rsquo;exactitude, du contenu ou des politiques des sites Web ou des
                ressources de tiers. Les liens vers ces sites Web ou ressources n&rsquo;impliquent aucune approbation ou
                affiliation de la soci&eacute;t&eacute;. Vous reconnaissez &ecirc;tre seul responsable et assumer tous
                les risques d&eacute;coulant de votre utilisation de tels sites Web ou ressources.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">INDEMNIT&Eacute;</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Vous devez nous indemniser et nous
                d&eacute;gager de toute responsabilit&eacute; en ce qui concerne les pertes, dommages,
                r&egrave;glements, responsabilit&eacute;s, co&ucirc;ts, charges, &eacute;valuations et d&eacute;penses,
                ainsi que les r&eacute;clamations de tiers et les causes d&rsquo;action, y compris, sans limitation, les
                honoraires d&rsquo;avocats, r&eacute;sultant de toute violation par vous de l&rsquo;une de ces
                Conditions d&rsquo;utilisation, ou de toute utilisation par vous du Site. Vous nous fournirez
                gratuitement l&rsquo;assistance dont nous aurons besoin dans le cadre d&rsquo;une telle d&eacute;fense,
                notamment en nous fournissant les informations, documents, enregistrements et un acc&egrave;s
                raisonnable, que nous jugerons n&eacute;cessaires. Vous ne devez pas r&eacute;gler une
                r&eacute;clamation de tiers ni renoncer &agrave; une d&eacute;fense sans notre consentement &eacute;crit
                pr&eacute;alable.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">LIB&Eacute;RATION DE
                    REVENDICATIONS</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">En aucun cas, la Soci&eacute;t&eacute; ne
                pourra &ecirc;tre tenue responsable vis-&agrave;-vis de quelque partie que ce soit pour tout type de
                dommages directs, indirects, sp&eacute;ciaux, accessoires ou cons&eacute;cutifs pour toute utilisation
                ou utilisation de notre Site ou de son Contenu. Vous lib&eacute;rez par la pr&eacute;sente la
                Soci&eacute;t&eacute; de toute r&eacute;clamation, y compris celles li&eacute;es &agrave; des
                interruptions personnelles ou professionnelles, &agrave; une mauvaise application ou &agrave; des
                informations erron&eacute;es, ou &agrave; toute autre perte, condition ou probl&egrave;me.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">DROIT APPLICABLE &ndash; LIEU &ndash;
                    M&Eacute;DIATION</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Le pr&eacute;sent contrat est r&eacute;gi et
                interpr&eacute;t&eacute; conform&eacute;ment aux lois Fran&ccedil;aise, ind&eacute;pendamment des
                principes de conflit de lois qui y sont &eacute;nonc&eacute;s.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Si un diff&eacute;rend n&rsquo;est pas
                r&eacute;solu d&rsquo;abord par une n&eacute;gociation de bonne foi entre les parties &agrave; la
                pr&eacute;sente convention, toute controverse ou toute contestation relative &agrave; cette convention
                sera soumise au Tribunal de PARIS.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">DIVISIBILIT&Eacute;</span></strong>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Si une clause, une disposition, un engagement
                ou une condition du pr&eacute;sent Contrat est jug&eacute; invalide, nul ou inapplicable par un arbitre
                ou un tribunal comp&eacute;tent, le reste du Contrat restera pleinement en vigueur et ne pourra en
                aucune mani&egrave;re &ecirc;tre consid&eacute;r&eacute; comme affect&eacute;, alt&eacute;r&eacute; ou
                invalid&eacute;.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">AFFECTATION</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Les pr&eacute;sentes conditions
                d&rsquo;utilisation ont force obligatoire au profit des successeurs et ayants droit des parties. Ces
                conditions d&rsquo;utilisation ne sont ni cessibles, ni d&eacute;l&eacute;guables, ni autrement
                transf&eacute;rables. Tout transfert, cession ou d&eacute;l&eacute;gation de votre part est
                invalide.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <strong><span style="font-size:14px;font-family:Roboto;color:#3C4858;">NOS INFORMATIONS</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Ce site Web et le concept PRO DIGITAL
                FORMATION appartiennent et sont exploit&eacute;s par :</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">PRO DIGITAL FORMATION SARL<br>&nbsp;23 RUE
                DU DEPART 75014<br>&nbsp;Num&eacute;ro Siret 95203558200016</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">Si vous avez des questions ou des
                pr&eacute;occupations concernant cette politique de confidentialit&eacute;, veuillez envoyer un courrier
                &eacute;lectronique &agrave; contact@prodigiforma.fr</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;'>
            &nbsp;</p>
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
