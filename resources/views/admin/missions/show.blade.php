@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.mission.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.missions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.id') }}
                        </th>
                        <td>
                            {{ $mission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.objet') }}
                        </th>
                        <td>
                            {{ $mission->objet }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.description') }}
                        </th>
                        <td>
                            {!! $mission->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.start_at') }}
                        </th>
                        <td>
                            {{ $mission->start_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.end_at') }}
                        </th>
                        <td>
                            {{ $mission->end_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Mission::STATUS_SELECT[$mission->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.missions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection