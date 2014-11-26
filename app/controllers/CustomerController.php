<?php

class CustomerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex() {
		  echo $id = Input::get('id');
		  return Customer::find($id);
	}
		
	public function getAll() {
		return Customer::all();
	}
	
	public function postIndex() {
		if (Input::has('first_name', 'last_name', 'email')) {
		$input = Input::all();
		if ($input['first_name'] == '' || $input['last_name'] == '' || $input['email'] == '') {
			return Response::make('You need to fill all of the input fields', 400);
		}
		$customer = new Customer;
		$customer->first_name = $input['first_name'];
		$customer->last_name = $input['last_name'];
		$customer->email = $input['email'];
		$customer->save();
		 
		return $customer;
	   } else {
			return Response::make('You need to fill all of the input fields', 400);
		}
	}
	public function deleteIndex() {
		$id = Input::get('id');
		$customer = Customer::find($id);
		$customer->delete();
			  
		return $id;
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		echo $id;
	}
	
	
    public function postProfile()
    {
        //
    }


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	public function missingMethod($parameters = array())
	{
		var_dump($parameters);
		echo "missingMethod";
	}


}
