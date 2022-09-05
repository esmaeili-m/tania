@section('title','سطل آشغال')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-4">
                                <a class="search-box">
                                    <form  action="" onclick="event.preventDefault();">
                                        <label style="margin-right: 20px">جستجو :</label>
                                        <input  wire:model.debounce.1000="search" type="text" class="search-box" placeholder="جستجو کنید ...">
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div  class="body">
                        <div class="table-responsive">
                            <table  id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                <thead>
                                <tr>
                                    <th> نام مقاله</th>
                                    <th>دسته بندی </th>
                                    <th>زیر دسته </th>
                                    <th>توضیحات</th>
                                    <th>تغییرات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($article as $i)
                                    <tr>
                                        <td>{{$i->title}}</td>
                                        <td>
                                            @if($i->category== null)
                                                ندارد
                                            @else
                                                {{$i->category}}
                                            @endif
                                        </td>
                                        <td>
                                            @if($i->subcategory== null)
                                                ندارد
                                            @else
                                                {{$i->subcategory}}
                                            @endif
                                        </td>
                                        <td>{{strip_tags(substr($i->description,0,30))}} ... </td>
                                        <td>
                                            <button wire:click="Restore({{$i->id}})" class="btn tblActnBtn">
                                                <i class="material-icons">undo</i>
                                            </button>
                                            <button wire:click="DeleteUser({{$i->id}})" class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
