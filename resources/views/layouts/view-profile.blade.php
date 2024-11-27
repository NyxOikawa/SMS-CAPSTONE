@include('includes.base')

<style>
:root {
  --primary-color: #4f46e5;
  --secondary-color: #6b7280;
  --success-color: #10b981;
  --danger-color: #ef4444;
  --warning-color: #f59e0b;
  --border-color: #e5e7eb;
  --light-bg: #f9fafb;
}


/* Card Design */
.patient-card {
  background: #ffffff;
  border-radius: 16px;
  box-shadow: var(--card-shadow);
  overflow: hidden;
  padding: 5px;

  
}


/* Main Content Layout */
.card-body {
  padding: 2rem;
}

.profile-content {
  display: grid;
  grid-template-columns: 300px 1fr;
  gap: 3rem;
  --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

/* Left Column - Photo & Quick Stats */
.profile-left {
  text-align: center;
}

.photo-container {
  background: var(--light-bg);
  padding: 1.5rem;
  border-radius: 12px;
  margin-bottom: 2rem;
}

.patient-photo {
  width: 250px;
  height: 250px;
  border-radius: 12px;
  object-fit: cover;
  border: 4px solid white;
  box-shadow: var(--card-shadow);
}

.quick-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
  margin-top: 1.5rem;
}

.stat-item {
  background: var(--light-bg);
  padding: 1rem;
  border-radius: 8px;
  text-align: center;
}

.stat-value {
  font-size: 1.25rem;
  font-weight: 600;
  color: var(--primary-color);
}

.stat-label {
  font-size: 0.875rem;
  color: var(--secondary-color);
  margin-top: 0.25rem;
}

/* Right Column - Information Sections */
.info-sections {
  display: grid;
  gap: 2rem;
}

.info-group {
  background: white;
  border-radius: 12px;
  padding: 1.5rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);

  
}

.info-group-title {
  color: var(--primary-color);
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 1.5rem;
  padding-bottom: 0.75rem;
  border-bottom: 2px solid var(--border-color);
  display: flex;
  align-items: center;
  gap: 0.75rem;
}

.info-group-title i {
  font-size: 1.5rem;
}

.info-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.25rem;
}

.info-item {
  background: var(--light-bg);
  padding: 1rem 1.25rem;
  border-radius: 8px;
  transition: transform 0.2s;
}

.info-item:hover {
  transform: translateY(-2px);
}

.info-label {
  color: var(--secondary-color);
  font-size: 0.875rem;
  margin-bottom: 0.5rem;
}

.info-value {
  color: #1f2937;
  font-size: 1.1rem;
  font-weight: 500;
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





/* Button Edit & Delete */
/* Ensure smooth transition for shadow */
.edit-btn, .delete-btn {
    font-weight: 500; /* Medium font weight */
    transition: box-shadow 0.3s ease; /* Smooth transition for shadow effect */
}

/* Edit button shadow on hover */
.edit-btn:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect on hover */
}

/* Delete button shadow on hover */
.delete-btn:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect on hover */
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
    color: #333;                           /* Slightly muted color for the message */
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
    visibility: visible;                   /* Make visible */
    top: 20px;                            /* Slide down to this position */
    transition: top 0.5s ease, visibility 0s; /* Smooth transition for visibility */
}

/* Fade-out and slide-up effect */
.top-notification.hide {
    visibility: hidden;
    top: -100px;                          /* Slide back off-screen */
    transition: top 0.5s ease, visibility 0s linear 0.5s; /* Smooth transition back */
}

/* Action Buttons */
.action-buttons {
  margin-top: 0rem;
  padding-top: 2rem;
  display: flex;
  justify-content: flex-end;
  gap: 1rem;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  border: none;
  cursor: pointer;
  transition: all 0.2s;
}

.btn i {
  font-size: 1.25rem;
}


.btn-edit {
  color: white;
}

.btn-edit:hover {
  background-color:  #35B535;
}

.btn-delete {
  color: white;
}

.btn-delete:hover {
  background-color: #dc2626;
}



/* Responsive Design */
@media (max-width: 1024px) {
  .profile-content {
    grid-template-columns: 1fr;
  }
  
  .profile-left {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 2rem;
    text-align: left;
  }

  .photo-container {
  margin-bottom: -2rem;
}
  
  .quick-stats {
    grid-template-columns: repeat(4, 1fr);
  }
}

@media (max-width: 768px) { 
  .content-wrapper {
    padding: 1rem;
  }
  
  .profile-left {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .quick-stats {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .action-buttons {
    flex-direction: column;
  }
  
  .btn {
    width: 100%;
    justify-content: center;
  }
}


/* Print Styles */
@media print {
  .main-panel {
    padding: 0;
  }

  .action-buttons,
  .navbar,
  .sidebar {
    display: none !important;
  }

  .patient-card {
    box-shadow: none;
    border: none;
  }
  
  .info-item {
    break-inside: avoid;
  }
}

</style>

<body>
  @include('includes.navbar')
  <div class="container-fluid page-body-wrapper">
    @include('includes.sidebar')
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="patient-card">
          <div class="card-header">
          <div class="card-body">
            <div id="printableArea">
              <div class="profile-content">
                <div class="profile-left">
                  <div class="photo-container">
                    <img class="patient-photo"
                         src="{{ $patient->profile_pic ? asset('storage/pictures/' . $patient->profile_pic) : asset('path/to/default/image.jpg') }}"
                         alt="Patient Photo"
                         onerror="this.src='{{ asset('path/to/default/image.jpg') }}'">
                  </div>
                  
                  <div class="quick-stats">
                    <div class="stat-item">
                      <div class="stat-value">{{ \Carbon\Carbon::parse($patient->birthday)->age }}</div>
                      <div class="stat-label">Age</div>
                    </div>
                    <div class="stat-item">
                      <div class="stat-value">{{$patient->height}}</div>
                      <div class="stat-label">Height (cm)</div>
                    </div>
                    <div class="stat-item">
                      <div class="stat-value">{{$patient->weight}}</div>
                      <div class="stat-label">Weight (kg)</div>
                    </div>
                    <div class="stat-item">
                      <div class="stat-value">{{ $patient->wfa }}</div>
                      <div class="stat-label">WFA</div>
                    </div>

                    <div class="stat-item">
                      <div class="stat-value">{{ $patient->hfa }}</div>
                      <div class="stat-label">LFA</div>
                    </div>

                    <div class="stat-item">
                      <div class="stat-value">{{ $patient->wfl_h }}</div>
                      <div class="stat-label">WFH/L</div>
                    </div>
                  </div>
                </div>

                <div class="info-sections">
  <div class="info-group">
    <div class="info-group-title">
      <i class="mdi mdi-account"></i>
      Personal Information
    </div>
    <div class="info-grid">
      <!-- Full Name -->
      <div class="info-item">
        <div class="info-label">Full Name</div>
        <div class="info-value">{{ $patient->lastname }}, {{ $patient->firstname }} {{ $patient->middlename }}</div>
      </div>
      <!-- Gender -->
      <div class="info-item">
        <div class="info-label">Gender</div>
        <div class="info-value">{{ ucfirst($patient->gender) }}</div>
      </div>
      <!-- Date of Birth -->
      <div class="info-item">
        <div class="info-label">Date of Birth</div>
        <div class="info-value">{{ \Carbon\Carbon::parse($patient->birthday)->format('F j, Y') }}</div>
      </div>
      <!-- Date Interviewed -->
      <div class="info-item">
        <div class="info-label">Date Interviewed</div>
        <div class="info-value">{{ \Carbon\Carbon::parse($patient->created_at)->timezone('Asia/Manila')->format('F j, Y') }}</div>
      </div>
    </div>
  </div>



             
          
                  <div class="info-group">
    <div class="info-group-title">
        <i class="mdi mdi-account-multiple"></i>
        Guardian Information
    </div>
    <div class="info-grid">
        <!-- Guardian Name -->
        <div class="info-item">
            <div class="info-label">Guardian Name</div>
            <div class="info-value">
                {{ $patient->parents ? $patient->parents->lastname . ', ' . $patient->parents->firstname . ' ' . $patient->parents->middlename : 'N/A' }}
            </div>
        </div>

  
        <!-- Guardian Contact -->
        <div class="info-item">
            <div class="info-label">Guardian Contact</div>
            <div class="info-value">
                {{ $patient->parents->contact_no ?? 'N/A' }}
            </div>
        </div>
    </div>
</div>


<div class="action-buttons">
    <!-- Edit Button with Primary Color (Blue) -->
    <a href="{{route('edit.index', ['id'=> $patient->id]) }}" class="btn btn-primary fw-medium px-4 py-2 rounded edit-btn">
        <i class="mdi mdi-pencil"></i> Edit Profile
    </a>

    <!-- Delete Button with Danger Color (Red) -->
    <button type="button" onclick="openDeleteModal({{$patient->id}})" class="btn btn-danger fw-medium px-4 py-2 rounded delete-btn">
        <i class="mdi mdi-delete"></i> Delete
    </button>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>



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

       

        <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to show top notification
        function showTopNotification(message, type = 'error', header = null) {
            const notification = document.getElementById('topNotification');
            const messageElement = document.getElementById('notificationMessage');
            const headerElement = document.getElementById('notificationHeader');

            // Reset previous classes
            headerElement.className = 'notification-header'; // Reset header classes

            // Set type-specific styling
            switch(type) {
                case 'success':
                    headerElement.classList.add('success'); // Add success class for green text
                    headerElement.textContent = header || 'Success';
                    break;
                case 'warning':
                    headerElement.classList.add('warning'); // Add warning class for yellow text
                    headerElement.textContent = header || 'Warning';
                    break;
                case 'error':
                default:
                    headerElement.classList.add('error'); // Add error class for red text
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




<script>function openDeleteModal(patientId) {
  var myModal = new bootstrap.Modal(document.getElementById('deleteModal' + patientId));
  myModal.show();
}</script>
  <!-- Make sure Bootstrap JS and its dependencies are included if not already in includes.base -->
  @if(!View::hasSection('scripts'))
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  @endif

  <script>
    function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
    <!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset ('vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- Vendor JS -->
<script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src="{{ asset('js/file-upload.js') }}"></script>
<script src="{{ asset('js/typeahead.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>
<!-- End custom js for this page-->
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>