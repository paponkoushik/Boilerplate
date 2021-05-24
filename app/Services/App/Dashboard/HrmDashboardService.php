<?php

namespace App\Services\App\Dashboard;


use App\Helpers\App\Traits\DashboardHelper;
use App\Services\App\AppService;

class HrmDashboardService extends AppService
{
    use DashboardHelper;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function basicData()
    {
        return [
            'topSection_data' => $this->topSectionData(),
            'middleSectionData' => $this->middleSectionData() ];
    }

    public function topSectionData()
    {
        return
            [
                ['label' => trans('default.total_employee'), 'number' => mt_rand(1000, 2000), 'icon' => 'users'],
                ['label' => trans('default.total_punched_in'), 'number' => mt_rand(1000, 2000), 'icon' => 'log-in'],
                ['label' => trans('default.total_on_leave'), 'number' => mt_rand(1000, 2000), 'icon' => 'calendar'],
                ['label' => trans('default.total_missing'), 'number' => mt_rand(1000, 2000), 'icon' => 'user-x']
            ];
    }

    public function middleSectionData()
    {
        return
            [
                ['label' => trans('default.total_projects'), 'number' => mt_rand(1000, 2000), 'icon' => 'file-text'],
                ['label' => trans('default.running_projects'), 'number' => mt_rand(1000, 2000), 'icon' => 'airplay'],
                ['label' => trans('default.total_vacancy'), 'number' => mt_rand(1000, 2000), 'icon' => 'users']
            ];
    }

    public function projectOverview($to, $from, $filter)
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

        $sample = $this->service->getDemoData($chart_elements);
        $filter_data = $this->service->doFilter($sample['data'], $range);


        foreach ($filter_data as $item) {

            $users_count = $users + $item['users'];
            $visitors_count = $visitors + $item['visitors'];
            array_push($users_count_list, $item['users']);
            array_push($visitors_count_list, $item['visitors']);
        }


        $user = [
            'title' => 'users',
            'pointRadius' => 0,
            'borderWidth' => 0,
            'borderColor' => 'rgba(81, 194, 213, 0.7)',
            'backgroundColor' => 'rgba(81, 194, 213, 0.7)',
            'data' => $users_count_list
        ];

        array_push($chart_data, $user);

        $visitors = [
            'title' => 'visitors',
            'pointRadius' => 0,
            'borderWidth' => 0,
            'borderColor' => 'rgba(235, 89, 110, 0.7)',
            'backgroundColor' => 'rgba(235, 89, 110, 0.7)',
            'data' => $visitors_count_list
        ];

        array_push($chart_data, $visitors);

        return [
            'users' => $users_count,
            'visitors' => $visitors_count,
            'chartData' => $chart_data,
            'labels' => $this->service->getLebelsForDashboardChart($filter, $to, $from),
            'chartFilterOptions' => $this->service->getAudienceFilterOptions() ];

    }

    public function yearlyHoliday()
    {
        /* generates an array which should contain N number of values , here N = 4, and sum of this array elements will always be 100 */
        $random_array = $this->generateRandomValuesSumHundred(4);


        $labels = [trans('default.public_holiday'), trans('default.bank_holiday'), trans('default.national_holiday'), trans('default.govt_holiday')];

        /* pie chart value */
        $data_set = [
            [

                'borderWidth' => 0,
                'backgroundColor' => [
                    '#ff9801',
                    '#4466F2',
                    '#348cd4',
                    '#f75320'
                ],
                'data' => $random_array
            ]
        ];

        /* doughnut chart details section with respect to doughnut chart values */
        $chart_element = [];

        foreach ($random_array as $index => $item) {

            $test = [
                'key' => $labels[$index],
                'value' => $item,
                'background_color' => 'background-color: ' . $data_set[0]['backgroundColor'][$index] . ';',
                'color' => 'color: ' . $data_set[0]['backgroundColor'][$index] . ';'
            ];

            array_push($chart_element, $test);
        }

        return ['labels' => $labels, 'dataSet' => $data_set, 'chartElement' => $chart_element];

    }

    public function employeeOverview($filter)
    {
        if ($filter == 'by_department') {
            return $this->getByDepartment();
        } else {
            return $this->getByTeams();
        }
    }

    public function getByDepartment()
    {
        $filters = [
            ['id' => 'by_department', 'value' => trans('default.by_department')],
            ['id' => 'by_teams', 'value' => trans('default.by_teams')]
        ];

        $labels = [
            trans('default.general'),
            trans('default.purchase'),
            trans('default.sales'),
            trans('default.account'),
            trans('default.production'),
            trans('default.qa')
        ];

        $data_set = [
            [
                'barPercentage' => 0.5,
                'barThickness' => 15,
                'borderWidth' => 1,
                'borderColor' => ['#5a86f1', '#5bc5d5', '#eb779e', '#46cc97', '#368cd5', '#f5460f'],
                'backgroundColor' => ['#5a86f1', '#5bc5d5', '#eb779e', '#46cc97', '#368cd5', '#f5460f', '#de6264', '#c1514d'],
                'data' => [mt_rand(350, 500), mt_rand(350, 500), mt_rand(350, 500), mt_rand(350, 500), mt_rand(350, 500), mt_rand(350, 500)]
            ]
        ];

        return ['labels' => $labels, 'dataSet' => $data_set, 'filters' => $filters];
    }

    public function getByTeams()
    {

        $filters = [
            ['id' => 'by_department', 'value' => trans('default.by_department')],
            ['id' => 'by_teams', 'value' => trans('default.by_teams')]
        ];

        $labels = [
            trans('default.php'),
            trans('default.javascript'),
            trans('default.design'),
            trans('default.ui_ux'),
            trans('default.marketing')
        ];

        $data_set = [
            [
                'barPercentage' => 0.5,
                'barThickness' => 15,
                'borderWidth' => 1,
                'borderColor' => ['#5a86f1', '#5bc5d5', '#eb779e', '#46cc97', '#368cd5'],
                'backgroundColor' => ['#5a86f1', '#5bc5d5', '#eb779e', '#46cc97', '#368cd5'],
                'data' => [mt_rand(350, 500), mt_rand(350, 500), mt_rand(350, 500), mt_rand(350, 500), mt_rand(350, 500)]
            ]
        ];

        return ['labels' => $labels, 'dataSet' => $data_set, 'filters' => $filters];
    }
}
