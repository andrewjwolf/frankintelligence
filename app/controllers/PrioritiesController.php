<?php

class PrioritiesController extends BaseController {

	/**
	 * Priority Repository
	 *
	 * @var Priority
	 */
	protected $prioritie;

	public function __construct(Priority $prioritie)
	{
		$this->prioritie = $prioritie;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$priorities = $this->prioritie->all();

		return View::make('priorities.index', compact('priorities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('priorities.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Priority::$rules);

		if ($validation->passes())
		{
			$this->prioritie->create($input);

			return Redirect::route('priorities.index');
		}

		return Redirect::route('priorities.create')
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
		$prioritie = $this->prioritie->findOrFail($id);

		return View::make('priorities.show', compact('prioritie'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prioritie = $this->prioritie->find($id);

		if (is_null($prioritie))
		{
			return Redirect::route('priorities.index');
		}

		return View::make('priorities.edit', compact('prioritie'));
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
		$validation = Validator::make($input, Priority::$rules);

		if ($validation->passes())
		{
			$prioritie = $this->prioritie->find($id);
			$prioritie->update($input);

			return Redirect::route('priorities.show', $id);
		}

		return Redirect::route('priorities.edit', $id)
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
		$this->prioritie->find($id)->delete();

		return Redirect::route('priorities.index');
	}

}
