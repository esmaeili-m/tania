@section('title','اسلایدر پست ها')
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>پست اسلایدر</h2>
                            <div class="row mt-3 clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">جستجو:</label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input wire:model.debounce.2000="search" class="form-control"
                                                   type="text" class="text" placeholder="نام محصول را وارد کنید ...">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <a href="{{route('postSlider.create')}}">
                                    <button  class="btn-hover color-7">
                                        افزودن پست جدید
                                    </button>
                                </a>
                                <a href="{{route('postSlider.trash')}}">
                                    <button  class="btn-hover color-7">
                                        سطل زباله ( {{\App\Models\PostSlider::onlyTrashed()->count()}} )
                                    </button>
                                </a>

                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>آیدی</th>
                                    <th>دسته محصول</th>
                                    <th>تصویر</th>
                                    <th>وضعیت پست</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($PostSlider as $i)
                                    <tr>
                                        <th scope="row">{{$i['id']}}</th>
                                        <td>{{$i['title']}}</td>
                                        <td class="table-img sorting_1"><img width="80px" src="{{url('storage/'.$i->image)}}" alt="{{$i['title']}}"></td>
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
                                            <a href="{{route('postSlider.update',$i)}}">
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

