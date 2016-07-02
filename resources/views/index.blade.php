@extends('layouts.index')

@section('title', "Royan's")

@section('top-header')
    <div class="top-header container text-center">
    </div>
@endsection

@section('navbar')
        <nav id="navigation">
            <div class="container text-center">
                <ul class="nav navbar menu">
                    <?php
                        $navName = [
                            'Me',
                            'Quill',
                            'Shadow',
                            'Sound',
                        ]
                    ?>
                    @foreach ($navName as $n)
                        <li>
                            <a data-toggle="tab" href="#{{$n}}">{{$n}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
@endsection


@section('main')
    <div class="tab-content">
        <div id="Me" class="tab-pane fade in active">
            <div id="portrait">
            </div>
            <div id="person-info">
                <ul>
                    <li>姓名: 聆夜</li>
                    <li>性别: ♂</li>
                    <li>年龄: 18</li>
                    <li>毕业院校: 杭州联合应用文理工农法职业技术培训学院</li>
                    <li>职业: 搬砖工</li>
                    <li>地区: 阿拉伯联合酋长国 迪拜</li>
                    <li>爱好: 白衬衣, 腹肌撕裂者</li>
                    <li>厌恶: 昆虫, 作的女人 </li>

                </ul>
            </div>
        </div>
        <div id="Quill" class="tab-pane fade in">
            2
        </div>
        <div id="Shadow" class="tab-pane fade in">
            3
        </div>
        <div id="Sound" class="tab-pane fade in">
            4
        </div>
    </div>
@endsection



