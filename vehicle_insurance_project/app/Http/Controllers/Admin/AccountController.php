<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\Account\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use function League\Flysystem\delete;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accounts=account::all();
        return view('admin.account.index',compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        $accounts = new account();
        $accounts->customer_id = $request->customer_id;
        $accounts->user = $request->user;
        $accounts->password = $request->password;
        $accounts->save();
        return redirect()->route('admin.account.index')->with('success','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
        return view('admin.account.show',compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
        $accounts = Account::find($id);
        return view('admin.account.edit',[
            'account' =>$accounts]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //
        $account = Account::find($id);
        $account->customer_id = $request->customer_id;
        $account->user = $request->user;
        $account->password = $request->password;
        $account->save();
        return redirect()->route('admin.account.index')->with('success','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $account = Account::find($id);
        $account -> delete();
        return redirect()->route('admin.account.index')->with('success','success');
    }
}
