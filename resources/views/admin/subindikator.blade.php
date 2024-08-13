 
@foreach($tar as $child)
<tr bgcolor="#fff">
   
    
    <td>{{ $child->kode }}</td>
    <td><span style="padding-left:0px;">{{ $child->nama }}</span></td>
    <td ><span style="padding-left:0px;">{{ $child->sumber }}</span></td>
    <td><span style="padding-left:0px;">{{ $child->satuan }}</span></td>
    
    
    <td class="col-2"><a class="btn btn-success btn-xs" href="{{ URL::to('/admin/editindikator/'.$child->id) }}"><i class="fa fa-edit"></i> Edit</a>
        <a class="btn btn-danger btn-xs" href="{{ URL::to('/admin/delindikator/'.$child->id) }}"><i class="fa fa-trash"></i> Del</a>
          
        </td>
</tr>
    
@endforeach
 