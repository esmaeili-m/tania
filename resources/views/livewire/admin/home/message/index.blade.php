@section('title','پیام های ارسال شده')
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>آیدی</th>
                                    <th>نام </th>
                                    <th>ایمیل</th>
                                    <th>پیام</th>
                                    <th>ip</th>
                                    <th>کشور</th>
                                    <th>شهر</th>
                                    <th>نوع دستگاه و مرورگر</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($message as $i)
                                    <tr>
                                        <th scope="row">{{$i['id']}}</th>
                                        <td>{{$i['name']}}</td>
                                        <td>{{$i['email']}}</td>
                                        <td>{{$i['message']}}</td>
                                        <td>{{$i['ip']}}</td>
{{--                                        <td>{{$i['country']['countryName']}}</td>--}}
{{--                                        <td>{{$i['country']['cityName']}}</td>--}}
{{--                                        <td>{{$i['device']}}</td>--}}
                                        <td>
                                            <button wire:click="deleteCategory({{$i['id']}})" class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                    {{$message->links()}}
                </div>

            </div>
        </div>

    </section>
</div>

