<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class NoteRepository extends BaseRepository
{
    protected $table = "notes";

    public function create($data)
    {
        DB::table($this->table)->insert([
            'name' => $data->name,
            'category' => $data->category,
            'description' => $data->description
        ]);
    }
}
