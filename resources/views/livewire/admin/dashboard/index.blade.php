 @section('title','داشبورد')
<div>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="info-box7 l-bg-green order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">تعداد دسته بندی ها</h4>
                        <h2 class="text-right"><i class="fas fa-cart-plus pull-left"></i><span>{{\App\Models\Category::all()->count()}}</span></h2>
                        <p class="m-b-0">دسته بندی ها</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="info-box7 l-bg-purple order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">تعداد پست ها</h4>
                        <h2 class="text-right"><i class="fas fa-business-time pull-left"></i><span>{{\App\Models\Post::all()->count()}}</span></h2>
                        <p class="m-b-0">تعداد تمام پست ها</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="info-box7 l-bg-orange order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">تعداد مقالات منتشر شده</h4>
                        <h2 class="text-right"><i class="fas fa-chart-line pull-left"></i><span>{{\App\Models\Article::all()->count()}}</span></h2>
                        <p class="m-b-0">مقاله ها</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="info-box7 l-bg-cyan order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">تعداد ایمیل های دریافتی</h4>
                        <h2 class="text-right"><i class="fas fa-dollar-sign pull-left"></i><span>25698 تومان</span></h2>
                        <p class="m-b-0">20٪ بالاتر از ماه گذشته</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6" style="height: 32rem;">
                <livewire:livewire-column-chart style="height: 32rem;"
                                                key="{{ $columnChartModel->reactiveKey() }}"
                                                :column-chart-model="$columnChartModel"
                />
            </div>
        </div>


            /
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</div>
