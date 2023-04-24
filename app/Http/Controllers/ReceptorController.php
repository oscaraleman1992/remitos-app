<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateReceptorRequest;
use App\Http\Requests\UpdateReceptorRequest;
use App\Repositories\ReceptorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use PDF;

class ReceptorController extends AppBaseController
{
    /** @var  ProductoRepository */
    private $receptorRepository;

    public function __construct(ReceptorRepository $receptorRepo)
    {
        $this->receptorRepository = $receptorRepo;
    }

    /**
     * Display a listing of the Producto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $busqueda = $request->busqueda;

        $receptores = DB::table('receptores')
                    ->whereNull('deleted_at')
                    ->where('organismo', 'LIKE' , '%'.$busqueda.'%')
                    ->paginate(2);
        return view('receptores.index')
        ->with('receptores', $receptores);
}

    public function generatePDF()
    {
       
        $receptores = $this->receptorRepository->all();
        //$pdf= PDF::loadView('productos.pdf');
        $pdf = PDF::loadView('receptores.myPDF', ['receptores' =>$receptores]);
     //   $pdf->loadHTML('productos.pdf');
        //return $pdf->stream('test.pdf');
        $pdf->setPaper('a4', 'portrait');
        
        return $pdf->stream('codesolutionstuff.pdf');
       $dompdf= new Dompdf();
       $options=$dompdf->getOptions();
       $options->set(array('isRemoteEnabled' =>true));
       $dompdf->setOptions($options);
        // return view('productos.pdf', compact('productos'));
       
    }

    

    /**
     * Show the form for creating a new Producto.
     *
     * @return Response
     */
    public function create()
    {
        return view('receptores.create');
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param CreateProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateReceptorRequest $request)
    {
        $input = $request->all();

        $receptor = $this->receptorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/receptores.singular')]));

        return redirect(route('receptores.index'));
    }

    /**
     * Display the specified Producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $receptor = $this->receptorRepository->find($id);

        if (empty($receptor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/receptores.singular')]));

            return redirect(route('receptores.index'));
        }

        return view('receptores.show')->with('receptor', $receptor);
    }

    /**
     * Show the form for editing the specified Producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $receptor = $this->receptorRepository->find($id);

        if (empty($receptor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/receptores.singular')]));

            return redirect(route('receptores.index'));
        }

        return view('receptores.edit')->with('receptor', $receptor);
    }

    /**
     * Update the specified Producto in storage.
     *
     * @param int $id
     * @param UpdateProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReceptorRequest $request)
    {
        $receptor = $this->receptorRepository->find($id);

        if (empty($receptor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/receptores.singular')]));

            return redirect(route('receptores.index'));
        }

        $receptor = $this->receptorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/receptores.singular')]));

        return redirect(route('receptores.index'));
    }

    /**
     * Remove the specified Producto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $receptor = $this->receptorRepository->find($id);

        if (empty($receptor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/receptores.singular')]));

            return redirect(route('receptores.index'));
        }

        $this->receptorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/receptores.singular')]));

        return redirect(route('receptores.index'));
    }
}
