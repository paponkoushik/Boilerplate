<?php

namespace App\Services\App\Dashboard;


use App\Services\App\AppService;
use Carbon\Carbon;

class EcommerceDashboardService extends AppService
{
    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function ecommerceDefaultInfo()
    {
        return [
            'topSectionData' => $this->topSectionData(),
            'middleSectionData' => $this->middleSectionData(),
            'bottomSectionData' => $this->bottomSectionData()
        ];
    }

    public function topSectionData()
    {
        return [
            ['label' => trans('default.today_s_sale'), 'number' => mt_rand(1000, 2000), 'icon' => 'sun'],
            ['label' => trans('default.today_s_profit'), 'number' => mt_rand(1000, 2000), 'icon' => 'message-circle'],
            ['label' => trans('default.today_s_sale'), 'number' => mt_rand(1000, 2000), 'icon' => 'layers']
        ];
    }

    public function middleSectionData()
    {
        return [
            ['label' => trans('default.total_products'), 'number' => mt_rand(4000, 6000)],
            ['label' => trans('default.total_purchases'), 'number' => mt_rand(70000, 80000)],
            ['label' => trans('default.total_sales'), 'number' => mt_rand(80000, 90000)],
            ['label' => trans('default.total_profits'), 'number' => mt_rand(10000, 15000)],
            ['label' => trans('default.total_suppliers'), 'number' => mt_rand(500, 800)],
            ['label' => trans('default.total_customers'), 'number' => mt_rand(1500, 2000)],
        ];
    }

    public function bottomSectionData()
    {
        return [
            ['label' => trans('default.products_arrival_rate'), 'number' => mt_rand(15, 100)],
            ['label' => trans('default.purchase_rate'), 'number' => mt_rand(15, 100)],
            ['label' => trans('default.sales_rate'), 'number' => mt_rand(15, 100)],
            ['label' => trans('default.profit_rate'), 'number' => mt_rand(15, 100)],
            ['label' => trans('default.supplier_rate'), 'number' => mt_rand(15, 100)],
            ['label' => trans('default.customer_rate'), 'number' => mt_rand(15, 100)],
        ];
    }

    public function businessOverview($to, $from, $filter)
    {
        $sales = 0;
        $profits = 0;
        $purchases = 0;

        $sale_count_list = [];
        $profit_count_list = [];
        $purchase_count_list = [];

        $chart_data = [];

        $range = [
            'to' => $to,
            'from' => $from
        ];

        $chart_elements = [
            'element1' => 'sales',
            'element2' => 'profits',
            'element3' => 'purchases'
        ];

        $sample = $this->service->getDemoData($chart_elements);


        $filterData = $this->service->doFilter($sample['data'], $range);


        foreach ($filterData as $item) {
            $sales_count = $sales + $item['sales'];
            $profits_count = $profits + $item['profits'];
            $purchase_count = $purchases + $item['purchases'];

            array_push($sale_count_list, $item['sales']);
            array_push($profit_count_list, $item['profits']);
            array_push($purchase_count_list, $item['purchases']);
        }

        $sales = [
            'title' => 'sales',
            'fill' => false,
            'borderWidth' => 1.5,
            'borderColor' => '#ff9700',
            'backgroundColor' => '#ff9700',
            'data' => $sale_count_list
        ];

        array_push($chart_data, $sales);

        $profits = [
            'title' => 'profits',
            'fill' => false,
            'borderWidth' => 1.5,
            'borderColor' => '#348cd4',
            'backgroundColor' => '#348cd4',
            'data' => $profit_count_list
        ];

        array_push($chart_data, $profits);

        $purchases = [
            'title' => 'purchases',
            'fill' => false,
            'borderWidth' => 1.5,
            'borderColor' => '#f7531e',
            'backgroundColor' => '#f7531e',
            'data' => $purchase_count_list
        ];

        array_push($chart_data, $purchases);


        $labels = $this->service->getLebelsForDashboardChart($filter, $to, $from);


        $chart_filter_options = $this->service->getAudienceFilterOptions();

        return [
            'salesCount' => $sales_count,
            'profitsCount' => $profits_count,
            'purchaseCount' => $purchase_count,
            'chartData' => $chart_data,
            'labels' => $labels,
            'chartFilterOptions' => $chart_filter_options
        ];
    }

    public function contactOverview($to, $from, $filter)
    {
        $customer = 0;
        $suppliers = 0;

        $customer_count_list = [];
        $supplier_count_list = [];

        $chart_data = [];

        $range = [
            'to' => $to,
            'from' => $from
        ];

        $chart_elements = [
            'element1' => 'customer',
            'element2' => 'suppliers',
        ];

        $sample = $this->service->getDemoData($chart_elements);

        $filter_data = $this->service->doFilter($sample['data'], $range);


        foreach ($filter_data as $item) {

            $customer_count = $customer + $item['customer'];
            $supplier_count = $suppliers + $item['suppliers'];

            array_push($customer_count_list, $item['customer']);
            array_push($supplier_count_list, $item['suppliers']);

        }

        $customer = [
            'title' => 'customer',
            'fill' => false,
            'borderWidth' => 1.5,
            'borderColor' => 'rgb(97, 177, 90)',
            'backgroundColor' => 'rgb(97, 177, 90)',
            'data' => $customer_count_list
        ];

        array_push($chart_data, $customer);

        $supplier = [
            'title' => 'supplier',
            'fill' => false,
            'borderWidth' => 1.5,
            'borderColor' => 'rgb(14, 73, 181)',
            'backgroundColor' => 'rgb(14, 73, 181)',
            'data' => $supplier_count_list
        ];

        array_push($chart_data, $supplier);

        return [
            'customerCount' => $customer_count,
            'supplierCount' => $supplier_count,
            'chartData' => $chart_data,
            'labels' => $this->service->getLebelsForDashboardChart($filter, $to, $from),
            'chartFilterOptions' => $this->service->getAudienceFilterOptions()];


    }

    public function teamOverview()
    {

        $bar_chart_labels = ['Support', 'Marketing', 'Sales Person', 'Delivery Boy'];

        $dataset = [
            [
                'label' => 'Dataset 1',
                'backgroundColor' => '#4466F2',
                'borderColor' => '#4466F2',
                'borderWidth' => 1,
                'data' => [500, 400, 450, 350, 450]
            ]
        ];
        return ['barChartLabels' => $bar_chart_labels, 'datasetsBarChart' => $dataset];
    }
}
