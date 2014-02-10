
//  PROGRESSIVE DISCLOSURE (e.g. navigation, search)

(function(win, doc) {
    if (cutsTheMustard() === false) return;
    var hiddenClass = 'collapsed',
        triggerClass = 'active';
    var toggleClassName = function(element, toggleClass) {
        var reg = new RegExp('(\\s|^)' + toggleClass + '(\\s|$)');
        if (!element.className.match(reg)) {
            element.className += ' ' + toggleClass;
        } else {
            element.className = element.className.replace(reg, '');
        }
    };
    var toggleLinkCollapse = function(ev) {
        ev.preventDefault();
        var destinationLocation = this.getAttribute('href'),
            destination = doc.querySelector(destinationLocation);
		toggleClassName(destination.parentNode,triggerClass);
        toggleClassName(destination, hiddenClass);
        toggleClassName(this, triggerClass);
    };
    var links = doc.querySelectorAll('a[data-placement]'),
        total = links.length,
        i;
    for (i=0; i<total; i++) {
        var link = links[i],
            destinationLocation = link.getAttribute('href'),
            placementLocation = link.getAttribute('data-placement'),
            destination = doc.querySelector(destinationLocation),
            placement = doc.querySelector(placementLocation);
        placement.appendChild(destination);
        link.addEventListener('click', toggleLinkCollapse, false);
    }
}(this, this.document));