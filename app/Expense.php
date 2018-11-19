<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Builder;


class Expense extends Model
{
    protected $fillable = ['title','description','kilo','quantity','price'];

    protected $table = 'expenses';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('expenses', function (Builder $builder) {
            $builder->orderBy('created_at', 'desc');
        });
    }

    public static function getStartEndDatesData($from, $to)
    {
        return self::whereBetween('created_at', [$from, $to]);
    }

    public static function storeExpense($request)
    {
        $expense = new self();
        return self::saveExpense($request, $expense);
    }

    public static function updateExpense($request, $id)
    {
        $expense = self::find($id);
        return self::saveExpense($request, $expense);
    }

    public static function saveExpense($request, $expense)
    {
        $expense->fill($request->all());
        $expense->save();
        return true;
    }

}
