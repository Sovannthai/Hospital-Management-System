@extends('backends.master')
@section('contents')
<style>
    .row {
        position: relative;
        left: 25px;
    }

    .product,
    .user {
        position: relative;
        left: 10px;
    }

</style>
<div class="card">
    <div class="card-body">
        <form action="{{ route('update_role',['id'=>$role->id]) }}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="clearfix">
                <div class="">
                    <div class="form-group col-6">
                        <label for="">Role Name</label>
                        <input type="text" name="name" class="form-control" style="position: relative;left:-12px" value="{{ $role->name }}">
                    </div>
                </div>
            </div>
            <div>
                <span>Select Role</span>
            </div>
            <hr>
            <div class="user mt-4">Dashboard</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.dash" @if (in_array('view.dash', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="dashboard" data-id="">
                    <label class="custom-control-label" for="dashboard"></label>
                </div>
            </div>
            <hr>
            <div class="user mt-4">User</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.user" @if (in_array('view.user', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="customSwitches" data-id="">
                    <label class="custom-control-label" for="customSwitches"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.user" c @if (in_array('create.user', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="customSwitches1" data-id="">
                    <label class="custom-control-label" for="customSwitches1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.user" @if (in_array('edit.user', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="customSwitches2" data-id="">
                    <label class="custom-control-label" for="customSwitches2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.user" @if (in_array('delete.user', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="customSwitches3" data-id="">
                    <label class="custom-control-label" for="customSwitches3"></label>
                </div>
            </div>
            <hr>
            {{-- <div class="user">User Type</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.user_type" @if (in_array('view.user_type', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="user_type" data-id="">
                    <label class="custom-control-label" for="user_type"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.user_type" @if (in_array('create.user_type', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="user_type1" data-id="">
                    <label class="custom-control-label" for="user_type1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.user_type" @if (in_array('edit.user_type', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="user_type2" data-id="">
                    <label class="custom-control-label" for="user_type2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.user_type" @if (in_array('delete.user_type', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="user_type3" data-id="">
                    <label class="custom-control-label" for="user_type3"></label>
                </div>
            </div>
            <hr> --}}
            <div class="user">Role</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.role" @if (in_array('view.role', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="role" data-id="">
                    <label class="custom-control-label" for="role"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.role" @if (in_array('create.role', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="role1" data-id="">
                    <label class="custom-control-label" for="role1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.role" @if (in_array('edit.role', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="role2" data-id="">
                    <label class="custom-control-label" for="role2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.role" @if (in_array('delete.role', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="role3" data-id="">
                    <label class="custom-control-label" for="role3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Employee</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.emp" @if (in_array('view.emp', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="emp" data-id="">
                    <label class="custom-control-label" for="emp"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.emp" @if (in_array('create.emp', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="emp1" data-id="">
                    <label class="custom-control-label" for="emp1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.emp" @if (in_array('edit.emp', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="emp2" data-id="">
                    <label class="custom-control-label" for="emp2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.emp" @if (in_array('delete.emp', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="emp3" data-id="">
                    <label class="custom-control-label" for="emp3"></label>
                </div>
            </div>
            <hr>
            {{-- <div class="product">Employee Group</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.emp_group" @if (in_array('view.emp_group', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="emp_group" data-id="">
                    <label class="custom-control-label" for="emp_group"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.emp_group" @if (in_array('create.emp_group', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="emp_group1" data-id="">
                    <label class="custom-control-label" for="emp_group1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.emp_group" @if (in_array('edit.emp_group', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="emp_group2" data-id="">
                    <label class="custom-control-label" for="emp_group2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.emp_group" @if (in_array('delete.emp_group', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="emp_group3" data-id="">
                    <label class="custom-control-label" for="emp_group3"></label>
                </div>
            </div>
            <hr> --}}
            <div class="product">Disease</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.disease" @if (in_array('view.disease', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="disease" data-id="">
                    <label class="custom-control-label" for="disease"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.disease" @if (in_array('create.disease', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="disease1" data-id="">
                    <label class="custom-control-label" for="disease1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.disease" @if (in_array('edit.disease', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="disease2" data-id="">
                    <label class="custom-control-label" for="disease2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.disease" @if (in_array('delete.disease', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="disease3" data-id="">
                    <label class="custom-control-label" for="disease3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Pataint</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.pataint" @if (in_array('view.pataint', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="pataint" data-id="">
                    <label class="custom-control-label" for="pataint"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.pataint" @if (in_array('create.pataint', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="pataint1" data-id="">
                    <label class="custom-control-label" for="pataint1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.pataint" @if (in_array('edit.pataint', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="pataint2" data-id="">
                    <label class="custom-control-label" for="pataint2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.pataint" @if (in_array('delete.pataint', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="pataint3" data-id="">
                    <label class="custom-control-label" for="pataint3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Appointment</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.appointment" @if (in_array('view.appointment', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="app" data-id="">
                    <label class="custom-control-label" for="app"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.appointment" @if (in_array('create.appointment', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="app1" data-id="">
                    <label class="custom-control-label" for="app1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.appointment" @if (in_array('edit.appointment', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="app2" data-id="">
                    <label class="custom-control-label" for="app2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.appointment" @if (in_array('delete.appointment', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="app3" data-id="">
                    <label class="custom-control-label" for="app3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Product</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.product" @if (in_array('view.product', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="product" data-id="">
                    <label class="custom-control-label" for="product"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.product" @if (in_array('create.product', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="product1" data-id="">
                    <label class="custom-control-label" for="product1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.product" @if (in_array('edit.product', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="product2" data-id="">
                    <label class="custom-control-label" for="product2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.product" @if (in_array('delete.product', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="product3" data-id="">
                    <label class="custom-control-label" for="product3"></label>
                </div>
            </div>
            <hr>
            {{-- <div class="product">Category</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.category" @if (in_array('view.category', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="category" data-id="">
                    <label class="custom-control-label" for="category"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.category" @if (in_array('create.category', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="category1" data-id="">
                    <label class="custom-control-label" for="category1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.category" @if (in_array('edit.category', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="category2" data-id="">
                    <label class="custom-control-label" for="category2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.category"  @if (in_array('delete.category', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="category3" data-id="">
                    <label class="custom-control-label" for="category3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Unit</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.unit" @if (in_array('view.unit', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="unit" data-id="">
                    <label class="custom-control-label" for="unit"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.unit" @if (in_array('create.unit', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="unit1" data-id="">
                    <label class="custom-control-label" for="unit1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.unit" @if (in_array('edit.unit', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="unit2" data-id="">
                    <label class="custom-control-label" for="unit2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.unit" @if (in_array('delete.unit', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="unit3" data-id="">
                    <label class="custom-control-label" for="unit3"></label>
                </div>
            </div>
            <hr> --}}
            <div class="product">Laboratory</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.labo" @if (in_array('view.labo', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="laboratory" data-id="">
                    <label class="custom-control-label" for="laboratory"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.labo" @if (in_array('create.labo', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="laboratory1" data-id="">
                    <label class="custom-control-label" for="laboratory1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.labo" @if (in_array('edit.labo', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="laboratory2" data-id="">
                    <label class="custom-control-label" for="laboratory2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.labo" @if (in_array('delete.labo', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="laboratory3" data-id="">
                    <label class="custom-control-label" for="laboratory3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Blog</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.blog" @if (in_array('view.blog', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="blog" data-id="">
                    <label class="custom-control-label" for="blog"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.blog" @if (in_array('create.blog', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="blog1" data-id="">
                    <label class="custom-control-label" for="blog1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.blog" @if (in_array('edit.blog', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="blog2" data-id="">
                    <label class="custom-control-label" for="blog2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.blog" @if (in_array('delete.blog', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="blog3" data-id="">
                    <label class="custom-control-label" for="blog3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Contact</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.contact" @if (in_array('view.contact', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="contact" data-id="">
                    <label class="custom-control-label" for="contact"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.contact" @if (in_array('delete.contact', $role_permissions)) checked @endif class="custom-control-input toggle-status" id="contact3" data-id="">
                    <label class="custom-control-label" for="contact3"></label>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary float-lg-right ml-1">Update</button>
            <a href="{{ route('role.index') }}" class="btn btn-secondary float-lg-right">Close</a>
        </form>
    </div>
</div>
</div>
<!-- switchery js -->
<script src="src/plugins/switchery/switchery.min.js"></script>
@endsection
