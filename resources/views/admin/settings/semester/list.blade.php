<table id="table_id1" class=" table-striped" >
<thead>
    <tr>
        <th>#</th>
        <th>Academic Semester</th>
        <th> Created on</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($semester as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->semester}}</td>
        <td>{{$item->created_at}}</td>
        <td>   @include('admin.settings.semester.edit')</td>
    </tr>
        
    @endforeach
</tbody>
</table>