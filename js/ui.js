(function (window, document) {

    var layout   = document.getElementById('layout'),
        menu     = document.getElementById('menu'),
        menuLink = document.getElementById('menuLink');

    function toggleClass(element, className) {
        var classes = element.className.split(/\s+/),
            length = classes.length,
            i = 0;

        for(; i < length; i++) {
          if (classes[i] === className) {
            classes.splice(i, 1);
            break;
          }
        }
        // The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }

    menuLink.onclick = function (e) {
        var active = 'active';

        e.preventDefault();
        toggleClass(layout, active);
        toggleClass(menu, active);
        toggleClass(menuLink, active);
    };

}(this, this.document));

$(document).ready(function() {
    var offline = [];
    
    setTimeout(function() {
        $('tr').not('#blank').not(':first').each(function (index, element) {
          if (/down/i.test($(element).text()) == true || /\//.test($(element).text()) == true) {
            $($(element).children()[3]).css('color', 'rgba(231, 76, 60,1.0)');
            offline.push(element);
            $(element).remove();
          } else {
            $($(element).children()[3]).css('font-weight', 'bold').css('color', 'rgba(46, 204, 113,1.0)');
          }
        });
        
        $(offline).each(function (index, element) {
          $('tr').last().after(element);
        });
    }, 5000);
});
