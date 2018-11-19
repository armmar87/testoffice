<?php

namespace App\Http\Controllers\Admin;

use App\Expense;
use App\Helper\DateHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\DataRangeRules;
use App\Http\Requests\StoreExpense;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = DateHelper::getThisStartEndDateMonth();
        $expenses = Expense::getStartEndDatesData($dates['monthStart'], $dates['monthEnd'])->get();
        return view('admin.expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpense $request)
    {
        Expense::storeExpense($request);
        return redirect('/expenses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        return view('admin.expenses.edit', compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        Expense::saveExpense($request, $expense);
        return redirect('/expenses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
    }

    public function getExpensesDataRange(DataRangeRules $request)
    {
        $expenses = Expense::getStartEndDatesData(new Carbon($request->start_date), new Carbon($request->end_date))->get();
        $view['content'] = view('admin.expenses.data-table', compact('expenses'))->render();
        return response()->json($view, 200);
    }
}
