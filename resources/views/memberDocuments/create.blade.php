
@section('content')
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/documents" method="POST">
            @csrf
            <input type="hidden" name="member_id" class="form-control" value="{{$member->id}}">
            <div class="form-group col-md-6">
                <label for="memberName">Member Name</label>
                <input  class="form-control" value="{{$member->member_first_name}} {{$member->member_last_name}}" readOnly>
            </div>
            <div class="form-group col-md-6">
                <label for="memberNumber">Member Number</label>
                <input  class="form-control" value="{{$member->member_number}}" readOnly>
            </div>
            <div class="form-group col-md-6">
                <br>
                <label for="memberDocument">Select Document Type</label>
                <select name="document_type_id" class="form-control">
                @foreach($memberdocumenttypes as $memberdocumenttype)
                <option value="{{$memberdocumenttype->id}}">{{$memberdocumenttype->document_type_name}}</option>
                @endforeach
            </div>
            <div class="form-group col-md-6">
                <label for="document">Select document to upload</label>
                <input class="form-control" type="file" name="document_name">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input class="btn btn-primary sm" name="submit" value="Upload Image" type="submit">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
