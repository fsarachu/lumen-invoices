import '../../semantic/src/definitions/modules/transition';
import '../../semantic/src/definitions/modules/dropdown';
import '../../semantic/src/definitions/modules/checkbox';
import '../../semantic/src/definitions/modules/popup';
import '../../../../node_modules/semantic-ui-calendar/src/definitions/modules/calendar'

/* Initialize Form Controls */
$('.dropdown.selection').dropdown();
$('.ui.checkbox').checkbox();

let $amountInDollars = $('#amount_in_dollars');
$amountInDollars.val('$' + getAmountInDollars());
$('#calendar')
    .calendar({
        type: 'date',
        formatter: {
            date: formatDate
        }
    })
    .calendar('set date', new Date());

/* Register Event Listeners*/
$('#amount_in_original_currency, #dollar_quotation')
    .on('keyup blur change', () => $('#amount_in_dollars').val('$' + getAmountInDollars()));

/* Helper Functions */
function zeroFill(number, width) {
    width -= number.toString().length;
    if (width > 0) {
        return new Array(width + (/\./.test(number) ? 2 : 1)).join('0') + number;
    }
    return number + ""; // always return a string
}

function formatDate(date) {
    if (!date) {
        return '';
    }

    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();

    return year + '-' + zeroFill(month, 2) + '-' + zeroFill(day, 2);
}

function getAmountInDollars() {
    let amountInOriginalCurrency = parseFloat($('#amount_in_original_currency').val()) || 0.0;
    let dollarQuotation = parseFloat($('#dollar_quotation').val()) || 0.0;

    let amountInDollars = dollarQuotation === 0 ? 0 : amountInOriginalCurrency / dollarQuotation;

    return amountInDollars.toFixed(2);
}
