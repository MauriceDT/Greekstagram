<?php

namespace App\Models;

class VoteModel extends Model
{
    // Name of the table
    protected $model = "vote";

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


    // public static function query()
    // {
    //     $query = "SELECT * FROM polls WHERE pollid='$pollid";
    // }

    public function __construct()
    {
        parent::__construct(
            $this->model,
            $this->limit,
            $this->protectedFields
        );
    }
}

new VoteModel;
