<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <tr>
      <th width="5%">ID</th>
      <th width="38%">Name</th>
      <th width="57%">Type</th>
      <th width="5%">City</th>
      <th width="38%">Address</th>
      <th width="57%">Latitude</th>
      <th width="5%">Longitude</th>
      <th width="38%">District</th>
      <th width="57%">Channel Name</th>
      <th width="5%">Channel Type Name</th>
      <th width="38%">Investment Type</th>
      <th width="57%">Store Type</th>
      <th width="5%">Opening Date</th>
      <th width="38%">Tax Id</th>
      <th width="57%">Staff</th>
      <th width="5%">Region</th>
    </tr>
    @foreach($data as $row)
      <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->type }}</td>
        <td>{{ $row->city }}</td>
        <td>{{ $row->address }}</td>
        <td>{{ $row->latitude }}</td>
        <td>{{ $row->longitude }}</td>
        <td>{{ $row->district }}</td>
        <td>{{ $row->channelName }}</td>
        <td>{{ $row->channelTypeName }}</td>
        <td>{{ $row->investmentType }}</td>
        <td>{{ $row->storeTypeName }}</td>
        <td>{{ $row->openingDate }}</td>
        <td>{{ $row->tax_id }}</td>
        <td>{{ $row->staff }}</td>
        <td>{{ $row->region }}</td>
      </tr>
    @endforeach
  </table>
    {!! $data->links() !!}
</div>
