<!-- resources/views/designs/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Design</h1>
        <form action="{{ route('designs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="designer_id">Designer</label>
                <select name="designer_id" id="designer_id" class="form-control" required>
                    <!-- Options de designers -->
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <!-- Options de categories -->
                </select>
            </div>
            <div class="form-group">
                <label for="type_id">Type</label>
                <select name="type_id" id="type_id" class="form-control" required>
                    <!-- Options de types -->
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
