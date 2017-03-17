import '../semantic/src/definitions/modules/sidebar';
import '../semantic/src/definitions/modules/transition';
import '../semantic/src/definitions/modules/dropdown';
import '../semantic/src/definitions/modules/checkbox';

$('#sidebar-toggle').on('click', () => {
    $('#sidebar-menu').sidebar('toggle');
});

$('.dropdown.selection').dropdown();

$('.ui.checkbox').checkbox();