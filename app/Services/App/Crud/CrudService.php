<?php


namespace App\Services\App\Crud;

use App\Models\App\Crud\Crud;
use App\Services\App\AppService;

class CrudService extends AppService
{
    public function __construct(Crud $crud)
    {
        $this->model = $crud;
    }

    /**
     * Get only name from Crud model
     * @return \Illuminate\Support\Collection
     */
    public function getName()
    {
        return $this->model->select('name')->get();
    }

    /**
     * Update Crud service
     * @param Crud $crud
     * @return Crud
     */
    public function update(Crud $crud)
    {
        $crud->fill(request()->all());

        $this->model = $crud;

        $crud->save();

        return $crud;
    }

    /**
     * Delete Crud service
     * @param Crud $crud
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Crud $crud)
    {
        return $crud->delete();
    }
}
