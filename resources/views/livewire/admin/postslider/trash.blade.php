@section('title','سطل آشغال')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-4">

                            </div>
                        </div>
                    </div>
                    <div  class="body">
                        <div class="table-responsive">
                            <table  id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                <thead >
                                <tr>
                                    <th> نام اسلایدر</th>
                                    <th>تصویر</th>
                                    <th>تغییرات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($slider as $i)
                                    <tr>
                                        <td>{{$i->title}}</td>
                                        <td class="table-img sorting_1"><img width="80px" src="{{url('storage/'.$i->image)}}" alt="{{$i->title}}"></td>
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
