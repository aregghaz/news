@extends("layouts.admin")
@section('content')


    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE HEAD -->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>@lang('admin.addNewNews')</h1>
            </div>
            <!-- END PAGE TITLE -->

        </div>
        <!-- END PAGE HEAD -->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">@lang('admin.home')</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">@lang('admin.addNewNews')</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal form-row-seperated" action="{{ url('/admin/news') }}"
                      method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">@lang('admin.fillFields')</span>
                            </div>
                            <div class="actions btn-set">
                                <button class="btn btn-default btn-circle "><i class="fa fa-reply"></i> @lang('admin.reset')</button>
                                <button class="btn green-haze btn-circle"><i class="fa fa-check"></i> @lang('admin.save')</button>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">

                                    @foreach($lang as $key)
                                    <li class="{{ $key->name == 'am' ? 'active' : '' }}">
                                        <a href="#{{$key->name}}" data-toggle="tab">
                                            @lang("admin.$key->name") </a>
                                    </li>
                                    @endforeach

                                </ul>
                                <div class="tab-content no-space add-product-tab">
                                    @foreach($lang as $key)
                                    <div class="tab-pane {{ $key->name == 'am' ? 'active' : '' }}" id="{{$key->name}}">
                                        <div class="form-body">



                                                <div class="col-sm-12 mt20">
                                                    <label class="control-label">
                                                        @lang("admin.newsTitle$key->name")

                                                        <span class="required"> </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="{{ $key->name }}[title]" >
                                                </div>


                                            <div class="col-sm-12 mt20">
                                                <label class="control-label">
                                                    @lang("admin.newsDescription$key->name")
                                                    <span class="required"></span>
                                                </label>
                                                <textarea class="form-control" name="{{ $key->name }}[description]" ></textarea>
                                            </div>



                                        </div>
                                    </div>
                                    @endforeach

                                        <div class="col-sm-12 mt20">
                                            <label class="control-label">
                                                @lang("admin.newsSlug")
                                                <span class="required"> * </span>
                                            </label>
                                            <input class="form-control" name="slug" required/>
                                        </div>
                                        <div class="col-sm-12 mt20">
                                            <label class="control-label">
                                                @lang("admin.images")
                                                <span class="required"> * </span>
                                            </label>
                                            <input class="form-control" name="upload_file[]" type="file" multiple  required/>
                                        </div>


                                        <div class="col-sm-12 mt20">
                                            <label class="control-label" for="sel1">@lang('admin.category'):</label>
                                            <select class="table-group-action-input form-control"
                                                    id="sel1" name="category_id" required>
                                                <option value="">@lang('admin.selectCategory')</option>
                                                @if(isset($categories))
                                                    @foreach($categories as $value)
                                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-title">
                            <div class="actions btn-set">
                                <button class="btn btn-default btn-circle "><i class="fa fa-reply"></i> @lang('admin.reset')</button>
                                <button class="btn green-haze btn-circle"><i class="fa fa-check"></i> @lang('admin.save')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>



@endsection