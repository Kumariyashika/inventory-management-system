@extends('warehousezone.layouts.app')

@section('title', 'Warehouse Dashboard')

@section('content')
    <!-- Metrics Grid -->
    <div class="metrics-grid">
        <!-- Metric Card 1: Daily Receipts -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Daily Receipts</span>
                <div class="metric-icon-wrap primary">
                    <i class="ph ph-download-simple"></i>
                </div>
            </div>
            <div class="metric-value">18</div>
            <div class="metric-footer">
                <span class="trend-badge trend-up">
                    <i class="ph ph-truck"></i> 5 Trucks
                </span>
                <span class="trend-text">unloaded today</span>
            </div>
        </div>

        <!-- Metric Card 2: Pending Tasks -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Pending Tasks</span>
                <div class="metric-icon-wrap warning">
                    <i class="ph ph-clipboard-text"></i>
                </div>
            </div>
            <div class="metric-value">8</div>
            <div class="metric-footer">
                <span class="trend-badge trend-up">
                    <i class="ph ph-clock"></i> 3 High Priority
                </span>
                <span class="trend-text">in queue</span>
            </div>
        </div>

        <!-- Metric Card 3: Stock Activities -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Stock Activities</span>
                <div class="metric-icon-wrap success">
                    <i class="ph ph-activity"></i>
                </div>
            </div>
            <div class="metric-value">142</div>
            <div class="metric-footer">
                <span class="trend-badge trend-up">
                    <i class="ph ph-trend-up"></i>
                </span>
                <span class="trend-text">movements today</span>
            </div>
        </div>

        <!-- Metric Card 4: Transfers -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Transfers</span>
                <div class="metric-icon-wrap info">
                    <i class="ph ph-arrows-left-right"></i>
                </div>
            </div>
            <div class="metric-value">5</div>
            <div class="metric-footer">
                <span class="trend-badge trend-up">
                    <i class="ph ph-check"></i> 2 Completed
                </span>
                <span class="trend-text">inter-warehouse</span>
            </div>
        </div>
    </div>
@endsection
