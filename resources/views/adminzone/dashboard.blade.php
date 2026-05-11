@extends('adminzone.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Metrics Grid -->
    <div class="metrics-grid">
        <!-- Metric Card 1 -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Total Users</span>
                <div class="metric-icon-wrap primary">
                    <i class="ph ph-users"></i>
                </div>
            </div>
            <div class="metric-value">1,248</div>
            <div class="metric-footer">
                <span class="trend-badge trend-up">
                    <i class="ph ph-trend-up"></i> 12%
                </span>
                <span class="trend-text">vs last month</span>
            </div>
            <!-- Hover Progress -->
            <div class="hover-progress-container">
                <div class="hover-progress-label">Goal Progress</div>
                <div class="hover-progress-track">
                    <div class="hover-progress-bar bg-primary" style="--target-width: 75%;"></div>
                </div>
            </div>
        </div>

        <!-- Metric Card 2 -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Active Orders</span>
                <div class="metric-icon-wrap success">
                    <i class="ph ph-shopping-cart"></i>
                </div>
            </div>
            <div class="metric-value">342</div>
            <div class="metric-footer">
                <span class="trend-badge trend-up">
                    <i class="ph ph-trend-up"></i> 8%
                </span>
                <span class="trend-text">vs last week</span>
            </div>
            <!-- Hover Progress -->
            <div class="hover-progress-container">
                <div class="hover-progress-label">Monthly Target</div>
                <div class="hover-progress-track">
                    <div class="hover-progress-bar bg-success" style="--target-width: 45%;"></div>
                </div>
            </div>
        </div>

        <!-- Metric Card 3 -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Low Stock Items</span>
                <div class="metric-icon-wrap warning">
                    <i class="ph ph-warning-circle"></i>
                </div>
            </div>
            <div class="metric-value">18</div>
            <div class="metric-footer">
                <span class="trend-badge trend-down">
                    <i class="ph ph-trend-down"></i> 2%
                </span>
                <span class="trend-text">needs attention</span>
            </div>
            <!-- Hover Progress -->
            <div class="hover-progress-container">
                <div class="hover-progress-label">Stock Health</div>
                <div class="hover-progress-track">
                    <div class="hover-progress-bar bg-warning" style="--target-width: 88%;"></div>
                </div>
            </div>
        </div>

        <!-- Metric Card 4 -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Total Revenue</span>
                <div class="metric-icon-wrap danger">
                    <i class="ph ph-currency-dollar"></i>
                </div>
            </div>
            <div class="metric-value">$84,592</div>
            <div class="metric-footer">
                <span class="trend-badge trend-up">
                    <i class="ph ph-trend-up"></i> 24%
                </span>
                <span class="trend-text">vs last month</span>
            </div>
            <!-- Hover Progress -->
            <div class="hover-progress-container">
                <div class="hover-progress-label">Revenue Goal</div>
                <div class="hover-progress-track">
                    <div class="hover-progress-bar bg-danger" style="--target-width: 65%;"></div>
                </div>
            </div>
        </div>

        <!-- Metric Card 5 (Pending) -->
        <div class="metric-card-premium">
            <div class="metric-header">
                <span class="metric-title">Pending Tasks</span>
                <div class="metric-icon-wrap info">
                    <i class="ph ph-clock-counter-clockwise"></i>
                </div>
            </div>
            <div class="metric-value">42</div>
            <div class="metric-footer">
                <span class="trend-badge trend-down">
                    <i class="ph ph-trend-down"></i> 5%
                </span>
                <span class="trend-text">vs yesterday</span>
            </div>
            <!-- Hover Progress -->
            <div class="hover-progress-container">
                <div class="hover-progress-label">Task Completion</div>
                <div class="hover-progress-track">
                    <div class="hover-progress-bar bg-info" style="--target-width: 30%; background-color: #8b5cf6;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="charts-row">
        <!-- Production Overview Section -->
        <div class="chart-container-premium">
        <div class="chart-header">
            <h3 class="chart-title">PRODUCTION OVERVIEW</h3>
            <select class="chart-filter">
                <option>Daily</option>
                <option>Weekly</option>
                <option>Monthly</option>
            </select>
        </div>
        <div class="chart-body">
            <canvas id="productionChart"></canvas>
        </div>
    </div>

    <!-- Production Status Section (Doughnut) -->
    <div class="chart-container-premium">
        <div class="chart-header">
            <h3 class="chart-title">PRODUCTION STATUS</h3>
        </div>
        
        <div class="doughnut-layout">
            <div class="doughnut-wrapper">
                <canvas id="statusChart"></canvas>
                <div class="doughnut-center-text">
                    <h2>1,250</h2>
                    <span>Total Orders</span>
                </div>
            </div>
            
            <div class="custom-legend">
                <div class="legend-item">
                    <div class="legend-label-wrap">
                        <span class="legend-dot" style="background-color: #10b981;"></span>
                        <span class="legend-label">Completed</span>
                    </div>
                    <div class="legend-values">
                        <span class="legend-number">980</span>
                        <span class="legend-percent">(78.4%)</span>
                    </div>
                </div>
                
                <div class="legend-item">
                    <div class="legend-label-wrap">
                        <span class="legend-dot" style="background-color: #f59e0b;"></span>
                        <span class="legend-label">In Progress</span>
                    </div>
                    <div class="legend-values">
                        <span class="legend-number">210</span>
                        <span class="legend-percent">(16.8%)</span>
                    </div>
                </div>
                
                <div class="legend-item">
                    <div class="legend-label-wrap">
                        <span class="legend-dot" style="background-color: #8b5cf6;"></span>
                        <span class="legend-label">Pending</span>
                    </div>
                    <div class="legend-values">
                        <span class="legend-number">60</span>
                        <span class="legend-percent">(4.8%)</span>
                    </div>
                </div>
                
                <div class="legend-item">
                    <div class="legend-label-wrap">
                        <span class="legend-dot" style="background-color: #ef4444;"></span>
                        <span class="legend-label">On Hold</span>
                    </div>
                    <div class="legend-values">
                        <span class="legend-number">15</span>
                        <span class="legend-percent">(1.2%)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bottom Row: Table + Production Plan -->
<div class="bottom-row">

    <!-- Recent Production Orders Table (60%) -->
    <div class="table-container-premium">
        <div class="table-header">
            <h3 class="table-title">RECENT PRODUCTION ORDERS</h3>
            <a href="#" class="view-all-link">View All</a>
        </div>
        
        <table class="premium-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>Due Date</th>
                    <th>Progress</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PROD-2025-0250</td>
                    <td>Office Chair</td>
                    <td>150</td>
                    <td><span class="status-pill status-completed">Completed</span></td>
                    <td class="text-muted">May 17, 2025</td>
                    <td class="text-muted">May 20, 2025</td>
                    <td>
                        <div class="mini-progress-wrapper">
                            <span class="mini-progress-text">100%</span>
                            <div class="mini-progress-track">
                                <div class="mini-progress-bar bg-success" style="width: 100%;"></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>PROD-2025-0249</td>
                    <td>Work Table</td>
                    <td>80</td>
                    <td><span class="status-pill status-inprogress">In Progress</span></td>
                    <td class="text-muted">May 20, 2025</td>
                    <td class="text-muted">May 25, 2025</td>
                    <td>
                        <div class="mini-progress-wrapper">
                            <span class="mini-progress-text">65%</span>
                            <div class="mini-progress-track">
                                <div class="mini-progress-bar bg-warning" style="width: 65%;"></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>PROD-2025-0248</td>
                    <td>Storage Cabinet</td>
                    <td>50</td>
                    <td><span class="status-pill status-inprogress">In Progress</span></td>
                    <td class="text-muted">May 21, 2025</td>
                    <td class="text-muted">May 26, 2025</td>
                    <td>
                        <div class="mini-progress-wrapper">
                            <span class="mini-progress-text">40%</span>
                            <div class="mini-progress-track">
                                <div class="mini-progress-bar bg-warning" style="width: 40%;"></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>PROD-2025-0247</td>
                    <td>Bookshelf</td>
                    <td>120</td>
                    <td><span class="status-pill status-pending">Pending</span></td>
                    <td class="text-muted">May 24, 2025</td>
                    <td class="text-muted">May 30, 2025</td>
                    <td>
                        <div class="mini-progress-wrapper">
                            <span class="mini-progress-text">0%</span>
                            <div class="mini-progress-track">
                                <div class="mini-progress-bar" style="width: 0%; background-color: #8b5cf6;"></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>PROD-2025-0246</td>
                    <td>Meeting Chair</td>
                    <td>200</td>
                    <td><span class="status-pill status-onhold">On Hold</span></td>
                    <td class="text-muted">May 18, 2025</td>
                    <td class="text-muted">May 28, 2025</td>
                    <td>
                        <div class="mini-progress-wrapper">
                            <span class="mini-progress-text">15%</span>
                            <div class="mini-progress-track">
                                <div class="mini-progress-bar bg-danger" style="width: 15%;"></div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class="table-footer">
            <span class="table-info">Showing 1 to 5 of 15 orders</span>
            <div class="pagination">
                <button class="page-btn"><i class="ph ph-caret-left"></i></button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn"><i class="ph ph-caret-right"></i></button>
            </div>
        </div>
    </div>

    <!-- Production Plan (40%) -->
    <div class="plan-container-premium">
        <div class="table-header">
            <div>
                <h3 class="table-title" style="display:inline;">PRODUCTION PLAN</h3>
                <span class="plan-week">(This Week)</span>
            </div>
            <a href="#" class="view-all-link">View Plan</a>
        </div>

        <div class="plan-list">

            <div class="plan-item">
                <div class="plan-item-icon"><i class="ph ph-office-chair"></i></div>
                <div class="plan-item-body">
                    <div class="plan-item-name">Office Chair</div>
                    <div class="plan-item-meta">Planned: 150 &nbsp;|&nbsp; Actual: 150</div>
                    <div class="plan-progress-wrap">
                        <div class="plan-progress-track">
                            <div class="plan-progress-bar bg-success" style="width: 100%;"></div>
                        </div>
                        <span class="plan-progress-pct">100%</span>
                    </div>
                </div>
            </div>

            <div class="plan-item">
                <div class="plan-item-icon"><i class="ph ph-table"></i></div>
                <div class="plan-item-body">
                    <div class="plan-item-name">Work Table</div>
                    <div class="plan-item-meta">Planned: 80 &nbsp;|&nbsp; Actual: 52</div>
                    <div class="plan-progress-wrap">
                        <div class="plan-progress-track">
                            <div class="plan-progress-bar bg-warning" style="width: 65%;"></div>
                        </div>
                        <span class="plan-progress-pct">65%</span>
                    </div>
                </div>
            </div>

            <div class="plan-item">
                <div class="plan-item-icon"><i class="ph ph-archive-box"></i></div>
                <div class="plan-item-body">
                    <div class="plan-item-name">Storage Cabinet</div>
                    <div class="plan-item-meta">Planned: 50 &nbsp;|&nbsp; Actual: 20</div>
                    <div class="plan-progress-wrap">
                        <div class="plan-progress-track">
                            <div class="plan-progress-bar bg-warning" style="width: 40%;"></div>
                        </div>
                        <span class="plan-progress-pct">40%</span>
                    </div>
                </div>
            </div>

            <div class="plan-item">
                <div class="plan-item-icon"><i class="ph ph-bookmarks"></i></div>
                <div class="plan-item-body">
                    <div class="plan-item-name">Bookshelf</div>
                    <div class="plan-item-meta">Planned: 120 &nbsp;|&nbsp; Actual: 0</div>
                    <div class="plan-progress-wrap">
                        <div class="plan-progress-track">
                            <div class="plan-progress-bar" style="width: 0%;"></div>
                        </div>
                        <span class="plan-progress-pct">0%</span>
                    </div>
                </div>
            </div>

            <div class="plan-item">
                <div class="plan-item-icon"><i class="ph ph-office-chair"></i></div>
                <div class="plan-item-body">
                    <div class="plan-item-name">Meeting Chair</div>
                    <div class="plan-item-meta">Planned: 200 &nbsp;|&nbsp; Actual: 30</div>
                    <div class="plan-progress-wrap">
                        <div class="plan-progress-track">
                            <div class="plan-progress-bar bg-danger" style="width: 15%;"></div>
                        </div>
                        <span class="plan-progress-pct">15%</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="plan-footer">
            <span class="plan-footer-total">Total Planned: <strong>600</strong></span>
            <div class="plan-footer-overall">
                Overall Progress
                <span class="plan-overall-badge">54%</span>
            </div>
        </div>
    </div>

</div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('productionChart').getContext('2d');
            
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['May 18', 'May 19', 'May 20', 'May 21', 'May 22', 'May 23', 'May 24'],
                    datasets: [
                        {
                            label: 'Planned',
                            data: [500, 750, 550, 950, 800, 1150, 850],
                            borderColor: '#3b82f6',
                            backgroundColor: 'rgba(59, 130, 246, 0.05)',
                            borderWidth: 2,
                            pointBackgroundColor: '#3b82f6',
                            pointRadius: 4,
                            fill: true,
                            tension: 0.3
                        },
                        {
                            label: 'Completed',
                            data: [200, 380, 320, 560, 540, 850, 620],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.05)',
                            borderWidth: 2,
                            pointBackgroundColor: '#10b981',
                            pointRadius: 4,
                            fill: true,
                            tension: 0.3
                        },
                        {
                            label: 'In Progress',
                            data: [50, 100, 80, 120, 100, 150, 100],
                            borderColor: '#f59e0b',
                            backgroundColor: 'rgba(245, 158, 11, 0.05)',
                            borderWidth: 2,
                            pointBackgroundColor: '#f59e0b',
                            pointRadius: 4,
                            fill: true,
                            tension: 0.3
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                boxWidth: 8,
                                font: {
                                    size: 12,
                                    family: "'Inter', sans-serif"
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            border: { dash: [4, 4] },
                            grid: {
                                color: '#f1f5f9',
                                tickBorderDash: [4, 4]
                            },
                            ticks: {
                                color: '#94a3b8',
                                stepSize: 250
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: '#94a3b8'
                            }
                        }
                    }
                }
            });

            // Production Status Doughnut Chart
            const statusCtx = document.getElementById('statusChart').getContext('2d');
            new Chart(statusCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Completed', 'In Progress', 'Pending', 'On Hold'],
                    datasets: [{
                        data: [980, 210, 60, 15],
                        backgroundColor: [
                            '#10b981', // Green
                            '#f59e0b', // Orange
                            '#8b5cf6', // Purple
                            '#ef4444'  // Red
                        ],
                        borderWidth: 2,
                        borderColor: '#ffffff',
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '75%', // Creates the thin doughnut look
                    plugins: {
                        legend: {
                            display: false // Hide default legend, using custom HTML one
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed !== null) {
                                        label += context.parsed;
                                    }
                                    return label;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>

    <!-- Graph Modal -->
    <div class="graph-modal-overlay" id="graphModal">
        <div class="graph-modal-content">
            <div class="graph-modal-header">
                <div>
                    <h3 class="graph-modal-title" id="graphModalTitle">Metric Details</h3>
                    <p class="graph-modal-subtitle">Performance Overview</p>
                </div>
                <button class="graph-modal-close" id="graphModalClose">
                    <i class="ph ph-x"></i>
                </button>
            </div>
            
            <div class="graph-modal-filters">
                <button class="filter-btn active">Day</button>
                <button class="filter-btn">Month</button>
                <button class="filter-btn">Year</button>
            </div>
            
            <!-- Placeholder for actual chart -->
            <div class="graph-modal-chart-area">
                <i class="ph ph-chart-line-up" style="font-size: 3rem; color: var(--primary-light); margin-bottom: 12px;"></i>
                <p>Chart Data Visualization Area</p>
                <span style="font-size: 0.75rem; color: #94a3b8;">(Integrate Chart.js or ApexCharts here)</span>
            </div>
        </div>
    </div>
@endsection
