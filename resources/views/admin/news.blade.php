@extends("layouts.admin")
@section('content')
    <style>
        .tab-content{
            margin-bottom: 20px;
        }
    </style>
    <div class="page-content">
        <!-- BEGIN PAGE CONTENT-->
        <div class="col-md-xs-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue-hoki">
                <div class="portlet-title">
                    <div class="portlet-title box-header">
                        <h3 class="box-title">@lang('admin.news') </h3>
                    </div>
                </div>
                <?php $i = 1; ?>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="example1">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('admin.title')</th>
                            <th>@lang('admin.slug')</th>
                            <th>@lang('admin.category')</th>

                            <th class="action-th">@lang('admin.action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($news))
                            @foreach($news as $value)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->news->slug }}</td>
                                    <td>{{ $value->news->Categories->name }}</td>


                                    <td>
                                        <button class="btn btn-info btn-xs show_modal" id="edit" data-toggle="modal"
                                                data-target="#showModal"
                                                data-id="{{ $value->id  }}"
                                                data-newsId="{{ $value->news->id  }}"
                                        >
                                            <i class="fa fa-eye btn-info"></i>
                                        </button>
                                        <button class="btn btn-success btn-xs edit_modal" id="edit"
                                                data-toggle="modal" data-target="#editModal"
                                                data-id="{{ $value->id  }}"
                                                data-newsId="{{ $value->news->id  }}"
                                        >
                                            <i class="fa fa-edit btn-success"></i>
                                        </button>
                                        <form action="{{ route('news.destroy', $value->id  ) }}" method="POST" onclick='return confirm("@lang('admin.delete')")' style="display: inline-block;">
                                            @method('DELETE')
                                            @csrf
                                            <button style="border: none;background: none;padding: 0;">   <i class="fa fa-trash-o btn btn-danger btn-xs"></i></button>
                                        </form>


                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>


    <div class="page-content">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                    <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

        <div class="modal fade" id="showModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-12">
                            <h4><b>@lang('admin.title')</b>
                                <hr> <span id="news_title"> </span></h4>
                        </div>
                        <div class="col-sm-12">
                            <h4><b>@lang('admin.slug')</b><hr> <span id="news_slug"> </span></h4>
                        </div>
                        <div class="col-sm-12">
                            <h4><b>@lang('admin.category')</b> <hr> <span id="news_category"> </span></h4>
                        </div>
                        <div class="col-sm-12">
                            <h4><b>@lang('admin.description')</b> <hr> <span id="news_description"> </span></h4>
                        </div>
                        <div class="col-sm-12">
                            <h5><b>@lang('admin.images')</b></h5>
                            <div class="inner-product-details-left">
                                <div class="tab-content">

                                </div>
                                <hr>
                                <ul class="demo_img list-inline">

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('admin.close')</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editModal" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form action="" id="editeModal" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="hidden" name="news_id" id="news_id">
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="category">@lang('admin.title'):</label>
                                <input type="text" class="form-control" name="title" id="title"
                                       required/>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="category">@lang('admin.slug'):</label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                       required/>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="category">@lang('admin.description'):</label>
                                <textarea class="form-control" name="description" id="description" ></textarea>
                            </div>

                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="category_id_edit">@lang('admin.category'):</label>
                                <select class="form-control" id="categories" name="category">
                                    <option value="0">@lang('admin.selectCategory')</option>
                                    @if(isset($categories))
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" title="{{ $category->name }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>

                            </div>
                            <div class="myimg_edit col-xs-12">
                                <label for="icon">@lang('admin.images'): <button onclick="fileFunctionedit()" class="btn btn-success btn-sm">+</button></label>
                                <div id="forImages">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">@lang('admin.update')</button>
                                <button type="button" class="btn btn-default"
                                        data-dismiss="modal">@lang('admin.close')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>

    <script>
        $(function () {
            $("#example1").DataTable();

        });
    </script>

@endsection
