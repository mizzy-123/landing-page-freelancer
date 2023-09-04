@extends('main.sidebar')
@section('container')
    <div class="container-div">
      <h2 style="color:white;">Dashboard</h2>
      <div class="container-row">
          <div class="container" style="max-width:50%;max-height:120%;display:flex;flex-wrap:wrap;background:whitesmoke;border-radius:10px;">
          <canvas id="myChart"></canvas>
          </div>
          {{-- <div class="container" style="max-width:50%;max-height:120%;display:flex;flex-wrap:wrap;background:whitesmoke;border-radius:10px;">
          <canvas id="myChart2"></canvas>
          </div> --}}
          {{-- <div class="container" style="max-width:50%;max-height:120%;display:flex;flex-wrap:wrap;background:whitesmoke;border-radius:10px;">
          <canvas id="projectChart"></canvas>
          </div> --}}
          
      </div>        
    </div>
@endsection

@section('library')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    // var ctx2 = document.getElementById('myChart2').getContext('2d');
    // var ctx2 = document.getElementById('projectChart').getContext('2d');
    var data_daily = @json($daily_data);
    
    var jml_visitor = [
      (data_daily["Monday"] != null)? data_daily["Monday"]["total"] : 0,
      (data_daily["Tuesday"] != null)? data_daily["Tuesday"]["total"] : 0,
      (data_daily["Wednesday"] != null)? data_daily["Wednesday"]["total"] : 0,
      (data_daily["Thursday"] != null)? data_daily["Thursday"]["total"] : 0,
      (data_daily["Friday"] != null)? data_daily["Friday"]["total"] : 0,
      (data_daily["Saturday"] != null)? data_daily["Saturday"]["total"] : 0,
      (data_daily["Sunday"] != null)? data_daily["Sunday"]["total"] : 0
      ];
    
    var data = {
      labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumaat', 'Sabtu', 'Minggu'],
      datasets: [{
        label: 'Jumlah Visitor',
        data: jml_visitor,
        borderColor: 'rgba(230, 45, 45, 0.6)',
        backgroundColor: 'rgba(230, 45, 45, 0.8)',
        pointBackgroundColor: '#fff', // Warna latar belakang titik
        pointBorderColor: 'red',     // Warna tepi titik
        pointRadius: 5,               // Ukuran radius titik
        pointHoverRadius: 7,           // Ukuran radius titik saat dihover
        
      }]
    };

    var dt_project = {
      labels: ['Mobile App', 'Web', 'Bot Tele', 'Desain'],
      datasets: [{
        label: 'Jenis Project',
        data: [5,3,2,1],
        borderColor: 'rgba(230, 45, 45, 0.6)',
        backgroundColor: 'rgba(230, 45, 45, 0.8)',
        pointBackgroundColor: '#fff', // Warna latar belakang titik
        pointBorderColor: 'red',     // Warna tepi titik
        pointRadius: 5,               // Ukuran radius titik
        pointHoverRadius: 7,           // Ukuran radius titik saat dihover
        
      }]

    }

    var options = {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

    var myChart = new Chart(ctx, {
      type: 'line',
      data: data,
      options: options
    });
    // var myChart2 = new Chart(ctx2, {
    //   type: 'pie',
    //   data: data,
    //   options: options
    // });

    // var projectChart = new Chart(ctx2, {
    //   type: 'pie',
    //   data = dt_project,
    //   options: options
    // });

  </script>
@endsection
