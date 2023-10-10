<div>
    @if (session('success'))
        <div class="alert alert-success">
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <form method="POST" action="{{ route('signpad.save') }}">
        @csrf
        <div class="form-group">
            <label class="" for="">Name:</label>
            <input type="text" name="name" class="form-control" value="">
        </div>        
        <div class="form-group">
            <label>Signature:</label>
            <div id="sig"></div>                     
            <textarea id="signature" class="form-control" name="signed" style="display: none"></textarea>
        </div>
        <div class="form-group">
            <button id="clear" class="btn btn-danger">Clear</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
    <a href="{{ route('signpad.list') }}" class="btn btn-link" style="font-size: 20px; text-decoration:underline">View Signature List</a>
</div>