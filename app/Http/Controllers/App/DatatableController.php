<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class DatatableController extends Controller
{
    /**
     * @return basic datatable blade
     */
    public function showBasicDatatable()
    {
        return view('tables.basic-datatable');
    }

    /**
     * @return advande datatable blade
     */
    public function showAdvanceDatatable()
    {
        return view('tables.advance-datatable');
    }

    /**
     * @return responsive datatable blade
     */
    public function showResponsiveDatatable()
    {
        return view('tables.responsive-datatable');
    }

    /**
     * @return filter datatable blade
     */
    public function datatableWithFilter()
    {
        return view('tables.datatable-with-filter');
    }

    /**
     * @return paginate datatable blade
     */
    public function datatablePagination()
    {
        return view('tables.datatable-pagination');
    }

    /**
     * @return grid-view datatable blade
     */
    public function girdViewDataTable()
    {
        return view('tables.grid-view');
    }
}
