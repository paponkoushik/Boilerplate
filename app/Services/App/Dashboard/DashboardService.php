<?php

namespace App\Services\App\Dashboard;

use App\Services\App\AppService;
use App\Services\Core\Setting\SettingService;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class DashboardService extends AppService
{
    public function getDefaultDashboardInfo()
    {
        $top_section_data = [
            ['label' => trans('default.ui_element'), 'number' => mt_rand(10, 75), 'icon' => 'trello'],
            ['label' => trans('default.form_fields'), 'number' => mt_rand(10, 75), 'icon' => 'sidebar'],
            ['label' => trans('default.types_of_filters'), 'number' => mt_rand(10, 75), 'icon' => 'layers'],
            ['label' => trans('default.dashboards'), 'number' => mt_rand(10, 75), 'icon' => 'pie-chart']
        ];

        $circle_top_section = [
            ['label' => trans('default.visitors_rate'), 'number' => mt_rand(10, 75)],
            ['label' => trans('default.users_rate'), 'number' => mt_rand(10, 75)],
        ];

        $circle_bottom_section = [
            ['label' => trans('default.subscription_rate'), 'number' => mt_rand(10, 75)],
            ['label' => trans('default.unsubscription_rate'), 'number' => mt_rand(10, 75)],

        ];

        $bottom_section_data = [
            ['label' => trans('default.total_projects'), 'number' => mt_rand(1000, 2000), 'icon' => 'flag'],
            ['label' => trans('default.running_projects'), 'number' => mt_rand(1000, 2000), 'icon' => 'package'],
            ['label' => trans('default.total_vacancy'), 'number' => mt_rand(1000, 2000), 'icon' => 'users'],
            ['label' => trans('default.total_applied'), 'number' => mt_rand(1000, 2000), 'icon' => 'file-plus']
        ];

        return [
            'topSectionData' => $top_section_data,
            'circleTopSection' => $circle_top_section,
            'circleBottomSection' => $circle_bottom_section,
            'bottomSectionData' => $bottom_section_data
        ];
    }

    public function getDateRange($filter)
    {

        $dt = Carbon::now();

        if ($filter == 'last_seven_days') {

            return ['range' => $this->lastSevenDaysRange($dt), 'filter' => $filter];

        } elseif ($filter == 'this_week') {

            return ['range' => $this->thisWeek($dt), 'filter' => $filter];

        } elseif ($filter == 'last_week') {

            return ['range' => $this->lastWeek($dt), 'filter' => $filter];

        } elseif ($filter == 'this_month') {

            return ['range' => $this->thisMonth($dt), 'filter' => $filter];

        } elseif ($filter == 'last_month') {

            return ['range' => $this->lastMonth(), 'filter' => $filter];

        } elseif ($filter == 'this_year') {

            return ['range' => $this->thisYear($dt), 'filter' => $filter];

        } elseif ($filter == 'total') {

            return ['range' => $this->total($dt), 'filter' => $filter];

        }
    }

    public function lastSevenDaysRange($dt)
    {
        $to = $dt->toDateString();
        $from = $dt->subDays(7)->toDateString();
        return ['to' => $to, 'from' => $from];
    }

    public function thisWeek($dt)
    {
        $to = $dt->startOfWeek()->toDateString();
        $from = $dt->endOfWeek()->toDateString();
        return ['to' => $to, 'from' => $from];
    }

    public function lastWeek($dt)
    {
        $to = $dt->toDateString();
        $from = $dt->subDays(7)->toDateString();

        return ['to' => $to, 'from' => $from];
    }

    public function thisMonth($dt)
    {

        $to = $dt->firstOfMonth()->toDateString();
        $from = $dt->lastOfMonth()->toDateString();

        return ['to' => $to, 'from' => $from];
    }

    public function lastMonth()
    {
        $to = new Carbon('first day of last month');
        $from = new Carbon('last day of last month');

        $to = $to->toDateString();
        $from = $from->toDateString();

        return ['to' => $to, 'from' => $from];
    }

    public function thisYear($dt)
    {
        $to = $dt->copy()->startOfYear()->toDateString();
        $from = $dt->copy()->endOfYear()->toDateString();

        return ['to' => $to, 'from' => $from];
    }

    public function total($dt)
    {
        $to = $dt->toDateString();
        $from = Carbon::parse('first day of January 2017')->toDateString();

        return ['to' => $to, 'from' => $from];
    }

    public function audienceOverviewChart($to, $from, $filter)
    {
        $users = 0;
        $visitors = 0;
        $users_count_list = [];
        $visitors_count_list = [];
        $chart_data = [];

        $range = [
            'to' => $to,
            'from' => $from
        ];

        $chart_elements = [
            'element1' => 'users',
            'element2' => 'visitors'
        ];

        $sample = $this->getDemoData($chart_elements);
        $filter_data = $this->doFilter($sample['data'], $range);


        foreach ($filter_data as $item) {

            $user_count = $users + $item['users'];
            $visitor_count = $visitors + $item['visitors'];
            array_push($users_count_list, $item['users']);
            array_push($visitors_count_list, $item['visitors']);
        }

        $user = [
            'title' => 'user',
            'fill' => false,
            'borderWidth' => 1.5,
            'borderColor' => '#f7531e',
            'backgroundColor' => '#f7531e',
            'data' => $users_count_list
        ];

        array_push($chart_data, $user);

        $visitor = [
            'title' => 'visitor',
            'fill' => false,
            'borderWidth' => 1.5,
            'borderColor' => '#368cd5',
            'backgroundColor' => '#368cd5',
            'data' => $visitors_count_list
        ];

        array_push($chart_data, $visitor);

        return [
            'user' => $user_count,
            'visitor' => $visitor_count,
            'chartData' => $chart_data,
            'labels' => $this->getLebelsForDashboardChart($filter, $to, $from),
            'chartFilterOptions' => $this->getAudienceFilterOptions()
        ];
    }

    public function getAudienceFilterOptions()
    {
        $chart_filter_options = [
            ['id' => 'this_week', 'value' => 'This week'],
            ['id' => 'last_week', 'value' => 'Last week'],
            ['id' => 'this_month', 'value' => 'This month'],
            ['id' => 'last_month', 'value' => 'Last month'],
            ['id' => 'this_year', 'value' => 'This year'],
            ['id' => 'total', 'value' => 'Total']
        ];
        return $chart_filter_options;
    }

    public function getLebelsForDashboardChart($filter, $to = null, $from = null)
    {
        if ($filter == 'last_seven_days' || $filter == 'this_week' || $filter == 'last_week') {

            $labels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        } elseif ($filter == 'this_month' || $filter == 'last_month') {
            $labels = $this->getDatesBetweenTowDates($to, $from);
        } else {
            $labels = ['Jan', 'Feb', 'Mar', 'App', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        }
        return $labels;

    }

    public function getDatesBetweenTowDates($to, $from)
    {
        $start = Carbon::parse($to);
        $end = Carbon::parse($from);
        $dateRange = CarbonPeriod::create($start, $end);

        $settings = resolve(SettingService::class)
            ->getFormattedSettings();

        $dates = [];
        foreach ($dateRange as $date) {
            $dates[] = $date->format($settings['date_format']);
        }
        return $dates;
    }

    public function doFilter($array, $range)
    {

        $this->range = $range;

        return array_filter($array, array($this, 'getFiltered'));
    }

    public function getFiltered($element)
    {
        $start_date = Carbon::createFromFormat('Y-m-d', $this->range['from']);
        $end_date = Carbon::createFromFormat('Y-m-d', $this->range['to']);
        $check_date = Carbon::createFromFormat('Y-m-d', $element['date']);

        return $check_date->between($start_date, $end_date);
    }

    public function browserOverviewChart($to, $from, $filter)
    {
        $chrome = 0;
        $firefox = 0;
        $opera = 0;
        $chrome_count_list = [];
        $firefox_count_list = [];
        $opera_count_list = [];
        $chart_data = [];

        $range = [
            'to' => $to,
            'from' => $from
        ];

        $chart_elements = [
            'element1' => 'chrome',
            'element2' => 'firefox',
            'element3' => 'opera'
        ];

        $sample = $this->getDemoData($chart_elements);

        $filter_data = $this->doFilter($sample['data'], $range);


        foreach ($filter_data as $item) {

            $chrome_count = $chrome + $item['chrome'];
            $firefox_count = $firefox + $item['firefox'];
            $opera_count = $opera + $item['opera'];
            array_push($chrome_count_list, $item['chrome']);
            array_push($firefox_count_list, $item['firefox']);
            array_push($opera_count_list, $item['opera']);
        }

        $chrome = [
            'title' => 'chrome',
            'pointRadius' => 0,
            'borderWidth' => 0,
            'borderColor' => 'rgba(3, 90, 166, 0.7)',
            'backgroundColor' => 'rgba(3, 90, 166, 0.7)',
            'data' => $chrome_count_list
        ];
        array_push($chart_data, $chrome);

        $firefox = [
            'title' => 'firefox',
            'pointRadius' => 0,
            'borderWidth' => 0,
            'borderColor' => 'rgba(64, 186, 213, 0.7)',
            'backgroundColor' => 'rgba(64, 186, 213, 0.7)',
            'data' => $firefox_count_list
        ];
        array_push($chart_data, $firefox);

        $opera = [
            'title' => 'opera',
            'pointRadius' => 0,
            'borderWidth' => 0,
            'borderColor' => 'rgba(41, 199, 172, 0.7)',
            'backgroundColor' => 'rgba(41, 199, 172, 0.7)',
            'data' => $opera_count_list
        ];
        array_push($chart_data, $opera);


        return [
            'chrome' => $chrome_count,
            'firefox' => $firefox_count,
            'opera' => $opera_count,
            'chartData' => $chart_data,
            'labels' => $this->getLebelsForDashboardChart($filter, $to, $from),
            'chartFilterOptions' => $this->getAudienceFilterOptions()
        ];
    }

    public function getDemoData($chart_elements)
    {
        //Sample data set

        $data = [];
        $temp = [];

        $previous = Carbon::now()->subDays(365);

        $first_day_of_last_year = "first day of January " . "" . $previous->year . "";

        $first_day = Carbon::parse($first_day_of_last_year);


        /* *
         *
         * This will generate a data set of date, subscriber, unsubscriber
         *
         * date range in data set contains date from last year((dynamic)) to 1 year after of current year(dynamic)
         * subscriber amount random
         * unsubscriber amount random
         * In total of 500 data
         *
         * each contain dynamic value
         * */

        for ($case = 1; $case < 500; $case++) {

            if ($case < 25) {
                $first_day = $first_day->addDays($case);
            } else {
                $first_day = $first_day->addDays(1);
            }

            $temp['date'] = $first_day->toDateString();

            foreach ($chart_elements as $key => $item) {
                $temp[$chart_elements[$key]] = mt_rand(30, 99);
            }

            array_push($data, $temp);
        }

        return [
            'data' => $data
        ];

    }
}
