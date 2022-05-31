@extends('layouts.admin')
@section('title','Roles')

@section('content')
    <!-- list and filter start -->
    <div class="card">
        <div class="card-body border-bottom">
            <h4 class="card-title">Search & Filter</h4>
            <div class="row">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table class="user-list-table table">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>
        </div>
        <!-- Modal to add new role starts-->
        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
            <div class="modal-dialog">
                <form class="add-new-user modal-content pt-0" id="add-form">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                    <div class="modal-header mb-1">
                        <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                    </div>
                    <div class="modal-body flex-grow-1">
                        <div class="mb-1">
                            <label class="form-label" for="name">Role Name</label>
                            <input type="text" class="form-control dt-full-name" id="name" placeholder="John Doe" name="name" />
                        </div>
                        <button type="submit" class="btn btn-primary me-1 data-submit" id="submit">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal to add new role Ends-->
    </div>
    <!-- list and filter end -->
@endsection
@section('admin-js')
<script>
    $(document).ready(function(){
        // get data with ajax
        var url = "{{ route('admin.roles.index') }}";
        var count= 0;
        $.ajax({
            url:url,
            success:function(data){
                data.forEach(function(resultRow){
                    var tableRow = `<tr>
                                        <td>
                                        ${++count}
                                        </td>
                                        <td>
                                        <form method="post" class="edit-form-${resultRow.id}">
                                            <input type="text" value="${resultRow.name}" class="form-control w-25">
                                        </form>
                                        </td>
                                    </tr>`;
                    $('#tableBody').append(tableRow);
                });
            }
        });

        // Create New With Ajax
        $('#submit').on('click',function(e){
            e.preventDefault();
            var url = "{{ route('admin.roles.store') }}";
            var name = $('#name').val();
            let _token   = $('meta[name="csrf-token"]').attr('content');
        
            $.ajax({
                url: url,
                type: "POST",
                data: {
                name: name,
                _token: _token
                },
                success: function(response) {
                    if(response.code == 200) {
                        var tableRow = `<tr>
                                        <td>
                                        ${++count}
                                        </td>
                                        <td>
                                        <form method="post" class="edit-form-${response.data.id}">
                                            <input type="text" value="${response.data.name}" class="form-control w-25">
                                        </form>
                                        </td>
                                    </tr>`;
                    $('#tableBody').append(tableRow);
                    $('#modals-slide-in').modal('hide');
                    }
                },
                error: function(response) {
                   console.log(response.responseJSON.message)
                }
            });
        })

    })
</script>
@endsection
