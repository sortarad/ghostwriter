<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script>
    (function () {
        var targets = document.querySelectorAll('[data-ghostwriter]');

        if ( ! targets.length ) {
            return false;
        }

        targets.forEach(function( target, index ) {
            var placeholder = target.cloneNode(true);
            var options = JSON.parse(target.dataset.ghostwriter);

            // Insert placeholder element.
            placeholder.id = '#typed-' + index;
            placeholder.innerHTML = '<span></span>';
            target.after(placeholder);

            // Hide original element.
            target.style.display = 'none';

            var typedElement = placeholder.querySelector('span');
            var typed = new Typed( typedElement, {
                strings: target.firstElementChild ? [] : [ target.innerText ],
                stringsElement: target.firstElementChild ? target : null,
                typeSpeed: options.typeSpeed,
                loop: options.loop,
            } );
        });
    })();
</script>
