<!doctype html>
<?php include('includes/config.php'); ?>
<html lang="de">
<?php $body_class = 'impressum';
$currentPage = 'Impressum';
include('includes/head.php'); ?>
<body class="<?php echo $body_class; ?> no-js" id="nav-open">
<?php include('includes/navigation.php'); ?>
<div id="page">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12" uk-parallax="y: 60,-60;">
                    <h1>Impressum</h1>
                </div>
                <div class="col-lg-6" uk-parallax="y: 60,-60;">
                    <dl class="styled">
                        <dt>Firma </dt>
                        <dd><?php echo $company ?></dd>
                        <dt>Verantwortlicher </dt>
                        <dd>Magnus Onnebrink</dd>
                        <dt>Telefon </dt>
                        <dd><a href="tel:<?php echo $phoneLink ?>" title="Jetzt anrufen"><?php echo $phone ?></a></dd>
                        <dt>E-Mail </dt>
                        <dd><a href="mailto:<?php echo $mail ?>" title="E-Mail schreiben"><?php echo $mail ?></a></dd>
                        <dt>Umsatzsteuer Id </dt>
                        <dd>XXXXXXXXXXX</dd>
                    </dl>
                </div>
                <div class="col-lg-6" uk-parallax="y: 60,-60;">
                    <h2>Haftungsausschluss</h2>
                    <p><strong>Haftung für Inhalte</strong><br>Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Als Diensteanbieter sind wir gemäß §7 Abs.1 TMG (Telemediengesetz) für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen. &nbsp;Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine Haftung tritt jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung ein. Bei Bekanntwerden von Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>
                    <p><strong>Haftung für Links</strong><br>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben und für die wir keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>
                </div>
            </div>
        </div>
    </main>
    <?php include('includes/footer.php'); ?>
</div>
<?php include('includes/scripts.php'); ?>
</body>
</html>
