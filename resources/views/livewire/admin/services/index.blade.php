@section('title','سرویس ها')
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="mb-5 header">
                            <h2>سرویس ها</h2>
                            <ul class="header-dropdown m-r--5">
                                <a href="{{route('services.create')}}">
                                    <button  class="btn-hover color-7">
                                        افزودن سرویس
                                    </button>
                                </a>
                                <a href="{{route('services.trash')}}">
                                    <button  class="btn-hover color-7">
                                        سطل زباله ( {{\App\Models\Service::onlyTrashed()->count()}} )
                                    </button>
                                </a>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>آیدی</th>
                                    <th>نام</th>
                                    <th>تصویر</th>
                                    <th>توضیحات</th>
                                    <th>وضعیت دسته</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $i)
                                    <tr>
                                        <th scope="row">{{$i['id']}}</th>
                                        <td>{{$i['title']}}</td>
                                        <td class="table-img sorting_1"><img width="80px" src="{{url('storage/'.$i->image)}}" alt="{{$i['name']}}"></td>
                                        <td>{{strip_tags(substr($i['description'],0,20))}} ... </td>

                                        <td>
                                            @if($i['status']==0)
                                                <a href="#" wire:click="statusEnable({{$i['id']}})">
                                                    <span class="label l-bg-orange shadow-style">غیر فعال</span>
                                                </a>
                                            @else
                                                <a href="#"  wire:click="statusDisable({{$i['id']}})">
                                                    <span class="label l-bg-cyan shadow-style"> فعال</span>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('services.update',$i)}}">
                                                <button  class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                            </a>
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
                </div>

            </div>
        </div>
    </section>
</div>
