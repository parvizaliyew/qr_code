<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


  <ul class="nav nav-tabs">
    @foreach ($translations as $lang_key=>$lang)
    <li class="{{ $lang_key==0 ? 'active' : ' ' }}"><a data-toggle="tab" href="#{{ $lang->locale }}">{{ $lang->name }}</a></li>

    @endforeach
  </ul>
  <form action="{{ route('post_update',$post->id) }}" method="POST">
    @csrf
    <div class="tab-content">
            @foreach ($translations as $lang_key=>$lang)
                    <div id="{{ $lang->locale }}" class="tab-pane fade in {{ $lang_key==0 ? 'active' : ' '  }}">
                        <div class="mb-3">
                            <label>Title ({{ $lang->locale }})</label>
                            <input type="text" name="data[{{ $lang->locale }}][title]" value="{{ $post->translate($lang->locale)->title }}" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Description ({{ $lang->locale }})</label>
                            <textarea name="data[{{ $lang->locale }}][description]" class="form-control" rows="4">{{ $post->translate($lang->locale)->description }}</textarea>
                        </div>
                    </div>
            @endforeach
            <div class="mb-3">
                <label>Slug </label>
                <input type="text" name="slug" value="{{ $post->slug }}" class="form-control" />
            </div>
    </div>

    <button type="submit" class="btn btn-success">Gonder</button>
</form>

</body>
</html>
