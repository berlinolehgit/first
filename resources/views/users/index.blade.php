@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="users-tables-group">
            @foreach($users as $user)
                <div class="table-users-row">
                    <div class="table-user">
                        <div class="table-header-blue clearfix">
                        <span class="right">
                            <a href="" class=" action" style="color: white">Редагувати користувача</a>
                            <a href="" class="action" style="color: white; padding-left: 20px;">Видалити</a>
                        </span>
                        </div>

                        <div class="tale-user-body clearfix">
                            <table class="user-details">
                                <tbody>
                                <tr>
                                    <td>Імя</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$user->email}}</td>
                                    <td style="font-weight: bold;"></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop