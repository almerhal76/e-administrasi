@extends('layouts/layoutMaster')

@section('title', 'Invoice List - Pages')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/app-invoice-list.js')
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Invoice /</span> List
</h4>

<!-- Invoice List Widget -->

<div class="card mb-4">
  <div class="card-widget-separator-wrapper">
    <div class="card-body card-widget-separator">
      <div class="row gy-4 gy-sm-1">
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
            <div>
              <h3 class="mb-1">24</h3>
              <p class="mb-0">Clients</p>
            </div>
            <div class="avatar me-sm-4">
              <span class="avatar-initial rounded bg-label-secondary">
                <i class="mdi mdi-account-outline text-heading mdi-20px"></i>
              </span>
            </div>
          </div>
          <hr class="d-none d-sm-block d-lg-none me-4">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
            <div>
              <h3 class="mb-1">165</h3>
              <p class="mb-0">Invoices</p>
            </div>
            <div class="avatar me-lg-4">
              <span class="avatar-initial rounded bg-label-secondary">
                <i class="mdi mdi-content-paste text-heading mdi-20px"></i>
              </span>
            </div>
          </div>
          <hr class="d-none d-sm-block d-lg-none">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
            <div>
              <h3 class="mb-1">$2.46k</h3>
              <p class="mb-0">Paid</p>
            </div>
            <div class="avatar me-sm-4">
              <span class="avatar-initial rounded bg-label-secondary">
                <i class="mdi mdi-currency-usd text-heading mdi-20px"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h3 class="mb-1">$876</h3>
              <p class="mb-0">Unpaid</p>
            </div>
            <div class="avatar">
              <span class="avatar-initial rounded bg-label-secondary">
                <i class="mdi mdi-currency-usd-off text-heading mdi-20px"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Invoice List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="invoice-list-table table">
      <thead class="table-light">
        <tr>
          <th></th>
          <th></th>
          <th>#ID</th>
          <th><i class='mdi mdi-trending-up'></i></th>
          <th>Client</th>
          <th>Total</th>
          <th class="text-truncate">Issued Date</th>
          <th>Balance</th>
          <th>Invoice Status</th>
          <th class="cell-fit">Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
@endsection
