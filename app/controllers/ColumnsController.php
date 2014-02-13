<?php

class ColumnsController extends BaseController {

	/**
	 * Column Repository
	 *
	 * @var Column
	 */
	protected $column;

	public function __construct(Column $column)
	{
		$this->column = $column;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$columns = $this->column->all();

		return View::make('columns.index', compact('columns'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('columns.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Column::$rules);

		if ($validation->passes())
		{
			$this->column->create($input);

			return Redirect::route('columns.index');
		}

		return Redirect::route('columns.create')
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
		$column = $this->column->findOrFail($id);

		return View::make('columns.show', compact('column'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$column = $this->column->find($id);

		if (is_null($column))
		{
			return Redirect::route('columns.index');
		}

		return View::make('columns.edit', compact('column'));
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
		$validation = Validator::make($input, Column::$rules);

		if ($validation->passes())
		{
			$column = $this->column->find($id);
			$column->update($input);

			return Redirect::route('columns.show', $id);
		}

		return Redirect::route('columns.edit', $id)
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
		$this->column->find($id)->delete();

		return Redirect::route('columns.index');
	}

}
