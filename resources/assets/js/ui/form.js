import '../../semantic/src/definitions/modules/transition';
import '../../semantic/src/definitions/modules/dropdown';
import '../../semantic/src/definitions/modules/checkbox';
import '../../semantic/src/definitions/modules/popup';
import '../../../../node_modules/semantic-ui-calendar/src/definitions/modules/calendar'

$('.dropdown.selection').dropdown();
$('.ui.checkbox').checkbox();

let calendarOptions = {
    type: 'date',
    formatter: {
        date: formatDate
    }
};

$('#calendar').calendar(calendarOptions).calendar('set date', new Date());

function zeroFill(number, width) {
    width -= number.toString().length;
    if (width > 0) {
        return new Array(width + (/\./.test(number) ? 2 : 1)).join('0') + number;
    }
    return number + ""; // always return a string
}

function formatDate(date) {
    if (!date) return '';
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    return year + '-' + zeroFill(month, 2) + '-' + zeroFill(day, 2);
}