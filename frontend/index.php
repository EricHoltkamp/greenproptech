<!doctype html>
<html lang="de">
<?php $body_class = 'index';
$currentPage = 'Startseite';
include('includes/config.php');
include('includes/head.php'); ?>
<body class="<?php echo $body_class; ?> no-js" id="nav-open">
<?php include('includes/navigation.php'); ?>
<div id="page">
    <header>
        <div class="container" uk-parallax="y: 30,-30;">
            <div class="row">
                <div class="col-lg-7">
                    <blockquote class="claim">
                        Nachhaltige Immobilien
                        <span>Planung, Koordination, Beratung</span>
                    </blockquote>
                    <a class="btn" title="Jetzt Kontakt aufnehmen" href="mailto:<?php echo $mail ?>">Kontakt aufnehmen</a>
                </div>
                <div class="col-lg-5">
                    <img src="src/images/greenproptech-illu-new.svg" alt="Greenproptech Illustration Landschaft">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-xl-4" uk-parallax="y: 80,-120;">
                    <h1>Proptech und Nachhaltigkeit: die Herausforderungen</h1>
                </div>
                <div class="col-xl-4" uk-parallax="y: 80,-140;">
                    <p>In einer Welt, in der der Klimawandel, die Verknappung von Rohstoffen und der sich ändernde öffentliche Konsens Auswirkungen haben, sind Immobilienvermieter in erheblichem Maße Nachhaltigkeitsrisiken ausgesetzt. Die Immobilienbranche verbraucht etwa 40 % aller Rohstoffe weltweit, etwa 40 % der weltweiten Energie und ist für mehr als 30 % der Kohlendioxidemissionen verantwortlich.</p>
                </div>
                <div class="col-xl-4" uk-parallax="y: 80,-100;">
                    <p>Die Kosten der Gesetzgebung sind auch für die Zukunft nachhaltiger Immobilien von Bedeutung. Das Europäische Parlament ist bestrebt, die Messlatte für den Klimaschutz höher zu legen, indem es ein klimaneutrales Ziel für 2050 festlegt und versucht, das europäische Ziel für 2030, die Treibhausgasemissionen von 40 % auf 55 % zu reduzieren, anzuheben.</p>
                </div>
            </div>
        </div>
        <div class="container" uk-parallax="y: 120,-120;">
            <div class="row">
                <div class="col-12">
                    <div>
                        <img src="src/images/skyline.svg" alt="Gebäude Skyline" class="skyline">
                    </div>
                </div>
            </div>
        </div>
        <div class="container" uk-parallax="y: 120,-140;">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2>Projektmanagement</h2>
                    <p>Im Rahmen der Projektüberwachung begleiten wir die Projektentwicklung durch Kosten-, Termin- und Bauüberwachung in der Planungs- und Bauphase bis zur Abnahme. Die Überwachung umfasst:</p>
                    <ul class="styled">
                        <li><i class="fa fa-house"></i> Organisation von Bauherrenbesprechungen und Protokollführung</li>
                        <li><i class="fa fa-house"></i> Regelmäßige Objektbegehungen zur Leistungsfeststellung</li>
                        <li><i class="fa fa-house"></i> Kontrolle von Terminen und Kosten</li>
                        <li><i class="fa fa-house"></i> Beratung bei allen wesentlichen Änderungen und Abweichungen</li>
                        <li><i class="fa fa-house"></i> Nachverfolgung von Mängeln nach der Abnahme</li>
                        <li><i class="fa fa-house"></i> Monatliches Berichtswesen</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" uk-parallax="y: 120,-140;">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2>Umweltprüfung</h2>
                    <p>Die umweltbezogene Due-Diligence-Prüfung von Immobilien hilft Käufern, Verkäufern und Portfolio-/Vermögensverwaltern bei der Bewertung der Chancen und Risiken geplanter Transaktionen. Folgendes wird berücksichtigt:</p>
                    <ul class="styled column-list">
                        <li><i class="fa fa-house"></i> Emissionen</li>
                        <li><i class="fa fa-house"></i> Lärm</li>
                        <li><i class="fa fa-house"></i> Ozon abbauende Stoffe</li>
                        <li><i class="fa fa-house"></i> Wasser/Abwasser</li>
                        <li><i class="fa fa-house"></i> Abfallwirtschaft</li>
                        <li><i class="fa fa-house"></i> Historische Nutzung</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php include('includes/footer.php'); ?>
</div>
<?php include('includes/scripts.php'); ?>
</body>
</html>
