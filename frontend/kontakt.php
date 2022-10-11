<!doctype html>
<?php include('includes/config.php'); ?>
<html lang="de">
<?php $body_class = 'kontakt';
$currentPage = 'Kontakt';
include('includes/head.php'); ?>
<body class="<?php echo $body_class; ?> no-js" id="nav-open">
<?php include('includes/navigation.php'); ?>
<div id="page">
    <main>
        <div class="container"">
            <div class="row">
                <div class="col-12">
                    <h1>Kontakt</h1>
                </div>
                <div class="col-lg-4">
                    <dl class="styled">
                        <dt>Ansprechpartner: </dt>
                        <dd>Magnus Onnebrink</dd>
                    </dl>
                </div>
                <div class="col-lg-4">
                    <dl class="styled">
                        <dt>Adresse: </dt>
                        <dd><?php echo $street ?>, <?php echo $plz ?> <?php echo $city ?></dd>
                    </dl>
                </div>
                <div class="col-lg-4">
                    <dl class="styled">
                        <dt>Kontaktzeiten: </dt>
                        <dd>Termin nach Vereinbarung</dd>
                    </dl>
                </div>
            </div>
        </div>
    </main>
    <?php include('includes/footer.php'); ?>
</div>
<?php include('includes/scripts.php'); ?>
<script src="<?php echo "$root"; ?>src/form/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo "$root"; ?>src/form/js/blockui.js"></script>
<script src="<?php echo "$root"; ?>src/form/js/jquery.validate.js"></script>
<script src="<?php echo "$root"; ?>src/form/js/placeholders.js"></script>
<script src="<?php echo "$root"; ?>src/form/js/snippet.js"></script>
</body>
</html>
