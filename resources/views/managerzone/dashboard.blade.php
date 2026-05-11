@extends('Managerzone.layout')
@section('content')
<div class="cards-grid">
            <!-- Card 1 -->
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon success">
                        <i class="ph ph-currency-dollar"></i>
                    </div>
                    <span class="stat-title">Total Revenue</span>
                </div>
                <div class="stat-value">$84,592</div>
                <div class="stat-trend">
                    <span class="trend-up"><i class="ph ph-trend-up"></i> 24%</span>
                    <span class="trend-text">vs last week</span>
                </div>
                <canvas id="sparkline1" class="sparkline"></canvas>
            </div>
            <!-- Card 2 -->
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon primary">
                        <i class="ph ph-shopping-cart"></i>
                    </div>
                    <span class="stat-title">Total Orders</span>
                </div>
                <div class="stat-value">1,248</div>
                <div class="stat-trend">
                    <span class="trend-up"><i class="ph ph-trend-up"></i> 15%</span>
                    <span class="trend-text">vs last week</span>
                </div>
                <canvas id="sparkline2" class="sparkline"></canvas>
            </div>
            <!-- Card 3 -->
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon purple">
                        <i class="ph ph-factory"></i>
                    </div>
                    <span class="stat-title">Production Output</span>
                </div>
                <div class="stat-value">1,890</div>
                <div class="stat-trend">
                    <span class="trend-up"><i class="ph ph-trend-up"></i> 18%</span>
                    <span class="trend-text">vs last week</span>
                </div>
                <canvas id="sparkline3" class="sparkline"></canvas>
            </div>
            <!-- Card 4 -->
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon warning">
                        <i class="ph ph-package"></i>
                    </div>
                    <span class="stat-title">Low Stock Items</span>
                </div>
                <div class="stat-value">18</div>
                <div class="stat-trend">
                    <span class="trend-down"><i class="ph ph-trend-down"></i> 10%</span>
                    <span class="trend-text">vs last week</span>
                </div>
                <canvas id="sparkline4" class="sparkline"></canvas>
            </div>
            <!-- Card 5 -->
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon success">
                        <i class="ph ph-users"></i>
                    </div>
                    <span class="stat-title">Team Efficiency</span>
                </div>
                <div class="stat-value">92%</div>
                <div class="stat-trend">
                    <span class="trend-up"><i class="ph ph-trend-up"></i> 8%</span>
                    <span class="trend-text">vs last week</span>
                </div>
                <canvas id="sparkline5" class="sparkline"></canvas>
            </div>
            <!-- Card 6 -->
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon danger">
                        <i class="ph ph-clipboard-text"></i>
                    </div>
                    <span class="stat-title">Pending Approvals</span>
                </div>
                <div class="stat-value">7</div>
                <div class="stat-trend">
                    <span class="trend-down"><i class="ph ph-trend-down"></i> 12%</span>
                    <span class="trend-text">vs last week</span>
                </div>
                <canvas id="sparkline6" class="sparkline"></canvas>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="charts-row">
            <!-- Operations Overview -->
            <div class="panel">
                <div class="panel-header">
                    <h2 class="panel-title">OPERATIONS OVERVIEW</h2>
                    <select class="select-filter">
                        <option>Daily</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                    </select>
                </div>
                <div class="chart-container">
                    <canvas id="operationsChart"></canvas>
                </div>
                <div style="display: flex; justify-content: center; gap: 20px; margin-top: 10px;">
                    <div style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 500;"><span class="dot" style="background: var(--primary);"></span> Orders</div>
                    <div style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 500;"><span class="dot" style="background: var(--success);"></span> Production</div>
                    <div style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 500;"><span class="dot" style="background: var(--warning);"></span> Deliveries</div>
                </div>
            </div>

            <!-- Orders By Status -->
            <div class="panel">
                <div class="panel-header">
                    <h2 class="panel-title">ORDERS BY STATUS</h2>
                </div>
                <div class="donut-container">
                    <canvas id="ordersDonut"></canvas>
                    <div class="donut-center-text">
                        <div class="donut-center-value">1,248</div>
                        <div class="donut-center-label">Total Orders</div>
                    </div>
                </div>
                <div class="legend">
                    <div class="legend-item">
                        <div class="legend-item-left"><span class="dot" style="background: var(--success);"></span> Completed</div>
                        <div><span class="legend-value">780</span> <span class="legend-percent">(62.5%)</span></div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-item-left"><span class="dot" style="background: var(--primary);"></span> In Progress</div>
                        <div><span class="legend-value">280</span> <span class="legend-percent">(22.4%)</span></div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-item-left"><span class="dot" style="background: var(--warning);"></span> Pending</div>
                        <div><span class="legend-value">120</span> <span class="legend-percent">(9.6%)</span></div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-item-left"><span class="dot" style="background: var(--danger);"></span> On Hold</div>
                        <div><span class="legend-value">68</span> <span class="legend-percent">(5.5%)</span></div>
                    </div>
                </div>
            </div>

            <!-- Task Overview -->
            <div class="panel">
                <div class="panel-header">
                    <h2 class="panel-title">TASK OVERVIEW</h2>
                </div>
                <div class="donut-container" style="height: 150px; margin-bottom: 20px;">
                    <canvas id="tasksDonut"></canvas>
                    <div class="donut-center-text">
                        <div class="donut-center-value">85%</div>
                        <div class="donut-center-label">Completed</div>
                    </div>
                </div>
                <div class="legend">
                    <div class="legend-item" style="margin-bottom: 8px;">
                        <div class="legend-item-left"><span class="dot" style="background: var(--success);"></span> Completed</div>
                        <span class="legend-value">34</span>
                    </div>
                    <div class="legend-item" style="margin-bottom: 8px;">
                        <div class="legend-item-left"><span class="dot" style="background: var(--primary);"></span> In Progress</div>
                        <span class="legend-value">6</span>
                    </div>
                    <div class="legend-item" style="margin-bottom: 8px;">
                        <div class="legend-item-left"><span class="dot" style="background: var(--warning);"></span> Pending</div>
                        <span class="legend-value">2</span>
                    </div>
                    <div class="legend-item" style="margin-bottom: 16px;">
                        <div class="legend-item-left"><span class="dot" style="background: var(--danger);"></span> Overdue</div>
                        <span class="legend-value">3</span>
                    </div>
                    <div class="legend-item" style="border-top: 1px solid var(--border); padding-top: 12px; margin-bottom: 0;">
                        <div class="legend-item-left" style="color: var(--text-gray);">Total Tasks</div>
                        <span class="legend-value">45</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tables Row -->
        <div class="tables-row">
            <!-- Recent Orders -->
            <div class="panel">
                <div class="panel-header">
                    <h2 class="panel-title">RECENT ORDERS</h2>
                    <a href="#" class="panel-action">View All</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ORD-2025-1250</td>
                            <td>Acme Corporation</td>
                            <td>$12,450</td>
                            <td><span class="status-badge status-completed">Completed</span></td>
                            <td>May 24, 2025</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-text">100%</div>
                                    <div class="progress-bar-container"><div class="progress-bar" style="width: 100%; background: var(--success);"></div></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ORD-2025-1249</td>
                            <td>Tech Solutions Inc.</td>
                            <td>$8,750</td>
                            <td><span class="status-badge status-progress">In Progress</span></td>
                            <td>May 24, 2025</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-text">75%</div>
                                    <div class="progress-bar-container"><div class="progress-bar" style="width: 75%; background: var(--primary);"></div></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ORD-2025-1248</td>
                            <td>Global Industries</td>
                            <td>$15,200</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td>May 23, 2025</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-text">25%</div>
                                    <div class="progress-bar-container"><div class="progress-bar" style="width: 25%; background: var(--warning);"></div></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ORD-2025-1247</td>
                            <td>Business Co.</td>
                            <td>$6,300</td>
                            <td><span class="status-badge status-completed">Completed</span></td>
                            <td>May 23, 2025</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-text">100%</div>
                                    <div class="progress-bar-container"><div class="progress-bar" style="width: 100%; background: var(--success);"></div></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ORD-2025-1246</td>
                            <td>Enterprise Ltd.</td>
                            <td>$9,870</td>
                            <td><span class="status-badge status-progress">In Progress</span></td>
                            <td>May 22, 2025</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-text">60%</div>
                                    <div class="progress-bar-container"><div class="progress-bar" style="width: 60%; background: var(--primary);"></div></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Team Performance -->
            <div class="panel">
                <div class="panel-header">
                    <h2 class="panel-title">TEAM PERFORMANCE</h2>
                    <a href="#" class="panel-action">View All</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Team Member</th>
                            <th>Role</th>
                            <th>Tasks Completed</th>
                            <th>Efficiency</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="team-member">
                                    <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=random" alt="" class="team-avatar">
                                    <span style="font-weight: 500; font-size: 13px;">Sarah Johnson</span>
                                </div>
                            </td>
                            <td style="font-size: 13px;">Production Lead</td>
                            <td style="font-size: 13px;">28/32</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-bar-container" style="width: 60px;"><div class="progress-bar" style="width: 88%; background: var(--success);"></div></div>
                                    <span style="font-size: 13px; font-weight: 600;">88%</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team-member">
                                    <img src="https://ui-avatars.com/api/?name=Mike+Chen&background=random" alt="" class="team-avatar">
                                    <span style="font-weight: 500; font-size: 13px;">Mike Chen</span>
                                </div>
                            </td>
                            <td style="font-size: 13px;">Quality Manager</td>
                            <td style="font-size: 13px;">24/28</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-bar-container" style="width: 60px;"><div class="progress-bar" style="width: 86%; background: var(--success);"></div></div>
                                    <span style="font-size: 13px; font-weight: 600;">86%</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team-member">
                                    <img src="https://ui-avatars.com/api/?name=Emily+Davis&background=random" alt="" class="team-avatar">
                                    <span style="font-weight: 500; font-size: 13px;">Emily Davis</span>
                                </div>
                            </td>
                            <td style="font-size: 13px;">Inventory Specialist</td>
                            <td style="font-size: 13px;">31/35</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-bar-container" style="width: 60px;"><div class="progress-bar" style="width: 89%; background: var(--success);"></div></div>
                                    <span style="font-size: 13px; font-weight: 600;">89%</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team-member">
                                    <img src="https://ui-avatars.com/api/?name=David+Wilson&background=random" alt="" class="team-avatar">
                                    <span style="font-weight: 500; font-size: 13px;">David Wilson</span>
                                </div>
                            </td>
                            <td style="font-size: 13px;">Sales Manager</td>
                            <td style="font-size: 13px;">26/30</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-bar-container" style="width: 60px;"><div class="progress-bar" style="width: 87%; background: var(--success);"></div></div>
                                    <span style="font-size: 13px; font-weight: 600;">87%</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team-member">
                                    <img src="https://ui-avatars.com/api/?name=Lisa+Brown&background=random" alt="" class="team-avatar">
                                    <span style="font-weight: 500; font-size: 13px;">Lisa Brown</span>
                                </div>
                            </td>
                            <td style="font-size: 13px;">Purchasing Agent</td>
                            <td style="font-size: 13px;">22/26</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <div class="progress-bar-container" style="width: 60px;"><div class="progress-bar" style="width: 85%; background: var(--success);"></div></div>
                                    <span style="font-size: 13px; font-weight: 600;">85%</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="bottom-row">
            <!-- Low Stock Alerts -->
            <div class="panel">
                <div class="panel-header" style="margin-bottom: 12px;">
                    <h2 class="panel-title">LOW STOCK ALERTS</h2>
                    <a href="#" class="panel-action">View All</a>
                </div>
                <div class="mini-card-item">
                    <div class="item-icon alert">
                        <i class="ph ph-warning"></i>
                    </div>
                    <div class="item-details">
                        <div class="item-title">Office Chair</div>
                        <div class="item-meta">Current: 5 units</div>
                        <div class="item-meta item-meta-highlight">Min: 20 units</div>
                    </div>
                </div>
            </div>

            <!-- Top Products -->
            <div class="panel">
                <div class="panel-header" style="margin-bottom: 12px;">
                    <h2 class="panel-title">TOP PRODUCTS</h2>
                    <a href="#" class="panel-action">This Week</a>
                </div>
                <div class="mini-card-item">
                    <div class="item-icon product" style="background: none;">
                        <i class="ph ph-armchair" style="font-size: 32px; color: #333;"></i>
                    </div>
                    <div class="item-details">
                        <div class="item-title">Office Chair</div>
                        <div class="item-meta">Sales: 150 units</div>
                        <div class="item-meta">Revenue: $7,500</div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="panel">
                <div class="panel-header" style="margin-bottom: 12px;">
                    <h2 class="panel-title">RECENT ACTIVITIES</h2>
                </div>
                <div class="mini-card-item">
                    <div class="item-icon activity" style="width: 32px; height: 32px; font-size: 16px;">
                        <i class="ph ph-clipboard-text"></i>
                    </div>
                    <div class="item-details">
                        <div class="item-title" style="font-weight: 500; font-size: 13px;">New order ORD-2025-1250 received</div>
                        <div class="item-meta">2 minutes ago</div>
                    </div>
                </div>
                <div class="mini-card-item">
                    <div class="item-icon success" style="width: 32px; height: 32px; font-size: 16px;">
                        <i class="ph ph-check-circle"></i>
                    </div>
                    <div class="item-details">
                        <div class="item-title" style="font-weight: 500; font-size: 13px;">Production batch completed</div>
                        <div class="item-meta">15 minutes ago</div>
                    </div>
                </div>
            </div>

            <!-- Approval Requests -->
            <div class="panel">
                <div class="panel-header" style="margin-bottom: 12px;">
                    <h2 class="panel-title">APPROVAL REQUESTS</h2>
                    <a href="#" class="panel-action">View All</a>
                </div>
                <div class="mini-card-item">
                    <div class="item-icon approval" style="width: 32px; height: 32px; font-size: 16px;">
                        <i class="ph ph-file-text"></i>
                    </div>
                    <div class="item-details">
                        <div class="item-title" style="font-size: 13px;">Purchase Order #PO-2025-084</div>
                    </div>
                    <div class="item-right">
                        <div class="item-value">$5,250</div>
                        <div class="priority-badge priority-high">High</div>
                    </div>
                </div>
                <div class="mini-card-item">
                    <div class="item-icon warning" style="width: 32px; height: 32px; font-size: 16px; background: var(--warning-light); color: var(--warning);">
                        <i class="ph ph-file-text"></i>
                    </div>
                    <div class="item-details">
                        <div class="item-title" style="font-size: 13px;">Production Plan #PP-2025-042</div>
                    </div>
                    <div class="item-right">
                        <div class="item-value">$12,800</div>
                        <div class="priority-badge priority-medium">Medium</div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
@section('scripts')
<script>
        // Chart.js Configuration
        Chart.defaults.font.family = 'Inter';
        Chart.defaults.color = '#6B7280';
        Chart.defaults.scale.grid.color = '#E5E7EB';

        // Helper for creating sparklines
        function createSparkline(id, data, color) {
            const ctx = document.getElementById(id).getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['1', '2', '3', '4', '5', '6', '7'],
                    datasets: [{
                        data: data,
                        borderColor: color,
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false }, tooltip: { enabled: false } },
                    scales: {
                        x: { display: false },
                        y: { display: false, min: Math.min(...data) - 10, max: Math.max(...data) + 10 }
                    },
                    layout: { padding: 0 }
                }
            });
        }

        // Initialize Sparklines
        createSparkline('sparkline1', [65, 75, 70, 80, 75, 90, 85], '#10B981');
        createSparkline('sparkline2', [40, 50, 45, 60, 55, 70, 65], '#4361EE');
        createSparkline('sparkline3', [30, 45, 40, 55, 50, 65, 60], '#8B5CF6');
        createSparkline('sparkline4', [80, 70, 75, 60, 65, 50, 45], '#F59E0B');
        createSparkline('sparkline5', [85, 88, 86, 90, 89, 92, 91], '#10B981');
        createSparkline('sparkline6', [15, 12, 14, 10, 11, 8, 7], '#EF4444');

        // Operations Overview Chart (Line)
        const opCtx = document.getElementById('operationsChart').getContext('2d');
        new Chart(opCtx, {
            type: 'line',
            data: {
                labels: ['May 18', 'May 19', 'May 20', 'May 21', 'May 22', 'May 23', 'May 24'],
                datasets: [
                    {
                        label: 'Orders',
                        data: [700, 1000, 780, 1200, 1050, 1400, 1100],
                        borderColor: '#4361EE',
                        backgroundColor: '#4361EE',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 4,
                        pointBackgroundColor: '#4361EE'
                    },
                    {
                        label: 'Production',
                        data: [350, 550, 480, 750, 700, 1000, 850],
                        borderColor: '#10B981',
                        backgroundColor: '#10B981',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 4,
                        pointBackgroundColor: '#10B981'
                    },
                    {
                        label: 'Deliveries',
                        data: [100, 200, 150, 250, 200, 280, 200],
                        borderColor: '#F59E0B',
                        backgroundColor: '#F59E0B',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 4,
                        pointBackgroundColor: '#F59E0B'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 1500,
                        ticks: { stepSize: 250 },
                        border: { display: false }
                    },
                    x: {
                        grid: { display: false },
                        border: { display: false }
                    }
                }
            }
        });

        // Orders By Status Chart (Donut)
        const orderCtx = document.getElementById('ordersDonut').getContext('2d');
        new Chart(orderCtx, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'In Progress', 'Pending', 'On Hold'],
                datasets: [{
                    data: [780, 280, 120, 68],
                    backgroundColor: ['#10B981', '#4361EE', '#F59E0B', '#EF4444'],
                    borderWidth: 0,
                    cutout: '75%'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false }, tooltip: { enabled: true } }
            }
        });

        // Task Overview Chart (Donut)
        const taskCtx = document.getElementById('tasksDonut').getContext('2d');
        new Chart(taskCtx, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'Remaining'],
                datasets: [{
                    data: [85, 15],
                    backgroundColor: ['#10B981', '#E5E7EB'],
                    borderWidth: 0,
                    cutout: '80%'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false }, tooltip: { enabled: false } },
                circumference: 360,
                rotation: -90
            }
        });
    </script>
@endsection

