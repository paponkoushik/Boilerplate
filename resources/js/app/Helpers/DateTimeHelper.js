import moment from "moment";

export const getDateFormatForFrontend = (format) => {

    const dates = {
        'd-m-Y' : 'DD-MM-YYYY',
        'm-d-Y' : 'MM-DD-YYYY',
        'Y-m-d' : 'YYYY-MM-DD',
        'm/d/Y' : 'MM/DD/YYYY',
        'd/m/Y' : 'DD/MM/YYYY',
        'Y/m/d' : 'YYYY/MM/DD',
        'm.d.Y' : 'MM.DD.YYYY',
        'd.m.Y' : 'DD.MM.YYYY',
        'Y.m.d' : 'YYYY.MM.DD'
    };

    return dates[format];
}

export const getTimeFormatForFrontend = (format) => {
    const formates = {
        "h" : 12,
        "H" : 24
    }
    return formates[format];
}

export  const getTimeFromDateTime = (dateTime, timeFormat) =>{
    timeFormat = timeFormat == 12 ? 'h:mm a' : 'HH:mm';
    return moment(dateTime).format(timeFormat);
}

export  const  getDateFromNow = (date, format) => {
    return moment(date).calendar({
        sameDay: '[Today]',
        nextDay: '[Tomorrow]',
        nextWeek: 'dddd',
        lastDay: '[Yesterday]',
        lastWeek: '[Last] dddd',
        sameElse: format
    });
}
