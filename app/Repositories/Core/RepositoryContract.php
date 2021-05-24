<?php

namespace App\Repositories\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface RepositoryContract.
 *
 * Modified from: https://github.com/kylenoland/laravel-base-repository
 */
interface RepositoryContract
{
    public function all();

    public function count();

    public function deleteById($id);

    public function find($id);

    public function findOrFail($id);

    public function first();

    public function firstOrFail();

    public function get();

    public function save(array $data);

    public function create(array $data);

    public function update(Model $model, array $data);

    public function delete(Model $model);

    public function getById($id);

    public function getByColumn($item, $column, array $columns = ['*']);

    public function limit($limit);

    public function orderBy($column, $value);

    public function paginate($limit = 25, array $columns = ['*'], $pageName = 'page', $page = null);

    public function where($column, $value, $operator = '=');

    public function whereIn($column, $value);

    public function with($relations);
}
