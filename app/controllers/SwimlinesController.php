<?php

class SwimlinesController extends BaseController {

	/**
	 * Swimline Repository
	 *
	 * @var Swimline
	 */
	protected $swimline;

	public function __construct(Swimline $swimline)
	{
		$this->swimline = $swimline;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$swimlines = $this->swimline->all();

		return View::make('swimlines.index', compact('swimlines'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('swimlines.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Swimline::$rules);

		if ($validation->passes())
		{
			$this->swimline->create($input);

			return Redirect::route('swimlines.index');
		}

		return Redirect::route('swimlines.create')
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
		$swimline = $this->swimline->findOrFail($id);

		return View::make('swimlines.show', compact('swimline'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$swimline = $this->swimline->find($id);

		if (is_null($swimline))
		{
			return Redirect::route('swimlines.index');
		}

		return View::make('swimlines.edit', compact('swimline'));
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
		$validation = Validator::make($input, Swimline::$rules);

		if ($validation->passes())
		{
			$swimline = $this->swimline->find($id);
			$swimline->update($input);

			return Redirect::route('swimlines.show', $id);
		}

		return Redirect::route('swimlines.edit', $id)
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
		$this->swimline->find($id)->delete();

		return Redirect::route('swimlines.index');
	}

}
