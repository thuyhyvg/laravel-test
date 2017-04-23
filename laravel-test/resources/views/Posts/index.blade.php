@extends('layouts.master')
@section('title', 'Angular')
@section('content')
    <div class="container" ng-app="demoApp" ng-controller="PostsController">
        <h1>TodoApp index view</h1>
        <div class="row">
            <div class="col-md-4">
                <input type='text'>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <table class="table table-striped">
                    <tr ng-repeat='post in posts'>
                        <td><% post.title %></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@stop