@extends('Managerzone.layout')

@section('title', 'Team Performance - Inventory Pro')
@section('page_title', 'Team Performance')
@section('page_subtitle', 'Monitor employee efficiency, attendance, and metrics')

@section('content')
<div class="charts-row" style="grid-template-columns: 1fr 1fr; margin-bottom: 24px;">
    <!-- Performance Chart -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">PERFORMANCE TRENDS</h2>
            <select class="select-filter">
                <option>This Week</option>
                <option>This Month</option>
            </select>
        </div>
        <div class="chart-container">
            <canvas id="performanceChart"></canvas>
        </div>
    </div>

    <!-- Attendance Tracker -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">ATTENDANCE TRACKER</h2>
            <a href="#" class="panel-action">Details</a>
        </div>
        <div style="display: flex; gap: 20px; margin-bottom: 20px;">
            <div class="stat-card" style="flex: 1; padding: 15px;">
                <div class="stat-title">Present Today</div>
                <div class="stat-value" style="color: var(--success); font-size: 20px;">42 / 45</div>
            </div>
            <div class="stat-card" style="flex: 1; padding: 15px;">
                <div class="stat-title">On Leave</div>
                <div class="stat-value" style="color: var(--warning); font-size: 20px;">3</div>
            </div>
        </div>
        <div>
            <h3 style="font-size: 13px; color: var(--text-gray); margin-bottom: 10px;">Recent Leaves</h3>
            <div class="mini-card-item">
                <div class="item-icon warning"><i class="ph ph-user-minus"></i></div>
                <div class="item-details">
                    <div class="item-title">Mark T.</div>
                    <div class="item-meta">Sick Leave (2 Days)</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Employee Table -->
<div class="panel">
    <div class="panel-header">
        <h2 class="panel-title">EMPLOYEE DIRECTORY & METRICS</h2>
        <div style="display: flex; gap: 10px;">
            <input type="text" class="select-filter" placeholder="Search employees..." style="width: 200px;">
            <button class="quick-actions-btn" style="margin: 0; padding: 6px 12px;"><i class="ph ph-plus"></i> Add</button>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Employee</th>
                <th>Department</th>
                <th>Role</th>
                <th>Tasks Completed</th>
                <th>Efficiency Rating</th>
                <th>Status</th>
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
                <td>Production</td>
                <td>Lead</td>
                <td>28/32</td>
                <td><span style="color: var(--success); font-weight: 600;">94%</span></td>
                <td><span class="status-badge status-completed">Active</span></td>
            </tr>
            <tr>
                <td>
                    <div class="team-member">
                        <img src="https://ui-avatars.com/api/?name=Mike+Chen&background=random" alt="" class="team-avatar">
                        <span style="font-weight: 500; font-size: 13px;">Mike Chen</span>
                    </div>
                </td>
                <td>Quality</td>
                <td>Manager</td>
                <td>24/28</td>
                <td><span style="color: var(--success); font-weight: 600;">88%</span></td>
                <td><span class="status-badge status-completed">Active</span></td>
            </tr>
            <tr>
                <td>
                    <div class="team-member">
                        <img src="https://ui-avatars.com/api/?name=Emily+Davis&background=random" alt="" class="team-avatar">
                        <span style="font-weight: 500; font-size: 13px;">Emily Davis</span>
                    </div>
                </td>
                <td>Inventory</td>
                <td>Specialist</td>
                <td>15/35</td>
                <td><span style="color: var(--warning); font-weight: 600;">65%</span></td>
                <td><span class="status-badge status-progress">On Leave</span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script>
    const perfCtx = document.getElementById('performanceChart').getContext('2d');
    new Chart(perfCtx, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            datasets: [{
                label: 'Avg Efficiency (%)',
                data: [85, 88, 92, 90, 94],
                backgroundColor: '#4361EE',
                borderRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, max: 100 } }
        }
    });
</script>
@endsection
