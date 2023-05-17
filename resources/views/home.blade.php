@extends('layouts.master')

@section('content')

<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      @include('partials.__flash-message')
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-lg-6">
      <div class="card shdaow-sm border border-2 h-100">
        <div class="card-header">
          <h5 class="m-0 text-center">Transaction</h5>
        </div>
        <div class="card-body">
          <form action="" method="post">
            @csrf
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="account_id" class="form-label">Account <span class="text-danger">*</span></label>
                  <select class="form-select shadow-none" id="account_id" name="account_id">
                    <option value="">Select account...</option>
                    @foreach($accounts as $account)
                    <option {{ old('account_id') == $account['id'] ? "selected" : "" }} value="{{ $account['id'] }}">{{ $account['name'] }}</option>
                    @endforeach
                  </select>
                  <div id="accountHelp" class="form-text text-danger">
                    @error('account_id')
                    {{ $message }}
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                  <input type="date" class="form-control shadow-none" id="date" name="date" value="{{ old('date') }}">
                  <div id="dateHelp" class="form-text text-danger">
                    @error('date')
                    {{ $message }}
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                  <select class="form-select shadow-none" id="type" name="type">
                    <option value="">Select type...</option>
                    <option value="1">Send</option>
                    <option value="2">Received</option>
                  </select>
                  <div id="typeHelp" class="form-text text-danger">
                    @error('type')
                    {{ $message }}
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label for="amount" class="form-label">Amount <span class="text-danger">*</span></label>
                  <input type="text" class="form-control shadow-none" id="amount" name="amount" placeholder="Ex: 15350" value="{{ old('amount') }}">
                  <div id="emailHelp" class="form-text text-danger">
                    @error('amount')
                    {{ $message }}
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit <i class="bi bi-save"></i></button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="card h-100">
        <div class="card-header">
          <h5 class="m-0 text-center">Accounts</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
              <thead class="text-center">
                <tr>
                  <th class="col-1">#</th>
                  <th class="col-9">Name</th>
                  <th class="col-2">Balance</th>
                </tr>
              </thead>
              <tbody>
                @foreach($accounts as $account)
                <tr class="text-center">
                  <td>{{ $account['id'] }}</td>
                  <td class="text-start">{{ $account['name'] }}</td>
                  <td>{{ $account['balance'] }}/=</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection