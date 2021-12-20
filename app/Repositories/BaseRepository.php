<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Exception;

class BaseRepository
{
    protected $table;

    public function getAll()
    {
        $data = DB::table($this->table)->get();
        return $data;
    }

    public function getById($id)
    {
        $data = DB::table($this->table)->where('id','=',$id)->get()->first();
        return $data;
    }

    public function deleteById($id)
    {
        try {
            DB::table($this->table)->where('id', $id)->delete();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}
