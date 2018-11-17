<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
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
        $expense->title = $request->title;
        $expense->description = $request->description;
        $expense->price = $request->price;
        $expense->save();
        return true;
    }

    public static function deleteItemRow($id)
    {
        $expense = self::find($id);
        return self::deleteItem($expense);
    }
}
