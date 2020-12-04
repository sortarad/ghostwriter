const targets = document.querySelectorAll('[data-ghostwriter]');

function initGhostwriter(target, index) {
  const placeholder = target.cloneNode(true);
  const options = JSON.parse(target.dataset.ghostwriter);

  // Insert placeholder element.
  placeholder.id = '#typed-' + index;
  placeholder.innerHTML = '<span></span>';
  target.after(placeholder);

  // Hide original element.
  target.style.display = 'none';

  const typedElement = placeholder.querySelector('span');
  new Typed(typedElement, {
    strings: target.firstElementChild ? [] : [target.innerText],
    stringsElement: target.firstElementChild ? target : null,
    typeSpeed: options.typeSpeed,
    loop: options.loop,
  });
}

if (targets.length) {
  targets.forEach(initGhostwriter);
}
