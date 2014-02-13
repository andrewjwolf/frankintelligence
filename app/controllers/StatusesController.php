<?php

class StatusesController extends BaseController {

	/**
	 * Status Repository
	 *
	 * @var Status
	 */
	protected $statuse;

	public function __construct(Status $statuse)
	{
		$this->statuse = $statuse;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statuses = $this->statuse->all();

		return View::make('statuses.index', compact('statuses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('statuses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Status::$rules);

		if ($validation->passes())
		{
			$this->statuse->create($input);

			return Redirect::route('statuses.index');
		}

		return Redirect::route('statuses.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$statuse = $this->statuse->findOrFail($id);

		return View::make('statuses.show', compact('statuse'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$statuse = $this->statuse->find($id);

		if (is_null($statuse))
		{
			return Redirect::route('statuses.index');
		}

		return View::make('statuses.edit', compact('statuse'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Status::$rules);

		if ($validation->passes())
		{
			$statuse = $this->statuse->find($id);
			$statuse->update($input);

			return Redirect::route('statuses.show', $id);
		}

		return Redirect::route('statuses.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->statuse->find($id)->delete();

		return Redirect::route('statuses.index');
	}

}
