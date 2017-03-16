import '../semantic/src/definitions/modules/sidebar.js';

$('#sidebar-toggle').on('click', () => {
    $('#sidebar-menu').sidebar('toggle');
});