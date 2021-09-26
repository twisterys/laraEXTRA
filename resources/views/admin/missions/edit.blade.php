@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.mission.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.missions.update", [$mission->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="objet">{{ trans('cruds.mission.fields.objet') }}</label>
                <input class="form-control {{ $errors->has('objet') ? 'is-invalid' : '' }}" type="text" name="objet" id="objet" value="{{ old('objet', $mission->objet) }}" required>
                @if($errors->has('objet'))
                    <div class="invalid-feedback">
                        {{ $errors->first('objet') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mission.fields.objet_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.mission.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $mission->description) !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mission.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_at">{{ trans('cruds.mission.fields.start_at') }}</label>
                <input class="form-control date {{ $errors->has('start_at') ? 'is-invalid' : '' }}" type="text" name="start_at" id="start_at" value="{{ old('start_at', $mission->start_at) }}">
                @if($errors->has('start_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mission.fields.start_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_at">{{ trans('cruds.mission.fields.end_at') }}</label>
                <input class="form-control date {{ $errors->has('end_at') ? 'is-invalid' : '' }}" type="text" name="end_at" id="end_at" value="{{ old('end_at', $mission->end_at) }}">
                @if($errors->has('end_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mission.fields.end_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.mission.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Mission::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $mission->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mission.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.missions.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $mission->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection