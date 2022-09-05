@section('title','ایجاد اسلایدر محصول')
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ایجاد اسلایدر محصول</h2>
                        </div>
                        <div class="body">
                            <form wire:submit.prevent="createslider" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">دسته اسلایدر را انتخاب کنید</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <div wire:ignore class="input-field col s12">
                                                    <select wire:model.lazy="postSlider.title">
                                                        <option value="">دسته والد را انتخاب کنید</option>
                                                        @foreach(\App\Models\Category::where('parent',null)->get() as $i)
                                                            <option value="{{$i['name']}}">{{$i['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">تصویر</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span> ابعاد فایل  باید 400 * 360</span>
                                                <input placeholder="ابعاد باید 400 * 360" type="file" wire:model.laze="image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input wire:model.laze="image" class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        @if ($image)
                                            <div style="border:1px solid #25aae1">
                                                <img src="{{ $image->temporaryUrl() }}">
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <button class="btn-hover color-8">ایجاد  محصول</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

