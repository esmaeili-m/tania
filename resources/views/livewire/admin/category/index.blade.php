@section('title','دسته بندی ها')
<div>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>دسته بندی ها</h2>
                            <div class="row mt-3 clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">جستجو:</label>
                                </div>
                                    <div class="col-lg-5 col-md-5 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input wire:model.debounce.2000="search" class="form-control"
                                                       type="text" class="text" placeholder="نام دسته را وارد کنید ...">

                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <a href="{{route('category.trash')}}">

                                    <button  class="btn-hover color-7">

                                        سطل زباله ( {{\App\Models\Category::onlyTrashed()->count()}} )
                                    </button>
                                </a>

                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>آیدی</th>
                                    <th>نام دسته</th>
                                    <th> دسته والد</th>
                                    <th>وضعیت دسته</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $i)
                                <tr>
                                    <th scope="row">{{$i['id']}}</th>
                                    <td>{{$i['name']}}</td>
                                    <td>
                                    @if($i['parent']== null)
                                        ندارد
                                        @else
                                        {{$i['parent']}}
                                     @endif
                                    </td>
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
                                       <a href="{{route('category.update',$i)}}">
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
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>افزودن دسته</h2>
                            <form wire:submit.prevent="categoryForm">

                            <div class="row clearfix">
                                <div class="mt-3 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input wire:model.lazy="category.name" name="name" type="text" class="form-control" placeholder="نام دسته را وارد کنید">
                                             <span class="error"></span>
                                        </div>
                                        @error('category.name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div wire:ignore class="input-field col s12">
                                        <select wire:model.lazy="parent">
                                            <option value=""   selected>دسته والد را انتخاب کنید</option>
                                            @foreach(\App\Models\Category::where('parent',null)->get() as $i)
                                            <option value="{{$i['name']}}">{{$i['name']}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <button class="btn-hover color-8">افزودن دسته</button>
                            </div>
                            </form>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
