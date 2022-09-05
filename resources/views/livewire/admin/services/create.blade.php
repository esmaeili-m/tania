<div>
    @section('title','ایجاد سرویس')
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>ایجاد سرویس</h2>

                            </div>
                            <div class="body">
                                <form wire:submit.prevent="createServices" class="form-horizontal">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">نام سرویس</label>
                                        </div>

                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input wire:model.lazy="service.title" type="text" id="email_address_2"
                                                           class="form-control" placeholder="نام سرویس را وارد کنید">
                                                </div>
                                            </div>
                                            @error('service.title')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">توضیحات سرویس</label>
                                        </div>

                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <div wire:ignore>
                              <textarea required wire:model.lazy="service.description"
                                        class="min-h-fit h-48 "
                                        name="editor"
                                        id="editor"></textarea>
                                                        @error('service.description') <span class="bg-red">{{ $message }}</span> @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            @error('post.name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">موقیت سرویس</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <div wire:ignore class="input-field col s12">
                                                        <select wire:model.lazy="service.position">
                                                            <option value=""   selected>موقعیت متن را انتخاب کنید</option>
                                                            <option value="right">راست چین</option>
                                                            <option value="left">چپ چین</option>
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
                                                    <span>فایل</span>
                                                    <input type="file" wire:model.laze="image">
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
                                            <button class="btn-hover color-8">ایجاد سرویس</button>
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
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        const editor = CKEDITOR.replace('editor',{
            language:'fa',
        });
        editor.on('change', function (event) {
        @this.set('service.description', event.editor.getData());
        })
    </script>
</div>
