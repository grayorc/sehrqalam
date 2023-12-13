@component('admin.layouts.content' , ['title' => 'لیست درخواست ها'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">همه درخواست ها</li>
    @endslot

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">کاربران</h3>

                    <div class="card-tools d-flex">
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group-sm mr-1">
{{--                            <a href="{{ request()->fullUrlWithQuery(['admin' => 1])  }}" class="btn btn-warning">کاربران مدیر</a>--}}
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>شماره درخواست</th>
                            <th>نام کتاب</th>
                            <th>شماره تلفن</th>
                            <th>وضعیت درخواست</th>
                            <th>لینک دانلود</th>
{{--                            <th>اقدامات</th>--}}
                        </tr>

                        @foreach($submissions as $submission)
                            <tr>
                                <td>{{ $submission->id }}</td>
                                <td>{{ $submission->title }}</td>
                                <td>{{ $submission->phone_number }}</td>
                                <td>{{ $submission->status }}</td>
{{--                                <td><a href="/blank-download/{{$submission->file_path}}" id="link" name="link"><button  class="btn btn-sm btn-success ml-1" name="download" id="download">دانلود</button></a></td>--}}
{{--                                <td class="d-flex">--}}
{{--                                    <form action="{{ route('admin.submissions.edit' , ['submission' => $submission->id]) }}" method="POST">--}}
{{--                                        @csrf--}}
{{--                                        @method('PUT')--}}
{{--                                        <input value="در حال بررسی" name="status" hidden>--}}
{{--                                        <button type="submit" class="btn btn-sm btn-info ml-1">درحال بررسی</button>--}}
{{--                                    </form>--}}
{{--                                    <form action="{{ route('admin.submissions.edit' , ['submission' => $submission->id,'status' => "درحال بررسی"]) }}" method="POST">--}}
{{--                                        @csrf--}}
{{--                                        @method('PUT')--}}
{{--                                        <button type="submit" class="btn btn-sm btn-info ml-1">ثبت شده</button>--}}
{{--                                    </form>--}}
{{--                                    <form action="{{ route('admin.submissions.edit' , ['submission' => $submission->id,'status' => "رد شده"]) }}" method="POST">--}}
{{--                                        @csrf--}}
{{--                                        @method('PUT')--}}
{{--                                        <button type="submit" class="btn btn-sm btn-info ml-1">رد شده</button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $submissions->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endcomponent

