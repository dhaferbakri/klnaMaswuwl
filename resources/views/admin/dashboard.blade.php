@extends('layouts.admin')

@section('content')


    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
<div class="row">
    <div class="col-sm-3 text-center">
        <div class="alert alert-dark" role="alert">
        <i class="fab fa-creative-commons-by fa-3x"></i>
            <p class="h3 py-2">Users</p>
            <p class="h5">67543</p>
        </div>
    </div>
    <div class="col-sm-3 text-center">
        <div class="alert alert-success" role="alert">
            <i class="fab fa-creative-commons-sampling fa-3x"></i>
            <p class="h3 py-2">Active</p>
            <p class="h5">67543</p>
        </div>
    </div>
    <div class="col-sm-3 text-center">
        <div class="alert alert-danger" role="alert">
        <i class="fab fa-creative-commons-sa fa-3x"></i>
            <p class="h3 py-2">Inactive</p>
            <p class="h5">67543</p>
        </div>
    </div>
    <div class="col-sm-3 text-center">
        <div class="alert alert-info" role="alert">
        <i class="fab fa-creative-commons-share fa-3x"></i>
            <p class="h3 py-2">Inprogress</p>
            <p class="h5">67543</p>
        </div>
    </div>
</div>
<!-- <h1 class="h2 py-5">Report</h1>
<div class="row">
    <div class="col-6 row">
        <div class="col-4">
            <p>Riyadh</p>
        </div>
        <div class="progress col-8">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="col-4">
            <p>Dammam</p>
        </div>
        <div class="progress col-8">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="col-4">
            <p>Abha</p>
        </div>
        <div class="progress col-8">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="col-4">
            <p>Qassim</p>
        </div>
        <div class="progress col-8">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <div class="col-6">
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </div>
</div> -->

<h2>All Users</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>ID</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1234</td>
            <td>Dhafer</td>
            <td>1000000021</td>
            <td>0512346789</td>
            <td>Riyadh</td>
        </tr>
        <tr>
            <td>1235</td>
            <td>Abdulaziz</td>
            <td>1000000022</td>
            <td>0598764321</td>
            <td>An Namas</td>
        </tr>
        </tbody>
    </table>
</div>

<h2 class="text-success pt-5"> Active</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>ID</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1234</td>
            <td>Dhafer</td>
            <td>1000000021</td>
            <td>0512346789</td>
            <td>Riyadh</td>
        </tr>
        </tbody>
    </table>
</div>

<h2 class="text-danger pt-5">Inactive</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>ID</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1234</td>
            <td>Dhafer</td>
            <td>1000000021</td>
            <td>0512346789</td>
            <td>Riyadh</td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
