@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="form-heading text-center">Fill Out the Form</h1>
                <form>
                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>

                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <!-- Address Field -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                    </div>

                    <!-- Contact Field -->
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required>
                    </div>

                    <!-- Add Instructions Field -->
                    <div class="mb-3">
                        <label for="instructions" class="form-label">Add Instructions</label>
                        <textarea class="form-control" id="instructions" name="instructions" rows="4" placeholder="Add any special instructions here" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-custom">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
