@extends('layouts.master')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <div class="text-center mb-3">
        <h3 class="d-inline-block border-bottom pb-2 border-dark border-3">About This Project</h3>
      </div>
      <p class="m-0"><span class="fw-bold">Application Name:</span> Application for Accounting System (Interview test)</p>
      <p class="m-0"><span class="fw-bold">Mailed By:</span> dongyi.hk</p>
      <p class="m-0"><span class="fw-bold">Signed By:</span> dongyi-hk.20221208.gappssmtp.com</p>
      <p class="m-0"><span class="fw-bold">Mailed Date:</span> May 15, 2023</p>
      <p class="m-0"><span class="fw-bold">Submitted Date:</span> May 15, 2023 between May 23, 2023</p>
      <p class="m-0"><span class="fw-bold">Task Requirment:</span> You are required to create an accounting system using Laravel framework that has the following features: <br>

        1. Database schema: Create a database schema with two tables - 'accounts' and 'transactions'. The 'accounts' table should have columns for 'id', 'name', and 'balance'. The 'transactions' table should have columns for 'id', 'account_id', 'amount', 'type', and 'date'. The 'account_id' column in the 'transactions' table should be a foreign key that references the 'id' column in the 'accounts' table. <br>
        2. Migration: Create a migration to create the 'accounts' and 'transactions' tables in the database. <br>
        3. Seeder: Create a seeder to populate the 'accounts' table with some sample data. The sample data should include at least 5 accounts with unique names and random balances. <br>
        4. Route: Create a route to display a list of accounts with their balances. The route should display a table with columns for 'name' and 'balance', and each row should display the name and balance of one account. <br>
        5. Add validation to the 'transactions' table to ensure that the 'amount' column is always positive. <br>
        6. Add a form to the route to allow users to add new transactions to an account. The form should have fields for 'account', 'amount', 'type', and 'date'. When the form is submitted, a new transaction should be added to the 'transactions' table and the 'balance' column in the 'accounts' table should be updated accordingly.</p>
    </div>
  </div>
</div>
@endsection