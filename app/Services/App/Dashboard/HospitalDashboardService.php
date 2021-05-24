<?php

namespace App\Services\App\Dashboard;


use App\Helpers\App\Traits\DashboardHelper;
use App\Services\App\AppService;

class HospitalDashboardService extends AppService
{
    use DashboardHelper;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function defaultData()
    {
        return
            [
                ['label' => trans('default.total_patients'), 'number' => mt_rand(2000, 4000), 'icon' => 'users'],
                ['label' => trans('default.available_staff'), 'number' => mt_rand(1000, 1500), 'icon' => 'users'],
                ['label' => trans('default.total_transport'), 'number' => mt_rand(5, 15), 'icon' => 'truck'],
                ['label' => trans('default.available_consultants'), 'number' => mt_rand(30, 50), 'icon' => 'user-check']
            ];
    }

    public function hospitalActivities($to, $from, $filter)
    {
        $consultations = 0;
        $patients = 0;
        $consultations_count_List = [];
        $patients_count_list = [];

        $chart_data = [];

        $range = [
            'to' => $to,
            'from' => $from
        ];

        $chartElements = [
            'element1' => 'consultations',
            'element2' => 'patients'
        ];

        $sample = $this->service->getDemoData($chartElements);
        $filter_data = $this->service->doFilter($sample['data'], $range);

        foreach ($filter_data as $item) {
            $consultations_count = $consultations + $item['consultations'];
            $patients_count = $patients + $item['patients'];
            array_push($consultations_count_List, $item['consultations']);
            array_push($patients_count_list, $item['patients']);
        }

        $consultation = [
            'title' => 'consultation',
            'pointRadius' => 0,
            'borderWidth' => 0,
            'borderColor' => 'rgba(240, 84, 84, 0.8)',
            'backgroundColor' => 'rgba(240, 84, 84, 0.8)',
            'data' => $consultations_count_List
        ];

        array_push($chart_data, $consultation);

        $patients = [
            'title' => 'patients',
            'pointRadius' => 0,
            'borderWidth' => 0,
            'borderColor' => 'rgba(14, 73, 181, 0.8)',
            'backgroundColor' => 'rgba(14, 73, 181, 0.8)',
            'data' => $patients_count_list
        ];

        array_push($chart_data, $patients);


        return [
            'consultation' => $consultations_count,
            'patients' => $patients_count,
            'chartData' => $chart_data,
            'labels' => $this->service->getLebelsForDashboardChart($filter, $to, $from),
            'chartFilterOptions' => $this->service->getAudienceFilterOptions()];


    }

    public function patientStatistics()
    {
        /* generates an array which should contain N number of values , here N = 3, and sum of this array elements will always be 100 */
        $random_array = $this->generateRandomValuesSumHundred(3);


        $labels = [trans('default.male'), trans('default.female'), trans('default.others')];

        /* pie chart value */
        $data_set = [
            [

                'borderWidth' => 0,
                'backgroundColor' => [
                    '#713bdb',
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

    public function doctorsList($request)
    {
        return [
            'req' => $request->all(),
            'data' => [
                [
                    'image' => 'https://images.unsplash.com/photo-1515775356328-191f2e02390e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Wedney Watson',
                    'email' => 'wedney@doctor.com',
                    'speciality' => 'Psychiatrist',
                    'status' => 'Available'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1588354349271-4b6d3fef4a31?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
                    'name' => 'Petey Cruiser',
                    'email' => 'petey@doctor.com',
                    'speciality' => 'Cardiologist',
                    'status' => 'Available'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1586297135537-94bc9ba060aa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
                    'name' => 'Anna Sthesia',
                    'email' => 'anna@doctor.com',
                    'speciality' => 'Dermatologist',
                    'status' => 'Unavailable'
                ],
                [
                    'image' => 'https://nationaltoday.com/wp-content/uploads/2019/03/national-doctors-day.jpg',
                    'name' => 'Paul Molive',
                    'email' => 'paul@doctor.com',
                    'speciality' => 'Physician',
                    'status' => 'Available'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1515775356328-191f2e02390e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
                    'name' => 'Gail Forcewind',
                    'email' => 'gail@doctor.com',
                    'speciality' => 'Surgeon',
                    'status' => 'Unavailable'
                ]
            ]
        ];

    }

    public function upComingAppointments($request)
    {
        return [
            'req' => $request->all(),
            'data' => [
                [
                    'image' => 'https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=812&q=80',
                    'name' => 'Wedney Watson',
                    'gender' => 'Male',
                    'disease' => 'Diabetes',
                    'age' => '25y'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1485893086445-ed75865251e0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'name' => 'Randolph Thill',
                    'gender' => 'Female',
                    'disease' => 'Flu',
                    'age' => '19y'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1484611941511-3628849e90f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
                    'name' => 'Daniell Stickley',
                    'gender' => 'Male',
                    'disease' => 'Cancer',
                    'age' => '83y'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1485893226355-9a1c32a0c81e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
                    'name' => 'Alta Osullivan',
                    'gender' => 'Male',
                    'disease' => 'Pneumonia',
                    'age' => '25y'
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1483995564125-85915c11dcfe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=852&q=80',
                    'name' => 'Betty Apgar',
                    'gender' => 'Male',
                    'disease' => 'Cardiac pain',
                    'age' => '40y'
                ]
            ]
        ];

    }

}
