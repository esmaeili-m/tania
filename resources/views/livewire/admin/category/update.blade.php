@section('title','دسته بندی ها')
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ویرایش دسته - {{$this->category->name}}</h2>

                        </div>
                        <div class="body">
                            <form wire:submit.prevent="update" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">نام دسته</label>
                                    </div>

                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input wire:model.lazy="category.name" type="text" id="email_address_2" class="form-control" placeholder="نام دسته را وارد کنید">
                                            </div>
                                        </div>
                                        @error('category.name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">دسته والد را انتخاب کنید</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <div wire:ignore class="input-field col s12">
                                                    <select wire:model.lazy="category.parent">
                                                        <option value="">دسته والد را انتخاب کنید</option>
                                                        @foreach(\App\Models\Category::where('parent',null)->get() as $i)
                                                            <option value="{{$i['name']}}">{{$i['name']}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <button class="btn-hover color-8">ویرایش دسته</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        </div>
    </section>
</div>
