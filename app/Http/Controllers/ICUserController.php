<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repo\ICUserList;
use App\Repo\ICUserExport;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Helpers\JResponse;

class ICUserController extends Controller
{
    /**
     * \App\ICUser Model Object.
     *
     * @var icuser
     **/
    private $icuser;

    /**
     * Constructor.
     *
     * @param \App\ICUser $icuser
     **/
    public function __construct(\App\ICUser $icuser)
    {
        $this->icuser = $icuser;
    }

    public function manage(ICUserList $users)
    {
        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPath = LengthAwarePaginator::resolveCurrentPath();

        $allUsers = $users->all();
        unset($allUsers[0]);
        $collection = new Collection($allUsers);
        $currentPageSearchResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $allUsersPagination = new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);
        $allUsersPagination->setPath($currentPath);

        return view('icusers.manage', compact('allUsersPagination'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ICUserList $users)
    {
        return JResponse::data($users->all()->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('icusers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ICUserList $users, ICUserExport $icuUserExport)
    {
        $store = $users->all()->toArray();

        return $this->icuser->saveICUser($request->all(), $store, $icuUserExport);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ICUserList $users, ICUserExport $icuUserExport)
    {
        $store = $users->all()->toArray();
        $removed_user = $store[$id][""]." ( ".$store[$id][3]." ) ";
        unset($store[$id]);

        return $this->icuser->deleteICUser($store, $icuUserExport,$removed_user);
    }
}
