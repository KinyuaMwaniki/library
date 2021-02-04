@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Issuance Details</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="form-group col-sm-6">
                <h2>Book Title</h2>
                <p> 
                    {{ $issuance->book->title }}
                </p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>Student</h2>
                <p>{{ $issuance->student->full_name }}</p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>Date Issued</h2>
                <p>{{ $issuance->date_issued->format('Y m d') }}</p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>Date Expected</h2>
                <p>{{ $issuance->date_expected->format('Y m d') }}</p>
            </div>
            
            @if(!is_null($issuance->date_returned))
                <div class="form-group col-sm-6">
                    <h2>Date Returned</h2>
                    <p>{{ $issuance->date_returned->format('Y m d')  }}</p>
                </div>
            @endif
            <div class="form-group col-sm-12">
                <a href="{{ route('issuances.index') }}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
    
    

      <!-- Book Modal -->
      <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="bookModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection
