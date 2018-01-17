<?php

namespace App\Repositories;

use App\Models\Task;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TaskRepository
 * @package App\Repositories
 * @version January 17, 2018, 10:20 am UTC
 *
 * @method Task findWithoutFail($id, $columns = ['*'])
 * @method Task find($id, $columns = ['*'])
 * @method Task first($columns = ['*'])
*/
class TaskRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Task::class;
    }
}
