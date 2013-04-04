<?php
// Kontaktformular.org

// Einstellungen
// Ihre E-Mailadresse
$sys_webmaster = 'kontakt@kellereistueble.de';

// Absender || Muster(From: NAME <EMAIL>) // Beispiel: 'From: Max Mustermann <max@musterdomain.tld>'
$sys_absender = 'From: Kontaktformular <kontakt@kellereistueble.de>';

// Betreff
$sys_betreff = 'Kontaktformular-Anfrage';

// Nachrichten
// Nicht alle Felder ausgefüllt
$err[0] = 'Fehler, Sie haben nicht alle Felder ausgefüllt:';
// Kein Name eingegeben
$err[1] = '<br />- Ungültiger Name';
// Ungültige E-Mailadresse eingegeben
$err[2] = '<br />- Ungültiger E-Mailadresse';
// Kein Betreff eingegeben
$err[3] = '<br />- Ungültiger Betreff';
// Keine Nachricht eingegeben
$err[4] = '<br />- Ungültige Nachricht';
// Ungültiger Sicherheitscode
$err[5] = '<br />- Ungültiger Sicherheitscode';
// Alle Felder sind OK
$ok = 'Vielen Dank für Ihre Nachricht, wir werden Sie demnächst bearbeiten!<br /><br />';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
session_start();
$sessionstringnew = null;
$sessionstringadd = null;
if (!isset($_COOKIE[session_name()])) {
    $sessionstringnew = '?' . session_name() . "=" . session_id();
    $sessionstringadd = '&' . session_name() . "=" . session_id();
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Startseite | Kellereistüble Pension Garni</title>
    <!-- Stylesheets -->
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold"
          type="text/css" />
    <link rel="stylesheet"
          href="css/default.css"
          type="text/css"
          media="all" />
    <link rel="stylesheet"
          href="css/style.css"
          type="text/css"
          media="all" />
    <!-- Metatags -->
    <meta name="description" content="Das Kellereistüble in Lindau (Bodensee) bietet Ferienwohnungen, Einzel- &amp; Doppelzimmer in naher Lage zur Insel Lindau." />
    <meta name="keywords" content="Hotel ,Ferien, Insel Mainau, Pfänder, Bregenz, Meersburg, Friedrichhafen, Wasserburg, Zeppelin, Hagnau, Schweiz, Österreich, Lichtenstein, Familienurlaub, Frühstück, Nonnenhorn, Lindau Schönau, Säntis, Urlaub, Seehafen" />
    <!-- JavaScript -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-4479251-2']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>

<body>
    <div id="page">
        <div id="header">
            <h1 id="logo">
                <a href="/" title="Kellereistüble Pension Garni">Kellereistüble</a>
            </h1>
            <img class="banner" width="400" height="80" alt="Kellereistüble Lindau" src="images/banner.jpg" />
            <div id="navigation">
                <ul>
                    <li><a href="/" title="Startseite Kellereistüble Pension Garni" class="active">Startseite</a></li>
                    <li><a href="zimmer.html" title="Einzel- und Doppelzimmer im Kellereistüble">Einzel-/Doppelzimmer</a></li>
                    <li><a href="komfort.html" title="Komfort- &amp; Dreibettzimmer im Kellereistüble">Komfort- &amp; Dreibettzimmer</a></li>
                    <li><a href="wohnung.html" title="Ferienwohnungen im Kellereistüble">Ferienwohnungen</a></li>
                    <li><a href="aussen.html" title="Die Außenanlage des Kellereistüble">Außenanlage</a></li>
                </ul>
            </div>
        </div>
        <div id="wrapper">
            <div id="sidebar">
                <h3>
                    Kellereistüble Lindau Kontakt:
                </h3>
                <p>
                    Reservierungen, Anfragungen oder weitere Informationen <strong>am Besten</strong> über Telefon oder Fax!
                </p>
                <address>
                    <strong>Kellereistüble Pension Garni</strong><br/>
                    Kellereiweg 1a<br/>
                    88131 Lindau (B)<br/>
                    Telefon: +49 8382 3381<br/>
                    Fax: +49 8382 3381<br/>
                </address>
                <ul>
                    <li><a href="/" title="Kellereistüble Lindau Homepage">&raquo; http://www.kellereistueble.de/</a></li>
                    <li><a href="mailto:kontakt@kellereistueble.de" title="E-Mail ans Kellereistüble Lindau schreiben">&raquo; kontakt@kellereistueble.de</a></li>
                </ul>
                <ul>
                    <li><a href="anfahrt.html" title="Anfahrtsbeschreibung zum Kellereistüble">&raquo; Anfahrtsbeschreibung</a></li>
                    <li><a href="kontakt.php" title="Kellereistüble Pension Garni kontaktieren">&raquo; Kontaktformular</a></li>
                    <li><a href="preise.html" title="Preisliste im Kellereistüble">&raquo; Preise</a></li>
                </ul>
                <p><a href="http://www.ferienwohnungen-bodensee.de/ferienwohnung-905-de.htm" title="Kellereistüble Lindau">Ferienwohnung - Pension Garni Kellereistüble</a> auf <a href="http://www.ferienwohnungen-bodensee.de/" title="">Ferienwohnungen-Bodensee.de</a></p>
            </div>
            <div id="content">
                <h2>
                    Kellereistüble Lindau kontaktieren
                </h2>
                <form name="kontaktformular" action="<?=$_SERVER['PHP_SELF'].$sessionstringnew; ?>" method="post">
        <table style="width:500px">
          <tr>
        <td colspan="2">
          <?php
            $name = trim(strip_tags($_POST['name']));
            $email = trim(strip_tags($_POST['email']));
            $betreff = trim(strip_tags($_POST['betreff']));
            $nachricht = trim(strip_tags($_POST['nachricht']));
            $homepage = trim(strip_tags($_POST['homepage']));
            if (isset($_POST['submit'])) {
          $ip = $_SERVER['REMOTE_ADDR'];
          $host = gethostbyaddr($ip);
          $timestamp = time ();
          $datum = date ("d.m.Y", $timestamp);
          $uhrzeit = date ("H:i:s", $timestamp);
          $msg = '<span style="color:red">' . $err[0];
          if ($name == '') {
            $msg .= $err[1];
            $error = true;
          }
          if (!ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,6})$", $email)) {
            $msg .= $err[2];
            $error = true;
          }
          if ($betreff == '') {
            $msg .= $err[3];
            $error = true;
          }
          if ($nachricht == '') {
            $msg .= $err[4];
            $error = true;
          }
          if (sha1(trim(strip_tags(strtoupper($_POST['code'])))) != $_SESSION['P91Captcha_code']) {
            $msg .= $err[5];
            $error = true;
          }
          $msg .= '</span><br /><br />';
          if ($error != true) {
            $sys_nachricht = "-- Kontakformularanfrage --\n\nBetreff: $betreff\nName: $name\nE-Mail: $email\nHomepage: $homepage\n\nNachricht:\n$nachricht\n\nIP: $ip\nHost: $host\nGesendet am $datum um $uhrzeit.";
            mail($sys_webmaster, $sys_betreff, $sys_nachricht, $sys_absender);
            $name = null;
            $betreff = null;
            $email = null;
            $nachricht = null;
            $homepage = null;
              echo $ok;
        } else {
          echo $msg;
        }
          }
        ?></td>
          </tr>
          <tr>
        <td style="width:150px"><strong>Name:</strong></td>
        <td><input name="name" type="text" value="<?=$name; ?>" size="40" maxlength="100"></td>
          </tr>
          <tr>
        <td style="width:150px"><p><strong>E-Mail Adresse:</strong><br></td>
        <td><input name="email" type="text" id="email" value="<?=$email; ?>" size="40" maxlength="100"></td>
          </tr>
          <tr>
        <td style="width:150px"><strong>Betreff:</strong></td>
        <td><input name="betreff" type="text" id="betreff" value="<?=$betreff; ?>" size="40" maxlength="50"></td>
          </tr>
          <tr>
        <td style="width:150px"><strong>Homepage (Optional):</strong></td>
        <td><input name="homepage" type="text" id="homepage" value="<?=$homepage; ?>" size="40" maxlength="50"></td>
          </tr>
          <tr>
        <td style="width:150px"><strong>Nachricht:</strong></td>
        <td><textarea name="nachricht" cols="40" rows="10" wrap="VIRTUAL" id="nachricht"><?=$nachricht; ?></textarea></td>
          </tr>
          <tr>
            <td style="width:150px">&nbsp;</td>
        <td>&nbsp;</td>
          </tr>
          <tr>
            <td style="width:150px"><strong>Sicherheitscode:</strong></td>
        <td><img src="captcha_form.php<?=$sessionstringnew;?>" alt="Captcha" border="1" id="P91Captcha" />
            <br />
        <a href="javascript:P91Captcha('<?=$sessionstringadd;?>');" class="preis">Neuer Code?</a></td>
          </tr>
          <tr>
        <td style="width:150px"><strong>Sicherheitscode-Eingabe:</strong></td>
        <td><input name="code" type="text" id="code" size="20" maxlength="50" /></td>
          </tr>
          <tr>
        <td style="width:150px">&nbsp;</td>
        <td>&nbsp;</td>
          </tr>
          <tr>
        <td style="width:150px">&nbsp;</td>
        <td><input type="submit" value="Abschicken" name="submit"></td>
          </tr>
        </table>
      </form>
            </div>
            <div id="footer">
                <p>
                    Copyright (c) 2011 <strong>Kellereistüble Pension Garni</strong>. Design + Code: <a href="http://www.gironimo.org/" title="gironimo.org - Aktuelle Artikel über Linux, IT &amp; Internet">http://www.gironimo.org/</a>
                </p>
            </div>
        </div>
        <div id="footnote">&nbsp;</div>
    </div>
</body>

</html>
