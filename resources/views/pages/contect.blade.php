@extends('layout.main')

@section('content')
    
    <div class="card">
        <div class="card-header">
            Contect us
        </div>
        <div class="card-body">
        
            <form>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="content" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>

@endsection