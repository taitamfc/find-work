<?php

namespace Modules\AdminTaxonomy\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\AdminTaxonomy\app\Http\Requests\StoreAdminTaxonomyRequest;
use Illuminate\Http\Response;
use Modules\AdminTaxonomy\app\Models\AdminTaxonomy;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class AdminTaxonomyController extends Controller
{
    protected $view_path    = 'admintaxonomy::';
    protected $route_prefix = 'admintaxonomy.';
    protected $model        = AdminTaxonomy::class;

    public function index(Request $request)
    {
        try {
            $items = $this->model::getAdminItems($request);
            $params = [
                'route_prefix'  => $this->route_prefix,
                'model'         => $this->model,
                'items'         => $items
            ];
            return view($this->view_path.'index', $params);
        } catch (QueryException $e) {
            Log::error('Error in index method: ' . $e->getMessage());
            return redirect()->back()->with('error',  __('sys.get_items_error'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->view_path.'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminTaxonomyRequest $request): RedirectResponse
    {
        try {
            $data = $request->all();
            $this->model::create($data);
            return redirect()->route($this->route_prefix.'index')->with('success', __('sys.store_item_success'));
        } catch (QueryException $e) {
            Log::error('Error in store method: ' . $e->getMessage());
            return redirect()->back()->with('error', __('sys.item_not_found'));
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        try {
            $item = $this->model::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view($this->view_path.'show', $params);
        } catch (ModelNotFoundException $e) {
            Log::error('Item not found: ' . $e->getMessage());
            return redirect()->back()->with('error', __('sys.item_not_found'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $item = $this->model::findOrFail($id);
            $params = [
                'item' => $item
            ];
            return view($this->view_path.'edit', $params);
        } catch (ModelNotFoundException $e) {
            Log::error('Item not found: ' . $e->getMessage());
            return redirect()->back()->with('error', __('sys.item_not_found'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAdminTaxonomyRequest $request, $id): RedirectResponse
    {
        try {
            $item = $this->model::findOrFail($id);
            $data = $request->all();
            $item->update($data);
            return redirect()->route($this->route_prefix.'index')->with('success', __('sys.update_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error('Item not found: ' . $e->getMessage());
            return redirect()->back()->with('error', __('sys.item_not_found'));
        } catch (QueryException $e) {
            Log::error('Error in update method: ' . $e->getMessage());
            return redirect()->back()->with('error', __('sys.update_item_error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $item = $this->model::findOrFail($id);
            $item->delete();
            return redirect()->route($this->route_prefix.'index')->with('success', __('sys.destroy_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error('Item not found: ' . $e->getMessage());
            return redirect()->back()->with('error', __('sys.item_not_found'));
        } catch (QueryException $e) {
            Log::error('Error in destroy method: ' . $e->getMessage());
            return redirect()->back()->with('error', __('sys.destroy_item_error'));
        }
    }
}