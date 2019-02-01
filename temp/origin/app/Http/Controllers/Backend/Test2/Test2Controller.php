<?php

namespace App\Http\Controllers\Backend\Test2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Test2\CreateTest2;
use App\Http\Requests\Backend\Test2\UpdateTest2;
use App\Repositories\Backend\Test2Repository;
use App\Events\Backend\Test2\Test2Created;
use App\Events\Backend\Test2\Test2Updated;
use App\Events\Backend\Test2\Test2Deleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Test2;

class Test2Controller extends Controller
{
    /** @var $test2Repository */
    private $test2Repository;

    public function __construct(Test2Repository $test2Repo)
    {
        $this->test2Repository = $test2Repo;
    }

    /**
     * Display a listing of the Test2.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->test2Repository->pushCriteria(new RequestCriteria($request));
        $data = $this->test2Repository->getPaginatedAndSortable(10);

        return view('backend.test2s.index')->with('test2s', $data);
    }

    /**
     * Show the form for creating a new Test2.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.test2s.create');
    }

    /**
     * Store a newly created Test2 in storage.
     *
     * @param CreateTest2 $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateTest2 $request)
    {
        $obj = $this->test2Repository->create(
            $request->only(["name", "l_name2", "l_name", "email", "sms"])
        );

        event(new Test2Created($obj));
        return redirect()
            ->route('admin.test2.index')
            ->withFlashSuccess(__('alerts.frontend.test2.saved'));
    }

    /**
     * Display the specified Test2.
     *
     * @param Test2 $test2
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Test2 $test2)
    {
        return view('backend.test2s.show')->with('test2', $test2);
    }

    /**
     * Show the form for editing the specified Test2.
     *
     * @param Test2 $test2
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Test2 $test2)
    {
        return view('backend.test2s.edit')->with('test2', $test2);
    }

    /**
     * Update the specified Test2 in storage.
     *
     * @param UpdateTest2 $request
     *
     * @param Test2 $test2
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateTest2 $request, Test2 $test2)
    {
        $obj = $this->test2Repository->update($request->all(), $test2);

        event(new Test2Updated($obj));
        return redirect()
            ->route('admin.test2.index')
            ->withFlashSuccess(__('alerts.frontend.test2.updated'));
    }

    /**
     * Remove the specified Test2 from storage.
     *
     * @param Test2 $test2
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Test2 $test2)
    {
        $obj = $this->test2Repository->delete($test2);
        event(new Test2Deleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.test2.deleted'));
    }
}
