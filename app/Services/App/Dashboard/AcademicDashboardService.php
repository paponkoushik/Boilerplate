<?php

namespace App\Services\App\Dashboard;

use App\Helpers\App\Traits\DashboardHelper;
use App\Services\App\AppService;

class AcademicDashboardService extends AppService
{
    use DashboardHelper;

    public function defaultData()
    {
        $data_set = [
            ['label' => trans('default.total_student'), 'value' => mt_rand(5000, 7000), 'icon' => 'users'],
            ['label' => trans('default.total_courses'), 'value' => mt_rand(78000, 80000), 'icon' => 'book'],
            ['label' => trans('default.total_enrollment'), 'value' => mt_rand(250000, 300000), 'icon' => 'user-plus'],
            ['label' => trans('default.total_lectures'), 'value' => mt_rand(10000, 20000), 'icon' => 'book-open'],
        ];

        return ['dataSet' => $data_set];
    }

    public function schoolOverview()
    {
        /* generates an array which should contain N number of values , here N = 4, and sum of this array elements will always be 100 */
        $random_array = $this->generateRandomValuesSumHundred(4);

        $labels = [
            trans('default.management'),
            trans('default.life_science'),
            trans('default.engineering'),
            trans('default.arts_and_humanities')
        ];

        /* doughnut chart value */
        $data_set = [
            [
                'borderWidth' => 0,
                'backgroundColor' => ['#ff9801', '#4466F2', '#348cd4', '#f75320'],
                'data' => $random_array
            ]
        ];

        /* doughnut chart details section with respect to doughnut chart values */
        $chart_element = [];

        foreach ($random_array as $index => $item) {
            $element = [
                'key' => $labels[$index],
                'value' => $item,
                'background_color' => 'background-color: ' . $data_set[0]['backgroundColor'][$index] . ';',
                'color' => 'color: ' . $data_set[0]['backgroundColor'][$index] . ';'
            ];

            array_push($chart_element, $element);
        }

        return ['labels' => $labels, 'dataSet' => $data_set, 'chartElement' => $chart_element];

    }

    public function instructorStudentOverview()
    {
        $labels = ['John', 'Jonathan', 'Devol', 'Chiris', 'Andrew', 'Newmano', 'Andy'];

        $data_set = [
            [
                'barPercentage' => 0.5,
                'barThickness' => 30,
                'borderWidth' => 1,
                'borderColor' => ['#5a86f1', '#5bc5d5', '#eb779e', '#46cc97', '#368cd5', '#f5460f', '#de6264'],
                'backgroundColor' => ['#5a86f1', '#5bc5d5', '#eb779e', '#46cc97', '#368cd5', '#f5460f', '#de6264'],
                'data' => [mt_rand(300, 500), mt_rand(300, 500), mt_rand(300, 500), mt_rand(300, 500), mt_rand(300, 500), mt_rand(300, 500), mt_rand(300, 500)]
            ]
        ];

        return ['labels' => $labels, 'dataSet' => $data_set];
    }

    public function availableCourseList($request)
    {

        return [
            'req' => $request->all(),
            'data' => [
                [
                    'image' => '/images/dashboard/academy/laravel.png',
                    'name' => 'Laravel',
                    'instructor-name' => 'Raylene Pando',
                    'status' => 'Basic'
                ],
                [
                    'image' => '/images/dashboard/academy/vue.png',
                    'name' => 'Vuejs',
                    'instructor-name' => 'Daniell Stickley',
                    'status' => 'Special'
                ],
                [
                    'image' => '/images/dashboard/academy/node-js.jpg',
                    'name' => 'Nodejs',
                    'instructor-name' => 'Gerry Willis',
                    'status' => 'Basic'
                ],
                [
                    'image' => '/images/dashboard/academy/python.jpg',
                    'name' => 'Python',
                    'instructor-name' => 'Alta Osullivan',
                    'status' => 'Basic'
                ],
                [
                    'image' => '/images/dashboard/academy/php.png',
                    'name' => 'Php',
                    'instructor-name' => 'Betty Apgar',
                    'status' => 'Special'
                ]
            ]
        ];

    }

    public function studentOverview($filter)
    {
        if ($filter == 'by_semester') {

            return $this->getBySemester();


        } else {

            return $this->getBySchool();

        }

    }

    public function getBySemester()
    {
        $filters = [
            ['id' => 'by_school', 'value' => trans('default.by_school')],
            ['id' => 'by_semester', 'value' => trans('default.by_semester')]
        ];

        $labels = [
            trans('default.semester_1'), trans('default.semester_2'), trans('default.semester_3'), trans('default.semester_4'), trans('default.semester_5'), trans('default.semester_6')
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

    public function getBySchool()
    {

        $filters = [
            ['id' => 'by_school', 'value' => 'By school'],
            ['id' => 'by_semester', 'value' => 'By semester']
        ];

        $labels = [
            trans('default.history'),
            trans('default.science'),
            trans('default.arts'),
            trans('default.geography'),
            trans('default.medicine')
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