<a href="{{ $edit_route }}" title="Edit">
    <i class="dripicons-document-edit"></i>
</a>

{{ Form::open(['route' => $delete_route, 'method' => 'DELETE' ,'style' => 'display: inline','title' => 'Delete'])}}

<button type="submit" class="btn btn-link" onclick="return confirm('Are you sure want to delete?')">
    <i class="dripicons-trash"></i>
</button>

{{ Form::close() }}

