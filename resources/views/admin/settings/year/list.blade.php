<table class=" table-striped" id="table_id2">
<thead>
    <tr>
        <th>#</th>
        <th>Academic Year</th>
        <th> Created on</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($year as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->year}}</td>
        <td>{{$item->created_at}}</td>
        <td>   @include('admin.settings.year.edit')</td>
    </tr>
        
    @endforeach
</tbody>
</table>