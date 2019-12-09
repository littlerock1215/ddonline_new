<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    });
    </script>
</head>
<body>
<div class="row justify-content-md-center">
    <div class="col-3">
    <form class="p-4" id="page-signup-form" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <h4 class="m-t-0 m-b-4 text-xs-center font-weight-semibold">登入系統</h4>

        <fieldset class="page-signup-form-group form-group form-group-lg{{ $errors->has('username') ? ' has-error' : '' }}">
            <div class="page-signup-icon text-muted"><i class="ion-person"></i></div>
            <input id="username" type="text" class="page-signup-form-control form-control" placeholder="帳號" name="account" value="{{ old('username') }}" required autofocus>
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </fieldset>

        <fieldset class="page-signup-form-group form-group form-group-lg{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="page-signup-icon text-muted"><i class="ion-asterisk"></i></div>
            <input id="password" type="password" class="page-signup-form-control form-control" placeholder="密碼" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </fieldset>

        <button type="submit" class="btn btn-block btn-lg btn-primary m-t-3">登入</button>
    </form>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <h4>{{ $error }}</h4>
        @endforeach
    @endif
    </div>
</div>
</body>
</html>
