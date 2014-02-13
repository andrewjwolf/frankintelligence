<?php

class RepositoriesController extends BaseController {

	/**
	 * Repository Repository
	 *
	 * @var Repository
	 */
	protected $repositorie;

	public function __construct(Repository $repositorie)
	{
		$this->repositorie = $repositorie;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$repositories = $this->repositorie->all();

		return View::make('repositories.index', compact('repositories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('repositories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Repository::$rules);

		if ($validation->passes())
		{
			$this->repositorie->create($input);

			return Redirect::route('repositories.index');
		}

		return Redirect::route('repositories.create')
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
		$repositorie = $this->repositorie->findOrFail($id);

		return View::make('repositories.show', compact('repositorie'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$repositorie = $this->repositorie->find($id);

		if (is_null($repositorie))
		{
			return Redirect::route('repositories.index');
		}

		return View::make('repositories.edit', compact('repositorie'));
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
		$validation = Validator::make($input, Repository::$rules);

		if ($validation->passes())
		{
			$repositorie = $this->repositorie->find($id);
			$repositorie->update($input);

			return Redirect::route('repositories.show', $id);
		}

		return Redirect::route('repositories.edit', $id)
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
		$this->repositorie->find($id)->delete();

		return Redirect::route('repositories.index');
	}

}
