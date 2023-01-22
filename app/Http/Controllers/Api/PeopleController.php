<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\peoplerequest;
use App\Models\People;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
    
    public function index(): JsonResponse
    {
       return response()->json(people::all(), 200);
    }

    public function create(peoplerequest $request): JsonResponse
    {
        $people = people::create($request->all());
        return response()->json($people, 201);
    }
    
    public function show(people $people): JsonResponse
    {
        return response()->json($people, 200);
    }
    
    public function update(Request $request, people $people): JsonResponse
    {
       $people->update($request->all());
       return response()->json($people, 200); 
    }

    public function destroy(people $people): JsonResponse
    {
        $people->delete();
        return response()->json(null,204);
    }
}
