<?php

class BoardsController extends BaseController {

	/**
	 * Board Repository
	 *
	 * @var Board
	 */
	protected $board;

	public function __construct(Board $board)
	{
		$this->board = $board;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$boards = $this->board->all();

		return View::make('boards.index', compact('boards'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('boards.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Board::$rules);

		if ($validation->passes())
		{
			$this->board->create($input);

			return Redirect::route('boards.index');
		}

		return Redirect::route('boards.create')
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
		$board = $this->board->findOrFail($id);

		return View::make('boards.show', compact('board'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$board = $this->board->find($id);

		if (is_null($board))
		{
			return Redirect::route('boards.index');
		}

		return View::make('boards.edit', compact('board'));
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
		$validation = Validator::make($input, Board::$rules);

		if ($validation->passes())
		{
			$board = $this->board->find($id);
			$board->update($input);

			return Redirect::route('boards.show', $id);
		}

		return Redirect::route('boards.edit', $id)
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
		$this->board->find($id)->delete();

		return Redirect::route('boards.index');
	}

}
