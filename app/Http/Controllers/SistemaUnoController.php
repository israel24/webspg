<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSistemaUnoRequest;
use App\Http\Requests\UpdateSistemaUnoRequest;
use App\Libraries\Repositories\SistemaUnoRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;


class SistemaUnoController extends AppBaseController
{

	/** @var  SistemaUnoRepository */
	private $sistemaUnoRepository;
	
	function __construct(SistemaUnoRepository $sistemaUnoRepo)
	{
		parent::__construct();
		$this->sistemaUnoRepository = $sistemaUnoRepo;
	}


	/**
	 * Display a listing of the SistemaUno.
	 *
	 * @return Response
	 */

	public function index()
	{
		$sistemaUnos = $this->sistemaUnoRepository->paginate(10);

		return view('sistemaUnos.index')
			->with('sistemaUnos', $sistemaUnos);
	}

	public function indexSistema()
	{
		
		return view('welcome');
	}

	public function indexHome()
	{
		
		return view('home');
	}

	public function indexOrganigrama()
	{
		
		return view('organigrama');
	}

	/**
	 * Show the form for creating a new SistemaUno.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('sistemaUnos.create');
	}

	/**
	 * Store a newly created SistemaUno in storage.
	 *
	 * @param CreateSistemaUnoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSistemaUnoRequest $request)
	{
		$input = $request->all();

		$sistemaUno = $this->sistemaUnoRepository->create($input);

		Flash::success('SistemaUno saved successfully.');

		return redirect(route('sistemaUnos.index'));
	}

	/**
	 * Display the specified SistemaUno.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$sistemaUno = $this->sistemaUnoRepository->find($id);

		if(empty($sistemaUno))
		{
			Flash::error('SistemaUno not found');

			return redirect(route('sistemaUnos.index'));
		}

		return view('sistemaUnos.show')->with('sistemaUno', $sistemaUno);
	}

	/**
	 * Show the form for editing the specified SistemaUno.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$sistemaUno = $this->sistemaUnoRepository->find($id);

		if(empty($sistemaUno))
		{
			Flash::error('SistemaUno not found');

			return redirect(route('sistemaUnos.index'));
		}

		return view('sistemaUnos.edit')->with('sistemaUno', $sistemaUno);
	}

	/**
	 * Update the specified SistemaUno in storage.
	 *
	 * @param  int              $id
	 * @param UpdateSistemaUnoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateSistemaUnoRequest $request)
	{
		$sistemaUno = $this->sistemaUnoRepository->find($id);

		if(empty($sistemaUno))
		{
			Flash::error('SistemaUno not found');

			return redirect(route('sistemaUnos.index'));
		}

		$this->sistemaUnoRepository->updateRich($request->all(), $id);

		Flash::success('SistemaUno updated successfully.');

		return redirect(route('sistemaUnos.index'));
	}

	/**
	 * Remove the specified SistemaUno from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$sistemaUno = $this->sistemaUnoRepository->find($id);

		if(empty($sistemaUno))
		{
			Flash::error('SistemaUno not found');

			return redirect(route('sistemaUnos.index'));
		}

		$this->sistemaUnoRepository->delete($id);

		Flash::success('SistemaUno deleted successfully.');

		return redirect(route('sistemaUnos.index'));
	}
}
