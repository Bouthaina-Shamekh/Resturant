<x-dashboard-layout>
    <div class="col-span-12">
        <div class="card welcome-banner">
            <div class="card-body relative z-20">
                <!-- منحنى الـ char في الأعلى -->
                

                <div class="mb-4" style="width:75%;">
    {!! $chartjs->render() !!}
</div>

                <div class="grid grid-cols-12 gap-6">
                    <!-- عرض منحنى الأيام بجانب منحنى الشهور -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>{{ __('admin.Visits') }}</h5>
                            </div>
                            <div class="card-body">
                                <div id="line-chart-1"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>{{ __('admin.Visits In Month') }}</h5>
                            </div>
                            <div class="card-body">
                                <div id="bar-chart-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // البيانات الحقيقية التي سيتم زيادتها تدريجياً
    var persentPending = {!! json_encode($persent_pending) !!};
    var persentProcessing = {!! json_encode($persent_processing) !!};
    var persentDelivering = {!! json_encode($persent_delivering) !!};
    var persentCompleted = {!! json_encode($persent_completed) !!};

    var chartData = {
        labels: ['order pending', 'order processing', 'order delivering', 'order completing'],
        datasets: [{
            label: 'Order Status',
            backgroundColor: ['rgba(236, 78, 186, 0.2)', 'rgba(66, 233, 94, 0.2)', 'rgba(54, 150, 240, 0.3)', 'rgba(247, 171, 84, 0.2)'],
            data: [0, 0, 0, 0], // القيم المبدئية
        }]
    };

    var chartOptions = {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    var ctx = document.getElementById('barChartTest').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: chartOptions
    });

    // دالة لزيادة البيانات تدريجياً
    var interval = setInterval(function () {
        if (chartData.datasets[0].data[0] < persentPending) {
            chartData.datasets[0].data[0] += 0.5; // زيادة تدريجية
        }
        if (chartData.datasets[0].data[1] < persentProcessing) {
            chartData.datasets[0].data[1] += 0.5;
        }
        if (chartData.datasets[0].data[2] < persentDelivering) {
            chartData.datasets[0].data[2] += 0.5;
        }
        if (chartData.datasets[0].data[3] < persentCompleted) {
            chartData.datasets[0].data[3] += 0.5;
        }

        // تحديث الرسم البياني بعد زيادة البيانات
        myChart.update();

        // عندما تصل البيانات إلى القيمة النهائية توقف التحريك
        if (chartData.datasets[0].data[0] >= persentPending && chartData.datasets[0].data[1] >= persentProcessing &&
            chartData.datasets[0].data[2] >= persentDelivering && chartData.datasets[0].data[3] >= persentCompleted) {
            clearInterval(interval);
        }
    }, 20); // كل 20 ميللي ثانية
</script>
    <script src="{{ asset('assets-dashboard/js/plugins/apexcharts.min.js') }}"></script>
    <script>
        const days = {!! json_encode($days) !!};
        const daysVisits = {!! json_encode($daysVisits) !!};
        const months = {!! json_encode($months) !!};
        const monthsVisits = {!! json_encode($monthsVisits) !!};

        setTimeout(function() {
            // منحنى الأيام (بجانب منحنى الشهور)
            var options = {
                chart: {
                    height: 300,  // نفس الحجم
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                colors: ['#4680FF'],
                series: [{
                    name: "{{ __('admin.Visits') }}",
                    data: daysVisits
                }],
                grid: {
                    row: {
                        colors: ['#f3f6ff', 'transparent'],
                        opacity: 0.5
                    }
                },
                xaxis: {
                    categories: days
                }
            };
            var chart = new ApexCharts(document.querySelector('#line-chart-1'), options);
            chart.render();

            // منحنى الشهور (بجانب منحنى الأيام)
            var options_bar_chart_1 = {
                chart: {
                    height: 300,  // نفس الحجم
                    type: 'bar'
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    }
                },
                dataLabels: {
                    enabled: false
                },
                colors: ['#2CA87F', '#4680FF', '#13c2c2'],
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                series: [{
                    name: "{{ __('admin.Visits') }}",
                    data: monthsVisits
                }],
                xaxis: {
                    categories: months
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val + ' visits';
                        }
                    }
                }
            };
            var chart_bar_chart_1 = new ApexCharts(document.querySelector('#bar-chart-1'), options_bar_chart_1);
            chart_bar_chart_1.render();
        }, 700);
    </script>
    @endpush
</x-dashboard-layout>
