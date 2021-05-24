export default class DateFunction {

    /**
     * compare between two dates
     * */
    static isSecondDateAfterFirstDate(date1, date2) {
        date1 = new Date(date1);
        date2 = new Date(date2);
        return date2 >= date1;
    }

    /**
     * get date format
     * */
    static getDateFormat(date, dateFormat) {
        return moment(date.toString()).format(dateFormat)
    }

    /**
     * get date format
     * */
    static getDateFormatForBackend(date) {
        return moment(date.toString()).format('Y/M/D')
    }
    /**
     * get datetime format
     * */

    static getDateTimeFormatForBackend(dateTime) {
        return moment(dateTime).format('YYYY-MM-DD HH:mm:ss')
    }

}
