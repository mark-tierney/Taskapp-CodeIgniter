<?php

namespace App\Models;

class TaskModel extends \CodeIgniter\Model
{
    protected $table = 'task';

    protected $allowedFields = ['description'];

    protected $returnType = 'App\Entites\Task';

    protected $useTimestamps = true;

    protected $validationRules = [
        'description' => 'required|min_length[10]',
    ];

    protected $validationMessages = [
        'description' => [
            'required' => 'Description must be at least 10 characters.'
        ]
    ];  
}