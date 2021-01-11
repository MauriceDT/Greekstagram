<?php

namespace App\Models;

class AllGodsModel extends Model
{
    // Name of the table
    protected $model = "god";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
        'created_by',
        'created'
    ];

    public function __construct()
    {
        parent::__construct(
            $this->model,
            $this->limit,
            $this->protectedFields
        );
    }
}

new AllGodsModel;
