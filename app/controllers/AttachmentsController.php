<?php

class AttachmentsController extends BaseController {

	/**
	 * Attachment Repository
	 *
	 * @var Attachment
	 */
	protected $attachment;

	public function __construct(Attachment $attachment)
	{
		$this->attachment = $attachment;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$attachments = $this->attachment->all();

		return View::make('attachments.index', compact('attachments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('attachments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Attachment::$rules);

		if ($validation->passes())
		{
			$this->attachment->create($input);

			return Redirect::route('attachments.index');
		}

		return Redirect::route('attachments.create')
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
		$attachment = $this->attachment->findOrFail($id);

		return View::make('attachments.show', compact('attachment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$attachment = $this->attachment->find($id);

		if (is_null($attachment))
		{
			return Redirect::route('attachments.index');
		}

		return View::make('attachments.edit', compact('attachment'));
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
		$validation = Validator::make($input, Attachment::$rules);

		if ($validation->passes())
		{
			$attachment = $this->attachment->find($id);
			$attachment->update($input);

			return Redirect::route('attachments.show', $id);
		}

		return Redirect::route('attachments.edit', $id)
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
		$this->attachment->find($id)->delete();

		return Redirect::route('attachments.index');
	}

}
