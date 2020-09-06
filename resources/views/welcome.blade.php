<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if($errors->any())
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif
            <div class="content">
              <form method="POST" action="{{url('/')}}">
                @csrf
                <input type="text" name="task" placeholder="Nome da tarefa">
                <input type="text" name="category" placeholder="Informe a categoria">
                <button type="submit">Salvar</button>
              </form>
            </div>
        </div>
        @if(session('success'))
          <p>{{ session('success')}} </p>
        @endif

        <div style="margin-top: 50px; border-top: 2px solid black;">
          @foreach($tasks as $task)
            <p style="color: black; size: 14px; text-decoration: {{ $task->status }}">
              {{ $task->task }}
            </p>
          @endforeach
        </div>
    </body>
</html>
