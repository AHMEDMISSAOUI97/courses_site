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
            <strong><span style="font-size:41px;font-family:Roboto;color:#992020;">CONDITIONS GENERALES DE VENTE (CGV)
                    &nbsp;</span></strong></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;CGV</span></p>
        <ol start="1" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>PR&Eacute;SENTATION</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Pro Digital Formation est un organisme de
                formation professionnelle dont le si&egrave;ge social est &eacute;tabli au 23 RUE DU DEPART
                75014.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Pro Digital Formation d&eacute;veloppe,
                propose et dispense des formations en distanciel.</span></p>
        <ol start="2" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>OBJET</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les pr&eacute;sentes conditions
                g&eacute;n&eacute;rales de vente (ci-apr&egrave;s les &ldquo;CGV&rdquo;) s&rsquo;appliquent &agrave;
                toutes les Offres de services de Pro Digital Formation relatives &agrave; des commandes pass&eacute;es
                aupr&egrave;s de Pro Digital Formation par tout client professionnel et particulier (ci-apr&egrave;s
                &ldquo;le Client&rdquo;). Le fait de passer commande implique l&rsquo;adh&eacute;sion enti&egrave;re et
                sans r&eacute;serve du client aux pr&eacute;sentes CGV. Toute condition contraire et notamment toute
                condition g&eacute;n&eacute;rale ou particuli&egrave;re oppos&eacute;e par le Client ne peut, sauf
                acceptation formelle et &eacute;crite de Pro Digital Formation, pr&eacute;valoir sur les
                pr&eacute;sentes CGV et ce, quel que soit le moment o&ugrave; elle aura pu &ecirc;tre port&eacute;e
                &agrave; sa connaissance. Le fait que Pro Digital Formation ne se pr&eacute;vale pas &agrave; un moment
                donn&eacute; de l&rsquo;une quelconque des pr&eacute;sentes CGV ne peut &ecirc;tre
                interpr&eacute;t&eacute; comme valant renonciation &agrave; s&rsquo;en pr&eacute;valoir
                ult&eacute;rieurement. Le Client se porte fort du respect des pr&eacute;sentes CGV par l&rsquo;ensemble
                de ses salari&eacute;s, pr&eacute;pos&eacute;s et agents. Le Client reconna&icirc;t &eacute;galement
                que, pr&eacute;alablement &agrave; toute commande, il a b&eacute;n&eacute;fici&eacute; des informations
                et conseils suffisants de la part de Pro Digital Formation, lui permettant de s&rsquo;assurer de
                l&rsquo;ad&eacute;quation de l&rsquo;Offre de services &agrave; ses besoins.</span></p>
        <ol start="3" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>FORMATIONS ET DISPOSITIONS
                    COMMUNES</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>3.1 &nbsp;Formations</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les dispositions du pr&eacute;sent article
                concernent toutes les formations, longues ou courtes, disponibles au catalogue ou sur mesure
                r&eacute;alis&eacute;es par Pro Digital Formation sur la plateforme LMS &nbsp;mis &agrave; disposition
                par Pro Digital Formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>3.2 &nbsp;Documents contractuels</span>
        </p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Pour chaque action de formation une
                convention &eacute;tablie selon les articles L 6353-1 et L 6353-2 du Code du travail est adress&eacute;e
                en deux exemplaires dont un est &agrave; retourner par le Client rev&ecirc;tu du cachet de
                l&rsquo;entreprise ou d&rsquo;une signature pour les particuliers. L&rsquo;attestation de participation
                est adress&eacute;e apr&egrave;s la formation. Un certificat de r&eacute;alisation est
                d&eacute;livr&eacute; au terme de la formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>3.3 &nbsp;Modalit&eacute;s de passation
                des Commandes</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>La proposition et les prix indiqu&eacute;s
                par Pro Digital Formation sont valables un an jusqu&rsquo;au 31 d&eacute;cembre de l&rsquo;ann&eacute;e
                en cours, &agrave; compter de l&rsquo;envoi du bon de commande. L&rsquo;offre de services est
                r&eacute;put&eacute;e accept&eacute;e d&egrave;s la r&eacute;ception par Pro Digital Formation
                d&rsquo;un bon de commande sign&eacute; par tout repr&eacute;sentant d&ucirc;ment habilit&eacute; du
                Client, dans le d&eacute;lai d&rsquo;un (1) mois &agrave; compter de l&rsquo;&eacute;mission dudit bon
                de commande. La signature du bon de commande et/ou l&rsquo;accord sur proposition implique la
                connaissance et l&rsquo;acceptation irr&eacute;vocable et sans r&eacute;serve des pr&eacute;sentes
                conditions, lesquelles pourront &ecirc;tre modifi&eacute;es par Pro Digital Formation &agrave; tout
                moment, sans pr&eacute;avis, et sans que cette modification ouvre droit &agrave; indemnit&eacute; au
                profit du Client.</span></p>
        <ol start="4" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>ANNULATION ET REMPLACEMENT D&rsquo;UN
                    PARTICIPANT</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>4.1 Remplacement d&rsquo;un
                participant</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Pro Digital Formation offre la
                possibilit&eacute; de remplacer un participant emp&ecirc;ch&eacute; par un autre participant ayant le
                m&ecirc;me profil et les m&ecirc;mes besoins en formation. Le remplacement d&rsquo;un participant est
                possible sans indemnit&eacute; jusqu&rsquo;au jour de la formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>4.2 &nbsp;Insuffisance du nombre de
                participants &agrave; une session</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Dans le cas d&rsquo;une formation
                (notamment distanciel, pr&eacute;sentiel) o&ugrave; le nombre de participants serait insuffisant pour
                assurer le bon d&eacute;roulement de la session de formation, Pro Digital Formation se r&eacute;serve la
                possibilit&eacute; d&rsquo;ajourner la formation au plus tard une semaine avant la date pr&eacute;vue et
                ce, sans indemnit&eacute;s.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>4.3 &nbsp;Annulation des formations en
                pr&eacute;sentiel &agrave; l&rsquo;initiative du Client</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les dates de formation (distanciel et en
                pr&eacute;sentiel) sont fix&eacute;es d&rsquo;un commun accord entre Pro Digital Formation et le Client
                et sont bloqu&eacute;es de fa&ccedil;on ferme. En cas d&rsquo;annulation tardive par le Client
                d&rsquo;une session de formation planifi&eacute;e en commun, des indemnit&eacute;s compensatrices sont
                dues dans les conditions suivantes :</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>&ndash; report ou annulation
                communiqu&eacute; au moins 30 jours ouvr&eacute;s avant la session : aucune indemnit&eacute;.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>&ndash; report ou annulation
                communiqu&eacute; moins de 30 jours et au moins 15 jours ouvr&eacute;s avant la session : 30% des
                honoraires relatifs &agrave; la session seront factur&eacute;s au Client.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>&ndash; report ou annulation
                communiqu&eacute; moins de 15 jours ouvr&eacute;s avant la session : 70% des honoraires relatifs
                &agrave; la session seront factur&eacute;s au Client.</span></p>
        <ol start="5" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>DISPOSITIONS FINANCIERES</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>5.1 Le r&egrave;glement du prix de la
                formation</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Est &agrave; effectuer, &agrave;
                l&rsquo;inscription, comptant, sans escompte &agrave; l&rsquo;ordre de Pro Digital Formation. Tous les
                prix sont indiqu&eacute;s en hors taxes et sont &agrave; majorer du taux de TVA en vigueur. Les repas ne
                sont pas compris dans le prix de la formation sauf disposition contraire dans la proposition de Pro
                Digital Formation</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>5.2 R&egrave;glement par un ORGANISME
                FINANCEUR</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>En cas de r&egrave;glement par un
                organisme financeur dont d&eacute;pend le Client, il appartient au Client d&rsquo;effectuer la demande
                de prise en charge avant le d&eacute;but de la formation. L&rsquo;accord de financement doit &ecirc;tre
                communiqu&eacute; au moment de l&rsquo;inscription et sur l&rsquo;exemplaire de la convention que le
                Client retourne sign&eacute; &agrave; Pro Digital Formation. En cas de prise en charge partielle, la
                diff&eacute;rence sera directement factur&eacute;e par Pro Digital Formation au Client. Si
                l&rsquo;accord de prise en charge ne parvient pas &agrave; Pro Digital Formation au premier jour de la
                formation, Pro Digital Formation se r&eacute;serve la possibilit&eacute; de facturer la totalit&eacute;
                des frais de formation au Client.</span></p>
        <ol start="6" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>RESPONSABILIT&Eacute; &ndash;
                    IND&Eacute;MNIT&Eacute;S</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>6.1 Limitations de responsabilit&eacute;
                de Pro Digital Formation</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>La responsabilit&eacute; de Pro Digital
                Formation ne peut en aucun cas &ecirc;tre engag&eacute;e pour toute d&eacute;faillance technique ou
                mauvais usage du mat&eacute;riel de formation par les Utilisateurs ou toute cause
                &eacute;trang&egrave;re &agrave; Pro Digital Formation. Quel que soit le type de prestations, la
                responsabilit&eacute; de Pro Digital Formation est express&eacute;ment limit&eacute;e &agrave;
                l&rsquo;indemnisation des dommages directs prouv&eacute;s par le Client. La responsabilit&eacute; de Pro
                Digital Formation est plafonn&eacute;e au montant du prix pay&eacute; par le Client au titre de la
                prestation concern&eacute;e.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>En aucun cas, la responsabilit&eacute; de
                Pro Digital Formation ne saurait &ecirc;tre engag&eacute;e au titre des dommages indirects tels que
                perte de donn&eacute;es, de fichier(s), perte d&rsquo;exploitation, pr&eacute;judice commercial, manque
                &agrave; gagner, atteinte &agrave; l&rsquo;image et &agrave; la r&eacute;putation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>6.2 Force majeure</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Pro Digital Formation ne pourra
                &ecirc;tre tenue responsable &agrave; l&rsquo;&eacute;gard du Client en cas d&rsquo;inex&eacute;cution
                de ses obligations r&eacute;sultant d&rsquo;un &eacute;v&egrave;nement de force majeure. Sont
                consid&eacute;r&eacute;s comme cas de force majeure ou cas fortuit, outre ceux habituellement reconnus
                par la jurisprudence des Cours et Tribunaux fran&ccedil;ais et sans que cette liste soit restrictive :
                la maladie ou l&rsquo;accident d&rsquo;un consultant ou d&rsquo;un animateur de formation, les
                gr&egrave;ves ou conflits sociaux internes ou externes &agrave; Pro Digital Formation, les
                d&eacute;sastres naturels, les incendies, la non obtention de visas, des autorisations de travail ou
                d&rsquo;autres permis, les lois ou r&egrave;glements mis en place ult&eacute;rieurement,
                l&rsquo;interruption des t&eacute;l&eacute;communications, l&rsquo;interruption de
                l&rsquo;approvisionnement en &eacute;nergie, interruption des communications ou des transports de tout
                type, ou toute autre circonstance &eacute;chappant au contr&ocirc;le raisonnable de Pro Digital
                Formation.</span></p>
        <ol start="7" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>CONFIDENTIALIT&Eacute; ET PROPRIETE
                    INTELLECTUELLE</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les parties s&rsquo;engagent &agrave;
                garder confidentiels les informations et documents concernant l&rsquo;autre partie de quelle que nature
                qu&rsquo;ils soient, &eacute;conomiques, techniques ou commerciaux, auxquels elles pourraient avoir
                acc&egrave;s au cours de l&rsquo;ex&eacute;cution du contrat ou &agrave; l&rsquo;occasion des
                &eacute;changes intervenus ant&eacute;rieurement &agrave; la conclusion du contrat, notamment
                l&rsquo;ensemble des informations figurant dans la proposition commerciale et financi&egrave;re
                transmise par Pro Digital Formation au Client. Pro Digital Formation s&rsquo;engage &agrave; ne pas
                communiquer &agrave; des tiers autres que ses soci&eacute;t&eacute;s affili&eacute;es, partenaires ou
                fournisseurs. les informations transmises par le Client, y compris les informations concernant les
                Utilisateurs.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Pro Digital Formation est seule titulaire
                des droits de propri&eacute;t&eacute; intellectuelle de l&rsquo;ensemble des formations qu&rsquo;elle
                propose &agrave; ses Clients. &Agrave; cet effet, l&rsquo;ensemble des contenus et supports
                p&eacute;dagogiques quelle qu&rsquo;en soit la forme (papier, &eacute;lectronique, num&eacute;rique,
                orale, &hellip;) utilis&eacute;s par Pro Digital Formation pour assurer les formations, demeurent la
                propri&eacute;t&eacute; exclusive de Pro Digital Formation. &Agrave; ce titre ils ne peuvent faire
                l&rsquo;objet d&rsquo;aucune utilisation, transformation, reproduction, exploitation non
                express&eacute;ment autoris&eacute;e au sein ou &agrave; l&rsquo;ext&eacute;rieur du Client sans accord
                expr&egrave;s de Pro Digital Formation.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>En particulier, le Client
                s&rsquo;interdit d&rsquo;utiliser le contenu des formations pour former d&rsquo;autres personnes que son
                propre personnel et engage sa responsabilit&eacute; sur le fondement des articles L. 122-4 et L. 335-2
                et suivants du code de la propri&eacute;t&eacute; intellectuelle en cas de cession ou de communication
                des contenus non autoris&eacute;e. Toute reproduction, repr&eacute;sentation, modification, publication,
                transmission, d&eacute;naturation, totale ou partielle des contenus de formations de Pro Digital
                Formation, sont strictement interdites, et ce quels que soient le proc&eacute;d&eacute; et le support
                utilis&eacute;s. En contrepartie du paiement du prix correspondant, En tout &eacute;tat de cause, Pro
                Digital Formation demeure propri&eacute;taire de ses outils, m&eacute;thodes et savoir-faire
                d&eacute;velopp&eacute;s ant&eacute;rieurement ou &agrave; l&rsquo;occasion de l&rsquo;ex&eacute;cution
                des prestations chez le Client.</span></p>
        <ol start="8" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>COMMUNICATION ET PUBLICITE</span>
            </li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Le Client accepte d&rsquo;&ecirc;tre
                cit&eacute; par Pro Digital Formation comme client de ses offres de services, aux frais de Pro Digital
                Formation. Sous r&eacute;serve du respect des dispositions de l&rsquo;article 9, Pro Digital Formation
                peut mentionner le nom du Client, son logo ainsi qu&rsquo;une description objective de la nature des
                prestations, objet du contrat, dans ses listes de r&eacute;f&eacute;rences et propositions &agrave;
                l&rsquo;attention de ses prospects et de sa client&egrave;le notamment sur son site internet, entretiens
                avec des tiers, communications &agrave; son personnel, documents internes de gestion
                pr&eacute;visionnelle, rapport annuel aux actionnaires, ainsi qu&rsquo;en cas de dispositions
                l&eacute;gales, r&eacute;glementaires ou comptables l&rsquo;exigeant.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>8.1 Protection des donn&eacute;es
                &agrave; caract&egrave;re personnel</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>En tant que responsable du traitement du
                fichier de son personnel, le Client s&rsquo;engage &agrave; informer chaque Utilisateur que :</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>&ndash; des donn&eacute;es &agrave;
                caract&egrave;re personnel le concernant sont collect&eacute;es et trait&eacute;es par Pro Digital
                Formation aux fins de r&eacute;alisation et de suivi de la formation ;</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>&ndash; la connexion, le parcours de
                formation et le suivi des acquis des Utilisateurs sont des donn&eacute;es accessibles &agrave; ses
                services ;</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>&ndash; conform&eacute;ment &agrave; la
                loi n&deg; 78-17 du 6 janvier 1978, l&rsquo;Utilisateur dispose d&rsquo;un droit d&rsquo;acc&egrave;s,
                de modification, de rectification des donn&eacute;es &agrave; caract&egrave;re personnel le concernant
                et qu&rsquo;&agrave; cette fin, une demande en ligne pr&eacute;cisant l&rsquo;identit&eacute; et
                l&rsquo;adresse &eacute;lectronique du requ&eacute;rant peut &ecirc;tre adress&eacute;e Pro Digital
                Formation. Le Client est responsable de la conservation et de la confidentialit&eacute; de toutes les
                donn&eacute;es qui concernent l&rsquo;Utilisateur et auxquelles il aura eu acc&egrave;s. Pro Digital
                Formation conservera, pour sa part, les donn&eacute;es li&eacute;es &agrave; l&rsquo;&eacute;valuation
                des acquis par l&rsquo;Utilisateur, pour une p&eacute;riode n&rsquo;exc&eacute;dant pas la dur&eacute;e
                n&eacute;cessaire &agrave; l&rsquo;appr&eacute;ciation de la formation.</span></p>
        <ol start="9" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>INFORMATIQUE ET LIBERTES</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Conform&eacute;ment &agrave;
                l&rsquo;article 6 de la loi n&deg; 78-17 du 6 janvier 1978 relative &agrave; l&rsquo;informatique, aux
                fichiers et aux libert&eacute;s, telle que modifi&eacute;e par la loi n&deg; 2004-801 du 6 ao&ucirc;t
                2004, la soci&eacute;t&eacute; met en &oelig;uvre un traitement de donn&eacute;es &agrave;
                caract&egrave;re personnel ayant pour finalit&eacute; la gestion des inscriptions. Les informations qui
                vous sont demand&eacute;es sont n&eacute;cessaires au traitement de votre inscription et sont
                destin&eacute;es aux services de Pro Digital Formation. Vous pouvez acc&eacute;der &agrave; ces
                informations et en demander la rectification aupr&egrave;s de la soci&eacute;t&eacute;, via une demande
                en ligne (</span><u><span
                    style="font-size:14px;font-family:Roboto;color:#992020;">contact@prodigiforma.fr</span></u><span
                style='font-size:16px;font-family:"Times New Roman",serif;'>) ou par courrier &agrave; : Pro Digital
                Formation &ndash;&nbsp;</span><span
                style='font-size:13px;font-family:"Arial",sans-serif;color:#222222;background:white;'>23 RUE DU DEPART
                75014</span><span style='font-size:16px;font-family:"Times New Roman",serif;'>&ndash; France en
                indiquant vos nom, pr&eacute;nom et adresse.</span></p>
        <ol start="10" type="1" style="margin-bottom:0cm;">
            <li
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
                <span style='font-size:16px;font-family:"Times New Roman",serif;'>DROIT APPLICABLE&nbsp;: CONTESTATION
                    ET LITIGES</span></li>
        </ol>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>10.1&nbsp;Droit applicable &ndash;
                Attribution de comp&eacute;tence</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Les pr&eacute;sentes conditions
                g&eacute;n&eacute;rales sont r&eacute;gies par le droit fran&ccedil;ais.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>10.2 Contestation et litiges</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;'>
            <span style='font-size:16px;font-family:"Times New Roman",serif;'>Toute contestation qui n&rsquo;aurait pas
                &eacute;t&eacute; r&eacute;gl&eacute;e &agrave; l&rsquo;amiable sera soumise &agrave; la loi
                fran&ccedil;aise et port&eacute;e devant le Tribunal de Commerce de Paris.</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">SIRET : 95203558200016&nbsp;</span></p>
        <p
            style='margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:normal;background:#FFFCFC;'>
            <span style="font-size:14px;font-family:Roboto;color:#3C4858;">N&deg;
                d&eacute;claration&nbsp;11756752575</span></p>
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
