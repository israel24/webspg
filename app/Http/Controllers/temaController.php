<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatetemaRequest;
use App\Http\Requests\UpdatetemaRequest;
use App\Libraries\Repositories\temaRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class temaController extends AppBaseController
{

	/** @var  temaRepository */
	private $temaRepository;

	function __construct(temaRepository $temaRepo)
	{
		 parent::__construct();
		$this->temaRepository = $temaRepo;
	}

	/**
	 * Display a listing of the tema.
	 *
	 * @return Response
	 */
	public function index()
	{
		$temas = $this->temaRepository->paginate(10);

		return view('temas.index')
			->with('temas', $temas);
	}

	/**
	 * Show the form for creating a new tema.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('temas.create');
	}

	/**
	 * Store a newly created tema in storage.
	 *
	 * @param CreatetemaRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatetemaRequest $request)
	{
		$input = $request->all();

		$tema = $this->temaRepository->create($input);

		Flash::success('tema saved successfully.');

		return redirect(route('temas.index'));
	}

	/**
	 * Display the specified tema.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$tema = $this->temaRepository->find($id);

		if(empty($tema))
		{
			Flash::error('tema not found');

			return redirect(route('temas.index'));
		}

		return view('temas.show')->with('tema', $tema);
	}

	/**
	 * Show the form for editing the specified tema.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$tema = $this->temaRepository->find($id);

		if(empty($tema))
		{
			Flash::error('tema not found');

			return redirect(route('temas.index'));
		}

		return view('temas.edit')->with('tema', $tema);
	}

	/**
	 * Update the specified tema in storage.
	 *
	 * @param  int              $id
	 * @param UpdatetemaRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatetemaRequest $request)
	{
		$tema = $this->temaRepository->find($id);

		if(empty($tema))
		{
			Flash::error('tema not found');

			return redirect(route('temas.index'));
		}

		$this->temaRepository->updateRich($request->all(), $id);

		Flash::success('tema updated successfully.');

		return redirect(route('temas.index'));
	}

	/**
	 * Remove the specified tema from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$tema = $this->temaRepository->find($id);

		if(empty($tema))
		{
			Flash::error('tema not found');

			return redirect(route('temas.index'));
		}

		$this->temaRepository->delete($id);

		Flash::success('tema deleted successfully.');

		return redirect(route('temas.index'));
	}
}
