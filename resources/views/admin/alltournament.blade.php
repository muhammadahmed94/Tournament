@extends('layouts.mainFrameAdmin')

@section('bodyContentAdmin')
    <body>
        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

                <div class=" ">
                    <table border="1">

                            <th>Tournament Name</th>
                            <th>Tournament id</th>
                           <tr>
                           @for ($i = 0; $i < 1; $i++)
                       
                            <td><?= $posts[$i]->tournamentname;?></td>
                            <td><?= $posts[$i]->tournamentid;?></td>
                            <td><a href="deletetournament/<?=$posts[0]->tournamentid;?>">Delete</a></tr>
                            @endfor
                    </table>
                </div>

            </div>
        </div>
    </body>
</html>
