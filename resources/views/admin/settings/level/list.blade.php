<table class=" table-striped" id="table_id">
<thead>
    <tr>
        <th>#</th>
        <th>Academic Level</th>
        <th> Created on</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($level as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->level}}</td>
        <td>{{$item->created_at}}</td>
        <td>   @include('admin.settings.level.edit')</td>
    </tr>
        
    @endforeach
</tbody>
</table>