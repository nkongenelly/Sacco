<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\NextOfKin;

use App\MemberDocument;

use App\Member;

use App\MemberDocumentType;

use Auth;

class MemberDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberDocuments = MemberDocument::all();
        return view('memberDocuments.index', compact('memberDocuments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $memberdocumenttypes = MemberDocumentType::all();
        $member = Member::find($id);
        return view('memberDocuments.create', compact('member','memberdocumenttypes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'document_name'=>'required'
        ]);
        MemberDocument::create(request([
            'member_id',
            'document_name',
            'document_type_id',
            'created_by' => Auth::user()->id,
        ]));
        return redirect('/documents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $memberDocument = MemberDocument::find($id);
        return view('memberDocuments.edit', compact('memberDocument'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate(request(),[
            'document_name'=>'required'
        ]);
        MemberDocument::where('id', $id)->update(request([
            'member_id',
            'document_name',
            'document_type_id',
            'created_by' => Auth::user()->id,
        ]));
        return redirect('/documents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        MemberDocument::where('id', $id) ->update([
            'deleted' => 1, 'deleted_on' => date('Y-m-d H:i:s'), 'deleted_by' => Auth::user()->id
        ]);
        return redirect('/documents');


    }
}
