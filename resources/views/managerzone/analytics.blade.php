@extends('Managerzone.layout')

@section('title', 'Analytics - Inventory Pro')
@section('page_title', 'Business Analytics')
@section('page_subtitle', 'Deep insights into revenue, KPIs, and forecasts')

@section('content')
<!-- KPI Cards -->
<div class="cards-grid" style="grid-template-columns: repeat(4, 1fr); margin-bottom: 24px;">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon success"><i class="ph ph-currency-dollar"></i></div>
            <span class="stat-title">Gross Revenue</span>
        </div>
        <div class="stat-value">$145,280</div>
        <div class="stat-trend"><span class="trend-up"><i class="ph ph-trend-up"></i> 15%</span></div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon primary"><i class="ph ph-shopping-bag"></i></div>
            <span class="stat-title">Customer Acquisition Cost</span>
        </div>
        <div class="stat-value">$45.20</div>
        <div class="stat-trend"><span class="trend-down"><i class="ph ph-trend-down"></i> 2.4%</span></div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon warning"><i class="ph ph-chart-line-up"></i></div>
            <span class="stat-title">Inventory Turnover</span>
        </div>
        <div class="stat-value">4.2x</div>
        <div class="stat-trend"><span class="trend-up"><i class="ph ph-trend-up"></i> 0.8x</span></div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon purple"><i class="ph ph-users"></i></div>
            <span class="stat-title">Customer Retention</span>
        </div>
        <div class="stat-value">86.5%</div>
        <div class="stat-trend"><span class="trend-up"><i class="ph ph-trend-up"></i> 4.1%</span></div>
    </div>
</div>

<div class="tables-row" style="grid-template-columns: 1fr 1fr;">
    <!-- Revenue Chart -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">REVENUE TRENDS</h2>
            <select class="select-filter">
                <option>YTD 2025</option>
            </select>
        </div>
        <div class="chart-container">
            <canvas id="revenueChart"></canvas>
        </div>
    </div>

    <!-- Forecast Graph -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">SALES FORECAST (NEXT 6 MONTHS)</h2>
        </div>
        <div class="chart-container">
            <canvas id="forecastChart"></canvas>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const revCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue',
                data: [120000, 135000, 128000, 142000, 145280, 150000],
                borderColor: '#10B981',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } }
        }
    });

    const forCtx = document.getElementById('forecastChart').getContext('2d');
    new Chart(forCtx, {
        type: 'line',
        data: {
            labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Expected',
                    data: [155000, 160000, 165000, 172000, 185000, 200000],
                    borderColor: '#4361EE',
                    borderDash: [5, 5],
                    tension: 0.4
                },
                {
                    label: 'Optimistic',
                    data: [160000, 170000, 180000, 195000, 210000, 230000],
                    borderColor: 'rgba(67, 97, 238, 0.3)',
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'top' } }
        }
    });
</script>
@endsection
