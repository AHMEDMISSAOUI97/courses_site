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
            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
            <strong><span style="font-size:41px;font-family:Roboto;color:#AA6A26;">&nbsp; &nbsp; &nbsp;REGLEMENT
                    INTERIEUR</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>FORMATION EN
                    E-LEARNING</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 1 :</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Le pr&eacute;sent r&egrave;glement est
                &eacute;tabli conform&eacute;ment aux dispositions des articles L 6352 3 &agrave; L. 6352-5 et R 6352-1
                &agrave; R 6352-15 du Code du travail, le pr&eacute;sent r&egrave;glement&nbsp;Conform&eacute;ment
                &agrave; l&rsquo;article L6352-4 du code du travail, s&rsquo;applique &agrave; tous les participants qui
                suivent une formation sur la plateforme Num&eacute;rique Academy de Pro Digital Formation, et ce pour la
                dur&eacute;e de la formation suivie. Chaque participant doit accepter les termes du pr&eacute;sent
                r&egrave;glement lorsqu&rsquo;il suit une formation dispens&eacute;e et factur&eacute;e par Pro Digital
                Formation. Le r&egrave;glement d&eacute;finit les r&egrave;gles d&rsquo;hygi&egrave;ne et de
                s&eacute;curit&eacute;, les r&egrave;gles g&eacute;n&eacute;rales et permanentes relatives &agrave; la
                discipline ainsi que la nature et l&rsquo;&eacute;chelle des sanctions pouvant &ecirc;tre prises
                vis-&agrave;-vis des participants qui y contreviennent et les garanties proc&eacute;durales applicables
                lorsqu&rsquo;une sanction est envisag&eacute;e. Toute personne doit respecter les termes du
                pr&eacute;sent r&egrave;glement durant toute la dur&eacute;e de l&rsquo;action de formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>HYGI&Egrave;NE ET
                    S&Eacute;CURIT&Eacute;</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 2 :</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>La pr&eacute;vention des risques
                d&rsquo;accidents et de maladies est imp&eacute;rative et exige de chacun le respect total de toutes les
                prescriptions applicables en mati&egrave;re d&rsquo;hygi&egrave;ne et de s&eacute;curit&eacute;.
                &Agrave; cet effet, les consignes g&eacute;n&eacute;rales et particuli&egrave;res de
                s&eacute;curit&eacute; en vigueur dans l&rsquo;organisme, lorsqu&rsquo;elles existent, doivent
                &ecirc;tre strictement respect&eacute;es sous peine de sanctions disciplinaires. Dans le cadre de la
                formation &agrave; distance, il est donc imp&eacute;ratif de respecter les r&egrave;gles
                d&rsquo;hygi&egrave;ne et de s&eacute;curit&eacute; du lieu o&ugrave; est r&eacute;alis&eacute;e
                l&rsquo;action de formation, notamment l&rsquo;entreprise du stagiaire.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>L&rsquo;organisme de formation ne pourra
                &ecirc;tre tenu pour responsable d&rsquo;incidents ou d&rsquo;accidents survenus &agrave; distance
                pendant les heures de formation et en particulier li&eacute;es &agrave; l&rsquo;utilisation des outils
                informatiques et internet.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>LOCAUX</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 3 :</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Dans le cadre de la formation &agrave;
                distance, il n&rsquo;y a pas de mise &agrave; disposition de locaux. Les stagiaires d&eacute;pendent
                alors du r&egrave;glement int&eacute;rieur de leur employeur s&rsquo;ils sont salari&eacute;(es).</span>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>DISCIPLINE
                    G&Eacute;N&Eacute;RALE</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Toute personne suivant une formation
                propos&eacute;e par Pro Digital Formation doit respecter le pr&eacute;sent r&egrave;glement pour toutes
                les questions relatives &agrave; l&rsquo;application de la r&eacute;glementation, ainsi que les
                r&egrave;gles g&eacute;n&eacute;rales et permanentes relatives &agrave; la discipline. Le non-respect de
                ces consignes expose la personne &agrave; des sanctions disciplinaires.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4 : Acc&egrave;s aux
                    formations</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>L&rsquo;acc&egrave;s aux formations se
                fait via la plateforme&nbsp;Pro Digital Formation avec les identifiants remis au participant en
                d&eacute;but de formation.&nbsp;Ne pas transmettre son mot de passe d&rsquo;acc&egrave;s &agrave; la
                plateforme</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les reports et annulation sont
                tol&eacute;r&eacute;s sans frais, jusqu&rsquo;&agrave; 7 jours avant le d&eacute;marrage de la
                formation. En cas de report, le participant doit au pr&eacute;alable se rapprocher du payeur de la
                formation et de son interlocuteur chez Pro Digital Formation pour en demander l&rsquo;autorisation. Le
                report est limit&eacute; &agrave; un par participant et par formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4.1 :
                    Horaires</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les supports vid&eacute;o sont disponibles
                pendant le temps de formation 7 jours sur 7, 24/24h. Il est recommand&eacute; d&rsquo;y consacrer entre
                5h &agrave; 10h par semaine, mais vous pouvez avancer &agrave; votre rythme en fonction de vos
                contraintes.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les &eacute;changes par messagerie, bilans
                personnalis&eacute;s et autres sont d&eacute;livr&eacute;s de fa&ccedil;on asynchrone et vous les
                recevez par mail dans les 48h ouvr&eacute;es suivant la demande.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4.2 : D&eacute;roulement
                    des cours</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les supports vid&eacute;o sont disponibles
                7 jours sur 7, 24/24h sur toute la dur&eacute;e de la formation. Il est recommand&eacute; d&rsquo;y
                consacrer au minimum 5 &agrave; 14h par semaine, mais vous pouvez avancer &agrave; votre rythme en
                fonction de vos contraintes. &nbsp;Les &eacute;changes par messagerie, bilans personnalis&eacute;s et
                autres sont d&eacute;livr&eacute;s de fa&ccedil;on asynchrone et vous les recevez par mail dans les 48h
                ouvr&eacute;es suivant la demande.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les Salles de Cours (live) en direct sont
                propos&eacute;es &agrave; diff&eacute;rents horaires renseign&eacute;s sur la plateforme et sur la
                convocation. Il est recommand&eacute; d&rsquo;y assister une fois par semaine.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les rendez-vous avec le formateur/coach
                sont fix&eacute;s en avance par mail, en prenant en compte les disponibilit&eacute;s de chacun. En cas
                d&rsquo;impr&eacute;vu, merci d&rsquo;informer le formateur au moins 48h &agrave; l&rsquo;avance. Si le
                rendez-vous est annul&eacute; par le stagiaire dans les 48h, il est pleinement
                comptabilis&eacute;.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4.3 :
                    Propri&eacute;t&eacute; des formations</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Chaque enseignement
                pr&eacute;sent&eacute;, que ce soit sous forme de vid&eacute;os, de support de cours, ou d&rsquo;atelier
                pratique, est la propri&eacute;t&eacute; de Pro Digital Formation. Le participant s&rsquo;engage sur
                l&rsquo;honneur &agrave; ne les utiliser que pour sa formation personnelle dans un but exclusivement
                professionnalisant et &agrave; ne pas les exploiter d&rsquo;une fa&ccedil;on qui pourrait nuire ou
                causer pr&eacute;judice ou concurrence &agrave; l&rsquo;organisme de formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4.4 : Assiduit&eacute; du
                    participant en formation</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Le participant est tenu &agrave; une
                obligation g&eacute;n&eacute;rale d&rsquo;assiduit&eacute;. Le participant doit notamment dans la mesure
                du possible se rendre disponible pour les Lives propos&eacute;s dans le cadre des formations. En vue du
                succ&egrave;s de leur formation, les participants se doivent de fournir un travail r&eacute;gulier tout
                au long de leur formation, dont la r&eacute;alisation des cas pratiques qu&rsquo;ils devront soumettre
                au formateur.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4.5 : Formalisme
                    attach&eacute; au suivi de la formation</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Le participant est tenu
                d&rsquo;&eacute;valuer &agrave; chaud la formation, en renseignant un questionnaire de satisfaction
                &agrave; l&rsquo;issue de la formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>A l&rsquo;issue de l&rsquo;action de
                formation, il se voit remettre une attestation de fin de formation, &eacute;galement remise &agrave; son
                employeur/prescripteur, et selon le cas, &agrave; l&rsquo;organisme qui finance l&rsquo;action. Le
                participant s&rsquo;engage &agrave; retourner &agrave; l&rsquo;organisme de formation les documents
                sign&eacute;s par ses soins le plus rapidement possible apr&egrave;s la mise &agrave; disposition de
                ceux-ci via la convocation et/ou sur la plateforme de Pro Digital Formation, et ce, qu&rsquo;il ait
                suivi la formation dans son int&eacute;gralit&eacute; ou non, et quels que soient les r&eacute;sultats
                de l&rsquo;&eacute;valuation des acquis pour ladite formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Toute attestation et/ou certificat de
                r&eacute;ussite remis au participant &agrave; l&rsquo;issue de la formation est strictement personnel et
                individuel.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4.6 :
                    Comportement</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Il est demand&eacute; &agrave; tout
                participant d&rsquo;avoir un comportement garantissant le respect des r&egrave;gles
                &eacute;l&eacute;mentaires de savoir-vivre, de savoir-&ecirc;tre en collectivit&eacute; et le bon
                d&eacute;roulement des formations.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Tout propos inappropri&eacute;
                (harc&egrave;lement, racisme &hellip;) et tenu par le participant sur quelconque support de la formation
                est passible d&rsquo;exclusion d&eacute;finitive de la formation. Lors des s&eacute;ances en direct
                (collectives ou individuelles), il est imp&eacute;ratif de respecter le bon d&eacute;roul&eacute; pour
                tous les participants. Tout comportement grossier, injurieux, raciste, sexiste (ou autre) sera
                sanctionn&eacute; par une expulsion imm&eacute;diate et d&eacute;finitive.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Par ailleurs, il est demand&eacute; aux
                participants de respecter un temps de parole &eacute;quitable pour tous.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Actualiser sa situation personnelle en cas
                de changement (identit&eacute;, d&eacute;m&eacute;nagements etc.)</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4.7 : Droit &agrave;
                    l&rsquo;image</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Lors les s&eacute;ances collectives en
                direct sont susceptibles d&rsquo;&ecirc;tre enregistr&eacute;es dans un but (uniquement) de proposer la
                rediffusion aux stagiaires qui le souhaitent.&nbsp;</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Dans le cas o&ugrave; un participant ne
                souhaite pas que son image soit exploit&eacute;e, il est pri&eacute; d&rsquo;assister &agrave; la
                s&eacute;ance avec une webcam d&eacute;sactiv&eacute;e.&nbsp;</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Dans le cas contraire, le participant est
                r&eacute;put&eacute; accepter de facto l&rsquo;autorisation de droit &agrave; l&rsquo;image.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 4.8 : Election des
                    repr&eacute;sentants de classe</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Cette repr&eacute;sentation est
                obligatoire pour les cycles de formation d&rsquo;une dur&eacute;e sup&eacute;rieure &agrave; 200 heures.
                Les d&eacute;l&eacute;gu&eacute;s sont &eacute;lus au scrutin uninominal &agrave; deux tours, pendant
                les heures de formation, au plus t&ocirc;t 20 heures et au plus tard 40 heures apr&egrave;s le
                d&eacute;but du stage.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>SANCTIONS</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 5 :
                    Sanction</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Tout agissement consid&eacute;r&eacute;
                comme fautif par l&rsquo;organisme de formation fera l&rsquo;objet d&rsquo;un avertissement &eacute;crit
                par l&rsquo;organisme de formation qui indiquera les mesures susceptibles d&rsquo;&ecirc;tre prises et
                pourra, en fonction de sa nature et de sa gravit&eacute;, faire l&rsquo;objet des sanctions suivantes
                :</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>D&eacute;sinscription imm&eacute;diate de
                la formation</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>GARANTIES
                    DISCIPLINAIRES</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Tout agissement consid&eacute;r&eacute;
                comme fautif par le directeur de l&rsquo;organisme de formation ou son repr&eacute;sentant pourra, en
                fonction de sa nature et de sa gravit&eacute;, faire l&rsquo;objet de l&rsquo;une ou l&rsquo;autre des
                sanctions ci-apr&egrave;s par ordre d&rsquo;importance : avertissement &eacute;crit par le Directeur de
                l&rsquo;organisme de formation ou par son repr&eacute;sentant ; bl&acirc;me, exclusion d&eacute;finitive
                de la formation. Aucune sanction ne peut &ecirc;tre inflig&eacute;e au stagiaire sans que celui-ci ne
                soit inform&eacute; dans le m&ecirc;me temps et par &eacute;crit des griefs retenus contre
                lui.&nbsp;<br>&nbsp;Aucune sanction ne peut &ecirc;tre inflig&eacute;e au stagiaire sans que celui-ci ne
                soit inform&eacute; par &eacute;crit des griefs retenus contre lui, ces &eacute;crits pourront
                &ecirc;tre r&eacute;alis&eacute;s par mail ou par courrier.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Lorsque l&rsquo;organisme de formation
                envisage de prendre une sanction, il informe le stagiaire par lettre recommand&eacute;e avec
                accus&eacute; de r&eacute;ception en lui indiquant l&rsquo;objet du grief.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Le stagiaire devra en retour donner
                toutes les explications n&eacute;cessaires. L&rsquo;analyse de ses explications sera faite par les
                autorit&eacute;s comp&eacute;tentes de l&rsquo;organisme de formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Apr&egrave;s analyse, une r&eacute;ponse
                &eacute;crite sera faite au stagiaire indiquant l&rsquo;application ou non de la sanction.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>L&rsquo;organisme de formation informe
                l&rsquo;employeur et &eacute;ventuellement l&rsquo;organisme financeur/prescripteur prenant &agrave; sa
                charge les frais de formation, de la sanction prise.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>PUBLICIT&Eacute; DU
                    R&Egrave;GLEMENT</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>Article 6 :</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Un exemplaire du pr&eacute;sent
                r&egrave;glement est consultable sur la plateforme Pro Digital Formation et est &eacute;galement
                disponible avec votre convocation de formation.&nbsp;</span></p>
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
