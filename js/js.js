var btnsRipple = function (e) {
    var target = e.target;
    if (target.tagName.toLowerCase() !== 'button') return false;
    var rect = target.getBoundingClientRect();
    var ripple = target.querySelector('.ripple');
    if (!ripple) {
        ripple = document.createElement('span');
        ripple.className = 'ripple';
        ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
        target.appendChild(ripple);
    }
    ripple.classList.remove('show');
    var top = e.pageY - rect.top - ripple.offsetHeight / 2 - document.body.scrollTop;
    var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
    ripple.style.top = top + 'px';
    ripple.style.left = left + 'px';
    ripple.classList.add('show');
    return false;
}

document.addEventListener('click', btnsRipple, false);

$(document).ready(function () {
    $(".imputtext").blur(function () {

        if ($(this).val())
            $(this).addClass('used');
        else
            $(this).removeClass('used');

    });

});
$(function () {
    $("#tabs").tabs();
});


$(function () {
    // Parser para configurar a data para o formato do Brasil
    $.tablesorter.addParser({
        id: 'datetime',
        is: function (s) {
            return false;
        },
        format: function (s, table) {
            s = s.replace(/\-/g, "/");
            s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$2/$1");
            return $.tablesorter.formatFloat(new Date(s).getTime());
        },
        type: 'numeric'
    });

    $('.tablesorter').tablesorter({
        // Envia os cabeçalhos 
        headers: {
            // A sgunda coluna (começa do zero) 
            1: {
                // Desativa a ordenação para essa coluna 
                sorter: 'string'
            },
            4: {
                // Ativa o parser de data na coluna 4 (começa do 0) 
                sorter: 'datetime'
            }
        },
        // Formato de data
        dateFormat: 'dd/mm/yyyy'
    });
});


function slidetoggle() {
    var slider = document.getElementById("navi-slide");
    slider.style.height = window.innerHeight - 75 + "px";

    if (slider.style.left == "0px") {
        slider.style.left = "-250px";
    } else {
        slider.style.left = "0px";
    }
}