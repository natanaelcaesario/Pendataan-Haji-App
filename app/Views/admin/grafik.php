<div id="layoutSidenav_content" style="margin-top:50px">
    <main>
        <div class="container">
            <h1 class="text-center">Grafik Penjualan Paket <br>PT MIW JEPARA</h1>
            <hr>
            <div class="row">

                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area mr-1"></i>
                            Grafik Penjualan Paket Berdasarkan Paket Yang Dibeli
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                        <div class="card-footer small text-muted" id="update">

                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar mr-1"></i>
                            Laporan Penjualan Berdasarkan Jenis Kelamin
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                        <div class="card-footer small text-muted" id="update2"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar mr-1"></i>
                            Laporan Penjualan Berdasarkan Kota
                        </div>
                        <div class="card-body"><canvas id="myBarChart2" width="100%" height="50"></canvas></div>
                        <div class="card-footer small text-muted" id="update2"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Area Chart Example
    var ctx = document.getElementById("myAreaChart");
    // product
    var produk = <?php echo json_encode($produk); ?>;
    var paket1 = <?php echo json_encode($yuk); ?>;
    var paket2 = <?php echo json_encode($yuk1); ?>;
    var paket3 = <?php echo json_encode($yuk2); ?>;
    var paket4 = <?php echo json_encode($yuk3); ?>;

    var hitung1 = Object.values(paket1[0]);
    var hitung2 = Object.values(paket2[0]);
    var hitung3 = Object.values(paket3[0]);
    var hitung4 = Object.values(paket4[0]);
    var tampung = [hitung1[0], hitung2[0], hitung3[0], hitung4[0]];
    var maxmimum = Math.max.apply(Math, tampung);

    arraykosong = [];
    for (var i = 0; i < produk.length; i++) {
        var nilai = produk[i]['nama_paket'];
        arraykosong.push(nilai);
    }

    // date
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = mm + '/' + dd + '/' + yyyy;
    document.getElementById("update").innerHTML = "Diperbarui pada " + today;
    document.getElementById("update2").innerHTML = "Diperbarui pada " + today;
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: arraykosong,
            datasets: [{
                label: today,
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,9,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: [hitung1, hitung2, hitung3, hitung4],
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: maxmimum + 5,
                        maxTicksLimit: 5
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });
</script>


<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';
    var laki = <?php echo json_encode($yuk4); ?>;
    var perempuan = <?php echo json_encode($yuk5); ?>;
    // total
    var total = Object.values(laki[0]);
    var total2 = Object.values(perempuan[0]);
    console.log(total);
    // Bar Chart Example
    var ctx = document.getElementById("myBarChart");
    var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Laki-Laki", "Perempuan"],
            datasets: [{
                label: "Jumlah Orang",
                backgroundColor: "rgba(2,117,22,1)",
                borderColor: "rgba(2,117,216,1)",
                data: [total, total2],
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 5,
                        maxTicksLimit: 5
                    },
                    gridLines: {
                        display: true
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });
</script>



<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';
    var laki = <?php echo json_encode($yuk4); ?>;
    var perempuan = <?php echo json_encode($yuk5); ?>;
    // total
    var total = Object.values(laki[0]);
    var total2 = Object.values(perempuan[0]);
    console.log(total);
    // Bar Chart Example
    var ctx = document.getElementById("myBarChart2");
    var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Boyolali", "Demak", "Cilacap", "Demak", "Tegal", "Banjarnegara"],
            datasets: [{
                label: "Jumlah Orang",
                backgroundColor: "rgba(2,0,216,1)",
                borderColor: "rgba(2,117,216,1)",
                data: [total, total2],
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 5,
                        maxTicksLimit: 5
                    },
                    gridLines: {
                        display: true
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });
</script>