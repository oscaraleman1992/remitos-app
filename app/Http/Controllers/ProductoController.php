<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Repositories\ProductoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Receptor;
use Illuminate\Http\Request;
use Flash;
use Response;
use PDF;

class ProductoController extends AppBaseController
{
    /** @var  ProductoRepository */
    private $productoRepository;

    public function __construct(ProductoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
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

        $productos = DB::table('productos')
                    ->whereNull('deleted_at')
                    ->where('marca', 'LIKE' , '%'.$busqueda.'%')
                    ->paginate(2);
        
        return view('productos.index')
            ->with('productos', $productos);
    }



    

    /**
     * Show the form for creating a new Producto.
     *
     * @return Response
     */
    public function create()
    {
        $producto=new Producto();
        $receptores= Receptor::pluck('name ','id');
        return view('receptores.create', compact('producto','receptores'));
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param CreateProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateProductoRequest $request)
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/productos.singular')]));

        return redirect(route('productos.index'));
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
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productos.singular')]));

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('producto', $producto);
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
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productos.singular')]));

            return redirect(route('productos.index'));
        }

        return view('productos.edit')->with('producto', $producto);
    }

    /**
     * Update the specified Producto in storage.
     *
     * @param int $id
     * @param UpdateProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productos.singular')]));

            return redirect(route('productos.index'));
        }

        $producto = $this->productoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/productos.singular')]));

        return redirect(route('productos.index'));
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
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productos.singular')]));

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/productos.singular')]));

        return redirect(route('productos.index'));
    }
}
