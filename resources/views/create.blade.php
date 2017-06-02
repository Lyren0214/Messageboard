@extends('common.layouts')

@section('style')
    <style>
    .form {
    width:80%;
    position: relative;
    margin: auto;
    top:20px;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: auto;
    }
    </style>
    @stop

@section('content')
    <main class="docs-wrapper container">
        <div class="row">
            <article class="col-md-8 col-md-push-2 markdown-body" id="docs-content">
                <h1>今晚月亮很美</h1>
                <div class="form">
                    <form class="form-group" method="post" action="{{ url('/save') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <label for="Name">昵称</label>
                            <input type="text" name="Messageboard[name]" class="form-control" id="Name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="Sex">性别</label> <br />
                            <label class="checkbox-inline">
                                <input type="radio" name="Messageboard[sex]" id="Sex" value="1"> 男
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="Messageboard[sex]" id="Sex" value="2"> 女
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="Messageboard[sex]" id="Sex" value="0"> 未知
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="School">学校</label>
                            <input type="text" name="Messageboard[school]" class="form-control" id="School" placeholder="School">
                        </div>
                        <div class="form-group">
                            <label for="Phonenum">电话号码</label>
                            <input type="text" name="Messageboard[phonenum]" class="form-control" id="Phonenum" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label for="Message">你想说：</label>
                            <textarea class="form-control" name="Messageboard[message]" id="Message" placeholder="What I want to tell you" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default" style="float:right;">提交</button>
                    </form>
                </div>
            </article>
        </div>
    </main>
@stop