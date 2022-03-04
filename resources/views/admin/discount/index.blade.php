@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    Promo Discount
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-row-reverse">
                            <a href="{{ route ('admin.discount.create') }}" class="btn btn-primary btn-sm">
                                Add Promo
                            </a>
                        </div>
                    </div>
                    @include('components.alert')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name Promo</th>
                                <th>Code</th>
                                <th>Description Promo</th>
                                <th>Percentage</th>
                                <th colspan="3">Action</th>

                            </tr>
                        </thead>
        <tbody>
            @forelse ($discounts as $discount)
                <tr>
                    <td>
                        {{ $discount->name }}
                    </td>
                    <td>
                        <span class="badge bg-warning">{{ $discount->code }}</span>
                    </td>
                    <td>
                        {{ $discount->description }}
                    </td>
                    <td>
                        <strong>{{ $discount->percentage }}%</strong>
                    </td>
                    <td>
                        <a href="{{ route('admin.discount.edit', $discount->id) }}"
                            class="btn btn-info">Edit</a>
                    </td>
                   <td>
                    <form action="{{ route('admin.discount.destroy', $discount->id) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</div>
                    </form>
                   </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        No Discount Registered
                    </td>
                </tr>
            @endforelse
        </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
