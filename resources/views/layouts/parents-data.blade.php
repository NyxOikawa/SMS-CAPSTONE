@include('includes.base')
<style>
    .input-group .input-group-text {
      background-color: #f8f9fa;
      border: 1px solid #ced4da;
      padding: 0.25rem 0.5rem;
    }
    .form-control {
      border-left: 1px solid #ced4da; 
    }
    .icon-search {
      font-size: 1.2rem; 
      color: #6c757d; 
    }
    #navbar-search-input {
    padding: 0.50rem 0.50rem;
    height: 35px; 
    font-size: 0.875rem; 
  }

  .input-group-text {
    padding: 0.25rem 0.5rem;
    height: 35px; 
    display: flex;
    align-items: center;
  }

  .icon-search {
    font-size: 0.875rem; 
  }
  </style>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}'
                });
            @endif
        });
    </script>
       <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Failed',
                    text: '{{ session('error') }}'
                });
            @endif
        });
    </script>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      @include('includes.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('includes.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Parents Table</h4>
                    <p class="card-description"> List of Parents <code> San Miguel PPC</code>
                    </p>
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <ul class="navbar-nav col-lg-3">
                      <li class="nav-item nav-search dblock">
                      <form action="{{ route('parent.search') }}" method="GET">
                        <div class="input-group">
                        <input type="text" class="form-control " id="navbar-search-input" name="searchParent" placeholder="Search now" aria-label="search" aria-describedby="search">
                          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                            <button type="submit" name="submit" class="input-group-text" id="search">
                              <i class="icon-search"></i>
                            </button>
                          </div>
                          </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                    <div class="table-responsive">
                    <form method="GET" action="{{ route('parent.index') }}">
                      <label for="perPage">Items per page:</label>
                      <select name="perPage" id="perPage" onchange="this.form.submit()">
                          <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
                          <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                          <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20</option>
                          <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                          <option value="all" {{ $perPage == 'all' ? 'selected' : '' }}>Show All</option>
                      </select>
                  </form>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Birthday</th>
                            <th>Civi Status</th>
                            <th>Contact No.</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($parentsData as $parent)
                          <tr>
                            <td>{{$parent->lastname}}</td>
                            <td>{{$parent->firstname}}</td>
                            <td>{{$parent->middlename}}</td>
                            <td >{{ \Carbon\Carbon::parse($parent->birthday)->format('F j, Y') }}</td>
                            <td>{{$parent->civil_stat}}</td>
                            <td>{{$parent->contact_no}}</td>
                            <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal{{$parent->id}}"  class="btn btn-success btn-sm text-white"><i class="mdi mdi-table-edit text-white"></i></a>
                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal{{$parent->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Edit Parent</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{  route('parent.update', ['id' => $parent->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="lastname" value="{{$parent->lastname}}" placeholder="Last Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="firstname" value="{{$parent->firstname}}"  placeholder="First Name" required>
                                                </div>
                                                </div>
                                                <div class="row mb-2 ">
                                                <div class="col-md-6">
                                                <input type="text" class="form-control" name="middlename" value="{{$parent->middlename}}"  placeholder="Middle Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                <input type="date" class="form-control" name="birthday" placeholder="Birthday" value="{{$parent->birthday}}" required>
                                                </div>
                                                </div>
                                                <div class="row ">
                                                <div class="col-md-6">
                                                <select class="form-select text-dark" name="civil_stat" value="{{$parent->civil_stat}}" aria-label="Select Gender">
                                                        <option  class="text-dark" selected>{{$parent->civil_stat}}</option>
                                                        <option class="text-dark" value="Single">Single</option>
                                                        <option class="text-dark" value="Married">Married</option>
                                                        <option class="text-dark" value="Widowed">Widowed</option>
                                                        <option class="text-dark" value="Legally seperated">Legally separated</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                <input type="text" class="form-control" value="{{$parent->contact_no}}" name="contact_no" placeholder="Mobile/Tel No." required>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                              <a href="" data-bs-toggle="modal" data-bs-target="#deleteModal{{$parent->id}}" class="btn btn-danger btn-sm text-white"><i class="mdi mdi-delete text-white"></i></a>
                              <div class="modal fade" id="deleteModal{{$parent->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Delete Parent</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <form action="{{route('parent.delete', ['id' => $parent->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                      <p>Delete <span class="text-danger fw-bold">{{$parent->lastname}}, {{$parent->firstname}} {{$parent->middlename}}</span> as parent?</p>
                                  </div>
                                  <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm text-white fw-bold">Delete</button>
                                        <button type="button" data-bs-dismiss="modal" class="btn btn-secondary btn-sm fw-bold"> Close</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  @if($perPage != 'all')
                  {{ $parentsData->appends(['perPage' => $perPage])->links('vendor.pagination.bootstrap-5') }}
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        
     

        </div>
      </div>
    </div>
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
  </body>
</html>