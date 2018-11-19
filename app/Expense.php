<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Expense extends Model
{
    protected $fillable = ['title','description','kilo','quantity','price'];

    protected $table = 'expenses';

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
