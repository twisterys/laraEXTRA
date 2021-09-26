<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMissionRequest;
use App\Http\Requests\StoreMissionRequest;
use App\Http\Requests\UpdateMissionRequest;
use App\Models\Mission;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class MissionController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('mission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Mission::query()->select(sprintf('%s.*', (new Mission())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'mission_show';
                $editGate = 'mission_edit';
                $deleteGate = 'mission_delete';
                $crudRoutePart = 'missions';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('objet', function ($row) {
                return $row->objet ? $row->objet : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? Mission::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.missions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('mission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.missions.create');
    }

    public function store(StoreMissionRequest $request)
    {
        $mission = Mission::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $mission->id]);
        }

        return redirect()->route('admin.missions.index');
    }

    public function edit(Mission $mission)
    {
        abort_if(Gate::denies('mission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.missions.edit', compact('mission'));
    }

    public function update(UpdateMissionRequest $request, Mission $mission)
    {
        $mission->update($request->all());

        return redirect()->route('admin.missions.index');
    }

    public function show(Mission $mission)
    {
        abort_if(Gate::denies('mission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.missions.show', compact('mission'));
    }

    public function destroy(Mission $mission)
    {
        abort_if(Gate::denies('mission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mission->delete();

        return back();
    }

    public function massDestroy(MassDestroyMissionRequest $request)
    {
        Mission::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('mission_create') && Gate::denies('mission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Mission();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
