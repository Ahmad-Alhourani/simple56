<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTest2APIRequest;
use App\Http\Requests\API\UpdateTest2APIRequest;
use App\Models\Test2;
use App\Repositories\Backend\Test2Repository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class Test2APIController
 * @package App\Http\Controllers\API
 */
class Test2APIController extends Controller
{
    /** @var  Test2Repository */
    private $test2Repository;
    /** @var  Test2Model */
    private $test2Model;

    public function __construct(Test2Repository $test2Repo, Test2 $test2)
    {
        $this->test2Repository = $test2Repo->skipCache(true);
        $this->test2Model = $test2;
    }

    /**
     * Display a listing of the Test2.
     * GET|HEAD /test2s
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $test2s = $this->test2Repository->all();
        return response()->json([
            'data' => $test2s,
            'Test2s retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Test2 in storage.
     * POST /test2s
     *
     * @param CreateTest2APIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateTest2APIRequest $request)
    {
        $input = $request->all();
        $this->test2Repository->create($input);
        return response()->json(['Test2 saved successfully']);
    }

    /**
     * Display the specified Test2.
     * GET|HEAD /test2s/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Test2 $test2 */
        //   $test2 = $this->test2Repository->findByField('id',$id);
        $test2 = $this->test2Model->find($id);
        return response()->json([
            'data' => $test2,
            'Test2 retrieved successfully'
        ]);
    }

    /**
     * Update the specified Test2 in storage.
     * PUT/PATCH /test2s/{id}
     *
     * @param  int $id
     * @param UpdateTest2APIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateTest2APIRequest $request)
    {
        $input = $request->all();
        /** @var Test2 $test2 */
        $test2 = $this->test2Model->find($id);
        $test2 = $this->test2Repository->update($test2, $input);
        return response()->json(['Test2 updated successfully']);
    }

    /**
     * Remove the specified Test2 from storage.
     * DELETE /test2s/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Test2 $test2 */
        $test2 = $this->test2Model->find($id);
        $test2->delete();

        return response()->json('Test2 deleted successfully');
    }
}
