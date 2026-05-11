@extends('Managerzone.layout')

@section('title', 'Help & Support - Inventory Pro')
@section('page_title', 'Help & Support')
@section('page_subtitle', 'Get assistance, read FAQs, or contact our support team')

@section('content')
<div class="tables-row" style="grid-template-columns: 1fr 1fr;">
    <!-- FAQ Section -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">FREQUENTLY ASKED QUESTIONS</h2>
        </div>
        <div style="display: flex; flex-direction: column; gap: 15px;">
            <div style="border: 1px solid var(--border); border-radius: 8px; padding: 15px; cursor: pointer;">
                <div style="font-weight: 600; font-size: 14px; display: flex; justify-content: space-between;">
                    How do I generate a monthly sales report? <i class="ph ph-caret-down"></i>
                </div>
                <div style="font-size: 13px; color: var(--text-gray); margin-top: 10px;">
                    Navigate to the Reports module, select "Sales Report", choose "This Month" from the date dropdown, and click the Export button.
                </div>
            </div>
            <div style="border: 1px solid var(--border); border-radius: 8px; padding: 15px; cursor: pointer;">
                <div style="font-weight: 600; font-size: 14px; display: flex; justify-content: space-between;">
                    How can I reset an employee's password? <i class="ph ph-caret-right"></i>
                </div>
            </div>
            <div style="border: 1px solid var(--border); border-radius: 8px; padding: 15px; cursor: pointer;">
                <div style="font-weight: 600; font-size: 14px; display: flex; justify-content: space-between;">
                    What happens when stock falls below the minimum required level? <i class="ph ph-caret-right"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Support Ticket / Contact Form -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">OPEN A SUPPORT TICKET</h2>
        </div>
        <p style="font-size: 13px; color: var(--text-gray); margin-bottom: 20px;">If you couldn't find your answer in the FAQs, please reach out to our technical team.</p>
        <form style="display: flex; flex-direction: column; gap: 15px;">
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Issue Category</label>
                <select class="select-filter" style="width: 100%;">
                    <option>Technical Issue (Bugs / Errors)</option>
                    <option>Billing / Account</option>
                    <option>Feature Request</option>
                    <option>Other</option>
                </select>
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Subject</label>
                <input type="text" class="select-filter" style="width: 100%;" placeholder="Brief summary of the issue">
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Message</label>
                <textarea class="select-filter" style="width: 100%; min-height: 120px; resize: none;" placeholder="Please provide as much detail as possible..."></textarea>
            </div>
            <button type="button" class="quick-actions-btn" style="margin: 10px 0 0 0; background: var(--primary); color: white;">Submit Ticket</button>
        </form>
    </div>
</div>
@endsection
