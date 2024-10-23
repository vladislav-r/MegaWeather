@extends('layouts.main')
@section('title', 'Погода')
@section('content')
    @include('includes.header')
    <section class='wheather'>
        <div class="container">
            <h1>Погода</h1>
            <div class="wheather__inner">
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
            <div class="">

            </div>
        </div>
    </section>
    <script>
        const temperatures = @json($temperatures);
        const days = @json($days);
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: days,
                datasets: [{
                    data: temperatures,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        console.log(myChart.data.datasets.data)
    </script>
@endsection
