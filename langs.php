<?php

// Geo Locate for the new server

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();



//locate the IP
$geoplugin->locate();

// echo "Country Name: $geoplugin->countryName <br />";
$countryName=$geoplugin->countryName;


$langs["belive"]["IT"]    = "PERCHÉ CREDERE A NOI ".$countryName;
$langs["belive"]["EN"]    = "WHY BELIEVE US".$countryName;
$langs["belive"]["AL"]    = "WARUM GLAUBEN US".$countryName;

$langs["home"]["IT"]    = "Home";
$langs["home"]["EN"]    = "Home";
$langs["home"]["AL"]    = "Kryefaqja";

$langs["about"]["IT"]    = "Io";
$langs["about"]["EN"]    = "About";
$langs["about"]["AL"]    = "Une";

$langs["skills"]["IT"]    = "Abilità";
$langs["skills"]["EN"]    = "Skills";
$langs["skills"]["AL"]    = "Aftesite"; 

$langs["experience"]["IT"]    = "Esperienza";
$langs["experience"]["EN"]    = "Experience";
$langs["experience"]["AL"]    = "Eksperienca";

$langs["education"]["IT"]    = "Educazione";
$langs["education"]["EN"]    = "Education";
$langs["education"]["AL"]    = "Shkollimi";

$langs["portfolio"]["IT"]    = "Portafoglio";
$langs["portfolio"]["EN"]    = "Portfolio";
$langs["portfolio"]["AL"]    = "Punimet";


$langs["contact"]["IT"]    = "Contatto";
$langs["contact"]["EN"]    = "Contact";
$langs["contact"]["AL"]    = "Kontakt";


$langs["eng"]["IT"]    = "Inglese";
$langs["eng"]["EN"]    = "English";
$langs["eng"]["AL"]    = "Anglisht";

$langs["ita"]["IT"]    = "Italiano";
$langs["ita"]["EN"]    = "Italian";
$langs["ita"]["AL"]    = "Italisht";


$langs["shq"]["IT"]    = "Albanese";
$langs["shq"]["EN"]    = "Albanian";
$langs["shq"]["AL"]    = "Shqip";


$langs["about2"]["IT"]    = "Informazioni su di me";
$langs["about2"]["EN"]    = "About me";
$langs["about2"]["AL"]    = "Rreth meje";


$langs["progal"]["IT"]    = "Programmatore dall'Albania";
$langs["progal"]["EN"]    = "Full-Stack developer from Albania";
$langs["progal"]["AL"]    = "Programues nga Shqiperia";


$langs["about2"]["IT"]    = "Informazioni su di me";
$langs["about2"]["EN"]    = "About me";
$langs["about2"]["AL"]    = "Rreth meje";


$langs["about3"]["IT"]    = "Sono un studente nel mio ultimo anno di master su scienze Informatica. Sono uno sviluppatore full-stack con 2 anni di esperienza nello sviluppo di diverse piattaforme e siti web. Mi piace imparare cose nuove.";
$langs["about3"]["EN"]    = "I am a 23 year old student currently in my last year of Master of Science in Computer Science (Informatics). I’m a full-stack developer with 2 years of experience developing different platforms and websites. I am a quick learner and I like to learn new things.";
$langs["about3"]["AL"]    = "Jam nje student 23-vjecar ne vitin e fundit te Masterit Shkencor ne Informatike. Kam eksperience 2-vjecare si full-stack developer. Kam punuar ne website dhe platforma te ndryshme. Mesoj shpejt dhe me e rendesishme me pelqen te mesoj gjera te reja.";


$langs["cv"]["IT"]    = "Scarica Il Mio CV";
$langs["cv"]["EN"]    = "Download Printable Resume";
$langs["cv"]["AL"]    = "Shkarkoni CV Time";


$langs["expertise"]["IT"]    = "Le Mie Abilità e Competenze";
$langs["expertise"]["EN"]    = "My Expertise & Skills ";
$langs["expertise"]["AL"]    = "Aftesite dhe Njohurite e Mija";


$langs["expertise2"]["IT"]    = "Diversi programmi / competenze che ho imparato durante scuola o al lavoro e una piccola descrizione per ognuno di essi.";
$langs["expertise2"]["EN"]    = "Different programs / skills I have mastered during my school and work days and a small description for each one of them.";
$langs["expertise2"]["AL"]    = "Programe dhe aftesi te ndryshme qe une zoteroj dhe nje pershkrim i shkurter per secilen prej tyre.";


$langs["photoshop"]["IT"]    = "Ho progettato e modificato diversi website layout, banner, loghi, manifesti ecc";
$langs["photoshop"]["EN"]    = "I have designed and modified different page layouts, banners, logos, posters etc";
$langs["photoshop"]["AL"]    = "Kam dizenjuar dhe modifikuar layoute te ndryshme website, banera, logo etj";


$langs["illustrator"]["IT"]    = "Ho progettato i certificati di laurea per un centro di lingua straniera.";
$langs["illustrator"]["EN"]    = "I have designed the graduation certificates for a foreign language center.";
$langs["illustrator"]["AL"]    = "Kam dizenjuar certifikatat e diplomimit per nje qender gjuhesh te huaja.";


$langs["powerdirector"]["IT"]    = "Ho usato PowerDirector per più di 5 anni per modificare diversi film e video.";
$langs["powerdirector"]["EN"]    = "I have used PowerDirector for more than 5 years to edit movies and short videos.";
$langs["powerdirector"]["AL"]    = "Kam perdorur PowerDirector per me shume se 5 vjet per te modifikuar filma dhe video.";


$langs["vegas"]["IT"]    = "Ho usato Sony Vegas per più di 5 anni per modificare diversi film e video.";
$langs["vegas"]["EN"]    = "I have used Sony Vegas for more than 5 years to edit movies and short videos.";
$langs["vegas"]["AL"]    = "Kam perdorur Sony Vegas per me shume se 5 vjet per te modifikuar filma dhe video.";


$langs["premiere"]["IT"]    = "Ho usato Adobe Premiere per più di 5 anni per modificare diversi film e video.";
$langs["premiere"]["EN"]    = "I have used Adobe Premiere for more than 5 years to edit movies and short videos.";
$langs["premiere"]["AL"]    = "Kam perdorur Adobe Premiere per me shume se 5 vjet per te modifikuar filma.";


$langs["cdraw"]["IT"]    = "Ho creato 4 ebooks in 3 lingue diverse utilizzando Corel Draw.";
$langs["cdraw"]["EN"]    = "I have created 4 ebooks in 3 different languages using Corel Draw.";
$langs["cdraw"]["AL"]    = "Kam krijuar 4 ebook ne 3 gjuhe te ndryshme duke perdorur Corel Draw.";


$langs["adws"]["IT"]    = "Ho creato e gestito diverse campagne di marketing per diversi siti web.";
$langs["adws"]["EN"]    = "I have created and managed different marketing campaigns for different websites.";
$langs["adws"]["AL"]    = "Kam krijuar dhe menaxhuar fushata te ndryshme marketingu per website te ndryshem.";


$langs["emailtc"]["IT"]    = "Ho creato molti email template e li ho utilizzati su Amazon SES, Sendy, ElasticMail, MailChimp ecc";
$langs["emailtc"]["EN"]    = "I have created many email templates and used them on Amazon SES, Sendy, ElasticMail, MailChimp etc.";
$langs["emailtc"]["AL"]    = "Kam krijuar templete emaili dhe i kam perdorur ne Amazon SES, Sendy, ElasticMail, MailChimp etc.";


$langs["mopm"]["IT"]    = "Ottime capacità su tutti i programmi di Microsoft Office. Ho anche lavorato sulla creazione di alcuni giornali con Page Maker.";
$langs["mopm"]["EN"]    = "Excellent skills on all Microsoft Office programs. For a short period of time I have also worked on creating some newspapers with Page Maker.";
$langs["mopm"]["AL"]    = "Aftesi shume te mira ne te gjitha programet e paketes Office. Per nje periudhe te shkurter kohe kam krijuar edhe disa modele gazetash me Page Maker.";


$langs["compa"]["IT"]    = "Ho seguito un corso per l'installazione, manutenzione, personalizzazione del personal computer.";
$langs["compa"]["EN"]    = "I took a school course for installing, maintaining, customizing, and operating personal computers.";
$langs["compa"]["AL"]    = "Kam nje ndjekur nje kurs per operimin, mirembajtjen, modifikimin e kompjuterave personal.";



$langs["compn"]["IT"]    = "Ho seguito un corso per progettare, configurare, gestire e risolvere eventuali reti cablate e wireless.";
$langs["compn"]["EN"]    = "I took a school course to design, configure, manage and troubleshoot any wired and wireless networks.";
$langs["compn"]["AL"]    = "Kam nje ndjekur nje kurs per dizenjimin, menaxhimin e rrjetave te internetit.";


$langs["wserver"]["IT"]    = "Ho seguito un corso di scuola per la progettazione, l'implementazione, la configurazione o la gestione di un Windows Server.";
$langs["wserver"]["EN"]    = "I took a school course for designing, implementing, configuring, or managing a Windows Server.";
$langs["wserver"]["AL"]    = "Kam nje ndjekur nje kurs per konfikurimin dhe menaxhimin e Windows Servers.";


$langs["prglan"]["IT"]    = "Lingue di Programmazione";
$langs["prglan"]["EN"]    = "Programing Languages";
$langs["prglan"]["AL"]    = "Gjuhe Programimi";


$langs["prglan2"]["IT"]    = "Tutti i linguaggi di programmazione che ho studiato e lavorato con a fianco il mio livello di conoscenza di loro.";
$langs["prglan2"]["EN"]    = "All the programming languages which I have studied and have worked with alongside my knowledge level of them.";
$langs["prglan2"]["AL"]    = "Te gjithe gjuhet e programimit qe une kam studiuar e punuar bashke me nivelin tim ne secilen prej tyre.";


$langs["wokrex"]["IT"]    = "Esperienza Lavorativa";
$langs["wokrex"]["EN"]    = "Work Experience";
$langs["wokrex"]["AL"]    = "Eksperienca Pune";


$langs["work1"]["IT"]    = '<h4>Sviluppatore Full-Stack a Blue Bull Shpk (Durres, Albania)</h4>
            <h5>Primo Programmatore (Smarty, PHP, Javascript, SQL, HTML, CSS, PL-SQL)</h5>
            <p>Ho lavorato su 4 siti web ( <a target="_blank" style="color: #2a6496;" href="http://bluebull.trade/">http://bluebull.trade/ </a> ,<a target="_blank" style="color: #2a6496;" href="http://trading-forex.click/"> http://trading-forex.click/ </a>,<a target="_blank" style="color: #2a6496;" href="http://bluebull.services/"> http://bluebull.services/ </a>, <a target="_blank" style="color: #2a6496;" href="http://competitivetrading.info/">http://competitivetrading.info/</a> ) e 2 piattaforme di trading forex (la piattaforma di Blue Bull e la piattaforma di Trading Forex Platform). Ho anche lavorato sulla creazione di diversi email templates e fare campagne con loro. Ho creato video tutorial su come utilizzare la piattaforma di trading. Ho anche creato alcuni ebooks per la piattaforma.</p>';
$langs["work1"]["EN"]    = '<h4>Full-Stack Developer at Blue Bull Shpk (Durres, Albania)</h4>
            <h5>Lead Programmer  (Smarty, PHP, Javascript, SQL, HTML, CSS, PL-SQL)</h5>
            <p>I had to work on 4 websites ( <a target="_blank" style="color: #2a6496;" href="http://bluebull.trade/">http://bluebull.trade/ </a> ,<a target="_blank" style="color: #2a6496;" href="http://trading-forex.click/"> http://trading-forex.click/ </a>,<a target="_blank" style="color: #2a6496;" href="http://bluebull.services/"> http://bluebull.services/ </a>, <a target="_blank" style="color: #2a6496;" href="http://competitivetrading.info/">http://competitivetrading.info/</a> ) and  2 trading forex platforms (Blue Bull Platform and Trading Forex Platform). I also created different email templates and made campaigns with them. I created  video tutorials on how  to use  the trading platform. Also created some ebooks for the platform.</p>';
$langs["work1"]["AL"]    = '<h4>Programues Full-Stack tek Blue Bull Shpk (Durres, Albania)</h4>
            <h5>Programuesi Kryesor  (Smarty, PHP, Javascript, SQL, HTML, CSS, PL-SQL)</h5>
            <p>Kam punuar ne 4 website te ndryshem ( <a target="_blank" style="color: #2a6496;" href="http://bluebull.trade/">http://bluebull.trade/ </a> ,<a target="_blank" style="color: #2a6496;" href="http://trading-forex.click/"> http://trading-forex.click/ </a>,<a target="_blank" style="color: #2a6496;" href="http://bluebull.services/"> http://bluebull.services/ </a>, <a target="_blank" style="color: #2a6496;" href="http://competitivetrading.info/">http://competitivetrading.info/</a> ) dhe 2 platforma trading forex (platforma e Blue Bull dhe platforma e Trading Forex). Gjithashtu kam dizenjuar template te ndryshem email dhe kam krijuar fushata me to. Kam krijuar disa video ilustruese sesi te perdoret platforma trading. Kam krijuar edhe disa ebook per platformen.</p>';




$langs["work2"]["IT"]    = '<h4>Sviluppatore Web a Webimal.org (Online Indian Company)</h4>
            <h5>Programmatore  (HTML, CSS, Javascript)</h5>
            <p>Ho convertito libri su Linux/Shell su tutorial online adeguati. Per vedere il mio lavoro controllare i tutorial a <a target="_blank" style="color: #2a6496;" href="http://www.webminal.org/">http://www.webminal.org/ </a></p>';
$langs["work2"]["EN"]    = '<h4>Web Developer at Webimal.org (Online Indian Company)</h4>
            <h5>Programmer  (HTML, CSS, Javascript)</h5>
            <p>I used to convert books about Linux/SHELL to proper online tutorials. To see my work check the tutorials at <a target="_blank" style="color: #2a6496;" href="http://www.webminal.org/">http://www.webminal.org/ </a></p>';
$langs["work2"]["AL"]    = '<h4>Programues Web tek Webimal.org (Kompani Indiane Online)</h4>
            <h5>Programues  (HTML, CSS, Javascript)</h5>
            <p>Kam konvertuar kapituj te librave per Linux/SHELL ne tutoriale online. Per te pare punen qe kam bere kontrolloni tutorialet tek <a target="_blank" style="color: #2a6496;" href="http://www.webminal.org/">http://www.webminal.org/ </a></p>';

?>

