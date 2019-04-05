@extends('layouts.main')
@section('content')
    <div class="container" style="padding-top: 20px">
        <div>
            <form method="post" action=" ">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col">
                        <label for="price">Імя</label>
                        <input type="text" class="form-control" name ="name" id="price" placeholder="ім'я" value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="price">Email</label>
                        <input type="text" class="form-control" name ="email" id="price" placeholder="email" value="">
                    </div>
                </div><br>
            <button type="submite" class="btn btn-primary">Опублікувати</button>
            </form>
        </div>
    </div>
@stop