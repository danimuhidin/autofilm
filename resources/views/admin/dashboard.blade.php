@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Selamat Datang, Admin!</h3>
                </div>
                <div class="card-body">
                    Ini adalah halaman dashboard Anda. Anda bisa mulai menambahkan konten di sini.
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Contoh Chart (Chart.js)</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            'use strict';
            var ctx = document.getElementById('myChart').getContext('2d');

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                    datasets: [{
                        label: 'Pengunjung Website',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: 'rgba(0, 123, 255, 0.7)',
                        borderColor: 'rgba(0, 123, 255, 1)',
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
        });
    </script>
@endpush
