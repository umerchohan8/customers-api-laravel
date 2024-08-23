<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {
        $query = Customer::query();

        if ($request->has('sortBy')) {
            $query->orderBy($request->input('sortBy'), $request->input('sortDirection', 'asc'));
        }

        return $query->paginate(30);
    }
}
