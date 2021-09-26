<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreMissionRequest;
use App\Http\Requests\UpdateMissionRequest;
use App\Http\Resources\Admin\MissionResource;
use App\Models\Mission;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MissionApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('mission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MissionResource(Mission::all());
    }

    public function store(StoreMissionRequest $request)
    {
        $mission = Mission::create($request->all());

        return (new MissionResource($mission))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Mission $mission)
    {
        abort_if(Gate::denies('mission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MissionResource($mission);
    }

    public function update(UpdateMissionRequest $request, Mission $mission)
    {
        $mission->update($request->all());

        return (new MissionResource($mission))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Mission $mission)
    {
        abort_if(Gate::denies('mission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mission->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
