import Vue from 'vue'
import moment from "moment";
import Collection from "./Collection";

export const optional = (obj, ...props) => {
    if(!obj || typeof obj !== 'object')
        return undefined;
    const val = obj[props[0]];
    if(props.length === 1 || !val) return val;
    const rest = props.slice(1);
    return optional.apply(null, [val, ...rest])
};
Vue.prototype.$optional = (obj, ...props) => {
    return optional(obj, ...props);
};
Vue.prototype.$errorMessage = (errorObject, field, isArray = true) => {
    if (!Object.keys(errorObject).length)
        return '';
    if (isArray){
        let error = errorObject[field]
        if (error){
            return error[0];
        }
        return '';
    }
    return  errorObject[field];
};
export const configFormatter = (format) => {
    return {
        id: format,
        value: Vue.prototype.$t(format)
    }
};
export const textTruncate = (str, length, ending) => {
    if (length == null) {
        length = 50;
    }
    if (ending == null) {
        ending = '...';
    }
    if (str.length > length) {
        return str.substring(0, length - ending.length) + ending;
    } else {
        return str;
    }
};
export const formDataAssigner = function (formData = new FormData, dataObject) {
    Object.keys(dataObject).map((key) => {
        if (dataObject[key] && !dataObject[key].length > 0 && Object.keys(dataObject[key]).length > 0) {
            Object.keys(dataObject[key]).map(childKey => {
                return formData.append(key+`[${childKey}]`, dataObject[key][childKey]);
            })
        }else if (Array.isArray(dataObject[key])) {
            dataObject[key].map((el, index) => {
                Object.keys(el).map(objectKeys => {
                    formData.append(key+`[${index}][${objectKeys}]`, el[objectKeys]);
                });
            })
        }else{
            return formData.append(key, dataObject[key]);
        }
    });
    return formData;
};
export const date_format = () => {
    return {
        'd-m-Y': 'DD-MM-YYYY',
        'm-d-Y': 'MM-DD-YYYY',
        'Y-m-d': 'YYYY-MM-DD',
        'm/d/Y': 'MM/DD/YYYY',
        'd/m/Y': 'DD/MM/YYYY',
        'Y/m/d': 'YYYY/MM/DD',
        'm.d.Y': 'MM.DD.YYYY',
        'd.m.Y': 'DD.MM.YYYY',
        'Y.m.d': 'YYYY.MM.DD',
    };
};
export const formatDateToLocal = (date, withTime = false) => {
    const formatString = withTime ?
        `${date_format()[window.settings.date_format]} ${window.settings.time_format}:mm:ss` :
        date_format()[window.settings.date_format];
    return  moment(date).utc(true)
        .local()
        .format(formatString);
};
export const timeInterval = (date) => {
    return moment(date).utc(true).fromNow();
};
export const onlyTime = date => {
    return  moment(date).utc(false)
        .local()
        .format(time_format());
};
export const time_format = () => {
    const format = optional(window.settings, 'time_format');

    return format === 'h' ? `${window.settings.time_format}:mm A` : `${window.settings.time_format}:mm`;
}
export const calenderTime = date => {
    const days = moment(date).diff(moment.now(), 'days');
    if (moment(date).format('YYYY') < moment().format('YYYY')) {
        return  moment(date).format('DD MMM, YY')
    }
    if (days < -7) {
        return  moment(date).format('DD MMM')
    }
    return moment().calendar(date, {
        sameDay: '['+Vue.prototype.$t('today')+']',
        nextDay: '['+Vue.prototype.$t('tomorrow')+']',
        nextWeek: '['+Vue.prototype.$t('next_week')+']',
        lastDay: '['+Vue.prototype.$t('yesterday')+']',
        lastWeek: '['+Vue.prototype.$t('last')+'] dddd',
        sameElse: `${date_format()[window.settings.date_format]}`
    });
};
export const getThousandSeparator = () => {
    return window.settings.thousand_separator ? window.settings.thousand_separator : ' ';
}
export const numberFormatter = number => {
    if (!isNaN(parseFloat(number))) {
        number = parseFloat(number).toFixed(getNumberOfDecimal());
        let parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, getThousandSeparator());
        return parts.join(getDecimalSeparator());
    }
    return 0;
}
export const getCurrencySymbol = ()=> {
    return window.settings.currency_symbol ? window.settings.currency_symbol : ' '
}
export const getCurrencyPosition = ()=> {
    return window.settings.currency_position ? window.settings.currency_position : ' '
}
export const getDecimalSeparator = ()=> {
    return window.settings.decimal_separator ? window.settings.decimal_separator : ' '
}
export const getNumberOfDecimal = ()=> {
    return window.settings.number_of_decimal ? window.settings.number_of_decimal : ' '
}
export const numberWithCurrencySymbol = number => {
    let modifiedValue;
    let formattedNumber = numberFormatter(number).toString();
    let currencySymbol = getCurrencySymbol().toString();
    if (getCurrencyPosition() == 'prefix_with_space'){
        modifiedValue = currencySymbol + ' ' + formattedNumber;
    } else if (getCurrencyPosition() == 'prefix_only'){
        modifiedValue = currencySymbol + formattedNumber;
    } else if (getCurrencyPosition() == 'suffix_with_space') {
        modifiedValue = formattedNumber + ' ' + currencySymbol;
    } else{
        modifiedValue = formattedNumber + currencySymbol;
    }
    return modifiedValue;
}
export const companyName = ()=> {
    return window.settings.company_name ? window.settings.company_name : ' '
}
export const copyRightText = ()=> {
    let date = new Date();
    return 'Copyright @ ' + date.getFullYear() + ' by ' + companyName();
}

export const textEditorHints = tags => {
    return {
        words: tags,
        match: /\B{(\w*)$/,
        search: function (keyword, callback) {
            callback($.grep(this.words, function (item) {
                return item.includes(keyword);
            }));
        }
    }
}
export const collection = list => new Collection(list);
Vue.prototype.collection = list => collection(list);