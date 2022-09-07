@section('title','سوشیال مدیا')
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>سوشیال مدیا</h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>instagram</th>
                                    <th>telegram</th>
                                    <th>whatsapp</th>
                                    <th>linkedin</th>
                                    <th>pinterest</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>آدرس</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                   
                                    @if($social!== null)
                                    <tr>
                                        <th scope="row">{{$social['instagram']}}</th>
                                        <td>{{$social->telegram}}</td>
                                        <td>{{$social['whatsapp']}}</td>
                                        <td>{{$social['linkedin']}}</td>
                                        <td>{{$social['pinterest']}}</td>
                                        <td>{{$social['email']}}</td>
                                        <td>{{$social['phone']}}</td>
                                        <td>{{$social['address']}}</td>
                                        <td>
                                            @if($social['status']==0)
                                                <a href="#" wire:click="statusEnable({{$social['id']}})">
                                                    <span class="label l-bg-orange shadow-style">غیر فعال</span>
                                                </a>
                                            @else
                                                <a href="#"  wire:click="statusDisable({{$social['id']}})">
                                                    <span class="label l-bg-cyan shadow-style"> فعال</span>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <button wire:click="deleteCategory({{$social['id']}})" class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>افزودن سوشیال مدیا</h2>
                            <form wire:submit.prevent="categoryForm">
                                <div class="row clearfix">
                                    <div class="mt-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>آدرس اینستاگرام</label>
                                                <input wire:model.lazy="socialMedia.instagram" name="name" type="text" class="form-control" placeholder="لینک را وارد کنید">
                                                <span class="error"></span>
                                            </div>
                                            @error('category.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>آدرس تلگرام</label>
                                                <input wire:model.lazy="socialMedia.telegram" name="name" type="text" class="form-control" placeholder="لینک را وارد کنید">
                                                <span class="error"></span>
                                            </div>
                                            @error('category.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>آدرس </label>
                                                <input wire:model.lazy="socialMedia.address" name="name" type="text" class="form-control" placeholder="ادرس را وارد کنید">
                                                <span class="error"></span>
                                            </div>
                                            @error('category.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>آدرس واتساپ</label>
                                                <input wire:model.lazy="socialMedia.whatsapp" name="name" type="text" class="form-control" placeholder="لینک را وارد کنید">
                                                <span class="error"></span>
                                            </div>
                                            @error('category.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div><div class="mt-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>آدرس لینکدین</label>
                                                <input wire:model.lazy="socialMedia.linkedin" name="name" type="text" class="form-control" placeholder="لینک را وارد کنید">
                                                <span class="error"></span>
                                            </div>
                                            @error('category.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div><div class="mt-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>آدرس پینترست</label>
                                                <input wire:model.lazy="socialMedia.pinterest" name="name" type="text" class="form-control" placeholder="لینک را وارد کنید">
                                                <span class="error"></span>
                                            </div>
                                            @error('category.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div><div class="mt-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>آدرس ایمیل</label>
                                                <input wire:model.lazy="socialMedia.email" name="name" type="text" class="form-control" placeholder="لینک را وارد کنید">
                                                <span class="error"></span>
                                            </div>
                                            @error('category.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div><div class="mt-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>شماره همراه</label>
                                                <input wire:model.lazy="socialMedia.phone" name="name" type="text" class="form-control" placeholder="لینک را وارد کنید">
                                                <span class="error"></span>
                                            </div>
                                            @error('category.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <button class="btn-hover color-8">ثیت</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

