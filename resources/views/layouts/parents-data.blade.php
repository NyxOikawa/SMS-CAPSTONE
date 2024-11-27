@include('includes.base')
<style>
  /* Base styles */
:root {
    --primary-color: #4B49AC;
    --danger-color: #dc3545;
    --success-color: #28a745;
    --border-color: #ced4da;
    --bg-light: #f8f9fa;
}

/* Container */
.container.mt-5 {
    max-width: 1400px;
    background-color: white;
    border-radius: 16px;
    padding: 5px;
    margin-top: 0rem !important;
}

/* Card styling */
.card {
    background-color: white;
    margin-bottom: 20px;
    margin-top: 8px;
}

/* Search input styling */
.search-container {
    margin-bottom: 1.5rem;
}

.input-group {
    max-width: 300px;
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
.close-modal-btn {
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

.close-modal-btn:hover {
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

/* Action Button Styles */
.cancel-action-btn {
    padding: 0.625rem 1.25rem;
    font-size: 0.875rem;
    font-weight: 500;
    border-radius: 6px;
    transition: all 0.15s ease;
    min-width: 120px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #F3F4F6;
    color: #4B5563;
    border: 1px solid #E5E7EB;
}

.cancel-action-btn:hover {
    background-color: #E5E7EB;
}

.delete-action-btn {
    padding: 0.625rem 1.25rem;
    font-size: 0.875rem;
    font-weight: 500;
    border-radius: 6px;
    transition: all 0.15s ease;
    min-width: 120px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #DC2626;
    color: white;
    border: none;
}

.delete-action-btn:hover {
    background-color: #B91C1C;
}

/* Loading State */
.delete-action-btn.loading {
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

    .cancel-action-btn, .delete-action-btn {
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
.cancel-action-btn:focus,
.delete-action-btn:focus,
.close-modal-btn:focus {
    outline: 2px solid #60A5FA;
    outline-offset: 2px;
}

    



/* Form Controls */
.form-control,
.form-select {
    padding: 0.625rem 0.75rem;
    border: 1.5px solid #e5e7eb;
    transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    font-size: 0.975rem;
    line-height: 1.5;
}

/* Validation States */
.form-control.is-invalid,
.form-select.is-invalid {
    border-color: #ef4444;
    padding-right: 2.5rem;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23ef4444'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z' /%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 1.25rem;
}

.invalid-feedback {
    color: #ef4444;
    font-size: 0.875rem;
    margin-top: 0.375rem;
    display: none;
}

.form-control.is-invalid ~ .invalid-feedback,
.form-select.is-invalid ~ .invalid-feedback {
    display: block;
    animation: slideDown 0.2s ease-out;
}



/* Animations */
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-0.5rem);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
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

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 1rem;
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



.btn-action {
    padding: 0.1rem 0.6rem;
    line-height: 1.5;
}

.btn-action i {
    font-size: 14px;
}

.btn-action + .btn-action {
    margin-left: 8px;  /* or any value you prefer */
}


/* Notification styles */
.top-notification {
    visibility: hidden;
    position: fixed;
    top: -100px;
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(255, 255, 255, 0.8);
    color: #e74c3c;
    padding: 20px 30px;
    font-size: 16px;
    font-weight: 500;
    border-radius: 15px;
    z-index: 10000;
    width: 90%;
    max-width: 400px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-align: center;
    transition: top 0.5s ease, visibility 0s linear 0.5s;
    backdrop-filter: blur(8px);
}

.notification-header {
    color: #333;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
}

.notification-body {
    font-size: 16px;
    font-weight: 400;
    color: #333;
}

.top-notification.notification-success .notification-header {
    color: #4CAF50; /* Light Green */
}

.top-notification.notification-warning .notification-header {
    color: #FF9800; /* Soft Orange */
}

.top-notification.notification-error .notification-header {
    color: #F44336; /* Soft Red */
}

.top-notification.show {
    visibility: visible;
    top: 20px;
    transition: top 0.5s ease, visibility 0s;
}

.top-notification.hide {
    visibility: hidden;
    top: -100px;
    transition: top 0.5s ease, visibility 0s linear 0.5s;
}


/* Edit Parent Modal */
/* Ensure consistent height for both input and select elements, excluding file inputs */
.form-control, .form-select {
    height: calc(2.25rem + 2px); /* This height is the same as Bootstrap's default input height */
    padding: 0.625rem 0.75rem; /* Ensure consistent padding */
    font-size: 1rem; /* Set a consistent font size */
    line-height: 1.5; /* Set consistent line height */
}


/* Exclude file input from the height and padding styles */
input[type="file"].form-control {
    height: auto; /* Reset height to default */
    padding: 0.375rem 0.75rem; /* Keep the default padding for file inputs */
}




/* Submit Button Hover */ 
/* Custom font weight for the button text */
.custom-font-weight {
    font-weight: 500; /* Adjust the value to 400 for normal, 500 for medium, 700 for bold */
    transition: box-shadow 0.3s ease; /* Smooth transition for shadow effect */
}

/* Add shadow on hover */
.custom-font-weight:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adjust shadow to your preference */
}
/* Modal Base Styles */
.modal-overlay {
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
    transition: opacity 0.3s ease;
}

.modal-dialog {
    transform: scale(0.95);
    opacity: 0;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.modal.show .modal-dialog {
    transform: scale(1);
    opacity: 1;
}

.modal-content {
    border-radius: 16px;
    border: none;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1),
                0 5px 10px -5px rgba(0, 0, 0, 0.04);
    overflow: hidden;
}

/* Modal Header */
.modal-header {
    background-color: #ffffff;
    border-bottom: 1px solid rgba(229, 231, 235, 0.5);
    padding: 1.25rem 1.5rem;
    position: relative;
}

.modal-title {
    font-weight: 600;
    color: #111827;
    font-size: 1.25rem;
    line-height: 1.75rem;
}



/* Modal Body */
.modal-body {
    padding: 1.5rem;
    color: #374151;
}




/* Animations */
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-0.5rem);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}

/* Responsive Design */
@media (max-width: 640px) {
    .modal-dialog {
        margin: 1rem;
        max-width: calc(100% - 2rem);
        margin-top: 8rem;
    }

    .modal-content {
        border-radius: 12px;
    }

    .modal-header {
        padding: 1rem;
    }

    .modal-body {
        padding: 1.25rem;
    }

    .row > div {
        margin-bottom: 1rem;
    }

}

/* Accessibility Improvements */
@media (prefers-reduced-motion: reduce) {
    .modal-dialog,
    .modal-overlay,
    .btn,
    .form-control,
    .form-select {
        transition: none;
    }
}

/* High Contrast Mode */
@media (forced-colors: active) {
    .modal-content {
        border: 2px solid CanvasText;
    }

    .btn-primary,
    .btn-secondary {
        border: 2px solid ButtonText;
    }
}



</style>

<body>
<div class="container-scroller">
    <!-- Navbar Section -->
    @include('includes.navbar')

    <div class="container-fluid page-body-wrapper">
        <!-- Sidebar Section -->
        @include('includes.sidebar')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="container mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Parents Table</h4>
                                    <p class="card-description"> List of Parents <code> San Miguel PPC</code>
                                    </p>
                                    <!-- Search Container -->
                                    <div class="search-container">
                                        <form action="{{ route('parent.search') }}" method="GET" class="search-form">
                                            <div class="input-group">
                                                <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="navbar-search-input" 
                                                    name="searchParent" 
                                                    placeholder="Search parent"
                                                    aria-label="Search parent"
                                                    value="{{ request('searchParent') }}" 
                                                    required>
                                                <button type="submit" class="input-group-text" aria-label="Search">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Filter Options (Pagination and Items per page) -->
                                    <form method="GET" action="{{ route('parent.index') }}" class="filters-container">
                                        <div class="filter-group">
                                            <label for="perPage" class="filter-label">Items per page:</label>
                                            <select name="perPage" id="perPage" class="form-control filter-select" onchange="this.form.submit()">
                                                <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
                                                <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                                                <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20</option>
                                                <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                                                <option value="all" {{ $perPage == 'all' ? 'selected' : '' }}>Show All</option>
                                            </select>
                                        </div>
                                    </form>

                                    <!-- Parent Table -->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>M.I</th>
                                                    <th>Birthday</th>
                                                    <th>Civil Status</th>
                                                    <th>Contact No.</th>
                                                    <th class="no-print">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($parentsData as $parent)
                                                    <tr>
                                                        <td>{{ $parent->lastname }}</td>
                                                        <td>{{ $parent->firstname }}</td>
                                                        <td>{{ $parent->middlename }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($parent->birthday)->format('F j, Y') }}</td>
                                                        <td>{{ $parent->civil_stat }}</td>
                                                        <td>{{ $parent->contact_no }}</td>
                                                        <td>
                                                          
                                                          <!-- Button Group with Space -->
   <!-- Edit Parent Button (using <button> tag) -->
<button type="button"  
        class="custom-btn custom-btn-success custom-btn-sm custom-btn-action me-2"
        data-bs-toggle="modal" 
        data-bs-target="#editModal{{$parent->id}}"
        title="Edit Parent">
    <i class="mdi mdi-table-edit text-white"></i>
</button>


<!-- Edit Parent Modal -->
<div class="modal fade" id="editModal{{$parent->id}}" tabindex="-1" aria-labelledby="editModalLabel{{$parent->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editModalLabel{{$parent->id}}">Edit Parent/Guardian Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('parent.update', ['id' => $parent->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">

                        <!-- Last Name -->
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" 
                                   name="lastname" value="{{ old('lastname', $parent->lastname) }}" 
                                   placeholder="Last Name" required>
                            @error('lastname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- First Name -->
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" 
                                   name="firstname" value="{{ old('firstname', $parent->firstname) }}" 
                                   placeholder="First Name" required>
                            @error('firstname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Middle Name -->
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control @error('middlename') is-invalid @enderror" 
                                   name="middlename" value="{{ old('middlename', $parent->middlename) }}" 
                                   placeholder="Middle Name" required>
                            @error('middlename')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Birthday -->
                        <div class="col-md-6 mb-2">
                            <input type="date" class="form-control @error('birthday') is-invalid @enderror" 
                                   name="birthday" value="{{ old('birthday', $parent->birthday) }}" 
                                   required max="{{ now()->subYears(18)->format('Y-m-d') }}">
                            @error('birthday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror 
                        </div>

                        <!-- Civil Status -->
                        <div class="col-md-6 mb-2">
                            <select class="form-select @error('civil_stat') is-invalid @enderror" 
                                    name="civil_stat" required>
                                <option value="">Select Civil Status</option>
                                <option value="Single" {{ old('civil_stat', $parent->civil_stat) == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ old('civil_stat', $parent->civil_stat) == 'Married' ? 'selected' : '' }}>Married</option>
                                <option value="Widowed" {{ old('civil_stat', $parent->civil_stat) == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                <option value="Legally separated" {{ old('civil_stat', $parent->civil_stat) == 'Legally separated' ? 'selected' : '' }}>Legally Separated</option>
                            </select>
                            @error('civil_stat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Contact Number -->
                        <div class="col-md-6 mb-2">
                            <input type="tel" class="form-control @error('contact_no') is-invalid @enderror" 
                                   name="contact_no" value="{{ old('contact_no', $parent->contact_no) }}" 
                                   placeholder="Mobile/Tel No.">
                            @error('contact_no')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

  <!-- Modal Footer with Submit and Close buttons -->
<div class="modal-footer mt-3"> <!-- adds top margin -->
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 8px;">Close</button>
    <button type="submit" name="submit" class="btn btn-primary" style="border-radius: 8px;">Submit</button>
</div>

                </form>
            </div>
        </div>
    </div>
</div>




<!-- Delete Parent Button (using <button> tag) -->
<button type="button" 
        class="custom-btn custom-btn-danger custom-btn-sm custom-btn-action"
        data-bs-toggle="modal" 
        data-bs-target="#deleteModal{{$parent->id}}"
        title="Delete Parent">
    <i class="mdi mdi-delete text-white"></i>
</button>


<style>/* General Button Styles */
/* Common Button Styles */
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








<!-- Delete Parent Modal -->
<div class="modal fade custom-modal" id="deleteModal{{$parent->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$parent->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-lg">
            <div class="modal-body p-0">
                <!-- Close button -->
                <button type="button" 
                        class="close-modal-btn" 
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

                    <form action="{{ route('parent.delete', ['id' => $parent->id]) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        
                        <!-- Content section -->
                        <div class="content-section">
                            <h5 class="modal-title">Delete Confirmation</h5>
                            <p class="parent-name">
                                <span class="text-danger fw-bold">{{ $parent->lastname }}, {{ $parent->firstname }} {{ $parent->middlename }}</span>
                            </p>
                            <p class="warning-text">Are you sure you want to delete this parent record?</p>
                            <p class="caution-text">This action cannot be undone.</p>
                        </div>

                        <!-- Action buttons -->
                        <div class="button-container">
                            <button type="button" 
                                    class="cancel-action-btn" 
                                    data-bs-dismiss="modal">
                                <span>No, cancel</span>
                            </button>
                            <button type="submit" 
                                    class="delete-action-btn">
                                <span>Yes, delete</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Pagination Section -->
                                    @if ($perPage != 'all')
                                        <div class="mt-4">
                                            {{ $parentsData->appends(['perPage' => $perPage])->links('vendor.pagination.bootstrap-5') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



<!-- Simple JavaScript for loading state -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitButton = this.querySelector('.delete-action-btn');
            submitButton.classList.add('loading');
            submitButton.disabled = true;
        });
    });
});
</script>




                <!-- Notification -->
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

                <!-- External Scripts -->
                <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
                <script src="{{ asset('js/off-canvas.js') }}"></script>
                <script src="{{ asset('js/template.js') }}"></script>
                <script src="{{ asset('js/settings.js') }}"></script>
                <script src="{{ asset('js/todolist.js') }}"></script>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </div>
        </div>
    </div>
</div>
