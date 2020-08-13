<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Título') }}</label>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                name="title" type="text" placeholder="{{ __('Título') }}" value="{{ $data->title ?? '', old('title') }}"
                required />
            @if ($errors->has('title'))
            <span id="email-error" class="error text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Descrição') }}</label>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('desc') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}"
                name="desc" type="text" placeholder="{{ __('Descrição') }}" value="{{$data->desc ?? '', old('desc') }}"
                required />
            @if ($errors->has('desc'))
            <span id="desc-error" class="error text-danger">{{ $errors->first('desc') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Imagem') }}</label>
    <div class="col-sm-10">
        <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="img" class="inputFileHidden">
            <div class="input-group{{ $errors->has('img') ? ' has-danger' : '' }}">
                <input type="text"
                    class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }} inputFileVisible"
                    placeholder="Image" value="{{$data->title ?? '', old('img')}}">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-fab btn-round btn-primary">
                        <i class="material-icons">attach_file</i>
                    </button>
                </span>
            </div>
            @if ($errors->has('img'))
            <span id="email-error"
                class="error text-danger">{{ $errors->first('img') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Conteúdo') }}</label>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
           <textarea name="content" id="content" required class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" cols="30" rows="10">
            {{ $data->content ?? '', old('content') }}
           </textarea>
            @if ($errors->has('content'))
            <span id="email-error" class="error text-danger">{{ $errors->first('content') }}</span>
            @endif
        </div>
    </div>
</div>