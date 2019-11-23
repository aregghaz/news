@extends("layouts.admin")
@section('content')
    <style>
        .file-upload {
            background-color: #ffffff;
            margin: 0 auto;
        }

        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #1FB264;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #15824B;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .file-upload-btn:hover {
            background: #1AA059;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            margin-top: 20px;
            border: 2px dashed #1FB264;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #1FB264;
            border: 2px dashed #ffffff;
        }
        .image-upload-wrap:hover h3{
            color: #fff;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text h3 {
            text-transform: uppercase;
            color: #15824B;
            padding: 45px 15px;
            letter-spacing: 1px;
            line-height: 1.2;
            font-size: 16px;
            margin: 0;
        }

        .file-upload-image {
            max-width: 100%;
            margin: auto;
            padding: 20px 0;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }
    </style>
    <link rel="stylesheet" href="/admin/admin/pages/css/profile.css">
    <div class="page-content">

        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE HEAD -->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Company Account </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>

        <!-- END PAGE HEAD -->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ route('adminHome') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Company Account</a>
            </li>
        </ul>
        <div class=" alert-success" id="alert-session-update" style="display:none;">
            <h5 class="text-center">password change sucsefuli</h5>
        </div>
        <div class=" alert-danger" id="alert-session-danger" style="display:none;">
            <h5 class="text-center">password dont mucsh</h5>
        </div>
        <div class=" alert-danger" id="alert-session-passowrd" style="display:none;">
            <h5 class="text-center">wrong password</h5>
        </div>
        <!-- END PAGE BREADCRUMB -->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar" style="width:250px;">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            @if(!empty($companies->logo))
                                <img src="/img/companies/{{ $companies->logo }}" class="img-responsive" alt="">
                            @endif
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                {{ Auth::user()->name .' '. Auth::user()->surname }}
                            </div>
                            <div class="profile-usertitle-job">
                                @if( Auth::user()->role == 'admin')
                                    ShopList
                                @else
                                    {{ $companies->name }}
                                @endif
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                    {{--<div class="profile-userbuttons">
                        <button type="button" class="btn btn-circle green-haze btn-sm">Follow</button>
                        <button type="button" class="btn btn-circle btn-danger btn-sm">Message</button>
                    </div>--}}
                    <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                    {{--<div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="extra_profile_account.html">
                                    <i class="icon-settings"></i>
                                    Account Settings </a>
                            </li>
                        </ul>
                    </div>--}}
                    <!-- END MENU -->
                    </div>
                    <!-- END PORTLET MAIN -->
                    <!-- PORTLET MAIN -->
                    <div class="portlet light">
                        <!-- STAT -->
                        <div class="row list-separated profile-stat">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="uppercase profile-stat-title">
                                    {{ $products }}
                                </div>
                            </div>
                        </div>
                        <!-- END STAT -->
                        <div>
                            <h4 class="profile-desc-title">About The Company</h4>
                            <span class="profile-desc-text"> </span>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-globe"></i>
                                @if( Auth::user()->role == 'admin')
                                    <a href="http://www.shoplist.am">www.shoplist.am</a>
                                @else
                                    <a href="http://www.shoplist.am/companies/{{ $companies->name }}">{{ $companies->name }}</a>
                                @endif

                            </div>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-facebook"></i>
                                <a href="https://www.facebook.com/Shoplistam-559959457837202/?modal=admin_todo_tour"
                                   target="_blank">Shoplist</a>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET MAIN -->
                </div>

                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="portlet-title tabbable-line">
                                    {{--<div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                    </div>--}}

                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab">@lang('admin.personalInfo')</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab">@lang('admin.changeLogo')</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_4" data-toggle="tab">@lang('admin.sliderImages')</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_3" data-toggle="tab">@lang('admin.changePassword')</a>
                                        </li>
                                        {{--                                        <li>--}}
                                        {{--                                            <a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>--}}
                                        {{--                                        </li>--}}
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            <form role="form" action="{{ url('/admin/updateUserFromAdmin') }}"
                                                  method="post">
                                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('admin.firstName')</label>
                                                    <input type="text" placeholder="John" name="name"
                                                           class="form-control" value="{{ Auth::user()->name }}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">@lang('admin.lastName')</label>
                                                    <input type="text" placeholder="Doe" name="surname"
                                                           class="form-control" value="{{ Auth::user()->surname }}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">@lang('admin.phoneNumber')</label>
                                                    <input type="text" placeholder="+3 74 91 11 11 11" name="phone"
                                                           class="form-control" value="{{ Auth::user()->phone }}"/>
                                                </div>

                                                <div>
                                                    <button type="submit" class="btn green-haze">
                                                        @lang('admin.saveChanges')
                                                    </button>
                                                </div>
                                                @csrf
                                            </form>
                                        </div>
                                        <!-- END PERSONAL INFO TAB -->
                                        <!-- CHANGE AVATAR TAB -->
                                        <div class="tab-pane" id="tab_1_2">
                                            <form role="form" action="{{ url('/admin/updateUserFromAdminLogo') }}"
                                                  method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                <div class="file-upload">
                                                    <button class="file-upload-btn" type="button"
                                                            onclick="$('.file-upload-input-1').trigger( 'click' )">
                                                        @lang('admin.addImage')
                                                    </button>

                                                    <div class="image-upload-wrap image-upload-wrap-1">
                                                        <input class="file-upload-input file-upload-input-1" type='file' name="logo"
                                                               onchange="readURL(this);" accept="image/*"/>
                                                        <div class="drag-text">
                                                            <h3>@lang('admin.dragAndDropImage')</h3>
                                                        </div>
                                                    </div>
                                                    <div class="file-upload-content file-upload-content-1">
                                                        <img class="file-upload-image file-upload-image-1" src="#" alt="your image"/>
                                                        <div class="image-title-wrap">
                                                            <button type="button" onclick="removeUpload()"
                                                                    class="remove-image">@lang('admin.remove') <span
                                                                        class="image-title">@lang('admin.uploadImage')</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="margin-top-10">
                                                    <button type="submit" class="btn green-haze">
                                                        @lang('admin.save')
                                                    </button>
                                                </div>
                                                @csrf
                                            </form>
                                        </div>
                                        <!-- END CHANGE AVATAR TAB -->
                                        <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane " id="tab_1_3">

                                            <input type="hidden" name="id" id="userId" value="{{ Auth::user()->id }}">
                                            <div class="form-group">
                                                <label class="control-label">@lang('admin.currentPassword')</label>
                                                <input type="password" name="oldPassword" id="oldPassword"
                                                       class="form-control" required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">@lang('admin.newPassword')</label>
                                                <input type="password" name="password" id="password"
                                                       class="form-control" required/>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="registration_error">{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">@lang('admin.repeatPassword')</label>
                                                <input type="password" name="password_confirmation"
                                                       id="password_confirmation" class="form-control" required/>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="registration_error">{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            @csrf
                                            <div class="margin-top-10">
                                                <button type="button" id="changePassword" class="btn green-haze">
                                                    @lang('admin.changePassword')
                                                </button>
                                            </div>
                                        </div>

                                    <!-- END PRIVACY SETTINGS TAB -->
                                        <div class="tab-pane" id="tab_1_4">
                                            <form role="form" class="row" action="{{ url('/admin/updateUserFromAdminSlider') }}"
                                                  method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                <div class="file-upload col-sm-4">
                                                    @if(!empty($companies->img1))
                                                        <img src="/img/slider/{{ $companies->img1 }}" class="img-responsive" alt="">
                                                    @endif
                                                        <br>
                                                    <button class="file-upload-btn" type="button"
                                                            onclick="$('.for-img-input-1').trigger( 'click' )">@lang('admin.addImage')
                                                    </button>

                                                    <div class="image-upload-wrap for-img-1">
                                                        <input class="file-upload-input for-img-input-1" type='file'
                                                               name="img1" onchange="readURL1(this);" accept="image/*"/>
                                                        <div class="drag-text">
                                                            <h3>@lang('admin.dragAndDropImage')</h3>
                                                        </div>
                                                    </div>

                                                    <div class="file-upload-content for-upload-img-1">
                                                        <img class="file-upload-image for-upload-image-1" src="#"
                                                             alt="your image"/>
                                                        <div class="image-title-wrap">
                                                            <button type="button" onclick="removeUpload1()"
                                                                    class="remove-image">@lang('admin.remove') <span
                                                                        class="image-title-1">@lang('admin.addImage')</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="file-upload col-sm-4">
                                                    @if(!empty($companies->img2))
                                                        <img src="/img/slider/{{ $companies->img2 }}" class="img-responsive" alt="">
                                                    @endif
                                                        <br>
                                                    <button class="file-upload-btn" type="button"
                                                            onclick="$('.for-img-input-2').trigger( 'click' )">@lang('admin.addImage')
                                                    </button>

                                                    <div class="image-upload-wrap for-img-2">
                                                        <input class="file-upload-input for-img-input-2" type='file'
                                                               name="img2" onchange="readURL2(this);" accept="image/*"/>
                                                        <div class="drag-text">
                                                            <h3>@lang('admin.dragAndDropImage')</h3>
                                                        </div>
                                                    </div>
                                                    <div class="file-upload-content for-upload-img-2">
                                                        <img class="file-upload-image for-upload-image-2" src="#"
                                                             alt="your image"/>
                                                        <div class="image-title-wrap">
                                                            <button type="button" onclick="removeUpload2()"
                                                                    class="remove-image">@lang('admin.remove') <span
                                                                        class="image-title-2">@lang('admin.addImage')</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="file-upload col-sm-4">
                                                    @if(!empty($companies->img3))
                                                        <img src="/img/slider/{{ $companies->img3 }}" class="img-responsive" alt="">
                                                    @endif
                                                        <br>
                                                    <button class="file-upload-btn" type="button"
                                                            onclick="$('.for-img-input-3').trigger( 'click' )">@lang('admin.addImage')
                                                    </button>

                                                    <div class="image-upload-wrap for-img-3">
                                                        <input class="file-upload-input for-img-input-3" type='file'
                                                               name="img3" onchange="readURL3(this);" accept="image/*"/>
                                                        <div class="drag-text">
                                                            <h3>@lang('admin.dragAndDropImage')</h3>
                                                        </div>
                                                    </div>
                                                    <div class="file-upload-content for-upload-img-3">
                                                        <img class="file-upload-image for-upload-image-3" src="#"
                                                             alt="your image"/>
                                                        <div class="image-title-wrap">
                                                            <button type="button" onclick="removeUpload3()"
                                                                    class="remove-image">@lang('admin.remove') <span
                                                                        class="image-title-3">@lang('admin.uploadImage')</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="margin-top-10 col-xs-12">
                                                    <button type="submit" class="btn green-haze">
                                                        @lang('admin.save')
                                                    </button>
                                                </div>
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
    <script>
        jQuery(document).ready(function () {

            $('#changePassword').on('click', function () {
                if ($('#password').val() !== $('#password_confirmation').val()) {

                    $('#alert-session-danger').removeAttr('style')
                    setTimeout(function () {
                        $('#alert-session-danger').attr('style', 'display:none')
                    }, 5000)
                } else {

                    $.ajax({
                        url: "/admin/updatePasswordFromAdmin",
                        type: "post",
                        data: {
                            oldPassword: $('#oldPassword').val(),
                            password: $('#password').val(),
                            password_confirmation: $('#password_confirmation').val(),
                            id: $('#userId').val(),
                            _token: window.Laravel.csrfToken
                        },
                        success: function (data) {
                            console.log(data)
                            if (data === false) {
                                $('#alert-session-passowrd').removeAttr('style')
                                setTimeout(function () {
                                    $('#alert-session-passowrd').attr('style', 'display:none')
                                }, 5000)
                            } else {
                                $('#alert-session-update').removeAttr('style')
                                setTimeout(function () {
                                    $('#alert-session-update').attr('style', 'display:none')
                                }, 5000)
                            }
                        }
                    });
                }
            })
        });

        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-upload-wrap-1').hide();

                    $('.file-upload-image-1').attr('src', e.target.result);
                    $('.file-upload-content-1').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input-1').replaceWith($('.file-upload-input-1').clone());
            $('.file-upload-content-1').hide();
            $('.image-upload-wrap-1').show();
        }

        $('.image-upload-wrap-1').bind('dragover', function () {
            $('.image-upload-wrap-1').addClass('image-dropping');
        });
        $('.image-upload-wrap-1').bind('dragleave', function () {
            $('.image-upload-wrap-1').removeClass('image-dropping');
        });


        function readURL2(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.for-img-2').hide();

                    $('.for-upload-image-2').attr('src', e.target.result);
                    $('.for-upload-img-2').show();

                    $('.image-title-2').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload2();
            }
        }

        function removeUpload2() {
            $('.for-img-input-2').replaceWith($('.for-img-input-2').clone());
            $('.for-upload-img-2').hide();
            $('.for-img-2').show();
        }

        $('.for-img-2').bind('dragover', function () {
            $('.for-img-2').addClass('image-dropping');
        });
        $('.for-img-2').bind('dragleave', function () {
            $('.for-img-2').removeClass('image-dropping');
        });

        function readURL1(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.for-img-1').hide();

                    $('.for-upload-image-1').attr('src', e.target.result);
                    $('.for-upload-img-1').show();

                    $('.image-title-1').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload1();
            }
        }

        function removeUpload1() {
            $('.for-img-input-1').replaceWith($('.for-img-input-1').clone());
            $('.for-upload-img-1').hide();
            $('.for-img-1').show();
        }

        $('.for-img-1').bind('dragover', function () {
            $('.for-img-1').addClass('image-dropping');
        });
        $('.for-img-1').bind('dragleave', function () {
            $('.for-img-1').removeClass('image-dropping');
        });

        function readURL3(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.for-img-3').hide();

                    $('.for-upload-image-3').attr('src', e.target.result);
                    $('.for-upload-img-3').show();

                    $('.image-title-3').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload3();
            }
        }

        function removeUpload3() {
            $('.for-img-input-3').replaceWith($('.for-img-input-3').clone());
            $('.for-upload-img-3').hide();
            $('.for-img-3').show();
        }

        $('.for-img-3').bind('dragover', function () {
            $('.for-img-3').addClass('image-dropping');
        });
        $('.for-img-3').bind('dragleave', function () {
            $('.for-img-3').removeClass('image-dropping');
        });

    </script>
@endsection