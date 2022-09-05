@section('title','مقالات')
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>مقالات</h2>
                            <div class="row mt-3 clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">جستجو:</label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input wire:model.debounce.2000="search" class="form-control"
                                                   type="text" class="text" placeholder="نام پست را وارد کنید ...">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <a href="{{route('article.create')}}">
                                    <button  class="btn-hover color-7">
                                        افزودن پست جدید
                                    </button>
                                </a>
                                <a href="{{route('article.trash')}}">
                                    <button  class="btn-hover color-7">
                                        سطل زباله ( {{\App\Models\Article::onlyTrashed()->count()}} )
                                    </button>
                                </a>

                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>آیدی</th>
                                    <th>نام مقاله</th>
                                    <th>تصویر</th>
                                    <th> دسته بندی</th>
                                    <th>زیر دسته</th>
                                    <th>توضیحات</th>
                                    <th>وضعیت پست</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($article as $i)
                                    <tr>
                                        <th scope="row">{{$i['id']}}</th>
                                        <td>{{$i['title']}}</td>
                                        <td class="table-img sorting_1"><img width="80px" src="{{url('storage/'.$i->image)}}" alt="{{$i['title']}}"></td>

                                        <td>
                                            @if($i['category']== null)
                                                ندارد
                                            @else
                                                {{$i['category']}}
                                            @endif
                                        </td><td>
                                            @if($i['subcategory']== null)
                                                ندارد
                                            @else
                                                {{$i['subcategory']}}
                                            @endif
                                        </td>
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
                                            <a href="{{route('article.update',$i)}}">
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

