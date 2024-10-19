<x-dashboard-layout>
    @push('styles')
    <style>

</style>
@endpush

<div class="col-span-12">
    <div class="card">
      <div class="card-header">
        <h5>Contextual Classes</h5>
        <span class="d-block m-t-5">
          For Make row Contextual add Contextual class like
          <code class="text-danger-400 text-sm">.table-success</code>
          in
          <code class="text-danger-400 text-sm">tr tag</code>
          and For cell add Contextual class in
          <code class="text-danger-400 text-sm">td or th tag</code>
          .
        </span>
      </div>
      <div class="card-body table-border-style">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-secondary-500/20">
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>

              <tr class="bg-danger-500/20">
                <td>7</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr class="bg-info-500/20">
                <td>9</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


</x-dashboard-layout>
