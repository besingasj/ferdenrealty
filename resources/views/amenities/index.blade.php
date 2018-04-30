@extends('layouts.paper')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    Amenities
                </div>
                <div class="content table-responsive">

                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('properties.amenites.new') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control border-input" placeholder="add new amenity">
                                </div>
                                <button type="submit" class="btn btn-info btn-fill btn-sm">Save</button>
                            </form>
                        </div>

                    </div>
                    <hr />
                    @if (count($amenities) > 0)
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date Created</th>
                            <th> </th>
                        </thead>
                        <tbody>
                            @foreach ($amenities as $amenity)
                            <tr>
                                <td>{{ $amenity->id }}</td>
                                <td>{{ $amenity->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($amenity->created_at)->diffForHumans(\Carbon\Carbon::now()) }}</td>
                                <td>
                                    <a href="{{ route('properties.amenities.delete', ['id' => $amenity->id]) }}" class="btn btn-danger btn-fill btn-sm">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection