<script src="<?php echo "$root"; ?>src/js/bootstrap.js"></script>
<script src="<?php echo "$root"; ?>src/js/core.js"></script>
<script>
    // Add Uikit Script depending on user agent
    let script = document.createElement('script'),
        uiAtts = document.querySelectorAll('*[uk-parallax]');
    script.src = '<?php echo "$root"; ?>src/js/uikit.js';

    if (!isMobile()) body.appendChild(script)
    else {
        for(let uiAtt of uiAtts) uiAtt.removeAttribute('uk-parallax')
    }
</script>