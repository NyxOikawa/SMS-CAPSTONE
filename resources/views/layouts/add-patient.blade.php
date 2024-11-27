@include('includes.base')
</head>
<style>
  /* Reset and Base Styles */
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    line-height: 1.6;
    color: #333;
}

.container-fluid {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}

.container.mt-5 {
    max-width: 1200px;
    background-color: white;
    border-radius: 16px;
    padding: 5px;
    margin-top: 0rem !important;
}


/* Card Styles */
.card {
    border: none;
    background-color: transparent;
}

.card-title {
    color: #333;
    font-weight: 600;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Form Styles */
.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: #495057;
}

.form-control, .form-select {
    display: block;
    width: 100%;
    padding: 0.575rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    appearance: none;
    border-radius: 0.375rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus, .form-select:focus {
    color: #495057;
    background-color: #fff;
    border-color: #007bff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control.is-invalid, .form-select.is-invalid {
    border-color: #dc3545;
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545;
}

.form-control.is-invalid ~ .invalid-feedback,
.form-select.is-invalid ~ .invalid-feedback {
    display: block;
}




/* Button Styles for All Modal and S */
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.575rem 1.25rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.375rem;
    transition: all 0.3s ease;
}



/* Responsive Layout */
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-md-3, .col-md-4, .col-md-6, .col-md-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width: 768px) {
    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-md-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}



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



/* Optional: Darken the modal backdrop */
.modal-backdrop {
    background-color: rgba(0, 0, 0, 0.55); /* Darker backdrop */
}


/* Action Buttons */
.action-buttons .btn {
    border-radius: 12px; /* Adjust this value for the desired roundness */
    padding: 8px 16px;
    font-size: 14px;
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


.form-control:focus,
.form-select:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
    outline: none;
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
/* Shadow effect on hover and click for the button */
.btn-info.text-white {
    transition: box-shadow 0.2s ease-in-out, transform 0.2s ease-in-out; /* Smooth transition for shadow and movement */
}

/* Hover state with less shadow and minimal movement */
.btn-info.text-white:hover {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Softer and more subtle shadow */
    transform: translateY(-1px); /* Minimal lift on hover */
}

/* Active state with less shadow and minimal movement */
.btn-info.text-white:active {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); /* Even lighter shadow when clicked */
    transform: translateY(0px); /* No movement on click */
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
                        <div class="col-12 grid-margin">
              <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title d-flex justify-content-between align-items-center">
                        Patient Registration Form
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-info btn-sm text-white" style="border-radius: 0.50rem; padding: 0.5rem 1.25rem;">
                            Add Parent/Guardian
                            </a>
                        </h3>
                        <form class="form-sample" method="POST" action="{{ route('store.patient') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <p class="card-description text-primary">Fill Out the Patient Information </p>
                            <div class="row">
    <!-- Last Name -->
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control @error('lastname') is-invalid @enderror" 
                   id="lastname" name="lastname" 
                   value="{{ old('lastname') }}" 
                   required 
                   placeholder="Enter last name"/>
            @error('lastname')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- First Name -->
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control @error('firstname') is-invalid @enderror" 
                   id="firstname" name="firstname" 
                   value="{{ old('firstname') }}" 
                   required 
                   placeholder="Enter first name"/>
            @error('firstname')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Middle Name -->
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="middlename" class="form-label">Middle Name</label>
            <input type="text" class="form-control" 
                   id="middlename" name="middlename" 
                   value="{{ old('middlename') }}" 
                   placeholder="Enter middle name"/>
        </div>
    </div>

    <!-- Suffix -->
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="suffix" class="form-label">Suffix</label>
            <input type="text" class="form-control" 
                   id="suffix" name="suffix" 
                   value="{{ old('suffix') }}" 
                   placeholder="Jr., Sr., etc."/>
        </div>
    </div>
</div>

<div class="row">
    <!-- Birthday -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control @error('birthday') is-invalid @enderror" 
                   id="birthday" name="birthday" 
                   value="{{ old('birthday') }}" 
                   required 
                   max="{{ now()->format('Y-m-d') }}"/>
            @error('birthday')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Height -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="height" class="form-label">Height (cm)</label>
            <input type="number" step="0.1" min="0" max="250" 
               class="form-control @error('height') is-invalid @enderror" 
               id="height" name="height" 
               value="{{ old('height') }}" 
               placeholder="Enter height in cm"
               required />
            @error('height')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Weight -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="weight" class="form-label">Weight (kg)</label>
            <input type="number" step="0.1" min="0" max="500" 
               class="form-control @error('weight') is-invalid @enderror" 
               id="weight" name="weight" 
               value="{{ old('weight') }}" 
               placeholder="Enter weight in kg"
               required />
            @error('weight')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <!-- Gender -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select @error('gender') is-invalid @enderror" 
                    id="gender" name="gender" 
                    required>
                <option value="">Select Gender</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
            @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Parent/Guardian -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="parent_id" class="form-label">Parent/Guardian</label>
            <select class="form-select @error('parent_id') is-invalid @enderror" 
                    id="parent_id" name="parent_id" 
                    required>
                <option value="">Select Parent/Guardian</option>
                @foreach($parents as $parent)
                    <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                        {{ $parent->lastname }}, {{ $parent->firstname }} {{ $parent->middlename }}
                    </option>
                @endforeach
            </select>
            @error('parent_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- District -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="district_id" class="form-label">District</label>
            <select class="form-select @error('district_id') is-invalid @enderror" 
                    id="district_id" name="district_id" required>
                <option value="">Select District</option>
                @foreach($districts as $district)
                    <option value="{{ $district->id }}" 
                        {{ old('district_id') == $district->id ? 'selected' : '' }}>
                        {{ $district->district_name }}
                    </option>
                @endforeach
            </select>
            @error('district_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>


<div class="row">
    <!-- Profile Picture -->
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="profile_pic" class="form-label">Profile Picture</label>
            <input type="file" 
                   class="form-control @error('profile_pic') is-invalid @enderror" 
                   id="profile_pic" name="profile_pic" 
                   accept="image/*"/>
            @error('profile_pic')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

                    

  <div class="text-end">
    <button type="submit" name="submit" class="btn btn-primary custom-font-weight" style="border-radius: 8px;">
        <!-- Add Font Awesome icon -->
        <i class="fa fa-paper-plane"></i> Submit
    </button>
</div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>/* Submit Button */
.btn-primary.custom-font-weight {
    color: white;
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Lighter, subtler shadow */
    transition: all 0.2s ease-in-out;
    font-weight: 500; /* Example custom font-weight */
}

.btn-primary.custom-font-weight:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* Lighter hover shadow */
    transform: translateY(-1px); /* Slight lift on hover */
}

.btn-primary.custom-font-weight:active {
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); /* Even lighter shadow when pressed */
    transform: translateY(1px); /* Button presses down slightly */
}
</style>






  <!-- Parent Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Parent/Guardian Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('add.parent') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" 
                                   name="lastname" placeholder="Last Name" required 
                                   value="{{ old('lastname') }}">
                            @error('lastname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" 
                                   name="firstname" placeholder="First Name" required 
                                   value="{{ old('firstname') }}">
                            @error('firstname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control @error('middlename') is-invalid @enderror" 
                                   name="middlename" placeholder="Middle Name" required 
                                   value="{{ old('middlename') }}">
                            @error('middlename')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="date" class="form-control @error('birthday') is-invalid @enderror" 
                                   name="birthday" placeholder="Birthday" required 
                                   value="{{ old('birthday') }}"
                                   max="{{ now()->subYears(18)->format('Y-m-d') }}">
                            @error('birthday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <select class="form-select @error('civil_stat') is-invalid @enderror" 
                                    name="civil_stat" required>
                                <option value="">Civil Status</option>
                                <option value="Single" {{ old('civil_stat') == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ old('civil_stat') == 'Married' ? 'selected' : '' }}>Married</option>
                                <option value="Widowed" {{ old('civil_stat') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                <option value="Legally separated" {{ old('civil_stat') == 'Legally separated' ? 'selected' : '' }}>Legally Separated</option>
                            </select>
                            @error('civil_stat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
    <input type="text" 
           class="form-control @error('contact_no') is-invalid @enderror" 
           name="contact_no" 
           placeholder="Mobile/Tel No." 
           required 
           value="{{ old('contact_no') }}" 
           maxlength="16"
           id="contact_no">
    @error('contact_no')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <!-- Custom error message for exceeding character limit -->
    <div id="contact_no_error" class="text-danger" style="display: none;">Mobile number cannot exceed 15 characters.</div>
</div>
                    </div>
                    <div class="modal-footer mt-3"> <!-- adds top margin -->
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
                </form>
            </div>
        </div>
    </div>
</div>










    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $('.js-example-basic-multiple').select2();
        });
        </script>

        
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
                    headerElement.textContent = header || 'Error';
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

        // Function to check contact number length and show notification
        const contactNoInput = document.getElementById('contact_no');
        const contactNoErrorDiv = document.getElementById('contact_no_error');

        contactNoInput.addEventListener('input', function() {
            if (contactNoInput.value.length > 15) {
                // Show custom error message for contact number
                contactNoErrorDiv.style.display = 'block';

                // Show notification to user
                showTopNotification('Mobile number cannot exceed 15 characters.', 'error');
            } else {
                // Hide custom error message if within limit
                contactNoErrorDiv.style.display = 'none';
            }
        });

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

<!-- container-scroller -->

<!-- Vendor JS -->
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendors/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
{{-- Uncomment if needed --}}
{{-- <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
<script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<!-- End plugin JS for this page -->

<!-- Inject JS -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<!-- endinject -->

<!-- Custom JS for this page-->
<script src="{{ asset('js/file-upload.js') }}"></script>
<script src="{{ asset('js/typeahead.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>
<!-- End custom js for this page-->

<!-- External Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS for this page -->
<script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>

</body>
</html>
