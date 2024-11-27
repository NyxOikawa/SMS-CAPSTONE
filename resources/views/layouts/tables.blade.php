@include('includes.base')
<style>
    /* Base styles */
    :root {
        --primary-color: #4B49AC;
        --danger-color: #dc3545;
        --success-color: #28a745;
        --border-color: #ced4da;
        --bg-light: #f8f9fa;
        

 .container.mt-5 {
    max-width: 1400px;
    background-color: white;
    border-radius: 16px;
    padding: 5px;
    margin-top: 0rem !important;
}

    }
    .card {
    background-color: white;
    border-radius: 16px;
    margin-bottom: 20px;
}







/* Optional: Darken the modal backdrop */
.modal-backdrop {
    background-color: rgba(0, 0, 0, 0.4); /* Darker backdrop */
}



/* Action Buttons */
.action-buttons .btn {
    border-radius: 12px; /* Adjust this value for the desired roundness */
    padding: 8px 16px;
    font-size: 14px;
}

.action-buttons .btn-info {
    background-color: #17a2b8;
}

.action-buttons .btn-success {
    background-color: #28a745;
}

.action-buttons .btn:hover {
    opacity: 0.9;
}

.action-buttons .btn .mdi {
    font-size: 16px;
}

.action-buttons .btn .ms-2 {
    margin-left: 8px;
}

    /* Search input styling */
    .search-container {
        margin-bottom: 1.5rem;
    }

    .input-group {
        max-width: 300px;
    }

    .input-group .input-group-text {
        background-color: var(--bg-light);
        border: 1px solid var(--border-color);
        padding: 0.25rem 0.5rem;
        height: 35px;
        display: flex;
        align-items: center;
    }

    .form-control {
        border-left: 1px solid var(--border-color);
        height: 35px;
        padding: 0.50rem;
        font-size: 0.875rem;
    }

    .icon-search {
        font-size: 0.875rem;
        color: #6c757d;
    }

 /* Filters styling */
.filters-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    align-items: center;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background-color: var(--bg-light);
    border-radius: 0.50rem;

}

.filter-group {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.filter-label {
    font-weight: 500;
    margin-bottom: 0;
    white-space: nowrap;
}

.filter-select, .filter-input {
    min-width: 50px; /* Ensure consistent input width  Tis is the widt of Filtering Pages,Agemonth,MonthYear   */
    height: 35px; /* Set consistent height for inputs */
    padding: 5px; /* Padding for inputs */
    font-size: 14px; /* Font size to match */
    box-sizing: border-box; /* Ensure padding doesn't affect width */
}

.filter-select {
    /* Styling specifically for the select elements, if needed */
    -webkit-appearance: none; /* Remove default styling in Safari */
    -moz-appearance: none; /* Remove default styling in Firefox */
    appearance: none; /* Standardize appearance */
}

/* Optional: Adjust the width if you want the month input to match other inputs */
.filter-input[type="month"] {
    width: 170px; /* Optional: Set width explicitly for month input */
}


/* Professional Alert Styles */
:root {
    --alert-success-bg: #d4edda;
    --alert-success-text: #155724;
    --alert-success-border: #c3e6cb;
    
    --alert-danger-bg: #f8d7da;
    --alert-danger-text: #721c24;
    --alert-danger-border: #f5c6cb;
    
    --alert-warning-bg: #fff3cd;
    --alert-warning-text: #856404;
    --alert-warning-border: #ffeeba;
    
    --alert-info-bg: #d1ecf1;
    --alert-info-text: #0c5460;
    --alert-info-border: #bee5eb;
}

.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.375rem; /* matches your existing border-radius */
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    
}


.alert-danger {
    color: var(--alert-danger-text);
    background-color: var(--alert-danger-bg);
    border-color: var(--alert-danger-border);
}

.alert-success {
    color: var(--alert-success-text);
    background-color: var(--alert-success-bg);
    border-color: var(--alert-success-border);
}

.alert-warning {
    color: var(--alert-warning-text);
    background-color: var(--alert-warning-bg);
    border-color: var(--alert-warning-border);
}

.alert-info {
    color: var(--alert-info-text);
    background-color: var(--alert-info-bg);
    border-color: var(--alert-info-border);
}

/* Animation for alert entrance */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.alert {
    animation: slideIn 0.3s ease-out;
}

/* Responsive considerations */
@media (max-width: 576px) {
    .alert {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
    }
    
    .alert-dismissible .btn-close {
        padding: 0.5rem;
    }
}

    /* Table styling */
    .table {
        width: 100%;
        margin-bottom: 1rem;
        border-collapse: collapse;
    }

    .table th {
        background-color: var(--bg-light);
        font-weight: 600;
        padding: 0.75rem;
    }

    .table td {
        padding: 0.75rem;
        vertical-align: middle;
    }

    .text-danger {
        color: var(--danger-color) !important;
    }

    /* Action buttons */
    .btn-action {
        padding: 0.25rem 0.5rem;
        margin: 0 0.25rem;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .filters-container {
            flex-direction: column;
            align-items: stretch;
        }
        
        .filter-group {
            flex-direction: column;
            align-items: stretch;
        }
        
        .filter-select, 
        .month-year-picker {
            width: 100%;
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }

    /* Print styles */
    @media print {
        .no-print {
            display: none !important;
        }
        
        .table {
            width: 100% !important;
            page-break-inside: auto;
        }
        
        tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }
    }
  


/* Modal Base Styles */
.custom-modal .modal-dialog {
    max-width: 95%;
    width: 420px;
    margin: 1rem auto;
}

.custom-modal .modal-content {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}

/* Container and Layout */
.modal-container {
    padding: 1.5rem;
}

/* Close Button */
.btn-close-custom {
    position: absolute;
    right: 1rem;
    top: 1rem;
    background: transparent;
    border: none;
    padding: 0.5rem;
    color: #6b7280;
    transition: all 0.15s ease;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
}

.btn-close-custom:hover {
    background-color: rgba(0, 0, 0, 0.05);
    color: #374151;
}

/* Icon Styles */
.icon-wrapper {
    display: flex;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.icon-container {
    background-color: #FEE2E2;
    padding: 1rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.delete-icon {
    width: 2rem;
    height: 2rem;
    color: #DC2626;
}

/* Content Styles */
.content-section {
    text-align: center;
    margin-bottom: 1.5rem;
}

.modal-title {
    color: #111827;
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.patient-name {
    margin-bottom: 0.75rem;
    font-size: 1.1rem;
}

.warning-text {
    color: #374151;
    margin-bottom: 0.5rem;
}

.caution-text {
    color: #6b7280;
    font-size: 0.875rem;
}

/* Button Container */
.button-container {
    display: flex;
    gap: 0.75rem;
    justify-content: center;
}

/* Button Styles */
.btn {
    padding: 0.625rem 1.25rem;
    font-size: 0.875rem;
    font-weight: 500;
    border-radius: 6px;
    transition: all 0.15s ease;
    min-width: 120px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-cancel {
    background-color: #F3F4F6;
    color: #4B5563;
    border: 1px solid #E5E7EB;
}

.btn-cancel:hover {
    background-color: #E5E7EB;
}

.btn-delete {
    background-color: #DC2626;
    color: white;
    border: none;
}

.btn-delete:hover {
    background-color: #B91C1C;
}

/* Loading State */
.btn.loading {
    opacity: 0.7;
    pointer-events: none;
}

/* Responsive Design */
@media (max-width: 640px) {
    .custom-modal .modal-dialog {
        margin: 1rem;
        width: auto;
    }

    .modal-container {
        padding: 1.25rem;
    }

    .button-container {
        flex-direction: column-reverse;
        gap: 0.5rem;
    }

    .btn {
        width: 100%;
        padding: 0.75rem;
    }

    .modal-title {
        font-size: 1.1rem;
    }

    .patient-name {
        font-size: 1rem;
    }

    .icon-container {
        padding: 0.875rem;
    }

    .delete-icon {
        width: 1.75rem;
        height: 1.75rem;
    }
}

/* Focus States for Accessibility */
.btn:focus,
.btn-close-custom:focus {
    outline: 2px solid #60A5FA;
    outline-offset: 2px;
}


    
/* General top notification style */
  /* General top notification style */
  .top-notification {
    visibility: hidden;                   /* Initially hidden */
    position: fixed;
    top: -100px;                           /* Initially off-screen */
    left: 50%;                             /* Center horizontally */
    transform: translateX(-50%);           /* Adjust for exact centering */
    background-color: rgba(255, 255, 255, 0.8);  /* White background with transparency */
    color: #e74c3c;                        /* Red text color */
    padding: 20px 30px;
    font-size: 16px;
    font-weight: 500;
    border-radius: 15px;                   /* Rounded corners */
    z-index: 10000;                        /* Ensure it's on top */
    width: 90%;                            /* Responsive width */
    max-width: 400px;                      /* Maximum width */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10); /* Even softer shadow */
    display: flex;
    flex-direction: column;                /* Stack content vertically */
    align-items: center;                   /* Center items horizontally */
    justify-content: flex-start;           /* Align content to the top */
    text-align: center;                    /* Center text */
    transition: top 0.5s ease, visibility 0s linear 0.5s; /* Smooth transition for visibility */

    /* Apply backdrop blur effect */
    backdrop-filter: blur(8px);            /* 8px blur for the frosted-glass effect */
    -webkit-backdrop-filter: blur(8px);     /* For Safari compatibility */
}

/* Header style */
.notification-header {
    color: #333;  
    font-size: 18px;
    font-weight: 600;                      /* Bold header */
    margin-bottom: 10px;                   /* Space below the header */
}

/* Body style (for message content) */
.notification-body {
    font-size: 16px;
    font-weight: 400;
    color: #333;                                 /* Slightly muted color for the message */
}

/* Success Notification (Light Green) */
.top-notification.notification-success .notification-header {
    color: #4CAF50; /* Light Green */
}

/* Warning Notification (Soft Orange) */
.top-notification.notification-warning .notification-header {
    color: #FF9800; /* Soft Orange */
}

/* Error Notification (Soft Red) */
.top-notification.notification-error .notification-header {
    color: #F44336; /* Soft Red */
}

/* Show notification when active */
.top-notification.show {
    visibility: visible;                  /* Make visible */
    top: 20px;                             /* Slide down to this position */
    transition: top 0.5s ease, visibility 0s; /* Smooth transition for visibility */
}

/* Fade-out and slide-up effect */
.top-notification.hide {
    visibility: hidden;
    top: -100px; /* Slide back off-screen */
    transition: top 0.5s ease, visibility 0s linear 0.5s; /* Smooth transition back */
}

</style>
<body>
    <div class="container-scroller">
        @include('includes.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('includes.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="row">
  <div class="col-lg-12 grid-margin stretch-card"> 
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <!-- Title Section -->
          <h4 class="card-title m-0">Patients Table</h4>
          <!-- Action Buttons -->
        <div class="action-buttons d-flex gap-3">
  <button class="btn btn-info btn-sm text-white d-flex align-items-center" onclick="printTable()">
    <i class="mdi mdi-printer"></i>
    <span class="ms-2">Print</span> <!-- Add some margin between the icon and text -->
  </button>
  <button class="btn btn-success btn-sm text-white d-flex align-items-center" 
        onclick="exportTableToExcel('patientTable')">
    <i class="mdi mdi-table"></i>
    <span class="ms-2">Excel</span>
</button>
</div>
</div>

      

                                    <!-- Search Container -->
                                    <div class="search-container">
    <form action="{{ route('patient.search') }}" method="GET" class="search-form">
        <div class="input-group">
            <input 
                type="text" 
                class="form-control" 
                id="navbar-search-input" 
                name="searchPatient" 
                placeholder="Search patient"
                aria-label="Search patient"
                value="{{ request('searchPatient') }}" 
                required> <!-- Add 'required' to make input mandatory -->
            <button type="submit" class="input-group-text" aria-label="Search">
                <i class="icon-search"></i>
            </button>
        </div>
    </form>
</div>
<form method="GET" action="{{ route('table') }}" class="filters-container">
    <div class="filter-group">
        <label for="perPage" class="filter-label">Items per page:</label>
        <select name="perPage" id="perPage" class="form-control filter-select" onchange="this.form.submit()">
            @foreach([5, 10, 20, 50] as $value)
                <option value="{{ $value }}" {{ $perPage == $value ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
            <option value="all" {{ $perPage == 'all' ? 'selected' : '' }}>Show All</option>
        </select>
    </div>
    <div class="filter-group">
        <label for="ageGroup" class="filter-label">Age Group:</label>
        <select name="ageGroup" id="ageGroup" class="form-control filter-select" onchange="this.form.submit()">
            <option value="">All Ages</option>
            @foreach(['0-5', '6-11', '12-23', '24-35', '36-47', '48-59'] as $range)
                <option value="{{ $range }}" {{ $ageGroup == $range ? 'selected' : '' }}>{{ $range }} months</option>
            @endforeach
        </select>
    </div>
    <div class="filter-group">
        <label for="monthYear" class="filter-label">Month-Year:</label>
        <input type="month" name="monthYear" id="monthYear" 
            value="{{ old('monthYear', $monthYear ?? date('Y-m')) }}" 
            class="form-control filter-input" onchange="this.form.submit()">
    </div>
</form>





<div id="topNotification" class="top-notification">
    <div class="notification-header" id="notificationHeader">Notification</div>
    <div class="notification-body" id="notificationMessage"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to show top notification
        function showTopNotification(message, type = 'error', header = null) {
            const notification = document.getElementById('topNotification');
            const messageElement = document.getElementById('notificationMessage');
            const headerElement = document.getElementById('notificationHeader');

            // Reset previous classes
            notification.className = 'top-notification';

            // Set type-specific styling
            switch(type) {
                case 'success':
                    notification.classList.add('notification-success');
                    headerElement.textContent = header || 'Success';
                    break;
                case 'warning':
                    notification.classList.add('notification-warning');
                    headerElement.textContent = header || 'Warning';
                    break;
                case 'error':
                default:
                    notification.classList.add('notification-error');
                    headerElement.textContent = header || 'No Result Found';
            }

            // Decode the message to handle HTML entities
            message = message.replace(/&#039;/g, "'").replace(/&quot;/g, '"').replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>');

            // Set message
            messageElement.textContent = message;

            // Show notification
            notification.classList.add('show');

            // Auto-hide after 2.5 seconds
            setTimeout(() => {
                notification.classList.remove('show');
            }, 2500);
        }

        // Listen for Laravel flash messages and trigger the notification
        @if(session('success'))
            showTopNotification('{{ session('success') }}', 'success');
        @endif

        @if(session('error'))
            showTopNotification('{{ session('error') }}', 'error');
        @endif

        @if(session('warning'))
            showTopNotification('{{ session('warning') }}', 'warning');
        @endif

        // Expose function globally if needed
        window.showTopNotification = showTopNotification;
    });
</script>


@if ($patientsData->isEmpty())
    <div class="alert alert-warning" role="alert">
        <i class="mdi mdi-information-outline me-2"></i>
        No records found for the selected month. Please try a different selection.
    </div>
@else
    <!-- Your existing table content -->
@endif










                                    <!-- Table Section -->
                                    <div class="table-responsive">
                                        <table class="table" id="patientTable">
                                            <thead>
                                                <tr><th>Date Interviewed</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>M.I.</th>
                                                    <th>Birthdate</th>
                                                    <th>Gender</th>
   				                                    <th>District</th>
                                                    <th>Age in Month</th>
                                                    <th>Weight for Age</th>
                                                    <th>Height for Age</th>
                                                    <th>Weight for Length/H</th>
                                                    <th>Status</th>
                                                    <th class="no-print">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patientsData as $patient)
                                                <tr>
                                                <td>{{ \Carbon\Carbon::parse($patient->created_at)->timezone('Asia/Manila')->format('M d, Y') }}</td>
                                                    <td>{{ $patient->lastname }}</td>
                                                    <td>{{ $patient->firstname }}</td>
                                                    <td>{{ $patient->middlename }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($patient->birthday)->format('M d, Y') }}</td>
                                                    <td>{{ ucfirst($patient->gender) }}</td>
                                                    <td>{{ $patient->district->district_name ?? '' }}</td>
                                                    <td class="{{ $patient->age > 5 ? 'text-danger fw-bold' : '' }}">
                                                        {{ $patient->age }}
                                                    </td>
                                                    <td>{{ $patient->wfa }}</td>
                                                    <td>{{ $patient->hfa }}</td>
                                                    <td>{{ $patient->wfl_h }}</td>

                                                    @php
        // Check if the patient is older than 1 month
        $status_id = \Carbon\Carbon::parse($patient->created_at)->diffInDays(now()) > 30 ? 2 : 1;
        
        // Assuming you have a relationship with the `status` model, 
        // we will load the status_name based on the `status_id`
        $statusName = $patient->status->status_name; // Assuming status is a relationship
    @endphp

<td>
            <!-- Check the patient status based on the $status_id -->
            @if ($status_id == 2)
                <span class="">Old</span>  <!-- New status -->
            @else
                <span class="">New</span>  <!-- Old status -->
            @endif
        </td>
                                                    <td class="no-print">




     <a href="{{ route('view.profile', ['id'=> $patient->id]) }}" 
   class="custom-btn custom-btn-success"
   title="View Profile">
    <i class="mdi mdi-eye"></i>
</a>

<button type="button" 
        class="custom-btn custom-btn-danger"
        data-bs-toggle="modal" 
        data-bs-target="#deleteModal{{$patient->id}}"
        title="Delete Patient">
    <i class="mdi mdi-delete"></i>
</button>




                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>


<style>/* General Button Styles */
/* Custom button styling */
.custom-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.375rem 1rem;  /* Increased padding for a slightly larger oval shape */
    border-radius: 10px; /* Slightly larger rounded corners for a more noticeable oval shape */
    text-decoration: none;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    border: none;
    outline: none;
    height: auto;  /* Ensures the height adjusts based on the content */
    min-width: 20px;  /* Fixed width for the button */
    margin-right: 0.7rem;  /* Adds space between buttons horizontally */
}

/* To add space at the bottom (for vertical alignment), use margin-bottom */
.custom-btn + .custom-btn {
    margin-top: 0.1rem;  /* Vertical spacing between stacked buttons */
}

/* Success Button */
.custom-btn-success {
    background-color: #4CAF50;
    color: white;
}

.custom-btn-success:hover {
    background-color: #45A049;
}

/* Danger Button */
.custom-btn-danger {
    background-color: #F44336;
    color: white;
}

.custom-btn-danger:hover {
    background-color: #D32F2F;
}

/* Icon Styling */
.custom-btn i {
    font-size: 1rem; /* Slightly larger icon size for better visibility */
    margin: 0;  /* Removed margin to better align the icon */
    padding: 0; /* No extra padding, icon takes up the container space */
}

/* Icon Container Adjustment */
.custom-btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;  /* Slightly larger oval shape */
    padding: 0.375rem 1rem;  /* Slightly more padding for a bigger button */
}

/* Accessibility Focus State */
.custom-btn:focus {
    outline: 2px solid #60A5FA;
    outline-offset: 2px;
}

/* Responsive Design for Small Buttons */
@media (max-width: 640px) {
    .custom-btn {
        width: auto; /* Ensures the button doesn't stretch full width */
        padding: 0.5rem 1rem; /* Slightly larger padding for touch-friendly design */
    }
}
</style>







                                    <!-- Pagination -->
                                    @if($perPage != 'all')
                                        <div class="mt-4">
                                            {{ $patientsData->appends(['perPage' => $perPage])->links('vendor.pagination.bootstrap-5') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        
    <!-- Delete Modals -->
    @foreach ($patientsData as $patient)


    <div class="modal fade custom-modal" id="deleteModal{{$patient->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$patient->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-lg">
            <div class="modal-body p-0">
                <!-- Close button -->
                <button type="button" 
                        class="btn-close-custom" 
                        data-bs-dismiss="modal" 
                        aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <div class="modal-container">
                    <!-- Static icon -->
                    <div class="icon-wrapper">
                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="delete-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                    </div>

                    <form action="{{ route('patient.delete', ['id' => $patient->id]) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        
                        <!-- Content section -->
                        <div class="content-section">
                            <h5 class="modal-title">Delete Confirmation</h5>
                            <p class="patient-name">
                                <span class="text-danger fw-bold">{{$patient->lastname}}, {{$patient->firstname}} {{$patient->middlename}}</span>
                            </p>
                            <p class="warning-text">Are you sure you want to delete this patient record?</p>
                            <p class="caution-text">This action cannot be undone.</p>
                        </div>

                        <!-- Action buttons -->
                        <div class="button-container">
                            <button type="button" 
                                    class="btn btn-cancel" 
                                    data-bs-dismiss="modal">
                                <span>No, cancel</span>
                            </button>
                            <button type="submit" 
                                    class="btn btn-delete">
                                <span>Yes, delete</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach



<!-- Simple JavaScript for loading state -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitButton = this.querySelector('.btn-delete');
            submitButton.classList.add('loading');
            submitButton.disabled = true;
        });
    });
});
</script>


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>



    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<!-- Plugin JS for this page -->
<script src="{{ asset('vendors/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
{{-- Uncomment if needed --}}
{{-- <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
<script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<!-- End plugin JS for this page -->

<!-- Core JS (injected JS) -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<!-- endinject -->

<!-- Custom JS for this page -->
<script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>









<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
      <script>
       function exportTableToExcel(tableID, filename = 'PatientData') {
        var table = document.getElementById(tableID);
        var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet 1" });
        XLSX.writeFile(wb, filename + ".xlsx");
    }
      </script>
        <script>
       function printTable() {
    // Reference to the table
    var table = document.getElementById('patientTable');
    table.style.display = 'table';
    var printWindow = window.open('', '', 'height=600,width=800');
    var tableHTML = table.outerHTML;
    printWindow.document.write(`
        <html>
            <head>
                <title>Print Patient Table</title>
                <style>
                    table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                    padding: 5px;
                }
                th {
                    background-color: #f2f2f2;
                }
                /* Set a fixed width for the first column */
                th:first-child, td:first-child {
                    width: 100px; /* Set to your desired width */
                }
                /* Optional: Adjust other columns as needed */
                th:nth-child(2), td:nth-child(2) {
                    width: 150px; /* Example width for the second column */
                }
                th:nth-child(3), td:nth-child(3) {
                    width: 150px; /* Example width for the third column */
                }
                </style>
            </head>
            <body>
                <h2>Patient Information</h2>
                ${tableHTML}
            </body>
        </html>
    `);

    // Close the document and print
    printWindow.document.close();
    printWindow.focus(); // Focus on the new window
    printWindow.print(); // Open print dialog

    // Close the window after printing
    printWindow.close();

}



</script>
  </body>
</html>