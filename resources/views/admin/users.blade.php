@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">User</h5>
        <div class="mt-2  text-left">
            <button type="submit" class="btn btn-primary me-2" wire:click.prevent='showAll' style="margin-left:20px;">All
                Users</button>
            <button type="submit" class="btn btn-primary me-2" wire:click.prevent='showToday'
                style="margin-left:20px;">Today's Approved
                Users</button>
            <button type="submit" class="btn btn-danger me-2" wire:click.prevent='showRejected'
                style="margin-left:20px;">Rejected Users</button>
        </div>
        <div class="table-responsive text-nowrap">
            <input type="search" placeholder="Search User" wire:model="search"
                style="float:right;margin-right:30px;margin-bottom:20px;">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Package</th>
                        <th>Date</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Khurram</strong></td>
                        <td><span class="badge bg-label-primary me-1">khurram@gmail.com</span></td>
                        <td><span class="badge bg-label-primary me-1">03001234567</span></td>
                        <td><span class="badge bg-label-success me-1">Silver</span></td>
                        <td><span class="badge bg-label-success me-1">25-04-2024</span></td>
                        
                                 
    
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection