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
        <form action="{{ route('store_role') }}" method="POST" class="">
            @csrf
            <div class="clearfix">
                <div class="">
                    <div class="form-group col-12">
                        <label for="">Role Name</label>
                        <input type="text" name="name" class="form-control" style="position: relative;left:-12px" placeholder="Enter name">
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
                    <input type="checkbox" name="permissions[]" value="view.dash" class="custom-control-input toggle-status" id="dashboard" data-id="">
                    <label class="custom-control-label" for="dashboard"></label>
                </div>
            </div>
            <hr>
            <div class="user mt-4">User</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.user" class="custom-control-input toggle-status" id="customSwitches" data-id="">
                    <label class="custom-control-label" for="customSwitches"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.user" class="custom-control-input toggle-status" id="customSwitches1" data-id="">
                    <label class="custom-control-label" for="customSwitches1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.user" class="custom-control-input toggle-status" id="customSwitches2" data-id="">
                    <label class="custom-control-label" for="customSwitches2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.user" class="custom-control-input toggle-status" id="customSwitches3" data-id="">
                    <label class="custom-control-label" for="customSwitches3"></label>
                </div>
            </div>
            <hr>
            <div class="user">Role</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.role" class="custom-control-input toggle-status" id="role" data-id="">
                    <label class="custom-control-label" for="role"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.role" class="custom-control-input toggle-status" id="role1" data-id="">
                    <label class="custom-control-label" for="role1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.role" class="custom-control-input toggle-status" id="role2" data-id="">
                    <label class="custom-control-label" for="role2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.role" class="custom-control-input toggle-status" id="role3" data-id="">
                    <label class="custom-control-label" for="role3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Employee</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.emp" class="custom-control-input toggle-status" id="emp" data-id="">
                    <label class="custom-control-label" for="emp"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.emp" class="custom-control-input toggle-status" id="emp1" data-id="">
                    <label class="custom-control-label" for="emp1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.emp" class="custom-control-input toggle-status" id="emp2" data-id="">
                    <label class="custom-control-label" for="emp3"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.emp" class="custom-control-input toggle-status" id="emp3" data-id="">
                    <label class="custom-control-label" for="emp3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Disease</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.disease" class="custom-control-input toggle-status" id="disease" data-id="">
                    <label class="custom-control-label" for="disease"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.disease" class="custom-control-input toggle-status" id="disease1" data-id="">
                    <label class="custom-control-label" for="disease1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.disease" class="custom-control-input toggle-status" id="disease2" data-id="">
                    <label class="custom-control-label" for="disease2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.disease" class="custom-control-input toggle-status" id="disease3" data-id="">
                    <label class="custom-control-label" for="disease3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Pataint</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.pataint" class="custom-control-input toggle-status" id="pataint" data-id="">
                    <label class="custom-control-label" for="pataint"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.pataint" class="custom-control-input toggle-status" id="pataint1" data-id="">
                    <label class="custom-control-label" for="pataint1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.pataint" class="custom-control-input toggle-status" id="pataint2" data-id="">
                    <label class="custom-control-label" for="pataint2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.pataint" class="custom-control-input toggle-status" id="pataint3" data-id="">
                    <label class="custom-control-label" for="pataint3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Appointment</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.appointment" class="custom-control-input toggle-status" id="app" data-id="">
                    <label class="custom-control-label" for="app"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.appointment" class="custom-control-input toggle-status" id="app1" data-id="">
                    <label class="custom-control-label" for="app1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.appointment" class="custom-control-input toggle-status" id="app2" data-id="">
                    <label class="custom-control-label" for="app2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.appointment" class="custom-control-input toggle-status" id="app3" data-id="">
                    <label class="custom-control-label" for="app3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Product</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.product" class="custom-control-input toggle-status" id="product" data-id="">
                    <label class="custom-control-label" for="product"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.product" class="custom-control-input toggle-status" id="product1" data-id="">
                    <label class="custom-control-label" for="product1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.product " class="custom-control-input toggle-status" id="product2" data-id="">
                    <label class="custom-control-label" for="product2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.product" class="custom-control-input toggle-status" id="product3" data-id="">
                    <label class="custom-control-label" for="product3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Laboratory</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.labo" class="custom-control-input toggle-status" id="laboratory" data-id="">
                    <label class="custom-control-label" for="laboratory"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.labo" class="custom-control-input toggle-status" id="laboratory1" data-id="">
                    <label class="custom-control-label" for="laboratory1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.labo" class="custom-control-input toggle-status" id="laboratory2" data-id="">
                    <label class="custom-control-label" for="laboratory2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.labo" class="custom-control-input toggle-status" id="laboratory3" data-id="">
                    <label class="custom-control-label" for="laboratory3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Blog</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.blog" class="custom-control-input toggle-status" id="blog" data-id="">
                    <label class="custom-control-label" for="blog"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Create</label>
                    <input type="checkbox" name="permissions[]" value="create.blog" class="custom-control-input toggle-status" id="blog1" data-id="">
                    <label class="custom-control-label" for="blog1"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Edit</label>
                    <input type="checkbox" name="permissions[]" value="edit.blog" class="custom-control-input toggle-status" id="blog2" data-id="">
                    <label class="custom-control-label" for="blog2"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.blog" class="custom-control-input toggle-status" id="blog3" data-id="">
                    <label class="custom-control-label" for="blog3"></label>
                </div>
            </div>
            <hr>
            <div class="product">Contact</div>
            <div class="row">
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">View</label>
                    <input type="checkbox" name="permissions[]" value="view.contact" class="custom-control-input toggle-status" id="contact" data-id="">
                    <label class="custom-control-label" for="contact"></label>
                </div>
                <div class="custom-control col-3 custom-switch">
                    <label for="" style="position: absolute">Delete</label>
                    <input type="checkbox" name="permissions[]" value="delete.contact" class="custom-control-input toggle-status" id="contact3" data-id="">
                    <label class="custom-control-label" for="contact3"></label>
                </div>
            </div>
            <hr>
            <button class="btn btn-success float-lg-right ml-2">Save</button>
            <a href="{{ route('role.index') }}" class="btn btn-secondary float-lg-right">Cancel</a>
        </form>
    </div>
</div>
<!-- switchery js -->
<script src="src/plugins/switchery/switchery.min.js"></script>
@endsection
