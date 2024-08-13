 
@foreach($tar as $child)
<tr bgcolor="#fff">
   
    
    <td>{{ $child->kode }}.</td>
    <td><span style="padding-left:0px;">{{ $child->nama }}</span></td>
    <td><span style="padding-left:0px;">{{ $child->sumber }}</span></td>
    <td><span style="padding-left:0px;">{{ $child->satuan }}</span></td>
    
    
    <td><a class="btn btn-success btn-xs" href="{{ URL::to('/admin/editinstansi/'.$child->id) }}"><i class="fa fa-edit"></i> Edit</a>
        <a class="btn btn-danger btn-xs" href="{{ URL::to('/admin/delinstansi/'.$child->id_instansi_jenis.'/'.$child->id) }}"><i class="fa fa-trash"></i> Delete</a>
          
        </td>
</tr>
    
@endforeach
 