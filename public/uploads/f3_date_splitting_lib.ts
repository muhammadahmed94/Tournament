
/**
 * Created by muhammadahmed on 5/29/2017.
 */
// Declaration of all NetSuite SuiteScript 1.0 APIs
/// <reference path="..\..\..\typings\moment.d.ts" />
/**
 * this class is a library class for splitting dates
 */


class DateSplitterLib {

    /**
     * fetch number of days b/w two dates
     * @param start 
     * @param end 
     */
    public static totalNumberOfDays(start, end) {
        return moment(end).diff(moment(start), 'days');
    }
    /**
     *  get Date Ranges start and end by adding 10 year in start date
     * @param start
     * @param end 
     */
    public static splitDateRangeForEverGreenTemplate(start, end) {

        let dateRangeArray: any = [];
        let dateRange = { startDate: "", endDate: "", billSchedule: "" };
        let startDate = moment(start);
        let startYear = startDate.format('YYYY');
        let startMonth = startDate.format('M');
        var endOfMonth = moment([startYear, startMonth - 1]).endOf('month');

        dateRangeArray.push(
            {
                startDate: moment(start).toISOString(),
                endDate: endOfMonth,
                billSchedule: OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ANN_TERMED_ONE_TIME.key
            }
        );
        dateRangeArray.push(
            {
                startDate: moment(endOfMonth).add('days', 1),
                endDate: moment(end).add('years', 10).toISOString(),
                billSchedule: OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ANN_Evergreen_EVERY_24_MONTH.key
            }
        );

        return dateRangeArray;
    }


    /**
         * Split date range for term template
         * @param start 
         * @param end 
         */

    public static splitDateRangeForTermedTemplateMonthly(start, end) {
        var startDate = moment(start);
        var endDate = moment(end);
        var dateRangeArray = [];
        /**
         * if start date and end date are in same month
         */
        if (endDate.diff(startDate, "month") <= 0) {

            dateRangeArray.push({
                "startDate": startDate,
                "endDate": endDate,
                "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ELEVEN_MONTH_CYCLE.key
            });

        }
        /**
         * not in same month  
         */
        else if (endDate.diff(startDate, "month") > 0) {


            /**
             * if start date is first of month 
             */
            if (DateSplitterLib.isFirstOfMonth(startDate)) {
                /**
                * if end date is first of month 
                * if both then combination will be only 1 date range
                */
                if (DateSplitterLib.isFirstOfMonth(endDate)) {

                    dateRangeArray.push({
                        "startDate": startDate,
                        "endDate": endDate,
                        "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ANN_TERMED_ONE_TIME.key
                    });

                } else {
                    /**
                    * if end date is not first of month  but start date is
                    * then combination will be only 2 date range
                    */
                    endYear = endDate.format('YYYY');
                    endMonth = endDate.format('M');
                    let startOfUpperLimitMonth = moment([endYear, endMonth - 1]);
                    dateRangeArray.push({
                        "startDate": startDate,
                        "endDate": startOfUpperLimitMonth,
                        "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ELEVEN_MONTH_CYCLE.key
                    });
                    dateRangeArray.push(
                        {
                            "startDate": startOfUpperLimitMonth,
                            "endDate": endDate,
                            "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ANN_TERMED_ONE_TIME.key
                        })

                }
            }
            /**
            * if end date is first of month 
            */
            else if (DateSplitterLib.isFirstOfMonth(endDate)) {
                let endingIndex = endDate;
                /**
             * if startDate  is also first of month  
             * if both then combination will be only 1 date range
             */
                if (DateSplitterLib.isFirstOfMonth(startDate)) {
                    dateRangeArray.push({
                        "startDate": startDate,
                        "endDate": endingIndex,
                        "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ELEVEN_MONTH_CYCLE.key
                    });

                } else {
                    /**
                    * if startDate is not first of month  but end date is
                    * then combination will be only 2 date range
                    */
                    startYear = startDate.format('YYYY');
                    startMonth = startDate.format('M');
                    var endOfMonth = moment([startYear, startMonth - 1]).endOf('month');
                    dateRangeArray.push(
                        {
                            "startDate": startDate,
                            "endDate": endOfMonth,
                            "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ANN_TERMED_ONE_TIME.key
                        });

                    let startingIndex = endOfMonth;
                    dateRangeArray.push({
                        "startDate": startingIndex,
                        "endDate": endingIndex,
                        "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ELEVEN_MONTH_CYCLE.key

                    });



                }
            }
            /**
             * if both of them are not first of month then 
             * there will be three date combinations
             */
            else if (!DateSplitterLib.isFirstOfMonth(endDate)
                &&
                !DateSplitterLib.isFirstOfMonth(startDate)) {

                var startYear = startDate.format('YYYY');
                var startMonth = startDate.format('M');
                var endOfMonth = moment([startYear, startMonth - 1]).endOf('month');
                dateRangeArray.push(
                    {
                        "startDate": startDate,
                        "endDate": endOfMonth,
                        "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ANN_TERMED_ONE_TIME.key
                    });
                var endYear = endDate.format('YYYY');
                var endMonth = endDate.format('M');
                var startOfMonth = moment([endYear, endMonth - 1]);

                var numberOfMonths = moment(startOfMonth).diff(moment(endOfMonth), 'months', true);
                
                let billingScheduleId =
                    nlapiSearchRecord("billingschedule",
                        null,
                        [new nlobjSearchFilter("recurrencecount", null, "is", numberOfMonths),
                        new nlobjSearchFilter("name",null,"contains","Cyc")]);
                        let searchedBillingSchedule='';
                        if(!!billingScheduleId && billingScheduleId.length>0){
                            searchedBillingSchedule=billingScheduleId[0].getId();

                            let filteredObj=_.find(OpportunitySplittingAndParsingLib.BILLING_SCHEDULES,function(obj){
                                return obj.val==searchedBillingSchedule} 
                                );
                                if(!!filteredObj){
                                    searchedBillingSchedule=filteredObj.key;
                                }

                        }

                dateRangeArray.push(
                    {
                        "startDate": endOfMonth,
                        "endDate": startOfMonth,
                        "billSchedule":searchedBillingSchedule
                        //  OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ELEVEN_MONTH_CYCLE.key
                    });

                dateRangeArray.push(
                    {
                        "startDate": startOfMonth,
                        "endDate": endDate,
                        "billSchedule": OpportunitySplittingAndParsingLib.BILLING_SCHEDULES.ANN_TERMED_ONE_TIME.key
                    });

            }

        }

        return dateRangeArray;
    }

    /** 
     * check if first day of month
     */
    public static isFirstOfMonth(date) {
        var month = moment(date).month() + 1;
        var year = moment(date).year();
        var firstDayOfMonth = moment([year, month - 1]);
        var dateSpecificDay = moment(date);
        var isSame = moment(dateSpecificDay).isSame(firstDayOfMonth);
        return isSame;
    }


}