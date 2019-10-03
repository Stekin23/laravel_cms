@extends('CMS.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>News <small>List</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 40%">News Title</th>
                                <th style="width: 10%">Created Date</th>
                                <th style="width: 10%">Updated Date</th>
                                <th style="width: 15%">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach($news as $new)
                            <tr>
                                <td style="width: 5%">{{$i}}</td>
                                <td style="width: 40%">
                                    <a>{{$new->title}}</a>
                                </td>
                                <td style="width: 10%">
                                    <small>{{$new->created_at}}</small>
                                </td>
                                <td style="width: 10%">
                                    <small>{{$new->updated_up}}</small>
                                </td>
                                <td style="width: 15%">
                                    <a href="{{route('CMS.news.edit', $new->id )}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="{{route('CMS.news.remove', $new->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            @php
                            $i=$i+1;
                            @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection